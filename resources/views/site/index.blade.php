@php

/** @var ?Theme     $currentTheme */
/** @var string     $pageTitle */
/** @var Collection $themes */

use App\Models\Theme;
use Illuminate\Database\Eloquent\Collection;

@endphp
@extends('layout.main')
@section('content')
    <section>
        <div class="container">
            <h1>{{ $pageTitle }}</h1>

            <form
                action="{{ route('themes.update') }}"
                method="post"
                enctype="application/x-www-form-urlencoded"
                autocomplete="off"
                novalidate
            >
                @csrf

                @php $key = 'theme_id' @endphp
                <div class="form-group">
                    <label for="{{ $key }}">{{ __('Theme') }}</label>
                    <select id="{{ $key }}" name="{{ $key }}">

                        @foreach($themes as $theme)
                            @php /** @var Theme $theme */ @endphp
                            <option
                                value="{{ $theme->id }}"
                                @selected($theme->id === $currentTheme?->id)
                            >{{ $theme->name }}</option>
                        @endforeach

                    </select>

                    @error($key)
                        <div class="form-error">{{ $message }}</div>
                    @enderror
                </div>

                <input type="submit" value="{{ __('Save') }}">
            </form>
        </div>
    </section>
@endsection

@pushif($currentTheme, 'styles')
    <link
        rel="stylesheet"
        href="{{ asset('css/themes/' . $currentTheme->name . '.css') }}"
    >
@endpushif
