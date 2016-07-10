<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class pageController extends Controller
{
	public function indexPage(){
		return view("index");
	}

	public function contactPage(){
		return view("contact");
	}

	public function aboutPage(){
		return view("about");
	}

	public function blogListPage(){
		return view("bloglist");
	}

	public function blogSinglePage(){
		return view("blogsingle");
	}

	public function deliveryPage(){
		return view("delivery");
	}

	public function offersPage(){
		return view("offers");
	}

	public function shopSideBarPage(){
		return view("shopsidebar");
	}

	public function shopSinglePage(){
		return view("shopsingle");
	}

	public function wishListPage(){
		return view("wishlist");
	}

}
