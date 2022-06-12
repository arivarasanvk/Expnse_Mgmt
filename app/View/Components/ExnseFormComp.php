<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ExnseFormComp extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    // public $pidval;
    // public function __construct($pid)
    // {
    //     $this->pidval = $pid;
    // }
    public $pidval,$pname_val,$price_val,$crncy_val,$desc_val;
    public function __construct($pid,$pnameData,$priceData,$crncyData,$descData)
    {
        $this->pidval = $pid;
        $this->pname_val = $pnameData;
        $this->price_val = $priceData;
        $this->crncy_val = $crncyData;
        $this->desc_val = $descData;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.exnse-form-comp');
    }
}
