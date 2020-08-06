<?php

namespace App\Http\Livewire;

use Livewire\WithFileUploads;
use Livewire\Component;
use App\testtable;
use Image;
use Illuminate\Support\Facades\Storage;


class Test extends Component
{  use WithFileUploads;

 public $pic1;



    public function imgstore(){
    $std=new testtable;

  $this->pic1=Image::make($this->pic1)->resize(320, 240);
  Storage::disk("public")->put("/postsimg".$this->pic1,$this->pic1);

  $std->pic1=$this->pic1;
  $std->save();
    }




    public function render()
    {
        return view('livewire.test');
    }
}
