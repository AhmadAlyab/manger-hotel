<?php

namespace App\Http\Controllers\Room;

use App\Http\Controllers\Controller;
use App\Http\Requests\RoomStoreRequest;
use App\Models\Degeer;
use App\Models\Room;
use App\Models\User;
use App\Repositry\RoomRepositryI;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mail;
use App\Mail\AddRoo;
use Illuminate\Support\Facades\Mail as FacadesMail;
use Illuminate\Support\Facades\Notification;

class RoomController extends Controller
{
    protected $room;
    public function __construct(RoomRepositryI $room)
    {
        $this->room =$room;
    }
    public function index()
    {
        $rooms = $this->room->room();
        $degeers = $this->room->degeer();
        return view('room.index',compact('rooms','degeers'));
    }

    public function get_list(){
        $rooms = $this->room->room();
        return view('respetion.listroom',compact('rooms'));
    }

    public function store(RoomStoreRequest $request)
    {
        try {
            $this->room->store($request);
            // send email
            $subject = "test subject";
            $body = "test body";
            FacadesMail::to('ahmdaldyab744@gmail.com')->send(new AddRoo($subject,$body));
            toastr()->success('Data has been saved successfully!');
            return redirect()->route('room.index');

        } catch (\Throwable $th) {
            toastr()->error('Oops! Something went wrong!');
            return redirect()->back();
        }
    }

    public function update(RoomStoreRequest $request)
    {
        try {
            $this->room->update($request);
            toastr()->success('Data has been updated successfully!');
            return redirect()->route('room.index');
        } catch (\Throwable $th) {
            toastr()->error('Oops! Something went wrong!');
            return redirect()->back();
        }
    }

    public function destroy(Request $request)
    {
        
        try {
            $this->room->delete($request);
            toastr()->success('Data has been deleted successfully!');
            return redirect()->route('room.index');
        } catch (\Throwable $th) {
            toastr()->error('Oops! Something went wrong!');
            return redirect()->back();
        }
    }
}
