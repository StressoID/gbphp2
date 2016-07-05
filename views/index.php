<div class="row">
    <?while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {?>
        <div class="col-md-12 rowBlog">
            <h2><a href="?act=article&id=<?=$line['id']?>"><?=trim($line['name'])?></a></h2>
            <p><?=trim($line['text'])?></p>
        </div>
    <?}?>
</div>