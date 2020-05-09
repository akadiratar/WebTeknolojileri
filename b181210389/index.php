<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>	
	<link rel="stylesheet" type="text/css" href="css/main.css"/>
	<link rel="stylesheet" type="text/css" href="https://getbootstrap.com/docs/4.4/examples/carousel/carousel.css"/>

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Droid+Serif:400i">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">

	<title>Abdulkadir ATAR Kişisel Web Sitesi</title>

	</head>
	<body>
		
  

  <header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="#"><img src="images/logo.png" width="50" height="35" class="d-inline-block align-top" alt="">&nbsp Abdulkadir ATAR</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
      <li class="nav-item active"><a class="nav-link" href="index.php">Anasayfa</a></li>
      <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Benim Şehrim
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="benim-sehrim.php">BİLECİK</a>
        <a class="dropdown-item" href="gezinti.php">BİLECİK'te Gezinti</a>
      </div>
      </li>      
      <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Hakkımda
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="ben-kimim.php">Ben Kimim</a>
        <a class="dropdown-item" href="ozgecmis.php">Özgeçmişim</a>          
        <a class="dropdown-item" href="takim.php">Takımım</a>
      </div>
      </li>
      <li class="nav-item"> <a class="nav-link" href="iletisim.php">İletişim</a> </li>     
      </ul>
        <button type="button" class="btn btn-info btn-round" data-toggle="modal" data-target="#loginModal">
    Login
  </button>
    </div>
    </nav>
  </header>

<main role="main">

  <div id="Slider" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#Slider" data-slide-to="0" class="active"></li>
      <li data-target="#Slider" data-slide-to="1"></li>
      <li data-target="#Slider" data-slide-to="2"></li>
      <li data-target="#Slider" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
	  <img src="images/sau4.jpg" class="bd-placeholder-img" focusable="false" role="img">        
      </div>
      <div class="carousel-item">
        <img src="images/sau2.jpg" class="bd-placeholder-img"  focusable="false" role="img">        
      </div>
      <div class="carousel-item">
        <img src="images/sau3.jpg" class="bd-placeholder-img" focusable="false" role="img">       
      </div>
      <div class="carousel-item">
        <img src="images/sau1.jpg" class="bd-placeholder-img" focusable="false" role="img">        
      </div>
    </div>
    <a class="carousel-control-prev" href="#Slider" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Geri</span>
    </a>
    <a class="carousel-control-next" href="#Slider" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">İleri</span>
    </a>  

  </div>
<hr class="mt-3 mb-3">
  <!--================================================== -->

  <!-- FOOTER -->
	<?php
include "footer.php";
?>

<?php
include "login.php";
?>

	

</main>
		
	</body>
	
		
</html>