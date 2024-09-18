<?php
include_once 'config.php';
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
        <h1>Já possui uma conta?</h1>
        <p class="paragrafo">Os especialistas da KSI Cobrança cuidam de tudo para sua imobiliária ter rentabilidade. Equipe dedicada para a cobrança de locativos não pagos e assessoria jurídica para evitar conflitos e custos processuais desnecessários, tudo 100% integrado ao KSI.</p>
        <div class="parte-inf">
            <a href="login.php" class="botao-titulo">Acesse sua conta</a>
            <img src="img/logo-ksi-cobranca.png" class="imagem-vizinha-botao" >
        </div>
        

      </div>
    
    </section>  
  
    <section class="direita">
           
     <form  method="POST" action="<?php echo $_SERVER['PHP_SELF']?>" > 
        <img src="img/logo-sistema-imobiliaria.png" class="imagem" >
        <h3>Cadastre-se</h3>
        <div class="form-content"> 
          <input type="text" name="nameForm" id="nameForm" placeholder="Usuário" class="required"  oninput="nameValidation()">
          <p class="span-message"><span>Mínimo 4 caracteres</span></p>

        </div>
          
        <div class="form-content">
          <input type="text" name="emailForm" id="emailForm" placeholder="Email" class="required"  oninput="emailValidation()">
          <p class="span-message"><span>Insira um email valido</span></p>

        </div>

        <div class="form-content">
          <input type="password" name="senhaForm" id="senhaForm" placeholder="Senha" class="required"  oninput="senhaValidation()">
          <p class="span-message"><span>Insira uma senha válida</span></p>
        </div>

        
        <div class="form-content">
          <input type="password" name="senhaConfForm" id="senhaConfForm" placeholder="Confirme sua senha" class="required"  oninput="senhaConfValidation()">
          <p class="span-message"><span>As senhas devem coincidir</span></p>
        </div>

        <div > <input type="submit" id="submitID" name="submitForm" value="Enviar" class="form-submit" ></div>
        
       
      </form>
   
    </section>
  </section>

  <script src="validacao.js"></script>

</body>
</html>

<?php
    $name = filter_input(INPUT_POST, 'nameForm');
    $email = filter_input(INPUT_POST, 'emailForm', FILTER_SANITIZE_EMAIL);
    $senha = filter_input(INPUT_POST, 'senhaConfForm');


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

         }else{
            echo 'Email já cadastrado';
         }


    } else{
        echo 'Não foi possivel cadastrar usuario';
    }
?>