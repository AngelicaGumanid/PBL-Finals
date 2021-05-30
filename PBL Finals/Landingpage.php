<!DOCTYPE html>

<html>

<head>

<title> Welcome to TAC </title>
	<link rel = "icon" type = "image/logo.png" href = "images/logo.png" sizes = "1000x1000"/>
	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.css">
	<link href="css/landingstyle.css" rel="stylesheet">
	
	<style>
		.astonish {
			visibility: visible;
		}
		
		@media (min-width: 768px) {
			.astonish {
				visibility: hidden;
			}
			.animated {
				visibility: visible;
			}
		}
	
	</style>

</head>

<body>

<!-- Main Navigation -->

	<nav class="main-nav" id="main-nav">
		
		<div class="content-wrapper-sm">
			
			<a href="#" class="navbar-brand">Tori Anime Collectibles</a>
	
			<div id="menu-button">
			<div class="bar1"></div>
			<div class="bar2"></div>
			<div class="bar3"></div>
			</div>
			
			<ul class="nav-links">
				
				<li><a href="#about"> About </a></li>
				<li><a href="#reserve"> Shop </a></li>
				<li><a href="#contact"> Contact </a></li>
			
			</ul>
		
		</div>
	
	</nav>

<!-- Main header -->
	
	<header>
	
	<!-- First replaceble image -->
		<img class="img-absolute" src="images/background/bg1.png" alt="City 1">

			<div class="wrapper astonish animated fadeInDown">
	
				<h2> Find the collectibles you want<br>
				DI KO ALAM LALAGAY</h2>
				<a href = "<?php echo 'Homepage.php'; ?>" class="btn btn-outline-purple">Homepage</a>

			</div>
	
	</header>

	<!-- Main content -->
	<main>
	
		<div class="content-wrapper" id="about">
		
		<!-- second replaceble image -->
			
			<img class="img-absolute" src="images/background/bg2.png" alt="City 2">
		
			<div class="grid">
			<div class="grid-col-sm-12 grid-col-md-6 astonish" data-animation="fadeInLeft">
				
				<h2 class="section-title">About Tori Anime Collectibles</h2>
				<p> Hinatdog ni hatdog ang hotdog ni hatdog na na hatdog dahil hinantdog ni hatdog. Alamin ang mga kaalamanan na dapat malaman ng mga may gusto mag ka alam para matuto at malaman ang mga bagay bagay na dapat inaalam para mag ka aalam.</p>
				<p> Ayon sa magandang dilag puso ko ay iyong nabihag wala na nga at labis keme keme di ko na alam lyric basta magandang dilag</p>
				<p> Ako ay isang tao nanunumpang aasta bilang tao.... minsan. Pero dahil ako ay tao gusto ko ng cash pambili ng lobo lumipad sa langit di ko na nakita pumutok na pala yan kase bili bili ka edi may pagkain sana.</p>
			
			</div>
			</div>
		
		</div>
	
		<div id="reserve" class="content-wrapper-lg text-center astonish" data-animation="zoomIn">
			
			<h2 class="section-title">Explore More</h2>
			<p>Gusto mo ba makita ang tinatagong collectibles ni Ezi. Tara icheck mo ito dito sa page na to click mo yun oh para derectho ka sa page nya olryt hohoohohohohoohohohohoh.</p>
		
			<a href = "<?php echo 'Homepage.php'; ?>" class="btn btn-outline-purple">Homepage</a>
		
		</div>

               <div class="content-wrapper" id="contact">
                    <!-- Third replaceble image -->

                    <!-- Custom form, important note: you will need additional code in order to make this form work -->
                    <form class="contact-form astonish" action="#" method="post" data-animation="fadeInRight">
                         <h2 class="section-title">Contact Us</h2>
                         <div class="grid">
                              <div class="grid-col-sm-12 grid-col-md-6">
                                   <div class="form-group">
                                        <input type="text" name="firstName" required>
                                        <label for="firstName">First Name:</label>
                                   </div>
                              </div>
                              <div class="grid-col-sm-12 grid-col-md-6">
                                   <div class="form-group">
                                        <input type="text" name="lastName" required>
                                        <label for="lasttName">Last Name:</label>
                                   </div>
                              </div>
                              <div class="grid-col-sm-12">
                                   <div class="form-group">
                                        <input type="text" name="email" required>
                                        <label for="email">Email:</label>
                                   </div>
                              </div>
                              <div class="grid-col-sm-12">
                                   <div class="form-group">
                                        <textarea name="message" required></textarea>
                                        <label for="message">Message:</label>
                                   </div>
                              </div>
                         </div>
                         <input class="btn btn-outline-teal" type="submit" value="Send">
                    </form>
               </div>
			   
          </main>

          <!-- Main footer -->
          <footer>
               <div class="content-wrapper-sm display-flex-between">
                    <!-- Easily replaceble copyright information -->
                    <small>Your copyright 2021</small>

               </div>
          </footer>

          <!-- Scripts placed at the bottom for faster loading -->
          <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
          <script src="js/menu.js" charset="utf-8"></script>

          <!-- Optional js files -->
          <!-- Quick note: if you remove astonish, make sure you remove the embedded styles in the top -->
          <script src="js/astonish.js" charset="utf-8"></script>
          <script src="js/nav.js" charset="utf-8"></script>
          <script src="js/scroll.js" charset="utf-8"></script>
     </body>
</html>
