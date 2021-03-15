{extends file="../template/main.tpl"}

{block name=content}

<form action="{$app_url}/app/calc.php" method="post">
    <div class="control-group">
        <input type="text" class="form-control" id="id_x" name="x" placeholder="Kwota" value="{$x}" />
        <p class="help-block text-danger"></p>
    </div>
    <div class="control-group">
        <input type="text" class="form-control" id="id_y" name="y" placeholder="Lata" value="{$yHelp}" />
        <p class="help-block text-danger"></p>
    </div>
    <div class="control-group">
        <input type="text" class="form-control" id="id_z" name="z" placeholder="Oprocentowanie" value="{$zHelp}" />
        <p class="help-block text-danger"></p>
    </div>
    <div>
        <button class="btn" type="submit">Oblicz</button>
    </div>
</form>

{/block}

{block name=messages}

{if isset($messages)}
    {if count($messages) > 0}
        <ol class="errors_moje">
        {foreach $messages as $msg}
        {strip}
            <li>{$msg}</li>
        {/strip}
        {/foreach}
        </ol>
    {/if}
{/if}

{if isset($infos)}
    {if count($infos) > 0}
        <ol class="info_moje">
        {foreach $infos as $msg}
        {strip}
            <li>{$msg}</li>
        {/strip}
        {/foreach}
        </ol>
    {/if}
{/if}

{if isset($result)}
    <p class="wynik_moje">
    Twoja miesięczna rata wynosi: <span>{$result}</span>
    </p>
{/if}

{/block}