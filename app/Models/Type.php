<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Service;



class Type extends Model
{
    use HasFactory;

    protected $fillable = ['name'];


    public function services() {
        return $this->belongsToMany(Service::class);
    }


    
}
