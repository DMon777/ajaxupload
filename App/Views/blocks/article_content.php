<div id="main_content">


    <? if($article): ?>

            <h3> <?=$article['title']?> </h3>
            <p> <?=$article['article']?> </p>

    <? else: ?>

        <p>Такой статьи нет!!!</p>

    <? endif; ?>

</div> <!-- end div main_contnet -->
<div class="clear"></div>
</div><!-- end div wrapper -->