<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Office;

class OfficeFilter extends Component
{
    public $name;
    public $num_offices;
    public $num_tables;
    public $min_price;
    public $max_price;
    public $min_size;
    public $max_size;

    public function render()
    {
        $offices = Office::orderBy('num_offices', 'ASC')->select('num_offices')->distinct()->get();
        $tables = Office::orderBy('num_tables', 'ASC')->select('num_tables')->distinct()->get();
        return view('livewire.office-filter', [
            'offices' => $offices,
            'tables' => $tables
        ]);
    }

    public function filter()
    {
        $this->emitTo('office-list', 'reloadOffices', $this->name, $this->num_offices, $this->num_tables, $this->min_price, $this->max_price, $this->min_size, $this->max_size);
    }
}
