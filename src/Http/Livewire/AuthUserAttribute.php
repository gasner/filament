<?php

namespace Filament\Http\Livewire;

use Livewire\Component;

class AuthUserAttribute extends Component
{
    public $attribute;
    public $classes;

    protected $listeners = ['filament.userUpdated' => 'render'];

    public function mount(string $attribute, string $classes = '')
    {
        $this->attribute = $attribute;
        $this->classes = $classes;
    }

    public function render()
    {
        return <<<'blade'
            <span class="{{ $classes }}">{{ auth()->user()->{$this->attribute} }}</span>
        blade;
    }
}