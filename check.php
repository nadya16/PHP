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
	$address = $_POST['address'];
	$message = $_POST['message']; 

	$name = clean($name);
	$telefon = clean($telefon);
	$address = clean($address);
	$message = clean($message);

	if(!empty($name) && !empty($telefon) && !empty($address)) { 
	    if(check_length($name, 2, 5)) {
		if (ctype_digit($telefon)) {
        		echo "Ваша заявка № "; echo rand(1, 10); echo " принята! Мы свяжемся с Вами в ближайшее время.";
                               require 'bloks/buttonToIndex.php';
    		} else {
        		echo "Номер телефона может состоять только из цифр";
    			}
	    } else {
		echo "Пожалуйста, сократите имя пользователя до 5 символов";
		}
	} else { 
		echo "Пожалуйста, заполните обязательные поля!";
		}

}



?>
