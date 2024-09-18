<?php
include_once('config.php');
?>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
    <label for="nomeUsuario">Nome:</label>
    <input type="text" id="nomeUsuario" name="nomeUsuario">
    <label for="emailUsuario">Email:</label>
    <input type="text" id="emailUsuario" name="emailUsuario">
    <label for="senhaUsuario">Senha:</label>
    <input type="password" id="senhalUsuario" name="senhaUsuario">
    <input type="submit" placeholder="Enviar">
</form>

<?php
    $name = filter_input(INPUT_POST, 'nomeUsuario');
    $email = filter_input(INPUT_POST, 'emailUsuario', FILTER_SANITIZE_EMAIL);
    $senha = filter_input(INPUT_POST, 'senhaUsuario');


    if($name && $senha && $email){
        $sql = $pdo->prepare('SELECT * FROM cadastro WHERE EMAIL= :email');
        $sql ->bindValue(':email', $email);
        $sql ->execute();

         if($sql->rowCount()===0){
    

            $sql= $pdo->prepare('INSERT INTO cadastro (NOMES, EMAIL, SENHAS) VALUES (:name, :email, :senha)');
            $sql ->bindValue(':name', $name);
            $sql ->bindValue(':email', $email);
            $sql ->bindValue(':senha', $senha);
            $sql ->execute();

            header("Location: listagem.php");
            exit;

         }else{
            echo 'Email já cadastrado';
         }


    } else{
        echo 'Não foi possivel cadastrar usuario';
    }
?>