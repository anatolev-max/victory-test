<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Services\Theme\Contracts\ThemeServiceInterface;
use Illuminate\View\View;

class SiteController extends Controller
{
    public function __construct(
        protected ThemeServiceInterface $themeService
    ) {
    }

    public function index(): View
    {
        return view('site.index', [
            'currentTheme' => $this->themeService->getCurrentTheme(),
            'pageTitle'    => __('Main'),
            'themes'       => $this->themeService->getAll(),
        ]);
    }

    public function contacts(): View
    {
        return view('site.contacts', [
            'currentTheme' => $this->themeService->getCurrentTheme(),
            'pageTitle'    => __('Contacts'),
        ]);
    }
}
