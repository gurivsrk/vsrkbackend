<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class blogs extends Model
{
    use HasFactory,SoftDeletes;

        protected $table = "blog";

        protected $primaryKey = "id";

        protected $fillable = [
            'blogImage',
            'title',
            'categories',
            'tags',
            'post_status',
            'descritption'
        ];

}
