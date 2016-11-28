<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{

    use SoftDeletes;

    protected $table = 'news';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;
    protected $fillable = ['name', 'text', 'img'];
    //protected $guarded = ['*'];

    protected $dates = ['deleted_at'];

}
