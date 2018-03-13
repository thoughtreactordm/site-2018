<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsletterSubscribeRequest;
use Illuminate\Http\Request;
use Newsletter;

class NewsletterController extends Controller
{
    public function subscribe(NewsletterSubscribeRequest $request)
    {
        Newsletter::subscribe($request->email, [
            'NAME' => $request->name,
        ]);

        session()->flash('success');

        return redirect('/');
    }
}
