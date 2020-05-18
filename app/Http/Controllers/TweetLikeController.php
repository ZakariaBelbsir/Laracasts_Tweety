<?php

namespace App\Http\Controllers;

use App\Like;
use App\Tweet;
use Illuminate\Http\Request;

class TweetLikeController extends Controller
{
    public function store(Tweet $tweet)
    {
        if (!$tweet->isLikedBy(auth()->user())){
            $tweet->like(auth()->user());
            return back();
        }
        $this->deleteLike($tweet);
        return back();
    }

    public function destroy(Tweet $tweet)
    {
       if(!$tweet->isDislikedBy(auth()->user())) {
           $tweet->dislike(auth()->user());
           return back();
       }
       $this->deleteLike($tweet);
        return back();
    }

    public function deleteLike(Tweet $tweet)
    {
        $like = Like::where('tweet_id', $tweet->id)->where('user_id',auth()->id());
        $like->delete();
    }
}
