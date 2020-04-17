<?php

namespace App\Http\Controllers;

use App\Count;
use App\Setting;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    // new controller instance
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('super');
    }

    public function index() {
        // mount blogers info
        $master = User::findOrFail(1);
        // mount storage disk info
        $file_disk = Setting::where('key', 'file_disk') -> value('value');

        return view('admin', [
            'master' => $master,
            'file_disk' => $file_disk
        ]);
    }

    public function dashboard_api() {
        $visits_count = DB::table('visits')-> count();
        $date = Carbon::today()->subDay(19);
        $visits_arr = array();
        $visits_max = 0;
        for ($i = 0; $i < 20; $i ++) {
            $count = DB::table('visits')->whereDate('created_at', $date->toDateString()) -> count();
            array_push($visits_arr, array(
                'x' => $date -> toDateString(),
                'y' => $count
            ));
            $date = $date -> addDay();
            if ($count > $visits_max) {
                $visits_max = $count;
            }
        }

        $visits_today = $visits_arr[19]['y'];
        $visits_day_max = Count::where('key', 'visits_day_max')->first();
        if ($visits_max > $visits_day_max -> value) {
            $visits_day_max -> value = $visits_max;
            $visits_day_max.save();
        }

        $articles_count = DB::table('articles')->count();
        $articles_today = DB::table('articles')->whereDate('created_at', Carbon::today()->toDateString())->count();
        $comments_count = DB::table('comments')->count();
        $comments_today = DB::table('comments')->whereDate('created_at', Carbon::today()-> toDateString())->count();

        return response()->json([
            'visits_count'=>$visits_count,
            'visits_arr'=>$visits_arr,
            'visits_today'=> $visits_today,
            'visits_day_max'=> $visits_day_max,
            'articles_count'=> $articles_count,
            'articles_today'=> $articles_today,
            'comments_count'=> $comments_count,
            'comments_today'=> $comments_today
        ]);
    }
}
