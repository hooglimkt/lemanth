<?php include "includes.php";

include "Class/textos.class.php";
$textos = Textos::getInstance(Conexao::getInstance());

$texto   = $textos->rsDados(1);
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>
		<?php include "description.php";?>
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet"> 	
		<link href="https://fonts.googleapis.com/css?family=Lato:400,700,900" rel="stylesheet"> 

		<!-- BOOTSTRAP CSS -->
		<link href="<?php echo SITE_URL;?>/css/bootstrap.min.css?v=<?php echo version;?>" rel="stylesheet">
				
		<!-- FONT ICONS -->
		<link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css?v=<?php echo version;?>" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" rel="stylesheet" crossorigin="anonymous">		
		<link href="<?php echo SITE_URL;?>/css/flaticon.css?v=<?php echo version;?>" rel="stylesheet">

		<!-- PLUGINS STYLESHEET -->
		<link href="<?php echo SITE_URL;?>/css/menu.css?v=<?php echo version;?>" rel="stylesheet">	
		<link id="effect" href="<?php echo SITE_URL;?>/css/dropdown-effects/fade-down.css?v=<?php echo version;?>" media="all" rel="stylesheet">
		<link href="<?php echo SITE_URL;?>/css/magnific-popup.css?v=<?php echo version;?>" rel="stylesheet">	
		<link href="<?php echo SITE_URL;?>/css/owl.carousel.min.css?v=<?php echo version;?>" rel="stylesheet">
		<link href="<?php echo SITE_URL;?>/css/owl.theme.default.min.css?v=<?php echo version;?>" rel="stylesheet">
		<link href="<?php echo SITE_URL;?>/css/animate.css?v=<?php echo version;?>" rel="stylesheet">
		<link href="<?php echo SITE_URL;?>/css/jquery.datetimepicker.min.css?v=<?php echo version;?>" rel="stylesheet">
				
		<!-- TEMPLATE CSS -->
		<link href="<?php echo SITE_URL;?>/css/style.css?v=<?php echo version;?>" rel="stylesheet">
		
		<!-- RESPONSIVE CSS -->
		<link href="<?php echo SITE_URL;?>/css/responsive.css?v=<?php echo version;?>" rel="stylesheet"> 
		<?php include "inc-tagmanager-head.php";?>
	</head>
	<body>
		<?php include "inc-tagmanager-body.php";?>

		<div id="page" class="page">

<?php include "header.php";?>
		
			<section id="info-4" class="info-section division">
				<div class="container">


					<!-- TOP ROW -->
					<div class="top-row">
						<div class="row d-flex align-items-center">


						<!-- INFO IMAGE -->
						<div class="col-lg-6">
							<div class="info-4-img text-center wow fadeInUp" data-wow-delay="0.6s">
								<img class="img-fluid" src="<?php echo SITE_URL;?>/img/<?php echo $texto->foto;?>" alt="<?php echo $texto->titulo;?>" title="<?php echo $texto->titulo;?>">
							</div>
						</div>
						<div class="col-lg-6">
							<div class="txt-block pc-30 wow fadeInUp" data-wow-delay="0.4s">
					 			<h1 class="h3-md"><?php echo $texto->titulo;?></h1>
								<?php echo $texto->texto;?>
							</div>
						</div>	
						</div>  
					</div>
				
				</div>	 
			</section>
	
			<section id="info-4" class="info-section division">
				<div class="container">
					<div class="bottom-row">
						<div class="row d-flex align-items-center">
						    <div class="col-lg-6 d-block d-sm-none">
								<div class="info-4-img text-center wow fadeInUp" data-wow-delay="0.6s">
									<img class="img-fluid" src="<?php echo SITE_URL;?>/img/<?php echo $texto->foto_2;?>" alt="<?php echo $texto->titulo2;?>" title="<?php echo $texto->titulo2;?>">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="txt-block pc-30 wow fadeInUp" data-wow-delay="0.4s">
					 				<h3 class="h3-md"><?php echo $texto->titulo2;?></h3>
									<?php echo $texto->texto_2;?>
								</div>
							</div>	
							<div class="col-lg-6 d-none d-sm-block">
								<div class="info-4-img text-center wow fadeInUp" data-wow-delay="0.6s">
									<img class="img-fluid" src="<?php echo SITE_URL;?>/img/<?php echo $texto->foto_2;?>" alt="<?php echo $texto->titulo2;?>" title="<?php echo $texto->titulo2;?>">
								</div>
							</div>
						</div>  
					</div>
				</div>	 
			</section>
			<section id="about-4" class="wide-60 about-section division text-center">
				<div class="container">
					<div class="row">
						<div class="col-lg-4">
							<div class="abox-4 mb-40 wow fadeInUp" data-wow-delay="0.4s">
								<img class="img-fluid" src="<?php echo SITE_URL;?>/img/<?php echo $texto->foto_3;?>" alt="<?php echo $texto->titulo3;?>" title="<?php echo $texto->titulo3;?>" />	
								<div class="abox-4-txt">
									<h5 class="h5-xs text-center"><a><?php echo $texto->titulo3;?></a></h5>
									<?php echo $texto->texto_3;?>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="abox-4 mb-40 wow fadeInUp" data-wow-delay="0.4s">
								<img class="img-fluid" src="<?php echo SITE_URL;?>/img/<?php echo $texto->foto_4;?>" alt="<?php echo $texto->titulo4;?>" title="<?php echo $texto->titulo4;?>" />	
								<div class="abox-4-txt">
									<h5 class="h5-xs text-center"><a><?php echo $texto->titulo4;?></a></h5>
									<?php echo $texto->texto_4;?>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="abox-4 mb-40 wow fadeInUp" data-wow-delay="0.4s">
								<img class="img-fluid" src="<?php echo SITE_URL;?>/img/<?php echo $texto->foto_5;?>" alt="<?php echo $texto->titulo5;?>" title="<?php echo $texto->titulo5;?>" />	
								<div class="abox-4-txt">
									<h5 class="h5-xs text-center"><a><?php echo $texto->titulo5;?></a></h5>
									<?php echo $texto->texto_5;?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

	<?php include "footer.php";?>
		</div>
		<script src="<?php echo SITE_URL;?>/js/jquery-3.3.1.min.js?v=<?php echo version;?>"></script>
		<script src="<?php echo SITE_URL;?>/js/bootstrap.min.js?v=<?php echo version;?>"></script>	
		<script src="<?php echo SITE_URL;?>/js/modernizr.custom.js?v=<?php echo version;?>"></script>
		<script src="<?php echo SITE_URL;?>/js/jquery.easing.js?v=<?php echo version;?>"></script>
		<script src="<?php echo SITE_URL;?>/js/jquery.appear.js?v=<?php echo version;?>"></script>
		<script src="<?php echo SITE_URL;?>/js/jquery.stellar.min.js?v=<?php echo version;?>"></script>	
		<script src="<?php echo SITE_URL;?>/js/menu.js?v=<?php echo version;?>"></script>
		<script src="<?php echo SITE_URL;?>/js/sticky.js?v=<?php echo version;?>"></script>
		<script src="<?php echo SITE_URL;?>/js/jquery.scrollto.js?v=<?php echo version;?>"></script>
		<script src="<?php echo SITE_URL;?>/js/materialize.js?v=<?php echo version;?>"></script>	
		<script src="<?php echo SITE_URL;?>/js/owl.carousel.min.js?v=<?php echo version;?>"></script>
		<script src="<?php echo SITE_URL;?>/js/jquery.magnific-popup.min.js?v=<?php echo version;?>"></script>	
		<script src="<?php echo SITE_URL;?>/js/imagesloaded.pkgd.min.js?v=<?php echo version;?>"></script>
		<script src="<?php echo SITE_URL;?>/js/isotope.pkgd.min.js?v=<?php echo version;?>"></script>
		<script src="<?php echo SITE_URL;?>/js/hero-form.js?v=<?php echo version;?>"></script>
		<script src="<?php echo SITE_URL;?>/js/contact-form.js?v=<?php echo version;?>"></script>
		<script src="<?php echo SITE_URL;?>/js/comment-form.js?v=<?php echo version;?>"></script>
		<script src="<?php echo SITE_URL;?>/js/appointment-form.js?v=<?php echo version;?>"></script>
		<script src="<?php echo SITE_URL;?>/js/jquery.datetimepicker.full.js?v=<?php echo version;?>"></script>		
		<script src="<?php echo SITE_URL;?>/js/jquery.validate.min.js?v=<?php echo version;?>"></script>	
		<script src="<?php echo SITE_URL;?>/js/jquery.ajaxchimp.min.js?v=<?php echo version;?>"></script>
		<script src="<?php echo SITE_URL;?>/js/wow.js?v=<?php echo version;?>"></script>	
		<script src="<?php echo SITE_URL;?>/js/custom.js?v=<?php echo version;?>"></script>
		<script> 
			new WOW().init();
		</script>
	</body>
</html>	