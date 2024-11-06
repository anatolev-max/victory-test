<?php

declare(strict_types=1);

namespace App\Services\Theme\Contracts;

use App\Dto\Theme\ThemeStoreDto;
use App\Dto\Theme\ThemeUpdateDto;
use App\Models\Theme;
use Illuminate\Database\Eloquent\Collection;

interface ThemeServiceInterface
{
    public function getAll(): Collection;

    public function getCurrentTheme(): ?Theme;

    public function store(ThemeStoreDto $themeStoreDto): ?Theme;

    public function updateCurrentTheme(ThemeUpdateDto $themeUpdateDto): void;
}
