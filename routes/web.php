<?php

use App\Livewire\AboutComponent;
use App\Livewire\AgriculturalLiveStocks;
use App\Livewire\ContactComponent;
use App\Livewire\ErrorComponents;
use App\Livewire\EventComponents;
use App\Livewire\Faq;
use App\Livewire\FesidevInNations;
use App\Livewire\HealthAndWellness;
use App\Livewire\HomeComponents;
use App\Livewire\Portfolio;
use App\Livewire\ProjectComponent;
use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use App\Livewire\SocialProtection;
use App\Livewire\Volunteer;
use Illuminate\Support\Facades\Route;



// Redirect root to home
Route::redirect('/', '/home')->name('home');

// Route::get('/home', function () {
//     return view('welcome');
// })->name('home');
//public route
Route::get('/home',HomeComponents::class)->name('home.components');
Route::get('/about',AboutComponent::class)->name('about.components');
Route::get('/event',EventComponents::class)->name('event.components');
Route::get('/project',ProjectComponent::class)->name('project.components');
Route::get('/contact',ContactComponent::class)->name('contact.components');
Route::get('/volunteer',Volunteer::class)->name('volunteer.components');
Route::get('/fesidev-in-nations',FesidevInNations::class)->name('fesidev.in.nations');
Route::get('/portfolio',Portfolio::class)->name('portfolio.components');
Route::get('/health',HealthAndWellness::class)->name('health.components');
Route::get('/agricultural-live-stocks',AgriculturalLiveStocks::class)->name('agricultural.live.stocks');
Route::get('/social-protection',SocialProtection::class)->name('social.protection');
Route::get('/faq',Faq::class)->name('faq.components');
Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
});

Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});

require __DIR__.'/auth.php';
