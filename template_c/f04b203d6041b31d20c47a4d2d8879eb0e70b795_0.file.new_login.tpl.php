<?php
/* Smarty version 3.1.39, created on 2021-03-13 08:39:49
  from 'C:\xampp\htdocs\auth\template\new_login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_604c6c450f0b59_63623512',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f04b203d6041b31d20c47a4d2d8879eb0e70b795' => 
    array (
      0 => 'C:\\xampp\\htdocs\\auth\\template\\new_login.tpl',
      1 => 1615441603,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_604c6c450f0b59_63623512 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_389020108604c6c450f0b54_77886680', "body");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1215052213604c6c450f0b55_68252776', 'custom_style');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_26985272604c6c450f0b57_03823343', 'custom_script');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "body"} */
class Block_389020108604c6c450f0b54_77886680 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_389020108604c6c450f0b54_77886680',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="container p-3 my-3">
        <div class="card">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-4 col-lg-offset-4" style="margin-top: 10%;">
                <form id="login" method="post" action="save.php"> 
                    <h1>LOGIN</h1>
                    <div class="form-group">
                        <lable>username</lable>
                        <input type="text" id="username" name="username" class="form-control validate[required]">
                    </div>
                    <div class="form-group">
                        <label>password</label>
                        <input type="password" id="password" name="password" class="form-control validate[required]">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value="sign-in">
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>
    
<?php
}
}
/* {/block "body"} */
/* {block 'custom_style'} */
class Block_1215052213604c6c450f0b55_68252776 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'custom_style' => 
  array (
    0 => 'Block_1215052213604c6c450f0b55_68252776',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="assets/vendors/css/validationEngine.jquery.css">
<?php
}
}
/* {/block 'custom_style'} */
/* {block 'custom_script'} */
class Block_26985272604c6c450f0b57_03823343 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'custom_script' => 
  array (
    0 => 'Block_26985272604c6c450f0b57_03823343',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="assets/vendors/js/languages/jquery.validationEngine-en.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="assets/vendors/js/jquery.validationEngine.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        $(function() {
            $("#login").validationEngine();
        })
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'custom_script'} */
}
