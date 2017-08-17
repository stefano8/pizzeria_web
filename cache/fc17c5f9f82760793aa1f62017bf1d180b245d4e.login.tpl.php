<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-08-17 14:02:11
  from "/Applications/MAMP/htdocs/pizzeria_web/templates/login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-18',
  'unifunc' => 'content_599585c3e7c6e0_83660812',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c6a887433f3628cc13caf63fa58867aafc5f260' => 
    array (
      0 => '/Applications/MAMP/htdocs/pizzeria_web/templates/login.tpl',
      1 => 1502970549,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 120,
),true)) {
function content_599585c3e7c6e0_83660812 (Smarty_Internal_Template $_smarty_tpl) {
?>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/animate.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/nivo-lightbox.css">
<link rel="stylesheet" href="css/nivo_themes/default/default.css">
<link rel="stylesheet" href="css/style.css">
<link href='https://fonts.googleapis.com/css?family=Roboto:400,500' rel='stylesheet' type='text/css'>

<section id="contact" class="parallax-section">
    <a style="margin-right: auto; margin-left: 3%; margin-top: 0%" href="index.php">
        <input name="submit" type="submit" class="fa fa-reply" id="submit" value="Torna al sito">
    </a>

    <div class="container">

        <div class="row">
            <div class="col-md-offset-1 col-md-10 col-sm-12 text-center">


                <h1 class="heading">Login</h1>
                <hr>
            </div>
            <div class="col-md-offset-1 col-md-10 col-sm-12 wow fadeIn" data-wow-delay="0.9s">


                <form action="#" method="post">
                    <div class="col-md-6 col-sm-6" style="margin-left: 25%; margin-right: auto;">
                        <input name="username" type="text" class="form-control" id="user" placeholder="Username">
                        <input name="password" type="password" class="form-control" id="passw" placeholder="Password">
                    </div>

                    <div class="col-md-offset-3 col-md-6         col-sm-offset-3 col-sm-6">
                        <input name="submit" type="submit" class="form-control" id="submit" value="Login">

                    </div>
                </form>



            </div>
            <div class="col-md-2 col-sm-1"></div>
        </div>
    </div>
</section><?php }
}
