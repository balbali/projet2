<?php
session_start();
?>
<?php
if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
	echo '<ul style="padding:0; color:red;">';
	foreach($_SESSION['ERRMSG_ARR'] as $msg) {
		echo '<li>',$msg,'</li>'; 
	}
	echo '</ul>';
	unset($_SESSION['ERRMSG_ARR']);
}
?>
<meta charset="UTF-8">
<form action="reg.php" method="POST">
Identifiant<br>
<input type="text" name="uname" /><br>
Mot de passe :<br>
<input type="password" name="pword" /><br>
<input type="submit" value="Valider" />
</form>