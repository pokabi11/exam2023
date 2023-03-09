<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table ="books";

    protected $fillable=[
        "authorid",
        "title",
        "ISBN",
        "pub_year",
        "available"
    ];

    public function Author(){
        return $this->hasOne(Author::class);
    }
}
