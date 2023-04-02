<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class AgeController extends Controller
{
    public function age (int $year, int $month = null, int $day = null) {
        $today = new \DateTime(date('Y-m-d h:i:s'));
        $userBirthday = new \DateTime(\DateTimeImmutable::createFromFormat("Y-m-d", $year.$month.$day));
        $monthDiff = $today->diff($userBirthday);
        return view('idade', ['year' => $year, 'month' => $month, 'day' => $day, 'today' => $today, 'userBirthday' => $userBirthday, 'monthDiff' => $monthDiff]);
     }
}
