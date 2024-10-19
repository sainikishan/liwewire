<?php

namespace App\Livewire;

use App\Models\Member;
use Livewire\Component;

class ShowTeamPage extends Component
{
    public function render()
    {
        $service = Member::all();
        return view('livewire.show-team-page', compact('service'));
    }
}
