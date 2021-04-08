<?php
include_once("scripts/functions.php");
if($pdo = connect())
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
		<div class="w3-col s2">
      <div class="dropdown">
				<button class="w3-button w3-block">Dropdown</button>
				<div class="dropdown-content">
					<a href="#">Link 1</a>
					<a href="#">Link 2</a>
					<a href="#">Link 3</a>
				</div>
			</div>
    </div>
  </div>
</div>


<!-- Content -->
<div class="w3-content" style="max-width:1100px;margin-top:80px;margin-bottom:80px">
  <div class="w3-panel">
		<h1><b>Voorbeeldheader</b></h1>
		<?php
			if(isset($_POST['toevoegen']))
			{	?>
				<form method="post">
					<p>
						<label for="test2">Test2: </label>
						<input type="text" name="test2" id="test2">
					</p>
					<p>
						<label for="test3">Test3: </label>
						<input type="text" name="test3" id="test3">
					</p>
				
					<input type="submit" name="test_toevoegen">
				<?php
			}
			if(isset($_POST['test_toevoegen']))
			{
					$test2 = mysqli_real_escape_string($pdo, $_REQUEST['test2']);
					$test3 = mysqli_real_escape_string($pdo, $_REQUEST['test3']);
					
					$sql = "INSERT INTO voorbeeldtable (testID, test2, test3) VALUES ('', '$test2', '$test3')";
					if(mysqli_query($pdo, $sql)){
						echo "Test toegevoegd.";
					} else{
						echo "ERROR: Test kon niet toegevoegd worden. " . mysqli_error($pdo);
					}
		?>
		
		
		<?php
			}
			$sql = "SELECT * FROM voorbeeldtable";
			$result = mysqli_query($pdo, $sql);
			
			if ($result->num_rows > 0) {
				// output data of each row
		?>
			<!--<?php
				if (!isset($_POST['toevoegen'])) {
			?>-->
			<table>
				<form method="post">
					<tr>
						<td><b>TEST1<b></td>
						<td><b>TEST2<b></td>
						<td><b>TEST3<b></td>
						<td><b><input type="submit" name="toevoegen" value="Toevoegen"><b></td>
					</tr>
						<?php
							while($row = $result->fetch_assoc()) {
						?> <tr><td> <?php echo $row["testID"]. "<br>"; ?> </td><?php
						?> <td> <?php echo $row["test2"]. "<br>"; ?> </td><?php
						?> <td> <?php echo $row["test3"]. "<br>"; ?> </td></tr><?php
							}
						}
						?>
					</form>
			</table>
				<?php
			}
			?>
	</div>
</div>



</body>
</html>
<?php
	}
?>
