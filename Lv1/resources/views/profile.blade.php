@extends('base')
@section('content')
    <img src="{{ asset($habitant->photo) }}" class="rounded-circle" width="50%" alt="Photo">
    <h1>Welcome, {{ $habitant->nom }}</h1>
    <p>Email: {{ $habitant->email }}</p>
    <p>CIN: {{ $habitant->cin }}</p>
    <p>Ville: {{ $habitant->ville->name }}</p>

    <form method="POST" action="/logout">
        @csrf
        <button type="submit">Logout</button>
    </form>
@endsection
