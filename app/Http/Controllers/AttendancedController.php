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
    $user = Auth::user();
    $param = ['user' =>$user];
    return view('index', $param);
  }

  public function attendance()
  {
    $user = Auth::user();
    $item = ['user' => $user];
    return view('attendance', $item);
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
        'start_time' => $time
    ]);
    
    return redirect('/');
  }

  public function save(Request $request)
  {
    $id = Auth::id();

    $dt = new Carbon();
    $date = $dt->toDateString();
    $time = $dt->toTimeString();

  attendance::create([
    'user_id' => $id,
    'date' => $date,
    'end_time' => $time
  ]);

    return redirect('/');
  }

  public function list()
  {
    $items = Attendance::Paginate(5);
    return view('attendance', ['items' => $items]);
  }


}
