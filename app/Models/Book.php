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
        "name",
        "title",
        "ISBN",
        "pub_year",
        "available"
    ];

    public function Author(){
        return $this->belongsTo(Author::class);
    }
    public function scopeSearch($query,$search){
        if($search && $search != ""){
            return $query->where("name","like","%$search%");
        }
        return $query;
    }
}
