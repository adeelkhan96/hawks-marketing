<?php

namespace Database\Seeders;

use App\Models\PageContent;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        // Create default admin user
        User::firstOrCreate(
            ['email' => 'admin@hawksmarketing.com'],
            [
                'name'     => 'Admin',
                'password' => Hash::make('Admin@2026!'),
                'role'     => 'admin',
            ]
        );

        // Default editable content for the home page
        $contents = [
            // Banner section
            ['page' => 'home', 'section' => 'banner', 'key' => 'heading',
             'value' => 'Transform Your <em>Vision</em> into Digital Success with <em>Hawks Marketing</em>'],
            ['page' => 'home', 'section' => 'banner', 'key' => 'subtext',
             'value' => 'Where ambition meets execution! At Hawks Marketing, a results-focused digital marketing agency, we transform strategic ideas into tangible growth and sustainable business achievements.'],

            // Services section
            ['page' => 'home', 'section' => 'services', 'key' => 'heading',
             'value' => 'Our Core Services'],

            // Banner image
            ['page' => 'home', 'section' => 'banner', 'key' => 'image',
             'value' => 'assets/images/slide-01.jpg'],

            // About section
            ['page' => 'home', 'section' => 'about', 'key' => 'heading',
             'value' => 'Know Us Better'],
            ['page' => 'home', 'section' => 'about', 'key' => 'subheading',
             'value' => 'Hawks Marketing - Results-Driven Digital Marketing Agency'],
            ['page' => 'home', 'section' => 'about', 'key' => 'body',
             'value' => 'With proven track record and industry expertise, Hawks Marketing ranks among the premier digital marketing agencies, empowering organizations with goal-oriented digital strategies. Our talented professionals understand your unique vision and develop customized marketing initiatives that deliver quantifiable growth. We blend innovation, insights, and execution to enhance your brand\'s visibility and performance. At Hawks Marketing, your growth is our mission—we succeed when you thrive.'],
            ['page' => 'home', 'section' => 'about', 'key' => 'right_heading',
             'value' => 'Our Approach'],
            ['page' => 'home', 'section' => 'about', 'key' => 'data_powered',
             'value' => 'Decisions backed by analytics and validated metrics, guaranteeing genuine ROI and continuous expansion.'],
            ['page' => 'home', 'section' => 'about', 'key' => 'client_centered',
             'value' => 'Your audience, objectives, and marketplace at the heart of every strategy we craft.'],
            ['page' => 'home', 'section' => 'about', 'key' => 'results_focused',
             'value' => 'Every interaction, view, and transaction contributes to tangible business results for your organization.'],
        ];

        foreach ($contents as $content) {
            PageContent::firstOrCreate(
                ['page' => $content['page'], 'section' => $content['section'], 'key' => $content['key']],
                ['value' => $content['value']]
            );
        }

        $this->command->info('Admin user: admin@hawksmarketing.com / Admin@2026!');
    }
}
