<?php

namespace App\Http\Livewire\Education;

use App\Models\Education;
use Livewire\Component;

class Index extends Component
{
    public $educations, $education, $createE = false, $editE = false, $deleteE = false;
    public $icon, $college, $degree, $duration, $text, $order;

    public function mount() {
        $this->educations = Education::all();
    }

    public function resetVars() {
        $this->reset('icon', 'college', 'degree', 'duration', 'text', 'order', 'education',
        'createE', 'editE', 'deleteE');
    }

    public function createM() {
        $this->createE = true;
    }

    public function editM($val) {
        $edu = Education::find($val);
        $this->education = $edu;
        $this->icon = $edu->icon;
        $this->college = $edu->college;
        $this->degree = $edu->degree;
        $this->duration = $edu->duration;
        $this->text = $edu->text;
        $this->order = $edu->order;
        $this->editE = true;
    }

    public function deleteM($val) {
        $this->education = Education::find($val);
        $this->deleteE = true;
    }

    public function edit() {
        $this->validate([
            'icon' => 'required',
            'college' => 'required',
            'degree' => 'required',
            'duration' => 'required',
            'text' => 'required',
            'order' => 'required'
        ], [
            'college.required' => 'Institution is required.'
        ]);

        $this->education->update([
            'icon' => $this->icon,
            'college' => $this->college,
            'degree' => $this->degree,
            'duration' => $this->duration,
            'text' => $this->text,
            'order' => $this->order
        ]);
        $this->resetVars();
        $this->mount();
        $this->emit('toast', 'suc', 'Education updated successfully!');
    }

    public function delete() {
        $this->education->delete();
        $this->resetVars();
        $this->mount();
        $this->emit('toast', 'suc', 'Education delete successfully!');
    }

    public function save() {
        $this->validate([
            'icon' => 'required',
            'college' => 'required',
            'degree' => 'required',
            'duration' => 'required',
            'text' => 'required',
            'order' => 'required'
        ], [
            'college.required' => 'Institution is required.'
        ]);
        Education::create([
            'icon' => $this->icon,
            'college' => $this->college,
            'degree' => $this->degree,
            'duration' => $this->duration,
            'text' => $this->text,
            'order' => $this->order
        ]);
        $this->resetVars();
        $this->mount();
        $this->emit('toast', 'suc', 'Education saved successfully!');
    }

    public function render()
    {
        return view('livewire.education.index');
    }
}
