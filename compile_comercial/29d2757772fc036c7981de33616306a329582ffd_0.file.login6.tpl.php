<?php
/* Smarty version 3.1.32, created on 2020-04-02 02:26:01
  from 'C:\xampp\tpl_comercial\login6.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5e85311986ad43_90568119',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '29d2757772fc036c7981de33616306a329582ffd' => 
    array (
      0 => 'C:\\xampp\\tpl_comercial\\login6.tpl',
      1 => 1585104316,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e85311986ad43_90568119 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
   
<head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Askbootstrap">
      <meta name="author" content="Askbootstrap">
      <title>Acceso</title>
      <!-- Favicon Icon -->
      <link rel="icon" type="image/png" href="img/favicon.png">
      <!-- Bootstrap core CSS-->
      <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <!-- Custom fonts for this template-->
      <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
      <!-- Custom styles for this template-->
      <link href="css/osahan.css" rel="stylesheet">
      <!-- Owl Carousel -->
      <link rel="stylesheet" href="vendor/owl-carousel/owl.carousel.css">
      <link rel="stylesheet" href="vendor/owl-carousel/owl.theme.css">
      <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="css/util.css">
      <link rel="stylesheet" type="text/css" href="css/main.css">
      <!--===============================================================================================-->

      <?php echo '<script'; ?>
 type="text/javascript" src="js/rollups/hmac-sha3.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 type="text/javascript" src="js/components/sha3.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 type="text/javascript">
         function validar() {
            // DOM: Document Objects Model
            // $("#pwd").val( CryptoJS.SHA3( $("#pwd").val() ) ); // JQuery

            // JavaScript
            if (document.forms[0].email.value == "") {
               alert("Se requiere el email");
               document.forms[0].email.focus();
               return false;
            }
            if (document.forms[0].pwd.value == "") {
               alert("Se requiere la contraseña");
               document.forms[0].pwd.focus();
               return false;
            }

            document.forms[0].pwd.value = CryptoJS.SHA3( document.forms[0].pwd.value ); 
         }
      <?php echo '</script'; ?>
>
   </head>
   <body class="login-main-body">
      <section class="login-main-wrapper">
         <div class="container-fluid pl-0 pr-0">
            <div class="row no-gutters">


               <div class="col-md-5 p-5 bg-white full-height">
                  <div class="login-main-left">
                     <div class="text-center mb-5 login-main-left-header pt-4">
                        <img src="fotos/andres.jpg" class="img-fluid" alt="LOGO">
                        <h5 class="mt-3 mb-3">Welcome to ComercialApp</h5>
                        <p>Si caminas solo, irás mas rápido;  <br> Si caminas acompañado llegaras mas lejos.</p>
                     </div>
                        <form action="<?php echo $_smarty_tpl->tpl_vars['LOGINI']->value;?>
" method="post" onsubmit="return validar();">
                           <div class="form-group">
                              <label for="email">Cuenta:</label>
                              <input type="email" class="form-control" id="email" name="email" placeholder="Correo Electrónico">
                           </div>
                           <div class="wrap-input100 validate-input m-b-20" data-validate = "Please enter password">
                              <span class="btn-show-pass">
                                 <i class="fa fa fa-eye"></i>
                              </span>
                              <input class="input100" type="password" id="pwd" name="pwd" placeholder="Password">
                              <span class="focus-input100"></span>
                           </div>
                           <div class="form-group form-check">
                              <label class="form-check-label">
                                 <input class="form-check-input" type="checkbox"> Recordar
                              </label>
                           </div>
                        <div class="mt-4">
                           <div class="row">
                              <div class="col-12">
                                 <button type="submit" class="btn btn-outline-primary btn-block btn-lg">Iniciar Sesion</button>
                                 </div>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>



               <div class="col-md-7">
                  <div class="login-main-right bg-white p-5 mt-5 mb-5">
                     <div class="owl-carousel owl-carousel-login">
                        <div class="item">
                           <div class="carousel-login-card text-center">
                              <img src="fotos/coyote.jpg" class="img-fluid" alt="LOGO">
                              <h5 class="mt-5 mb-3">​Coyote - Genius</h5>
                              <p class="mb-3">"En el único y verdadero camino. La versión orientada a objetos de 'código spaghetti' es, por supuesto, «código Lasagna. (demasiadas capas)." By - Roberto Waltman. </p>
                           </div>
                        </div>
                        <div class="item">
                           <div class="carousel-login-card text-center">
                              <img src="fotos/user1.jpg" class="img-fluid" alt="LOGO">
                              <h5 class="mt-5 mb-3">Donald E. Knuth. </h5>
                              <p class="mb-3">"Si McDonalds funcionara como una empresa de software, uno de cada cien Big Macs le daría la intoxicación alimentaria, y la respuesta sería, 'Lo sentimos, aquí tiene un cupón para dos más" By - Donald E. Knuth. </p>
                           </div>
                        </div>
                        <div class="item">
                           <div class="carousel-login-card text-center">
                              <img src="fotos/einsten.jpg" class="img-fluid" alt="LOGO">
                              <h5 class="mt-5 mb-3">Albert Einstein</h5>
                              <p class="mb-3">"Locura es hacer lo mismo una y otra vez esperando obtener resultados diferentes"</p>
                           </div>
                        </div>

                        <div class="item">
                           <div class="carousel-login-card text-center">
                              <img src="fotos/bugs.jpg" class="img-fluid" alt="LOGO">
                              <h5 class="mt-5 mb-3">Bugs Carrette</h5>
                              <p class="mb-3">
                        “Primero aprenda informática y toda la teoría. Acto seguido desarrolle un estilo de programación. Luego olvidesé todo eso y solo hackee.” By - George Carrette </p>
                           </div>
                        </div>                        
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Bootstrap core JavaScript-->
      <?php echo '<script'; ?>
 src="vendor/jquery/jquery.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="vendor/bootstrap/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
      <!-- Core plugin JavaScript-->
      <?php echo '<script'; ?>
 src="vendor/jquery-easing/jquery.easing.min.js"><?php echo '</script'; ?>
>
      <!-- Owl Carousel -->
      <?php echo '<script'; ?>
 src="vendor/owl-carousel/owl.carousel.js"><?php echo '</script'; ?>
>
      <!-- Custom scripts for all pages-->
      <?php echo '<script'; ?>
 src="js/custom.js"><?php echo '</script'; ?>
>
   </body>

</html><?php }
}
