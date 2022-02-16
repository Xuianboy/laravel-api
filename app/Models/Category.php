<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['id', 'name'];

    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];

    public function product()
    {
        return $this->hasMany(Product::class);
    }
}
