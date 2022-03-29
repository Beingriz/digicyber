<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Application;
use App\Models\ClientRegister;
use Livewire\WithPagination;
use App\Traits\RightInsightTrait;
use Illuminate\Support\Facades\DB;


class ClientSearch extends Component
{
    use RightInsightTrait;
    use WithPagination;
    public $Mobile_No = NULL;
    public $name;
    public $dob;
    public $address;
    public $search;
    public $n = 1;
    protected $paginationTheme = 'bootstrap';
    protected $rules = [
        'Mobile_No' => 'required |Min:10 |Max:10',
        'name' => 'required',
        'dob' => 'required',
        'address' => 'required',
    ];
    protected $messages = [
        'name.required' => 'Applicant Name Cannot be Empty',
        'dob.required' => 'Please Select Date of Birth',
        'address.required' => 'Enter Correct Address',
        'Mobile_No.required' => 'Mobile Number Cannot Be Empty',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function submit()
    {
        $this->validate();

        $exist = ClientRegister::where('Mobile_No',$this->Mobile_No)->get();
        foreach($exist as $key)
        {
            $id = $key['Id'];
            $name = $key['Name'];
        }
        if(sizeof($exist)>0)
        {
            session()->flash('message', 'Client Already Registered with Client ID'.$id);
        }
        else
        {
            $Id= 'DC'.time();
            $user_data = new ClientRegister;
            $user_data->Id= $Id;
            $user_data->Name = $this->name;
            $user_data->Mobile_No = $this->Mobile_No;
            $user_data->Email_Id = "";
            $user_data->DOB = $this->dob;
            $user_data->Address = $this->address;
            $user_data->Profile_Image = "";
            $user_data->Client_Type = "";
            $user_data->Registered_On = date("Y-m-d");
            $user_data->save();
            session()->flash('message', 'Registration for '.$this->name .' is Successfull!! '.$Id.' is New Client ID ');
            return redirect('../client_registration');
        }
    }
    public function Register($Client_Id)
    {
        $user_data = Application::Where('Client_Id',$Client_Id)->get();
        foreach ($user_data as $data)
        {
            $name = $data['Name'];
            $mobile = $data['Mobile_No'];
            $dob = $data['DOB'];

        }
        $user_data = ClientRegister::Where('Mobile_No',$mobile)->get();
        if(sizeof($user_data)>0)
        {
            session()->flash('SuccessMsg',"User Already Exist Kindly Register with other Mobile Number ");
        }
        else
        {
            $user_data = new ClientRegister;
            $user_data->Id= $Client_Id;
            $user_data->Name = $name;
            $user_data->Mobile_No = $mobile;
            $user_data->Email_Id = "";
            $user_data->DOB = $dob;
            $user_data->Address = "";
            $user_data->Profile_Image = "";
            $user_data->Client_Type = "";
            $user_data->Registered_On = date('Y-m-d');
            $user_data->save();

            session()->flash('SuccessMsg','Registration of '.$name.' is Successfull!! '.$Client_Id.' is New Client ID');

        }
    }
    public function render()
    {
        $user = ClientRegister::where('Mobile_No',$this->Mobile_No)->get();
        $app = Application::where('Mobile_No',$this->Mobile_No)->Paginate(10);

        if(sizeof($user)>=1)
        {
            foreach($user as $key)
            {
                $id = $key['Id'];
                $name = $key['Name'];
            }
            session()->flash('SuccessMsg', 'Client Already Registered with Client Id:  '.$id.' & Name : '.$name);
        }
        elseif(sizeof($app)>0)
        {
            foreach($app as $key)
            {
                $mobile = $key['Mobile_No'];
                $id = $key['Id'];
                $name = $key['Name'];
            }
            $exist = ClientRegister::Where('Mobile_No',$mobile)->get();
            if(sizeof($exist)>0)
            {
                session()->flash('SuccessMsg', 'Client Already Registered with Client Id :  '.$id.' & Name : '.$name);
            }
        }
        return view('livewire.client-search', [
            'SearchResult'=>$app, 'applications_served'=>$this->applications_served]);

    }

}
