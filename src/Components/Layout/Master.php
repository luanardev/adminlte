<?php

namespace Luanardev\AdminLte\Components\Layout;

use Illuminate\View\Component;

class Master extends Component
{
    
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('adminlte::layouts.master');
    }
}
