<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Education;
use Illuminate\Support\Facades\Auth;

class EducationManager extends Component
{
    public $educations;
    public $editingId = null;
    public $level = '';
    public $institution = '';
    public $year = '';
    public $subjects = '';
    public $results = '';

    protected $rules = [
        'level' => 'required|min:2',
        'institution' => 'required|min:2',
        'year' => 'required|integer|min:1900|max:2030',
        'subjects' => 'required|min:2',
        'results' => 'nullable'
    ];

    public function mount()
    {
        // Check if user is authenticated and is admin
        if (!Auth::check() || !Auth::user()->is_admin) {
            return redirect()->route('admin.login');
        }

        $this->loadEducations();
    }

    public function loadEducations()
    {
        $this->educations = Education::orderBy('year', 'desc')->get();
    }

    public function create()
    {
        $this->resetForm();
        $this->editingId = null;
    }

    public function edit($id)
    {
        $education = Education::findOrFail($id);
        $this->editingId = $education->id;
        $this->level = $education->level;
        $this->institution = $education->institution;
        $this->year = $education->year;
        $this->subjects = $education->subjects;
        $this->results = $education->results;
    }

    public function save()
    {
        $this->validate();

        if ($this->editingId) {
            $education = Education::findOrFail($this->editingId);
            $education->update([
                'level' => $this->level,
                'institution' => $this->institution,
                'year' => $this->year,
                'subjects' => $this->subjects,
                'results' => $this->results
            ]);
            session()->flash('message', 'Education updated successfully!');
        } else {
            Education::create([
                'level' => $this->level,
                'institution' => $this->institution,
                'year' => $this->year,
                'subjects' => $this->subjects,
                'results' => $this->results
            ]);
            session()->flash('message', 'Education added successfully!');
        }

        $this->resetForm();
        $this->loadEducations();
    }

    public function delete($id)
    {
        Education::findOrFail($id)->delete();
        session()->flash('message', 'Education deleted successfully!');
        $this->loadEducations();
    }

    public function cancel()
    {
        $this->resetForm();
    }

    private function resetForm()
    {
        $this->editingId = null;
        $this->level = '';
        $this->institution = '';
        $this->year = '';
        $this->subjects = '';
        $this->results = '';
    }

    public function render()
    {
        return view('livewire.admin.education-manager')->layout('layouts.app');
    }
}
