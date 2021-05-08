<?php

namespace App\Http\Livewire;

use App\Models\BanquetServices;
use Livewire\Component;

class AddService extends Component
{

    public $service;
    public $banquet;
    protected $rules = [
        'service' => 'required|max:200|min:2'
    ];

    public function mount($banquet)
    {
        $this->banquet = $banquet;
    }

    public function submit()
    {
        $this->validate();
        $serviceS = BanquetServices::create([
            'banquet_id' => $this->banquet->id,
            'service_name' => $this->service,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $res = $serviceS->save();

        if ($res) {
            $this->service = '';
            session()->flash('addService', 'Service Added');
        } else {
            session()->flash('addService', 'Error');
        }
    }

    public function render()
    {
        return view('livewire.add-service');
    }
}
