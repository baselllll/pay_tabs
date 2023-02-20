<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $fillable = ['label','value'];

    public function category(){
        return $this->belongsTo(Category::class,'category_id');
    }
    public function sub_sub_category(){
        return $this->hasMany(SubSubCategory::class,'sub_category_id');
    }
}
