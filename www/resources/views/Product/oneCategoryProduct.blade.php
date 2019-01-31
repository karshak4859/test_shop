<h1>Продукт : {{$product->name_product}}</h1>
<p>Артикул : {{$product->vendor_code}}</p>
<p>Категория : {{$product->category}}</p>

<p>{{($product->new_flag == 1) ? ' Новый товар' : 'Старый товар'}}</p>
<p>{{($product->popular_flag == 1) ? ' Пользуется популярностью' : 'Не пользуется популярностью'}}</p>

<p>Описание : {{$product->description}}</p>

<a href="/product">на главную</a>
