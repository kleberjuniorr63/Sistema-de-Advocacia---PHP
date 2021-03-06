﻿<!DOCTYPE html>

<html lang="pt-br">

	<head>
		<!-- Meta tags Obrigatórias -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
		
		<!-- Bootstrap JavaScript -->
		<script src="node_modules/jquery/dist/jquery.js"></script>
		<script src="node_modules/popper.js/dist/popper.js"></script>
		<script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
		<link rel="shortcut icon" href="Imagens/icone.png" width="100%" type="image/x-png"/>
		<title>Advocacia</title>
		
	</head>


  
  <body background="Imagens/Back.jpg"">
  
	<!-- Parte de cima do site. -->
		<nav class="navbar navbar-fixed-top navbar-expand-lg navbar-dark bg-dark">
				<a class="navbar-brand" href="Administrador.html"><i class="fas fa-balance-scale"></i></a>		
				<a class="navbar-brand h1 mb-0"  href="Administrador.html">Sistema de advocacia</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
						<span class="navbar-toggler-icon"></span>
					</button>
				
				<div class="collapse navbar-collapse" id="navbarNav">
			
					<ul class="navbar-nav mr-auto">
						
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="navDrop"><i class="far fa-calendar-alt"></i> Reuniões</a>
								
								<div class="dropdown-menu">							
							
									<a class="dropdown-item" href="NovoAgendamento.html"><i class="fas fa-calendar-plus"></i> Novo agendamento </a>
									
									<a class="dropdown-item" href="ListarFormulario.php"><i class="fas fa-calendar-times"></i> Alterar/Excluir reuniões</a>

								</div>
						</li>
						
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="navDrop"><i class="fas fa-users"></i> Clientes</a>
								
								<div class="dropdown-menu">							
							
									<a class="dropdown-item" href="Cliente.html"><i class="fas fa-user-plus"></i> Adicionar cliente </a>
									
									<a class="dropdown-item" href="ListarCliente.php"><i class="fas fa-user-times"></i> Alterar/Excluir clientes</a>

								</div>
						</li>
						
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="navDrop"><i class="fas fa-users"></i> Funcionarios</a>
								
								<div class="dropdown-menu">							
							
									<a class="dropdown-item" href="Funcionario.html"><i class="fas fa-user-plus"></i> Adicionar funcionário </a>
									
									<a class="dropdown-item" href="ListarFuncionarios.php"><i class="fas fa-user-times"></i> Alterar/Excluir funcionários</a>

								</div>
						</li>

						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="navDrop"><i class="fas fa-business-time"></i> Audiência</a>
								
								<div class="dropdown-menu">							
							
									<a class="dropdown-item" href="Audiencia.php"><i class="fas fa-briefcase"></i> Adicionar audiência </a>
									
									<a class="dropdown-item" href="ListarAudiencia.php"><i class="fas fa-user-times"></i> Alterar/Excluir audiência</a>

								</div>
						</li>							

						<li class="nav-item">
						<a class="nav-link" href="Index.html" > <i class="fas fa-sign-out-alt"></i> Sair </a>
						</li>
					
					</ul>
			
					<ul class="navbar-nav ml-auto mr-4">
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="navDrop"><i class="fas fa-bars"></i> Opções	</a>
								
								<div class="dropdown-menu">							
							
									<a class="dropdown-item" href="https://pt-br.facebook.com/"><i class="fab fa-facebook"></i> Facebook</a>
									
									<a class="dropdown-item" href="https://twitter.com/?lang=pt-br"><i class="fab fa-twitter-square"></i> Twitter</a>
									
									<a class="dropdown-item" href="https://www.instagram.com/"><i class="fab fa-instagram"></i> Instagram</a>
								</div>
						</li>	
					</ul>
				
					<form class="form-inline">
						<input class="form-control  mr-1" type="search" placeholder="Buscar...">
						<button class="btn btn-light" type="submite"> OK </button>
					</form>
				
				</div>
			
		</nav>

	<br>
	<div class="container">	
			<center> <h1> Formulário de alteração de funcionário </h1></center>

	<div class="row" style="margin-top: -50px;">	
		<div class="col-11"> 
			<a href="ListarFuncionarios.php" class="btn btn-outline-dark float-right" >Voltar</a>
		</div>
	</div>

	<center> <h3>  Deverá ser inserido obrigatoriamente o sexo e a sua área de atuação. </h3> </center>

<?php	
	$id= $_POST['id'];	
			$con=mysqli_connect("127.0.0.1","root","","projetoadvocacia");       
			if (mysqli_connect_errno()){
				echo "Failed to connect to MySQL: " . mysqli_connect_error();}	
				$result = mysqli_query($con,"SELECT * FROM funcionario WHERE id='$id'");	
	?>
		<p> <center> <form action="RealizarAltFuncionario.php" method="POST">
	<?php while($row = mysqli_fetch_array($result)){ 

	?>	
	
	<input type="hidden" name="id" value="<?php echo $row['id']; ?>" />	
	
	<center>	
	  <form class="mr-5 ml-5">
		 <div class="form-group">
		  <div class=col-5>
			<label for="exampleFormControlInput1">Nome: </label>
			<input type="text" name="nome" class="form-control" id="exampleFormControlInput1" value="<?php echo $row['nome']; ?>">
		  </div>
<br>

	  <form class="mr-5 ml-5">
		 <div class="form-group">
		  <div class=col-5>
			<label for="exampleFormControlInput1" >Sexo: </label>
			<br>
				<input name="sexo" type="radio" id="exampleFormControlInput1" value="m"> Masculino 
				<input name="sexo" type="radio"  id="exampleFormControlInput1" value="f"> Feminino
		  </div>
<br>

	  <form class="mr-5 ml-5">
		 <div class="form-group">
		  <div class=col-5>
			<label for="exampleFormControlInput1">CPF: </label>
			<input type="text" name="cpf" class="form-control" id="exampleFormControlInput1" value="<?php echo $row['cpf']; ?>">
		  </div>
<br>

	  <form class="mr-5 ml-5">
		 <div class="form-group">
		  <div class=col-5>
			<label for="exampleFormControlInput1">Data de nascimento: </label>
			<input type="date" name="datanasc" class="form-control" id="exampleFormControlInput1" value="<?php echo $row['datanasc']; ?>">
		  </div>
<br>



	  <form class="mr-5 ml-5">
		 <div class="form-group">
		  <div class=col-5>
			<label for="exampleFormControlInput1">Telefone: </label>
			<input type="text" name="tel" class="form-control" id="exampleFormControlInput1" value="<?php echo $row['tel']; ?>">
		  </div>
<br>

		 <div class="form-group">
		  <div class=col-5>
			<label for="exampleFormControlInput1">Endereço de email</label>
			<input type="email" name="email" class="form-control" id="exampleFormControlInput1" value="<?php echo $row['email']; ?>">
		  </div>
<br>
		  
		  <div class="form-group">
		   <div class=col-5>
			<label for="exampleFormControlSelect1">Área de atuação: </label>
			<select class="form-control" name="area" id="exampleFormControlSelect1">
			  <option> Escolha: </option>
			  <option> Direito Civil</option>
			  <option> Direito Trabalhista</option>
			  <option> Direito Tributária</option>
			  <option> Direito Penal</option>
			  <option> Direito Administrativo </option>
			  <option> Família e sucessões </option>
			  <option> Outros</option>
			</select>
		  </div>
<br>
		  
		  <div class="form-group">
		   <div class=col-5>
			<label for="exampleFormControlSelect1">Data de admissão: </label>
			<input type="date" name="admi" class="form-control" value="<?php echo $row['admi']; ?>">
			</select>
		  </div>		  
<br>	
		  
		  <div class="form-group">
		   <div class=col-5>
			<label for="exampleFormControlSelect1"> Número OAB: </label>
			<input type="text" name="oab" class="form-control" value="<?php echo $row['oab']; ?>">
			</select>
		  </div>		  
<br>
		  
		  <input class="btn btn-outline-dark" type="submit" value="Enviar">		  
		  <input class="btn btn-outline-dark" type="reset" value="Limpar">
	</form>
</center>
	
	<?php }?> </p>

</body>
</html>