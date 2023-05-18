<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@foreach($categories as $category)
    <div>{{ $category->id }}. {{ $category->category_name }} <br>{{ $category->symbol_code }} <br>{{ $category->creation_date }}<br>{{$category->activity}} <br>{{$category->parent_category }} </div>
@endforeach
<div> {{ $categories->links() }} </div>
</body>
</html>
