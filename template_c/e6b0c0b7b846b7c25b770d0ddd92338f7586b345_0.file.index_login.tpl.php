<?php
/* Smarty version 3.1.39, created on 2021-03-13 08:41:53
  from 'C:\xampp\htdocs\auth\template\index_login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_604c6cc143d260_00280020',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6b0c0b7b846b7c25b770d0ddd92338f7586b345' => 
    array (
      0 => 'C:\\xampp\\htdocs\\auth\\template\\index_login.tpl',
      1 => 1615621260,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_604c6cc143d260_00280020 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_395585317604c6cc14299e0_09292654', "body");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "body"} */
class Block_395585317604c6cc14299e0_09292654 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_395585317604c6cc14299e0_09292654',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container">
    <div class="row">
        <div class="col-12 mt-5">
            <a class="btn btn-success float-right" href="new_login.php">New Login</a>
        </div>
    </div>

    <div class="row">
        <div class="col-12 mt-2">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>username</th>
                        <th>password</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listdata']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['username'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['password'];?>
</td>
                            <td>
                                <a href="edit_bank.php?edit_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="btn btn-info btn-sm">Edit</a>
                                <a href="delete.php?delete_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php
}
}
/* {/block "body"} */
}
