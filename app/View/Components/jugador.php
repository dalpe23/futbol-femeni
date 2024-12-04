<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class jugador extends Component
{
    public $nom;
    public $equip;
    public $posicio;

    public function __construct($nom, $equip, $posicio)
    {
        $this->nom = $nom;
        $this->equip = $equip;
        $this->posicio = $posicio;
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.jugador');
    }
}
