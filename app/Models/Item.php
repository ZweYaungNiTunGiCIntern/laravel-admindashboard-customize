<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Model\Category;
class Item extends Model
{
    use HasFactory;
    public function category(){
        return $this->belongsto(Category::class);
    }
}
