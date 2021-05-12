<?php

namespace App\Http\Livewire;

use App\Models\Banquet;
use App\Models\BanquetBook;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Book extends Component
{
    public $banquet;
    public $name;
    public $number;
    public $email;
    public $venue_date;
    public $event_detail;
    public $isVerified = false;
    public $isBooking = false;
    public $otpSent = false;
    public $isBooked;


    protected $listeners = [
        'submit' => '$refresh',
        'verified' => 'submit',
        'OTPsent' => 'otpSent'
    ];



    public function otpSent()
    {
        $this->otpSent = true;
    }
    public function mount(Banquet $banquet)
    {
        $this->banquet = $banquet;
        $book = BanquetBook::where('user_id', Auth::user()->id)->where('banquet_id', $banquet->id)->get()->last();
        if ($book != NULL) {
            if ($book->venue_date > Carbon::now()->toDateString()) {
                $this->isBooked = true;
                $this->name = $book->name;
                $this->number = $book->mobile;
                $this->email = $book->email;
                $this->venue_date = $book->venue_date;
                $this->event_detail = $book->event_detail;
            } else if ($book->venue_date < Carbon::now()->toDateString()) {
                $this->isBooked = false;
            }
        } else {
            $this->name = auth()->user()->name;
            $this->number = auth()->user()->mobile;
            $this->email = auth()->user()->email;
        }
    }

    public function isValidated()
    {
        $this->isBooking = $this->validate([
            'name' => 'required|string|min:6|max:50',
            'number' => 'required|regex:/[0-9]{10}/',
            'email' => 'required|email',
            'venue_date' => 'required|date|date_format:Y-m-d|after_or_equal:' . date('Y-m-d'),
            'event_detail' => 'required|string|min:10'
        ]);
        if ($this->isBooking) {
            $this->dispatchBrowserEvent('v');
        }
    }

    public function submit()
    {

        $banquetB = BanquetBook::create([
            'user_id' => Auth::user()->id,
            'banquet_id' => $this->banquet->id,
            'name' => $this->name,
            'email' => $this->email,
            'event_detail' => $this->event_detail,
            'mobile' => $this->number,
            'venue_date' => $this->venue_date
        ]);
        $res = $banquetB->save();
        if ($res) {
            $this->isBooked = true;
            $this->isBooking = false;
            $this->emit('submit');
        } else {
            session()->flash('nVerified', 'Error while requesting for book');
        }
    }

    public function render()
    {
        return view('livewire.book');
    }
}
