<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Reviews extends Component
{   
    public $banquet;
    public $reviews;
    protected $listeners = ['refreshReviews' => 'refreshReviews'];

    public function mount($banquet)
    {
        $this->banquet = $banquet;
        $this->reviews = $banquet->reviews;
    }

    public function refreshReviews()
    {
        $this->reviews =$this->banquet->reviews;
        
    }

    public function render()
    {
        return view('livewire.reviews');
    }
}
