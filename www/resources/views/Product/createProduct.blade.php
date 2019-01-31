<form action="/createProduct" method="post">
    @csrf
    <lable>Название продукта</lable><br>
    <input type="text" name="nameProduct" required><br>
    <lable>Артикуль</lable><br>
    <input type="text" name="vendor_code" required><br>
    <lable>Описание</lable><br>
    <textarea name="description"></textarea><br>
    <lable> Выберите категорию</lable><br>
    <select name="value"><br>
        <option>нету категории</option>
        <?php foreach ($allCategory as $row => $value) {?>
        <option>{{$allCategory[$row]->name}}</option>
        <?php }?>
    </select><br>
    <input type="submit" value="создать" name="create">
</form>
<a href="/product">на главную</a>
