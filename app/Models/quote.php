<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\tag;

class quote extends Model
{
    use HasFactory;

    public function Tags(){
        return $this->belongsToMany(tag::class);
    }
}
