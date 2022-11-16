<?php 
include "includes.php";
include "Class/blogs.class.php";
include "Class/banners.class.php";
include "Class/textos.class.php";
include "Class/servicos.class.php";

$textos 	= Textos::getInstance(Conexao::getInstance());
$blogs 		= Blogs::getInstance(Conexao::getInstance());
$banners 	= Banners::getInstance(Conexao::getInstance());
$servicos 	= Servicos::getInstance(Conexao::getInstance());

$puxaBlogs     = $blogs->rsDados('', 'rand()', '3');
$puxaSliders   = $banners->rsDados();
$textoBlog 	   = $textos->rsDados(18);
$textoDiferencial1 	   = $textos->rsDados(14);
$textoDiferencial2 	   = $textos->rsDados(15);
$textoDiferencial3 	   = $textos->rsDados(16);
$textoSobre 	   = $textos->rsDados(13);
$textoServico 	   = $textos->rsDados(20);
$textoCaixaFinal 	   = $textos->rsDados(21);
$puxaServicosEsquerda = $servicos->rsDados('', 'rand()', '0,3');
$puxaServicosDireita = $servicos->rsDados('', 'rand()', '3,3');
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>
		<?php include "description.php";?>
		<!-- GOOGLE FONTS -->
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
			<section id="hero-7" class="hero-section division">
				<div class="slider blue-nav">
			    	<ul class="slides">
					<?php foreach($puxaSliders as $banner){?>
				      	<li id="slide-2">
				        	<img class="d-none d-sm-block" src="<?php echo SITE_URL;?>/img/<?php echo $banner->foto;?>" alt="<?php echo $banner->titulo1;?>" title="<?php echo $banner->titulo1;?>">
				        	<img class="d-block d-sm-none" src="<?php echo SITE_URL;?>/img/<?php echo $banner->imagem_mobile;?>" alt="<?php echo $banner->titulo1;?>" title="<?php echo $banner->titulo1;?>">
	        				<div class="caption d-flex align-items-center left-align">
	        					<div class="container">
		       						<div class="row">
		       							<div class="col-sm-9 col-md-8 col-lg-7 col-xl-6">
		       								<div class="caption-txt">
								         	 	<h2><?php echo $banner->titulo1;?></h2>
									          	<p class="p-md"><?php echo $banner->titulo2;?></p>
												<?php if(isset($banner->tem_botao) && $banner->tem_botao == 'S'){?>
												<a href="<?php echo $banner->link_botao;?>" class="btn btn-bege bege-hover"><?php echo $banner->nome_botao;?></a>
												<?php }?>
											</div>	
				         				</div>
									</div>
								</div>
					        </div>
				     	</li>
						 <?php }?>
				    </ul>
			  	</div>
			</section>




			<!-- ABOUT-4
			============================================= -->
			<section id="about-4" class="wide-60 about-section division sobre-principal">
				<div class="container">
					<div class="row">
						<div class="col-lg-4">
							<div class="abox-4 mb-40 wow fadeInUp text-center" data-wow-delay="0.4s">
								<img class="img-fluid" src="<?php echo SITE_URL;?>/img/<?php echo $textoDiferencial1->foto;?>" alt="<?php echo $textoDiferencial1->titulo;?>" title="<?php echo $textoDiferencial1->titulo;?>" />	
								<div class="abox-4-txt">
									<h5 class="h5-xs text-center"><a><?php echo $textoDiferencial1->titulo;?></a></h5>
									<?php echo $textoDiferencial1->texto;?>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="abox-4 mb-40 wow fadeInUp text-center" data-wow-delay="0.4s">
								<img class="img-fluid" src="<?php echo SITE_URL;?>/img/<?php echo $textoDiferencial2->foto;?>" alt="<?php echo $textoDiferencial2->titulo;?>" title="<?php echo $textoDiferencial2->titulo;?>" />	
								<div class="abox-4-txt">
									<h5 class="h5-xs text-center"><a><?php echo $textoDiferencial2->titulo;?></a></h5>
									<?php echo $textoDiferencial2->texto;?>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="abox-4 mb-40 wow fadeInUp text-center" data-wow-delay="0.4s">
								<img class="img-fluid" src="<?php echo SITE_URL;?>/img/<?php echo $textoDiferencial3->foto;?>" alt="<?php echo $textoDiferencial3->titulo;?>" title="<?php echo $textoDiferencial3->titulo;?>" />	
								<div class="abox-4-txt">
									<h5 class="h5-xs text-center"><a><?php echo $textoDiferencial3->titulo;?></a></h5>
									<?php echo $textoDiferencial3->texto;?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section id="about-5" class="bg-lightgrey pt-100 about-section division">
				<div class="container">
					<div class="row d-flex align-items-center">
						<div class="col-lg-6">
							<div class="about-img text-center wow fadeInUp" data-wow-delay="0.6s">
								<img class="img-fluid" src="<?php echo SITE_URL;?>/img/<?php echo $textoSobre->foto;?>" alt="<?php echo $textoSobre->titulo;?>" title="<?php echo $textoSobre->titulo;?>">
							</div>
						</div>
						<div class="col-lg-6">
							<div class="txt-block pc-30 wow fadeInUp" data-wow-delay="0.4s">
								<h1 class="h3-md"><?php echo $textoSobre->titulo;?></h1>
								<?php echo $textoSobre->texto;?>
								<a href="<?php echo SITE_URL;?>/sobre" class="btn btn-bege ">Conheça Nossa Clínica</a>
							</div>
							
						</div>
					</div>
				</div>
			</section>
			<section id="services-6" class="wide-40 servicess-section division">
				<div class="container white-color">	


					<!-- SECTION TITLE -->	
					<div class="row">	
						<div class="col-lg-10 offset-lg-1 section-title">		

							<!-- Title 	-->	
							<h3 class="h3-md"><?php echo $textoServico->titulo;?></h3>	
							<?php echo $textoServico->texto;?>	
						</div> 
					</div>


					<div class="row d-flex align-items-center">


						<!-- LEFT SIDE CONTENT -->	
						<div class="col-md-6 col-lg-4">
							<?php foreach($puxaServicosEsquerda as $servicoEsquerda){?>
							<div class="sbox-6 pr-30 text-right wow fadeInRight" data-wow-delay="0.4s">
								<h5 class="h5-md"><?php echo $servicoEsquerda->titulo;?></h5>
								<?php echo $servicoEsquerda->banner_texto;?>
							</div>
							<?php }?>
						</div>	
								
													
						<!-- SERVICE IMAGE -->
						<div class="col-lg-4 s6-img">	
							<div class="sbox-6-img mb-40 text-center wow fadeInUp" data-wow-delay="0.8s">
								<img class="img-fluid" src="<?php echo SITE_URL;?>/images/dente.png" alt="imagem-servicos" title="imagem-servicos">
							</div>
						</div>
						<div class="col-md-6 col-lg-4 d-none d-sm-block">	
                    <?php foreach($puxaServicosDireita as $servicoDireita){?>
							<div class="sbox-6 pl-30 wow fadeInLeft" data-wow-delay="0.4s">
								<h5 class="h5-md"><?php echo $servicoDireita->titulo;?></h5>
								<?php echo $servicoDireita->banner_texto;?>
							</div>
							<?php }?>
						
						</div>


					</div>	  <!-- End row -->	
				</div> 	   <!-- End container -->			
			</section>	<!-- END SERVICES-6 -->	
			<section id="blog-1" class="wide-60 blog-section division">
			<div class="container">
				<!-- SECTION TITLE -->
				<div class="row">
					<div class="col-lg-10 offset-lg-1 section-title">
						<h3 class="h3-md"><?php echo $textoBlog->titulo;?></h3>
						<p><?php echo $textoBlog->texto;?></p>
					</div>
				</div>
					
				<!-- BLOG POSTS HOLDER -->
				<div class="row">
					<!-- BLOG POST #1 -->
					<?php foreach($puxaBlogs as $blog){?>
					<div class="col-lg-4 col-md-4">
						<div class="blog-post wow fadeInUp" data-wow-delay="0.4s">
							<!-- BLOG POST IMAGE -->
							<div class="blog-post-img">
								<img class="img-fluid" src="<?php echo SITE_URL;?>/img/<?php echo $blog->foto;?>" alt="<?php echo $blog->descricao_imagem;?>" title="<?php echo $blog->legenda_imagem;?>">
							</div>

							<!-- BLOG POST TITLE -->
							<div class="blog-post-txt text-center">
								<!-- Post Title -->
								<h5>
									<a href="<?php echo SITE_URL;?>/blog/<?php echo $blog->url_amigavel;?>"><?php echo $blog->titulo;?></a>
								</h5>
								<p><?php echo $blog->breve;?></p>
							</div>
						</div>
					</div>
					<?php }?>
				</div>
				<div class="row">
					<div class="col-md-12 text-center">
						<div class="all-posts-btn mb-40 wow fadeInUp" data-wow-delay="1s">
							<a href="<?php echo SITE_URL;?>/blog" class="btn btn-bege ">Ver Mais</a>
						</div>
					</div>
				</div>
			</div>
		</section>
			<section id="banner-2" class="pt-80 banner-section division">
				<div class="bg-scroll bg-inner bg-image division">
					<div class="container white-color">
						<div class="row d-flex align-items-center">
							<div class="col-lg-5">
								<div class="banner-2-img">
									<img class="img-fluid" src="<?php echo SITE_URL;?>/img/<?php echo $textoCaixaFinal->foto;?>" alt="<?php echo $textoCaixaFinal->titulo;?>" title="<?php echo $textoCaixaFinal->titulo;?>" />	
								</div>
							</div>
							<div class="col-lg-6 offset-lg-1">
								<div class="banner-txt pc-30 wow fadeInUp" data-wow-delay="0.4s">
									<h3 class="h3-lg"><?php echo $textoCaixaFinal->titulo;?></h3>
									<?php echo $textoCaixaFinal->texto;?>								    <!-- Button -->
									<a href="<?php echo $textoCaixaFinal->titulo3;?>" class="btn btn-tra-white bege-hover"><?php echo $textoCaixaFinal->titulo2;?></a>
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
		<script src="<?php echo SITE_URL;?>/js/wow.js?v=<?php echo version;?>"></script>	
		<script src="<?php echo SITE_URL;?>/js/custom.js?v=<?php echo version;?>"></script>

		<script> 
			new WOW().init();
		</script>
	</body>
</html>	