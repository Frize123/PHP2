<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div>{{ $product->id }}. {{ $product->product_name }} <br>{{ $product->symbol_code }} <br>{{$product->detailed_content}} <br>{{$product->creation_date }} <br>{{ $product->price }} <br><img src="{{ $product->image }}"> <br>{{ $product->amount }}</div>

</body>
</html>
