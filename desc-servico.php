<?php include "includes.php";
include "Class/servicos.class.php";
$servicos = Servicos::getInstance(Conexao::getInstance());

$msgForm1 = "";
$id = '';
if(isset($_GET['id'])){
    if(empty($_GET['id'])){
        header('Location: index.php');
    }else{
        $id = $_GET['id'];      
    }
}else{
    header('Location: index.php');
}
$descServico = $servicos->rsDados('', '', '', '', '', $id);

if(count($descServico)==0){
	echo "erro 404";
	exit;
}
/**** ALTERAR OS CAMPOS ABAIXO ****/
// informar as chaves do ReCaptcha abaixo:
$chave_de_site = '6Le3jccbAAAAAA35WxF9URLY6I0BUQKuc8TL43YT';
$chave_secreta = '6Le3jccbAAAAACL4iAOcJ8dj8rTMhgSdNkkR69Y_';

// definir
//$destinatario = 'adrianodevops@gmail.com';
$destinatario = 'herickmarra@hoogli.com.br';
$remetente = 'herickmarra@hoogli.com.br';
	$assunto = 'Contato pelo site';
	$redirecionar_para = '';
	/**** FIM DAS ALTERAÇÕES ****/
	
	if (isset($_POST['acao']) && $_POST['acao'] == "enviarMensagem")
	{ 	
		
		// incluir a funcionalidade do recaptcha
		require_once('recaptchalib.php');
	
		$erros = [];
		if (empty($_POST['nome']))
			$erros[] = 'Nome não preenchido';
	
		if (empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
			$erros[] = 'E-mail não preenchido ou inválido';
	
		if (empty($_POST['telefone']))
			$erros[] = 'Telefone não preenchido';
	
	
		if (empty($_POST['mensagem']))
			$erros[] = 'Mensagem não fornecida';
	
		// verificar a chave secreta
		$response = null;
		$reCaptcha = new ReCaptcha($chave_secreta);
	
		if ($_POST['g-recaptcha-response'])
			$response = $reCaptcha->verifyResponse($_SERVER['REMOTE_ADDR'], $_POST['g-recaptcha-response']);
	
		if ($response == null || !$response->success)
			$erros[] = 'Erro na verificação do Recaptcha';
	
		if (1==1)//!erros
		{
			$ip = $_SERVER['REMOTE_ADDR'];
			$reverso = gethostbyaddr($ip);
			if ($reverso == $ip){
				$origem = $ip;
			}else{
				$origem = "$ip ($reverso)";
			}
			$de = "\"$_POST[nome]\" <$_POST[email]>";
	
			$corpo = "De: $de
	Telefone: $_POST[telefone]
	Assunto: $_POST[assunto]
	Mensagem:$_POST[mensagem]";
	
			$headers = "From: $remetente\n";
			$headers .= "Reply-To: $de";
	
			if (mail($destinatario, $assunto, $corpo, $headers, "-f$remetente"))
			{
				$msgForm1 = "Enviado";
			}else
				$msgForm1 = "Erro ao mandar seu e-mail, por favor tente novamente mais tarde";
				$erros[] = 'Erro ao mandar seu e-mail, por favor tente novamente mais tarde';
			}

	}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
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
		<script src="https://www.google.com/recaptcha/api.js?hl=pt-BR"></script>
	<?php include "inc-tagmanager-head.php";?>
</head>
<style>
ul>li{
    list-style:disc;
    margin-left: 2em;
}
</style>
<body>
<?php include "inc-tagmanager-body.php";?>

		<div id="page" class="page">

		<?php include "header.php";?>
			<section id="container-Banner" class="" style="background-image: url(<?php echo SITE_URL;?>/img/<?php echo $descServico[0]->banner_foto;?>); <?php if($id == 'facetas-lentes-contato') { echo "padding-bottom: 174px !important;";}?>">
				<div class="container1">						
					<div class="row d-flex align-items-center">

						<!-- HERO TEXT -->
						<div class="col-lg-7 col-xl-7" >
							<div class="hero-txt">

								<h2 class="banner_titulo"><?php echo $descServico[0]->banner_titulo;?></h2>
								<h3 class="banner_SubTitulo"><?php echo $descServico[0]->banner_SubTitulo;?></h3>
								<h4 class="banner_SubTitulo2"><?php echo $descServico[0]->banner_SubTitulo2;?></h4>

                                <br>

								<h3 class="banner_TituloPreco"><?php echo $descServico[0]->banner_TituloPreco;?></h3>
								<h1 class="banner_Preco"><?php echo $descServico[0]->banner_Preco;?></h1>
								<h5 class="banner_Condicoes"><?php echo $descServico[0]->banner_Condicoes;?></h5>

                                <a href="<?php echo $descServico[0]->link_botao_banner;?>" class="banner-btn"  ><?php echo $descServico[0]->nome_botao_banner;?></a>
							</div>
						</div>	

						<!-- FORM TEXT -->
						<div id="area-Contato1" class="col-lg-5 col-xl-5" >
							<form action="" method="post" class="form" >
								<h1>Formulário</h1>
								<p><?php echo $msgForm1 ?></p>
								<br>
								<div class="col-md-20">
									<input type="text" id="nome" name="nome" placeholder="Nome Completo" size="50" />
								</div>
								<br>
								<div>
									<input type="email" id="email" name="email" placeholder="E-mail" size="50" />
								</div>
								
								<br>
								<div>
									<input type="text" id="telefone" name="telefone" placeholder="Celular" size="50" />
								</div>
								<br>

								<div style="margin-bottom: 30px;">
									<textarea name="mensagem" id="mensagem" placeholder="Mensagem" cols="30" rows="10"></textarea>
								</div>
								<div>
								<div class="col-md-12 ">
										<div class="g-recaptcha" data-sitekey="<?php echo $chave_de_site; ?>"></div>
									</div>
					                  
					                <div class="col-md-12 mt-15 form-btn">  
					                	<button type="submit" class="btn btn-bege bege-hover submit">
											Enviar
										</button> 
					                </div>
									<input type="hidden" name="acao" value="enviarMensagem">       
									<input type="hidden" name="assunto" value="<?php echo $id;?>">      
								</div>
								<br>
							</form>
						</div>

					</div> 
				</div> 
			</section>

			<section id="container-session1" class="wide-100 info-section division">
				<div>
					<!-- TOP ROW -->
					<div class="top-row mb-80" >
							<div class="Titulo">
								<h5><?php echo $descServico[0]->sessao1_SubTitulo;?></h5>
								<h1><?php echo $descServico[0]->sessao1_titulo;?></h1>
							</div>	
							<br>
							<!-- INFO TABLE -->
							<div class="col-lg-10 " >
								<table class="table table-bordered">
								<thead>
									<tr id="tabelaTitulo">
									<th scope="col"></th>
									<th scope="col"><?php echo $descServico[0]->sessao1_Coluna2Linha1;?></th>
									<th scope="col"><?php echo $descServico[0]->sessao1_Coluna3Linha1;?></th>
									<th scope="col"><?php echo $descServico[0]->sessao1_Coluna4Linha1;?></th>
									<th scope="col"></th>
									</tr>
								</thead>
								<tbody>
									<tr>
									<th scope="row"><?php echo $descServico[0]->sessao1_Coluna1Linha2;?></th>
									<td><?php echo $descServico[0]->sessao1_Coluna2Linha2;?></td>
									<td><?php echo $descServico[0]->sessao1_Coluna3Linha2;?></td>
									<td><?php echo $descServico[0]->sessao1_Coluna4Linha2;?></td>
									<td><img class="img-fluid" src="<?php echo SITE_URL;?>/img/<?php echo $descServico[0]->sessao1_foto_icone1;?>" alt="<?php echo $descServico[0]->sessao1_foto_icone1;?>" title="<?php echo $descServico[0]->sessao1_foto_icone1;?>"></td>
									<!-- <td><img  src="https://dummyimage.com/50x50/000/fff" alt="<?php echo $descServico[0]->sessao1_foto_icone1;?>" title="<?php echo $descServico[0]->sessao1_foto_icone1;?>"></td> -->
									</tr>
									<tr>
									<th scope="row"><?php echo $descServico[0]->sessao1_Coluna1Linha3;?></th>
									<td><?php echo $descServico[0]->sessao1_Coluna2Linha3;?></td>
									<td><?php echo $descServico[0]->sessao1_Coluna3Linha3;?></td>
									<td><?php echo $descServico[0]->sessao1_Coluna4Linha3;?></td>
									<td><img class="img-fluid" src="<?php echo SITE_URL;?>/img/<?php echo $descServico[0]->sessao1_foto_icone2;?>" alt="<?php echo $descServico[0]->sessao1_foto_icone2;?>" title="<?php echo $descServico[0]->sessao1_foto_icone2;?>"></td>
									<!-- <td><img  src="https://dummyimage.com/50x50/000/fff" alt="<?php echo $descServico[0]->sessao1_foto_icone1;?>" title="<?php echo $descServico[0]->sessao1_foto_icone1;?>"></td> -->
									</tr>
								</tbody>
								</table>
							</div>						
						    <!-- End row -->
					</div>
				</div>	
			</section>

		<!-- SESSAO 2 -->
		<section class="session2">
			<!-- TITULO -->
			<div>
				<h1><?php echo $descServico[0]->sessao2_titulo;?></h1>
			</div>

			<hr>

			<!-- CARDS -->

			<div>

				<nav>
					<div>
						<h5  ><?php echo $descServico[0]->sessao2_tituloColuna1;?></h5>
						<p style="text-align: justify;"><?php echo $descServico[0]->sessao2_textoColuna1;?></p>
					</div>
				</nav>
				<!--  -->
				<nav>
					<div>
						<h5 ><?php echo $descServico[0]->sessao2_tituloColuna2;?></h5>
						<p style="text-align: justify;"><?php echo $descServico[0]->sessao2_textoColuna2;?></p>
					</div>
				</nav>
				<!--  -->
				<nav>
					<div >
						<h5  ><?php echo $descServico[0]->sessao2_tituloColuna3;?></h5>
						<p class="textSession2" ><?php echo $descServico[0]->sessao2_textoColuna3;?></p>
					</div>
				</nav>
				<!--  -->
				<nav>
					<div>
						<h5  ><?php echo $descServico[0]->sessao2_tituloColuna4;?></h5>
						<p style="text-align: justify;"><?php echo $descServico[0]->sessao2_textoColuna4;?></p>
					</div>
				</nav>
				<!--  -->
			
			</div>
			
		</section>

		<nav id="btnSession2">
				<a href="<?php echo $descServico[0]->link_botao_banner;?>" class="banner-btn"  ><?php echo $descServico[0]->nome_botao_banner;?></a>
		</nav>
	<!-- SESSAO 2 -->

	
		     <section id="container-session3" class="wide-100 info-section division">
				<div class="container" >
					<!-- TOP ROW -->
					<div class="top-row">
							
							<div class="col-lg-19">
								<div class="row row-cols-1 row-cols-md-3 g-4">
									<div class="col">
										<div class="card h-100" >
												<nav id="session_3_img" style="background-image: url(<?php echo SITE_URL;?>/img/<?php echo $descServico[0]->sessao3_iconeColuna1;?>" alt="<?php echo $descServico[0]->sessao3_iconeColuna1;?>);">
												</nav>
												<!-- <img class="img-fluid" src="<?php echo SITE_URL;?>/img/<?php echo $descServico[0]->sessao3_iconeColuna1;?>" alt="<?php echo $descServico[0]->sessao3_iconeColuna1;?>" title="<?php echo $descServico[0]->sessao3_iconeColuna1;?>">			 -->
												<!-- <img  class="session3_img" src="<?php echo SITE_URL;?>/img/1623260484.1858-foto-N.jpg" alt="<?php echo $descServico[0]->sessao1_foto_icone1;?>" title="<?php echo $descServico[0]->sessao1_foto_icone1;?>"> -->

											<div class="card-body">
												<h5 class="card-title"><?php echo $descServico[0]->sessao3_tituloColuna1;?></h5>
												<p class="card-text1" ><?php echo $descServico[0]->sessao3_textoColuna1;?></p>
												<p class="card-text2" ><?php echo $descServico[0]->sessao3_tituloPrecoColuna1;?></p>
												<p class="card-text3" ><?php echo $descServico[0]->sessao3_PrecoColuna1;?></p>
												<p class="card-text1" ><?php echo $descServico[0]->sessao3_CondicoesPrecoColuna1;?></p>
												<div>
													<a href="<?php echo $descServico[0]->link_botao1_sessao3;?>" class="btn btn-bege bege-hover" ><?php echo $descServico[0]->nome_botao1_sessao3;?></a>
												</div>	
											</div>
										</div>
									</div>
									<div class="col">
										<div class="card h-100">
												<nav id="session_3_img" style="background-image: url(<?php echo SITE_URL;?>/img/<?php echo $descServico[0]->sessao3_iconeColuna2;?>" alt="<?php echo $descServico[0]->sessao3_iconeColuna1;?>);">
												</nav>

												<!-- <img class="img-fluid" src="<?php echo SITE_URL;?>/img/<?php echo $descServico[0]->sessao3_iconeColuna2;?>" alt="<?php echo $descServico[0]->sessao3_iconeColuna2;?>" title="<?php echo $descServico[0]->sessao3_iconeColuna2;?>"> -->
												<!-- <img  class="session3_img" src="<?php echo SITE_URL;?>/img/1623260484.1858-foto-N.jpg" alt="<?php echo $descServico[0]->sessao1_foto_icone1;?>" title="<?php echo $descServico[0]->sessao1_foto_icone1;?>"> -->

											<div class="card-body">
												<h5 class="card-title1"><?php echo $descServico[0]->sessao3_tituloColuna2;?></h5>
												<p class="card-text1" ><?php echo $descServico[0]->sessao3_textoColuna2;?></p>
												<p class="card-text2" ><?php echo $descServico[0]->sessao3_tituloPrecoColuna2;?></p>
												<p class="card-text3" ><?php echo $descServico[0]->sessao3_PrecoColuna2;?></p>
												<p class="card-text1" ><?php echo $descServico[0]->sessao3_CondicoesPrecoColuna2;?></p>
												<div style="text-align: center;">
													<a href="<?php echo $descServico[0]->link_botao2_sessao3;?>" class="btn btn-bege bege-hover" ><?php echo $descServico[0]->nome_botao2_sessao3;?></a>
												</div>	
											</div>
										</div>
									</div>
									<div class="col">
										<div class="card h-100">
												<nav id="session_3_img" style="background-image: url(<?php echo SITE_URL;?>/img/<?php echo $descServico[0]->sessao3_iconeColuna3;?>" alt="<?php echo $descServico[0]->sessao3_iconeColuna1;?>);">
												</nav>
												<!-- <img class="img-fluid" src="<?php echo SITE_URL;?>/img/<?php echo $descServico[0]->sessao3_iconeColuna3;?>" alt="<?php echo $descServico[0]->sessao3_iconeColuna3;?>" title="<?php echo $descServico[0]->sessao3_iconeColuna3;?>">			 -->
												<!-- <img  class="session3_img" src="<?php echo SITE_URL;?>/img/1623260484.1858-foto-N.jpg" alt="<?php echo $descServico[0]->sessao1_foto_icone1;?>" title="<?php echo $descServico[0]->sessao1_foto_icone1;?>"> -->

											<div class="card-body">
												<h5 class="card-title1" ><?php echo $descServico[0]->sessao3_tituloColuna3;?></h5>
												<p class="card-text1" ><?php echo $descServico[0]->sessao3_textoColuna3;?></p>
												<p class="card-text2" ><?php echo $descServico[0]->sessao3_tituloPrecoColuna3;?></p>
												<p class="card-text3" ><?php echo $descServico[0]->sessao3_PrecoColuna3;?></p>
												<p class="card-text1" ><?php echo $descServico[0]->sessao3_CondicoesPrecoColuna3;?></p>
												<div>
													<a href="<?php echo $descServico[0]->link_botao3_sessao3;?>" class="btn btn-bege bege-hover" ><?php echo $descServico[0]->nome_botao3_sessao3;?></a>
												</div>	
											</div>
										</div>
									</div>
								</div>
							</div>
					</div>	
					<!-- END TOP ROW -->


				</div>	
			</section>



			<section id="container-session4" class="wide-40 doctors-section division aplicacoes" >
				<div class="container">

					<div class="row">	
						<div id="sessao4_text_container" class="col-lg-5 offset-lg-1 section-title" >
							<h3 class="subTitulo"><?php echo $descServico[0]->sessao4_SubTitulo;?></h3>	
							<h1><?php echo $descServico[0]->sessao4_titulo;?></h1>
							<br>
							<p ><?php echo $descServico[0]->sessao4_texto;?></p>
							<a href="<?php echo $descServico[0]->link_botao_sessao4;?>" class="btn btn-bege bege-hover" ><?php echo $descServico[0]->nome_botao_sessao4;?></a>										
						</div> 
						<div id="sessao_4_img_container" class="col-lg-5 offset-lg-1 section-title">
								<!-- <img  class="session3_img" src="<?php echo SITE_URL;?>/img/1623260484.1858-foto-N.jpg" alt="<?php echo $descServico[0]->sessao1_foto_icone1;?>" title="<?php echo $descServico[0]->sessao1_foto_icone1;?>"> -->
									
								<img id="sessao4_icone" src="<?php echo SITE_URL;?>/img/<?php echo $descServico[0]->sessao4_icone;?>" alt="<?php echo $descServico[0]->sessao4_icone;?>" title="<?php echo $descServico[0]->sessao4_icone;?>">			
						</div> 
					</div>	  


				</div>	
			</section>	

		
			<section id="session_5">
					<nav>

						<?php if(isset($descServico[0]->sessao5_foto1) && !empty($descServico[0]->sessao5_foto1)){ ?>
									<div style="background-image: url(<?php echo SITE_URL;?>/img/<?php echo $descServico[0]->sessao5_foto1;?>);"></div>
						<?php }?>
						<!--  -->
						<?php if(isset($descServico[0]->sessao5_foto2) && !empty($descServico[0]->sessao5_foto2)){ ?>
									<div style="background-image: url(<?php echo SITE_URL;?>/img/<?php echo $descServico[0]->sessao5_foto2;?>);"></div>
						<?php }?>
						<!--  -->
						<?php if(isset($descServico[0]->sessao5_foto3) && !empty($descServico[0]->sessao5_foto3)){ ?>
									<div style="background-image: url(<?php echo SITE_URL;?>/img/<?php echo $descServico[0]->sessao5_foto3;?>);"></div>
						<?php }?>
						<!--  -->
						<?php if(isset($descServico[0]->sessao5_foto4) && !empty($descServico[0]->sessao5_foto4)){ ?>
									<div style="background-image: url(<?php echo SITE_URL;?>/img/<?php echo $descServico[0]->sessao5_foto4;?>);"></div>
						<?php }?>

					</nav>

					<nav>
						 <p><?php echo $descServico[0]->sessao5_texto;?> </p>
						<a href="<?php echo $descServico[0]->link_botao_sessao5;?>" class="btn btn-bege bege-hover" ><?php echo $descServico[0]->nome_botao_sessao5;?></a>	
					</nav>

			</section>
			
			
	
			<?php if($descServico[0]->texto_corrido <> ''){?>
				<section id="blog-1" class="diferenca wide-60 blog-section division diferenca">				
				<div class="container">

					<div class="row">	
						<div class="col-lg-10 offset-lg-1 section-text-corrido" >	

							<h3 style="text-align:center;margin-bottom: 30px;" class="h3-md"><?php echo $descServico[0]->titulo_texto;?></h3>	
							<?php echo $descServico[0]->texto_corrido;?> 
					</div>
				</div>	 
			    </section>
			<?php }?>
			<!-- <section id="hero-4" class="bg-fixed hero-section division banner-servicos d-none d-md-block d-lg-block" style="background-image: url(<?php echo SITE_URL;?>/img/<?php echo $descServico[0]->imagem_final;?>);background-size: 100%;background-position-x: right;">
			    <div class="container">						
					<div class="row d-flex align-items-center">
<img src="<?php echo SITE_URL;?>/images/transparente2.png">
					</div> 
				</div> 
			</section> -->
<!-- <section id="" class="bg-fixed  division d-block d-sm-none" style="background-image: url(<?php echo SITE_URL;?>/img/<?php echo $descServico[0]->imagem_mobile_final;?>);background-size: 100%;background-position-x: right;padding-top: 122px !important; padding-bottom: 140px !important;">
     <div class="container">						
					<div class="row d-flex align-items-center">
<img src="<?php echo SITE_URL;?>/images/transparente2.png">
					</div> 
				</div> 
</section> -->


            
			
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