@extends('base')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="mb-0">Register Habitant</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('habitants.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="cin">CIN:</label>
                                <input type="number" id="cin" name="cin" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="nom">Name:</label>
                                <input type="text" id="nom" name="nom" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" id="email" name="email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" id="password" name="password" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="password_confirmation">Confirm Password:</label>
                                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="ville_id">Ville:</label>
                                <select id="ville_id" name="ville_id" class="form-control" required>
                                    @foreach ($villes as $ville)
                                        <option value="{{ $ville->id }}">{{ $ville->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="photo">Photo (optional):</label>
                                <input type="file" id="photo" name="photo" class="form-control" accept="image/*">
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-primary">Create</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
