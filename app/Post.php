<?php

namespace App;

use Moloquent;

class Post extends Moloquent
{
    protected $collection = 'posts';
    protected $connection = 'mongodb';

    protected $fillable = [
        'title', 'content',
    ];
}
