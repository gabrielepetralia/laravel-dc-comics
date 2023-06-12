@extends('layout.main')

@section('title')
  Comics
@endsection

@section('content')
  <div class="home bg-dark">
    <div class="container py-5">
      <h1 class="text-white mb-4">Comics</h1>

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
              <a href="{{ route('comics.show', $comic)}}" class="btn btn-primary">Show</a>
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
