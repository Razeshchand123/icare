<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\addpost;
use\App\User;
use Illuminate\Support\Facades\Storage;
class Admin extends Component
{

    public $test=0;






public function deleteuser($uid){
    $this->test=$uid;
    $std=new User;
$target=$std->find($uid);
$result=$target->delete();

if(true){
Storage::delete("public/".$target->profile);
    session()->flash("done1","data deleted sussufully");
    return redirect('/admin');
}
}







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

        $std2=new User;
        $userlist=$std2->orderBy("id","desc")->get();
   
        $std=new addpost;
        $postdata=$std->orderBy("id","desc")->paginate(2);
        return view('livewire.admin',["postdata"=>$postdata,"userlist"=>$userlist]);
    }
}
