<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
 
class UserController extends Controller
{
    /**
     * Show a list of all of the application's users.
     */
    public function index(): View
    {
        $prod = DB::table('products')->get();
        $price = DB::table('price')->get();
 
        return view('prod.index', ['products' => $prod]);
        return view('price.index', ['price' => $price]);
    }
}