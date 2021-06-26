<!doctype html>
<html>
    <head>
        <!-- meta data -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <!--font-family-->
		<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
        <!-- title of site -->
        <title>Sarungo - Invoice</title>
        <!-- For favicon png -->
		<link rel="shortcut icon" type="image/icon" href="<?php echo base_url('public/furn/assets/logo/favicon.png'); ?>"/>
        <!--font-awesome.min.css-->
        <link rel="stylesheet" href="<?php echo base_url('public/furn/assets/css/font-awesome.min.css'); ?>">
        <!--linear icon css-->
		<link rel="stylesheet" href="<?php echo base_url('public/furn/assets/css/linearicons.css'); ?>">
		<!--animate.css-->
        <link rel="stylesheet" href="<?php echo base_url('public/furn/assets/css/animate.css'); ?>">
        <!--owl.carousel.css-->
        <link rel="stylesheet" href="<?php echo base_url('public/furn/assets/css/owl.carousel.min.css'); ?>">
		<link rel="stylesheet" href="<?php echo base_url('public/furn/assets/css/owl.theme.default.min.css'); ?>">
        <!--bootstrap.min.css-->
        <link rel="stylesheet" href="<?php echo base_url('public/furn/assets/css/bootstrap.min.css'); ?>">
		<!-- bootsnav -->
		<link rel="stylesheet" href="<?php echo base_url('public/furn/assets/css/bootsnav.css'); ?>">	
        <!--style.css-->
        <link rel="stylesheet" href="<?php echo base_url('public/furn/assets/css/style.css'); ?>">
        <!--responsive.css-->
        <link rel="stylesheet" href="<?php echo base_url('public/furn/assets/css/responsive.css'); ?>">
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		
        <!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
	
	<body>

			<!-- top-area Start -->
			<div class="top-area">
				<div class="header-area">
					<!-- Start Navigation -->
				    <nav class="navbar navbar-default bootsnav  navbar-sticky navbar-scrollspy"  data-minus-value-desktop="70" data-minus-value-mobile="55" data-speed="1000">
				        <div class="container">            
				            <!-- Start Atribute Navigation -->
				            <div class="attr-nav">
				                <ul>
									<?php if(!$this->session->user) { ?>
									<li>
				                		<a href="<?php echo base_url('auth/getLogin') ?>">Login</a>
				                	</li>
				                	<li>
				                		<a href="<?php echo base_url('auth/getRegister') ?>">Register</a>
				                	</li>
									<?php } else { ?>
				                	<li>
				                		<a href="<?php echo base_url('auth/logout'); ?>">Keluar</a>
				                	</li>
									<?php }?>
				                </ul>
				            </div><!--/.attr-nav-->
				            <!-- End Atribute Navigation -->

				            <!-- Start Header Navigation -->
				            <div class="navbar-header">
				                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
				                    <i class="fa fa-bars"></i>
				                </button>
				                <a class="navbar-brand" href="<?php echo base_url() ?>">Sarungo</a>

				            </div><!--/.navbar-header-->
				            <!-- End Header Navigation -->
				        </div><!--/.container-->
				    </nav><!--/nav-->
				    <!-- End Navigation -->
				</div><!--/.header-area-->
			    <div class="clearfix"></div>

			</div><!-- /.top-area-->
			<!-- top-area End -->

		</header><!--/.welcome-hero-->
		<!--welcome-hero end -->

		<!--new-arrivals start -->
		<section id="new-arrivals" class="new-arrivals" style="margin-top: 25px;">
			<div class="container">
				<div class="section-header">
					<h2>Invoice</h2>
				</div><!--/.section-header-->
				<div class="new-arrivals-content">
					<?php for ($i=0; $i < count($transactions); $i++) { ?>
						<div class="row">
							<div class="col-md-3 col-sm-4">
								<div class="single-new-arrival">
									<div class="single-new-arrival-bg">
										<img src="<?php echo base_url('image/' . $transactions[$i]->image); ?>" alt="new-arrivals images">
										<div class="single-new-arrival-bg-overlay"></div>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4" style="margin-top: 100px;">
								<div class="single-new-arrival">
									<h4><?php echo $transactions[$i]->name ?></h4>
									<p class="arrival-product-price"><?php echo $transactions[$i]->total ?> x $<?php echo $transactions[$i]->price ?> = $<?php echo (int) $transactions[$i]->price * (int) $transactions[$i]->total ?></p>

									<div class="row">
									<button onclick="window.location.href='<?php echo base_url('transaction/addTransaction/' . $transactions[$i]->id) ?>'" class="col-md-6 btn btn-success">Add</button>
									<button onclick="window.location.href='<?php echo base_url('transaction/minusTransaction/' . $transactions[$i]->id) ?>'" class="col-md-6 btn btn-warning">Minus</button>
									</div>
									<button onclick="window.location.href='<?php echo base_url('transaction/deleteTransaction/' . $transactions[$i]->id) ?>'" class="btn btn-danger">Delete</button>
								</div>
							</div>
						</div>
					<?php } ?>
				</div>
				<div class="col-md-6 col-sm-8" style="margin-top: 100px;">
					<div class="col-md-3 col-sm-4">
						<div class="single-new-arrival">
							<p class="arrival-product-price">TOTAL = $<?php echo $total_price ?></p>
							<button onclick="window.location.href='<?php echo base_url('transaction/payment/') ?>'" class="btn btn-primary">Payment</button>
						</div>
					</div>
					<div class="col-md-3 col-sm-4">
						<div class="single-new-arrival">
						<p class="arrival-product-price">.</p>
							<button onclick="window.location.href='<?php echo base_url('/') ?>'" class="btn btn-info">Back</button>
						</div>
					</div>
				</div><!--/.container-->
				</div>
			</div>
		
		</section><!--/.new-arrivals-->
		<!--new-arrivals end -->

		</section><!--/.blog-->
		<!--blog end -->

		<!--footer start-->
		<footer id="footer"  class="footer">
			<div class="container">
				<div class="hm-footer-copyright text-center">
					<div class="footer-social">
						<a href="#"><i class="fa fa-facebook"></i></a>	
						<a href="#"><i class="fa fa-instagram"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
						<a href="#"><i class="fa fa-pinterest"></i></a>
						<a href="#"><i class="fa fa-behance"></i></a>	
					</div>
					<p>
						&copy;copyright. designed and developed by <a href="https://www.themesine.com/">themesine</a>
					</p><!--/p-->
				</div><!--/.text-center-->
			</div><!--/.container-->
			<div id="scroll-Top">
				<div class="return-to-top">
					<i class="fa fa-angle-up " id="scroll-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back to Top" aria-hidden="true"></i>
				</div>
			</div><!--/.scroll-Top-->
        </footer><!--/.footer-->
    </body>
	<script src="<?php echo base_url('public/furn/assets/js/jquery.js'); ?>"></script>
	<!--modernizr.min.js-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
	<!--bootstrap.min.js-->
	<script src="<?php echo base_url('public/furn/assets/js/bootstrap.min.js'); ?>"></script>
	<!-- bootsnav js -->
	<script src="<?php echo base_url('public/furn/assets/js/bootsnav.js'); ?>"></script>
	<!--owl.carousel.js-->
	<script src="<?php echo base_url('public/furn/assets/js/owl.carousel.min.js'); ?>"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
	<!--Custom JS-->
	<script src="<?php echo base_url('public/furn/assets/js/custom.js'); ?>"></script>
</html>