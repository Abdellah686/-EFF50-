<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @if (session('success'))
        <div style="background-color:aqua">{{ session('success') }}</div>
    @endif

   <div>
    @foreach ($villes as $v)
    <ul>
        <li>{{ $v->name }}</li>
    </ul>
@endforeach
   </div>
</body>

</html>
