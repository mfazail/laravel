<?php

namespace App\Http\Livewire;

use App\Models\Banquet;
use Livewire\Component;

class AddBanquet extends Component
{
    public $success = false;
    public $myError = false;
    public $name;
    public $price;
    public $place;
    public $address;
    public $banquet_type = 'Premium';
    public $food_type = 0;
    public $min_cap;
    public $max_cap;

    public function render()
    {
        return view('livewire.add-banquet');
    }

    public function submit()
    {
        $this->validate([
            'name' => 'required|string|max:200|min:5',
            'price' => 'required|integer',
            'place' => 'required|string|min:3',
            'address' => 'required',
            'banquet_type' => 'required|string',
            'food_type' => 'required|integer|max:2',
            'min_cap' => 'required|integer',
            'max_cap' => 'required|integer'
        ]);
        $b = Banquet::create([
            'name' => $this->name,
            'price' => $this->price,
            'min_cap' => $this->min_cap,
            'max_cap' => $this->max_cap,
            'place' => $this->place,
            'non_veg' => $this->food_type,
            'banquet_type' => $this->banquet_type,
            'address' => $this->address,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        dd($b->id);

        $res = $b->save();

        if ($res) {
            $this->success = false;
        } else {
            $this->myError = true;
        }
    }
}
