<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title></title>
	<meta name="title" content="" />
	<meta name="keywords" content="" />
	<meta name="description" content="" />
         <meta name="viewport" content="width=device-width, initial-scale=1">
           
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen, projection" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js">
</script>
         
       
</head>
<!-- основной блок -->
<div id="wrapper">  
 <?php require 'bloks/header.php';?>
    <?php require 'bloks/header_menu.php'; ?>
<!-- между метками AAA и BBB будем писать все наполнение сайта -->

 <div id="middle">
  <div id="container">
  <div id="content">

<?php include 'application/views/'.$content_view; ?>
<!-- BBB -->
<!-- наполнение сайта - наш контент -->
<div id="upbutton"></div>

<script>
    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            if ($('#upbutton').is(':hidden')) {
                $('#upbutton').css({opacity : 1}).fadeIn('slow');
            }
        } else { $('#upbutton').stop(true, false).fadeOut('fast'); }
    });
    $('#upbutton').click(function() {
        $('html, body').stop().animate({scrollTop : 0}, 300);
    });
</script>

<style>
  #upbutton {
    background: url("img/up.png") no-repeat top left;
    height: 60px;
    width: 60px;
    bottom: 30px;
    right: 30px;
    cursor: pointer;
    display: none;
    position: fixed;
    z-index: 999;
  }
</style>
  </div><!-- #content-->

</div><!-- #container-->
 
</div>
     <?php require 'bloks/footer.php'; ?>
</div>


 

