<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-10 22:39:03
  from 'C:\xampp\htdocs\pwb\templates\layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fab087729a0e3_22341301',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e2d5fd7f2460855ac7790dd62ea870a891933da9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pwb\\templates\\layout.tpl',
      1 => 1605044338,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fab087729a0e3_22341301 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
</head>
<body>
     <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['contenido']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</body>
<html><?php }
}
