<?php

namespace App\Http\Controllers\Admin;

use App\News;
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

    public function getArticles(Request $request){
        //$news = DB::table('news')->get();

        /*foreach ($news as $new) {
            echo '<img src='.$new->img.'>';
        }*/

        //$news = DB::table('news')->first();
        //$news = DB::table('news')->where('id', 4)->value('name');
        /*DB::table('news')->chunk(2, function($news) {
            foreach ($news as $new) {
                self::addNews($new);
            }
        });

        dump(self::$news);*/
        //dump($news);

        //$news = DB::table('news')->count();
        //$news = DB::table('news')->max('id');
        //$news = DB::table('news')->select('name')->get();
        //$news = DB::table('news')->distinct()->select('name')->get();

        /*$query = DB::table('news')->select('name');
        $news = $query->addSelect('alias')->get();*/

        //$news = DB::table('news')->where('id', '>', 100)->get();
        //$news = DB::table('news')->take(5)->skip(3)->get();

        /*$news = DB::table('news')
            ->where('id', 100)
            ->update(['alias' => 'property']);*/

        /*$news = DB::table('users')
            ->leftJoin('news', 'news.alias', '=', 'users.remember_token')
            ->get();
        dump($news);*/

        //$news = News::where('id', '>', 100)->orderBy('text', 'desc')->get();
        //$news = News::find(100);

        //$news = News::findOrFail(1);
        //dump($news);
        /*foreach ($news as $new) {
          echo $new->name.' <br>';
        }*/


        /*$post = new News();
        $post->name = 'New Post';
        $post->text = 'New text';
        $post->img = 'New img';
        $post->alias = 'New alias';

        $post->save();*/

        /*$news = News::find(100);
        $news->name = 'shoot';
        $news->save();*/

        /*News::create(
            [
                'name' => 'Article Hello',
                'text' => 'some text'
            ]
        );*/

        /*$news = News::firstOrCreate(
          [
              'name' => '2Article Hello',
              'text' => 'some text',
              'img' => 'some.jpg'
          ]
        );*/

        $news = News::find(113);
        $news->delete();
    }

    public function getArticle($id){
        echo $id;
    }
}