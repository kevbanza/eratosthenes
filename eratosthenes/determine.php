<?php
	$debut = microtime(true);
	$t0=time();
	$n=$_POST['nombre'];
	
	if($n<2){
		
		header("Location: index.php");
		
	}
	else{
	
	$tableau=array();
	$start=2;
	
	// creation du tableau 
		for($i=0; $i<$n-1;$i++){
		$tableau[$i]=$start;
		$start++;
	}

	//print_r($tableau);
	
	
	/*if(empty($tableau)){
		echo ('vide');
		
	}
	else {
		print_r($tableau);
		
	}*/
	
	//creation fonction eratothenes
	
	
	
	
	
	$c=0;
	//$d=2;
	$count=0;
?>
	
<html>
	<header>
	<!--<meta  http-equiv="content-type" content="text/html; charset=utf-8">-->
	</header>
	<body style="background-color:#222222"> <h1 align="center" style="margin-top:50px; color: white">ALGO ERATOSTHENES</h1>
		<div>
		
			<div id="encryption" align="left" style="text-align:center;margin-top:50px; background-color:#dedede; width:1000px; margin-left:150px;padding: 20px"" >
				<h3 align="center">Prime numbers :</h3>
					<?php	// determine prime numbers
						while(!empty($tableau)){
							$d=$tableau[$c];
							$dernier=sizeof($tableau)-1;
							
							if(($d*$d)>$tableau[$dernier]){
								$count=$count+(sizeof($tableau));
								for ($i=0; $i<sizeof($tableau); $i++){
									echo $tableau[$i];echo(', ');
								}
								break;
							}
							
							else{
								echo $tableau[$c]; echo(', '); $count=$count+1;
								for ($i=0; $i<sizeof($tableau); $i++){
									if(($tableau[$i] % $d)==0){
										
										unset($tableau[$i]);
										$tableau=array_values($tableau);
									}	
								}
							}
						}
					?>
					
					<?php	

						//print_r($tableau);
						echo('<br>');
						echo('<b>');echo 'Between '. 2 . ' and '. ($n). ' there is '. ($count).' prime numbers';echo('</b>'); echo('<br>');
						
						$fin = microtime(true);
						$t1=time();
						$temps=$t1-$t0;
						
						//echo 'Le temps écoulé est de '.($temps).' millisecondes.';

					?>
				
			</div>

		 
		 
		</div>
		
		
		<div>
		
			<div id="encryption" align="left" style="text-align:center;margin-top:50px; background-color:#dedede; width:1000px; margin-left:150px;padding-left: 20px" >
				<h3 align="center">MAX NUMBER</h3>
				<form action="determine.php" method="post">
					   Max number <input type="number" name="nombre"><br><br>
					<br> <button type="submit" style=" width:100px; height:35px; border-radius:10px; background-color:#f79b3f">Search</button>

				</form>
			</div>
		 
		 
		</div>
	
	<style>
		
		#encryption{
			display: inline-block;
			border-radius:20px
			
		}
		#decryption{
			display: inline-block;
			border-radius:20px
			
		}
	
	
	
	</style>
</body>
</html>
	<?php } ?>

