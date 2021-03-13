<?php
/* Smarty version 3.1.39, created on 2021-03-11 07:06:21
  from 'C:\xampp\htdocs\auth\template\layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6049b35dc8f3c7_72829242',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '70cc5d46b538665965067b084f91f2bcbf7ed8e7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\auth\\template\\layout.tpl',
      1 => 1615439945,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6049b35dc8f3c7_72829242 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
  <link rel="stylesheet" href="asset/css/bootstrap.min.css">
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8845439676049b35dc8f3c7_70485634', 'custom_style');
?>

</head>
<body>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15213630406049b35dc8f3c5_72746696', 'body');
?>


    <?php echo '<script'; ?>
 src="asset/jq/jquery-3.5.1.min.js"><?php echo '</script'; ?>
>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15866231286049b35dc8f3c6_40395407', 'custom_script');
?>

</body>
</html>
<?php }
/* {block 'custom_style'} */
class Block_8845439676049b35dc8f3c7_70485634 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'custom_style' => 
  array (
    0 => 'Block_8845439676049b35dc8f3c7_70485634',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'custom_style'} */
/* {block 'body'} */
class Block_15213630406049b35dc8f3c5_72746696 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_15213630406049b35dc8f3c5_72746696',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php
}
}
/* {/block 'body'} */
/* {block 'custom_script'} */
class Block_15866231286049b35dc8f3c6_40395407 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'custom_script' => 
  array (
    0 => 'Block_15866231286049b35dc8f3c6_40395407',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'custom_script'} */
}
