<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
	protected $table = 'blogs';
    protected $fillable=['picture','title','content','adminName'];
}