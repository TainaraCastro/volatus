<!DOCTYPE html>
<?PHP
	if(ISSET($_POST["salvar"])){
		//capturando as informações
		$id_tarefa   = ""; 	
		$tarefa         = $_POST["tarefa"];
		$data_entrega      = $_POST["data_entrega"];
	
		
		//mostrando os dados
		
		echo $tarefa."<br>";
		echo $data_entrega."<br>";
		
		//inserindo no banco de dados
	$sql = "INSERT INTO  tarefa_tb (id_tarefa, tarefa, data_entrega) 
			values('$id_tarefa','$tarefa', '$data_entrega')";
	include "conexao.php";
		$contatos = $fusca -> prepare($sql);
		$contatos -> execute();
		$fusca = NULL;
		header("location: index.php");		
	}
	
	
	

?>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<link href="css/estilo_volatus.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Montserrat|Raleway" rel="stylesheet">
		<link rel="stylesheet" href="css/alertify.css">
		<link rel="stylesheet" href="css/microtip.css">
		<link href="preloader/preloader.css" rel="stylesheet">
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		<link rel="stylesheet" href="/resources/demos/style.css">
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		 <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<title></title>
		<script>
		function alertar(){
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
			function toast(){
			var toastHTML = '<span>I am toast content</span><button class="btn-flat toast-action">Undo</button>';
				M.toast({html: toastHTML});
        
			
			}
	</script>
	
	</head>
	<body>
	<br><center>
	<fieldset class="field2">
	<h2 id="titulo">O que temos para fazer?</h2>
	<form action="#" method="POST">
		<h3 class="h">Tarefa:</h3>
		<input type="text" name="tarefa" autofocus>
		<h3 class="h">Prazo:</h3>
		<p><input type="text" name="data_entrega" autofocus id="datepicker"></p><br><br>
		<a class="btn" onclick="M.toast({html: 'I am a toast', completeCallback: function(){alert('Your toast was dismissed')}})"><button>Pronto</button></a>
		<input type="submit" value="Salvar" name="salvar"><br>
		<br>
	</fieldset>
	  <script>
			  $( function() {
				$( "#datepicker" ).datepicker();
			  } );
	 </script>
	</body>
</html>