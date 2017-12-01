<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/styleForReg.css" type="text/css" media="screen, projection">


<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.26/vue.min.js"></script>
	<script type="text/javascript" src="https://unpkg.com/axios/dist/axios.min.js"></script>
        <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.26/vue.min.js"></script>

</head>
<div id="wrapper">
<body onload="init()">
<meta charset="utf-8">

<title>Запись в сервис</title>

<div class="container">
	<section id="content">
             <div>
		<form id="services" action="" method="post">

			<h1>Запись в сервис</h1>
Чтобы записаться в автосервис просто заполните поля информации и наши администраторы обязательно свяжутся с Вами!
<br>
<br>
			<div>
				<input class="mm-link" placeholder="Имя" maxlength =50 required="" id="username" name="name" type="text">
			</div>
			<div>
				<input placeholder="Телефон: 9xx-xxx-xxx" required="" pattern="[0-9]{10,10}" id="phone"  name="telefon" type="text">
			</div>
<div class="form-group">
                                    <label class="mm-link mm-link-big" for="inputCity">Город: </label>
                                    <select class="mm-link" id="inputCity" name="city"  required="" onchange="javascript:selectRegion();" v-model="selectedCity">
                                        <option hidden></option>
<?php

	foreach($data as $row)
	{
            echo "<option value=\"" . $row['name']. "\">" . $row['name'] . "</option>";
		
	}
	
?>
                                         </select>
                                </div>
<div name="selectDataService" ></div>
<script type="text/javascript">
    function selectRegion(){
        var id_country = $('select[name="city"]').val();
        if(!id_country){
                $('div[name="selectDataService"]').html('');
                //$('div[name="selectDataCity"]').html('');
        }else{
                $.ajax({
                        type: "POST",
                        url: "http://localhost/auto.ru/ajax.base.php",
                        data: { action: 'showServiceForInsert', name: id_country },
                        cache: false,
                        success: function(responce){ $('div[name="selectDataService"]').html(responce); }
                });
        };
};
 </script>

				<p><textarea placeholder="Комментарий (необязательно):" name="message" cols="30" rows="5"></textarea></p>
			<div>
				<input value="Отправить"  type="submit">
			</div>
                                <a href="/auto.ru/main"><input  value="Назад" type="button"></a>
		</form><!-- form -->
 </div> 
	</section><!-- content -->
</div><!-- container -->

</body></html>
</div>