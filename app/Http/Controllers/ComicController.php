<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use App\Http\Requests\ComicRequest;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      $sort = $request->get('sort') ?? 'id';

      $comics = Comic::orderBy($sort, 'desc')->paginate(5);

      return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ComicRequest $request)
    {
      $form_data = $request->all();

      $new_comic = new Comic();

      $form_data['slug'] = Comic::generateSlug($form_data['title']);

      // if(@getimagesize($form_data['thumb'])) {
      //   $form_data['thumb'] = 'https://westsiderc.org/wp-content/uploads/2019/08/Image-Not-Available.png';
      // }

      $new_comic->fill($form_data);

      $new_comic->save();

      return redirect()->route('comics.show', $new_comic);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(ComicRequest $request, Comic $comic)
    {
      $form_data = $request->all();

      if ($comic->title !== $form_data['title']) {
        $form_data['slug']  = Comic::generateSlug($form_data['title']);
      } else {
        $form_data['slug']  = $comic->slug;
      }

      $comic->update($form_data);

      return redirect()->route('comics.show', compact('comic'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
      $comic->delete();
      return redirect()->route('comics.index')->with('deleted', "The comic '$comic->title' has been successfully deleted");
    }
}
