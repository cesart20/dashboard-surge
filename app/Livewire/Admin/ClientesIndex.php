<?php

namespace App\Livewire\Admin;

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Http;

class ClientesIndex extends Component
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
        $response = Http::get('https://jsonplaceholder.typicode.com/users');
        $users = $response->json();



        return view('livewire.admin.clientes-index', compact('users'));

    }
}