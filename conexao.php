 <?php
	try{
		$fusca = new PDO ("mysql: host=localhost;dbname=volatus_bd","root","");
		//echo "conexão efetuada com sucesso!!!";
	}
		catch (PDOException $e) { //Bloco correspondente ao try
		//testar var_dump($e);
		//teste método echo $->getCode();
		echo $e->getMessage(); //método amplamente utilizado
	
	}
 
 ?>
	
