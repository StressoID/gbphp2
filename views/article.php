
<div class="col-md-12">
    <h1><?=$article['name']?></h1>
    <p><?=$article['text']?></p>
</div>
<div class="col-md-12">
    <div class="row">
        <h3>Комментарии</h3>
        <?
        if ($comments) {
            foreach ($comments as $comment) {?>
                <div class="col-md-12 rowBlog">
                    <h4><b><?=$comment['author']?></b></h4>
                    <p><?=$comment['text']?></p>
                </div>
            <?}
        } else {?>
            <p>Нет комментариев</p>
        <?}?>

    </div>
</div>

<div class="col-md-12">
    <form action="?act=comment&id=<?=$article['id']?>" id="editArticle" method="POST" class="form-horizontal">
        <div class="form-group">
            <label for="author">Имя</label>
            <input class="form-control" type="text" name="author" value="" />
        </div>
        <div class="form-group">
            <label for="name">Комментарий</label>
            <textarea class="form-control" rows="12" name="text"></textarea>
        </div>
        <input class="btn btn-default" type="submit" name="submitAdd" value="Добавить" />
    </form>
</div>
