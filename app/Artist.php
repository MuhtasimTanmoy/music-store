<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    //
    protected $table = 'artist';
    public $timestamps = false;
    protected $primaryKey = 'artistId';
}
