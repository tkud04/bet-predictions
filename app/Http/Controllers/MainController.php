<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Helpers\Contracts\HelperContract; 
use Illuminate\Support\Facades\Auth;
use Session; 
use Validator; 
use Carbon\Carbon; 

class MainController extends Controller {

	protected $helpers; //Helpers implementation
    
    public function __construct(HelperContract $h)
    {
    	$this->helpers = $h;                     
    }

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getIndex()
    {
       $user = null;

		if(Auth::check())
		{
			$user = Auth::user();
		}

		
		$signals = $this->helpers->signals;
        $plugins = $this->helpers->getPlugins();
        $banners = [
			[
				'img' => 'images/full-slider/2.jpg',
				'line1' => 'Get Betting Tips Everyday <span>For FREE</span>',
				'line2' => 'Sure CASHOUT',
				'url' => 'blog' 
			],
			[
				'img' => 'images/full-slider/2.jpg',
				'line1' => 'Get 2 Betting Tips Everyday <span>On Premium</span>',
				'line2' => 'Surest Cashout',
				'url' => 'subscribe' 
			],
			[
				'img' => 'images/full-slider/2.jpg',
				'line1' => 'Get Free Match Analysis <span>and more</span>',
				'line2' => 'Check out our blog',
				'url' => 'blog' 
			],
		];

		$matches = [
			[
               'home' => 'Manchester Utd',
			   'away' => 'Ajax',
			   'date' => 'June 16, 5:00 PM',
			   'location' => 'Old Trafford'
			],
			[
				'home' => 'Real Madrid',
				'away' => 'Levante',
				'date' => 'June20, 8:00 PM',
				'location' => 'Santiago Bernabeu'
			 ],
		];

		$posts = [
			[
				'img' => 'images/latest/1.jpg',
				'url' => 'blog',
				'title' => 'TFC Club Score Seven in CL Rout Match',
				'summary' => 'Blandit rutrum, erat et egestas ultricies, dolor tortor egestas enim, quiste rhoncus sem the purus eu sapien curabitur.Lorem Ipsum is therefore always free from repetitionetc.',
			],
			[
				'img' => 'images/latest/2.jpg',
				'url' => 'blog',
				'title' => 'TFC Club Score Seven in CL Rout Match',
				'summary' => 'Blandit rutrum, erat et egestas ultricies, dolor tortor egestas enim, quiste rhoncus sem the purus eu sapien curabitur.Lorem Ipsum is therefore always free from repetitionetc.',
			],
			[
				'img' => 'images/latest/3.jpg',
				'url' => 'blog',
				'title' => 'TFC Club Score Seven in CL Rout Match',
				'summary' => 'Blandit rutrum, erat et egestas ultricies, dolor tortor egestas enim, quiste rhoncus sem the purus eu sapien curabitur.Lorem Ipsum is therefore always free from repetitionetc.',
			],
		];
			$tips = [
				[
                   'img' => 'images/tip.png',
				   'url' => 'javascript:void(0)',
				   'title' => 'Odds: <b>5.40</b>',
				   'type' => 'free'
				],
				[
					'img' => 'images/tip.png',
					'url' => 'javascript:void(0)',
					'title' => 'Odds: <b>6.25</b>',
					'type' => 'premium'
				 ]
			];

		$testimonials = [
			[
				'name' => 'Tobi',
				'location' => 'Lagos',
				'rating' => 4,
				'comment' => 'Testing the comments for testimonials'
			],
			[
				'name' => 'Chisom',
				'location' => 'Abuja',
				'rating' => 3,
				'comment' => 'Testing the comments for testimonials'
			],
			[
				'name' => 'Martins',
				'location' => 'Abia',
				'rating' => 4,
				'comment' => 'Testing the comments for testimonials'
			],
		];

		return view('index',compact(['user','signals','plugins','banners','matches','posts','tips','testimonials']));
    }
	

	

   


}