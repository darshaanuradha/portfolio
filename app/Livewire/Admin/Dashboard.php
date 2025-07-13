<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\PersonalInfo;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Skill;
use App\Models\Certification;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;

class Dashboard extends Component
{
    public function mount()
    {
        // Check if user is authenticated and is admin
        if (!Auth::check() || !Auth::user()->is_admin) {
            return redirect()->route('admin.login');
        }
    }

    public function render()
    {
        $stats = [
            'personal_info' => PersonalInfo::count(),
            'education' => Education::count(),
            'experiences' => Experience::count(),
            'skills' => Skill::count(),
            'certifications' => Certification::count(),
            'projects' => Project::count(),
            'featured_projects' => Project::where('is_featured', true)->count(),
        ];

        return view('livewire.admin.dashboard', [
            'stats' => $stats
        ])->layout('layouts.app');
    }
}
