<?php

namespace App\Http\Controllers;

use App\Models\UserAccessLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserAccessLogController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        if (!$user) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        $logs = UserAccessLog::where('user_id', $user->id)
            ->orderBy('created_at', 'desc')
            ->get();

        return response()->json([
            'success' => true,
            'message' => 'Success load data',
            'data'  => $logs,
        ], 200);
    }
}
