<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\User;
class About extends Component
{
    public function render()
    {
        $std=new User;
  $userlist=$std->limit(3)->get();
        return view('livewire.about',["userlist"=>$userlist]);
    }
}
