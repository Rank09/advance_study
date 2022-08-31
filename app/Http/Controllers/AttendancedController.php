<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AttendancedController extends Controller
{
  public function index()
  {
    return view('inedex');
  }

  public function add(Request $request)
  {
    $id = Auth::id();

    $dt=new Carbon();
    $date = $dt->toDateString();
    $time = $dt->toTimeString();

    attendance::create([
        'user_id' => $id,
        'date' => $date,
        'work_start' => $time
    ]);

    return redirect('/');
  }
}
