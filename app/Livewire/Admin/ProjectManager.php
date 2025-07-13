<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Project;

class ProjectManager extends Component
{
    public $projects;
    public $editingId = null;
    public $title = '';
    public $description = '';
    public $technologies = '';
    public $role = '';
    public $period = '';
    public $achievements = '';
    public $image = '';
    public $github_url = '';
    public $live_url = '';
    public $is_featured = false;

    protected $rules = [
        'title' => 'required|min:2',
        'description' => 'required|min:10',
        'technologies' => 'required|min:2',
        'role' => 'nullable|min:2',
        'period' => 'nullable|min:2',
        'achievements' => 'nullable|min:5',
        'image' => 'nullable|url',
        'github_url' => 'nullable|url',
        'live_url' => 'nullable|url',
        'is_featured' => 'boolean'
    ];

    public function mount()
    {
        $this->loadProjects();
    }

    public function loadProjects()
    {
        $this->projects = Project::orderBy('created_at', 'desc')->get();
    }

    public function create()
    {
        $this->resetForm();
        $this->editingId = null;
    }

    public function edit($id)
    {
        $project = Project::findOrFail($id);
        $this->editingId = $project->id;
        $this->title = $project->title;
        $this->description = $project->description;
        $this->technologies = $project->technologies;
        $this->role = $project->role;
        $this->period = $project->period;
        $this->achievements = $project->achievements;
        $this->image = $project->image;
        $this->github_url = $project->github_url;
        $this->live_url = $project->live_url;
        $this->is_featured = $project->is_featured;
    }

    public function save()
    {
        $this->validate();

        if ($this->editingId) {
            $project = Project::findOrFail($this->editingId);
            $project->update([
                'title' => $this->title,
                'description' => $this->description,
                'technologies' => $this->technologies,
                'role' => $this->role,
                'period' => $this->period,
                'achievements' => $this->achievements,
                'image' => $this->image,
                'github_url' => $this->github_url,
                'live_url' => $this->live_url,
                'is_featured' => $this->is_featured
            ]);
            session()->flash('message', 'Project updated successfully!');
        } else {
            Project::create([
                'title' => $this->title,
                'description' => $this->description,
                'technologies' => $this->technologies,
                'role' => $this->role,
                'period' => $this->period,
                'achievements' => $this->achievements,
                'image' => $this->image,
                'github_url' => $this->github_url,
                'live_url' => $this->live_url,
                'is_featured' => $this->is_featured
            ]);
            session()->flash('message', 'Project added successfully!');
        }

        $this->resetForm();
        $this->loadProjects();
    }

    public function delete($id)
    {
        Project::findOrFail($id)->delete();
        session()->flash('message', 'Project deleted successfully!');
        $this->loadProjects();
    }

    public function cancel()
    {
        $this->resetForm();
    }

    private function resetForm()
    {
        $this->editingId = null;
        $this->title = '';
        $this->description = '';
        $this->technologies = '';
        $this->role = '';
        $this->period = '';
        $this->achievements = '';
        $this->image = '';
        $this->github_url = '';
        $this->live_url = '';
        $this->is_featured = false;
    }

    public function render()
    {
        return view('livewire.admin.project-manager')->layout('layouts.app');
    }
}
