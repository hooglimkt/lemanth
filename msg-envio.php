<?php include "includes.php";?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta http-equiv="refresh" content="4; <?php echo SITE_URL;?>/.">
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
	<meta name="theme-color" content="#171515"/>
	<title><?php if(isset($metastags->meta_title_contato) && !empty($metastags->meta_title_contato)){echo $metastags->meta_title_contato;}?></title>
    <meta name="description" content="<?php if(isset($metastags->meta_description_contato) && !empty($metastags->meta_description_contato)){echo $metastags->meta_description_contato;}?>"/>
		<meta name="keywords" content="<?php if(isset($metastags->meta_keywords_contato) && !empty($metastags->meta_keywords_contato)){echo $metastags->meta_keywords_contato;}?>">
    <?php if(isset($infoSistema->favicon) && !empty($infoSistema->favicon)){?>
		<link rel="shortcut icon" href="<?php echo SITE_URL;?>/img/<?php echo $infoSistema->favicon;?>" >
		<link rel="icon" href="<?php echo SITE_URL;?>/img/<?php echo $infoSistema->favicon;?>" >
    <?php }?>
    <meta name="author" content="Adriano Monteiro">
	<link href="<?php echo SITE_URL;?>/css/bootstrap.min.css?v=<?php echo version;?>" rel="stylesheet" />
	<!-- FONT ICONS -->
	<link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css?v=<?php echo version;?>" rel="stylesheet" />
	<link href="<?php echo SITE_URL;?>/css/flaticon.css?v=<?php echo version;?>" rel="stylesheet" />
	<!-- PLUGINS STYLESHEET -->
	<link href="<?php echo SITE_URL;?>/css/menu.css?v=<?php echo version;?>" rel="stylesheet" />
	<link href="<?php echo SITE_URL;?>/css/dropdown-effects/fade-down.css?v=<?php echo version;?>" media="all" rel="stylesheet" id="effect" />
	<link href="<?php echo SITE_URL;?>/css/animate.css?v=<?php echo version;?>" rel="stylesheet" />
	<!-- TEMPLATE CSS -->
	<link href="<?php echo SITE_URL;?>/css/style.css?v=<?php echo version;?>" rel="stylesheet" />
	<!-- RESPONSIVE CSS -->
	<link href="<?php echo SITE_URL;?>/css/responsive.css?v=<?php echo version;?>" rel="stylesheet" />
	<?php include "inc-tagmanager-head.php";?>

</head>
	<body>
		<?php include "inc-tagmanager-body.php";?>
		<div id="page" class="page">
				<?php include "header.php";?>
			<!-- CONTACTS-1
			============================================= -->
			<section id="contacts-1" class="wide-60 contacts-section division" style="background: linear-gradient(180deg, rgb(23 21 21 / 96%) 59%, rgb(23 21 21) 100%) !important;">				
				<div class="container">
					<div class="row">	
						<div class="col-lg-11 offset-lg-1 section-title">	
							<h1 id="contato" class="h3-md steelblue-color">Sua Solicitação Foi Enviada Com Sucesso.</h1>	
							<p>Agradecemos por entrar em contato.</p>
						</div>
					</div>
							  
 

				</div>	   <!-- End container -->		
			</section>	<!-- END CONTACTS-1 -->

		<?php include "footer.php";?>
		</div>	<!-- END PAGE CONTENT -->
		<script src="<?php echo SITE_URL;?>/js/jquery-3.3.1.min.js?v=<?php echo version;?>"></script>
		<script src="<?php echo SITE_URL;?>/js/bootstrap.min.js?v=<?php echo version;?>"></script>	
		<script src="<?php echo SITE_URL;?>/js/modernizr.custom.js?v=<?php echo version;?>"></script>		
		<script src="<?php echo SITE_URL;?>/js/menu.js?v=<?php echo version;?>"></script>
		<script src="<?php echo SITE_URL;?>/js/sticky.js?v=<?php echo version;?>"></script>
		<script src="<?php echo SITE_URL;?>/js/jquery.scrollto.js?v=<?php echo version;?>"></script>
		<script src="<?php echo SITE_URL;?>/js/materialize.js?v=<?php echo version;?>"></script>	
		<script src="<?php echo SITE_URL;?>/js/isotope.pkgd.min.js?v=<?php echo version;?>"></script>
		<!-- Custom Script -->		
		<script src="<?php echo SITE_URL;?>/js/custom.js?v=<?php echo version;?>"></script>

	</body>
</html>	