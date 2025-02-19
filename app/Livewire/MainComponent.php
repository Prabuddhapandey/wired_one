<?php

namespace App\Livewire;

use Livewire\Component;

class MainComponent extends Component
{
    public $currentPage = 'welcome';

    protected $listeners = ['changePage'];

    public function changePage($page)
    {
        $this->currentPage = $page;
    }

    public function render()
    {
        return view('livewire.main-component');
    }
}
