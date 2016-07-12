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
        <div class="form-group">
            <label for="name">Роль</label>
            <select name="id_role">
                <option value="1">Пользователь</option>
                <option value="2">Модератор</option>
                <option value="3">Администратор</option>
            </select>
        </div>

        <input class="btn btn-default" type="submit" name="submitReg" value="Зарегистрироваться" />
    </form>
</div>
