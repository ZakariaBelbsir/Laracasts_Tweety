<?php

namespace App\Http\Controllers;

use App\Tweet;
use Illuminate\Auth\Access\Gate;
use Illuminate\Http\Request;

class TweetController extends Controller
{
    public function index()
    {
        return view('tweets.index',[
            'tweets' => auth()->user()->timeline()
        ]);
    }

    public function store()
    {
        $attributes = request()->validate(
            ['body' => 'required|max:255'],
            ['image' => 'file']
        );
        $attributes['user_id'] = auth()->id();

        if (request('image')){
            $attributes['image'] = request('image')->store('tweets');
        }

        Tweet::create($attributes);

        return redirect()->route('home');
    }

    public function destroy(Tweet $tweet)
    {
        $tweet->delete();
        return back();
    }
}
