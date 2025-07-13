<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Skill;

class SkillManager extends Component
{
    public $skills;
    public $editingId = null;
    public $category = '';
    public $name = '';
    public $description = '';

    protected $rules = [
        'category' => 'required|min:2',
        'name' => 'required|min:2',
        'description' => 'nullable|min:5'
    ];

    public function mount()
    {
        $this->loadSkills();
    }

    public function loadSkills()
    {
        $this->skills = Skill::orderBy('category')->orderBy('name')->get();
    }

    public function create()
    {
        $this->resetForm();
        $this->editingId = null;
    }

    public function edit($id)
    {
        $skill = Skill::findOrFail($id);
        $this->editingId = $skill->id;
        $this->category = $skill->category;
        $this->name = $skill->name;
        $this->description = $skill->description;
    }

    public function save()
    {
        $this->validate();

        if ($this->editingId) {
            $skill = Skill::findOrFail($this->editingId);
            $skill->update([
                'category' => $this->category,
                'name' => $this->name,
                'description' => $this->description
            ]);
            session()->flash('message', 'Skill updated successfully!');
        } else {
            Skill::create([
                'category' => $this->category,
                'name' => $this->name,
                'description' => $this->description
            ]);
            session()->flash('message', 'Skill added successfully!');
        }

        $this->resetForm();
        $this->loadSkills();
    }

    public function delete($id)
    {
        Skill::findOrFail($id)->delete();
        session()->flash('message', 'Skill deleted successfully!');
        $this->loadSkills();
    }

    public function cancel()
    {
        $this->resetForm();
    }

    private function resetForm()
    {
        $this->editingId = null;
        $this->category = '';
        $this->name = '';
        $this->description = '';
    }

    public function render()
    {
        return view('livewire.admin.skill-manager')->layout('layouts.app');
    }
}
