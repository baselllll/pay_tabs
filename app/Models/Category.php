<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $fillable = ['label','value'];

    public function sub_category(){
        return $this->hasMany(SubCategory::class,'category_id');
    }
}
