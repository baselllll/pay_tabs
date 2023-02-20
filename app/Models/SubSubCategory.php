<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubSubCategory extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $fillable = ['label','value'];

    public function sub_category(){
        return $this->belongsTo(SubCategory::class,'sub_category_id');
    }
}
