<?php

namespace App\Http\Livewire\About;

use App\Models\About;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Index extends Component
{
    use WithFileUploads;

    public $email, $phone_number, $address, $nationality, $profile, $resume;

    public function mount() {
        $about = About::firstOrCreate([
            'id' => 1
        ], [
            'email' => 'segun_aj@yahoo.com',
            'phone' => '+234 8020713114',
            'address' => '17, Aderoju Str. Off Awolowo Rd. Tanke, Ilorin, Kwara State, Nigeria.',
            'nationality' => 'nigerian',
            'profile' => '<p>A lifelong learner with a strong belief in personal development. I am enthusiastic about all things relating to Software Development. From Frontend, Backend development, App Containerization to managing Kubernetes clusters. Over the years, I acquired skills and abilities to work in a dynamic and fast changing environment.</p>',
            'resume' => 'resume/resume.pdf'
        ]);

        $this->email = $about->email;
        $this->phone_number = $about->phone;
        $this->address = $about->address;
        $this->nationality = $about->nationality;
        $this->profile = $about->profile;
    }

    public function save() {
        $this->validate([
            'email' => 'required|email',
            'phone_number' => 'required',
            'address' => 'required',
            'nationality' => 'required',
            'profile' => 'required',
            'resume' => 'file|mimes:pdf|nullable',
        ]);
        if ($this->resume) {
            $photo_url = 'resume/';
            $photo_name = 'resume.pdf';
            Storage::delete('public/resume/resume.pdf');
            $this->resume->storePubliclyAs('public/' . $photo_url, $photo_name);
            $resume = $photo_url . $photo_name;
        } else {
            $resume = 'resume/resume.pdf';
        }
        About::first()->update([
            'email' => $this->email,
            'phone' => $this->phone_number,
            'address' => $this->address,
            'nationality' => $this->nationality,
            'profile' => $this->profile,
            'resume' => $resume,
        ]);
        $this->emit('toast', 'suc', 'About information saved successfully!');
    }

    public function render()
    {
        return view('livewire.about.index');
    }
}
