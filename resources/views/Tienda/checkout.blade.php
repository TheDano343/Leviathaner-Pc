<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/checkout.create" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">


    </form>
</body>
</html>