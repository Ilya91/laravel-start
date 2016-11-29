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

    protected $casts = [
        'name' => 'boolean'
    ];

    public function news(){
        return $this->hasOne('App\Category');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function getTextAttribute($value){
        return 'Hell world - ' . $value;
    }

    public function setNameAttribute($value){

        $this->attributes['name'] = ' Title ' . $value;
    }
}
