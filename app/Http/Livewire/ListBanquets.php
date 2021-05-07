<?php

namespace App\Http\Livewire;

use App\Models\Banquet;
use Livewire\Component;

class ListBanquets extends Component
{
    public $banquets;
    protected $listeners = [
        'filterBanquets' => 'filterBanquets',
        'resetFilter' => 'resetFilter',
        'placeFilter' => 'placeFilter'
    ];
    public function mount($banquets)
    {
        $this->banquets = $banquets;
    }

    public function filterBanquets($banquets)
    {
        $this->banquets = Banquet::hydrate($banquets);
    }
    public function resetFilter($banquets)
    {
        $this->banquets = Banquet::hydrate($banquets);
    }
    public function placeFilter($banquets)
    {
        $this->banquets = Banquet::hydrate($banquets);
    }

    public function render()
    {
        return view('livewire.list-banquets');
    }
}
