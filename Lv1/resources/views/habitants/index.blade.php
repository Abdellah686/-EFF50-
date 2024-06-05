@extends('base')

@section('content')
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">CIN</th>
                <th scope="col">NOM</th>
                <th scope="col">IMAGE</th>
                <th scope="col">VILLE</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($habitants as $h)
                <tr>
                    <th scope="row">{{ $h->cin }}</th>
                    <td>{{ $h->nom }}</td>
                    <td>
                        @if ($h->photo)
                            <img src="{{ $h->photo }}" alt="{{ $h->nom }}" class="img-fluid rounded-circle">
                        @endif
                    </td>
                    <td>{{ $h->ville->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
    {{ $habitants->links() }} <!-- Pagination links -->
@endsection
