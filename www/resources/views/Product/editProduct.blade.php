<form action="/editProduct/{{$id}}" method="post">
    @csrf
    <lable>Название продукта</lable><br>
    <input type="text" name="nameProduct" required><br>
    <lable>Артикуль</lable><br>
    <input type="text" name="vendor_code" required><br>
    <lable>Описание</lable><br>
    <textarea name="description"></textarea><br>
    <lable>Новизна товара</lable>
    <p><input name="new" type="radio" value="new" checked>Новый</p>
    <p><input name="new" type="radio" value="no_new">Не новый</p>
    <lable>Популярность товара</lable>
    <p><input name="pop" type="radio" value="pop" >популярный</p>
    <p><input name="pop" type="radio" value="no_pop" checked>не популярный</p>
    <input type="submit" value="обновить" name="edit">
</form>
<a href="/product">на главную</a>
