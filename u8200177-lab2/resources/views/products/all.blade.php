<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
@foreach($products as $product)
    <div>
        ID - {{ $product->id }}.
        product_name - {{ $product->product_name }} <br>
        symbol_code - {{ $product->symbol_code }} <br>
        detailed_content - {{ $product->detailed_content}} <br>
        creation_date - {{ $product->creation_date }} <br>
        price - {{ $product->price }} <br>
        image - <img src="{{ $product->image }}"> <br>
        amount - {{ $product->amount }}</div>
@endforeach
<div> {{ $products->links('pagination::simple-bootstrap-5') }} </div>

</body>
</html>
