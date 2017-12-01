<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/styleForReg.css" type="text/css" media="screen, projection">

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script type="text/javascript" src="js/my_scripts.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.26/vue.min.js"></script>
	<script type="text/javascript" src="https://unpkg.com/axios/dist/axios.min.js"></script>
	<script type="text/javascript" src="js/vue.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.26/vue.min.js"></script>
</head>
<div id="wrapper">
<body onload="init()">
<meta charset="utf-8">

<title>Запись в сервис</title>

<div class="container">
	<section id="content">
             <div>
		<form id="services" action="iframe_check.php" method="post">

			<h1>Запись в сервис</h1>
Чтобы записаться в автосервис просто заполните поля информации и наши администраторы обязательно свяжутся с Вами!
<br>
<br>
			<div>
				<input placeholder="Имя" maxlength =50 required="" id="username" name="name" type="text">
			</div>
			<div>
				<input placeholder="Телефон" required="" name="telefon" type="text">
			</div>
                               <div class="form-group">
                                    <label class="mm-link mm-link-big" for="inputCity">Город: </label>
                                    <select class="mm-link" id="inputCity" name="city" v-model="selectedCity">
                                        <option hidden></option>
                                        <option v-for="city in cities" :value="city.id">{{city.name}}</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="mm-link mm-link-big" for="inputService">Сервис: </label>
                                    <select class="mm-link" id="inputService" name="service" v-model="selectedService">
                                        <option hidden></option>
                                        <option v-if="onChange(service)" v-for="service in services" :value="service.id">{{service.address}}</option>
                                    </select>
                                </div>

				<p><textarea placeholder="Комментарий (необязательно):" name="message" cols="30" rows="5"></textarea></p>
			<div>
				<input value="Отправить" type="submit">
			</div>
		</form><!-- form -->
                                
                 <script type ="text/javascript" src="js/jquery-3.2.1.min.js"></script>
   <script type="text/javascript" charset="utf-8">
                                window.cities = <?php echo json_encode($cities); ?>;
                                window.services = <?php echo json_encode($services); ?>;
                            </script>
                     <script type = "text/javascript" src="js/scripts.js"></script>       
                      
                    </div> 
	</section><!-- content -->
</div><!-- container -->
 

</body></html>
</div>