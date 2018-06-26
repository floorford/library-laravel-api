<?php

namespace App\Http\Controllers;

// make sure you add this near the top, undereath the namespace declaration
use App\Book;

use App\Http\Requests\BookRequest;

class Books extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return Book::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BookRequest $request)
    {
      // get post request data for title and article
      $data = $request->only(["title", "author", "pages", "published", "rating", "IBSN"]);

      // create article with data and store in DB
      $book = Book::create($data);

      // return the article along with a 201 status code
      return response($book, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BookRequest $request, $id)
    {
      // find the current book
      $book = Book::find($id);

      // get the request data
      $data = $request->only(["title", "book"]);

      // update the book
      $book->fill($data)->save();

      // return the updated version
      return $book;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $book = Book::find($id);
      $book->delete();

      // use a 204 code as there is no content in the response
      return response(null, 204);
    }
}
