<?php

namespace App\Http\Livewire;

use App\Models\BanquetServices;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Service extends Component
{
    public $service;
    public $banquet;
    public bool $isAdmin;
    public $services;
    protected $rules = [
        'service' => 'required|max:200|min:2'
    ];

    protected $listeners = ['refresh' => 'refresh'];
    public function mount($banquet)
    {
        $this->isAdmin = Auth::user()->user_type == 'DEV' || Auth::user()->user_type == 'ADM' ? true : false;
        $this->banquet = $banquet;
        $this->services = $banquet->banquetService;
    }

    public function refresh()
    {
        $this->services = $this->banquet->banquetService;
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
            $this->emit('refresh');
            session()->flash('addService', 'Service Added');
        } else {
            session()->flash('addService', 'Error');
        }
    }


    public function deleteService($id)
    {
        $res = BanquetServices::destroy($id);
        if ($res) {
            $this->emit('refresh');
            session()->flash('sd', 'Service Deleted');
        } else {
            session()->flash('sd', 'Error');
        }
    }


    public function render()
    {
        return view('livewire.service');
    }
}
