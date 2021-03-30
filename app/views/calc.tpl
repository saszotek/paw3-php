{extends file="main.tpl"}

{block name=content}
<!-- Nav Bar Start -->
<div class="navbar navbar-expand-lg bg-dark navbar-dark">
    <div class="container-fluid">
        <div class="navbar-brand">
            {$page_title|default:"Tytuł domyślny"}
            <a href="{$conf->action_url}logout" id="wyloguj_moje">Wyloguj</a>
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
                <h2>{$page_header|default:"Header domyślny"}</h2>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Contact Start -->
<div class="section-header text-center" style="margin-top: 90px;">
    <h2>{$form_header|default:"Nagłówek formularza"}</h2>
</div>
<div class="contact" style="margin-bottom: 90px;">
    <div class="container-fluid">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4">
                {block name=messages}
                Domyślna zawartość wiadomości
                {/block}
                </div>
                <div class="col-md-8">
                    <div class="contact-form">
                        <div id="success"></div>
                            <form action="{$conf->action_root}calcCompute" method="post">
                                <div class="control-group">
                                    <input type="text" class="form-control" id="id_x" name="x" placeholder="Kwota" value="{$form->x}" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <input type="text" class="form-control" id="id_y" name="y" placeholder="Lata" value="{$form->y}" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <input type="text" class="form-control" id="id_z" name="z" placeholder="Oprocentowanie" value="{$form->z}" />
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
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/isotope/isotope.pkgd.min.js"></script>
<script src="lib/lightbox/js/lightbox.min.js"></script>
<script src="mail/jqBootstrapValidation.min.js"></script>
<script src="mail/contact.js"></script>
<script src="js/main.js"></script>
{/block}

{block name=messages}
{include file='messages.tpl'}

{if isset($res->result)}
    <p class="wynik_moje">
        Twoja miesięczna rata wynosi: <span>{$res->result}</span>
    </p>
{/if}
{/block}