<?php
/* Smarty version 3.1.39, created on 2021-03-16 12:15:48
  from 'C:\xampp\htdocs\test\php01\app\calc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60509364729966_11971736',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df6b61dbcc87dded422bc3d7b952ebe17004b1e5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\test\\php01\\app\\calc.tpl',
      1 => 1615893346,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60509364729966_11971736 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_105565021660509364717c42_33628574', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_918948166050936471cd67_43518758', 'messages');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../template/main.tpl");
}
/* {block 'content'} */
class Block_105565021660509364717c42_33628574 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_105565021660509364717c42_33628574',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/calc.php" method="post">
    <div class="control-group">
        <input type="text" class="form-control" id="id_x" name="x" placeholder="Kwota" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->x;?>
" />
        <p class="help-block text-danger"></p>
    </div>
    <div class="control-group">
        <input type="text" class="form-control" id="id_y" name="y" placeholder="Lata" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->y;?>
" />
        <p class="help-block text-danger"></p>
    </div>
    <div class="control-group">
        <input type="text" class="form-control" id="id_z" name="z" placeholder="Oprocentowanie" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->z;?>
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
class Block_918948166050936471cd67_43518758 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'messages' => 
  array (
    0 => 'Block_918948166050936471cd67_43518758',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
    <ol class="errors_moje">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
$_smarty_tpl->tpl_vars['err']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->do_else = false;
?>
    <li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ol>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
    <ol class="info_moje">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getInfos(), 'inf');
$_smarty_tpl->tpl_vars['inf']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
$_smarty_tpl->tpl_vars['inf']->do_else = false;
?>
    <li><?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
</li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ol>
<?php }?>

<?php if ((isset($_smarty_tpl->tpl_vars['res']->value->result))) {?>
    <p class="wynik_moje">
    Twoja miesięczna rata wynosi: <span><?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>
</span>
    </p>
<?php }?>

<?php
}
}
/* {/block 'messages'} */
}
