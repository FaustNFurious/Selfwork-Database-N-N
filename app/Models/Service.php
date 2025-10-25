<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Type;



class Service extends Model
{
    use HasFactory;

    protected $fillable = ['brand', 'name', 'usage', 'price', 'img', 'user_id'];


    public function user() {
        return $this->belongsTo(User::class);
    }


    public function types() {
        return $this->belongsToMany(Type::class);
    }


}
