<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body style="text-align: center;">
    <form action="{{ route('habitants.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <input type="number" name="cin" placeholder="cin"> <br>
        <input type="text" name="nom" placeholder="nom"> <br>
        <input type="email" name="email" placeholder="email"><br>
        <select name="ville_id">
            @foreach ($villes as $v)
                <option value="{{ $v->id }}">{{ $v->name }}</option>
            @endforeach
        </select>
        <br>
        <label for="photo">Photo</label><br>
        <input type="file" id="photo" name="photo" accept="image/*"><br>
        <button type="submit">create</button>
    </form>
</body>

</html>
