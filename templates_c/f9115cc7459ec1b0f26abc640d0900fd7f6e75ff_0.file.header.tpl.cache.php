<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-08-17 14:05:32
  from "/Applications/MAMP/htdocs/pizzeria_web/templates/header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-18',
  'unifunc' => 'content_5995868c044d76_82401804',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f9115cc7459ec1b0f26abc640d0900fd7f6e75ff' => 
    array (
      0 => '/Applications/MAMP/htdocs/pizzeria_web/templates/header.tpl',
      1 => 1502971531,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5995868c044d76_82401804 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '4867095325995868bf2b5f8_54849975';
?>
<!-- header section -->
<section class="preloader">
    <div class="sk-spinner sk-spinner-pulse"></div>
</section>

<!-- navigation section -->
<section class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php" class="smoothScroll">HOME</a></li>
                <li><a href="#gallery" class="smoothScroll">FOOD GALLERY</a></li>
                <li><a href="#menu" class="smoothScroll">SPECIAL MENU</a></li>
                <li><a href="#team" class="smoothScroll">CHEFS</a></li>
                <li><a href="#contact" class="smoothScroll">CONTACT</a></li>
               <!-- <li><a href="login.php" class="smoothScroll">LOGIN</a></li>-->
            </ul>
        </div>
    </div>
</section><?php }
}
