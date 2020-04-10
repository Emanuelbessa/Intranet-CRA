<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'messages';
    protected $primaryKey = 'id';
    protected $fillable = ['from', 'to', 'message', 'is_read'];

    public $timestamps = true;
    public $incrementing = true;
}
