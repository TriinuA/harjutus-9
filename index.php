<!DOCTYPE HTML>
<html>
	<head>
		<title></title>
		<meta charset="utf-8">
		<?php
    		function bg_color($value="red") {
        		return $value;
    		}

    		$color = bg_color("#0099FF");
		?>
		<style type="text/css">
			.container{
				max-width: 200px;
				margin: 0 auto;
				padding: 10px;
				border: 1px solid red;
				}
			p {
				font-family: "Fondamento", cursive;
				}
			body {
    			background-color: <?php echo $color; ?>;
				}

		</style>	  	
	</head>
	<body>
		<h2>Funktsiooni defineerimine</h2>
		<h3>Argumendita funktsioon</h3>

		<?php
			function say_hello() {
				echo "Minu esimene funktsioon!<br>";
			} 
			say_hello();

		 ?>
		<h3>Argumendiga funktsioon</h3>
		<?php 
			$person = "Triinu";
			function say_hello_to($person) {
				echo "Tere {$person}!<br>";
			}
		 ?>
		 <div class="container">
			 <p>
			 	<?php say_hello_to($person); ?>
			 </p>
		 </div><!--container-->
		 <h3>Väärtuste tagastamine</h3>
		 <?php
		 	
		 	function add($number1, $number2){
		 		$sum = $number1 + $number2;
		 		return $sum;
		 	}	  
		  	
		   ?>
		   <?php 
		   		$result=add(3, 4);
		  		echo $result;
		    ?>

		    <h3>Mitme väärtuse tagastamine</h3>
		    <?php
    			function calculate($nr1, $nr2) {
        			$plus = $nr1 + $nr2;
        			$minus = $nr1 - $nr2;
        			return array($plus, $minus);
        		}
        		$result = calculate(10, 5);
        		

        	?>
        	<ul>
	        	<li>Numbrite summa on <?php echo $result[0] ?></li>
	        	<li>Numbrite vahe  on <?php echo $result[1] ?></li>
        	</ul>
        	<h3>Funktsioon list()</h3>
        	<?php 
        		list($plus_result, $minus_result) = calculate(10, 5);
        		

        	?>

        	<ol>
        		<li>Numbrite summa on <?php echo $plus_result ?></li>
	        	<li>Numbrite vahe  on <?php echo $minus_result ?></li>
        	</ol>

	</body>
</html>