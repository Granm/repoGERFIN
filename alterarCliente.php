<?php
require 'Cliente.class.php';
require 'conexaoDB.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<link href="assets/css/style.css" rel="stylesheet">
	<title>Menu</title>
</head>

<body>
	
	<?php require 'menu.php';?>
		
	<h1 class="tit">Alterar Cliente</h1> 
	<?php
		$c=new Cliente;
		$c->consultarCliente($_GET['idCliente']);
	?>
		
	<div class="cadastro">
		
		<form method="post" action="alterarClienteSalvar.php"> 
			<p> 
				<label for="txtRazaoSocial">Nome:</label><br>
				<input id="txtRazaoSocial" name="txtRazaoSocial" required="required" value="<?=$c->txtRazaoSocial?>" type="text" placeholder="nome" />
			</p>
			<p> 
				<label for="txtCNPJ">CPF/CNPJ:</label><br>
				<input id="txtCNPJ" name="txtCNPJ" required="required" value="<?=$c->txtCNPJ?>" type="text" placeholder="99 999 999 999"/> 
			</p>
			<p> 
				<label for="txtEmail">e-mail:</label><br>
				<input id="txtEmail" name="txtEmail" required="required" type="email" value="<?=$c->txtEmail?>" placeholder="contato@htmlecsspro.com"/> 
			</p>
			<p> 
				<label for="txtEndereco">endereço:</label><br>
				<input id="txtEndereco" name="txtEndereco" required="required" type="text" value="<?=$c->txtEndereco?>" placeholder="contato@htmlecsspro.com"/> 
			</p>
			<p> 
				<label for="txtContatoDireto">Contato direto:</label><br>
				<input id="txtContatoDireto" name="txtContatoDireto" required="required" value="<?=$c->txtContatoDireto?>" type="text" placeholder="01/01/2000"/>
			</p>
			<p> 
				<label for="txtTelefone">Telefone:</label><br>
				<input id="txtTelefone" name="txtTelefone" required="required" type="text" value="<?=$c->txtTelefone?>" placeholder="99999 9999" />
			</p>
			<p> 
				<label for="txtInscricaoEstadual">Inscrição estadual:</label><br>
				<input id="txtInscricaoEstadual" name="txtInscricaoEstadual" required="required" type="text" value="<?=$c->txtInscricaoEstadual?>" placeholder="999999"/>
			</p>
			<p> 
				<input id="idCliente" name="idCliente" type="hidden" value="<?=$_GET['idCliente']?>"/>
			</p>

			<p> 
			  <input  type="submit" value="Alterar"/> 
			</p>
	</div>
	
</body>
</html>