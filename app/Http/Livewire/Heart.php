<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
class Heart extends Component
{

    public $test=0;
    public $number=172; 

// Note :: first time run garda heart table ma gayer manuaally number ko value dine
public function mount(){


   $data=DB::table('heart')->find(1);

   $this->number=$data->number;
}


public function heartdata(){
   $this->number++;
    DB::table('heart')
 ->where('id', 1)
 ->update(['number' => $this->number]);


}

    public function render()
    {
        return view('livewire.heart');
    }
}
