<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsletterSubscribeRequest;
use Illuminate\Http\Request;
use Newsletter;

class NewsletterController extends Controller
{
    public function subscribe(NewsletterSubscribeRequest $request)
    {
        $this->validate($request);

        Newsletter::subscribe($request->email, [
            'FNAME' => $request->first_name,
            'LNAME' => $request->last_name
        ]);

        session()->flash('success');

        return redirect('/#newsletter');
    }
}
