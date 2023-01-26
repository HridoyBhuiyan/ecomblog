<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostModel extends Model
{
    use HasFactory;
    public $table = "blog_post";
    public $primaryKey = "id";
    public $keyType = "int";
    public $incrementing = "true";
    public $timestamps = "true";
}
