<?php

namespace App\Livewire\Emplyee;

use App\Models\Account;
use App\Models\Cook;
use App\Models\Emplyee as ModelsEmplyee;
use App\Models\Gender;
use App\Models\Image;
use App\Models\Nationalitie;
use App\Models\Place;
use App\Models\Respetion;
use App\Models\Specialization;
use App\Models\Waiter;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;
    public $status = 1, $emplye,
    $curent=1;

    public $id,$photos, 
    $email, $first_name, $last_name ,$gender
    ,$number_id ,$number_phone , $password
    ,$nationalitie ,$born_in, $addrees
    ,$worked_at ,$specialization;

    public function render()
    {
        return view('livewire.emplyee.create',[
            'emplyees'        => ModelsEmplyee::all(),
            'genders'         => Gender::all(),
            'nationalities'   => Nationalitie::all(),
            'places'          => Place::all(),
            'specializations' => Specialization::all()
        ]);
    }

    public function next()
    {
        if ($this->curent == 1) {
            $this->validate([
                'email' => 'required|unique:emplyees,email,'. $this->id,
                'password' => 'required | min:8',
                'first_name' => 'required',
                'last_name' => 'required',
                'gender'    => 'required',
                'number_id' => 'min:14|max:14|required|unique:emplyees,number_id,'. $this->id,
            ]);
            $this->curent = 2;    
        }
        else {
            $this->validate([
                'number_phone' => 'min:10|max:10|required|unique:emplyees,number_phone,'. $this->id,
                'addrees'   => 'required',
                'born_in'  => 'required|date',
                'nationalitie'  => 'required'
            ]);
            $this->curent = 3;    
        }                
        
    }

    public function previous()
    {
        $this->curent -= 1 ;
    }

    public function submit()
    {
        DB::beginTransaction();
        ModelsEmplyee::create([
            'first_name' => $this->first_name,
            'last_name'  => $this->last_name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'number_phone' => $this->number_phone,
            'address' => $this->addrees,
            'born_in' => $this->born_in,
            'number_id' => $this->number_id,
            'workerAt_id' => $this->worked_at,
            'gender_id' => $this->gender,
            'specialization_id' => $this->specialization,
            'nationalitie_id' => $this->nationalitie
        ]);
        // add new respetion 
        if ($this->specialization == "respetions") {
            Respetion::create([
                'name' => $this->first_name,
                'email' => $this->email,
                'password' => Hash::make($this->password),
            ]);
        }
        // add new waiter
        if ($this->specialization == "waiters") {
            Waiter::create([
                'name' => $this->first_name,
                'email' => $this->email,
                'password' => Hash::make($this->password),
            ]);
        }
        // add new cook
        if ($this->specialization == "cooks") {
            Cook::create([
                'name' => $this->first_name,
                'email' => $this->email,
                'password' => Hash::make($this->password),
            ]);
        }
        // add new accounter
        if ($this->specialization == "accounts") {
            Account::create([
                'name' => $this->first_name,
                'email' => $this->email,
                'password' => Hash::make($this->password),
            ]);
        }
        // add files for emplyee
        $emplyee= ModelsEmplyee::where('email',$this->email)->first();
        if (!empty($this->photos)) {
            foreach ( $this->photos as $photo){
                $name = $photo->getClientOriginalName();
                $photo->storeAs($emplyee->first_name,$photo->getClientOriginalName(),'emplyee');
                $images = new Image();
                $images->filename = $name;
                $images->imageable_id = $emplyee->id;
                $images->imageable_type = 'App\Models\Emplyee';
                $images->save();
            }
        }
        DB::commit();
        
        toastr()->success('Data has been deleted successfully!');
        return redirect()->route('emplyee.index');
    }

    public function add()
    {
        $this->status = 2;
    }
    // edit emplyee
    public function edit($idd)
    {
        $this->id = $idd;
        $this->emplye=ModelsEmplyee::findOrFail($idd);
        $this->email = $this->emplye->email;
        $this->first_name = $this->emplye->first_name;
        $this->last_name = $this->emplye->last_name;
        $this->number_id = $this->emplye->number_id;
        $this->gender = $this->emplye->gender_id;
        $this->number_phone = $this->emplye->number_phone;
        $this->nationalitie = $this->emplye->nationalitie_id;
        $this->addrees = $this->emplye->address;
        $this->born_in = $this->emplye->born_in;
        $this->worked_at = $this->emplye->workerAt_id;
        $this->specialization = $this->emplye->specialization_id;
        
        $this->status = 3;
    }

    public function update()
    {
        $emplyeeUpdate = ModelsEmplyee::findOrFail($this->id);
        if ($this->password != null) {
            $emplyeeUpdate->update([
                'password' => Hash::make($this->password)
            ]);
        }
        $emplyeeUpdate->update([
            'first_name' => $this->first_name,
            'last_name'  => $this->last_name,
            'email' => $this->email,
            'number_phone' => $this->number_phone,
            'address' => $this->addrees,
            'born_in' => $this->born_in,
            'number_id' => $this->number_id,
            'workerAt_id' => $this->worked_at,
            'gender_id' => $this->gender,
            'specialization_id' => $this->specialization,
            'nationalitie_id' => $this->nationalitie
        ]);
        toastr()->success('Data has been deleted successfully!');
        return redirect()->route('emplyee.index');
    }
}
