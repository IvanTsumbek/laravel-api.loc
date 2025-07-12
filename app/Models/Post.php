<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
   protected $fillable = ['title', 'content', 'category_id'];

   // protected $hidden = ['updated_at'];

   public function category()
   {
      return $this->belongsTo(Category::class);
   }
}
