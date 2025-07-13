<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\PersonalInfo;
use Illuminate\Support\Facades\Auth;

class PersonalInfoManager extends Component
{
    public $personalInfo;
    public $full_name = '';
    public $address = '';
    public $phone = '';
    public $email = '';
    public $date_of_birth = '';
    public $nic = '';
    public $summary = '';

    protected $rules = [
        'full_name' => 'required|min:2',
        'address' => 'required',
        'phone' => 'required',
        'email' => 'required|email',
        'date_of_birth' => 'required|date',
        'nic' => 'required',
        'summary' => 'required|min:10'
    ];

    public function mount()
    {
        // Check if user is authenticated and is admin
        if (!Auth::check() || !Auth::user()->is_admin) {
            return redirect()->route('admin.login');
        }

        $this->personalInfo = PersonalInfo::first();
        if ($this->personalInfo) {
            $this->full_name = $this->personalInfo->full_name;
            $this->address = $this->personalInfo->address;
            $this->phone = $this->personalInfo->phone;
            $this->email = $this->personalInfo->email;
            $this->date_of_birth = $this->personalInfo->date_of_birth->format('Y-m-d');
            $this->nic = $this->personalInfo->nic;
            $this->summary = $this->personalInfo->summary;
        }
    }

    public function save()
    {
        $this->validate();

        if ($this->personalInfo) {
            $this->personalInfo->update([
                'full_name' => $this->full_name,
                'address' => $this->address,
                'phone' => $this->phone,
                'email' => $this->email,
                'date_of_birth' => $this->date_of_birth,
                'nic' => $this->nic,
                'summary' => $this->summary
            ]);
        } else {
            PersonalInfo::create([
                'full_name' => $this->full_name,
                'address' => $this->address,
                'phone' => $this->phone,
                'email' => $this->email,
                'date_of_birth' => $this->date_of_birth,
                'nic' => $this->nic,
                'summary' => $this->summary
            ]);
        }

        session()->flash('message', 'Personal information saved successfully!');
    }

    public function render()
    {
        return view('livewire.admin.personal-info-manager')->layout('layouts.app');
    }
}
