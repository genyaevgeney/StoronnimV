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
        $news = News::getLastNews(6)->toJson(JSON_PRETTY_PRINT);
        return view('allNews', ['announcement' => $announcement, 'news' => $news]);
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
        // dd($news);
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
            $imagePath = $request->title_image->storeAs('images', $imageName);
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
