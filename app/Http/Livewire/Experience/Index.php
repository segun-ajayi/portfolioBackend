<?php

namespace App\Http\Livewire\Experience;

use App\Models\Experience;
use Livewire\Component;

class Index extends Component
{
    public $experiences, $experience, $createE = false, $editE = false, $deleteE = false;
    public $icon, $company, $position, $duration, $text, $order;

    public function mount() {
        $this->experiences = Experience::all();
    }

    public function resetVars() {
        $this->reset('icon', 'company', 'position', 'duration', 'text', 'order', 'experience',
            'createE', 'editE', 'deleteE');
    }

    public function createM() {
        $this->createE = true;
    }

    public function editM($val) {
        $edu = Experience::find($val);
        $this->experience = $edu;
        $this->icon = $edu->icon;
        $this->company = $edu->company;
        $this->position = $edu->position;
        $this->duration = $edu->duration;
        $this->text = $edu->text;
        $this->order = $edu->order;
        $this->editE = true;
    }

    public function deleteM($val) {
        $this->experience = Experience::find($val);
        $this->deleteE = true;
    }

    public function edit() {
        $this->validate([
            'icon' => 'required',
            'company' => 'required',
            'position' => 'required',
            'duration' => 'required',
            'text' => 'required',
            'order' => 'required'
        ]);

        $this->experience->update([
            'icon' => $this->icon,
            'company' => $this->company,
            'position' => $this->position,
            'duration' => $this->duration,
            'text' => $this->text,
            'order' => $this->order
        ]);
        $this->resetVars();
        $this->mount();
        $this->emit('toast', 'suc', 'Experience updated successfully!');
    }

    public function delete() {
        $this->experience->delete();
        $this->resetVars();
        $this->mount();
        $this->emit('toast', 'suc', 'Experience deleted successfully!');
    }

    public function save() {
        $this->validate([
            'icon' => 'required',
            'company' => 'required',
            'position' => 'required',
            'duration' => 'required',
            'text' => 'required',
            'order' => 'required'
        ]);
        Experience::create([
            'icon' => $this->icon,
            'company' => $this->company,
            'position' => $this->position,
            'duration' => $this->duration,
            'text' => $this->text,
            'order' => $this->order
        ]);
        $this->resetVars();
        $this->mount();
        $this->emit('toast', 'suc', 'Experience saved successfully!');
    }

    public function render()
    {
        return view('livewire.experience.index');
    }
}
