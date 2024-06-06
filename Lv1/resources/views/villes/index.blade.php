@extends('base');
@section('content')
    @if (session('success'))
        <div style="background-color:aqua">{{ session('success') }}</div>
    @endif
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">VILLE</th>
                <th scope="col">HABITANTS</th>
                <th scope="col">ACTIONS</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($villes as $v)
                <tr>
                    <th scope="row">{{ $v->name }}</th>
                    <td>
                        
                            @foreach ($v->habitants as $habitant)
                                <h6>{{ $habitant->nom }}</h6>
                            @endforeach
                    </td>
                    <td>
                        <a href="/villes/{{ $v->id }}/edit" class="btn btn-info" style="text-decoration: none;">
                            Edit Ville
                        </a>
                    </td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
