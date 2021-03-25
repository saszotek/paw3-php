{extends file="main.tpl"}

{block name=content}

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

{/block}

{block name=messages}

{if $msgs->isError()}
    <ol class="errors_moje">
    {foreach $msgs->getErrors() as $err}
    {strip}
        <li>{$err}</li>
    {/strip}
    {/foreach}
    </ol>
{/if}

{if $msgs->isInfo()}
    <ol class="info_moje">
    {foreach $msgs->getInfos() as $inf}
    {strip}
        <li>{$inf}</li>
    {/strip}
    {/foreach}
    </ol>
{/if}

{if isset($res->result)}
    <p class="wynik_moje">
    Twoja miesięczna rata wynosi: <span>{$res->result}</span>
    </p>
{/if}

{/block}