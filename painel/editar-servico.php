<?php include "verifica.php";
$id = '';
if(isset($_GET['id'])){
    if(empty($_GET['id'])){
        header('Location: servicos.php');
    }else{
        $id = $_GET['id'];        
    }
}
$servicos->editar();
$editaServico = $servicos->rsDados($id);
?>
<!DOCTYPE html>
<html dir="ltr" lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Adriano Monteiro">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/hoogli_logo.svg">
    <title>Painel Hoogli - Adicionar Serviço</title>
    <link href="dist/css/style.min.css" rel="stylesheet">
</head>
<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
       <?php include "header.php";?>
       <?php include "inc-menu-lateral.php";?>
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Adicionar Serviço</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="." class="text-muted">Home</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page"><a href="servicos.php" class="text-muted">Serviços</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-5 align-self-center">
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form method="POST" enctype="multipart/form-data">
                                    <div class="form-body">
                                        <h4 class="card-title">Titulo Serviço</h4>
                                            <div class="row">
                                            
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                    <label class="mr-sm-2" for="">Titulo</label>
                                                        <input type="text" class="form-control" name="titulo" value="<?php if(isset($editaServico->titulo) && !empty($editaServico->titulo)){ echo $editaServico->titulo;}?>" >
                                                    </div>
                                                </div>
                                            </div>
                                        <h4 class="card-title">Banner</h4>
                                            <div class="row">                             
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                    <label class="mr-sm-2" for="">Titulo</label>
                                                        <input type="text" class="form-control" name="banner_titulo" value="<?php if(isset($editaServico->banner_titulo) && !empty($editaServico->banner_titulo)){ echo $editaServico->banner_titulo;}?>">
                                                    </div>
                                                </div>  
                                            </div> 
                                            <div class="row">              
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                    <label class="mr-sm-2" for="">SubTitulo</label>
                                                        <input type="text" class="form-control" name="banner_SubTitulo" value="<?php if(isset($editaServico->banner_SubTitulo) && !empty($editaServico->banner_SubTitulo)){ echo $editaServico->banner_SubTitulo;}?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">    
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                    <label class="mr-sm-12" for="">SubTitulo 2</label>
                                                        <input type="text" class="form-control" name="banner_SubTitulo2" value="<?php if(isset($editaServico->banner_SubTitulo2) && !empty($editaServico->banner_SubTitulo2)){ echo $editaServico->banner_SubTitulo2;}?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                    <label class="mr-sm-2" for="">TituloPreco</label>
                                                        <input type="text" class="form-control" name="banner_TituloPreco" value="<?php if(isset($editaServico->banner_TituloPreco) && !empty($editaServico->banner_TituloPreco)){ echo $editaServico->banner_TituloPreco;}?>">
                                                    </div>
                                                </div>  
                                            </div>   
                                            <div class="row">       
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                    <label class="mr-sm-2" for="">Preço</label>
                                                        <input type="text" class="form-control" name="banner_Preco" value="<?php if(isset($editaServico->banner_Preco) && !empty($editaServico->banner_Preco)){ echo $editaServico->banner_Preco;}?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row"> 
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                    <label class="mr-sm-12" for="">Condições</label>
                                                        <input type="text" class="form-control" name="banner_Condicoes" value="<?php if(isset($editaServico->banner_Condicoes) && !empty($editaServico->banner_Condicoes)){ echo $editaServico->banner_Condicoes;}?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                          
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                    <label class="mr-sm-2" for="">Nome Botão</label>
                                                        <input type="text" class="form-control" name="nome_botao_banner" value="<?php if(isset($editaServico->nome_botao_banner) && !empty($editaServico->nome_botao_banner)){ echo $editaServico->nome_botao_banner;}?>" >
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                    <label class="mr-sm-2" for="">Link Botão</label>
                                                        <input type="text" class="form-control" name="link_botao_banner" value="<?php if(isset($editaServico->link_botao_banner) && !empty($editaServico->link_botao_banner)){ echo $editaServico->link_botao_banner;}?>" >
                                                    </div>
                                                </div>
                                            </div> 
                                            <div class="row">   
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                    <label class="mr-sm-2" for="">Imagem</label>
                                                        <input type="file" class="form-control" name="banner_foto" >
                                                    </div>
                                                </div>
                                                <?php if(isset($editaServico->banner_foto) && !empty($editaServico->banner_foto)){ ?>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                <img src="../img/<?php echo $editaServico->banner_foto;?>" width="150" alt="">
                                                    </div>
                                                </div>
                                            </div>    
                                            <?php }?>
                                    </div>
                                        
                                        <hr>
                                        <h4 class="card-title">Sessão 1</h4>
                                        <div class="row" style="display:block; text-align:center;">

                                            <div class="col-md-5" style="margin: auto">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">SubTitulo</label>
                                                    <input type="text" class="form-control" name="sessao1_SubTitulo" value="<?php if(isset($editaServico->sessao1_SubTitulo) && !empty($editaServico->sessao1_SubTitulo)){ echo $editaServico->sessao1_SubTitulo;}?>" >
                                                </div>
                                            </div>
                                            <br>

                                            <div class="col-md-5" style="margin: auto; ">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Título</label>
                                                    <input type="text" class="form-control" name="sessao1_titulo" value="<?php if(isset($editaServico->sessao1_titulo) && !empty($editaServico->sessao1_titulo)){ echo $editaServico->sessao1_titulo;}?>" >
                                                </div>
                                            </div>

                                            <div class="col-lg-28" style="text-align: center; margin-left: 260px;">
                                                <table class="table table-bordered" style=" margin-top: 60px;">
                                                <thead>
                                                    <tr>
                                                    <th scope="col" ></th>
                                                    <th scope="col" ><input type="text" name="sessao1_Coluna2Linha1" value="<?php if(isset($editaServico->sessao1_Coluna2Linha1) && !empty($editaServico->sessao1_Coluna2Linha1)){ echo $editaServico->sessao1_Coluna2Linha1;}?>"></th>
                                                    <th scope="col" ><input type="text" name="sessao1_Coluna3Linha1" value="<?php if(isset($editaServico->sessao1_Coluna3Linha1) && !empty($editaServico->sessao1_Coluna3Linha1)){ echo $editaServico->sessao1_Coluna3Linha1;}?>"></th>
                                                    <th scope="col" ><input type="text" name="sessao1_Coluna4Linha1" value="<?php if(isset($editaServico->sessao1_Coluna4Linha1) && !empty($editaServico->sessao1_Coluna4Linha1)){ echo $editaServico->sessao1_Coluna4Linha1;}?>"></th>
                                                    <th scope="col"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                    <th scope="row" ><input type="text" name="sessao1_Coluna1Linha2" value="<?php if(isset($editaServico->sessao1_Coluna1Linha2) && !empty($editaServico->sessao1_Coluna1Linha2)){ echo $editaServico->sessao1_Coluna1Linha2;}?>"></th>
                                                    <td><input type="text" name="sessao1_Coluna2Linha2" value="<?php if(isset($editaServico->sessao1_Coluna2Linha2) && !empty($editaServico->sessao1_Coluna2Linha2)){ echo $editaServico->sessao1_Coluna2Linha2;}?>"></td>
                                                    <td><input type="text" name="sessao1_Coluna3Linha2" value="<?php if(isset($editaServico->sessao1_Coluna3Linha2) && !empty($editaServico->sessao1_Coluna3Linha2)){ echo $editaServico->sessao1_Coluna3Linha2;}?>"></td>
                                                    <td><input type="text" name="sessao1_Coluna4Linha2" value="<?php if(isset($editaServico->sessao1_Coluna4Linha2) && !empty($editaServico->sessao1_Coluna4Linha2)){ echo $editaServico->sessao1_Coluna4Linha2;}?>"></td>
                                                    <td><input type="file" class="form-control" name="sessao1_foto_icone1" >  <img src="../img/<?php echo $editaServico->sessao1_foto_icone1;?>" width="150" alt=""> </td>
                                                    </tr>
                                                    <tr>
                                                    <th scope="row" ><input type="text" name="sessao1_Coluna1Linha3" value="<?php if(isset($editaServico->sessao1_Coluna1Linha3) && !empty($editaServico->sessao1_Coluna1Linha3)){ echo $editaServico->sessao1_Coluna1Linha3;}?>"></th>
                                                    <td><input type="text" name="sessao1_Coluna2Linha3" value="<?php if(isset($editaServico->sessao1_Coluna2Linha3) && !empty($editaServico->sessao1_Coluna2Linha3)){ echo $editaServico->sessao1_Coluna2Linha3;}?>"></td>
                                                    <td><input type="text" name="sessao1_Coluna3Linha3" value="<?php if(isset($editaServico->sessao1_Coluna3Linha3) && !empty($editaServico->sessao1_Coluna3Linha3)){ echo $editaServico->sessao1_Coluna3Linha3;}?>"></td>
                                                    <td><input type="text" name="sessao1_Coluna4Linha3" value="<?php if(isset($editaServico->sessao1_Coluna4Linha3) && !empty($editaServico->sessao1_Coluna4Linha3)){ echo $editaServico->sessao1_Coluna4Linha3;}?>"></td>
                                                    <td><input type="file" class="form-control" name="sessao1_foto_icone2" >  <img src="../img/<?php echo $editaServico->sessao1_foto_icone2;?>" width="150" alt=""></td>
                                                    </tr>
                                                </tbody>
                                                </table>

                                            </div>					
                                        </div>

                                        <hr>

                                        <h4 class="card-title">Sessão 2</h4>
                                        <div class="row" >
                                            <div class="col-md-5" style="margin: auto; text-align:center, ">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Titulo</label>
                                                    <input type="text" class="form-control" name="sessao2_titulo" value="<?php if(isset($editaServico->sessao2_titulo) && !empty($editaServico->sessao2_titulo)){ echo $editaServico->sessao2_titulo;}?>" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="display: block;">
                                            <div class="col-lg-28" style="text-align: center; margin: auto; margin-top: 50px;">
                                                <table class="table table-bordered" >
                                                <thead>
                                                    <tr>
                                                        <th scope="col" ><input type="text" name="sessao2_tituloColuna1" value="<?php if(isset($editaServico->sessao2_tituloColuna1) && !empty($editaServico->sessao2_tituloColuna1)){ echo $editaServico->sessao2_tituloColuna1;}?>"></th>
                                                        <th scope="col" ><input type="text" name="sessao2_tituloColuna2" value="<?php if(isset($editaServico->sessao2_tituloColuna2) && !empty($editaServico->sessao2_tituloColuna2)){ echo $editaServico->sessao2_tituloColuna2;}?>"></th>
                                                        <th scope="col" ><input type="text" name="sessao2_tituloColuna3" value="<?php if(isset($editaServico->sessao2_tituloColuna3) && !empty($editaServico->sessao2_tituloColuna3)){ echo $editaServico->sessao2_tituloColuna3;}?>"></th>
                                                        <th scope="col" ><input type="text" name="sessao2_tituloColuna4" value="<?php if(isset($editaServico->sessao2_tituloColuna4) && !empty($editaServico->sessao2_tituloColuna4)){ echo $editaServico->sessao2_tituloColuna4;}?>"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><textarea name="sessao2_textoColuna1" class="ckeditor" id="ckeditor" cols="30" rows="4"><?php if(isset($editaServico->sessao2_textoColuna1) && !empty($editaServico->sessao2_textoColuna1)){ echo $editaServico->sessao2_textoColuna1;}?></textarea></td>                                                        
                                                        <td><textarea name="sessao2_textoColuna2" class="ckeditor" id="ckeditor" cols="30" rows="4"><?php if(isset($editaServico->sessao2_textoColuna2) && !empty($editaServico->sessao2_textoColuna2)){ echo $editaServico->sessao2_textoColuna2;}?></textarea></td>                                                        
                                                        <td><textarea name="sessao2_textoColuna3" class="ckeditor" id="ckeditor" cols="30" rows="4"><?php if(isset($editaServico->sessao2_textoColuna3) && !empty($editaServico->sessao2_textoColuna3)){ echo $editaServico->sessao2_textoColuna3;}?></textarea></td>                                                        
                                                        <td><textarea name="sessao2_textoColuna4" class="ckeditor" id="ckeditor" cols="30" rows="4"><?php if(isset($editaServico->sessao2_textoColuna4) && !empty($editaServico->sessao2_textoColuna4)){ echo $editaServico->sessao2_textoColuna4;}?></textarea></td>                                                        
                                                    </tr>
                                                </tbody>
                                                </table>
                                            </div>
                                            <div class="row" style="display: block; text-align:center;">
                                                <div class="col-md-6" style="text-align:center; margin: auto">
                                                    <div class="form-group">
                                                    <label class="mr-sm-2" for="">Nome Botão</label>
                                                        <input type="text" class="form-control" name="nome_botao_sessao2" value="<?php if(isset($editaServico->nome_botao_sessao2) && !empty($editaServico->nome_botao_sessao2)){ echo $editaServico->nome_botao_sessao2;}?>" >
                                                    </div>
                                                </div>
                                                <div class="col-md-6" style="text-align:center; margin: auto">
                                                    <div class="form-group">
                                                    <label class="mr-sm-2" for="">Link Botão</label>
                                                        <input type="text" class="form-control" name="link_botao_sessao2" value="<?php if(isset($editaServico->link_botao_sessao2) && !empty($editaServico->link_botao_sessao2)){ echo $editaServico->link_botao_sessao2;}?>" >
                                                    </div>
                                                </div>
                                            </div> 					                                       
                                        </div>

                                        <hr>

                                        <h4 class="card-title">Sessão 3</h4>

                                        <div class="top-row">
                                                <!-- INFO TABLE -->
                                                <div style="display: block;" class="col-lg-19">
                                                    <div class="row row-cols-1 row-cols-md-3 g-4">
                                                        <div class="col" style="height: 650px; width: 385px">
                                                            <div class="card" style="display: flex; height: 617px; border-radius: 28px;">
                                                                <div class="col-lg-35 offset-lg-1 section-title" style="margin: 20px 20px;">
                                                                    <input type="file" class="form-control" name="sessao3_iconeColuna1" style="width: 454px;"><img src="../img/<?php echo $editaServico->sessao3_iconeColuna1;?>" width="150" alt="">		
                                                                    <?php if(isset($editaServico->sessao3_iconeColuna1) && !empty($editaServico->sessao3_iconeColuna1)){ ?>
                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <img src="../img/<?php echo $editaServico->sessao3_iconeColuna1;?>" width="150" alt="">
                                                                        </div>
                                                                    </div>
                                                                    <?php }?>                                                                
                                                                </div> 
                                                                <div class="card-body">
                                                                    <h5 class="card-title" style="text-align: center; font-weight: 550; "><input type="text" name="sessao3_tituloColuna1" value="<?php if(isset($editaServico->sessao3_tituloColuna1) && !empty($editaServico->sessao3_tituloColuna1)){ echo $editaServico->sessao3_tituloColuna1;}?>"></h5>
                                                                    <p class="card-text" style="text-align: center; color: #9980BB"><input type="text" name="sessao3_textoColuna1" value="<?php if(isset($editaServico->sessao3_textoColuna1) && !empty($editaServico->sessao3_textoColuna1)){ echo $editaServico->sessao3_textoColuna1;}?>"></p>
                                                                    <p class="card-text" style="text-align: center; color: #9980BB"><input type="text" name="sessao3_tituloPrecoColuna1" value="<?php if(isset($editaServico->sessao3_tituloPrecoColuna1) && !empty($editaServico->sessao3_tituloPrecoColuna1)){ echo $editaServico->sessao3_tituloPrecoColuna1;}?>"></p>
                                                                    <p class="card-text" style="text-align: center; font-weight: bold; font-family: Helvetica; color: #9980BB"><input type="text" name="sessao3_PrecoColuna1" value="<?php if(isset($editaServico->sessao3_PrecoColuna1) && !empty($editaServico->sessao3_PrecoColuna1)){ echo $editaServico->sessao3_PrecoColuna1;}?>"></p>
                                                                    <p class="card-text" style="text-align: center; color: #9980BB"><input type="text" name="sessao3_CondicoesPrecoColuna1" value="<?php if(isset($editaServico->sessao3_CondicoesPrecoColuna1) && !empty($editaServico->sessao3_CondicoesPrecoColuna1)){ echo $editaServico->sessao3_CondicoesPrecoColuna1;}?>"></p>
                                                                    <div class="row" style="display: block; text-align:center;">
                                                                        <div class="col-md-6" style="text-align:center; margin: auto">
                                                                            <div class="form-group">
                                                                            <label class="mr-sm-2" for="">Nome Botão</label>
                                                                                <input type="text" class="form-control" name="nome_botao1_sessao3" value="<?php if(isset($editaServico->nome_botao1_sessao3) && !empty($editaServico->nome_botao1_sessao3)){ echo $editaServico->nome_botao1_sessao3;}?>" >
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6" style="text-align:center; margin: auto">
                                                                            <div class="form-group">
                                                                            <label class="mr-sm-2" for="">Link Botão</label>
                                                                                <input type="text" class="form-control" name="link_botao1_sessao3" value="<?php if(isset($editaServico->link_botao1_sessao3) && !empty($editaServico->link_botao1_sessao3)){ echo $editaServico->link_botao1_sessao3;}?>" >
                                                                            </div>
                                                                        </div>
                                                                    </div> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col" style="width: 385px">
                                                            <div class="card" style="border-radius: 28px; height: 617px;">
                                                                <div class="col-lg-35 offset-lg-1 section-title" style="margin: 20px 20px;">
                                                                    <input type="file" class="form-control" name="sessao3_iconeColuna2" style="width: 454px;"><img src="../img/<?php echo $editaServico->sessao3_iconeColuna2;?>" width="150" alt="">		
                                                                    <?php if(isset($editaServico->sessao3_iconeColuna2) && !empty($editaServico->sessao3_iconeColuna2)){ ?>
                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <img src="../img/<?php echo $editaServico->sessao3_iconeColuna2;?>" width="150" alt="">
                                                                        </div>
                                                                    </div>
                                                                    <?php }?>                                                                
                                                                </div>  
                                                                <div class="card-body">
                                                                    <h5 class="card-title" style="text-align: center; font-weight: 550; "><input type="text" name="sessao3_tituloColuna2" value="<?php if(isset($editaServico->sessao3_tituloColuna2) && !empty($editaServico->sessao3_tituloColuna2)){ echo $editaServico->sessao3_tituloColuna2;}?>"></h5>
                                                                    <p class="card-text" style="text-align: center; color: #9980BB"><input type="text" name="sessao3_textoColuna2" value="<?php if(isset($editaServico->sessao3_textoColuna2) && !empty($editaServico->sessao3_textoColuna2)){ echo $editaServico->sessao3_textoColuna2;}?>"></p>
                                                                    <p class="card-text" style="text-align: center; color: #9980BB"><input type="text" name="sessao3_tituloPrecoColuna2" value="<?php if(isset($editaServico->sessao3_tituloPrecoColuna2) && !empty($editaServico->sessao3_tituloPrecoColuna2)){ echo $editaServico->sessao3_tituloPrecoColuna2;}?>"></p>
                                                                    <p class="card-text" style="text-align: center; font-weight: bold; font-family: Helvetica; color: #9980BB"><input type="text" name="sessao3_PrecoColuna2" value="<?php if(isset($editaServico->sessao3_PrecoColuna2) && !empty($editaServico->sessao3_PrecoColuna2)){ echo $editaServico->sessao3_PrecoColuna2;}?>"></p>
                                                                    <p class="card-text" style="text-align: center; color: #9980BB"><input type="text" name="sessao3_CondicoesPrecoColuna2" value="<?php if(isset($editaServico->sessao3_CondicoesPrecoColuna2) && !empty($editaServico->sessao3_CondicoesPrecoColuna2)){ echo $editaServico->sessao3_CondicoesPrecoColuna2;}?>"></p>
                                                                    <div style="text-align: center;">
                                                                        <div class="col-md-6" style="text-align:center; margin: auto">
                                                                            <div class="form-group">
                                                                            <label class="mr-sm-2" for="">Nome Botão</label>
                                                                                <input type="text" class="form-control" name="nome_botao2_sessao3" value="<?php if(isset($editaServico->nome_botao2_sessao3) && !empty($editaServico->nome_botao2_sessao3)){ echo $editaServico->nome_botao2_sessao3;}?>" >
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6" style="text-align:center; margin: auto">
                                                                            <div class="form-group">
                                                                            <label class="mr-sm-2" for="">Link Botão</label>
                                                                                <input type="text" class="form-control" name="link_botao2_sessao3" value="<?php if(isset($editaServico->link_botao2_sessao3) && !empty($editaServico->link_botao2_sessao3)){ echo $editaServico->link_botao2_sessao3;}?>" >
                                                                            </div>
                                                                        </div>
                                                                    </div>	
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col" style="width: 385px">
                                                            <div class="card" style="border-radius: 28px; height: 617px;">
                                                                <div class="col-lg-35 offset-lg-1 section-title" style="margin: 20px 20px;">
                                                                    <input type="file" class="form-control" name="sessao3_iconeColuna3" style="width: 454px;"><img src="../img/<?php echo $editaServico->sessao3_iconeColuna3;?>" width="150" alt="">		
                                                                    <?php if(isset($editaServico->sessao3_iconeColuna3) && !empty($editaServico->sessao3_iconeColuna3)){ ?>
                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <img src="../img/<?php echo $editaServico->sessao3_iconeColuna3;?>" width="150" alt="">
                                                                        </div>
                                                                    </div>
                                                                    <?php }?>                                                                
                                                                </div>  
                                                                <div class="card-body">
                                                                    <h5 class="card-title" style="text-align: center; font-weight: 550; "><input type="text" name="sessao3_tituloColuna3" value="<?php if(isset($editaServico->sessao3_tituloColuna3) && !empty($editaServico->sessao3_tituloColuna3)){ echo $editaServico->sessao3_tituloColuna3;}?>"></h5>
                                                                    <p class="card-text" style="text-align: center; color: #9980BB"><input type="text" name="sessao3_textoColuna3" value="<?php if(isset($editaServico->sessao3_textoColuna3) && !empty($editaServico->sessao3_textoColuna3)){ echo $editaServico->sessao3_textoColuna3;}?>"></p>
                                                                    <p class="card-text" style="text-align: center; color: #9980BB"><input type="text" name="sessao3_tituloPrecoColuna3" value="<?php if(isset($editaServico->sessao3_tituloPrecoColuna3) && !empty($editaServico->sessao3_tituloPrecoColuna3)){ echo $editaServico->sessao3_tituloPrecoColuna3;}?>"></p>
                                                                    <p class="card-text" style="text-align: center; font-weight: bold;  font-family: Helvetica; color: #9980BB"><input type="text" name="sessao3_PrecoColuna3" value="<?php if(isset($editaServico->sessao3_PrecoColuna3) && !empty($editaServico->sessao3_PrecoColuna3)){ echo $editaServico->sessao3_PrecoColuna3;}?>"></p>
                                                                    <p class="card-text" style="text-align: center; color: #9980BB"><input type="text" name="sessao3_CondicoesPrecoColuna3" value="<?php if(isset($editaServico->sessao3_CondicoesPrecoColuna3) && !empty($editaServico->sessao3_CondicoesPrecoColuna3)){ echo $editaServico->sessao3_CondicoesPrecoColuna3;}?>"></p>
                                                                    <div style="text-align: center;">
                                                                        <div class="col-md-6" style="text-align:center; margin: auto">
                                                                            <div class="form-group">
                                                                            <label class="mr-sm-2" for="">Nome Botão</label>
                                                                                <input type="text" class="form-control" name="nome_botao3_sessao3" value="<?php if(isset($editaServico->nome_botao3_sessao3) && !empty($editaServico->nome_botao3_sessao3)){ echo $editaServico->nome_botao3_sessao3;}?>" >
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6" style="text-align:center; margin: auto">
                                                                            <div class="form-group">
                                                                            <label class="mr-sm-2" for="">Link Botão</label>
                                                                                <input type="text" class="form-control" name="link_botao3_sessao3" value="<?php if(isset($editaServico->link_botao3_sessao3) && !empty($editaServico->link_botao3_sessao3)){ echo $editaServico->link_botao3_sessao3;}?>" >
                                                                            </div>
                                                                        </div>
                                                                    </div>	
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>	
                                       
                                        <hr>

                                        <h4 class="card-title">Sessão 4</h4>
                                        <div class="row" style="margin: auto; ">	
                                            <div class="col-lg-5 offset-lg-1 section-title" style="margin: auto; margin-left: 173px">
                                                <div>   
                                                    <label class="mr-sm-2" for="">SubTitulo</label>
                                                    <input type="text" class="form-control" name="sessao4_SubTitulo" value="<?php if(isset($editaServico->sessao4_SubTitulo) && !empty($editaServico->sessao4_SubTitulo)){ echo $editaServico->sessao4_SubTitulo;}?>" >    
                                                </div>
                                                <div>   
                                                    <label class="mr-sm-2" for="">Titulo</label>
                                                    <input type="text" class="form-control" name="sessao4_titulo" value="<?php if(isset($editaServico->sessao4_titulo) && !empty($editaServico->sessao4_titulo)){ echo $editaServico->sessao4_titulo;}?>" >    
                                                </div> 
                                                <div>
                                                    <label class="mr-sm-2" for="">Texto</label>
                                                   <textarea name="sessao4_texto" class="ckeditor" id="ckeditor" cols="30" rows="4"><?php if(isset($editaServico->sessao4_texto) && !empty($editaServico->sessao4_texto)){ echo $editaServico->sessao4_texto;}?></textarea>
                                                </div>
                                                <br>
                                                <div style="text-align:center; margin: auto">
                                                    <div class="form-group">
                                                    <label class="mr-sm-2" for="">Nome Botão</label>
                                                        <input type="text" class="form-control" name="nome_botao_sessao4" value="<?php if(isset($editaServico->nome_botao_sessao4) && !empty($editaServico->nome_botao_sessao4)){ echo $editaServico->nome_botao_sessao4;}?>" >
                                                    </div>
                                                </div>
                                                <div style="text-align:center; margin: auto">
                                                    <div class="form-group">
                                                    <label class="mr-sm-2" for="">Link Botão</label>
                                                        <input type="text" class="form-control" name="link_botao_sessao4" value="<?php if(isset($editaServico->link_botao_sessao4) && !empty($editaServico->link_botao_sessao4)){ echo $editaServico->link_botao_sessao4;}?>" >
                                                    </div>
                                                </div>
                                            </div> 
                                            <div class="col-lg-5 offset-lg-1 section-title" style="margin: auto;">		
                                                <label class="mr-sm-2" for="">Ícone</label>
                                                    <input type="file" class="form-control" name="sessao4_icone" >  
                                                    <img src="../img/<?php echo $editaServico->sessao4_icone;?>" width="150" alt="">
         
                                            </div>

                                            <?php if(isset($editaServico->sessao4_icone) && !empty($editaServico->sessao4_icone)){ ?>

                                                <div class="form-group">
                                                    <img src="../img/<?php echo $editaServico->sessao4_icone;?>" width="150" alt="">
                                                </div>

                                            <?php }?>         
                                         
                                        </div>	  
                                    
                                        <h4 class="card-title">Sessão 5</h4>
                                        <div class="container1" style="position: static; text-align: center; ">
                                            <div class="row" style="text-align: center; padding: auto; margin: auto; max-width:100%; justify-content: center;">
                                                <div class="card" style="margin: 10px 10px; height: 579px; width: 270px;">
                                                    <div class="col-lg-15 offset-lg-1 section-title" style="margin: auto;">		
                                                        <label class="mr-sm-2" for="">Foto 1</label>
                                                        <input type="file" class="form-control" name="sessao5_foto1" style="justify-content: center;">             
                                                    </div>

                                                    <?php if(isset($editaServico->sessao5_foto1) && !empty($editaServico->sessao5_foto1)){ ?>

                                                    <div class="form-group">
                                                        <img src="../img/<?php echo $editaServico->sessao5_foto1;?>" width="150" alt="foto.png">
                                                    </div>

                                                    <?php }?> 
                                                </div>
                                               
                                                <div class="card" style="margin: 10px 10px; height: 579px; width: 270px;">
                                                    <div class="col-lg-15 offset-lg-1 section-title" style="margin: auto;">		
                                                        <label class="mr-sm-2" for="">Foto 2</label>
                                                        <input type="file" class="form-control" name="sessao5_foto2" style="justify-content: center;">             
                                                    </div>

                                                    <?php if(isset($editaServico->sessao5_foto2) && !empty($editaServico->sessao5_foto2)){ ?>

                                                    <div class="form-group">
                                                        <img src="../img/<?php echo $editaServico->sessao5_foto2;?>" width="150" alt="">
                                                    </div>

                                                    <?php }?>                                                 
                                                </div>                                            
                                                <div class="card" style="margin: 10px 10px;  height: 579px; width: 270px;">
                                                    <div class="col-lg-15 offset-lg-1 section-title" style="margin: auto;">		
                                                        <label class="mr-sm-2" for="">Foto 3</label>
                                                        <input type="file" class="form-control" name="sessao5_foto3" style="justify-content: center;">             
                                                    </div>

                                                    <?php if(isset($editaServico->sessao5_foto3) && !empty($editaServico->sessao5_foto3)){ ?>

                                                    <div class="form-group">
                                                        <img src="../img/<?php echo $editaServico->sessao5_foto3;?>" width="150" alt="">
                                                    </div>

                                                    <?php }?> 	
                                                </div>

                                                <div class="card" style="margin: 10px 10px;  height: 579px; width: 270px;">
                                                    <div class="col-lg-15 offset-lg-1 section-title" style="margin: auto;">		
                                                        <label class="mr-sm-2" for="">Foto 4</label>
                                                        <input type="file" class="form-control" name="sessao5_foto4" style="justify-content: center;">             
                                                    </div>

                                                    <?php if(isset($editaServico->sessao5_foto4) && !empty($editaServico->sessao5_foto4)){ ?>

                                                    <div class="form-group">
                                                        <img src="../img/<?php echo $editaServico->sessao5_foto4;?>" width="150" alt="">
                                                    </div>

                                                    <?php }?>                                                 
                                                </div>
                                            </div>
                                            <div style="justify-content: center;  max-width:100%;">
                                                <div class="col-md-6" style="text-align: center; margin: auto">
                                                    <div class="form-group">
                                                    <label class="mr-sm-2" for="">Texto</label>
                                                        <input type="text" class="form-control" name="sessao5_texto" value="<?php if(isset($editaServico->sessao5_texto) && !empty($editaServico->sessao5_texto)){ echo $editaServico->sessao5_texto;}?>" >
                                                    </div>
                                                </div>        
                                                <div class="col-lg-6 offset-lg-1 section-title" style="margin:auto">
                                                    <div style="text-align:center; margin: auto">
                                                        <div class="form-group">
                                                        <label class="mr-sm-2" for="">Nome Botão</label>
                                                            <input type="text" class="form-control" name="nome_botao_sessao5" value="<?php if(isset($editaServico->nome_botao_sessao5) && !empty($editaServico->nome_botao_sessao5)){ echo $editaServico->nome_botao_sessao5;}?>" >
                                                        </div>
                                                    </div>
                                                    <div style="text-align:center; margin: auto">
                                                        <div class="form-group">
                                                        <label class="mr-sm-2" for="">Link Botão</label>
                                                            <input type="text" class="form-control" name="link_botao_sessao5" value="<?php if(isset($editaServico->link_botao_sessao5) && !empty($editaServico->link_botao_sessao5)){ echo $editaServico->link_botao_sessao5;}?>" >
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
				                        </div>	 
                                        <hr>
                               
                                         <hr>
                                            <h4 class="card-title">Texto Corrido</h4>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Titulo </label>
                                                    <input type="text" class="form-control" name="titulo_texto" value="<?php if(isset($editaServico->titulo_texto) && !empty($editaServico->titulo_texto)){ echo $editaServico->titulo_texto;}?>" >
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Texto</label>
                                                   <textarea name="texto_corrido" class="ckeditor" id="ckeditor" cols="30" rows="4"><?php if(isset($editaServico->texto_corrido) && !empty($editaServico->texto_corrido)){ echo $editaServico->texto_corrido;}?></textarea>
                                                </div>
                                            </div>      
                                        </div>
                                        <hr>
                                        <h4 class="card-title">Imagem Final</h4>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Imagem</label>
                                                    <input type="file" class="form-control" name="imagem_final" >
                                                </div>
                                            </div>
                                            <?php if(isset($editaServico->imagem_final) && !empty($editaServico->imagem_final)){ ?>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                               <img src="../img/<?php echo $editaServico->imagem_final;?>" width="150" alt="">
                                                </div>
                                            </div>
                                            <?php }?>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Imagem mobile</label>
                                                    <input type="file" class="form-control" name="imagem_mobile_final" >
                                                </div>
                                            </div>
                                            <?php if(isset($editaServico->imagem_mobile_final) && !empty($editaServico->imagem_mobile_final)){ ?>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                               <img src="../img/<?php echo $editaServico->imagem_mobile_final;?>" width="150" alt="">
                                                </div>
                                            </div>
                                            <?php }?>
                                        </div>
                                        <hr>
                                        <h4 class="card-title">Sessão Contato</h4>
                                        <div class="row">
                                          
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Titulo</label>
                                                    <input type="text" class="form-control" name="contato_titulo" value="<?php if(isset($editaServico->contato_titulo) && !empty($editaServico->contato_titulo)){ echo $editaServico->contato_titulo;}?>" >
                                                </div>
                                            </div>
                                        </div>
                                      <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Texto</label>
                                                   <textarea name="contato_texto" class="ckeditor" id="ckeditor" cols="30" rows="4"><?php if(isset($editaServico->contato_texto) && !empty($editaServico->contato_texto)){ echo $editaServico->contato_texto;}?></textarea>
                                                </div>
                                            </div>                                        
                                        </div>
                                        <hr>
                                       
                                        
                                        <br>
                                        <h4 class="card-title">Metas Tags</h4>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Meta Title</label>
                                                    <input type="text" class="form-control" name="meta_title" value="<?php if(isset($editaServico->meta_title) && !empty($editaServico->meta_title)){ echo $editaServico->meta_title;}?>">
                                                </div>
                                            </div>                                        
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Meta Keywords</label>
                                                    <input type="text" class="form-control" name="meta_keywords" value="<?php if(isset($editaServico->meta_keywords) && !empty($editaServico->meta_keywords)){ echo $editaServico->meta_keywords;}?>">
                                                </div>
                                            </div>                                        
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Meta Description</label>
                                                   <textarea name="meta_description" class="form-control" id="" cols="30" rows="4"><?php if(isset($editaServico->meta_description) && !empty($editaServico->meta_description)){ echo $editaServico->meta_description;}?></textarea>
                                                </div>
                                            </div>                                        
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-info">Salvar</button>
                                            <button type="reset" class="btn btn-dark">Resetar</button>
                                        </div>
                                    </div>
                                    <input type="hidden" name="acao" value="editaServico">
                                    <input type="hidden" name="id" value="<?php echo $editaServico->id;?>">
                                    <input type="hidden" name="banner_foto_Atual" value="<?php if(isset($editaServico->banner_foto) && !empty($editaServico->banner_foto)){ echo $editaServico->banner_foto;}?>">
                                    <!--  -->
                                    <input type="hidden" name="sessao1_foto_icone1_Atual" value="<?php if(isset($editaServico->sessao1_foto_icone1) && !empty($editaServico->sessao1_foto_icone1)){ echo $editaServico->sessao1_foto_icone1;}?>">
                                    <input type="hidden" name="sessao1_foto_icone2_Atual" value="<?php if(isset($editaServico->sessao1_foto_icone2) && !empty($editaServico->sessao1_foto_icone2)){ echo $editaServico->sessao1_foto_icone2;}?>">

                                    <input type="hidden" name="sessao3_iconeColuna1_Atual" value="<?php if(isset($editaServico->sessao3_iconeColuna1) && !empty($editaServico->sessao3_iconeColuna1)){ echo $editaServico->sessao3_iconeColuna1;}?>">
                                    <input type="hidden" name="sessao3_iconeColuna2_Atual" value="<?php if(isset($editaServico->sessao3_iconeColuna2) && !empty($editaServico->sessao3_iconeColuna2)){ echo $editaServico->sessao3_iconeColuna2;}?>">
                                    <input type="hidden" name="sessao3_iconeColuna3_Atual" value="<?php if(isset($editaServico->sessao3_iconeColuna3) && !empty($editaServico->sessao3_iconeColuna3)){ echo $editaServico->sessao3_iconeColuna3;}?>">

                                    <input type="hidden" name="sessao4_icone_Atual" value="<?php if(isset($editaServico->sessao4_icone) && !empty($editaServico->sessao4_icone)){ echo $editaServico->sessao4_icone;}?>">

                                    <input type="hidden" name="sessao5_foto1_Atual" value="<?php if(isset($editaServico->sessao5_foto1) && !empty($editaServico->sessao5_foto1)){ echo $editaServico->sessao5_foto1;}?>">
                                    <input type="hidden" name="sessao5_foto2_Atual" value="<?php if(isset($editaServico->sessao5_foto2) && !empty($editaServico->sessao5_foto2)){ echo $editaServico->sessao5_foto2;}?>">
                                    <input type="hidden" name="sessao5_foto3_Atual" value="<?php if(isset($editaServico->sessao5_foto3) && !empty($editaServico->sessao5_foto3)){ echo $editaServico->sessao5_foto3;}?>">
                                    <input type="hidden" name="sessao5_foto1_Atual" value="<?php if(isset($editaServico->sessao5_foto4) && !empty($editaServico->sessao5_foto4)){ echo $editaServico->sessao5_foto4;}?>">
                                    
                                    <!--  -->
                                    <input type="hidden" name="sessao2_foto_Atual" value="<?php if(isset($editaServico->sessao2_foto) && !empty($editaServico->sessao2_foto)){ echo $editaServico->sessao2_foto;}?>">
                                    <input type="hidden" name="sessao4_foto_Atual" value="<?php if(isset($editaServico->sessao4_foto) && !empty($editaServico->sessao4_foto)){ echo $editaServico->sessao4_foto;}?>">
                                    <input type="hidden" name="topico1_foto_Atual" value="<?php if(isset($editaServico->topico1_foto) && !empty($editaServico->topico1_foto)){ echo $editaServico->topico1_foto;}?>">
                                    <input type="hidden" name="topico2_foto_Atual" value="<?php if(isset($editaServico->topico2_foto) && !empty($editaServico->topico2_foto)){ echo $editaServico->topico2_foto;}?>">
                                    <input type="hidden" name="topico3_foto_Atual" value="<?php if(isset($editaServico->topico3_foto) && !empty($editaServico->topico3_foto)){ echo $editaServico->topico3_foto;}?>">
                                    <input type="hidden" name="topico4_foto_Atual" value="<?php if(isset($editaServico->topico4_foto) && !empty($editaServico->topico4_foto)){ echo $editaServico->topico4_foto;}?>">
                                    <input type="hidden" name="diferenca1_foto_Atual" value="<?php if(isset($editaServico->diferenca1_foto) && !empty($editaServico->diferenca1_foto)){ echo $editaServico->diferenca1_foto;}?>">
                                    <input type="hidden" name="diferenca2_foto_Atual" value="<?php if(isset($editaServico->diferenca2_foto) && !empty($editaServico->diferenca2_foto)){ echo $editaServico->diferenca2_foto;}?>">
                                    <input type="hidden" name="diferenca3_foto_Atual" value="<?php if(isset($editaServico->diferenca3_foto) && !empty($editaServico->diferenca3_foto)){ echo $editaServico->diferenca3_foto;}?>">
                                    <input type="hidden" name="imagem_final_Atual" value="<?php if(isset($editaServico->imagem_final) && !empty($editaServico->imagem_final)){ echo $editaServico->imagem_final;}?>">
                                    <input type="hidden" name="imagem_mobile_final_Atual" value="<?php if(isset($editaServico->imagem_mobile_final) && !empty($editaServico->imagem_mobile_final)){ echo $editaServico->imagem_mobile_final;}?>">
                                    
                                    
                                    <input type="hidden" name="sessao5_foto1_Atual" value="<?php if(isset($editaServico->sessao5_foto1) && !empty($editaServico->sessao5_foto1)){ echo $editaServico->sessao5_foto1;}?>">
                                    <input type="hidden" name="sessao5_foto2_Atual" value="<?php if(isset($editaServico->sessao5_foto2) && !empty($editaServico->sessao5_foto2)){ echo $editaServico->sessao5_foto2;}?>">
                                    <input type="hidden" name="sessao5_foto3_Atual" value="<?php if(isset($editaServico->sessao5_foto3) && !empty($editaServico->sessao5_foto3)){ echo $editaServico->sessao5_foto3;}?>">
                                    <input type="hidden" name="sessao5_foto4_Atual" value="<?php if(isset($editaServico->sessao5_foto4) && !empty($editaServico->sessao5_foto4)){ echo $editaServico->sessao5_foto4;}?>">
                              
                              
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>



           <?php include "footer.php";?>
        </div>
    </div>
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="dist/js/app-style-switcher.js"></script>
    <script src="dist/js/feather.min.js"></script>
    <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="assets/extra-libs/sparkline/sparkline.js"></script>
    <script src="dist/js/sidebarmenu.js"></script>
    <script src="dist/js/custom.min.js"></script>
    <script src="vendor/ckeditor/ckeditor.js"></script>
</body>
</html>