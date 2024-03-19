<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    public function blogCategory()
    {
        return $this->belongsTo(BlogCategory::class);
    }

    public function blogTags()
    {
        return $this->hasMany(BlogTag::class);
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
}
