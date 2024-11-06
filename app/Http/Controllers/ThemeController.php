<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Dto\Theme\ThemeUpdateDto;
use App\Http\Requests\Theme\ThemeUpdateRequest;
use App\Services\Theme\Contracts\ThemeServiceInterface;
use Illuminate\Http\RedirectResponse;

class ThemeController extends Controller
{
    public function __construct(
        protected ThemeServiceInterface $themeService
    ) {
    }

    public function update(ThemeUpdateRequest $request): RedirectResponse
    {
        $themeUpdateDto = ThemeUpdateDto::fromRequest($request);
        $this->themeService->updateCurrentTheme($themeUpdateDto);

        return back();
    }
}
