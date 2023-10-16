<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


// php artisan make:model Post
// must follow singular naming convention
// then laravel know to which table it should be connected
class Post extends Model
{
    use HasFactory;
    
    // implementing soft delete
    use SoftDeletes;

    // You can redefine to what table model belongs example
    // protected $table = 'posts';

    // fillable - for mass assignments
    protected $fillable = [
        'title',
        // 'status',
        'description',
        // 'published',
        'category_id',
        'image'
    ];

    // guarded  - if empty - you can do mass assignment on everything
    // protected $guarded = [
    // 'title'
    // ];
}