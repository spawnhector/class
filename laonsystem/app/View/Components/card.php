<?php

namespace App\View\Components;

use Illuminate\View\Component;

class card extends Component
{
    public $cardCount;
    public $cardInfo;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($cardCount,$cardInfo)
    {
        $this->cardCount = $cardCount;
        $this->cardInfo = $cardInfo;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card');
    }
}
