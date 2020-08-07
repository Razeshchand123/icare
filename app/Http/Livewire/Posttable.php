<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\addpost;
use Illuminate\Support\Facades\Storage;
class Posttable extends Component
{
public $test=0;



public function deletepost($targetid){

    $this->test=$targetid;
  
$d_std=new addpost;
$d_target=$d_std->find($targetid);


$this->test=$d_target->pic1;






$result=$d_target->delete();
if($result){
 Storage::delete($d_target->pic1);
Storage::delete($d_target->pic2);
Storage::delete($d_target->pic3);
Storage::delete($d_target->pic4);
Storage::delete($d_target->pic5);
    session()->flash("done","data deleted sussufully");
    return redirect('/home');
}
}


    public function render()
    {
        $std=new addpost;
        $postdata=$std->where("author","=",Auth()->user()->name)
        ->orderBy("id","desc")->paginate(2);
        return view('livewire.posttable',["postdata"=>$postdata]);
    }
}
