<?php
include_once("scripts/functions.php");
$pdo = mysqli_connect("localhost","root","","voorbeeld");
  {
?>
<!DOCTYPE html>
<html>
<title>voorbeeldtitle</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="styles/style.css">
<body>

<!-- Navigation -->
<div class="w3-top">
  <div class="w3-row w3-large w3-light-grey">
    <div class="w3-col s2">
      <a href="home.php" class="w3-button w3-block">Home</a>
    </div>
		<div class="w3-col s2">
      <a href="table.php" class="w3-button w3-block">Crud</a>
    </div>
		<div class="w3-col s2">
      <a href="inloggen.php" class="w3-button w3-block">Inloggen</a>
    </div>
  </div>
</div>

<!-- Content -->
<div class="w3-content" style="max-width:1100px;margin-top:80px;margin-bottom:80px">
  <div class="w3-panel">
    <h1><b>Voorbeeldheader</b></h1>
	</div>
</div>



</body>
</html>
<?php
}
?>
