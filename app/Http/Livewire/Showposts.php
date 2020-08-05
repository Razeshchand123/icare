<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\addpost;
use Illuminate\Support\Facades\Storage;

class Showposts extends Component
{






    public function render()
    {
        $std=new addpost;
        $postdata=$std->orderBy("id","desc")->paginate(2);
        return view('livewire.showposts',["postdata"=>$postdata]);
    }
}
