<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('excerpt')->nullable();
            $table->longText('content');
            $table->string('featured_image')->nullable();
            $table->enum('layout', ['standard', 'full-width', 'magazine'])->default('standard');
            $table->string('author')->default('Hawks Marketing');
            $table->enum('status', ['draft', 'published'])->default('draft');
            $table->timestamp('published_at')->nullable();
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->timestamps();
        });

        // Seed one sample published blog post
        DB::table('blogs')->insert([
            'title'            => 'The Ultimate Guide to SEO in 2026: Strategies That Actually Work',
            'slug'             => 'ultimate-guide-seo-2026-strategies-that-work',
            'excerpt'          => 'Search engine optimization is evolving faster than ever. Discover the proven SEO strategies driving real results in 2026 — from E-E-A-T content signals to AI-powered keyword research and Core Web Vitals optimization.',
            'content'          => '<h2>Why SEO Still Matters in 2026</h2><p>Despite the rise of AI-generated answers and zero-click results, organic search remains one of the highest-ROI digital channels for businesses. Over 68% of all online experiences begin with a search engine — but the rules of the game have fundamentally changed.</p><p>At Hawks Marketing, we\'ve spent years helping businesses across Pakistan and beyond build sustainable organic search presence. In this guide, we break down exactly what\'s working right now.</p><h2>1. E-E-A-T: Experience, Expertise, Authoritativeness, Trust</h2><p>Google\'s quality rater guidelines now emphasize <strong>Experience</strong> as a ranking signal alongside Expertise, Authoritativeness, and Trust. Your content needs to demonstrate first-hand experience — not just theoretical knowledge.</p><p><strong>How to strengthen E-E-A-T:</strong></p><ul><li>Publish case studies with real client results and measurable data</li><li>Add author bios with credentials and professional links</li><li>Include original research, surveys, and proprietary data rather than recycling existing content</li><li>Build genuine backlinks from industry publications and media</li><li>Maintain a verified, complete Google Business Profile</li></ul><h2>2. Core Web Vitals Are Non-Negotiable</h2><p>Page experience signals — Largest Contentful Paint (LCP), Interaction to Next Paint (INP), and Cumulative Layout Shift (CLS) — directly affect your rankings. Sites that fail Core Web Vitals thresholds are consistently outranked by technically sound competitors.</p><p><strong>Target benchmarks:</strong></p><ul><li><strong>LCP:</strong> Under 2.5 seconds</li><li><strong>INP:</strong> Under 200 milliseconds</li><li><strong>CLS:</strong> Under 0.1</li></ul><p>Use Google PageSpeed Insights and Search Console\'s Core Web Vitals report to identify and fix issues on your most important landing pages first.</p><h2>3. AI-Powered Keyword Research &amp; Topic Clusters</h2><p>Traditional keyword research still matters, but AI has transformed how winning SEO teams find opportunities. Instead of targeting isolated keywords, the focus in 2026 is on <strong>topic clusters</strong> — comprehensive content hubs that cover a subject from every angle.</p><p>A winning keyword strategy now looks like:</p><ul><li>Identify a pillar topic (e.g., "Social Media Marketing Pakistan")</li><li>Map 15–30 supporting cluster keywords around it</li><li>Build strong internal linking between pillar and cluster pages</li><li>Target featured snippets with structured, question-and-answer content</li></ul><h2>4. Technical SEO: The Foundation That Cannot Be Skipped</h2><p>Even brilliant content fails to rank if your technical foundation is broken. A comprehensive technical SEO audit should cover:</p><ul><li><strong>Crawlability:</strong> Clean XML sitemap, no broken internal links, optimised robots.txt</li><li><strong>Indexation:</strong> No accidental noindex tags, correct canonical implementation</li><li><strong>Site structure:</strong> Flat architecture with clear hierarchy, logical URL structure</li><li><strong>Schema markup:</strong> Organisation, Article, FAQ, and LocalBusiness schemas where appropriate</li><li><strong>Mobile-first:</strong> Google crawls your mobile version — it must be flawless</li></ul><h2>5. Local SEO for Pakistan-Based Businesses</h2><p>For businesses targeting customers in Lahore, Karachi, Islamabad, or anywhere in Pakistan, local SEO delivers some of the fastest, highest-ROI results available.</p><p><strong>Our top local SEO priorities:</strong></p><ul><li>Google Business Profile optimisation with regular posts, photos, and Q&amp;A</li><li>Consistent NAP (Name, Address, Phone) across all online directories</li><li>Earning genuine reviews from real clients — quantity and recency both matter</li><li>Localised landing pages targeting city-specific queries</li><li>Citations on Pakistan-specific business directories</li></ul><h2>The Bottom Line</h2><p>SEO in 2026 rewards businesses that invest in <strong>genuine quality</strong> — quality content, quality user experience, and genuine authority in their industry. Quick hacks continue to decline in effectiveness while sustainable, white-hat strategies compound in value over time.</p><p>At Hawks Marketing, we build SEO strategies designed for long-term, compounding results. Whether you\'re starting from zero or accelerating an existing organic presence, <a href="/contact" rel="noopener noreferrer" target="_blank">contact Hawks Marketing today</a> for a free SEO audit.</p>',
            'featured_image'   => null,
            'layout'           => 'standard',
            'author'           => 'Hawks Marketing',
            'status'           => 'published',
            'published_at'     => now(),
            'meta_title'       => 'Ultimate SEO Guide 2026 | Hawks Marketing',
            'meta_description' => 'Learn the most effective SEO strategies in 2026. From technical SEO to content marketing, Hawks Marketing breaks down what works right now.',
            'created_at'       => now(),
            'updated_at'       => now(),
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
