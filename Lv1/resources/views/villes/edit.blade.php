@extends('base')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Update Ville</div>

                <div class="card-body">
                    <form action="{{ route('villes.update', $ville->id) }}" method="post">
                        @csrf
                        @method('PATCH')

                        <div class="form-group">
                            <label for="ville_id">Select Ville</label>
                            <select name="ville_id" class="form-control @error('ville_id') is-invalid @enderror">
                                @foreach ($villes as $v)
                                    <option value="{{ $v->id }}" {{ $v->id == $ville->id ? 'selected' : '' }}>
                                        {{ $v->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('ville_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary mt-3">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
