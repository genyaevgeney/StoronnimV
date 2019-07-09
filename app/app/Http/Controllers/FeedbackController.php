<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feedback;

class FeedbackController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'email'   => 'required|email',
            'message' => 'required'
        ]);
        $model = new Feedback();
        $model->create($validatedData);
        $notice = "Дякуємо за звернення, ми зв'яжемося з Вами найближчим часом!";
        return redirect()->back()->with('flash_message', ['success', $notice]);
    }
}
