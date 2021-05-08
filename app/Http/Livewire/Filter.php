<?php

namespace App\Http\Livewire;

use App\Models\Banquet;
use Livewire\Component;

class Filter extends Component
{

    public $price = 0;
    public $capacity = 0;
    public $places = [];
    public $currentPlace = 0;
    public $banquetType;

    public function mount($banquetType)
    {
        $this->banquetType = $banquetType;
        $banquets = Banquet::where('banquet_type', $banquetType)->get();
        foreach ($banquets as $value) {
            array_push($this->places, $value->place);
        }
        $this->places = array_values(array_unique($this->places));
    }


    public function render()
    {
        return view('livewire.filter');
    }

    public function applyFilter()
    {
        $banquets = Banquet::query()->where('banquet_type', $this->banquetType);

        switch ($this->price) {
            case 0:
                $banquets->whereBetween('price', [0, 300000]);
                break;
            case 1:
                $banquets->whereBetween('price', [0, 100000]);
                break;
            case 2:
                $banquets->whereBetween('price', [100000, 200000]);
                break;
            case 3:
                $banquets->whereBetween('price', [200000, 300000]);
                break;

            default:
                # code...
                break;
        }
        switch ($this->capacity) {
            case 0:
                $banquets->where('max_cap', '<=', 1600);
                break;
            case 1:
                $banquets->where('max_cap', '<', 500);
                break;
            case 2:
                $banquets->where('max_cap', '<', 1000);
                break;
            case 3:
                $banquets->where('max_cap', '<=', 1600);
                break;

            default:
                break;
        }
        if ($this->currentPlace != 0) {
            $banquets->where('place', $this->places[$this->currentPlace - 1]);
        }

        $c = $banquets->get();
        $result = $c->unique('id');
        $this->emitTo('list-banquets', 'filterBanquets', $result);
    }

    public function resetFilter()
    {
        $banquets = Banquet::where('banquet_type', $this->banquetType)->get();
        $this->price = 0;
        $this->capacity = 0;
        $this->currentPlace = 0;
        $this->emitTo('list-banquets', 'resetFilter', $banquets);
    }

    public function filterPlace($index)
    {
        $this->currentPlace = $index;
        $banquets = Banquet::query()->where('banquet_type', $this->banquetType);
        $result = [];
        if ($index == 0) {
            $result = $banquets->get();
        } else {
            $result = $banquets->where('place', $this->places[$index - 1])
                ->get();
        }
        $this->emitTo('list-banquets', 'placeFilter', $result);
    }
}
