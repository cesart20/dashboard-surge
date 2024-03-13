<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

class Clientes extends Component
{
    use WithPagination;

    public $search;
    protected $paginationTheme = "bootstrap";

    public function updatingSearch()
    {
        $this->resetPage();
    }

    
    public function render()
    {
        return view('livewire.clientes');
    }
}
