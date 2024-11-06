@php

/** @var ?Theme $currentTheme */
/** @var string $pageTitle */

use App\Enum\ThemeEnum;
use App\Models\Theme;

@endphp
@extends('layout.main')

@section('content')
    <section>
        <div class="container">
            <h1>{{ $pageTitle }}</h1>

            {{-- via blade-component --}}
            <x-contacts
                :theme="$currentTheme"
            />

            {{-- via blade-template --}}
            @if($currentTheme)
                @include('themes.'. $currentTheme->name)
            @else
                @include('themes.default')
            @endif
        </div>
    </section>
@endsection

@pushif($currentTheme, 'styles')
    <link
        rel="stylesheet"
        href="{{ asset('css/themes/' . $currentTheme->name . '.css') }}"
    >
@endpushif
