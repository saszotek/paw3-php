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