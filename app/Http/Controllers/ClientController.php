<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class ClientController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\Models\User  $model
     * @return \Illuminate\View\View
     */

    public function index()
    {

        $clients = Client::get();

        return view("pages.clients", compact('clients'));        
    }
    public function addClient(Request $request)
    {
        //dd($request); 

        $validator = Validator::make(request()->all(), [
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'contact' => 'required|max:10',
            'gender' => 'required',
            'email_address' => 'email|max:255',
            'year' => 'required',
            'month' => 'required',
            'day' => 'required',
            'street_no' => 'required',
            'street_address' => 'required',
            'city' => 'required',
        ]);
        if ($validator->fails()) {
            dd('hello');
            return redirect()->back();
        }

        try {

            $client = Client::create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'contact' => $request->contact,
                'gender' => $request->gender,
                'email_address' => $request->email_address,
                'date_of_birth' => "$request->year" . "-" . "$request->month" . "-" . "$request->day",
                'street_no' => $request->street_no,
                'street_address' => $request->street_address,
                'city' => $request->city,
                'is_active' => $request->is_active ? true : false,
            ]);

            $client->save();

            $clients = Client::get();

            //dd($client);

            return view("pages.clients", compact('clients'));
        } catch (\Exception $exception) {
            dd($exception);
            Log::error($exception);
        }
    }

    public function updateClient(Request $request)
    {
        $request;
    }
}
