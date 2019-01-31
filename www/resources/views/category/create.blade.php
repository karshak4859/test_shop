<form action="/create" method="post">
    @csrf
    <lable>Название категории</lable>
    <input type="text" name="nameCategory" required><br>
    <lable> Выберите родителя</lable>
    <select name="value">
        <option>нету родителя</option>
        <?php foreach ($allCategory as $row => $value) {?>
        <option>{{$allCategory[$row]->name}}</option>
        <?php }?>
    </select><br>
    <input type="submit" value="создать" name="create">
</form>
<a href="/">на главную</a>
