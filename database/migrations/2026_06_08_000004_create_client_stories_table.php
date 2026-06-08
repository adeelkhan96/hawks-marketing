<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('client_stories', function (Blueprint $table) {
            $table->id();
            $table->string('client_name');
            $table->string('industry');
            $table->string('tagline')->comment('Short win statement, e.g. "300% increase in organic traffic"');
            $table->text('challenge');
            $table->text('solution');
            $table->text('results')->comment('Bullet points, one per line');
            $table->string('featured_image')->nullable();
            $table->string('client_logo')->nullable();
            $table->string('website_url')->nullable();
            $table->unsignedInteger('sort_order')->default(0);
            $table->boolean('active')->default(true);
            $table->timestamps();
        });

        DB::table('client_stories')->insert([
            'client_name'     => 'TechBridge Solutions',
            'industry'        => 'IT & Software',
            'tagline'         => '320% increase in qualified leads within 4 months',
            'challenge'       => 'TechBridge Solutions had a strong product but struggled to communicate their value proposition online. Their website was generating fewer than 20 organic leads per month, and their social media presence was virtually non-existent. They needed a complete digital overhaul to compete with established players in the Pakistani tech market.',
            'solution'        => 'Hawks Marketing launched a comprehensive digital strategy: a full SEO audit and restructure targeting high-intent B2B keywords, a LinkedIn-first content programme showcasing TechBridge\'s expertise, and targeted Google Ads campaigns to capture decision-makers actively searching for their services. We also redesigned their service pages to improve conversion rate.',
            'results'         => "320% increase in organic search traffic\n4x growth in qualified inbound leads per month\nLinkedIn follower count grew from 200 to 3,400 in 4 months\nCost-per-lead reduced by 58% vs. previous paid campaigns\nTop-3 Google rankings for 12 target keywords",
            'featured_image'  => null,
            'client_logo'     => null,
            'website_url'     => null,
            'sort_order'      => 1,
            'active'          => true,
            'created_at'      => now(),
            'updated_at'      => now(),
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('client_stories');
    }
};
