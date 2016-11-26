<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class MainController extends Controller
{
    protected static $news;
    /*public function __construct(){
        $this->middleware('mymiddle');
    }*/

    public static function addNews($array){
        return self::$news[] = $array;
    }

    public function getArticles(){
        $news = DB::table('news')->get();
        foreach ($news as $new) {
            echo '<img src='.$new->img.'>';
        }
        //$news = DB::table('news')->first();
        //$news = DB::table('news')->where('id', 4)->value('name');
        /*DB::table('news')->chunk(2, function($news) {
            foreach ($news as $new) {
                self::addNews($new);
            }
        });
        dump(self::$news);*/
        //dump($news);
    }

    public function getArticle($id){
        echo $id;
    }
}