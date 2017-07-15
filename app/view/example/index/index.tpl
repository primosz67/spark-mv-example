{extends file="example/layout.tpl"}


{block name="content" }
    <h2>Congratulation!!</h2>
    <p>You have started <b>"spark mvc"</b> demo</p>


    <h3>Demo example list:</h3>
    <ul>
        {foreach $data as $message}
            <li>{$message}</li>
        {/foreach}
    </ul>
{/block}

