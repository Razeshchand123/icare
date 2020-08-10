<?php

namespace App\Http\Livewire;

use Livewire\WithFileUploads;
use Livewire\Component;
use App\testtable;
use Intervention\Image\ImageManagerStatic;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class Test extends Component
{  use WithFileUploads;
    

 public $pic1;
 public $test;
 public function mount(){
    $this->test = Str::random(40);
  
 }


    public function imgstore(){

    $std=new testtable;

    // $img=Image::make($this->image)->encode("jpg");

    // $random_name="/images/".rand().".jpg";
    
    // storage::disk("public")->put("$random_name",$img);
    

    $img = ImageManagerStatic::make($this->pic1)->fit(1000, 750)->encode("png");
    $name= "/abc/".Str::random(10).rand().".png";
    Storage::disk('public')->put("$name",$img);
   
    $std->pic1=$name;
    $std->save();

    }


    public function render()
    {
     
        return view('livewire.test');
    }
}
// cursor: pointer;
// top: 33%;
// z-index: 99;
// color: white;
// position: absolute;
// right: 38%;
// font-size: 65%;