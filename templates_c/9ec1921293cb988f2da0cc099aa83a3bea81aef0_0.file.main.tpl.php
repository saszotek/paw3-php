<?php
/* Smarty version 3.1.39, created on 2021-03-13 14:17:32
  from 'C:\xampp\htdocs\test\php01\template\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_604cbb6c3ed685_86896644',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ec1921293cb988f2da0cc099aa83a3bea81aef0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\test\\php01\\template\\main.tpl',
      1 => 1615641434,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_604cbb6c3ed685_86896644 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Kalkulator kredytowy</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Nav Bar Start -->
    <div class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container-fluid">
            <div class="navbar-brand">
                <?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? "Tytuł domyślny" : $tmp);?>

                <a href="<?php echo $_smarty_tpl->tpl_vars['app_root']->value;?>
/app/security/logout.php" id="wyloguj_moje">Wyloguj</a>
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1190803454604cbb6c3ec3f1_43321113', 'messages');
?>

                    </div>
                    <div class="col-md-8">
                        <div class="contact-form">
                            <div id="success"></div>
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_476292121604cbb6c3ecd06_66306039', 'content');
?>

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

    <!-- Contact Javascript File -->
    <?php echo '<script'; ?>
 src="mail/jqBootstrapValidation.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="mail/contact.js"><?php echo '</script'; ?>
>

    <!-- Template Javascript -->
    <?php echo '<script'; ?>
 src="js/main.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
/* {block 'messages'} */
class Block_1190803454604cbb6c3ec3f1_43321113 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'messages' => 
  array (
    0 => 'Block_1190803454604cbb6c3ec3f1_43321113',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    Domyślna zawartość wiadomości
                    <?php
}
}
/* {/block 'messages'} */
/* {block 'content'} */
class Block_476292121604cbb6c3ecd06_66306039 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_476292121604cbb6c3ecd06_66306039',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            Domyślna zawartość strony
                                                        <?php
}
}
/* {/block 'content'} */
}
