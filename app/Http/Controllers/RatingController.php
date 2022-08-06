<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class RatingController extends Controller
{
    public function index()
    {
        $posts = Post::with('rating')->get();

        $stars = [];
        foreach ($posts as $key => $post) {
            
            $one_rate = 0;
            $two_rate = 0;
            $three_rate = 0;
            $four_rate = 0;
            $five_rate = 0;
            $average = 0;
            $score = 0;
            $response = 0;
            foreach ($post->rating as $key => $rating) {
                if($rating->rate == 1){
                    $one_rate += 1;
                }
                else if($rating->rate == 2){
                    $two_rate += 1;
                }
                else if($rating->rate == 3){
                    $three_rate += 1;
                }
                else if($rating->rate == 4){
                    $four_rate += 1;
                }
                else if($rating->rate == 5){
                    $five_rate += 1;
                }

            }
            // echo $one_rate; echo "<br>";
            // echo $two_rate; echo "<br>";
            // echo $three_rate; echo "<br>";
            // echo $four_rate; echo "<br>";
            // echo $five_rate; echo "<br>";
            $response = $one_rate * 1 + $two_rate * 2 + $three_rate * 3 + $four_rate * 4 + $five_rate * 5;

            // echo $response;

            $score = $one_rate + $two_rate + $three_rate + $four_rate + $five_rate;

            // echo $score;

            $average = $response/$score;

            // echo $average;

            array_push($stars, intval($average));
            
        }
        
        return view('posts')
            ->with("posts",$posts)
            ->with("stars",$stars);
    }
}
