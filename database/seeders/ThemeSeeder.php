<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Dto\Theme\ThemeStoreDto;
use App\Enum\ThemeEnum;
use App\Services\Theme\Contracts\ThemeServiceInterface;
use Illuminate\Database\Seeder;

class ThemeSeeder extends Seeder
{
    public function __construct(
        protected ThemeServiceInterface $themeService
    ) {
    }

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (ThemeEnum::cases() as $theme) {
            $themeStoreDto = ThemeStoreDto::fromArray([
                'name' => $theme->value,
            ]);

            $this->themeService->store($themeStoreDto);
        }
    }
}
