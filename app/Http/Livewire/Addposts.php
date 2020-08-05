<?php

namespace App\Http\Livewire;
use Livewire\WithFileUploads;
use Livewire\Component;
use App\addpost;
use Illuminate\Support\Facades\Storage;

class Addposts extends Component
{
    use WithFileUploads;



 public $test;
 public $author="i care";
 public $ptitle;
 public $pdescription;
 public $pic1;
 public $pic2;
 public $pic3;
 public $pic4;
 public $pic5;


 public function addposts(){
     $this->test="addpost";

 $pic1name=$this->pic1->store("public/postsimg");
  $pic2name=$this->pic2->store("public/postsimg");
  $pic3name=$this->pic3->store("public/postsimg");
  $pic4name=$this->pic4->store("public/postsimg");
  $pic5name=$this->pic5->store("public/postsimg");

     $std=new addpost;
     $std->title=$this->ptitle;
     $std->description=$this->pdescription;
     $std->author=$this->author;
    $std->pic1=$pic1name;
    $std->pic2=$pic2name;;
    $std->pic3=$pic3name;;
    $std->pic4=$pic4name;;
    $std->pic5=$pic5name;;
    $result=$std->save();
    if($result){
        session()->flash("done","post created successfully");
        return redirect("/addpost");
    }


 }








    public function render()
    {
        return view('livewire.addposts');
    }
}
