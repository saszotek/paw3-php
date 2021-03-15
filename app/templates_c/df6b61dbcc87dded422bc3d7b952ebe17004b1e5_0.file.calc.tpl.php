<?php
/* Smarty version 3.1.39, created on 2021-03-13 14:19:31
  from 'C:\xampp\htdocs\test\php01\app\calc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_604cbbe36f4124_91976925',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df6b61dbcc87dded422bc3d7b952ebe17004b1e5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\test\\php01\\app\\calc.tpl',
      1 => 1615641423,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_604cbbe36f4124_91976925 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1784317127604cbbe36e4f23_87912899', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1002727807604cbbe36e8d57_52962207', 'messages');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../template/main.tpl");
}
/* {block 'content'} */
class Block_1784317127604cbbe36e4f23_87912899 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1784317127604cbbe36e4f23_87912899',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<form action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc.php" method="post">
    <div class="control-group">
        <input type="text" class="form-control" id="id_x" name="x" placeholder="Kwota" value="<?php echo $_smarty_tpl->tpl_vars['x']->value;?>
" />
        <p class="help-block text-danger"></p>
    </div>
    <div class="control-group">
        <input type="text" class="form-control" id="id_y" name="y" placeholder="Lata" value="<?php echo $_smarty_tpl->tpl_vars['yHelp']->value;?>
" />
        <p class="help-block text-danger"></p>
    </div>
    <div class="control-group">
        <input type="text" class="form-control" id="id_z" name="z" placeholder="Oprocentowanie" value="<?php echo $_smarty_tpl->tpl_vars['zHelp']->value;?>
" />
        <p class="help-block text-danger"></p>
    </div>
    <div>
        <button class="btn" type="submit">Oblicz</button>
    </div>
</form>

<?php
}
}
/* {/block 'content'} */
/* {block 'messages'} */
class Block_1002727807604cbbe36e8d57_52962207 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'messages' => 
  array (
    0 => 'Block_1002727807604cbbe36e8d57_52962207',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php if ((isset($_smarty_tpl->tpl_vars['messages']->value))) {?>
    <?php if (count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?>
        <ol class="errors_moje">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
        <li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ol>
    <?php }
}?>

<?php if ((isset($_smarty_tpl->tpl_vars['infos']->value))) {?>
    <?php if (count($_smarty_tpl->tpl_vars['infos']->value) > 0) {?>
        <ol class="info_moje">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['infos']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
        <li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ol>
    <?php }
}?>

<?php if ((isset($_smarty_tpl->tpl_vars['result']->value))) {?>
    <p class="wynik_moje">
    Twoja miesięczna rata wynosi: <span><?php echo $_smarty_tpl->tpl_vars['result']->value;?>
</span>
    </p>
<?php }?>

<?php
}
}
/* {/block 'messages'} */
}
