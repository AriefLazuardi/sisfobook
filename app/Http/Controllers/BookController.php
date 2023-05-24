<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;
use Exception;

class BookController extends Controller
{
    public function index()
    {
        $model = new Book();
        try {
            $book_data = $model->fall();
        } catch (Exception $e) {
            $message = $e->getMessage();
            var_dump('Terjadi Kesalahan: '. $message);
            exit;
        }
        return view('book/index',['book_data'=>$book_data]);
    
    }

    public function show($id, $status)
    {
        $model = new Book();
        $book_data = $model->full();
        $searched_book = $book_data[$id];
        return view('book/show', ['searched_book' => $searched_book, 'status'=> $status]);
    
    }
}
