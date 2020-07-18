<?php declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function view()
    {
        if (!Auth::check()) {
            return redirect('/');
        }

        return view('dashboard');
    }
}
