<?php

declare(strict_types=1);

namespace App\Dto\Theme;

readonly class ThemeStoreDto
{
    public function __construct(
        public string $name,
    ) {
    }

    public static function fromArray(array $data): self
    {
        return new ThemeStoreDto(
            $data['name'],
        );
    }
}
