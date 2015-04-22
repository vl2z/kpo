<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Starter Template - Materialize</title>

  <!-- CSS  -->
  <link href="/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <script src="/js/add.js" type="text/javascript"></script>
</head>
<body>
  <nav class="purple darken-3" role="navigation">
    <div class="container">
      <div class="nav-wrapper"><a id="logo-container" href="/" class="brand-logo">Быстро-печать </a>
        <ul class="right">
          <li><a href="/about"><h5>О компании</h5></a></li>
		  <li><a href="help.html"><h5>Помощь</h5></a></li>
        </ul>
        <ul id="nav-mobile" class="side-nav">
         <li><a href="/about"><h5>О компании</h5></a></li>
		  <li><a href="help.html"><h5>Помощь</h5></a></li>
        </ul>
        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
      </div>
    </div>
  </nav>
	<div id="content">
		<div class="box">
			<?php include 'application/views/'.$content_view; ?>
		</div>
		<br class="clearfix" />
	</div>
	<footer class="page-footer purple darken-3">
    <div class="container">
      <div class="row white-text">
        <div class="col l6 s12 ">
          <a class="white-text" href="about.html"><h4>О нас</h4></a>
          <p class="gray-text text-lighten-4"><h6>Наш сервис предоставляет быстрые и качественные услуги печати и обработки фотографий! Попробуйте!</h6></p>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Наши партнеры</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Присоединяйся!</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
	<script src="js/add.js"></script>
  </body>
</html>

				