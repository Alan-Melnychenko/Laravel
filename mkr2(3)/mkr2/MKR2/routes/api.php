use App\Http\Controllers\ManufacturerController;

Route::get('/manufacturers', [ManufacturerController::class, 'index']);
Route::delete('/manufacturers/{id}', [ManufacturerController::class, 'destroy']);
