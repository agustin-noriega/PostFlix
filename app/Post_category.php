<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post_category extends Model
{
  protected $table = 'posts_categories';
  //protected $timestamps = true;
  //protected $primaryKey = 'id';
  protected $guarded = [];
}
