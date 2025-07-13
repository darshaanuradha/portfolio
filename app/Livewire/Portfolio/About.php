<?php

namespace App\Livewire\Portfolio;

use Livewire\Component;
use App\Models\PersonalInfo;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Certification;

class About extends Component
{
    public function render()
    {
        $personalInfo = PersonalInfo::first();
        $education = Education::orderBy('year', 'desc')->get();
        $experiences = Experience::orderBy('created_at', 'desc')->get();
        $certifications = Certification::orderBy('year', 'desc')->get();

        return view('livewire.portfolio.about', [
            'personalInfo' => $personalInfo,
            'education' => $education,
            'experiences' => $experiences,
            'certifications' => $certifications
        ])->layout('layouts.app');
    }
}
