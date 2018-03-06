<?php

if(isset($_POST['submit_btn'])) {
require 'lafleur.php';
try {
$query = "INSERT INTO users SET username=?, password=?";
$stmt = $dbc->prepare($query);
$stmt->bindParam(1, $_POST['username']);
$stmt->bindParam(2, $_POST['password']);
$stmt->bindParam(3, date('m/d/Y'));
	if($stmt->execute()) {
		echo "<script>alert('informations enregistrées.');location.href='index.php'</script>";
	} else {

	}
} catch(PDOException $e) {
	echo "Error: " . $e->getMessage();
}
} else {
?>
<html>
<meta charset="UTF-8">
<body>
<form action="" method="POST">
Libellé Produit: <input type="text" name="fname" required/> </br>
Prix produit: <input type="text" name="pnumber" required/> </br>
Libellé Produit: <input type="text" name="fname" required/> </br>
Prix produit: <input type="text" name="pnumber" required/> </br>
Libellé Produit: <input type="text" name="fname" required/> </br>
Prix produit: <input type="text" name="pnumber" required/> </br>
<input type="submit" name="submit_btn"/>
</form>
</body>
<?php } ?>
</html>