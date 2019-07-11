<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\NewFeedback;
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
        if (! is_null($model)) {
            $this->notifyOnNewFeedback($validatedData);
        }
        $notice = "Дякуємо за звернення, ми зв'яжемося з Вами найближчим часом!";
        return redirect()->back()->with('flash_message', ['success', $notice]);
    }

    /**
     * Sends notification message with feedback content.
     *
     * @param 
     * @return
     */
    public function notifyOnNewFeedback($validatedData)
    {
        $email = $validatedData['email'];
        $message = $validatedData['message'];
        $envelop = new NewFeedback($email, $message);
        Mail::to('alessio.jorgevic@gmail.com')->send($envelop);
    }
}
