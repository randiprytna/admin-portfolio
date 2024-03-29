<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogTag extends Model
{
    use HasFactory;

    public function blogTagList()
    {
        return $this->belongsTo(BlogTagList::class);
    }
}
