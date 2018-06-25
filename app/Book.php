<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
  // Only allow the title and article field to get updated via mass assignment
  protected $fillable = ["title", "author", "pages", "published", "IBSN", "rating"];
}
