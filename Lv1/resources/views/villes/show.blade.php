@extends('base')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                Ville Details
            </div>
            <div class="card-body">
                <ul class="list-group">
                    <li class="list-group-item">New Ville: {{ $ville->name }}</li>
                    <!-- You can add more details here if needed -->
                </ul>

                <a href="/villes/{{ $ville->id }}/edit" class="btn btn-primary mt-3">
                    Assign yourself to the ville
                </a>
            </div>
        </div>
    </div>
</div>
@endsection