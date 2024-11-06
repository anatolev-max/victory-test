<?php

declare(strict_types=1);

namespace App\Dto\Theme;

use App\Http\Requests\Theme\ThemeUpdateRequest;

readonly class ThemeUpdateDto
{
    public function __construct(
        public int $themeId
    ) {
    }

    public static function fromRequest(ThemeUpdateRequest $request): self
    {
        return new ThemeUpdateDto(
            intval($request->theme_id),
        );
    }
}
