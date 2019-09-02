<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{
    /**
     * Display news step by step by means of ajax.
     *
     * @return \Illuminate\Http\Response
     */
    public function allNews()
    {
        $announcement = News::getLastAnnouncement();
        if (! empty($announcement)) {
            $news = News::getLastNews(4)->toJson(JSON_PRETTY_PRINT);
        } else {
            $news = News::getLastNews(6)->toJson(JSON_PRETTY_PRINT);
        }
        return view('allNews', ['announcement' => $announcement, 'news' => $news]);
    }

    /**
     * Display one piece of news
     *
     * @return \Illuminate\Http\Response
     */
    public function oneNews($id)
    {
        $news = News::findOrFail($id);
        $previousNews = News::getPreviousNews($news->updated_at);
        $nextNews = News::getNextNews($news->updated_at);
        $data = News::orderBy('updated_at', 'desc')->paginate(6);
        return view('oneNews', [
            'news' => $news, 
            'data' => $data, 
            'previousNews' => $previousNews, 
            'nextNews' => $nextNews
        ]);
    }

    /**
     * Fetch data for pagination at oneNews.blade.php
     *
     * @return
     */
    public function fetchData(Request $request)
    {
        if($request->ajax()){
            $data = News::orderBy('updated_at', 'desc')->paginate(6);
        }
        // print("<pre>".print_r($request, true)."</pre>");
        // die();
        return view('partials.newsPagination', ['data' => $data])->render();
    }

    /**
     * Retrieve a portion of news.
     *
     * @return \Illuminate\Http\Response
     */
    public function getNewsPortion()
    {
        $startFrom = $_POST['startFrom'];
        $portion = $_POST['portion'];
        $news = News::getNewsPortion($startFrom, $portion)->toJson(JSON_PRETTY_PRINT);
        return $news;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::getAll();
        return view('admin.news.allNews', ['news' => $news]);
    }

    /**
     * Show the form for creating a news.
     *
     * @return \Illuminate\Http\Response
     */
    public function createNews()
    {
        return view('admin.news.createNews');
    }

    /**
     * Show the form for creating a news.
     *
     * @return \Illuminate\Http\Response
     */
    public function createAnnouncement()
    {
        return view('admin.news.createAnnouncement');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'tag' => 'max:255',
            'content' => 'required',
            'type' => 'required',
            'title_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'alt' => 'max:255',
            ]);
        $validatedData['user_id'] = Auth::user()->id;
        if (! empty($request->event_date)) {
            $validatedData['event_date'] = $request->event_date; 
        }
        if ($request->hasFile('title_image')) {
            $imageName = $request->title_image->getClientOriginalName();
            $imagePath = $request->title_image->storeAs('images', $imageName, 'public');
            $validatedData['title_image'] = $imageName;
        }
        $model = new News();
        $model->create($validatedData);
        $notice = 'Новина успішно збережена';
        return redirect()->back()->with('flash_message', ['success', $notice]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        //
    }
}
