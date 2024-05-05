<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Gender;
use App\Models\Room;
use App\Repositry\ClientRepositryI;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ClientController extends Controller
{
    protected $client;
    public function __construct(ClientRepositryI $client)
    {
        $this->client = $client;
    }
    public function index()
    {
        
        $clients = $this->client->client();
        return view('client.index', compact('clients'));
    }

    public function create()
    {
        $data['rooms'] = $this->client->room();
        $data['genders'] = $this->client-> gender();
        return view('client.create',$data);
    }

    public function store(Request $request)
    {
        try {
            $this->client->store($request);
            toastr()->success('Data has been saved successfully!');
            return redirect()->route('client.index');

        } catch (\Throwable $th) {
            toastr()->error('Oops! Something went wrong!');
            return redirect()->back();
        }
    }

    public function edit($id)
    {
        return view('client.edit',$this->client->edit($id));
    }

    public function update(Request $request)
    {
        try {
            $this->client->update($request);
            toastr()->success('Data has been updated successfully!');
            return redirect()->route('client.index');
        } catch (\Throwable $th) {
            toastr()->error('Oops! Something went wrong!');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        try {
            $this->client->delete($request);
            toastr()->success('Data has been deleted successfully!');
            return redirect()->route('client.index');
        } catch (\Throwable $th) {
            toastr()->error('Oops! Something went wrong!');
            return redirect()->back();
        }
    }
}
