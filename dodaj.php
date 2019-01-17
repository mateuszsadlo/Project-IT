<?php 
session_start();
if($_SESSION['zalogowany']==1){//only for logged users
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
			$conn->set_charset("utf8"); // set to code UTF-8 for polish signs
			$login = $_SESSION["user"];
			$naglowek = stripslashes($_POST['naglowek']);
			$text = stripslashes($_POST['formText1']);
				$sec_check = strip_tags($naglowek); //  deleted  HTML tags
				$sec_checktext = strip_tags($text);
				//checking is something is changed
			if(strlen($sec_check) != strlen($naglowek))
			{
				$_SESSION["error_dodaj"]=true;
					$_SESSION["statement_dodaj"] = "Nie wolno korzystać z znaków specjalnych";
					$conn->close();
					header("Location: http://henetplue.nazwa.pl/teksty/");
			}
			if(strlen($sec_checktext) != strlen($text))
			{
				$_SESSION["error_dodaj"]=true;
					$_SESSION["statement_dodaj"] = "Nie wolno korzystać z znaków specjalnych";
					$conn->close();
					header("Location: http://henetplue.nazwa.pl/teksty/");
			}


			
			if($text=="Tutaj wklej lub wpisz tekst"){//checking is something was written
				$_SESSION["error_dodaj"]=true;
				$_SESSION["statement_dodaj"] = "Dodaj tekst";
				$conn->close();
				header("Location: http://henetplue.nazwa.pl/teksty/");
			}else{
				$sql="Select tytul from teksty_uzytkownikow where tytul = '".$naglowek."'";//checking is existing text with this header
				$result = $conn->query($sql);
				if($result->num_rows == 0){
					$sql="INSERT INTO `teksty_uzytkownikow` (`id`, `login`, `tytul`, `tekst`, `naglowek`) VALUES (NULL, '".$login."', '".$naglowek."', '".$text."', '".$naglowek."')";//added new text
					if ($conn->query($sql) === TRUE) {
						$_SESSION["error_dodaj"]=true;
						$_SESSION["statement_dodaj"] = "Dodales tekst";
						$conn->close();
						header("Location: http://henetplue.nazwa.pl/teksty/");
					} else {
						echo "Error: " . $sql . "<br>" . $conn->error;
					}
					$conn->close();
					header("Location: http://henetplue.nazwa.pl/teksty/");
				}else{
					$_SESSION["error_dodaj"]=true;
					$_SESSION["statement_dodaj"] = "Istniejie tekst z takim naglowkiem";
					$conn->close();
					header("Location: http://henetplue.nazwa.pl/teksty/");
				}
			}
	
} else {
	$_SESSION["error_dodaj"]=true;
	$_SESSION["statement_dodaj"] = "Aby dodać tekst musisz być zalogowany";
header("Location: http://henetplue.nazwa.pl/teksty/");
}
?>