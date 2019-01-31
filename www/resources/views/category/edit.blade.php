<form action="/edit/{{$id}}" method="post">
    @csrf
    <lable>Название категории</lable>
    <input type="text" name="nameCategory" required><br>
    <lable> Выберите родителя</lable>
    <p><input name="dzen" type="radio" value="active" checked>активен</p>
    <p><input name="dzen" type="radio" value="no_active">не активен</p>
    <input type="submit" value="изменить" name="edit">
</form>
<a href="/">на главную</a>