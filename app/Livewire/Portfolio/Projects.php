<?php

namespace App\Livewire\Portfolio;

use Livewire\Component;
use App\Models\Project;

class Projects extends Component
{
    public function render()
    {
        $projects = Project::orderBy('created_at', 'desc')->get();

        return view('livewire.portfolio.projects', [
            'projects' => $projects
        ])->layout('layouts.app');
    }
}
