<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-08-17 12:56:56
  from "/Applications/MAMP/htdocs/smarty-master/templates/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-18',
  'unifunc' => 'content_599576782522d0_05424795',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd9e5cf639cb585d8a606c60be4fbbc91d94118bc' => 
    array (
      0 => '/Applications/MAMP/htdocs/smarty-master/templates/index.tpl',
      1 => 1502967415,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_599576782522d0_05424795 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '7860058859957678207b72_67399603';
?>
<html>


 <!--questo è un commento smarty-->


    <head>
        <link rel="stylesheet" href="./css/style.css">

        <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
        
    
        <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

   
    </head>


    <body>
    <h1 class="messaggio"> <?php echo $_smarty_tpl->tpl_vars['message']->value;?>
 </h1>
        
    
    
    
        <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    </body>
    
    
</html><?php }
}
