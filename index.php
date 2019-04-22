<?php

	include "conexao.php";
	$sql = "SELECT * FROM tarefa_tb ORDER BY nome";
	$contatos = $fusca -> prepare($sql); // = significa atribuição
	$contatos -> execute(); //-> significa chamada de função
	//echo "encerrando conexão com o banco de dados";
	$fusca = null; 
	
	
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<link href="css/estilo_volatus.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Montserrat|Raleway" rel="stylesheet">	
		<link href="css/preloader.css" rel="stylesheet">
		<link rel="stylesheet" href="css/alertify.css">
		<link rel="stylesheet" href="css/microtip.css">
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		<link rel="stylesheet" href="/resources/demos/style.css">
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		 <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<title></title>
		<script>
		function alerte(){
					if(!alertify.myAlert){
						  //define a new dialog
						  alertify.dialog('myAlert',function(){
							return{
							  main:function(message){
								this.message = message;
							  },
							  setup:function(){
								  return { 
									buttons:[{text: "certo", key:27/*Esc*/}],
									focus: { element:0 }
								  };
							  },
							  prepare:function(){
								this.setContent(this.message);
							  }
						  }});
					}
					//launch it.
				alertify.myAlert("Conexão com o banco de dados realizada! Porém,por gentileza, tenha paciência, pois o sistema não está finalizado e terá alguns erros.");
				}
			</script>
		<script src="alertify.js"></script>	
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js" type="text/javascript"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				$("input[type=button]").click(function(event) {
					var acao = $(this).attr("value");
					$("#box").load('a_tarefa.php',{acc:acao});
				});
			});
		
		</script>
	</head>
		<HEADER id="cabecalho"><br>
			<h1 id="volatus">VOLATUS</h1>
		</header>
	<body>
		
		<h2 align="center" id="titulo">MÃOS A OBRA!</h2>
		<hr><br>
			<div class="container">
				<div class="fazer">
					<fieldset class="field">
						<h2 class="h" align="center">A FAZER</h2><hr>
						<table border="2">
							<tr >
								<th style="width:180PX; height:30PX;">Tarefa</th>
								<th style="width:180px; height:30px;">Prazo</th>
								<th style="width:180px; height:30px;">Iniciar</th>
							</tr>
							<?php
									foreach($contatos as $bolacha){
										//Atribuindo valores capturados da tabela
										$id           = $bolacha['id_tarefa']; 
										$tarefa       = $bolacha['tarefa'];
										$data_entrega      = $bolacha['data_entrega'];
										
										
										//Montando a tabela com os valores recebidos
										echo "<tr>";
										echo "<td>".$tarefa."</td>";
										echo "<td>".date("d/m/Y",strtotime($data_entrega))."</td>";
										echo "</tr>"."<BR>";		
									}		
									
							
									include "conexao.php";
									$sql = "SELECT * FROM `tarefa_tb` ";
									$contatos = $fusca -> prepare($sql); // = significa atribuição
									$contatos -> execute(); //-> significa chamada de função
									//echo "encerrando conexão com o banco de dados";
									$fusca = null;	
								
									foreach($contatos as $bolacha){
											//Atribuindo valores capturados da tabela
											$id           = $bolacha['id_tarefa']; 
											$tarefa       = $bolacha['tarefa'];
											$data_entrega      = $bolacha['data_entrega'];
												
														
											//Montando a tabela com os valores recebidos
											
											echo "<TR>";
											echo "<td>".$tarefa."</td>"."<br>";
											echo "<td>".date("d/m/Y",strtotime($data_entrega))."</td>";
											echo "<td>"."<p>"."<input type='button' value='start' />"."</p>"."</td>";
											echo "</TR>";
											
																	
										}
									
								?>
									<!--<tr>
								<th><//?php echo "$tarefa[0]"; ?></th>
								<th><td><//?php echo "$data_entrega[0]"; ?><td></th>
							</tr>-->
						
						</table>
							<br><a href="nova_tarefa.php"><button>NOVO</button></a>
							<button aria-label="Não consigo visualizar, e agora?" data-microtip-position="up" role="tooltip" onclick="alerte()" > ? </button>
							
					</fieldset>
				</div>
				<div class="fazendo">
					<fieldset class="field">
						<h2 align="center">FAZENDO</h2><hr>
						
								<table border="2">
							<tr >
								<th style="width:180PX; height:30PX;">Tarefa</th>
								<th style="width:180px; height:30px;">Prazo</th>
								<th style="width:180px; height:30px;">Terminou?<th>
							</tr>
							
							<?php 
									foreach($contatos as $bolacha){
										//Atribuindo valores capturados da tabela
										$id           = $bolacha['id_tarefa']; 
										$tarefa       = $bolacha['tarefa'];
										$data_entrega      = $bolacha['data_entrega'];
										
										
										//Montando a tabela com os valores recebidos
										echo "<tr>";
										echo "<td>".$tarefa."</td>";
										echo "<td>".date("d/m/Y",strtotime($data_entrega))."</td>";
										echo "</tr>"."<BR>";		
									}		
									
							
									include "conexao.php";
									$sql = "SELECT * FROM `tarefa_tb` ";
									$contatos = $fusca -> prepare($sql); // = significa atribuição
									$contatos -> execute(); //-> significa chamada de função
									//echo "encerrando conexão com o banco de dados";
									$fusca = null;	
								
									foreach($contatos as $bolacha){
											//Atribuindo valores capturados da tabela
											$id           = $bolacha['id_tarefa']; 
											$tarefa       = $bolacha['tarefa'];
											$data_entrega      = $bolacha['data_entrega'];
												
														
											//Montando a tabela com os valores recebidos
											
											/*echo "<TR>";
											echo "<td>".$tarefa."</td>"."<br>";
											echo "<td>".date("d/m/Y",strtotime($data_entrega))."</td>";
											echo "<td>"."<button >Terminei!</button>"."</td>";
											echo "</TR>";*/
											
																	
										}
									
								?>
								
							</table>
								<div id="box"></div>
							<br><br>
					</fieldset>		
				</div>
				<div class="fazendo">
					<fieldset class="field">
						<h2 align="center">FEITO</h2><hr>
							<table border="2">
								<tr><center>
									<th style="width:2000PX; height:30PX; ">Tarefa</th></center>
								</tr>
								<?php 
									foreach($contatos as $bolacha){
										//Atribuindo valores capturados da tabela
										$id           = $bolacha['id_tarefa']; 
										$tarefa       = $bolacha['tarefa'];
										$data_entrega      = $bolacha['data_entrega'];
										
										
										//Montando a tabela com os valores recebidos
										echo "<tr>";
										echo "<td>".$tarefa."</td>";
										echo "<td>".date("d/m/Y",strtotime($data_entrega))."</td>";
										echo "</tr>"."<BR>";		
									}		
									
							
									include "conexao.php";
									$sql = "SELECT * FROM `tarefa_tb` ";
									$contatos = $fusca -> prepare($sql); // = significa atribuição
									$contatos -> execute(); //-> significa chamada de função
									//echo "encerrando conexão com o banco de dados";
									$fusca = null;	
								
									foreach($contatos as $bolacha){
											//Atribuindo valores capturados da tabela
											$id           = $bolacha['id_tarefa']; 
											$tarefa       = $bolacha['tarefa'];
											$data_entrega      = $bolacha['data_entrega'];
												
														
											//Montando a tabela com os valores recebidos
											
											/*echo "<TR>";
											echo "<td>".$tarefa."</td>"."<br>";
											echo "</TR>";
											*/
																	
										}
									
								?>
							</table>
							<div id="box"></div>
							<br><br>
					</fieldset>		
				</div>
			</div>
		</center>
		<script src="preloader/preloader.js"></script>
	</body>
</html>