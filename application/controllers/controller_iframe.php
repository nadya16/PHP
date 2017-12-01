<?php

class Controller_iframe extends Controller
{
 function __construct()
	{
		$this->model = new Model_Iframe();
		$this->view = new View();
	}
public function action_index()
{	
  // echo ("1"); 
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    // if (isset($_POST['submit']))
   // {
         //echo ("2"); 
	$name = $_POST['name'];
	$telefon = $_POST['telefon'];
	$address = $_POST['service'];
	$message = $_POST['message']; 
        
        
        
        $name = Request::clean($name);
	$telefon = Request::clean($telefon);
	$address = Request::clean($address);
	$message = Request::clean($message);
        
        if(empty($name))$errors[] = 'Введите имя' ;
        if(empty($telefon))$errors[] = 'Введите телефон'; 
        if(empty($address))$errors[] = 'Выберите адрес сервиса'; 
        else{
            if (Request::check_length($name)==false) $errors[] = 'Сократите имя до 50 символов';
            else
            {
                if (!ctype_digit($telefon))$errors[] = 'Номер телефона может состоять только из цифр';
                else{
                    if (!Request::register($name, $telefon,$address, $message)) $errors[] = 'Ошибка Базы Данных';
                }
            }
        
        }
        
    }
    $data = $this->model->get_data();
    $this->view->generate('iframe_view.php', null, $data);
    return true;
}    
}

