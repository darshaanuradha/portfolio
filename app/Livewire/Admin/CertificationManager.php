<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Certification;

class CertificationManager extends Component
{
    public $certifications;
    public $editingId = null;
    public $name = '';
    public $issuer = '';
    public $year = '';
    public $description = '';
    public $status = 'completed';

    protected $rules = [
        'name' => 'required|min:2',
        'issuer' => 'required|min:2',
        'year' => 'required|min:2',
        'description' => 'nullable|min:5',
        'status' => 'required|in:completed,in_progress'
    ];

    public function mount()
    {
        $this->loadCertifications();
    }

    public function loadCertifications()
    {
        $this->certifications = Certification::orderBy('year', 'desc')->get();
    }

    public function create()
    {
        $this->resetForm();
        $this->editingId = null;
    }

    public function edit($id)
    {
        $certification = Certification::findOrFail($id);
        $this->editingId = $certification->id;
        $this->name = $certification->name;
        $this->issuer = $certification->issuer;
        $this->year = $certification->year;
        $this->description = $certification->description;
        $this->status = $certification->status;
    }

    public function save()
    {
        $this->validate();

        if ($this->editingId) {
            $certification = Certification::findOrFail($this->editingId);
            $certification->update([
                'name' => $this->name,
                'issuer' => $this->issuer,
                'year' => $this->year,
                'description' => $this->description,
                'status' => $this->status
            ]);
            session()->flash('message', 'Certification updated successfully!');
        } else {
            Certification::create([
                'name' => $this->name,
                'issuer' => $this->issuer,
                'year' => $this->year,
                'description' => $this->description,
                'status' => $this->status
            ]);
            session()->flash('message', 'Certification added successfully!');
        }

        $this->resetForm();
        $this->loadCertifications();
    }

    public function delete($id)
    {
        Certification::findOrFail($id)->delete();
        session()->flash('message', 'Certification deleted successfully!');
        $this->loadCertifications();
    }

    public function cancel()
    {
        $this->resetForm();
    }

    private function resetForm()
    {
        $this->editingId = null;
        $this->name = '';
        $this->issuer = '';
        $this->year = '';
        $this->description = '';
        $this->status = 'completed';
    }

    public function render()
    {
        return view('livewire.admin.certification-manager')->layout('layouts.app');
    }
}
