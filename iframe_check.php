<?php
function clean($value = "") {
    $value = trim($value);
    $value = stripslashes($value);
    $value = strip_tags($value);
    $value = htmlspecialchars($value);
    
    return $value;
}

function check_length($value = "", $min, $max) {

    $result = (strlen($value) < $min || strlen($value) > $max);

    return !$result;
}

if($_SERVER['REQUEST_METHOD'] == 'POST') {
	$name = $_POST['name'];
	$telefon = $_POST['telefon'];
	$address = $_POST['service'];
	$message = $_POST['message']; 

	$name = clean($name);
	$telefon = clean($telefon);
	$address = clean($address);
	$message = clean($message);

	if(!empty($name) && !empty($telefon) && !empty($address)) { 
	    if(check_length($name, 2, 50)) {
		if (ctype_digit($telefon)) {
			 $fp = @fopen("requests.txt","a");
    				fwrite($fp, $_POST['name']."\n".$_POST['telefon']."\n".$_POST['service']."\n".$_POST['message']."\n");
    				fclose($fp);
                                $hostname = 'localhost'; 
                                $username = 'root'; 
                                $passwrd = ''; 
                                $database = 'autosalon'; 
                                $con=mysqli_connect($hostname, $username, $passwrd, $database); 
                                mysqli_query($con, "SET NAMES 'utf8' "); 
                                if (!$con) 
                                { 
                                echo ("Соединение нарушено"); 
                                } 
                                $query = "INSERT INTO requests VALUES ('".$name."','".$telefon."','".$address."','".$message."')"; 

                                if ($con->query($query) === TRUE) { 
                                //echo "Новая запись в БД была успешно произведена"; 
                                } else { 
                                echo "Ошибка: " . $query . "<br>" . $con->error; 
                                } 

                                $con->close();
        		echo "Ваша заявка № "; echo rand(1, 10); echo " принята! Мы свяжемся с Вами в ближайшее время.";
                               require 'bloks/button.php';
    		} else {
        		echo "Номер телефона может состоять только из цифр";
    			}
	    } else {
		echo "Пожалуйста, сократите имя пользователя до 50 символов";
		}
	} else { 
		echo "Пожалуйста, заполните обязательные поля!";
		}

 
}



?>
