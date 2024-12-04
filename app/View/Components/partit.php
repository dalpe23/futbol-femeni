<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class partit extends Component
{
    /**
     * Create a new component instance.
     */
    public $local;
    public $visitant;
    public $data;
    public $resultat;

    public function __construct($local, $visitant, $data, $resultat)
    {
        $this->local = $local;
        $this->visitant = $visitant;
        $this->data = $data;
        $this->resultat = $resultat;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.partit');
    }
}
