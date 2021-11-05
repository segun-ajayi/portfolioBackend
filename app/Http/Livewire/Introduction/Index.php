<?php

namespace App\Http\Livewire\Introduction;

use App\Models\Introduction;
use App\Models\Pictures;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Index extends Component
{
    use WithFileUploads;

    public $phot1, $phot2, $phot3;
    public $photo1, $photo2, $photo3, $title, $short_name, $name;

    public function mount() {
        $intro = Introduction::firstOrCreate([
            'id' => 1
        ], [
            'name' => 'oluwasegun ajayi',
            'short_name' => 'segun ajayi',
            'title' => 'web developer | frontend | backend | devops'
        ]);

        $this->title = $intro->title;
        $this->name = $intro->name;
        $this->short_name = $intro->short_name;
        $this->phot1 = $intro->getBanner(1);
        $this->phot2 = $intro->getBanner(2);
        $this->phot3 = $intro->getBanner(3);
    }

    public function updatedPhoto1() {
        $this->validate([
            'photo1' => 'image',
//            'photo1' => 'image|dimensions:min_width=604,min_height=790,max_width=804,max_height=990',
        ]);
        $user = Auth::user();
        $photo_url = 'banner-photos/';
        $photo_name = rand(0, 9999) . '_1.' . $this->photo1->getClientOriginalExtension();
        $this->photo1->storePubliclyAs('public/' . $photo_url, $photo_name);
        $intro = Introduction::first();
        $intro->images()->create([
            'url' => $photo_url . $photo_name,
            'order' => 1
        ]);
        $this->emit('toast', 'suc', 'Photo uploaded successfully!');
    }
    public function updatedPhoto2() {
        $this->validate([
            'photo2' => 'image',
//            'photo1' => 'image|dimensions:min_width=604,min_height=790,max_width=804,max_height=990',
        ]);

        $photo_url = 'banner-photos/';
        $photo_name = rand(0, 9999) . '_2.' . $this->photo2->getClientOriginalExtension();
        $this->photo2->storePubliclyAs('public/' . $photo_url, $photo_name);
        $intro = Introduction::first();
        $intro->images()->create([
            'url' => $photo_url . $photo_name,
            'order' => 2
        ]);
        $this->emit('toast', 'suc', 'Photo uploaded successfully!');
    }
    public function updatedPhoto3() {
        $this->validate([
            'photo3' => 'image',
//            'photo3' => 'image|dimensions:min_width=604,min_height=790,max_width=804,max_height=990',
        ]);

        $photo_url = 'banner-photos/';
        $photo_name = rand(0, 9999) . '_3.' . $this->photo3->getClientOriginalExtension();
        $this->photo3->storePubliclyAs('public/' . $photo_url, $photo_name);
        $intro = Introduction::first();
        $intro->images()->create([
            'url' => $photo_url . $photo_name,
            'order' => 3
        ]);
        $this->emit('toast', 'suc', 'Photo uploaded successfully!');
    }

    public function save() {
        $this->validate([
            'title' => 'required',
            'name' => 'required',
            'short_name' => 'required'
        ]);

        Introduction::first()->update([
            'title' => $this->title,
            'name' => $this->name,
            'short_name' => $this->short_name
        ]);

        $this->emit('toast', 'suc', 'Information saved successfully!');
    }

    public function deleteProfilePhoto($val)
    {
        $photo = Introduction::first()->images()->where('order', $val)->first();
        Storage::delete('public/' . $photo->url);
        $photo->delete();
        $p = 'phot' . $val;
        $this->$p = null;
        $this->emit('toast', 'suc', 'photo deleted successfully');
    }

    public function render()
    {
        return view('livewire.introduction.index');
    }
}
