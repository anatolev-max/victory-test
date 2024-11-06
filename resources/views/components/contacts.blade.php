@php

/** @var ComponentAttributeBag $attributes */
/** @var ?Theme                $theme */

use App\Enum\ThemeEnum;
use App\Models\Theme;
use Illuminate\View\ComponentAttributeBag;

@endphp
@switch($theme?->name)
    @case(ThemeEnum::Classic->value)
        <p>Show must go on!</p>
        @break
    @case(ThemeEnum::Cuba->value)
        <p>We are the champions!</p>
        @break
    @default
        <p>Queen</p>
@endswitch
