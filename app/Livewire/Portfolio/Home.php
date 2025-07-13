<?php

namespace App\Livewire\Portfolio;

use Livewire\Component;
use App\Models\PersonalInfo;
use App\Models\Project;
use App\Models\Skill;

class Home extends Component
{
    public function render()
    {
        $personalInfo = PersonalInfo::first();
        $featuredProjects = Project::where('is_featured', true)->take(3)->get();
        $skills = Skill::all()->groupBy('category');

        return view('livewire.portfolio.home', [
            'personalInfo' => $personalInfo,
            'featuredProjects' => $featuredProjects,
            'skills' => $skills
        ])->layout('layouts.app');
    }
}
