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

        if (!empty($announcement)) {
            $announcement->imgPath = 'storage/images/'.$announcement->title_image;
        }

        if (!empty($news)) {
            foreach ($news as $new) {
                $new->imgPath = 'storage/images/'.$new->title_image;
            }
        }

        return view('index', ['announcement' => $announcement, 'news' => $news,]);
    }
}
