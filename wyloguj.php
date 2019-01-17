<?php 
session_start();
if($_SESSION['zalogowany']==0){ // only fo logged user
			$servername = "sql.henetplue.nazwa.pl";
			$username = "henetplue";
			$password = "Szafirek12!@";
			$dbname = "henetplue";

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}
				// Deleted slahes
			$login = stripslashes($_POST['login']);
			$haslo = stripslashes($_POST['haslo']);
			$ip = stripslashes($_SERVER['REMOTE_ADDR']);
			$sql = "Select login, haslo from uzytkownicy where login = '".$login."' and haslo = '".$haslo."'";
			// send SQL to db
			$result = $conn->query($sql);
			// If We have any rows then
			if ($result->num_rows != 0) {
				$_SESSION["error"] = false;
				$_SESSION["zalogowany"]=1;
				$_SESSION["user"] = $login;
			}
	else {
		$_SESSION["error"]=true;
   		$_SESSION["statement"]= "Nie ma takiego hasła lub loginu";
		
		}
	$conn->close();
	// come back to site
	header("Location: http://henetplue.nazwa.pl/logowanie/");
	
} else {
	$_SESSION['zalogowany']=0;
	$_SESSION["error"]=false;
header("Location: http://henetplue.nazwa.pl/logowanie/");
}
?>