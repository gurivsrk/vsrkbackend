<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class wp_migration extends Model
{
    use HasFactory;

    protected $table = "wp_migratation";

    protected $fillable = [
        'postId',
        'tagName',
        'catName',
        'title',
        'mediaId',
        'mediaName',
        'mediaLocation',
        'description',
        'categories',
        'author',
        'tags'
    ];

}
