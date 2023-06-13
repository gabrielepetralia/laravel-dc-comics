@extends('layout.main')

@section('title')
  Edit | {{ $comic->title }}
@endsection

@section('content')
  <div class="home bg-dark">
    <div class="container py-5">

      <h1 class="text-white mb-3">Edit </h1>

      @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
      @endif

      <form action="{{ route('comics.update', $comic) }}" method="POST" class="text-white fw-semibold">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label @error('title') is-invalid @enderror">Title <span class="text-danger">*</span></label>
            <input id="title" class="form-control" name="title" placeholder="Title" type="text" value="{{ old('title', $comic->title) }}">

            @error('title')
                <p class="text-danger mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-3">
            <label for="series" class="form-label @error('series') is-invalid @enderror">Series <span class="text-danger">*</span></label>
            <input id="series" class="form-control" name="series" placeholder="Series" type="text" value="{{ old('series', $comic->series) }}">

            @error('series')
                <p class="text-danger mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-3">
            <label for="type" class="form-label @error('type') is-invalid @enderror">Type <span class="text-danger">*</span></label>
            <input id="type" class="form-control" name="type" placeholder="Type" type="text" value="{{ old('type', $comic->type) }}">

            @error('type')
                <p class="text-danger mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-3">
            <label for="sale_date" class="form-label @error('sale_date') is-invalid @enderror">Sale Date <span class="text-danger">*</span></label>
            <input id="sale_date" class="form-control" name="sale_date" placeholder="Sale Date" type="text" value="{{ old('sale_date', $comic->sale_date) }}">

            @error('sale_date')
                <p class="text-danger mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-3">
            <label for="price" class="form-label @error('price') is-invalid @enderror">Price <span class="text-danger">*</span></label>
            <input id="price" class="form-control" name="price" placeholder="Price" type="text" value="{{ old('price', $comic->price) }}">

            @error('price')
                <p class="text-danger mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-3">
            <label for="thumb" class="form-label">Thumb</label>
            <input id="thumb" class="form-control" name="thumb" placeholder="Thumb" type="text" value="{{ old('thumb', $comic->thumb) }}">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control"  name="description" id="description" cols="30" rows="10" placeholder="Description">{{ old('description', $comic->description) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="artists" class="form-label">Artists</label>
            <input id="artists" class="form-control" name="artists" placeholder="Artists" type="text" value="{{ old('artists', $comic->artists) }}">
        </div>

        <div class="mb-3">
            <label for="writers" class="form-label">Writers</label>
            <input id="writers" class="form-control" name="writers" placeholder="Writers" type="text" value="{{ old('writers', $comic->writers) }}">
        </div>

        <div class="d-flex justify-content-between">
          <div>
            <a href="{{ route('comics.index')}}" title="Go back" class="btn btn-primary text-white"><i class="fa-solid fa-left-long"></i></a>
          </div>

          <button type="submit" class="btn btn-warning text-white mt-2">Edit</button>
        </div>

      </form>

    </div>
  </div>
@endsection
