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

        public function getshareTagsAttribute(){
            foreach (json_decode($this->tags) as $tag){
                $tags[] = '%23'.str_replace(' ','_',$tag);
            }
            echo implode(' ',$tags);
           //return 'https://twitter.com/intent/tweet?text=Hey%2C+check+out+this+cool+site+I+found%3A+www.yourname.com+#Topic+via%40my_twitter_name&url=https%3A%2F%2Fwww.vsrkwealthcreator.com%2Femudhra-limited-ipo-snapshot%2F%3Fheader_preset%3D-1';
        }
}
