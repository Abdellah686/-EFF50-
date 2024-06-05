@extends('base')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Create New Ville</div>

            <div class="card-body">
                <form action="{{ route('villes.store') }}" method="post">
                    @csrf
                    @method('POST')
                    
                    <div class="form-group">
                        <label for="name">New Ville</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Enter new ville" value="{{ old('name') }}">
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <button type="submit" class="btn btn-primary mt-3">Create</button>
                </form>
            </div>
        </div>
    </div>

@endsection
