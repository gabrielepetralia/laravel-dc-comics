<form
  class="d-inline-block"
  action="{{ route('comics.destroy', $comic) }}"
  method="POST"
  onsubmit="return confirm('Are you sure to delete the comic :  {{ $comic->title }} ?')"
>
    @csrf
    @method('DELETE')

    <button type="submit" class="btn btn-danger" title="Delete"><i class="fa-solid fa-trash"></i></button>
</form>
