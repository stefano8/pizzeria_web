<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-08-17 13:49:09
  from "/Applications/MAMP/htdocs/pizzeria_web/templates/login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-18',
  'unifunc' => 'content_599582b5acd847_42463434',
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
  'includes' => 
  array (
  ),
),false)) {
function content_599582b5acd847_42463434 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1752471065599582b5a933a7_87370485';
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
