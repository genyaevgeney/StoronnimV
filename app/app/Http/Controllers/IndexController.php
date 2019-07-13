<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class IndexController extends Controller
{
    public $announcement;
    public $news;

    /**
     * Show the index page with.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $announcement = News::getLastAnnouncement();
        if (!empty($announcement)) {
        	$news = News::getLastNews(2);
        } else {
        	$news = News::getLastNews(4);
        }
        // $news = News::getLastNews(4);
        // dd($announcement, $news);
        // foreach ($news as $news) {
        //     $i = 1;
        //     $newsImageStyle = [$i] background-image: url("{{ URL::asset('/images/'''.$news->title_image.''')}}")''';
        // }
        // $newsImageStyle = "background-image: url('{{ URL::asset('/images/".$news->title_image.")}}')";
        // dd($newsImageStyle);
        return view('index', ['announcement' => $announcement, 'news' => $news,/* 'newsStyle' => $newsImageStyle*/]);
    }
}
