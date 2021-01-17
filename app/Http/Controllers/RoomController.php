<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


class RoomController extends Controller
{
    public function index()
    {
        $rooms = DB::select('select u.name as user_name, r.name as room_name, ur.status as status from user u inner join user_room ur on u.id = ur.user_id
inner join room r on ur.room_id = r.id');
        return response()->json([
            'code' => 200,
            'message' => 'success',
            'data' => [
                'room' => $rooms
            ]
        ], 200);


    }
}
