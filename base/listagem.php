<?php
include_once('config.php');
  $lista =[];
// o comando query recebe um comando sql
// pdo possibilita que o query receba um comando slq
// $sql guarda valor gerado pelo comando sql
$sql = $pdo->query('SELECT * FROM cadastro');

// o comando fetchAll ele esta retornando o valor guardado em $sql, uma vez que o $sql só guarda 
// criamos uma variavel $result para receber os valores retornado por fechAll
// fetch_assoc faz com que a maneira que ele ira ser retornado, usara os nomes da tabela cadastro como indices

if($sql->rowCount()>0){
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}

?>


<table border="1">
    <tr>
        <td>ID</td>
        <td>Nome</td>
        <td>Email</td>
        <td>Ações</td>
    </tr>

    <?php foreach($lista as $usuario): ?>

    <tr>
        <td> <?php echo $usuario['ID-CLIENTE']?>   </td>
        <td> <?php echo $usuario['NOMES']?></td>
        <td> <?php echo $usuario['EMAIL']?></td>
        <td>
            <a href="editar.php?id=<?php echo $usuario['ID-CLIENTE']?>">Editar</a>
            <a href="excluir.php?id=<?php echo $usuario['ID-CLIENTE']?>">Excluir</a>
        </td>
    </tr>

    
    <?php endforeach ?>
</table>

