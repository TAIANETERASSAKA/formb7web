<?php
include_once('config.php');
$info=[];
//recebendo o valor dop id da url
$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

if($id){
 
$sql = $pdo->prepare("SELECT * FROM cadastro WHERE `ID-CLIENTE`= :id");
    $sql ->bindValue(':id' , $id);
    $sql ->execute();

    if($sql->rowCount()>0){
        //echo 'ID ENCONTRADO'; testando se encontra ID existente
        $info = $sql->fetch(PDO::FETCH_ASSOC); //RETORNANDO OS VALORES GUARDADOS NO SQL PARA VARIAVEL INFO

    }else{
        //quando ele apesar de receber umid pela url, esse id não é encontrado no bando
        header("Location: listagem.php");
        exit;
    }

} else{
    //quando ele nao receber nenhum id pela url, ele volta automaticamente para aba de listagem
    header("Location: listagem.php");
    exit;
}

?>
<h1>Editar cadastro</h1>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'] . '?id=' . $id; ?>">
    <input type="hidden" name="id" value="<?php echo $info['ID-CLIENTE']?>">
    <label for="nomeUsuario">Nome:</label>
    <input type="text" id="nomeUsuario" name="nomeUsuario" value="<?php echo $info['NOMES']?>">
    <label for="emailUsuario">Email:</label>
    <input type="text" id="emailUsuario" name="emailUsuario" value="<?php echo $info['EMAIL']?>">
    <input type="submit" placeholder="Salvar">
</form>

<?php
    $name = filter_input(INPUT_POST, 'nomeUsuario');
    $email = filter_input(INPUT_POST, 'emailUsuario', FILTER_SANITIZE_EMAIL);
    $id = filter_input(INPUT_POST, 'id');


    if($name && $email && $id){
        $sql = $pdo->prepare('UPDATE cadastro SET NOMES = :name, EMAIL= :email WHERE `ID-CLIENTE` = :id');
        $sql ->bindValue(':email', $email);
        $sql ->bindValue(':name', $name);
        $sql ->bindValue(':id', $id);
        $sql ->execute();
        header("Location: listagem.php");
        exit;

    } else{
        echo 'Não foi possivel editar usuario';
    }
?>
