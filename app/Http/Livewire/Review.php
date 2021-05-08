<?php

namespace App\Http\Livewire;

use App\Models\Banquet;
use App\Models\Review as ModelsReview;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Review extends Component
{
    public $banquet;
    public $review;
    protected $rules = [
        'review' => 'required|max:255|min:5'
    ];

    public function mount(Banquet $banquet)
    {
        $this->banquet = $banquet;
    }


    public function submit()
    {
        $this->validate();
        $reviewS = ModelsReview::create([
            'user_id' => Auth::user()->id,
            'banquet_id' => $this->banquet->id,
            'name' => Auth::user()->name,
            'review' => $this->review
        ]);
        $res = $reviewS->save();
        if ($res) {
            $this->emitTo('reviews', 'refreshReviews');
            $this->review = '';
            session()->flash('reviewSubmitted', 'Thank You For Reviewing!');
        } else {
            session()->flash('reviewSubmitted', 'Error');
        }
    }


    public function render()
    {
        return view('livewire.review');
    }
}
