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
    public $v_date;
    public $e_detail;
    public $isBooked;

    protected $rules = [
        'review' => 'required|max:255'
    ];
    
    protected $listeners = ['submit'=> '$refresh'];

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
                $this->v_date = $book->venue_date;
                $this->e_detail = $book->event_detail;
            }else if($book->venue_date < Carbon::now()->toDateString()) {
                $this->isBooked = false;
            } 
        }
    }

    public function submit()
    {
        $banquetB = BanquetBook::create([
            'user_id' => Auth::user()->id,
            'banquet_id' => $this->banquet->id,
            'name' => $this->name,
            'email' => $this->email,
            'event_detail' => $this->e_detail,
            'mobile' => $this->number,
            'venue_date' => $this->v_date
        ]);
        $res = $banquetB->save();
        if ($res) {
            $this->isBooked = true;
            $this->emit('sumit');
            return back()->withInput();
        } else {
            return 'Error while requesting for book';
        }
    }

    public function render()
    {
        return view('livewire.book');
    }
}
