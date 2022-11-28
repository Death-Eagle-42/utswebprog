<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Publisher;
use App\Models\Book;
use App\Models\Book_Category;
use Illuminate\Support\Facades\Storage;

class Controllerbaru extends Controller
{
    public function contact(){
        return view('contact');
	}

    public function home(){
        $books = Book::all();
        return view('home', ['books' => $books]);
    }

    public function publisher(){
        $publishers = Publisher::all();
        return view('publisher', ['publishers' => $publishers]);
    }

    public function bookdetail($id){
        $book = Book::findOrFail($id);
        return view('bookdetail',compact('book'));
    }

    public function list($id){
        $category = Category::findOrFail($id);
          return view('category', compact('category'));
    }

        # for adding data via webpage create // manually
    public function createbook(){
		return view('createbook');
	}

    public function createbookcategory(){
		return view('createbookcategory');
	}

    public function createpublisher(){
		return view('createpublisher');
	}

    public function createcategory(){
		return view('createcategory');
	}

    public function storepub(Request $request)
    {
        $file = $request->file(key: 'image');
        $imageName = time().'.'.$file->getClientOriginalExtension();
        Storage::putFileAs('public/images', $file, $imageName);
        $imageName = 'images/'.$imageName;

        $publisher = new Publisher();
        $publisher->name = $request->name;
        $publisher->address = $request->address;
        $publisher->phone = $request->phone;
        $publisher->email = $request->email;
        $publisher->image = $imageName;
        $publisher->save();

        return redirect('/');
    }

    public function storebook(Request $request)
    {
        $file = $request->file(key: 'image');
        $imageName = time().'.'.$file->getClientOriginalExtension();
        Storage::putFileAs('public/images', $file, $imageName);
        $imageName = 'images/'.$imageName;

        $book = new Book();
        $book->publisher_id = $request->publisher_id;
        $book->title = $request->title;
        $book->author = $request->author;
        $book->year = $request->year;
        $book->synopsis = $request->synopsis;
        $book->image = $imageName;
        $book->save();

        return redirect('/');
    }

    public function storecat(Request $request){
         $message = array(
            'name.required' => 'Please Category Name',
        );

            $request->validate([
                'name' => 'required|min:5|max:50',
                ],$message);

        Category::create([
            'name' => $request->name,
        ]);
        return redirect('/');
    }

    public function storebookcat(Request $request){
    $message = array(
        'book_id.required' => 'Please add book id',
        'category_id.required' => 'Please add category id'
    );

        $request->validate([
            'book_id' => 'required',
            'category_id' => 'required'
            ],$message);

    Book_Category::create([
        'book_id' => $request->book_id,
        'category_id' => $request->category_id
    ]);
    return redirect('/');
    }
}
