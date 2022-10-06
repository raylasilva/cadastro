<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro para entrega</title>
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  
 
  
  <body>
  <form method="Post" action="receber.php">
 <div class="container">
 <b> <h1 class="text-info">Cadastro para entrega</h1>
 <input type="text" id="nome" placeholder= "Nome: " name="txt_nome" class="form-control" aria-label="Text input with checkbox">
 <br>
 <input type="email" id="email" placeholder="example@email.com: "  name="txt_email" class="form-control" aria-label="Text input with checkbox"> 
 <br>
 <input type="password" id="senha" placeholder="Senha: " name="psw_senha" class="form-control" aria-label="Text input with checkbox">
 <br>
 <input type="text" id="rua" placeholder="Rua: " name="txt_rua" class="form-control" aria-label="Text input with checkbox">
 <br>
 <input type="text" id="bairro" placeholder="Bairro: " name="txt_bairro" class="form-control" aria-label="Text input with checkbox">
 <br>
 <input type="text" id="cidade" placeholder="Cidade: " name="txt_cidade" class="form-control" aria-label="Text input with checkbox">
 <br>
 

<div placeholder= "Estado" class="input-group">
  <select class="form-select" placeholder="Estado:" id="estado" name="txt_estado" aria-label="Example select with button addon">
    <option selected value="Estado: " > </option>
    <option value=" Minas Gerais">Minas Gerais</option>
    <option value="Rio de Janeiro">Rio de Janeiro</option>
    <option value="São Paulo">São Paulo</option>
  </select>
 
</div>
<br>
<input type="number" placeholder="Cep: " name="number_cep" class="form-control" aria-label="Text input with checkbox">
<br>
<center>
<div class="botao">
<P><button class="btn btn-primary" type="submit">ENVIAR</button>   <button class="btn btn-outline-PRIMARY" type="reset">CANCELAR</button>
</div>

</div>
</form>
  </body>
</nav>
</html>

