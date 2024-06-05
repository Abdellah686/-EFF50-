@extends('base')
@section('content')
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
        <label for="photo">Photo(optional)</label><br>
        <input type="file" id="photo" name="photo" accept="image/*"><br>
        <button type="submit">create</button>
    </form>
@endsection
