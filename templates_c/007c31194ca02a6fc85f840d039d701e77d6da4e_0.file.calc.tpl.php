<?php
/* Smarty version 3.1.39, created on 2021-03-30 12:45:58
  from 'C:\xampp\htdocs\test\php01\app\views\calc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6063016667f943_17490362',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '007c31194ca02a6fc85f840d039d701e77d6da4e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\test\\php01\\app\\views\\calc.tpl',
      1 => 1617101112,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_6063016667f943_17490362 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10956093716063016665aa85_18961280', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_140219494460630166672941_38602694', 'messages');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'messages'} */
class Block_6900872736063016666b467_17834963 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                Domyślna zawartość wiadomości
                <?php
}
}
/* {/block 'messages'} */
/* {block 'content'} */
class Block_10956093716063016665aa85_18961280 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_10956093716063016665aa85_18961280',
  ),
  'messages' => 
  array (
    0 => 'Block_6900872736063016666b467_17834963',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<!-- Nav Bar Start -->
<div class="navbar navbar-expand-lg bg-dark navbar-dark">
    <div class="container-fluid">
        <div class="navbar-brand">
            <?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? "Tytuł domyślny" : $tmp);?>

            <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout" id="wyloguj_moje">Wyloguj</a>
        </div>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</div>
<!-- Nav Bar End -->

<!-- Page Header Start -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_header']->value)===null||$tmp==='' ? "Header domyślny" : $tmp);?>
</h2>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Contact Start -->
<div class="section-header text-center" style="margin-top: 90px;">
    <h2><?php echo (($tmp = @$_smarty_tpl->tpl_vars['form_header']->value)===null||$tmp==='' ? "Nagłówek formularza" : $tmp);?>
</h2>
</div>
<div class="contact" style="margin-bottom: 90px;">
    <div class="container-fluid">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6900872736063016666b467_17834963', 'messages', $this->tplIndex);
?>

                </div>
                <div class="col-md-8">
                    <div class="contact-form">
                        <div id="success"></div>
                            <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcCompute" method="post">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Contact End -->

<!-- Footer Start -->
<div class="footer">
    <div class="container copyright">
        <div class="row">
            <div class="col-md-6">
                <p>&copy; <a href="#">Daniel Zieliński</a>, All Right Reserved.</p>
            </div>
            <div class="col-md-6">
                <p>Designed By <a href="https://htmlcodex.com">HTML Codex</a></p>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<!-- JavaScript Libraries -->
<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.4.1.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="lib/easing/easing.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="lib/owlcarousel/owl.carousel.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="lib/isotope/isotope.pkgd.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="lib/lightbox/js/lightbox.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="mail/jqBootstrapValidation.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="mail/contact.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/main.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'content'} */
/* {block 'messages'} */
class Block_140219494460630166672941_38602694 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'messages' => 
  array (
    0 => 'Block_140219494460630166672941_38602694',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if ((isset($_smarty_tpl->tpl_vars['res']->value->result))) {?>
    <p class="wynik_moje">
        Twoja miesięczna rata wynosi: <span><?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>
</span>
    </p>
<?php }
}
}
/* {/block 'messages'} */
}
