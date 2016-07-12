status <?=($online) ? 'online' : '' ?>
<div class="col-md-12">
    <form method="post"  class="form-horizontal">
        <div class="form-group">
            <label for="name">Логин</label>
            <input class="form-control" type="text" name="login" value="" />
        </div>
        <div class="form-group">
            <label for="name">Пароль</label>
            <input class="form-control" name="password"  type="password">
        </div>
        <input class="btn btn-default" type="submit" name="submitLogin" value="Войти" />
    </form>
</div>
