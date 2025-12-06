<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;
use App\Models\Skill;
use App\Models\StudyHistory;
use App\Models\Achievement;
use App\Models\Resume;

class PortfolioSeeder extends Seeder
{
    /**
     * Seed portfolio data: projects, skills, study history, achievements, resume.
     */
    public function run(): void
    {
        // -------- Projects (updateOrCreate: safe to run many times) --------
        Project::updateOrCreate(
            ['slug' => 'smart-salon-reservation-system'],
            [
                'title'          => 'Smart Salon Reservation System',
                'category'       => 'web',
                'short_description' => 'Full-stack Laravel reservation & management system.',
                'long_description'  => 'Built with Laravel and MySQL, includes customer booking, admin dashboard and reports.',
                'github_url'     => 'https://github.com/rafi1467/Smart-Salon-Beauty-Parlour-Reservation-Management-System',
                'live_url'       => null,
                'tech_stack'     => ['Laravel', 'MySQL', 'PHP', 'JavaScript'],
                'is_featured'    => true,
                'display_order'  => 1,
            ]
        );

        Project::updateOrCreate(
            ['slug' => 'kidney-cancer-detection'],
            [
                'title'          => 'Kidney Cancer Detection',
                'category'       => 'Deep Learning',
                'short_description' => 'Deep learning pipeline for kidney cancer detection from medical images.',
                'long_description'  => null,
                'github_url'     => 'https://github.com/Samiul1902/kidney_cancer_detection_project',
                'live_url'       => null,
                'tech_stack'     => ['Python', 'PyTorch', 'OpenCV'],
                'is_featured'    => true,
                'display_order'  => 2,
            ]
        );
    }
}