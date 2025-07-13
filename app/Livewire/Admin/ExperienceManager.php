<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Experience;

class ExperienceManager extends Component
{
    public $experiences;
    public $editingId = null;
    public $title = '';
    public $company = '';
    public $period = '';
    public $description = '';

    protected $rules = [
        'title' => 'required|min:2',
        'company' => 'required|min:2',
        'period' => 'required|min:2',
        'description' => 'nullable|min:10'
    ];

    public function mount()
    {
        $this->loadExperiences();
    }

    public function loadExperiences()
    {
        $this->experiences = Experience::orderBy('created_at', 'desc')->get();
    }

    public function create()
    {
        $this->resetForm();
        $this->editingId = null;
    }

    public function edit($id)
    {
        $experience = Experience::findOrFail($id);
        $this->editingId = $experience->id;
        $this->title = $experience->title;
        $this->company = $experience->company;
        $this->period = $experience->period;
        $this->description = $experience->description;
    }

    public function save()
    {
        $this->validate();

        if ($this->editingId) {
            $experience = Experience::findOrFail($this->editingId);
            $experience->update([
                'title' => $this->title,
                'company' => $this->company,
                'period' => $this->period,
                'description' => $this->description
            ]);
            session()->flash('message', 'Experience updated successfully!');
        } else {
            Experience::create([
                'title' => $this->title,
                'company' => $this->company,
                'period' => $this->period,
                'description' => $this->description
            ]);
            session()->flash('message', 'Experience added successfully!');
        }

        $this->resetForm();
        $this->loadExperiences();
    }

    public function delete($id)
    {
        Experience::findOrFail($id)->delete();
        session()->flash('message', 'Experience deleted successfully!');
        $this->loadExperiences();
    }

    public function cancel()
    {
        $this->resetForm();
    }

    private function resetForm()
    {
        $this->editingId = null;
        $this->title = '';
        $this->company = '';
        $this->period = '';
        $this->description = '';
    }

    public function render()
    {
        return view('livewire.admin.experience-manager')->layout('layouts.app');
    }
}
