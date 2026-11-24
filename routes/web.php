<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PortfolioController::class, 'index'])->name('portfolio.index');
Route::get('/projects/{slug}', [PortfolioController::class, 'show'])->name('projects.show');
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');

Route::get('/preview-cv', function () {
    $path = public_path('assets/pdf_file/CV_Reyvaldi_Tri_Hanggara_Putra.pdf');

    if (!file_exists($path)) {
        abort(404, 'File CV tidak ditemukan.');
    }

    return response()->file($path, [
        'Content-Type' => 'application/pdf',
        'Content-Disposition' => 'inline; filename="CV_Reyvaldi_Tri_Hanggara_Putra.pdf"',
        'Cache-Control' => 'no-cache, no-store, must-revalidate',
        'Pragma' => 'no-cache',
        'Expires' => '0',
    ]);
})->name('cv.preview');

Route::get('/seed-now', function () {
    try {
        \Illuminate\Support\Facades\Artisan::call('migrate', ['--force' => true]);
        \Illuminate\Support\Facades\Artisan::call('db:seed', ['--force' => true]);
        return response()->json([
            'status' => 'success',
            'projects' => \App\Models\Project::count(),
            'skills' => \App\Models\Skill::count(),
        ]);
    } catch (\Throwable $e) {
        return response()->json([
            'status' => 'error',
            'message' => $e->getMessage(),
        ], 500);
    }
});

