<?require_once 'header.php';?>
<div class="row">
    <?while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {?>
        <div class="col-md-12 rowBlog">
            <h2><a href="article.php?id=<?=$line['id']?>"><?=trim($line['name'])?></a></h2>
            <p><?=trim($line['text'])?></p>
        </div>
    <?}?>
</div>
<?require_once 'footer.php';?>