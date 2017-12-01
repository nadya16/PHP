<?php
class Request{
    
    public static function clean($value = "") {
    $value = trim($value);
    $value = stripslashes($value);
    $value = strip_tags($value);
    $value = htmlspecialchars($value);
    return $value;
}
    
    public static function check_length($name)
{
    if (strlen($name) <= 50) return true;
    else return false;
    echo("check");
}

public static function register($name, $telefon,$address, $message)
{
    ?> <script>alert('Ваша заявка принята! Мы обязательно свяжемся с Вами в ближайшее время.', top.location.href="index.php" )</script><?php
    $db = Db::getConnection();
    $sql = 'INSERT INTO requests (name, telefon,address, message) VALUES (:name, :telefon,:address, :message)';
    // Получение и возврат результатов. Используется подготовленный запрос
    $result = $db->prepare($sql);
    $result->bindParam(':name', $name, PDO::PARAM_STR);
    $result->bindParam(':telefon', $telefon, PDO::PARAM_STR);
    $result->bindParam(':address', $address, PDO::PARAM_STR);
    $result->bindParam(':message', $message, PDO::PARAM_STR);
    return $result->execute();
}
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

