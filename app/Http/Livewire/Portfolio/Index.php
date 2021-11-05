<?php

namespace App\Http\Livewire\Portfolio;

use App\Models\Portfolio;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Index extends Component
{
    use WithFileUploads;

    public $portfolios, $portfolio, $createE = false, $editE = false, $deleteE = false;
    public $title, $description, $url, $order, $image;

    public function mount() {
        $this->portfolios = Portfolio::all();
    }

    public function resetVars() {
        $this->reset('title', 'description', 'url', 'order', 'portfolio',
            'createE', 'editE', 'deleteE');
    }

    public function createM() {
        $this->createE = true;
    }

    public function editM($val) {
        $edu = Portfolio::find($val);
        $this->portfolio = $edu;
        $this->title = $edu->title;
        $this->description = $edu->description;
        $this->url = $edu->url;
        $this->order = $edu->order;
        $this->editE = true;
    }

    public function deleteM($val) {
        $this->portfolio = Portfolio::find($val);
        $this->deleteE = true;
    }

    public function edit() {
        $this->validate([
            'title' => 'required',
            'description' => 'required',
            'url' => 'nullable',
            'order' => 'required',
            'image' => 'image|nullable'
        ]);

        $this->portfolio->update([
            'title' => $this->title,
            'description' => $this->description,
            'url' => $this->url,
            'order' => $this->order
        ]);

        if ($this->image) {
            $photo_url = 'portfolio/';
            $photo_name = rand(0, 9999) . '_1.' . $this->image->getClientOriginalExtension();
//            Storage::delete('public/' . $this->portfolio->);
            $this->image->storePubliclyAs('public/' . $photo_url, $photo_name);
            $this->portfolio->images()->create([
                'url' => $photo_url . $photo_name,
                'order' => 1
            ]);
        }
        $this->resetVars();
        $this->mount();
        $this->emit('toast', 'suc', 'Portfolio updated successfully!');
    }

    public function delete() {
        $this->portfolio->delete();
        $this->resetVars();
        $this->mount();
        $this->emit('toast', 'suc', 'Portfolio deleted successfully!');
    }

    public function save() {
        $this->validate([
            'title' => 'required',
            'description' => 'required',
            'url' => 'nullable',
            'order' => 'required',
            'image' => 'image|nullable'
        ]);

        $port = Portfolio::create([
            'title' => $this->title,
            'description' => $this->description,
            'url' => $this->url,
            'order' => $this->order
        ]);

        if ($this->image) {
            $photo_url = 'portfolio/';
            $photo_name = rand(0, 9999) . '_1.' . $this->image->getClientOriginalExtension();

            $this->image->storePubliclyAs('public/' . $photo_url, $photo_name);
            $port->images()->create([
                'url' => $photo_url . $photo_name,
                'order' => 1
            ]);
        }
        $this->resetVars();
        $this->mount();
        $this->emit('toast', 'suc', 'Portfolio saved successfully!');
    }
    public function render()
    {
        return view('livewire.portfolio.index');
    }
}
