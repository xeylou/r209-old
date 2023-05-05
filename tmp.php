<html>

<head>
	<title>tes-01</title>
	<link rel="stylesheet" href="bootstrap.min.css">
	<link rel="stylesheet" href="font-awesome.min.css">
	<meta charset= "utf-8">
</head>
<body>
	<div class="container">
		<br>
		<h2><center>test-02</h2>
		</p>
		<h4><center>test-04</h4>
		<hr></hr>
		<div class="row">
			<div class="col-sm-10">
			    <?php
			      $pdo = new PDO('r209-db.sqlite');
			      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			      	
			      echo '</p>';
			    //   echo '<table class="table table-hover">';
			      
			    //   echo '<thead class="thead-dark"><tr><th scope="col">Numéro Station</th><th scope="col">Prix de Chaque Carburant suivant la station</th><th scope="col"th scope="col"s>Date de la reception du message MQTT</th></tr></thead>';
			      foreach ($pdo->query("SELECT * from sensors_data;") as $row) {
				echo '<tr>';
				echo '<td>'.$row['topic'].'</td>';
				echo '<td>'.$row['payload'].'</td>';
				echo '<td>'.$row['date'].'</td>';
				echo '</tr>';
			      }
			      echo '</table>';
			    ?>
			</div>
</body>
