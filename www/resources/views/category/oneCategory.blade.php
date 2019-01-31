<h1>Категоря : {{$category->name}}</h1>
<h3>Статус : {{($status == 1) ? 'активен' : 'не активен'}}</h3>
<p>Товары этой категории</p>
<table border="1px">
    <tr>
        <td>Продукт</td>
        <td>Артикль</td>
    </tr>
    <?php foreach ($product as $row => $value) {?>
    <tr>
        <td>{{$product[$row]->name_product}}</td>
        <td>{{$product[$row]->vendor_code}}</td>
    </tr>
<?php }?>
</table>
<a href="/">на главную</a>