<?php

namespace App\_Livewire;
use Livewire\Component;

class MainComponent extends Component
{
    public $currentPage = 'home';

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
