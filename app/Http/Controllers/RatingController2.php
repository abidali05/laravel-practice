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
		foreach($posts as $key => $post){
			$one_rate = 0;
			$two_rate = 0;
			$three_rate = 0;
			$four_rate = 0;
			$five_rate = 0;
			$average = 0;
			$score = 0;
			$response = 0;

			foreach($post->rating as $key => $rating){
				if($rating->rate == 1){
					$one_rate += 1;
				}
				elseif($rating->rate == 2){
					$two_rate += 1;
				}
				elseif($rating->rate == 3){
					$three_rate += 1;
				}
				elseif($rating->rate == 4){
					$four_rate += 1;
				}
				elseif($rating->five_rate == 5){
					$five_rate += 1;
				}
			}

			$response = $one_rate * 1 + $two_rate * 2 + $three_rate * 3 + $four_rate * 4 + $five_rate * 5;

			$score = $one_rate+$two_rate+$three_rate+$four_rate+$five_rate;

			$average = $response/$score;
			array_push($stars, intval($average))

		}

		return view('posts')
            ->with("posts",$posts)
            ->with("stars",$stars);
	}

}