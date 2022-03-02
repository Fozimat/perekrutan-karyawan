<?php

namespace App\Http\Traits;

use Illuminate\Support\Facades\Auth;

trait LoginTrait
{
    public function redirectTo()
    {
        if (Auth::user()->level == 'ADMIN') {
            return redirect('/admin');
        }
        return redirect('/pelamar');
    }
}
