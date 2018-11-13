<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function index() {

        return view('contacts');
    }

    public function validateMessage(Request $request) {

        $rules = [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'message' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->passes()) {

            return $this->insertMessageInTable($request);
        } else {
            return redirect()->route('contacts')->withErrors($validator)->withInput();
        }
    }

    public function insertMessageInTable(Request $request) {

        DB::table('messages')->insert([
            [
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'message' => $request->message
            ]
        ]);

        return redirect()->back()->with('message', 'Ваше сообщение успешно отправлено');
    }
}
