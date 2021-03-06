<?php

namespace App;

use App\Http\Controllers\FumettoController;
use Illuminate\Database\Eloquent\Model;

class Fumetto extends Model
{
    protected $table = "fumetto";
    protected $fillable = ["title", "author", "description", "price", "url_comic"];
}
