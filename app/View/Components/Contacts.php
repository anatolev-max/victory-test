<?php

declare(strict_types=1);

namespace App\View\Components;

use App\Models\Theme;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Contacts extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public ?Theme $theme = null,
    ) {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.contacts');
    }
}
