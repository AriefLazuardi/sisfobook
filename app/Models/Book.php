<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Book extends Model
{
    use HasFactory;
    
    public $title;
    public $author;
    public $year;
    public $publisher;

    public function full()
    {
        $data = [
            [
                'title'=>'First Title',
                'author'=>'First Author',
                'year'=>'2023',
                'publisher'=>'First Publisher',
            ],
            [
                'title'=>'Second Title',
                'author'=>'Second Author',
                'year'=>'2023',
                'publisher'=>'Second Publisher',
            ],
            [
                'title'=>'Third Title',
                'author'=>'Third Author',
                'year'=>'2023',
                'publisher'=>'Third Publisher',
            ],
            [
                'title'=>'Fouth Title',
                'author'=>'Fouth Author',
                'year'=>'2023',
                'publisher'=>'Fouth Publisher',
            ],
            [
                'title'=>'Fifth Title',
                'author'=>'Fifth Author',
                'year'=>'2023',
                'publisher'=>'Fifth Publisher',
            ],
        ];
        return $data;

    }

}
