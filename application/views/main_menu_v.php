<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<base href="<?=base_url()?>"/>
		<title>ZING Studio</title>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script>windows.jQuery || document.write('<script src='js/jquery-1.11.0.min.js'><\/script>')</script>			
		<script src="dist/js/bootstrap.min.js"></script>
		<script src="js/holder.min.js"></script>
		<script src="js/isotope.pkgd.min.js"></script>		
		<script src="js/jquery.stellar.min.js"></script>			
		<script src="js/aio.js"></script>	
		<link rel="stylesheet" type="text/css" href='dist/css/bootstrap.min.css' />
		<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href='css/carousel.css' />
		<link rel="stylesheet" type="text/css" href='css/style.css' />
			
	</head>
	
<body data-spy="scroll" data-target=".navbar-collapse">

<!-- Carousel====================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img class="img-responsive sl-img" src="imgs/bg1.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Simple, but not simple!</h1>
              <p>Simple, but not simple!<code>file://</code>Simple, but not simple!</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="img-responsive sl-img" src="imgs/bg2.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Simple, but not simple!</h1>
              <p>Simple, but not simple!</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="img-responsive sl-img" src="imgs/bg3.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Simple, but not simple!</h1>
              <p>Simple, but not simple!</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->
<!--navbar -->
	<div id="nav" class="navbar navbar-inverse" role="navigation" data-spy="affix">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><?php echo $title_name; ?></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="#">ZING</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#portfolio">Portfolio</a></li>
            <li><a href="#price">Price</a></li>
            <li><a href="#aboutus">About Us</a></li>
            <li><a href="#contact">Contact Us</a></li>           
          </ul>
          <ul class="nav navbar-nav navbar-right">
          <li class=""><a class="fa fa-facebook" href="./"></a></li>
          <li class=""><a class="fa fa-twitter" href="./"></a></li>
          <li class=""><a class="fa fa-weibo" href="./"></a></li>
          <li class=""><a class="fa fa-weixin" href="./"></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    