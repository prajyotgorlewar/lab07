<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Using Layouts in Blade</title>
</head>
<body>
    <div class="container">
        @include('layouts.header')
        <h1>Articles Page</h1>
        @include('layouts.footer')
    </div>
</body>
</html>
