<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Slider;

class SliderController extends Controller
{

  public function __construct() {
    $this->middleware('auth');
  }
  public function create()
  {
    $sliders = Slider::all();
    return view('Admin.addSliderImage',compact('sliders'));
  }
// -------------------------------------------

  public function store(Request $request)
  {
 
    $slider= New Slider;
    $image1 = $request->file('image1');
    $destinationPath1 = 'uploads/images';
    if($image1->isValid()){
      $filename1 = rand(1,1000000).'.'.$image1->getClientOriginalExtension();
      $image1->move($destinationPath1,$filename1);
  }
   
    $slider->image1 = $filename1;

    $image2 = $request->file('image2');
    $destinationPath2 = 'uploads/images';
    if($image2->isValid()){
      $filename2 = rand(1,1000000).'.'.$image2->getClientOriginalExtension();
      $image2->move($destinationPath2,$filename2);
  }
   
  $slider->image2 = $filename2;
  $slider->slogan1=$request->slogan1; 
  $slider->slogan2=$request->slogan2;
  $slider->save();
  return redirect('sliderlist');
}

  public function show(){
   $sliders=Slider::all();
    return view('Admin.sliderlist', compact('sliders'));
  }

  public function edit(Slider $slider){
    return view('Admin.editSlider', compact('slider'));
  }

  public function update(Request $request,  Slider $slider){
    $image1 = $request->file('image1');
    $destinationPath1 = 'uploads/images';

      if($image1->isValid()){
        $filename1 = rand(1,10000000).'.'.$image1->getClientOriginalExtension();
        $image1->move($destinationPath1,$filename1);
     }

      $image2 = $request->file('image2');
      $destinationPath2 = 'uploads/images';
      if($image2->isValid()){
        $filename2 = rand(1,10000000).'.'.$image2->getClientOriginalExtension();
        $image2->move($destinationPath2,$filename2);
    }

    $slider->image1 = $filename1;
    $slider->image2 = $filename2;
    $slider->slogan1=$request->slogan1; 
    $slider->slogan2=$request->slogan2;
    $slider->save();

  return back();
  }

  public function destroy( Slider $slider){
    $slider->delete();
    return back();
  }
}
