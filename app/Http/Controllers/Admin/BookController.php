<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
Use App\Publisher;
use App\Book;
use App\Role;
use Illuminate\Support\Facades\Auth;



class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $User)
    { 
        if(Auth::check() && Auth::user()->isAdmin() or Auth::user()->isModerator())
        {   
            $books = Book::all();
            return view('admin.book.index', compact('books'));
        } else {
            $books = Book::where('user_id',Auth::user()->id)->get();
            return view('admin.book.index', compact('books'));
            }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if ($request->User()->isAdmin('admin')) {
           return view('admin.book.create');
        } 
          elseif ($request->User()->isPublisher('publisher')) {
             return view('admin.book.create');
        } else {
           return redirect('/');
          }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'description'=> 'required',
            'category' => 'required',
            'language' => 'required',
            'author_name' => 'required',
            'weight'  => 'required',
            'no_of_pages' => 'required',
            'price'  => 'required',
            'upload_title_page'  => 'required',
            'upload_softcopy'  => 'required',
            'active' => 'required'
        ]);

          $publish =  $request->only(['description', 'category', 'language','author_name','weight','no_of_pages','price', 'upload_title_page','upload_softcopy', 'active']);
         // dd($data);
        $publish['user_id']= auth()->user()->id;
        Book::create($publish);

           return redirect()->route('book.index');
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Book::find($id);
        return view('admin.book.edit', compact('id'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
         $book = Book::find($id); 
         $book->update($request->all());
        return redirect()->route('book.index');
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
       return redirect()->route('book.index');
    }
}
