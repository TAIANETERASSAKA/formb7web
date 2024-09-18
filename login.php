<?php 
include_once 'config.php';
$retorno = [];
 $email = trim(filter_input(INPUT_POST, 'emailForm', FILTER_SANITIZE_EMAIL));
 $senha = filter_input(INPUT_POST, 'senhaConfForm');

if((!empty($senha)) && (!empty($email))){

    $sql = $pdo->prepare('SELECT * FROM cadastro WHERE EMAIL= :email');
    $sql ->bindValue(':email', $email);
    $sql ->execute();

    if($sql->rowCount() > 0){

        $sql = $pdo->prepare('SELECT * FROM cadastro WHERE EMAIL= :email && SENHAS= :senha');
        $sql ->bindValue(':senha', $senha);
        $sql ->bindValue(':email', $email);
        $sql ->execute();

        if($sql->rowCount()>0){
            $retorno = $sql->fetch(PDO::FETCH_ASSOC);
            header("Location: posLogin.php");
            echo "Olá $retorno[NOMES]";
            exit;


        }else{
            echo 'senha invalida';
    
        }
        
     }else{
        echo 'email nao cadastrado';
 
   }

   echo var_dump($sql->fetch(PDO::FETCH_ASSOC));

}else{
    echo 'todos campos devem ser preenchidos';
}
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="styles.css" media="screen" />
</head>

<body>
  <section class="inicial">
    
    <section class="esquerda">
      <div class="card">
        <h1>Não possui uma conta?</h1>
        <p class="paragrafo">Os especialistas da KSI Cobrança cuidam de tudo para sua imobiliária ter rentabilidade. Equipe dedicada para a cobrança de locativos não pagos e assessoria jurídica para evitar conflitos e custos processuais desnecessários, tudo 100% integrado ao KSI.</p>
        <div class="parte-inf">
            <a href="index.php" class="botao-titulo">Cadastre-se</a>
            <img src="img/logo-ksi-cobranca.png" class="imagem-vizinha-botao" >
        </div>
        

      </div>
    
    </section>  
  
    <section class="direita">
           
     <form  method="POST" action="<?php echo $_SERVER['PHP_SELF']?>" > 
        <img src="img/logo-sistema-imobiliaria.png" class="imagem" >
        <h3>Faça seu login</h3>
          
        <div class="form-content">
          <input type="text" name="emailForm" id="emailForm" placeholder="Email cadastrado" class="required"  >
          <p class="span-message"><span>Insira um email valido</span></p>

        </div>

        
        <div class="form-content">
          <input type="password" name="senhaConfForm" id="senhaConfForm" placeholder="Confirme sua senha" class="required" >
          <p class="span-message"><span>As senhas devem coincidir</span></p>
        </div>

        <div > <input type="submit" id="submitID" name="submitForm" value="Entrar" class="form-submit" ></div>       
       
      </form>
   
    </section>
  </section>


</body>

</html>

      
       



