<?php
require 'db.php';
try {
$query = 'DELETE FROM users WHERE id=?';
$stmt = $dbc->prepare($query);
$stmt->bindParam(1, $_GET['id']);
if($stmt->execute()) {
	echo "<script>alert('enregistrement supprimé.');location.href='index.php'</script>";
	echo "<script>alert('enregistrement supprimé.');location.href='index.php'</script>";
	echo "<script>alert('enregistrement supprimé.');location.href='index.php'</script>";
} else {
	die('suppression non effectuée.');
}
} catch(PDOException $e) {
	echo "Error: " . $e->getMessage();
}
?>