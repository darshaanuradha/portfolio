<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PersonalInfo;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Skill;
use App\Models\Certification;
use App\Models\Project;

class PortfolioSeeder extends Seeder
{
    public function run(): void
    {
        // Personal Information
        PersonalInfo::create([
            'full_name' => 'G.B Darsha Anuradha',
            'address' => 'No.42/23, Railway Station Road, Katugastota',
            'phone' => '071-893-1240',
            'email' => 'darsha.anuradha2020@gmail.com',
            'date_of_birth' => '1996-03-20',
            'nic' => '960801962V',
            'summary' => 'A highly motivated and skilled Full-Stack Developer with proven experience in leading the complete lifecycle of a complex web application. Adept at architecting, developing, and deploying robust, data-driven solutions. Seeking to leverage expertise in Laravel, Livewire, and data visualization to contribute to a challenging and innovative project.'
        ]);

        // Education
        Education::create([
            'level' => 'O/L',
            'institution' => 'Vidyartha College',
            'year' => 2012,
            'subjects' => 'Science, Mathematics, Commerce, Health, Sinhala, Buddhism, English, History, Art',
            'results' => 'A – 5, B – 2, C – 1, F – 3'
        ]);

        Education::create([
            'level' => 'A/L',
            'institution' => 'Kingswood College',
            'year' => 2015,
            'subjects' => 'Combined Mathematics, Physics, Chemistry',
            'results' => null
        ]);

        // Experience
        Experience::create([
            'title' => 'Cashier',
            'company' => 'Sporting Star Company',
            'period' => '2018–2019',
            'description' => 'Handled customer transactions and inventory management.'
        ]);

        Experience::create([
            'title' => 'Computer Hardware Technician',
            'company' => 'Ehome Computers',
            'period' => '2021–2022',
            'description' => 'Provided technical support and hardware repairs.'
        ]);

        Experience::create([
            'title' => 'Lead Developer',
            'company' => 'National Pest Surveillance System (NPSS)',
            'period' => '2024-2025',
            'description' => 'Led the end-to-end development of the platform using Laravel (PHP) framework for the backend and Livewire for a dynamic, single-page application experience on the frontend. Designed and implemented a robust, scalable architecture to handle complex data relationships.'
        ]);

        // Skills
        $skills = [
            ['category' => 'Front-end Technology', 'name' => 'HTML'],
            ['category' => 'Front-end Technology', 'name' => 'CSS'],
            ['category' => 'Front-end Technology', 'name' => 'JavaScript'],
            ['category' => 'Development Languages', 'name' => 'Java'],
            ['category' => 'Development Languages', 'name' => 'JavaScript'],
            ['category' => 'Development Languages', 'name' => 'PHP'],
            ['category' => 'Development Languages', 'name' => 'Kotlin'],
            ['category' => 'Database', 'name' => 'MySQL'],
            ['category' => 'Database', 'name' => 'Oracle'],
            ['category' => 'Others', 'name' => 'Mathematical skills'],
            ['category' => 'Others', 'name' => 'Problem-solving capability'],
            ['category' => 'Others', 'name' => 'Great communication'],
            ['category' => 'Others', 'name' => 'Self-motivation'],
            ['category' => 'Others', 'name' => 'Very organized'],
        ];

        foreach ($skills as $skill) {
            Skill::create($skill);
        }

        // Certifications
        $certifications = [
            ['name' => 'Computer Hardware Technician', 'issuer' => 'VTA', 'year' => 'NVQ-4'],
            ['name' => 'Fundamentals of the Future Careers Bridge Program', 'issuer' => 'SLASSCOM', 'year' => '2023'],
            ['name' => 'IT Essentials: PC Hardware and Software', 'issuer' => 'CISCO', 'year' => '2023'],
            ['name' => 'CCNAv7: Introduction to Networks', 'issuer' => 'CISCO', 'year' => '2023'],
            ['name' => 'Introduction to Cybersecurity', 'issuer' => 'CISCO', 'year' => '2023'],
            ['name' => 'Front-End Web Development', 'issuer' => 'Open Learning Platform (OUM)', 'year' => '2023'],
            ['name' => 'Diploma in ICT', 'issuer' => 'VTA', 'year' => 'NVQ-5', 'status' => 'completed'],
        ];

        foreach ($certifications as $cert) {
            Certification::create($cert);
        }

        // Projects
        Project::create([
            'title' => 'National Pest Surveillance System (NPSS)',
            'description' => 'A comprehensive, data-driven web application designed and developed to modernize and streamline the process of agricultural pest surveillance for rice cultivation in Sri Lanka.',
            'technologies' => 'Laravel, Livewire, PHP, JavaScript, Tailwind CSS, MySQL, Larapex Charts, Maatwebsite/Excel',
            'role' => 'Lead Developer',
            'period' => '2024-2025',
            'achievements' => 'Led the end-to-end development of the platform using Laravel (PHP) framework for the backend and Livewire for a dynamic, single-page application experience on the frontend.',
            'is_featured' => true
        ]);

        Project::create([
            'title' => 'Portfolio Website',
            'description' => 'A beautiful portfolio website built with Laravel, Livewire, and SQLite with admin panel for content management.',
            'technologies' => 'Laravel, Livewire, PHP, Tailwind CSS, SQLite',
            'role' => 'Full-Stack Developer',
            'period' => '2024',
            'achievements' => 'Created a modern, responsive portfolio with admin panel for easy content management.',
            'is_featured' => true
        ]);
    }
}
