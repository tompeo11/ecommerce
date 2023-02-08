<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categlory extends Model{
    use HasFactory;

    protected $table = 'categlory';
    public $primaryKey = "id";
    public $timestamps = false;
    protected $attributes = ['description' => ''];
    protected $fillable = ['name','description'];
}
