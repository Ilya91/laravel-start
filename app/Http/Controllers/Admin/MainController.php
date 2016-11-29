<?php

namespace App\Http\Controllers\Admin;

use App\Country;
use App\News;
use App\Role;
use App\User;
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

        /*$news = News::find(113);
        $news->delete();*/

        /*News::destroy(112);*/

        /*$news = News::find(111);
        $news->delete();*/

        /*$news = News::withTrashed()->get();
        dump($news);*/

        /*$news = News::find(110);
        //dump($news);
        $news->forceDelete();*/


    }

    public function getArticle($id){
        //$country = User::find(1)->country;
        //dump($country);

        //$user = Country::find(1)->user;

        //$user = User::find(2);
        /*$news = $user->news;
        foreach ($news as $item){
            echo $item->name.'<br>';
        }*/
        //$news = $user->news()->where('id', '=', 62)->get();
        //dump($news);

        //$news = News::find(66);
        //dump($news->user->name);

        //$user = User::find(1);
        //dump($user->roles);
        /*foreach ($user->roles as $role) {
            echo $role->name;
        }*/

        /*$role = Role::find(1);
        dump($role->users);*/

        //$news = News::with('user')->get();
        /*$news = News::all();
        $news->load('user');
        foreach ($news as $item){
           echo $item->user->name;
        }*/


        /*$users = User::with('news', 'roles')->get();
        foreach ($users as $item){
            dump($item->news);
        }*/

        /*$users = User::has('news', '>', 5)->get();
        foreach ($users as $item){
            dump($item->news);
        }*/

        //$user = User::find(1);
        /*$news = new News(
            ['name' => 'New article',
             'text' => 'Some text',
                'img' => 'Some.jpg'
            ]
        );

        $user->news()->save($news);*/

        /*$user->news()->saveMany([
            new News(['name' => 'New article1', 'text' => 'Some text1', 'img' => 'Some1.jpg']),
            new News(['name' => 'New article2', 'text' => 'Some text2', 'img' => 'Some2.jpg']),
            new News(['name' => 'New article3', 'text' => 'Some text3', 'img' => 'Some3.jpg']),
            new News(['name' => 'New article4', 'text' => 'Some text4', 'img' => 'Some4.jpg']),
        ]);*/

        /*$role = new Role([
           'name' => 'guest'
        ]);
        $user->roles()->save($role);*/

        $country = Country::find(1);
        $user = User::find(2);

        $country->user()->associate($user);
        $country->save();

    }
}