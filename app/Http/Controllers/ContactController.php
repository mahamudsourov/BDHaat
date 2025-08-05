<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function store(Request $request){
        $data = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string|max:500',
        ]);
        if ($data->fails()) {
            return response()->json(['errors' => $data->errors()], 422);
        }
        Message::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject ?? 'No Subject',
            'message' => $request->message,
        ]);
        return response()->json(['success' => 'Message sent successfully!'], 200);
    }
}
