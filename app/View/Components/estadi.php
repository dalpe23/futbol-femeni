<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class estadi extends Component
{
    public $nom;
    public $ciutat;
    public $capacitat;
    public $equip;

    public function __construct($nom, $ciutat, $capacitat, $equip)
    {
        $this->nom = $nom;
        $this->ciutat = $ciutat;
        $this->capacitat = $capacitat;
        $this->equip = $equip;
    }

    public function render(): View|Closure|string
    {
        return view('components.estadi');
    }
}
