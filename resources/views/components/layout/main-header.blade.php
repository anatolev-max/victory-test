@php

/** @var ComponentAttributeBag $attributes */
/** @var string                $route */

use Illuminate\View\ComponentAttributeBag;

@endphp
<header class="main-header">
    <div class="container">
        <nav>
            <a
                class="logo"
                href="{{ route('site.main') }}"
            >
                <img src="{{ asset('img/logo.jpeg') }}" height="40" alt="">
            </a>

            <ul class="nav-list">
                <li
                    @class(['nav-item', 'active' => $route === 'site.main'])
                >
                    <a
                        class="nav-link"
                        href="{{ route('site.main') }}"
                    >{{ __('Main') }}</a>
                </li>
                <li
                    @class(['nav-item', 'active' => $route === 'site.contacts'])
                >
                    <a
                        class="nav-link"
                        href="{{ route('site.contacts') }}"
                    >{{ __('Contacts') }}</a>
                </li>
            </ul>
        </nav>
    </div>
</header>
