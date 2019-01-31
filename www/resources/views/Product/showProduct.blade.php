<form method="post" action="/product">
    @csrf
    <input type="submit" value="создать продукт" name="create">
</form>

<form action="/productFilter" method="post">
    @csrf
    <p><b>Фильтры</b></p>
    <input type="checkbox" name="new_flag" value="new">Новыйе товары<Br>
    <input type="checkbox" name="popular_flag" value="pop">Популярные товары<Br>
    <input type="submit" value="Фильтровать" name="filter">
</form>


<form action="/categoryFilter" method="post">
    @csrf
    <p><b>Категории</b></p>
    <?php foreach ($allCategory as $row => $value) {?>
    <p><input name="category" type="radio" value="{{$allCategory[$row]->name}}" checked>{{$allCategory[$row]->name}}</p>
    <?php }?>
    <input type="submit" value="Фильтровать" name="filterCat">
</form>
<a href="/">перейти в категории</a>
<table border="1px">
    <tr>
        <td>Наименование</td>
        <td>Просмотр</td>
        <td>Редактирование</td>
        <td>Удаление</td>
    </tr>
    <?php foreach ($allProduct as $row => $value) {?>
    <tr>
        <td>{{$allProduct[$row]->name_product}}</td>
        <td align="center">
            <a href="/showProduct/{{$allProduct[$row]->id}}">O</a>
        </td>
        <td align="center">
            <a href="/editProduct/{{$allProduct[$row]->id}}">E</a>
        </td>
        <td align="center">
            <a href="/deleteProduct/{{$allProduct[$row]->id}}">D</a>
        </td>

    </tr>
    <?php }?>
</table>
<a href="/product">на главную</a>