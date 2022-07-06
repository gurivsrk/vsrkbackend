<?php

namespace App\Models;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
use App\Models\category;

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
            return date('F d, Y', strtotime($this->created_at));
        }

        public function getslugAttribute(){
            return Str::slug($this->title);
        }

        public function getshareTagsAttribute(){
            foreach (json_decode($this->tags) as $tag){
                $tag_name = category::find($tag);
                $tags[] = '%23'.str_replace(' ','_',$tag_name->name);
            }
            echo implode(' ',$tags);
        }

        public function gettagNameAttribute(){
            foreach (json_decode($this->tags) as $t){
                $tag_n = category::find($t);
                $tagName[] = $tag_n->name; 
            }
            return $tagName;
        }

        public function getcategoryNameAttribute(){
            foreach (json_decode($this->categories) as $cat){
                $cat = category::find($cat);
            }
            return $cat;
        }

}       


