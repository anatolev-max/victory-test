<?php

declare(strict_types=1);

namespace App\Services\Theme;

use App\Dto\Theme\ThemeStoreDto;
use App\Dto\Theme\ThemeUpdateDto;
use App\Models\Theme;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Cookie;

class ThemeService implements Contracts\ThemeServiceInterface
{
    public function getAll(): Collection
    {
        return Theme::all();
    }

    public function getCurrentTheme(): ?Theme
    {
        if ($themeId = intval(Cookie::get(Theme::THEME_COOKIE_KEY))) {
            return Theme::find($themeId);
        }

        return null;
    }

    public function store(ThemeStoreDto $themeStoreDto): ?Theme
    {
        return Theme::create([
            'name' => $themeStoreDto->name,
        ]);
    }

    public function updateCurrentTheme(ThemeUpdateDto $themeUpdateDto): void
    {
        Cookie::queue(Theme::THEME_COOKIE_KEY, $themeUpdateDto->themeId);
    }
}
