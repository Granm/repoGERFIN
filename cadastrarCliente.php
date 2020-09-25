<!DOCTYPE html>
<html lang="pt-br">
<head>
	<link href="assets/css/style.css" rel="stylesheet">
	<title>Menu</title>
</head>

<body>
	
	<nav class="menu" id="cliente">
		<ul>
			<h1 align="center">GERFIN</h1>
			<li><a href="" class="voltar">Voltar</a></li>
			<li><a href="">Novo</a></li>
			<li><a href="">Consulta</a></li>
		</ul>
		</nav>
		<h1 class="tit">Cadastro</h1> 
<div class="cadastro">
	
	<form method="post" action=""> 
		
		<p> 
		  <label for="nome">Nome:</label><br>
		  <input id="nome" name="nome" required="required" type="text" placeholder="nome" />
		</p>
		<p> 
			<label for="CPFCNPJ">CPF/CNPJ:</label><br>
			<input id="CPFCNPJ" name="CPFCNPJ" required="required" type="text" placeholder="99 999 999 999"/> 
		  </p>
		 
		<p> 
		  <label for="email">e-mail:</label><br>
		  <input id="email" name="email" required="required" type="email" placeholder="contato@htmlecsspro.com"/> 
		</p>
		<p> 
			<label for="endereco">endereço:</label><br>
			<input id="endereco" name="endereco" required="required" type="text" placeholder="contato@htmlecsspro.com"/> 
		  </p>
		 
		<p> 
		  <label for="contatoDireto">Contato direto:</label><br>
		  <input id="contatoDireto" name="contatoDireto" required="required" type="text" placeholder="01/01/2000"/>
		</p>
		<p> 
			<label for="telefone">Telefone:</label><br>
			<input id="telefone" name="telefone" required="required" type="text" placeholder="99999 9999" />
		</p>
		<p> 
			<label for="inscri">Inscrição estadual:</label><br>
			<input id="inscri" name="inscri" required="required" type="text" placeholder="999999"/>
		  </p>
		  
		<p> 
		  <input  type="submit" value="Cadastrar"/> 
		</p>
</div>
	
</body>
</html>