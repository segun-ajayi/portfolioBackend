<?php

namespace App\Http\Livewire\Skill;

use App\Models\Skill;
use Livewire\Component;

class Index extends Component
{
    public $skills, $skill, $createE = false, $editE = false, $deleteE = false;
    public $title, $proficiency, $duration, $order;

    public function mount() {
        $this->skills = Skill::all();
    }

    public function resetVars() {
        $this->reset('title', 'proficiency', 'duration', 'order',
            'createE', 'editE', 'deleteE');
    }

    public function createM() {
        $this->createE = true;
    }

    public function editM($val) {
        $edu = Skill::find($val);
        $this->skill = $edu;
        $this->title = $edu->name;
        $this->proficiency = $edu->percent;
        $this->duration = $edu->age;
        $this->order = $edu->order;
        $this->editE = true;
    }

    public function deleteM($val) {
        $this->skill = Skill::find($val);
        $this->deleteE = true;
    }

    public function edit() {
        $this->validate([
            'title' => 'required',
            'proficiency' => 'required|numeric|max:100|min:70',
            'duration' => 'required',
            'order' => 'required',
        ]);

        $this->skill->update([
            'name' => $this->title,
            'percent' => $this->proficiency,
            'age' => $this->duration,
            'order' => $this->order
        ]);

        $this->resetVars();
        $this->mount();
        $this->emit('toast', 'suc', 'Skill updated successfully!');
    }

    public function delete() {
        $this->skill->delete();
        $this->resetVars();
        $this->mount();
        $this->emit('toast', 'suc', 'Skill deleted successfully!');
    }

    public function save() {
        $this->validate([
            'title' => 'required',
            'proficiency' => 'required|numeric|max:100|min:70',
            'duration' => 'required',
            'order' => 'required',
        ]);

        $port = Skill::create([
            'name' => $this->title,
            'percent' => $this->proficiency,
            'age' => $this->duration,
            'order' => $this->order
        ]);

        $this->resetVars();
        $this->mount();
        $this->emit('toast', 'suc', 'Skill saved successfully!');
    }

    public function render()
    {
        return view('livewire.skill.index');
    }
}
