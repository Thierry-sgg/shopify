<?php

use App\Mail\ProduitAjoute;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Notifications\ModificationProduit;
use App\Http\Controllers\ProduitController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [MainController::class, "accueil"])->name('accueil');

Route::middleware(["auth" , "isAdmin"])->prefix("admin")->group(function () {
    Route::resource("produits", ProduitController::class);
    Route::get("export-produits",[MainController::class, "exportProduits"])->name('export');
});


Route::get("list-produits",[ProduitController::class, "index"]);



Route::get("ajouter-produit", [MainController::class, "ajouterProduit"]);

Route::get("update-produit/{produit}", [MainController::class, "updateProduit"]);

Route::get("update-produit2/{id}", [MainController::class, "updateProduit2"]);

Route::get("suppression-produit/{id}", [MainController::class, "supprimerProduit"]);

Route::get("create-category", [MainController::class, "createCategory"]);

Route::get("get-produit/{produit}", [MainController::class, "getProduit"]);

Route::get("commande", [MainController::class, "commande"]);

Route::get("collection-test", [MainController::class, "collection"]);


Route::get("test-mail", function(){
return new ProduitAjoute;

});

Route::get("test-notification", function(){
    return new ModificationProduit;

    });

//Déclaration des routes de gestion de login


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');



require __DIR__.'/auth.php';
