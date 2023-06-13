@extends('layout.main')

@section('title')
  Comics
@endsection

@section('content')
  <div class="home bg-dark">
    <div class="container py-5">

      <div class="row mb-3">
        <div class="col d-flex align-items-center">
          <h1 class="text-white me-4">Comics</h1>
          <form action="{{ route("comics.index") }}">
            <div class="d-flex">
              <button type="submit" class="btn btn-primary d-inline-block me-3 text-nowrap">Order by :</button>

              <select class="form-select d-inline-block" name="sort" aria-label="Default select example">
                <option value="id" selected>ID</option>
                <option value="title">Title</option>
                <option value="series">Series</option>
                <option value="type">Type</option>
                <option value="sale_date">Sale Date</option>
                <option value="price">Price</option>
              </select>
            </div>
          </form>
        </div>

        <div class="col-auto">
          <a href="{{ route('comics.create')}}" title="Add new Comic" class="btn btn-success"><i class="fa-solid fa-plus"></i></a>
        </div>
      </div>

      @if (session('deleted'))
        <div class="alert alert-success" role="alert">
            {{ session('deleted') }}
        </div>
      @endif

      <table class="table table-dark mb-4">
        <thead>
          <tr>
            <th scope="col">#ID</th>
            <th scope="col">Title</th>
            <th scope="col">Series</th>
            <th scope="col">Type</th>
            <th scope="col">Sale Date</th>
            <th scope="col">Price</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>

          @foreach ($comics as $comic)
          <tr>
            <th scope="row">{{ $comic->id }}</th>
            <td>{{ $comic->title }}</td>
            <td>{{ $comic->series }}</td>
            <td>{{ $comic->type }}</td>
            <td>{{ $comic->sale_date }}</td>
            <td>{{ $comic->price }}</td>
            <td>
              <a href="{{ route('comics.show', $comic) }}" title="Show" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a>
              <a href="{{ route('comics.edit', $comic) }}" title="Edit" class="btn btn-warning text-white"><i class="fa-solid fa-pencil"></i></a>
              @include('partials.comic_delete')
            </td>
          </tr>
          @endforeach

        </tbody>
      </table>

      <div>
        {{ $comics->links() }}
      </div>

    </div>
  </div>
@endsection
