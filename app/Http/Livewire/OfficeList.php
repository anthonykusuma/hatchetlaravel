<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Office;

class OfficeList extends Component
{
    public $offices;

    protected $listeners = ['reloadOffices'];

    public function mount()
    {
        $this->offices = Office::get();
    }

    public function render()
    {
        usleep(250000);
        return view('livewire.office-list');
    }

    public function reloadOffices($name, $num_offices, $num_tables, $min_price, $max_price, $min_size, $max_size)
    {
        $this->offices = Office::query();

        if ($name) {
            $this->offices = $this->offices->where('name', 'LIKE', '%' . $name . '%');
        }

        if ($num_offices) {
            $this->offices = $this->offices->where('num_offices', $num_offices);
        }

        if ($num_tables) {
            $this->offices = $this->offices->where('num_tables', $num_tables);
        }

        if ($min_price && $max_price) {
            $this->offices = $this->offices->whereBetween('price', [$min_price, $max_price]);
        } elseif ($min_price) {
            $this->offices = $this->offices->where('price', '>=', $min_price);
        } elseif ($max_price) {
            $this->offices = $this->offices->where('price', '<=', $max_price);
        }

        if ($min_size && $max_size) {
            $this->offices = $this->offices->whereBetween('sqm', [$min_size, $max_size]);
        } elseif ($min_size) {
            $this->offices = $this->offices->where('sqm', '>=', $min_size);
        } elseif ($max_size) {
            $this->offices = $this->offices->where('sqm', '<=', $max_size);
        }


        $this->offices = $this->offices->get();
    }

}
