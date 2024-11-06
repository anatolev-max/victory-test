<?php

declare(strict_types=1);

namespace App\View\Components\Layout;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Route;
use Illuminate\View\Component;

class MainHeader extends Component
{
    public string $route;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->route = Route::currentRouteName();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layout.main-header');
    }
}
