<?php
include_once('config.php');
$info=[];
//recebendo o valor dop id da url
$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

if($id){
    $sql = $pdo->prepare('DELETE FROM cadastro WHERE `ID-CLIENTE`= :id');
    $sql ->bindValue(':id' , $id);
    $sql ->execute();
}

header("Location: listagem.php");
exit;

