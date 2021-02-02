<?php

namespace App\Http\Controllers;
use App\Models\Task;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ListController extends Controller
{
    public function index()
    {
        $tasks = Task::where(['user_id' => Auth::user()->id])
            ->with('user')
            ->get();
        return response()->json([
            'tasks'    => $tasks,
        ], 200);
    }
}
