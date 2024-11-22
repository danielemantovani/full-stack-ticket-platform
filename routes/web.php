<?php

use Illuminate\Support\Facades\Route;
use App\Models\Operator;
use App\Models\Category;
use App\Models\Ticket;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    // Test 1: Recuperare tutti gli operatori
    $operators = Operator::all();
    dd($operators);

    // Test 2: Creare un nuovo operatore
    $operator = Operator::create([
        'name' => 'Jane Doe',
        'email' => 'jane@example.com',
        'available' => true,
    ]);
    dd($operator);

    // Test 3: Recuperare un operatore con i suoi ticket
    $operator = Operator::find(1); // Modifica con un ID esistente
    dd($operator->tickets);

    // Test 4: Creare una nuova categoria
    $category = Category::create([
        'name' => 'Billing Issues',
    ]);
    dd($category);

    // Test 5: Creare un nuovo ticket
    $ticket = Ticket::create([
        'title' => 'Issue with Login',
        'description' => 'The user cannot log in to the platform.',
        'status' => 'ASSIGNED',
        'operator_id' => $operator->id, // Collegato all'operatore creato sopra
        'category_id' => $category->id, // Collegato alla categoria creata sopra
    ]);
    dd($ticket);

    // Test 6: Recuperare tutti i ticket e le relazioni
    $tickets = Ticket::with(['operator', 'category'])->get();
    dd($tickets);
    return view('home');
});
