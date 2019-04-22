					<table border="2">
							<!--<tr >
								<th style="width:180PX; height:30PX;">Tarefa</th>
								<th style="width:180px; height:30px;">Prazo</th>
								<th style="width:180px; height:30px;">Terminou?<th>
							</tr>-->
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
											echo "<td>"."<p>"."<input type='button' value='Fim' />"."</p>"."</td>";
											echo "</TR>";
											
																	
										}
									
								?>
								
							</table><br><br>
					</fieldset>		