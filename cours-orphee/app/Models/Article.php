<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = ['title', 'description', 'date'];
    protected $guarded = ['id'];
    protected $casts = [
        'date' => 'datetime',
        'is_active' => 'boolean',
        'price' => 'decimal:2',
    ];
    protected $hidden = ['created_at', 'updated_at'];
    protected $visible = ['title', 'description', 'date'];
}
