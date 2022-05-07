<?php

namespace Luanardev\AdminLte\Components\Widget;

use Illuminate\View\Component;

class Flash extends Component
{
    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct() 
	{
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('adminlte::components.widget.flash');
    }
}
