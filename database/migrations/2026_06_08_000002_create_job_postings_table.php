<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('job_postings', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('department');
            $table->string('location');
            $table->enum('type', ['full-time', 'part-time', 'contract', 'internship'])->default('full-time');
            $table->string('experience')->default('1-2 Years');
            $table->string('salary')->nullable();
            $table->text('description');
            $table->text('responsibilities');
            $table->text('requirements');
            $table->text('nice_to_have')->nullable();
            $table->text('benefits')->nullable();
            $table->enum('status', ['active', 'draft', 'closed'])->default('active');
            $table->date('deadline')->nullable();
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });

        DB::table('job_postings')->insert([
            'title'            => 'Digital Marketing Executive',
            'department'       => 'Digital Marketing',
            'location'         => 'Islamabad / Hybrid',
            'type'             => 'full-time',
            'experience'       => '1–2 Years',
            'salary'           => 'PKR 50,000 – 80,000 / month',
            'description'      => "We are looking for a talented and results-driven Digital Marketing Executive to join our growing team at Hawks Marketing. In this role, you will be responsible for planning, executing, and optimising digital marketing campaigns across multiple channels to drive brand awareness, engagement, and lead generation for our clients.\n\nThis is an exciting opportunity to work with a fast-growing agency, gain exposure to diverse industry clients, and develop your skills under the mentorship of experienced marketing professionals.",
            'responsibilities' => "Plan and execute SEO, social media, email, and PPC campaigns\nManage and grow client social media profiles across Facebook, Instagram, and LinkedIn\nConduct keyword research and implement on-page and off-page SEO strategies\nMonitor and report on campaign performance using Google Analytics and other tools\nCollaborate with the content team to create compelling marketing copy and visuals\nConduct competitor analysis and identify new growth opportunities\nMaintain communication with clients and provide regular performance updates\nStay updated with the latest digital marketing trends and algorithm changes",
            'requirements'     => "Bachelor's degree in Marketing, Communications, Business, or a related field\n1–2 years of hands-on experience in digital marketing\nProven experience managing social media accounts and running paid ad campaigns\nFamiliarity with Google Ads, Meta Ads Manager, and SEO tools (Ahrefs, SEMrush, or similar)\nStrong written and verbal communication skills in English\nAbility to analyse data and translate insights into actionable strategies\nSelf-motivated with the ability to manage multiple projects simultaneously",
            'nice_to_have'     => "Experience working in a digital marketing agency\nGoogle Ads or Meta Blueprint certifications\nBasic knowledge of WordPress or website CMS\nFamiliarity with email marketing platforms (Mailchimp, HubSpot)\nGraphic design skills using Canva or Adobe tools",
            'benefits'         => "Competitive salary with performance-based bonuses\nHybrid work model — flexibility to work from home and office\nProfessional growth and learning opportunities\nExposure to local and international clients across multiple industries\nFriendly, collaborative team culture\nFestival bonuses and annual leave\nFast-track career progression for high performers",
            'status'           => 'active',
            'deadline'         => null,
            'sort_order'       => 1,
            'created_at'       => now(),
            'updated_at'       => now(),
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('job_postings');
    }
};
