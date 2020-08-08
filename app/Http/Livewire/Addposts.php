<?php

namespace App\Http\Livewire;
use Livewire\WithFileUploads;
use Livewire\Component;
use App\addpost;
use Image;
use Intervention\Image\ImageManagerStatic;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


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


 public function mount(){
     $this->author=Auth()->user()->name;
 }


 public function updated($field){
    $this->validateOnly($field,[
        "ptitle"=>"required|min:5|max:100",
        "pdescription"=>"required|min:50|max:1000",
        "pic1"=>"required|image",
        "pic2"=>"required|image",
        "pic3"=>"required|image",
        "pic4"=>"required|image",
        "pic5"=>"required|image",
    ]);
 }



 public function addposts(){

$this->validate([
    "ptitle"=>"required|min:5|max:100",
        "pdescription"=>"required|min:50|max:1000",
        "pic1"=>"required|image",
        "pic2"=>"required|image",
        "pic3"=>"required|image",
        "pic4"=>"required|image",
        "pic5"=>"required|image",
]);

// $img = ImageManagerStatic::make($this->pic1)->fit(1000, 750)->encode("png");
// $name= "/abc/".Str::random(10).rand().".png";
// Storage::disk('public')->put("$name",$img);

$img1 = ImageManagerStatic::make($this->pic1)->fit(1000, 750)->encode("png");
$name1= "/postimg/".Str::random(10).rand().".png";
Storage::disk('public')->put("$name1",$img1);


$img2 = ImageManagerStatic::make($this->pic2)->fit(1000, 750)->encode("png");
$name2= "/postimg/".Str::random(10).rand().".png";
Storage::disk('public')->put("$name2",$img2);


$img3 = ImageManagerStatic::make($this->pic3)->fit(1000, 750)->encode("png");
$name3= "/postimg/".Str::random(10).rand().".png";
Storage::disk('public')->put("$name3",$img3);

$img4 = ImageManagerStatic::make($this->pic4)->fit(1000, 750)->encode("png");
$name4= "/postimg/".Str::random(10).rand().".png";
Storage::disk('public')->put("$name4",$img4);

$img5 = ImageManagerStatic::make($this->pic5)->fit(1000, 750)->encode("png");
$name5= "/postimg/".Str::random(10).rand().".png";
Storage::disk('public')->put("$name5",$img5);


     $this->test="addpost";


//  $pic1name=$this->pic1->store("public/postsimg");
//   $pic2name=$this->pic2->store("public/postsimg");
//   $pic3name=$this->pic3->store("public/postsimg");
//   $pic4name=$this->pic4->store("public/postsimg");
//   $pic5name=$this->pic5->store("public/postsimg");


// public/postsimg/gQ6vvirw4hSZqK9ShSndjCruYOlSPhtFutS84pGn.png
// /abc/Zg5DXdb7jw674207936.png

     $std=new addpost;
     $std->title=$this->ptitle;
     $std->description=$this->pdescription;
     $std->author=$this->author;
    $std->pic1="public".$name1;
    $std->pic2="public".$name2;
    $std->pic3="public".$name3;
    $std->pic4="public".$name4;
    $std->pic5="public".$name5;
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
