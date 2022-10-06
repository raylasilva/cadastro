<?php
 $nome = $_POST["txt_nome"];
 $email = $_POST["txt_email"];
 $senha = $_POST["psw_senha"];
 $rua = $_POST["txt_rua"];
 $bairro = $_POST["txt_bairro"];
 $cidade = $_POST["txt_cidade"];
 $estado = $_POST["txt_estado"];
 $cep = $_POST["number_cep"];

?>
 <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro efetuado</title>
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  
 
  
  <body>
  
 <div class="container" >
 <b> <h1 class= "text-success">Obrigado por cadastrar</h1>
 
 <div class="alert alert-secondary" role="alert">

<?php echo "" .$nome?> 
</div>
<br>
<div class="alert alert-secondary" role="alert">
<?php echo "" .$email?> 
</div>

 <br>
 <div class="alert alert-secondary" role="alert">
 <?php echo "" .$senha?>  
</div>
 <br>

 
 <div class="alert alert-secondary" role="alert">
 <?php echo "" .$rua?>  
</div>

 <br>

 <div class="alert alert-secondary" role="alert">
 <?php echo "" .$bairro?>  
</div>
<br>

 <div class="alert alert-secondary" role="alert">
 <?php echo "" .$cidade?>  
</div> 
<br>
 

<br>
 <div class="alert alert-secondary" role="alert">
 <?php echo "" .$estado?>  
</div>


<br>
 <div class="alert alert-secondary" role="alert">
 <?php echo "" .$cep?>  
</div>

<center>
<div class="botao">
<P><button class="btn btn-primary" type="submit">ENVIAR</button>   <button class="btn btn-outline-PRIMARY" type="reset">CANCELAR</button>
</div>

</div>

  </body>
</nav>
</html>


