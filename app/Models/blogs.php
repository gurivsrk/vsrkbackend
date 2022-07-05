<?php

namespace App\Models;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class blogs extends Model
{
    use HasFactory,SoftDeletes;

        protected $table = "blog";

        protected $fillable = [
            'blogImage',
            'title',
            'categories',
            'tags',
            'post_status',
            'descritption'
        ];

        public function scopeReverse($query){
            return $query->orderBy('id','desc');
        }
        
        public function scopeEnable($query){
            return $query->where('post_status','enabled');
        }

        public function getBlogDateAttribute(){
            return date('d-M-Y h:i:sa', strtotime($this->created_at));
        }

        public function getslugAttribute(){
            return Str::slug($this->title);
        }

}
