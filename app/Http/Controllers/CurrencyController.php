<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CurrencyController extends Controller
{
    //
    public function currency()
    {
        $target = array_fill(0, 351, 0); // G3.5 = 350s and 351 = 350 + 1
        $target[0] = 1;
        $coins = [1, 5, 10, 25, 50, 100, 200];
        foreach($coins as $coin)
        {
            for($i = $coin; $i <= 350; $i++)
            {
                $target[$i] += $target[$i - $coin];
            }
        }
        // dd($target);
        // dd($target[350]);
        $data['currency'] = $target[350];
        return view('currency', $data);
    }
}
