<?php

namespace App\Http\Livewire;

use Jonassiewertsen\LiveSearch\Http\Livewire\Search;

class SearchLivewire extends Search
{
    public $template;
    public $index;


    public function mount(string $template = null, string $index = null)
    {
        // You can pass these as parameters or they can be hardcoded.
        $this->template = 'livewire.search-livewire';
        $this->index = 'default';
    }
    public function render()
    {
        // return view('livewire.search-livewire',[

        // ]);
        return view($this->template, [
            'results' => $this->search($this->q, $this->index),
        ]);
    }
}
