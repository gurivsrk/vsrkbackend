<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Casts\Attribute;

class forms extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'form';

    protected $primaryKey = 'id';

    protected $fillable = [
        'form_name',
        'form',
        'form_link',
        'category_id'
    ];

    

    public function categoryName(){

        return $this->belongsTo('App\Models\category','category_id','id');
    }

    public function getformNameAttribute($value){
        return  strtoupper($value);
        
    }
   
}
//getformNameAttribute
