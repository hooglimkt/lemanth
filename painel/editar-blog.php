<?php include "verifica.php";
if(isset($_GET['id'])){
    if(empty($_GET['id'])){
        header('Location: blogs.php');
    }else{
        $id = $_GET['id'];        
    }
}
$blogs->editar();
$editaBlog = $blogs->rsDados($id);
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
    <title>Painel Hoogli - Editar Blog</title>
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
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Editar Blog</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="." class="text-muted">Home</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page"><a href="blogs.php" class="text-muted">Blogs</a></li>
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
                                        <div class="form-group row">
    
	<div class="col-md-2 col-sm-12">
    <label  class="col-form-label">Ativo</label>
	<select name="ativo" class="form-control" id="">
		<option value="S" <?php if(isset($editaBlog->ativo) && $editaBlog->ativo == 'S'){ echo "selected";}?>>Sim</option>
		<option value="N" <?php if(isset($editaBlog->ativo) && $editaBlog->ativo == 'N'){ echo "selected";}?>>Não</option>
	</select>   
    </div>

  <div class="col-md-3 col-sm-12">
    <label  class="col-form-label">Data Postagem</label>
     <input class="form-control" type="date" name="data_postagem" value="<?php if(isset($editaBlog->data_postagem) && !empty($editaBlog->data_postagem)){ echo $editaBlog->data_postagem;}?>" />
    </div>
    <?php if(isset($editaBlog->foto) && !empty($editaBlog->foto)){?>
    <div class="col-md-6 col-sm-12">
        <img src="../img/<?php echo $editaBlog->foto;?>" width="100">
    </div>
    <?php }?>
    
   </div>

                                     <div class="form-group row">
    
    <div class="col-md-6 col-sm-12">
    <label  class="col-form-label">Título</label>
     <input class="form-control" type="text" name="titulo" value="<?php if(isset($editaBlog->titulo) && !empty($editaBlog->titulo)){ echo $editaBlog->titulo;}?>" />
    </div>
    <div class="col-md-6 col-sm-12">
    <label  class="col-form-label">Postado Por</label>
     <input class="form-control" type="text" name="postado_por" value="<?php if(isset($editaBlog->postado_por) && !empty($editaBlog->postado_por)){ echo $editaBlog->postado_por;}?>" />
    </div>
	
   </div>
    <div class="form-group row">
    <div class="col-md-6 col-sm-12">
    <label  class="col-form-label">Imagem </label>
     <input class="form-control" type="file" name="foto"  />
    </div>
    <div class="col-md-6 col-sm-12">
    <label  class="col-form-label">Legenda Imagem</label>
     <input class="form-control" type="text" name="legenda_imagem" value="<?php if(isset($editaBlog->legenda_imagem) && !empty($editaBlog->legenda_imagem)){ echo $editaBlog->legenda_imagem;}?>" />
    </div>
   </div>
     <?php if(isset($editaBlog->foto) && !empty($editaBlog->foto)){?>
   <div class="form-group row">
    <div class="col-md-6 col-sm-12">
   <img src="../img/<?php echo $editaBlog->foto;?>" width="150">
    </div>
   </div>
   <?php }?>
   <div class="form-group row">
    <div class="col-md-12 col-sm-12">
    <label  class="col-form-label">Descrição Imagem</label>
     <input class="form-control" type="text" name="descricao_imagem" value="<?php if(isset($editaBlog->descricao_imagem) && !empty($editaBlog->descricao_imagem)){ echo $editaBlog->descricao_imagem;}?>" />
    </div>
   </div>
  
   <div class="form-group row">
    
    <div class="col-md-12 col-sm-12">
    <label  class="col-form-label">Breve</label>
     <input class="form-control" type="text" name="breve" value="<?php if(isset($editaBlog->breve) && !empty($editaBlog->breve)){ echo $editaBlog->breve;}?>" />
    </div>
    
   </div>
   <div class="form-group row">
    
    <div class="col-md-12 col-sm-12">
    <label  class="col-form-label">Conteúdo</label>
     <textarea name="conteudo" class="ckeditor" id="ckeditor" cols="30" rows="10"><?php if(isset($editaBlog->conteudo) && !empty($editaBlog->conteudo)){ echo $editaBlog->conteudo;}?></textarea>
    </div>
    
   </div>
                                      <div class="clearfix"></div>
    <div class="form-group row">
<div class="col-md-12">	   
   <h5>Informaçåo SEO</h5>
</div>
</div>
   <div class="form-group row">
    <div class="col-md-12 col-sm-12">
    <label  class="col-form-label">Meta Title</label>
     <input class="form-control" type="text" name="meta_title" value="<?php if(isset($editaBlog->meta_title) && !empty($editaBlog->meta_title)){ echo $editaBlog->meta_title;}?>" />
    </div>   
   </div>
   <div class="form-group row">
    <div class="col-md-12 col-sm-12">
    <label  class="col-form-label">Meta Keywords</label>
     <input class="form-control" type="text" name="meta_keywords" value="<?php if(isset($editaBlog->meta_keywords) && !empty($editaBlog->meta_keywords)){ echo $editaBlog->meta_keywords;}?>" />
    </div>   
   </div>
   <div class="form-group row">
    <div class="col-md-12 col-sm-12">
    <label  class="col-form-label">Meta Description</label>
	<textarea name="meta_description" class="form-control" id="" cols="30" rows="10"><?php if(isset($editaBlog->meta_description) && !empty($editaBlog->meta_description)){ echo $editaBlog->meta_description;}?></textarea> 
    </div>   
   </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-info">Salvar</button>
                                           
                                        </div>
                                    </div>
                                    <input type="hidden" name="acao" value="editaBlog">
                                    <input type="hidden" name="id" value="<?php if(isset($editaBlog->id) && !empty($editaBlog->id)){ echo $editaBlog->id;}?>">
                                    <input type="hidden" name="foto_Atual" value="<?php if(isset($editaBlog->foto) && !empty($editaBlog->foto)){ echo $editaBlog->foto;}?>">
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