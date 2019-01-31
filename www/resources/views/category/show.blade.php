<form method="post" action="/">
    @csrf
    <input type="submit" value="создать категорию" name="create">
</form>
<a href="/product">перейти в продукты</a>
<table border="1px">
    <tr>
        <td>Наименование</td>
        <td>Просмотр</td>
        <td>Редактирование</td>
        <td>Удаление</td>
    </tr>
    <?php foreach ($allCategory as $row => $value) {?>
    <tr>
        <td>{{$allCategory[$row]->name}}</td>
        <td align="center">
            <a href="/show/{{$allCategory[$row]->id}}" >O</a>
        </td>
        <td align="center">
            <a href="/edit/{{$allCategory[$row]->id}}" >E</a>
        </td>
        <td align="center">
            <a href="/delete/{{$allCategory[$row]->id}}" >D</a>
        </td>
    </tr>
    <?php }?>
</table>
