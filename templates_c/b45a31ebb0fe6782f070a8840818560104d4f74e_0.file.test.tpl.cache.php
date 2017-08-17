<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-08-17 13:04:14
  from "/Applications/MAMP/htdocs/pizzeria_web/templates/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-18',
  'unifunc' => 'content_5995782e74ca64_99217885',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b45a31ebb0fe6782f070a8840818560104d4f74e' => 
    array (
      0 => '/Applications/MAMP/htdocs/pizzeria_web/templates/index.tpl',
      1 => 1502967783,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5995782e74ca64_99217885 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '715923145995782e6ef568_35409076';
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>PizzeriaWeb</title>

    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">


    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/animate.min.css">
    <link rel="stylesheet" href="./css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/nivo-lightbox.css">
    <link rel="stylesheet" href="./css/nivo_themes/default/default.css">
    <link rel="stylesheet" href="./css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500' rel='stylesheet' type='text/css'>
</head>


<body>
    
    <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <h1 class="messaggio"> <?php echo $_smarty_tpl->tpl_vars['message']->value;?>
 </h1>
        
    
    
    
        <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <!-- JAVASCRIPT JS FILES -->
    <?php echo '<script'; ?>
 src="./js/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="./js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="./js/jquery.parallax.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="./js/smoothscroll.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="./js/nivo-lightbox.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="./js/wow.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="./js/custom.js"><?php echo '</script'; ?>
>

</body>

</html><?php }
}
