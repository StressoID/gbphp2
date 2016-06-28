
<div class="col-md-12">
    <form action="edit.php?id=<?=$article['id']?>" id="editArticle" method="POST" class="form-horizontal">
        <div class="form-group">
            <label for="name">Название</label>
            <input type="text" class="form-control" name="name" value="<?=trim($article['name'])?>">
        </div>
        <div class="form-group">
            <label for="name">Текст</label>
            <textarea class="form-control" rows="12" name="text"><?=trim($article['text'])?></textarea>
        </div>
        <input name="submitArticle" class="btn btn-default" type="submit" value="Обновить">
    </form>
</div>
