<!DOCTYPE html>

<html>

<head>
	
	<title> TAC Homepage </title>
	<link rel = "icon" type = "image/logo.png" href = "images/logo.png" sizes = "1000x1000"/>

	<meta name = "viewport" content = "width=device-width, initial-scale=1.0">
	<link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity "sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src = 'https://kit.fontawesome.com/a076d05399.js' crossorigin = 'anonymous'></script>
	
	<link rel = "stylesheet" href = "css/navbarstyle.css">
	<link rel = "stylesheet" href = "css/footerstyle.css">
	
	<link rel = "stylesheet" href = "css/homepage.css">
	
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons'>

</head>

<!-- Header -->
<header>

	<div id = "main">
		
		<div>
			<a class = "navbar-brand" href = "<?php echo 'Landingpage.php'; ?>">
			<img src = "images/logo.png" width = "100px" height = "80px"></a>
		</div>	
	
		<div>
		
		<form class="form-inline my-2 my-lg-0">
				
				<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" style ="width: 80%; height: 30px;">
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
				
			</form>
		
		</div>
		<div>
			<button class = "btn"><i class = "fas fa-comments"></i></button>
			<button class = "btn"><i class = "fas fa-heart"></i></button>
			<button class = "btn"><i class = "fas fa-cart-plus"></i></button>
		
			<a  href = "<?php echo 'Login.php'; ?>" style = "color: #FFFFFF;"> Login </a>
			<a  href = "<?php echo 'Signup.php'; ?>" style = "color: #FFFFFF;"><button class = "btn"> Sign Up </a></button>
		</div>
	
	</div>

</header>

<body>

<!-- Navigation Bar -->

	<nav class = "navbar navbar-expand-lg navbar-light navbar-custom sticky-top">
		
		<a style = "margin-left: 20px;" class = "navbar-brand" href = "<?php echo 'Landingpage.php'; ?>"> TORI ANIME COLLECTIBLES </a>
			<button class = "navbar-toggler" type = "button" data-toggle = "collapse" data-target = "#navbarSupportedContent"aria-controls = "navbarSupportedContent" aria-expanded = "false" aria-label = "Toggle navigation">
				<span class = "navbar-toggler-icon"></span>
			</button>

		<div class = "collapse navbar-collapse" id = "navbarSupportedContent">
		<div class = "navbar-nav ml-auto">
			
			<a class = "nav-link" href = "<?php echo 'Homepage.php'; ?>"> Home <span class = "sr-only">(current)</span></a>
			<a class = "nav-link" href = "<?php echo 'Shop.php'; ?>"> Shop </a>
			<a class = "nav-link" href = "<?php echo 'About.php'; ?>"> About </a>
			<a class = "nav-link" href = "<?php echo 'Merch.php'; ?>"> Merch </a>
			<a class = "nav-link" href = "<?php echo 'Nau.php'; ?>"> News and Updates </a>
			<a class = "nav-link" href = "<?php echo 'Helpcenter.php'; ?>"> Help Center </a>
			
		</div>
		</div>
	
	</nav>
	
	<!-- Carousel -->
	<div id="carouselExampleIndicators" class="carousel slide pointer-event" data-ride="carousel">
		
		<ol class="carousel-indicators">
			
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class=""></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
		
		</ol>
		
		<div class="carousel-inner">
		<div class="carousel-item active carousel-item-left">
      
			<img style="height: 490px" class="d-block w-100" src="images/banner/bannerMerch1.png" alt="First slide">
		</div>
    
		<div class="carousel-item carousel-item-next carousel-item-left">
			
			<img style="height: 490px" class="d-block w-100" src="images/banner/bannerMerch1.png" alt="Second slide">
		
		</div>
    
		<div class="carousel-item">
			
			<img style="height: 490px" class="d-block w-100" src="images/banner/bannerMerch1.png" alt="Third slide">
		
		</div>
		
		</div>
  
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
  
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
	
	</div>
	
	
	<!-- Contents -->
	
	<div class="container">
		<div class="contenttt">
	
			<div class="row">
			
			<div class="column">
				
				<div class ="divv">
				
				
				<div class="card">
  <div class="products">
    <div class="product active" product-id="1" product-color="#FFFFFF">
      <div class="thumbnail"><img style="width: 300px; height:300px; margin-left:20px;"src="images/product/33.png"/></div>
      <h1 class="title"></h1>
      <p class="description"></p>
    </div>
    <div class="product" product-id="2" product-color="#FFFFFF">
      <div class="thumbnail"><img style="width: 300px; height:300px; margin-left:20px;" src="images/product/34.png"/></div>
      <h1 class="title"></h1>
      <p class="description"></p></div>
    <div class="product" product-id="3" product-color="#FFFFFF">
      <div class="thumbnail"><img style="width: 300px; height:300px; margin-left:20px;" src="images/product/10.png"/></div>
      <h1 class="title"></h1>
      <p class="description"></p></div>
    <div class="product" product-id="4" product-color="#FFFFFF">
      <div class="thumbnail"><img style="width: 300px; height:300px; margin-left:20px;" src="images/product/36.png"/></div>
      <h1 class="title"></h1>
      <p class="description"></p></div>
    <div class="product" product-id="5" product-color="#FFFFFF">
      <div class="thumbnail"><img style="width: 300px; height:300px; margin-left:20px;" src="images/product/37.png"/></div>
      <h1 class="title"></h1>
      <p class="description"></p> </div>
  </div>
  <div class="footer"><a class="btn" id="prev" href="#" ripple="" ripple-color="#FFFFFF">Prev</a><a class="btn" id="next" href="#" ripple="" ripple-color="#FFFFFF">Next</a></div>
</div>
			
				</div>
			
			</div>
			
			<div class="column">
				
				<div class ="divv">
				
				
				<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><img src="images/box.png" alt=""></h5>
        <p class="card-text"></p>
        <a href="#" class="btn btn-primary">Pre-order</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><img src="images/buy.png" alt=""></h5>
        <p class="card-text"></p>
        <a href="#" class="btn btn-primary">Shop</a>
      </div>
    </div>
  </div>
</div>

<br><br>


<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><img src="images/sales.png" alt=""></h5>
        <p class="card-text"></p>
        <a href="#" class="btn btn-primary">Tori Merch</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><img src="images/sale_2.png" alt=""></h5>
        <p class="card-text"></p>
        <a href="#" class="btn btn-primary">Promotions</a>
      </div>
    </div>
  </div>
</div>
			
				</div>
			
			</div>
		
		</div>
 
		</div>
		</div>
	
		<br><br>
	
	<div class = "container">
	<div class = "center">
	
	<h1><b> FRESH ARRIVALS </b></h1>
	
	<section class="pt-5 pb-5">
  <div class="container">
    <div class="row">
        <div class="col-6">
    
        </div>
        <div class="col-6 text-right">
            <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                <i class="fa fa-arrow-left"></i>
            </a>
            <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
                <i class="fa fa-arrow-right"></i>
            </a>
        </div>
        <div class="col-12">
            <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">

                            <div class="col-md-4 mb-3">
                            
                                <div class="card">
                                <a href="#" class="btn btn-primary stretched-link">
                                    <img class="img-fluid" style="width: 300px; height:300px;" alt="100%x280" src="images/product/21.png">
                                </a>
                                    <div class="card-body">
                                        <h4 class="card-title">PHP00.00</h4>
                                        <p class="card-text">Waver Velvet Fate/Zero DXF Vol 1 Banpresto CraneKing</p>
                                    </div>
                                    
                                </div>
                            
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                <a href="#" class="btn btn-primary stretched-link">
                                    <img class="img-fluid" style="width: 300px; height:300px;" alt="100%x280" src="images/product/22.png">
                                </a>
                                    <div class="card-body">
                                        <h4 class="card-title">PHP00.00</h4>
                                        <p class="card-text">Kayneth El-Melloi Archibald Fate/Zero DXF Vol 1 Banpresto CraneKing</p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                <a href="#" class="btn btn-primary stretched-link">
                                    <img class="img-fluid" style="width: 300px; height:300px;" alt="100%x280" src="images/product/23.png">
                                </a>    
                                    <div class="card-body">
                                        <h4 class="card-title">PHP00.00</h4>
                                        <p class="card-text">One piece glitter & glamours color walk style Nami Banpresto</p>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">

                            <div class="col-md-4 mb-3">
                                <div class="card">
                                <a href="#" class="btn btn-primary stretched-link">
                                    <img class="img-fluid" style="width: 300px; height:300px;" alt="100%x280" src="images/product/24.png">
                                </a>     
                                    <div class="card-body">
                                        <h4 class="card-title">PHP00.00</h4>
                                        <p class="card-text">One piece glitter & glamours x materia carifa Banpresto</p>

                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                <a href="#" class="btn btn-primary stretched-link">    
                                    <img class="img-fluid" style="width: 300px; height:300px;" alt="100%x280" src="images/product/25.png">
                                </a>     
                                    <div class="card-body">
                                        <h4 class="card-title">PHP00.00</h4>
                                        <p class="card-text">EXQ Figure Racing Miku 2018 Team Ukyo ver. Banpresto</p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                <a href="#" class="btn btn-primary stretched-link">  
                                    <img class="img-fluid" style="width: 300px; height:300px;" alt="100%x280" src="images/product/26.png">
                                </a>
                                    <div class="card-body">
                                        <h4 class="card-title">PHP00.00</h4>
                                        <p class="card-text">Fullmetal alchemist brotherhood edward elric figure furyu</p>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">

                            <div class="col-md-4 mb-3">
                                <div class="card">
                                <a href="#" class="btn btn-primary stretched-link">  
                                    <img class="img-fluid" style="width: 300px; height:300px;" alt="100%x280" src="images/product/27.png">
                                </a>
                                    <div class="card-body">
                                        <h4 class="card-title">PHP00.00</h4>
                                        <p class="card-text">One piece girly girls perhona Banpresto</p>

                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                <a href="#" class="btn btn-primary stretched-link">  
                                    <img class="img-fluid" style="width: 300px; height:300px;" alt="100%x280" src="images/product/28.png">
                                </a>
                                    <div class="card-body">
                                        <h4 class="card-title">PHP00.00</h4>
                                        <p class="card-text">Monkey d luffy the grandline men vol. 1 DXF banpresto</p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                <a href="#" class="btn btn-primary stretched-link">  
                                    <img class="img-fluid" style="width: 300px; height:300px;" alt="100%x280" src="images/product/29.png">
                                </a>
                                    <div class="card-body">
                                        <h4 class="card-title">PHP00.00</h4>
                                        <p class="card-text">Japan Anime "MACROSS Frontier" Original Banpresto EXQ Collection Figure - Sheryl Nome</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
	
	</div>
	</div>
	
	<div class = "container">
	<div class = "center">
	
	<h1><b> POPULAR </b></h1>
	
	</div>
	</div>
	
	<section class="pt-5 pb-5">
  <div class="container">
    <div class="row">
        <div class="col-6">
    
        </div>
        <div class="col-6 text-right">
            <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators3" role="button" data-slide="prev">
                <i class="fa fa-arrow-left"></i>
            </a>
            <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators3" role="button" data-slide="next">
                <i class="fa fa-arrow-right"></i>
            </a>
        </div>
        <div class="col-12">
            <div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel">

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">

                            <div class="col-md-4 mb-3">
                                <div class="card">
                                <a href="#" class="btn btn-primary stretched-link"> 
                                    <img class="img-fluid" style="width: 300px; height:300px;" alt="100%x280" src="images/product/10.png">
                                </a>
                                    <div class="card-body">
                                        <h4 class="card-title">PHP00.00</h4>
                                        <p class="card-text">Gintoki Sakata Banpresto Ichiban Kuji GINTAMA It 's summer festival!</p>

                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                <a href="#" class="btn btn-primary stretched-link"> 
                                    <img class="img-fluid" style="width: 300px; height:300px;" alt="100%x280" src="images/product/11.png">
                                </a>
                                    <div class="card-body">
                                        <h4 class="card-title">PHP00.00</h4>
                                        <p class="card-text">Gintoko sakata Banpresto Break time figure vol.1</p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                <a href="#" class="btn btn-primary stretched-link"> 
                                    <img class="img-fluid" style="width: 300px; height:300px;" alt="100%x280" src="images/product/12.png">
                                </a>
                                    <div class="card-body">
                                        <h4 class="card-title">PHP00.00</h4>
                                        <p class="card-text">Gintoko sakata jumping from gintama Banpresto 83608 DXF Figure Statue 14cm</p>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">

                            <div class="col-md-4 mb-3">
                                <div class="card">
                                <a href="#" class="btn btn-primary stretched-link"> 
                                    <img class="img-fluid" style="width: 300px; height:300px;" alt="100%x280" src="images/product/13.png">
                                </a>
                                    <div class="card-body">
                                        <h4 class="card-title">PHP00.00</h4>
                                        <p class="card-text">Gintoko Sakata Ready Banpresto Karaugeki DXF Figure</p>

                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                <a href="#" class="btn btn-primary stretched-link"> 
                                    <img class="img-fluid" style="width: 300px; height:300px;" alt="100%x280" src="images/product/14.png">
                                </a>
                                    <div class="card-body">
                                        <h4 class="card-title">PHP00.00</h4>
                                        <p class="card-text">Gintama Gintoki Sakata Banpresto DXF figure Shirogane no Tamashii Banpresto</p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                <a href="#" class="btn btn-primary stretched-link"> 
                                    <img class="img-fluid" style="width: 300px; height:300px;" alt="100%x280" src="images/product/15.png">
                                </a>
                                    <div class="card-body">
                                        <h4 class="card-title">PHP00.00</h4>
                                        <p class="card-text">Gintoki Sakata Banpresto Silver soul DX vol.1</p>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">

                            <div class="col-md-4 mb-3">
                                <div class="card">
                                <a href="#" class="btn btn-primary stretched-link"> 
                                    <img class="img-fluid" style="width: 300px; height:300px;" alt="100%x280" src="images/product/16.png">
                                </a>
                                    <div class="card-body">
                                        <h4 class="card-title">PHP00.00</h4>
                                        <p class="card-text">murasakibara atsushi DXF cross x players banpresto</p>

                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                <a href="#" class="btn btn-primary stretched-link"> 
                                    <img class="img-fluid" style="width: 300px; height:300px;" alt="100%x280" src="images/product/17.png">
                                </a>
                                    <div class="card-body">
                                        <h4 class="card-title">PHP00.00</h4>
                                        <p class="card-text">Shintaro Midorima  DXF cross x players banpresto</p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                <a href="#" class="btn btn-primary stretched-link"> 
                                    <img class="img-fluid" style="width: 300px; height:300px;" alt="100%x280" src="images/product/16.png">
                                </a>
                                    <div class="card-body">
                                        <h4 class="card-title">PHP00.00</h4>
                                        <p class="card-text">Akashi Seijuro Banpresto chibi kyun-chara kuroko no basuke</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<div class="container">
<div class = "contentu">
		<div class="center">
		
			<h1> TORI MERCH </h1>
			<P> keme keme keme <P>
		
		<br>
			<button type="button" style="background-color: #7C7E82" class="btn btn-lg">CHECK NOW</button>
 
		</div>
		</div>
		</div>
		
		<div class = "container">
		<div class = " align">
		
<button type="button" class="btn btn-secondary btn-lg btn-block">HOT DEALS AND OFFERS</button>
<button type="button" class="btn btn-secondary btn-lg btn-block">VOUCHERS</button>
<button type="button" class="btn btn-secondary btn-lg btn-block">WELCOME GIFT FOR NEWBIES</button>

</div>
</div>

<div class ="container-fluid">
<div class ="contentuu">

<h1> WE GOCHA BRO </h1>

<p> Collecting anime, manga, and other figures is a popular pastime allowing aficionados to create miniature worlds inhabited by their favorite characters. Figures are not limited to pop culture.</p>

<br>

<button type="button" style="background-color: #7C7E82" class="btn btn-lg">BUTTON</button>
<br>
<br>
<h1> HAVE A QUESTION? </h1>
<br>

<button type="button" style="background-color: #7C7E82" class="btn btn-lg">CHECK NOW</button>



</div>
</div>

<div class = "container">
<div class = "contentuuu">

<h1> NEWS AND UPDATE </h1>

<div class="card-deck">
  <div class="card">
    <img src="images/product/22.png "style="width:50%; height:50%; object-fit:contain;" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img src="images/product/16.png "style="width:50%; height:50%; object-fit:contain;" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img src="images/product/17.png "style="width:50%; height:50%; object-fit:contain;" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>

</div>
</div>

<div class = "container-fluid">
<div class = "contentuuuu">
<div class = "center">

<p><b> Authenticity Guaranteed </b></p>
<p>Why</p>
<p>Tagline</p>
<p>Go</p>

</div>
</div>
</div>

<!--footer start-->
<footer>
	
	<div class="footer-wrap">
		<div class="container first_class">
		<div class="row">
			<div class="col-md-4 col-sm-6">
		
				<h3>Contact Us</h3>
				<p>Have any concern?</p>
	
			</div>
	
			<div class="col-md-4 col-sm-6">
		
				<form class="newsletter">
					<input type="text" placeholder="Email Us"> 
					<button class="newsletter_submit_btn" type="submit"><i class="fa fa-paper-plane"></i></button>  
				</form>
	
			</div>

			<div class="col-md-4 col-sm-6">
			<div class="col-md-12">
			<div class="standard_social_links">
		
			<div>
			
				<li class="round-btn btn-facebook"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
				<li class="round-btn btn-linkedin"><a href="#"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
				<li class="round-btn btn-twitter"><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
				<li class="round-btn btn-instagram"><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
				<li class="round-btn btn-whatsapp"><a href="#"><i class="fab fa-whatsapp" aria-hidden="true"></i></a></li>
				<li class="round-btn btn-envelop"><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>
				</li>
			
			</div>
	
			</div>  
			</div>
		
			<div class="clearfix"></div>
			<div class="col-md-12"><h3 style="text-align: right;"> Stay Connected </h3></div>
		
			</div>
		</div>
		</div>
		
		<div class="second_class">
		<div class="container second_class_bdr">
		<div class="row">
			<div class="col-md-4 col-sm-6">
			<div class="footer-logo">
				
				<img src="images/logo.png" alt="logo">
			
			</div>
				
				<p> All Rights Reserved Copyright 2021 </p>
			
			</div>

			<div class="col-md-3 col-sm-6">
				<ul class="footer-links">
				
					<a href="<?php echo 'Homepage.php'; ?>">| Home</a><br>
					<a href="<?php echo 'Shop.php'; ?>">| Shop</a><br>
					<a style= "margin-left: 50px;" href="<?php echo 'Sitemap.php'; ?>">Site Map</a><br>
					<a style= "margin-left: 50px;" href="<?php echo 'Categories.php'; ?>">Categories</a><br>
					<a style= "margin-left: 50px;" href="<?php echo 'Termsandservices.php'; ?>">Terms and Service</a><br>
					<a style= "margin-left: 50px;" href="<?php echo 'Privacypolicies.php'; ?>">Privacy Policies</a><br>
					<a style= "margin-left: 50px;" href="<?php echo 'Helpcenter.php'; ?>">Help Center</a><br>
					<a href="<?php echo 'About.php'; ?>">| About</a><br>
					<a href="<?php echo 'Torimerch.php'; ?>">| Tori Merch</a><br>
					<a href="<?php echo 'Nau.php'; ?>">| News and Updates</a><br>
			
				</ul>
			</div>

			<div class="col-md-1 col-sm-6">
				
				<ul class="footer-category"></ul>
			
			<div class="clearfix"></div>
			</div>
			
			<div class="col-md-3 col-sm-6">
				
				<ul class="footer-links">
				
					<div class="container3">
					
						<p> Products are distributed BY: </p>
					
					<div class="logo2">
					
						<img src="images/logo.png" alt="logo">	</div>
						<p> Distributor Name </p>
						<p> Address </p>
				
					<div class="logo2"> <img src="images/logo.png" alt="logo">
					</div>
					
						<p> Distributor Name </p>
						<p> Address </p>
					
					</div>
				
				</ul>
			</div>
			
		</div>
		</div>
		</div>
		
	</div>
	
</footer>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!--footer end-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!-- Font Awesome 5 links-->
<script src="https://kit.fontawesome.com/fddf5c0916.js" crossorigin="anonymous"></script>


<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>
	
</body>
</html>