<?php

namespace App\Http\Livewire\Social;

use App\Models\Social;
use Livewire\Component;

class Index extends Component
{

    public $socials, $social, $createE = false, $editE = false, $deleteE = false;
    public $name, $icon, $url, $order;

    public function mount() {
        $this->socials = Social::all();
    }

    public function resetVars() {
        $this->reset('name', 'icon', 'url', 'order',
            'createE', 'editE', 'deleteE');
    }

    public function createM() {
        $this->createE = true;
    }

    public function editM($val) {
        $edu = Social::find($val);
        $this->social = $edu;
        $this->name = $edu->name;
        $this->icon = $edu->icon;
        $this->url = $edu->url;
        $this->order = $edu->order;
        $this->editE = true;
    }

    public function deleteM($val) {
        $this->social = Social::find($val);
        $this->deleteE = true;
    }

    public function edit() {
        $this->validate([
            'name' => 'required',
            'icon' => 'required',
            'url' => 'required',
            'order' => 'required',
        ]);

        $this->social->update([
            'name' => $this->name,
            'icon' => $this->icon,
            'url' => $this->url,
            'order' => $this->order
        ]);

        $this->resetVars();
        $this->mount();
        $this->emit('toast', 'suc', 'Social updated successfully!');
    }

    public function delete() {
        $this->social->delete();
        $this->resetVars();
        $this->mount();
        $this->emit('toast', 'suc', 'Social deleted successfully!');
    }

    public function save() {
        $this->validate([
            'name' => 'required',
            'icon' => 'required',
            'url' => 'required',
            'order' => 'required',
        ]);

        $port = Social::create([
            'name' => $this->name,
            'icon' => $this->icon,
            'url' => $this->url,
            'order' => $this->order
        ]);

        $this->resetVars();
        $this->mount();
        $this->emit('toast', 'suc', 'Social saved successfully!');
    }

    public function render()
    {
        return view('livewire.social.index');
    }
}
