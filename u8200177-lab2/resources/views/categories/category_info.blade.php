<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>{{ $category->id }}. {{ $category->category_name }} <br>{{ $category->symbol_code }} <br>{{ $category->creation_date }}<br>{{$category->activity}} <br>{{$category->parent_category }} </div>

</ul>
<br></br>
<p><b>Название:</b> {{ $product->product_name }}</p>
<p><b>Дата создания:</b> {{ $product->creation_date }}</p>
<p><b>Символьный код:</b> {{ $product->symbol_code }}</p>
<p><b>Текст:</b> {{ $product->detailed_content }}</p>
</body>
</html>
