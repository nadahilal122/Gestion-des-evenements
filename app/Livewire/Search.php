<?php

namespace App\Livewire;

use App\Models\event_type;
use Livewire\Component;

class Search extends Component
{
    public $search = '';
    public function render()
    {
        {
            $event_types = event_type::where('event_type', 'like', '%'.$this->search.'%')->get();
    
            return view('livewire.search', ['event_types' => $event_types]);
        }
    }
}
