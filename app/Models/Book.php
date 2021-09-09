<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Book extends Model
{
    use HasFactory;
    use Sortable;

    protected $guarded = [
        'id',
    ];

    public $sortable = [
        'id',
        'title',
        'price',
        'author_id',
        'category_id',
        'created_at',
        'update_at'
    ];

    public static $rules = [
        'title' => 'required',
        'price' => 'required|integer|min:0',
        'author_id' => 'required|exists:authors,id',
        'category_id' => 'required|exists:categories,id'
    ];

    public function author() {
        return $this->belongsTo('App\Models\Author');
    }

    public function category() {
        return $this->belongsTo('App\Models\Category', 'category_id');
    }
}
