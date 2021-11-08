<?php

namespace App\Http\Livewire;

use App\Models\Message;
use Livewire\Component;

class Messages extends Component
{
    public $messages;

    private function load() {
        $messages = Message::all()->sortByDesc('created_at');
        dd($messages);
    }

    public function render()
    {
        return view('livewire.messages', $this->load());
    }
}
