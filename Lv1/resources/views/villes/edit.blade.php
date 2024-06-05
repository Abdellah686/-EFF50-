<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="text-align: center;">
    <form action="{{ route('villes.update',compact($v->id))}}" method="post">
        @csrf
        @method('PATCH')
        <select name="ville_id">
            @foreach ($villes as $v)
                <option value="{{ $v->id }}">{{ $v->name }}</option>
            @endforeach
        </select>
        <button type="submit">create</button>
    </form>
</body>

</html>