@extends('layout.main')

@section('title')
  {{ $comic->title }}
@endsection

@section('content')
  <div class="home bg-dark">
    <div class="container py-5">
      <h1 class="text-white mb-4">{{ $comic->title }}</h1>

      <div class="row">
        <div class="col-3">
          <img class="img-fluid" src="{{ $comic->thumb }}" onerror="this.src = 'https://westsiderc.org/wp-content/uploads/2019/08/Image-Not-Available.png'" alt="Poster {{ $comic->title }}">
        </div>

        <div class="col-9">
          <table class="table table-dark mb-4">
            <tbody>
              <tr>
                <td class="fw-bold w-25">Series :</td>
                <td>{{ $comic->series }}</td>
              </tr>
              <tr>
                <td class="fw-bold">Type :</td>
                <td>{{ $comic->type }}</td>
              </tr>
              <tr>
                <td class="fw-bold">Sale Date :</td>
                <td>{{ $comic->sale_date }}</td>
              </tr>
              <tr>
                <td class="fw-bold">Price :</td>
                <td>{{ $comic->price }}</td>
              </tr>
              <tr>
                <td class="fw-bold">Description :</td>
                <td>{{ $comic->description }}</td>
              </tr>
              <tr>
                <td class="fw-bold">Artists :</td>
                <td>{{ $comic->artists }}</td>
              </tr>
              <tr>
                <td class="fw-bold">Writers :</td>
                <td>{{ $comic->writers }}</td>
              </tr>
            </tbody>
          </table>

          <div class="d-flex justify-content-between">
            <a href="{{ route('comics.index')}}" title="Go back" class="btn btn-primary text-white"><i class="fa-solid fa-left-long"></i></a>

            <div>
              <a href="{{ route('comics.edit', $comic) }}" title="Edit" class="btn btn-warning text-white"><i class="fa-solid fa-pencil"></i></a>
              @include('partials.comic_delete')
            </div>
          </div>

        </div>

      </div>

    </div>
  </div>
@endsection
