<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Slider;
use App\Category;
use App\Http\Requests;

class pageController extends Controller
{

		public function __construct() {
				$this->middleware('auth');
			}


	public function indexPage(){
		$productBestSeller=Product::all()->take(4);
		$productBestSellerrow1=Product::all()->take(2);
		$productBestSellerrow2=Product::all()->take(4);
		$productNew=Product::skip(4)->take(6);
		$slider=Slider::all();
		$categoryName=Category::all();
		return view("index",compact('productBestSeller','productBestSellerrow1', 'productBestSellerrow2' ,'slider', 'productNew', 'categoryName'));
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

	public function shopSideBarPage($id){
		$productBestSeller=Product::all();
		 $getProductByCategoryId=Product::where('category_id', $id)->get();
		// $getProductByCategoryId=Pro/duct::all();
		return view("shopsidebar", compact('productBestSeller','getProductByCategoryId'));
	}

	public function shopSinglePage(){
		return view("shopsingle");
	}

	public function wishListPage(){
		return view("wishlist");
	}
	public function addtoCardPage(){
		return view("addtoCard");
	}
	
}
