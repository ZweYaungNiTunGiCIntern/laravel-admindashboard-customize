<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Model\Item;
class Category extends Model
{
    use HasFactory;
    public function item(){
        return $this->hasMany(Item::class);
    }
}
