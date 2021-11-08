<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\DataResource;
use App\Http\Resources\PortfolioCollection;
use App\Models\Introduction;
use App\Models\Message;
use App\Models\Portfolio;
use App\Models\User;
use App\Notifications\MailNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GetDataController extends Controller
{
    public function index() {
        return new DataResource(Introduction::first());
    }

    public function sendEmail(Request $request) {
        $input = $request->all();
        $validator = Validator::make($input, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);
        if ($validator->fails()) {
            return response()->json([
                'error' => $validator->errors(),
                'success' => 'validation'
            ], 200);
        }
        $user = User::where('email', 'segun_aj@yahoo.com')->first();
        Message::create([
           'name' => $request->name,
           'email' => $request->email,
           'message' => $request->message,
        ]);
        $user->notify(new MailNotification($request->name, $request->email, $request->message));
        return response(['message' => 'sent successfully', 'status' => 200], 200);
    }
}
