<?php

namespace App\Http\Livewire;

use App\Models\Banquet;
use App\Models\BanquetImages;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class AddBanquetImage extends Component
{
    use WithFileUploads;

    public $banquetId;
    public $img;

    public function mount(Banquet $id)
    {
        $this->banquetId = $id;
    }

    public function submit()
    {
        $this->validate([
            'img' => 'image|max:3072|mimes:png,jpg,webp'
        ]);
        $slug = Str::slug($this->banquetId->name);
        $imgName = $slug . '-' . now()->timestamp . '.' . $this->img->guessExtension();
        $imgPath = $this->img->storeAs('images', $imgName);
        $res = BanquetImages::create([
            'banquet_id' => $this->banquetId->id,
            'img_path' => $imgPath
        ]);
        if ($res) {
            session()->flash('success', 'Uploaded Succesfully');
        } else {
            session()->flash('error', 'Error While Uploading');
        }
    }


    public function render()
    {
        return view('livewire.add-banquet-image');
    }
}
