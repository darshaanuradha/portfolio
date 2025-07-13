<?php

namespace App\Services;

use App\Models\PersonalInfo;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Skill;
use App\Models\Certification;
use App\Models\Project;
use Barryvdh\DomPDF\Facade\Pdf;

class CvPdfService
{
    public function generateCvPdf()
    {
        // Get all data
        $personalInfo = PersonalInfo::first();
        $education = Education::orderBy('year', 'desc')->get();
        $experience = Experience::orderBy('created_at', 'desc')->get();
        $skills = Skill::orderBy('category')->get();
        $certifications = Certification::orderBy('year', 'desc')->get();
        $projects = Project::orderBy('created_at', 'desc')->get();

        // Generate PDF
        $pdf = Pdf::loadView('pdf.cv', compact(
            'personalInfo',
            'education',
            'experience',
            'skills',
            'certifications',
            'projects'
        ));

        return $pdf;
    }
} 