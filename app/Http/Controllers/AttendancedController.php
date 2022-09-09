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
    $id = Auth::id();

    $dt = new Carbon();
    $date = $dt->toDateString();

    $attendance = Attendance::where('user_id', $id)->where('date', $date)->first();

    // 勤務開始前
    if (empty($attendance)) {
      return view('index')->with([
        "is_attendance_start" => true,
      ]);
    }

    // 勤務終了後
    if ($attendance->end_time) {
      return view('index');
    }

    $rest = $attendance->rests->whereNull("end_time")->first();

    // 勤務開始後
    if ($attendance->start_time) {
      if (isset($rest)) {
        return view('index')->with([
          "is_rest_end" => true,
        ]);
      } else {
        return view('index')->with([
          "is_attendance_end" => true,
          "is_rest_start" => true,
        ]);
      }
    }
  }

  public function attendance()
  {
    $user = Auth::user();
    $item = ['user' => $user];
    return view('attendance', $item);
  }

  public function add()
  {
    $id = Auth::id();

    $dt = new Carbon();
    $date = $dt->toDateString();
    $time = $dt->toTimeString();

    Attendance::create([
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

  Attendance::create([
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
