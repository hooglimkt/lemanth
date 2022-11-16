<?php
include "Class/config.class.php";
$infoSistema = ConfigSistema::getInstance(Conexao::getInstance())->rsDados();

include "Class/metasTags.class.php";
$metastags = MetasTags::getInstance(Conexao::getInstance())->rsDados();

// include "Class/textos.class.php";
// $textos = Textos::getInstance(Conexao::getInstance());

include "Class/newsletters.class.php";
$newsletters = Newsletters::getInstance(Conexao::getInstance());

include "Class/galerias.class.php";
$galerias = Galerias::getInstance(Conexao::getInstance());

// include "Class/blogs.class.php";
// $blogs = Blogs::getInstance(Conexao::getInstance());

/* include "Class/produtos.class.php";
$produtos = Produtos::getInstance(Conexao::getInstance()); */

// include "Class/banners.class.php";
// $banners = Banners::getInstance(Conexao::getInstance());

include "Class/testemunhos.class.php";
$testemunhos = Testemunhos::getInstance(Conexao::getInstance());

// include "Class/servicos.class.php";
// $servicos = Servicos::getInstance(Conexao::getInstance());

/*include "Class/treinamentos.class.php";
$treinamentos = Treinamentos::getInstance(Conexao::getInstance());

include "Class/solucoes.class.php";
$solucoes = Solucoes::getInstance(Conexao::getInstance()); */

// include "Class/doutores.class.php";
// $doutores = Doutores::getInstance(Conexao::getInstance());

 include "Class/convenios.class.php";
$convenios = Convenios::getInstance(Conexao::getInstance());

include "Class/faqs.class.php";
$faqs = Faqs::getInstance(Conexao::getInstance());

/*include "Class/especialidades.class.php";
$especialidades = Especialidades::getInstance(Conexao::getInstance());

include "Class/categorias.class.php";
$categorias = Categorias::getInstance(Conexao::getInstance()); */

define('SITE_URL', 'http://'.$_SERVER['HTTP_HOST'].'/lemanth');
define("version", "5");
?>