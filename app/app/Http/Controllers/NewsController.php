<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::getAll();
        return dd(compact($news));
        // view('admin.news.all_news')->compact($news);
    }

    /**
     * Show the form for creating a news.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create');
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
            'tag' => 'required',
            'content' => 'required',
            'type' => 'required',
            'title_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
        $validatedData['user_id'] = Auth::user()->id;
        $imageName = $request->title_image->getClientOriginalName();
        $imagePath = $request->title_image->storeAs('images', $imageName);
        $validatedData['title_image'] = $imageName;
        $model = new News();
        $model->create($validatedData);
        // dd($model);
        $notice = 'Данные успешно сохранены';
        return redirect('/home')->with('flash_message', ['success', $notice]);
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
