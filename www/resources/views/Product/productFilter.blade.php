<table border="1px">
    <tr>
        <td>Наименование</td>
        <td>Артикль</td>
    </tr>
    @if($filter != '')
    <?php foreach ($filter as $row => $value) {?>
    <tr>
        <td>{{$filter[$row]->name_product}}</td>
        <td>{{$filter[$row]->vendor_code}}</td>
    </tr>
    <?php }?>
    @endif
</table>

<a href="/product">на главную</a>