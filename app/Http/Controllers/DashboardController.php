<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lead;

class DashboardController extends Controller
{
    public function index() {
        $leads = Lead::all();
        return view('dashboard')->with('leads', $leads);
    }
    public function api() {
        $leads = Lead::all();
        return response()->json($leads);
    }
    public function apiFindUser($id) {
        $leads = Lead::FindorFail($id);
        return response()->json($leads);
    }
}
