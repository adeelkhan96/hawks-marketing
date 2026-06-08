<?php

namespace Database\Seeders;

use App\Models\PageContent;
use Illuminate\Database\Seeder;

class ContentSeeder extends Seeder
{
    public function run(): void
    {
        $records = [

            // =====================================================================
            // HOME — stats (banner/about/services already handled by AdminSeeder)
            // =====================================================================
            ['page'=>'home','section'=>'stats','key'=>'clients_num',       'value'=>'50+'],
            ['page'=>'home','section'=>'stats','key'=>'clients_label',     'value'=>'Happy Clients'],
            ['page'=>'home','section'=>'stats','key'=>'projects_num',      'value'=>'100+'],
            ['page'=>'home','section'=>'stats','key'=>'projects_label',    'value'=>'Projects Completed'],
            ['page'=>'home','section'=>'stats','key'=>'services_num',      'value'=>'9+'],
            ['page'=>'home','section'=>'stats','key'=>'services_label',    'value'=>'Core Services'],
            ['page'=>'home','section'=>'stats','key'=>'experience_num',    'value'=>'5+'],
            ['page'=>'home','section'=>'stats','key'=>'experience_label',  'value'=>'Years Experience'],

            // =====================================================================
            // ABOUT
            // =====================================================================
            ['page'=>'about','section'=>'company','key'=>'para1',   'value'=>'Hawks Marketing is a full-service digital marketing agency established in 2024, with operational experience dating back to 2019.'],
            ['page'=>'about','section'=>'company','key'=>'para2',   'value'=>'We deliver strategic, data-driven marketing solutions and IT solutions designed to enhance brand visibility, strengthen audience engagement, and generate measurable business growth. By combining market insight, creative execution, and performance analytics, we ensure that every initiative is aligned with clear commercial objectives.'],
            ['page'=>'about','section'=>'company','key'=>'para3',   'value'=>'Our focus is to help businesses navigate the evolving digital landscape with structured strategies, consistent execution, and long-term impact.'],
            ['page'=>'about','section'=>'why','key'=>'heading',     'value'=>'Why Hawks Marketing'],
            ['page'=>'about','section'=>'why','key'=>'subtext',     'value'=>'Selecting the right marketing partner is essential for sustainable growth.'],
            ['page'=>'about','section'=>'why','key'=>'intro',       'value'=>'At Hawks Marketing, we take a disciplined and results-oriented approach to every project. Our strategies are carefully developed based on business goals, audience behavior, and market conditions to ensure maximum effectiveness.'],
            ['page'=>'about','section'=>'why','key'=>'point1',      'value'=>'Strong emphasis on measurable performance and return on investment'],
            ['page'=>'about','section'=>'why','key'=>'point2',      'value'=>'Tailored strategies designed for each client\'s unique requirements'],
            ['page'=>'about','section'=>'why','key'=>'point3',      'value'=>'Integration of creative direction with data-driven decision-making'],
            ['page'=>'about','section'=>'why','key'=>'point4',      'value'=>'Commitment to transparency, consistency, and accountability'],
            ['page'=>'about','section'=>'why','key'=>'closing',     'value'=>'We focus on building long-term partnerships by delivering reliable, scalable, and performance-driven marketing solutions.'],
            ['page'=>'about','section'=>'vision','key'=>'text',     'value'=>'To establish Hawks Marketing as a globally recognized digital marketing agency, known for its strategic expertise, innovative thinking, and consistent delivery of high-performance results.'],
            ['page'=>'about','section'=>'mission','key'=>'text',    'value'=>'To empower businesses by providing structured, data-driven marketing solutions that transform ideas into measurable growth, enabling brands to compete and succeed in a rapidly evolving digital environment.'],
            ['page'=>'about','section'=>'founder','key'=>'name',    'value'=>'Aashir Khan Jadoon'],
            ['page'=>'about','section'=>'founder','key'=>'role',    'value'=>'Founder & CEO'],

            // =====================================================================
            // CONTACT
            // =====================================================================
            ['page'=>'contact','section'=>'intro','key'=>'heading',     'value'=>'Get in touch if you need help with your business'],
            ['page'=>'contact','section'=>'intro','key'=>'description', 'value'=>'For inquiries, collaborations, or project discussions, reach out to Hawks Marketing. Our team is available to understand your requirements and provide tailored marketing solutions for your business needs.'],
            ['page'=>'contact','section'=>'info','key'=>'address',      'value'=>'Plot no, 3A Korang Road, I-10/3, Islamabad, Pakistan, 44000'],
            ['page'=>'contact','section'=>'info','key'=>'email1',       'value'=>'info@thehawksmarketing.com'],
            ['page'=>'contact','section'=>'info','key'=>'email2',       'value'=>'Hawksmarketing2025@gmail.com'],
            ['page'=>'contact','section'=>'info','key'=>'phone1',       'value'=>'+92 336 986 4931'],
            ['page'=>'contact','section'=>'info','key'=>'phone2',       'value'=>'+92 313 593 4637'],

            // =====================================================================
            // OUR SERVICES
            // =====================================================================
            ['page'=>'our-services','section'=>'digital','key'=>'heading',      'value'=>'Digital Marketing Services'],
            ['page'=>'our-services','section'=>'digital','key'=>'seo_title',    'value'=>'Search Engine Optimization (SEO)'],
            ['page'=>'our-services','section'=>'digital','key'=>'seo_desc',     'value'=>'Improving your website\'s visibility on search engines to attract high-quality organic traffic. Hawks Marketing optimize structure, content, and performance to help your business rank higher and stay competitive.'],
            ['page'=>'our-services','section'=>'digital','key'=>'social_title', 'value'=>'Social Media Marketing & Management'],
            ['page'=>'our-services','section'=>'digital','key'=>'social_desc',  'value'=>'Strategic creation and management of content to build brand presence and audience engagement. Hawks Marketing handle everything from content planning to performance tracking across all major platforms.'],
            ['page'=>'our-services','section'=>'digital','key'=>'ppc_title',    'value'=>'Pay-Per-Click Advertising (PPC)'],
            ['page'=>'our-services','section'=>'digital','key'=>'ppc_desc',     'value'=>'A performance-driven advertising model where you pay only when users click on your ads. Hawks Marketing design and manage targeted campaigns that maximize conversions while optimizing ad spend.'],
            ['page'=>'our-services','section'=>'digital','key'=>'google_title', 'value'=>'Google & Meta Advertisement'],
            ['page'=>'our-services','section'=>'digital','key'=>'google_desc',  'value'=>'Advertising across platforms like Google & Meta Platforms to reach highly specific audiences. Hawks Marketing create and optimize campaigns on Facebook and Instagram to drive engagement, leads, and sales.'],

            ['page'=>'our-services','section'=>'designing','key'=>'heading',       'value'=>'Designing'],
            ['page'=>'our-services','section'=>'designing','key'=>'graphic_title', 'value'=>'Graphic Designing'],
            ['page'=>'our-services','section'=>'designing','key'=>'graphic_desc',  'value'=>'Graphic designing is the process of creating visual content to communicate information and ideas effectively. Hawks Marketing design structured visuals using typography, imagery, color theory, and layout principles to ensure clarity and impact. We develop and maintain consistent brand identities across all digital and print platforms. We create designs for social media, advertisements, websites, and corporate branding materials. We deliver professional and cohesive designs that strengthen brand recognition and trust.'],
            ['page'=>'our-services','section'=>'designing','key'=>'uiux_title',    'value'=>'UI/UX Designing'],
            ['page'=>'our-services','section'=>'designing','key'=>'uiux_desc',     'value'=>'UI/UX designing focuses on creating intuitive, visually appealing, and user-friendly digital experiences. Hawks Marketing design user interfaces that are clean, modern, and easy to navigate across websites and applications. We improve user experience by analyzing behavior and optimizing interaction flow and usability. We create wireframes, prototypes, and final designs that align with business goals and user needs. We deliver functional and aesthetically refined digital experiences that improve satisfaction and performance.'],
            ['page'=>'our-services','section'=>'designing','key'=>'video_title',   'value'=>'Video Editing'],
            ['page'=>'our-services','section'=>'designing','key'=>'video_desc',    'value'=>'Professional video editing services that transform raw footage into compelling, polished content. We deliver high-quality edits tailored for social media, advertising, corporate presentations, and brand storytelling.'],
            ['page'=>'our-services','section'=>'designing','key'=>'smdesign_title','value'=>'Social Media Design'],
            ['page'=>'our-services','section'=>'designing','key'=>'smdesign_desc', 'value'=>'Eye-catching, on-brand designs created specifically for social media platforms. We produce post graphics, story templates, banners, and ad creatives that drive engagement and reinforce brand identity.'],
            ['page'=>'our-services','section'=>'designing','key'=>'logo_title',    'value'=>'Logo Designing'],
            ['page'=>'our-services','section'=>'designing','key'=>'logo_desc',     'value'=>'Distinctive, memorable logo designs that capture the essence of your brand. We craft logos that are versatile, scalable, and built to represent your business across every platform and medium.'],

            ['page'=>'our-services','section'=>'it','key'=>'heading',          'value'=>'IT Solution'],
            ['page'=>'our-services','section'=>'it','key'=>'web_title',        'value'=>'Web Development'],
            ['page'=>'our-services','section'=>'it','key'=>'web_desc',         'value'=>'Web development involves building and maintaining functional, responsive, and high-performance websites. Hawks Marketing develop custom websites using modern technologies to ensure speed, security, and scalability. We create fully responsive designs that work seamlessly across all devices and screen sizes. We build both front-end interfaces and back-end systems tailored to business requirements. We deliver structured, conversion-focused websites that support business growth and digital presence.'],
            ['page'=>'our-services','section'=>'it','key'=>'app_title',        'value'=>'App Development'],
            ['page'=>'our-services','section'=>'it','key'=>'app_desc',         'value'=>'App development involves creating functional and user-focused mobile applications for Android and iOS platforms. Hawks Marketing develop custom applications tailored to business needs, ensuring performance, scalability, and security. We design intuitive interfaces that provide smooth navigation and a seamless user experience. We build both front-end and back-end systems to ensure complete functionality and reliability. We deliver high-quality mobile applications that enhance user engagement and support business growth.'],
            ['page'=>'our-services','section'=>'it','key'=>'custom_title',     'value'=>'Custom Website Development'],
            ['page'=>'our-services','section'=>'it','key'=>'custom_desc',      'value'=>'Bespoke website solutions built from the ground up to match your exact business requirements. We focus on clean code, scalable architecture, and seamless integrations that grow with your business.'],
            ['page'=>'our-services','section'=>'it','key'=>'ecommerce_title',  'value'=>'Ecommerce Web Development'],
            ['page'=>'our-services','section'=>'it','key'=>'ecommerce_desc',   'value'=>'Fully featured online stores designed to convert visitors into customers. We build fast, secure, and user-friendly ecommerce platforms with complete product management, payment integrations, and order tracking.'],

            ['page'=>'our-services','section'=>'branding','key'=>'heading',          'value'=>'Branding'],
            ['page'=>'our-services','section'=>'branding','key'=>'overview_title',   'value'=>'Branding'],
            ['page'=>'our-services','section'=>'branding','key'=>'overview_desc',    'value'=>'Branding is the process of creating a distinct identity for a business through visual, verbal, and strategic elements. Hawks Marketing develop strong brand identities that reflect the values, vision, and personality of a business. We design cohesive brand assets including logos, color systems, typography, and guidelines. We ensure consistency across all platforms to build recognition and trust in the market. We shape brand positioning to differentiate businesses from competitors effectively. We deliver complete branding solutions that strengthen perception, credibility, and long-term brand value.'],
            ['page'=>'our-services','section'=>'branding','key'=>'strategy_title',   'value'=>'Branding Strategy Services'],
            ['page'=>'our-services','section'=>'branding','key'=>'strategy_desc',    'value'=>'Data-informed brand strategy development that aligns your positioning, messaging, and identity with your business goals and target audience expectations.'],
            ['page'=>'our-services','section'=>'branding','key'=>'manual_title',     'value'=>'Brand Manual Document'],
            ['page'=>'our-services','section'=>'branding','key'=>'manual_desc',      'value'=>'Comprehensive brand guidelines documentation covering logo usage, color palette, typography, tone of voice, and visual standards — ensuring consistent brand representation across all touchpoints.'],

            ['page'=>'our-services','section'=>'content','key'=>'heading',          'value'=>'Content Creation'],
            ['page'=>'our-services','section'=>'content','key'=>'overview_title',   'value'=>'Content Creation'],
            ['page'=>'our-services','section'=>'content','key'=>'overview_desc',    'value'=>'Content creation involves developing engaging and relevant material to communicate a brand\'s message effectively. Hawks Marketing produce high-quality content including posts, captions, scripts, visuals, and marketing materials. We tailor content strategies to align with brand goals and target audience behavior. We focus on creating content that increases engagement, awareness, and audience retention. We ensure consistency in tone, style, and messaging across all platforms. We deliver impactful content that strengthens brand presence and drives meaningful interaction.'],
            ['page'=>'our-services','section'=>'content','key'=>'smcontent_title',  'value'=>'Social Media Content Marketing'],
            ['page'=>'our-services','section'=>'content','key'=>'smcontent_desc',   'value'=>'Strategic content designed to grow your social media presence, drive engagement, and build a loyal audience across all major platforms.'],
            ['page'=>'our-services','section'=>'content','key'=>'writing_title',    'value'=>'Website Content Writing'],
            ['page'=>'our-services','section'=>'content','key'=>'writing_desc',     'value'=>'SEO-optimized, professionally written website copy that communicates your value proposition clearly and compels visitors to take action.'],
            ['page'=>'our-services','section'=>'content','key'=>'blog_title',       'value'=>'Blog Writing'],
            ['page'=>'our-services','section'=>'content','key'=>'blog_desc',        'value'=>'Well-researched, engaging blog articles that establish your brand as an industry authority, improve SEO rankings, and drive organic traffic to your website.'],

            ['page'=>'our-services','section'=>'other','key'=>'heading',        'value'=>'Other Services'],
            ['page'=>'our-services','section'=>'other','key'=>'ba_title',       'value'=>'Business Analysis'],
            ['page'=>'our-services','section'=>'other','key'=>'ba_desc',        'value'=>'Business analysis involves evaluating a company\'s operations, market position, and performance to identify growth opportunities. Hawks Marketing analyze data, audience behavior, and market trends to support strategic decision-making. We identify strengths, weaknesses, and gaps affecting business performance and scalability. We assess competitors to understand positioning and improve market advantage. We deliver structured analysis that supports sustainable business growth and better planning.'],
            ['page'=>'our-services','section'=>'other','key'=>'consult_title',  'value'=>'Consultation'],
            ['page'=>'our-services','section'=>'other','key'=>'consult_desc',   'value'=>'Business consultation involves providing expert guidance to improve business strategy, operations, and growth potential. Hawks Marketing offer strategic recommendations based on market research, data analysis, and industry insights. We help businesses identify challenges and implement effective solutions for improvement. We guide decision-making processes to align with long-term business objectives. We deliver clear, actionable consultation to help businesses achieve measurable and sustainable success.'],

            // =====================================================================
            // SEO SERVICES
            // =====================================================================
            ['page'=>'seo-services','section'=>'intro','key'=>'heading','value'=>'Expert SEO Services to Dominate Search Rankings'],
            ['page'=>'seo-services','section'=>'intro','key'=>'para1',  'value'=>'Search engine optimization is a tactical marketing instrument that enables content and websites to achieve superior rankings on search engines, producing better positioning for keywords and consequently increased traffic.'],
            ['page'=>'seo-services','section'=>'intro','key'=>'para2',  'value'=>'The potential for expanding your business online is minimal if your website doesn\'t achieve top search engine positions. Succeeding against competitive search engines is demanding — only professionals can master the skill of planning website architecture that\'s easily comprehensible for search engines.'],
            ['page'=>'seo-services','section'=>'intro','key'=>'para3',  'value'=>'You don\'t need to worry about the complications; we\'re here for you. Connect with us to optimize your website and reach your target market!'],
            ['page'=>'seo-services','section'=>'highlight','key'=>'heading', 'value'=>'Why Hawks Marketing for SEO?'],
            ['page'=>'seo-services','section'=>'highlight','key'=>'p1_label','value'=>'Affordable'],
            ['page'=>'seo-services','section'=>'highlight','key'=>'p1_text', 'value'=>'Cost-effective SEO services that won\'t strain your budget, designed for businesses of all sizes.'],
            ['page'=>'seo-services','section'=>'highlight','key'=>'p2_label','value'=>'Results-driven'],
            ['page'=>'seo-services','section'=>'highlight','key'=>'p2_text', 'value'=>'We design optimal solutions for enhancing your business development with results-oriented services.'],
            ['page'=>'seo-services','section'=>'highlight','key'=>'p3_label','value'=>'Transparent'],
            ['page'=>'seo-services','section'=>'highlight','key'=>'p3_text', 'value'=>'Our professionals keep clients informed through regular performance analysis reports.'],
            ['page'=>'seo-services','section'=>'services','key'=>'heading', 'value'=>'Comprehensive SEO Services'],
            ['page'=>'seo-services','section'=>'services','key'=>'s1_title','value'=>'E-commerce SEO'],
            ['page'=>'seo-services','section'=>'services','key'=>'s1_desc', 'value'=>'Get your products featured in top search results with exceptional e-commerce SEO services. We ensure your inventory ranks higher than the competition and drives converting traffic to your store.'],
            ['page'=>'seo-services','section'=>'services','key'=>'s2_title','value'=>'SEO Audit'],
            ['page'=>'seo-services','section'=>'services','key'=>'s2_desc', 'value'=>'We conduct thorough website audits to discover technical, on-page, and off-page deficiencies, then create a focused SEO strategy to address those gaps. Connect with us for a complimentary audit!'],
            ['page'=>'seo-services','section'=>'services','key'=>'s3_title','value'=>'Local SEO'],
            ['page'=>'seo-services','section'=>'services','key'=>'s3_desc', 'value'=>'The vast majority of people use search engines to locate local businesses. Don\'t miss them. We generate high-converting leads based on geographical parameters with proven local SEO strategies.'],
            ['page'=>'seo-services','section'=>'services','key'=>'s4_title','value'=>'Off-page Link Building'],
            ['page'=>'seo-services','section'=>'services','key'=>'s4_desc', 'value'=>'Quality links boost domain authority and ultimately enhance rankings. We develop thorough SEO strategies to obtain inbound traffic from reliable sources through effective link building and guest posting.'],
            ['page'=>'seo-services','section'=>'process','key'=>'heading',     'value'=>'How We Optimize Your Web Presence'],
            ['page'=>'seo-services','section'=>'process','key'=>'description', 'value'=>'Our SEO professionals never compromise on any detail during the creation and implementation of our marketing plans. Here\'s our standard process for securing the top search engine position for your website.'],
            ['page'=>'seo-services','section'=>'process','key'=>'step1_title', 'value'=>'Connect & Research'],
            ['page'=>'seo-services','section'=>'process','key'=>'step1_desc',  'value'=>'We connect with you, gather requirements, and perform thorough keyword research while reviewing your existing online presence.'],
            ['page'=>'seo-services','section'=>'process','key'=>'step2_title', 'value'=>'Strategy Development'],
            ['page'=>'seo-services','section'=>'process','key'=>'step2_desc',  'value'=>'We build SEO strategy frameworks around your requirements, deriving insights from target market analysis to fill critical gaps.'],
            ['page'=>'seo-services','section'=>'process','key'=>'step3_title', 'value'=>'Implementation'],
            ['page'=>'seo-services','section'=>'process','key'=>'step3_desc',  'value'=>'Our SEO professionals execute the optimal strategy in tight coordination, designed to generate your intended business outcomes.'],
            ['page'=>'seo-services','section'=>'process','key'=>'step4_title', 'value'=>'Analysis & Optimization'],
            ['page'=>'seo-services','section'=>'process','key'=>'step4_desc',  'value'=>'We monitor KPIs closely and provide monthly, quarterly, and annual reports, continuously refining our approach as algorithms evolve.'],

            // =====================================================================
            // SOCIAL MEDIA MANAGEMENT
            // =====================================================================
            ['page'=>'social-media','section'=>'intro','key'=>'heading','value'=>'Leveraging Social Media For Remarkable Growth'],
            ['page'=>'social-media','section'=>'intro','key'=>'para1',  'value'=>'Social media is the most critical marketing tool today and understanding how to utilize it effectively is essential to achieving excellent results. Our team manages everything — from developing social media posts to creating visuals, and from scheduling posts to tracking KPIs. We handle it all so you can concentrate on your core business.'],
            ['page'=>'social-media','section'=>'intro','key'=>'para2',  'value'=>'In the world of billions of active social media users, Hawks Marketing\'s social media management services help you reach the proper target audience and boost awareness of your company through tailored strategies designed by our experts.'],
            ['page'=>'social-media','section'=>'intro','key'=>'para3',  'value'=>'Regardless of how many social networks a company uses, social media management is a vital element of any marketing plan and can produce a measurable return on investment.'],
            ['page'=>'social-media','section'=>'services','key'=>'heading', 'value'=>'Social Media Services That Drive Revenue'],
            ['page'=>'social-media','section'=>'services','key'=>'s1_title','value'=>'Social Media Optimization'],
            ['page'=>'social-media','section'=>'services','key'=>'s1_desc', 'value'=>'We optimize your posts and profiles for maximum returns, helping business owners, content creators, and social media marketers extract the most from their social media presence.'],
            ['page'=>'social-media','section'=>'services','key'=>'s2_title','value'=>'Ad Campaigns'],
            ['page'=>'social-media','section'=>'services','key'=>'s2_desc', 'value'=>'Our advertisement strategies are crafted to enhance brand promotion and recognition, delivering marketing services that won\'t burden your finances while maximizing your company\'s revenue.'],
            ['page'=>'social-media','section'=>'services','key'=>'s3_title','value'=>'Social Media Content'],
            ['page'=>'social-media','section'=>'services','key'=>'s3_desc', 'value'=>'Quality content that connects with your audience\'s aspirations and interests. We create scroll-stopping content that builds genuine engagement and grows your brand organically over time.'],
            ['page'=>'social-media','section'=>'services','key'=>'s4_title','value'=>'Social Media Audit'],
            ['page'=>'social-media','section'=>'services','key'=>'s4_desc', 'value'=>'We assess how effectively your social media activities are accomplishing your management strategy goals by analyzing KPIs, identifying what\'s working and what needs improvement.'],
            ['page'=>'social-media','section'=>'process','key'=>'heading',     'value'=>'Our Social Media Process'],
            ['page'=>'social-media','section'=>'process','key'=>'description', 'value'=>'We work methodically to ensure every campaign is backed by research, strategy, and data. From industry research to content scheduling, we cover the full spectrum of social media management for your brand.'],
            ['page'=>'social-media','section'=>'process','key'=>'step1_title', 'value'=>'Industry Research'],
            ['page'=>'social-media','section'=>'process','key'=>'step1_desc',  'value'=>'We collect historical and current data from social networks to better understand the target market for your brand.'],
            ['page'=>'social-media','section'=>'process','key'=>'step2_title', 'value'=>'Audience & Platform'],
            ['page'=>'social-media','section'=>'process','key'=>'step2_desc',  'value'=>'We build strategic audience profiles and identify the optimal platforms to achieve the best return on your time and investment.'],
            ['page'=>'social-media','section'=>'process','key'=>'step3_title', 'value'=>'Content Creation'],
            ['page'=>'social-media','section'=>'process','key'=>'step3_desc',  'value'=>'We develop content calendars and create clear, shareable content that connects your brand to your audience at the right moment.'],
            ['page'=>'social-media','section'=>'process','key'=>'step4_title', 'value'=>'Schedule & Analyse'],
            ['page'=>'social-media','section'=>'process','key'=>'step4_desc',  'value'=>'We schedule posts at optimal times, collect data from social channels, and continuously refine strategy to improve results.'],

            // =====================================================================
            // CONTENT WRITING
            // =====================================================================
            ['page'=>'content-writing','section'=>'intro','key'=>'heading','value'=>'Create Your Brand Story with Hawks Marketing'],
            ['page'=>'content-writing','section'=>'intro','key'=>'para1',  'value'=>'Content is king, and our team has perfected the craft of delivering professional content writing services in alignment with your business goals. Impactful content captures the attention of readers whether they are visiting a website, reading an article, or browsing a social media post.'],
            ['page'=>'content-writing','section'=>'intro','key'=>'para2',  'value'=>'In crowded digital platforms, your business genuinely needs content that makes you stand apart from the rest. At Hawks Marketing, our skilled team of content writers ensures delivery of the finest content writing services — creating content that is engaging, compelling, and search engine optimized.'],
            ['page'=>'content-writing','section'=>'intro','key'=>'para3',  'value'=>'From developing memorable phrases and slogans to composing detailed articles; from engaging blog posts to SEO-based content, our content writers handle it all.'],
            ['page'=>'content-writing','section'=>'highlight','key'=>'heading', 'value'=>'What Makes Us Stand Out'],
            ['page'=>'content-writing','section'=>'highlight','key'=>'p1_label','value'=>'Creative'],
            ['page'=>'content-writing','section'=>'highlight','key'=>'p1_text', 'value'=>'Our experts develop resonant ideas and solutions to enhance your company\'s growth, just like an in-house team.'],
            ['page'=>'content-writing','section'=>'highlight','key'=>'p2_label','value'=>'Coherent'],
            ['page'=>'content-writing','section'=>'highlight','key'=>'p2_text', 'value'=>'Our teams work in close coordination while involving our client at each step of the content marketing process.'],
            ['page'=>'content-writing','section'=>'highlight','key'=>'p3_label','value'=>'Cost-efficient'],
            ['page'=>'content-writing','section'=>'highlight','key'=>'p3_text', 'value'=>'We deliver affordable content writing services without compromising on quality and excellence.'],
            ['page'=>'content-writing','section'=>'services','key'=>'heading', 'value'=>'Content Writing Services We Offer'],
            ['page'=>'content-writing','section'=>'services','key'=>'s1_title','value'=>'Ad Copywriting'],
            ['page'=>'content-writing','section'=>'services','key'=>'s1_desc', 'value'=>'Having a persuasive ad campaign is essential. To design campaigns that guarantee maximum ROI, choosing the best ad copy writers is vital. From campaign design to timely implementation, we maximize ROI for your ad campaigns.'],
            ['page'=>'content-writing','section'=>'services','key'=>'s2_title','value'=>'Web Copywriting'],
            ['page'=>'content-writing','section'=>'services','key'=>'s2_desc', 'value'=>'Writing for the web requires content that\'s optimized for search engines. Our skilled team delivers the finest web content writing — engaging copy that captures attention and guides readers to take the intended action.'],
            ['page'=>'content-writing','section'=>'services','key'=>'s3_title','value'=>'Social Media Content'],
            ['page'=>'content-writing','section'=>'services','key'=>'s3_desc', 'value'=>'Social media is flooded with content daily. To establish your brand, your content must be competitive enough to not only engage the target audience but maintain it. We deliver excellent social media content writing services for maximum market coverage.'],
            ['page'=>'content-writing','section'=>'services','key'=>'s4_title','value'=>'Website Content Writing'],
            ['page'=>'content-writing','section'=>'services','key'=>'s4_desc', 'value'=>'Crafting website content that balances search engine optimization with creativity is the genuine challenge. Our SEO content writers embrace this challenge, composing content for landing pages, service pages, about pages, and more.'],
            ['page'=>'content-writing','section'=>'services','key'=>'s5_title','value'=>'Blogs and Articles'],
            ['page'=>'content-writing','section'=>'services','key'=>'s5_desc', 'value'=>'Selecting trending topics and creating convincing titles while delivering on the topic in the best possible way — that\'s our blog writing in brief. The rest is the creativity of our talented writers.'],
            ['page'=>'content-writing','section'=>'services','key'=>'s6_title','value'=>'Presentations & Case Studies'],
            ['page'=>'content-writing','section'=>'services','key'=>'s6_desc', 'value'=>'We compose content that presents ideas and data in the most suitable and understandable form. Our case studies leave an influential impression on readers\' minds, acting as social proof for your brand\'s performance.'],
            ['page'=>'content-writing','section'=>'process','key'=>'heading',     'value'=>'Our Content Creation Process'],
            ['page'=>'content-writing','section'=>'process','key'=>'description', 'value'=>'As the premier content writing company, we coordinate with our clients to understand business requirements and produce content aligned with business objectives — from research through to publishing.'],
            ['page'=>'content-writing','section'=>'process','key'=>'step1_title', 'value'=>'Connect & Audit'],
            ['page'=>'content-writing','section'=>'process','key'=>'step1_desc',  'value'=>'We connect with you to understand your business goals, then perform comprehensive industry research for each digital platform.'],
            ['page'=>'content-writing','section'=>'process','key'=>'step2_title', 'value'=>'Strategy Development'],
            ['page'=>'content-writing','section'=>'process','key'=>'step2_desc',  'value'=>'We create content strategies supported by extensive research and accurate data for your specific target niche and region.'],
            ['page'=>'content-writing','section'=>'process','key'=>'step3_title', 'value'=>'Content Creation'],
            ['page'=>'content-writing','section'=>'process','key'=>'step3_desc',  'value'=>'Once the strategy is set, our expert writers create best-suited content for each platform, tailored to your audience and brand voice.'],
            ['page'=>'content-writing','section'=>'process','key'=>'step4_title', 'value'=>'Review & Publish'],
            ['page'=>'content-writing','section'=>'process','key'=>'step4_desc',  'value'=>'Content passes through multiple checks of our optimization checklists before being published using the optimal tools for maximum reach.'],

            // =====================================================================
            // WEB DEVELOPMENT
            // =====================================================================
            ['page'=>'web-development','section'=>'intro','key'=>'heading','value'=>'Website Development Services that Leave a Lasting Impression'],
            ['page'=>'web-development','section'=>'intro','key'=>'para1',  'value'=>'All businesses want effective websites that work well with all devices; the importance of having an optimal website can never be overlooked. We are a professional website design and development company working for businesses\' escalation — utilize our customized services to optimally represent your brand in the market.'],
            ['page'=>'web-development','section'=>'intro','key'=>'para2',  'value'=>'With our creative team, we set out to create elegant and functional websites that engage your potential customers. Our team of experts consistently seeks ways to improve the experience for our clients so you can extract the most from your website.'],
            ['page'=>'web-development','section'=>'highlight','key'=>'heading', 'value'=>'Key Features of Our Websites'],
            ['page'=>'web-development','section'=>'highlight','key'=>'p1_label','value'=>'User-Friendly'],
            ['page'=>'web-development','section'=>'highlight','key'=>'p1_text', 'value'=>'We build websites that are user-friendly while maintaining aesthetic excellence for an impactful online presence.'],
            ['page'=>'web-development','section'=>'highlight','key'=>'p2_label','value'=>'Responsive'],
            ['page'=>'web-development','section'=>'highlight','key'=>'p2_text', 'value'=>'Our team creates responsive web designs for smooth flow of prospects down the marketing funnel on any device.'],
            ['page'=>'web-development','section'=>'highlight','key'=>'p3_label','value'=>'Tested'],
            ['page'=>'web-development','section'=>'highlight','key'=>'p3_text', 'value'=>'All website designs are thoroughly tested for each functionality before delivery to our clients.'],
            ['page'=>'web-development','section'=>'highlight','key'=>'p4_label','value'=>'SEO Optimized'],
            ['page'=>'web-development','section'=>'highlight','key'=>'p4_text', 'value'=>'All our web designs address the impacting metrics of search algorithms from day one.'],
            ['page'=>'web-development','section'=>'services','key'=>'heading', 'value'=>'Our Web Development Services'],
            ['page'=>'web-development','section'=>'services','key'=>'s1_title','value'=>'Blogging Websites'],
            ['page'=>'web-development','section'=>'services','key'=>'s1_desc', 'value'=>'Blog websites designed to engage readers and keep them connected for more. We ensure visitors scroll to the end of every page and always want to return for fresh content.'],
            ['page'=>'web-development','section'=>'services','key'=>'s2_title','value'=>'Business Websites'],
            ['page'=>'web-development','section'=>'services','key'=>'s2_desc', 'value'=>'Business websites launched to promote your products and services. Our professionals deliver web designs that maximize conversion of inbound traffic and ultimately increase ROIs.'],
            ['page'=>'web-development','section'=>'services','key'=>'s3_title','value'=>'E-commerce Websites'],
            ['page'=>'web-development','section'=>'services','key'=>'s3_desc', 'value'=>'Planning to launch an online store? Whatever the size of your inventory, Hawks Marketing is the optimal e-commerce website development service provider for your business.'],
            ['page'=>'web-development','section'=>'services','key'=>'s4_title','value'=>'Online Forums & Portals'],
            ['page'=>'web-development','section'=>'services','key'=>'s4_desc', 'value'=>'Web-based platforms for public discussions, queries, responses, and reviews, as well as web portals that gather information from multiple sources into a single personalized dashboard.'],
            ['page'=>'web-development','section'=>'services','key'=>'s5_title','value'=>'Web Applications'],
            ['page'=>'web-development','section'=>'services','key'=>'s5_desc', 'value'=>'From API integrations to launching your web apps on the proper platforms, our team can completely address your requirements. Obtain exceptional web application development at Hawks Marketing.'],
            ['page'=>'web-development','section'=>'services','key'=>'s6_title','value'=>'Website Maintenance'],
            ['page'=>'web-development','section'=>'services','key'=>'s6_desc', 'value'=>'The task isn\'t finished after launch. Our professionals incorporate the latest features in your website design and keep it maintained and secure to stay ahead of the competition.'],
            ['page'=>'web-development','section'=>'tech','key'=>'heading',     'value'=>'Powered by Industry-Leading Technologies'],
            ['page'=>'web-development','section'=>'tech','key'=>'description', 'value'=>'Our technology stack is carefully selected to deliver high-performing, user-friendly websites with fast load times and seamless functionality, ensuring an exceptional experience on any device.'],
            ['page'=>'web-development','section'=>'process','key'=>'heading',     'value'=>'Our Web Development Process'],
            ['page'=>'web-development','section'=>'process','key'=>'description', 'value'=>'From obtaining clear requirements to post-launch maintenance, our end-to-end development process ensures you receive a website that performs, converts, and grows with your business.'],
            ['page'=>'web-development','section'=>'process','key'=>'step1_title', 'value'=>'Requirements & Research'],
            ['page'=>'web-development','section'=>'process','key'=>'step1_desc',  'value'=>'We gather clear requirements and perform extensive market research to add exceptional quality to your digital presence.'],
            ['page'=>'web-development','section'=>'process','key'=>'step2_title', 'value'=>'Design & Customization'],
            ['page'=>'web-development','section'=>'process','key'=>'step2_desc',  'value'=>'We select elegant themes and customize your website to speak for your company\'s excellence while considering your audience\'s aesthetic sensibilities.'],
            ['page'=>'web-development','section'=>'process','key'=>'step3_title', 'value'=>'Development & APIs'],
            ['page'=>'web-development','section'=>'process','key'=>'step3_desc',  'value'=>'Our team handles full back-end development and integrates APIs for efficient synchronization of data among third-party services.'],
            ['page'=>'web-development','section'=>'process','key'=>'step4_title', 'value'=>'Testing & Deployment'],
            ['page'=>'web-development','section'=>'process','key'=>'step4_desc',  'value'=>'We test each functionality with meticulous attention to detail prior to final deployment, then provide ongoing maintenance post-launch.'],

            // =====================================================================
            // PPC ADVERTISING
            // =====================================================================
            ['page'=>'ppc-advertising','section'=>'intro','key'=>'heading','value'=>'Pay-Per-Click Advertising That Delivers Real ROI'],
            ['page'=>'ppc-advertising','section'=>'intro','key'=>'para1',  'value'=>'Pay-Per-Click advertising is a performance-driven model where you pay only when users click on your ads. This makes every dirham of your budget accountable and measurable.'],
            ['page'=>'ppc-advertising','section'=>'intro','key'=>'para2',  'value'=>'Hawks Marketing design and manage targeted PPC campaigns that maximize conversions while continuously optimizing ad spend. We ensure your ads reach the right people at the right time — and turn clicks into customers.'],
            ['page'=>'ppc-advertising','section'=>'intro','key'=>'para3',  'value'=>'Whether you\'re launching a new campaign or improving an existing one, our team builds strategies around your business goals and audience behavior.'],
            ['page'=>'ppc-advertising','section'=>'highlight','key'=>'heading', 'value'=>'Why Hawks Marketing for PPC?'],
            ['page'=>'ppc-advertising','section'=>'highlight','key'=>'p1_label','value'=>'Data-Driven'],
            ['page'=>'ppc-advertising','section'=>'highlight','key'=>'p1_text', 'value'=>'Every campaign is built on audience insights and performance data, not guesswork.'],
            ['page'=>'ppc-advertising','section'=>'highlight','key'=>'p2_label','value'=>'Budget-Efficient'],
            ['page'=>'ppc-advertising','section'=>'highlight','key'=>'p2_text', 'value'=>'We continuously optimize bids and targeting to get maximum results from your spend.'],
            ['page'=>'ppc-advertising','section'=>'highlight','key'=>'p3_label','value'=>'Transparent Reporting'],
            ['page'=>'ppc-advertising','section'=>'highlight','key'=>'p3_text', 'value'=>'Clear performance reports so you always know exactly what your investment is delivering.'],
            ['page'=>'ppc-advertising','section'=>'services','key'=>'heading', 'value'=>'Our PPC Services'],
            ['page'=>'ppc-advertising','section'=>'services','key'=>'s1_title','value'=>'Campaign Strategy & Setup'],
            ['page'=>'ppc-advertising','section'=>'services','key'=>'s1_desc', 'value'=>'We build campaigns from the ground up — defining audience segments, keyword strategy, ad formats, and budget allocation to ensure strong performance from day one.'],
            ['page'=>'ppc-advertising','section'=>'services','key'=>'s2_title','value'=>'Ad Copywriting'],
            ['page'=>'ppc-advertising','section'=>'services','key'=>'s2_desc', 'value'=>'Compelling, conversion-focused ad copy that captures attention and drives clicks. We test multiple variants to continuously improve performance.'],
            ['page'=>'ppc-advertising','section'=>'services','key'=>'s3_title','value'=>'Bid Management & Optimization'],
            ['page'=>'ppc-advertising','section'=>'services','key'=>'s3_desc', 'value'=>'Active bid management to reduce cost-per-click while increasing quality scores and ad positions — keeping your campaigns competitive and efficient.'],
            ['page'=>'ppc-advertising','section'=>'services','key'=>'s4_title','value'=>'Performance Reporting'],
            ['page'=>'ppc-advertising','section'=>'services','key'=>'s4_desc', 'value'=>'Detailed, easy-to-understand reports covering impressions, clicks, conversions, and cost metrics so you have full visibility on campaign health.'],

            // =====================================================================
            // GOOGLE & META ADVERTISING
            // =====================================================================
            ['page'=>'google-meta-advertising','section'=>'intro','key'=>'heading','value'=>'Google & Meta Advertising That Reaches the Right Audience'],
            ['page'=>'google-meta-advertising','section'=>'intro','key'=>'para1',  'value'=>'Advertising across Google and Meta platforms gives your business access to billions of users with highly specific targeting capabilities. We put your brand in front of the people most likely to convert.'],
            ['page'=>'google-meta-advertising','section'=>'intro','key'=>'para2',  'value'=>'Hawks Marketing create and optimize campaigns on Google Search, Display, Facebook, and Instagram to drive engagement, generate leads, and increase sales. Every campaign is tailored to your objectives and continuously refined for peak performance.'],
            ['page'=>'google-meta-advertising','section'=>'highlight','key'=>'heading', 'value'=>'Why Hawks Marketing?'],
            ['page'=>'google-meta-advertising','section'=>'highlight','key'=>'p1_label','value'=>'Precision Targeting'],
            ['page'=>'google-meta-advertising','section'=>'highlight','key'=>'p1_text', 'value'=>'We leverage platform data to reach exactly the right demographics, interests, and behaviors.'],
            ['page'=>'google-meta-advertising','section'=>'highlight','key'=>'p2_label','value'=>'Cross-Platform Strategy'],
            ['page'=>'google-meta-advertising','section'=>'highlight','key'=>'p2_text', 'value'=>'Cohesive campaigns across Google and Meta that reinforce each other for maximum impact.'],
            ['page'=>'google-meta-advertising','section'=>'highlight','key'=>'p3_label','value'=>'Continuous Optimization'],
            ['page'=>'google-meta-advertising','section'=>'highlight','key'=>'p3_text', 'value'=>'Real-time monitoring and adjustments to keep your cost-per-result as low as possible.'],
            ['page'=>'google-meta-advertising','section'=>'services','key'=>'heading', 'value'=>'Our Advertising Services'],
            ['page'=>'google-meta-advertising','section'=>'services','key'=>'s1_title','value'=>'Google Search Ads'],
            ['page'=>'google-meta-advertising','section'=>'services','key'=>'s1_desc', 'value'=>'Appear at the top of Google search results when potential customers are actively looking for your products or services. We craft keyword strategies and ad copy that drive qualified clicks.'],
            ['page'=>'google-meta-advertising','section'=>'services','key'=>'s2_title','value'=>'Facebook & Instagram Ads'],
            ['page'=>'google-meta-advertising','section'=>'services','key'=>'s2_desc', 'value'=>'Engaging ad campaigns on Facebook and Instagram designed to build awareness, generate leads, and drive sales — with precise audience targeting and compelling creative.'],
            ['page'=>'google-meta-advertising','section'=>'services','key'=>'s3_title','value'=>'Retargeting Campaigns'],
            ['page'=>'google-meta-advertising','section'=>'services','key'=>'s3_desc', 'value'=>'Re-engage visitors who showed interest but didn\'t convert. We set up retargeting campaigns that bring warm audiences back and significantly improve conversion rates.'],
            ['page'=>'google-meta-advertising','section'=>'services','key'=>'s4_title','value'=>'Campaign Analytics & Reporting'],
            ['page'=>'google-meta-advertising','section'=>'services','key'=>'s4_desc', 'value'=>'Comprehensive reporting on reach, engagement, conversions, and ROAS so you always understand the full impact of your advertising investment.'],

            // =====================================================================
            // GRAPHIC DESIGNING
            // =====================================================================
            ['page'=>'graphic-designing','section'=>'intro','key'=>'heading','value'=>'Graphic Design That Communicates and Converts'],
            ['page'=>'graphic-designing','section'=>'intro','key'=>'para1',  'value'=>'Graphic designing is the process of creating visual content to communicate information and ideas effectively. Hawks Marketing design structured visuals using typography, imagery, color theory, and layout principles to ensure clarity and impact.'],
            ['page'=>'graphic-designing','section'=>'intro','key'=>'para2',  'value'=>'We develop and maintain consistent brand identities across all digital and print platforms. We create designs for social media, advertisements, websites, and corporate branding materials. Our work focuses on improving visual communication, engagement, and audience perception.'],
            ['page'=>'graphic-designing','section'=>'intro','key'=>'para3',  'value'=>'We deliver professional and cohesive designs that strengthen brand recognition and trust.'],
            ['page'=>'graphic-designing','section'=>'highlight','key'=>'heading', 'value'=>'Why Hawks Marketing for Design?'],
            ['page'=>'graphic-designing','section'=>'highlight','key'=>'p1_label','value'=>'Brand-Consistent'],
            ['page'=>'graphic-designing','section'=>'highlight','key'=>'p1_text', 'value'=>'Every design aligns with your brand identity to build cohesive visual recognition across all platforms.'],
            ['page'=>'graphic-designing','section'=>'highlight','key'=>'p2_label','value'=>'Purpose-Driven'],
            ['page'=>'graphic-designing','section'=>'highlight','key'=>'p2_text', 'value'=>'Designs created with clear communication objectives, not just aesthetics.'],
            ['page'=>'graphic-designing','section'=>'highlight','key'=>'p3_label','value'=>'Fast Turnaround'],
            ['page'=>'graphic-designing','section'=>'highlight','key'=>'p3_text', 'value'=>'Efficient workflows that deliver quality designs within agreed timelines.'],
            ['page'=>'graphic-designing','section'=>'services','key'=>'heading', 'value'=>'Our Design Services'],
            ['page'=>'graphic-designing','section'=>'services','key'=>'s1_title','value'=>'Social Media Graphics'],
            ['page'=>'graphic-designing','section'=>'services','key'=>'s1_desc', 'value'=>'Scroll-stopping visuals designed for all major social platforms — posts, stories, banners, and ads that drive engagement and reinforce your brand presence.'],
            ['page'=>'graphic-designing','section'=>'services','key'=>'s2_title','value'=>'Advertisement Design'],
            ['page'=>'graphic-designing','section'=>'services','key'=>'s2_desc', 'value'=>'High-impact ad creatives for digital and print advertising — designed to capture attention and communicate your message effectively to your target audience.'],
            ['page'=>'graphic-designing','section'=>'services','key'=>'s3_title','value'=>'Corporate Branding Materials'],
            ['page'=>'graphic-designing','section'=>'services','key'=>'s3_desc', 'value'=>'Business cards, letterheads, presentation decks, brochures, and other corporate materials designed to represent your brand professionally across every touchpoint.'],
            ['page'=>'graphic-designing','section'=>'services','key'=>'s4_title','value'=>'Digital & Print Design'],
            ['page'=>'graphic-designing','section'=>'services','key'=>'s4_desc', 'value'=>'Versatile designs optimised for both digital screens and print production, ensuring consistent quality and visual impact across every medium you use.'],

            // =====================================================================
            // UI/UX DESIGNING
            // =====================================================================
            ['page'=>'ui-ux-designing','section'=>'intro','key'=>'heading','value'=>'UI/UX Design That Puts the User First'],
            ['page'=>'ui-ux-designing','section'=>'intro','key'=>'para1',  'value'=>'UI/UX designing focuses on creating intuitive, visually appealing, and user-friendly digital experiences. Hawks Marketing design user interfaces that are clean, modern, and easy to navigate across websites and applications.'],
            ['page'=>'ui-ux-designing','section'=>'intro','key'=>'para2',  'value'=>'We improve user experience by analyzing behavior and optimizing interaction flow and usability. We create wireframes, prototypes, and final designs that align with business goals and user needs. We ensure consistency in design elements to enhance engagement and reduce user friction.'],
            ['page'=>'ui-ux-designing','section'=>'intro','key'=>'para3',  'value'=>'We deliver functional and aesthetically refined digital experiences that improve satisfaction and performance.'],
            ['page'=>'ui-ux-designing','section'=>'highlight','key'=>'heading', 'value'=>'Why Hawks Marketing for UI/UX?'],
            ['page'=>'ui-ux-designing','section'=>'highlight','key'=>'p1_label','value'=>'User-Centered'],
            ['page'=>'ui-ux-designing','section'=>'highlight','key'=>'p1_text', 'value'=>'Every design decision is informed by how real users think, behave, and interact with digital interfaces.'],
            ['page'=>'ui-ux-designing','section'=>'highlight','key'=>'p2_label','value'=>'Business-Aligned'],
            ['page'=>'ui-ux-designing','section'=>'highlight','key'=>'p2_text', 'value'=>'We balance aesthetics with functionality to create experiences that look great and convert well.'],
            ['page'=>'ui-ux-designing','section'=>'highlight','key'=>'p3_label','value'=>'Prototype-First'],
            ['page'=>'ui-ux-designing','section'=>'highlight','key'=>'p3_text', 'value'=>'We validate designs through wireframes and prototypes before final delivery, saving time and cost.'],
            ['page'=>'ui-ux-designing','section'=>'services','key'=>'heading', 'value'=>'Our UI/UX Services'],
            ['page'=>'ui-ux-designing','section'=>'services','key'=>'s1_title','value'=>'Wireframing & Prototyping'],
            ['page'=>'ui-ux-designing','section'=>'services','key'=>'s1_desc', 'value'=>'Structured wireframes and interactive prototypes that map out user journeys and interface layouts before any development begins — reducing costly revisions later.'],
            ['page'=>'ui-ux-designing','section'=>'services','key'=>'s2_title','value'=>'Mobile & Web UI Design'],
            ['page'=>'ui-ux-designing','section'=>'services','key'=>'s2_desc', 'value'=>'Clean, modern interface designs for mobile applications and web platforms that are responsive, accessible, and optimised for the best possible user experience.'],
            ['page'=>'ui-ux-designing','section'=>'services','key'=>'s3_title','value'=>'User Experience Analysis'],
            ['page'=>'ui-ux-designing','section'=>'services','key'=>'s3_desc', 'value'=>'We analyse user behavior patterns to identify friction points and redesign interaction flows that improve usability, satisfaction, and conversion rates.'],
            ['page'=>'ui-ux-designing','section'=>'services','key'=>'s4_title','value'=>'Design System Creation'],
            ['page'=>'ui-ux-designing','section'=>'services','key'=>'s4_desc', 'value'=>'Consistent design systems with reusable components, style guides, and interaction patterns that keep your product visually cohesive as it scales.'],

            // =====================================================================
            // VIDEO EDITING
            // =====================================================================
            ['page'=>'video-editing','section'=>'intro','key'=>'heading','value'=>'Professional Video Editing That Tells Your Story'],
            ['page'=>'video-editing','section'=>'intro','key'=>'para1',  'value'=>'Video is the most powerful content format for engagement and conversion. Hawks Marketing transform raw footage into polished, compelling videos that capture attention and communicate your brand message effectively.'],
            ['page'=>'video-editing','section'=>'intro','key'=>'para2',  'value'=>'We edit for every platform and purpose — from short-form social media reels to long-form brand videos and corporate presentations. Every edit is crafted with pacing, transitions, colour grading, and sound to deliver a professional result.'],
            ['page'=>'video-editing','section'=>'highlight','key'=>'heading', 'value'=>'Why Hawks Marketing for Video?'],
            ['page'=>'video-editing','section'=>'highlight','key'=>'p1_label','value'=>'Platform-Optimised'],
            ['page'=>'video-editing','section'=>'highlight','key'=>'p1_text', 'value'=>'Edits tailored for Instagram, YouTube, TikTok, LinkedIn, and more with the right formats and aspect ratios.'],
            ['page'=>'video-editing','section'=>'highlight','key'=>'p2_label','value'=>'Brand-Consistent'],
            ['page'=>'video-editing','section'=>'highlight','key'=>'p2_text', 'value'=>'Colour grading, fonts, and lower thirds aligned with your brand identity throughout every video.'],
            ['page'=>'video-editing','section'=>'highlight','key'=>'p3_label','value'=>'Fast Delivery'],
            ['page'=>'video-editing','section'=>'highlight','key'=>'p3_text', 'value'=>'Efficient editing workflows with clear revision rounds to meet your deadlines.'],
            ['page'=>'video-editing','section'=>'services','key'=>'heading', 'value'=>'Our Video Services'],
            ['page'=>'video-editing','section'=>'services','key'=>'s1_title','value'=>'Social Media Reels & Shorts'],
            ['page'=>'video-editing','section'=>'services','key'=>'s1_desc', 'value'=>'Attention-grabbing short-form videos optimised for Instagram Reels, TikTok, and YouTube Shorts — designed to stop the scroll and drive engagement.'],
            ['page'=>'video-editing','section'=>'services','key'=>'s2_title','value'=>'Brand & Corporate Videos'],
            ['page'=>'video-editing','section'=>'services','key'=>'s2_desc', 'value'=>'Professional brand films and corporate videos that communicate your story, values, and services with impact — ideal for websites, presentations, and campaigns.'],
            ['page'=>'video-editing','section'=>'services','key'=>'s3_title','value'=>'Video Ad Creatives'],
            ['page'=>'video-editing','section'=>'services','key'=>'s3_desc', 'value'=>'High-converting video ads for Facebook, Instagram, and YouTube designed to capture attention in the first few seconds and drive viewers to take action.'],
            ['page'=>'video-editing','section'=>'services','key'=>'s4_title','value'=>'Motion Graphics & Effects'],
            ['page'=>'video-editing','section'=>'services','key'=>'s4_desc', 'value'=>'Animated text, lower thirds, transitions, and motion graphic elements that add a polished, professional feel to any video production.'],

            // =====================================================================
            // SOCIAL MEDIA DESIGN
            // =====================================================================
            ['page'=>'social-media-design','section'=>'intro','key'=>'heading','value'=>'Social Media Design That Stops the Scroll'],
            ['page'=>'social-media-design','section'=>'intro','key'=>'para1',  'value'=>'In a crowded social media landscape, visuals are what make your brand stand out. Hawks Marketing create on-brand, platform-optimised designs that capture attention, drive engagement, and strengthen your brand presence.'],
            ['page'=>'social-media-design','section'=>'intro','key'=>'para2',  'value'=>'We produce post graphics, story templates, highlight covers, banners, and ad creatives for Instagram, Facebook, LinkedIn, Twitter, and more. Every design is crafted to align with your brand identity and resonate with your target audience.'],
            ['page'=>'social-media-design','section'=>'highlight','key'=>'heading', 'value'=>'Why Hawks Marketing for Social Design?'],
            ['page'=>'social-media-design','section'=>'highlight','key'=>'p1_label','value'=>'Platform-Native'],
            ['page'=>'social-media-design','section'=>'highlight','key'=>'p1_text', 'value'=>'Designs built for the specific dimensions and formats of each social media platform.'],
            ['page'=>'social-media-design','section'=>'highlight','key'=>'p2_label','value'=>'Brand-Consistent'],
            ['page'=>'social-media-design','section'=>'highlight','key'=>'p2_text', 'value'=>'Your colors, fonts, and visual style applied consistently across every piece of content.'],
            ['page'=>'social-media-design','section'=>'highlight','key'=>'p3_label','value'=>'Engagement-Focused'],
            ['page'=>'social-media-design','section'=>'highlight','key'=>'p3_text', 'value'=>'Design decisions driven by what actually performs well on social media.'],
            ['page'=>'social-media-design','section'=>'services','key'=>'heading', 'value'=>'Our Social Media Design Services'],
            ['page'=>'social-media-design','section'=>'services','key'=>'s1_title','value'=>'Post & Feed Graphics'],
            ['page'=>'social-media-design','section'=>'services','key'=>'s1_desc', 'value'=>'Visually compelling post designs for your feed — including single images, carousels, and quote graphics that maintain a consistent, professional aesthetic.'],
            ['page'=>'social-media-design','section'=>'services','key'=>'s2_title','value'=>'Stories & Reels Covers'],
            ['page'=>'social-media-design','section'=>'services','key'=>'s2_desc', 'value'=>'Branded story templates and highlight cover icons that create a polished, cohesive look across your Instagram and Facebook profiles.'],
            ['page'=>'social-media-design','section'=>'services','key'=>'s3_title','value'=>'Social Ad Creatives'],
            ['page'=>'social-media-design','section'=>'services','key'=>'s3_desc', 'value'=>'High-converting ad creative designs for paid social campaigns — built to perform on Facebook, Instagram, and LinkedIn with clear visual hierarchy and strong CTAs.'],
            ['page'=>'social-media-design','section'=>'services','key'=>'s4_title','value'=>'Profile & Cover Art'],
            ['page'=>'social-media-design','section'=>'services','key'=>'s4_desc', 'value'=>'Professional profile pictures, cover banners, and channel art designed to make a strong first impression across all your social media profiles.'],

            // =====================================================================
            // LOGO DESIGNING
            // =====================================================================
            ['page'=>'logo-designing','section'=>'intro','key'=>'heading','value'=>'Logo Design That Defines Your Brand'],
            ['page'=>'logo-designing','section'=>'intro','key'=>'para1',  'value'=>'Your logo is the most visible representation of your brand. Hawks Marketing craft distinctive, memorable logos that capture the essence of your business and communicate your identity at a glance.'],
            ['page'=>'logo-designing','section'=>'intro','key'=>'para2',  'value'=>'We design logos that are versatile, scalable, and built to represent your business across every platform and medium — from business cards and signage to digital screens and social media profiles. Every logo we create is delivered with full file formats for all use cases.'],
            ['page'=>'logo-designing','section'=>'highlight','key'=>'heading', 'value'=>'Why Hawks Marketing for Logos?'],
            ['page'=>'logo-designing','section'=>'highlight','key'=>'p1_label','value'=>'Unique & Original'],
            ['page'=>'logo-designing','section'=>'highlight','key'=>'p1_text', 'value'=>'Every logo is custom-designed from scratch for your specific brand — never templated.'],
            ['page'=>'logo-designing','section'=>'highlight','key'=>'p2_label','value'=>'Versatile'],
            ['page'=>'logo-designing','section'=>'highlight','key'=>'p2_text', 'value'=>'Delivered in multiple formats (SVG, PNG, PDF) ready for both digital and print use.'],
            ['page'=>'logo-designing','section'=>'highlight','key'=>'p3_label','value'=>'Brand-Rooted'],
            ['page'=>'logo-designing','section'=>'highlight','key'=>'p3_text', 'value'=>'Designed after understanding your brand values, target audience, and industry.'],
            ['page'=>'logo-designing','section'=>'services','key'=>'heading', 'value'=>'Our Logo Design Process'],
            ['page'=>'logo-designing','section'=>'services','key'=>'s1_title','value'=>'Brand Discovery'],
            ['page'=>'logo-designing','section'=>'services','key'=>'s1_desc', 'value'=>'We begin by understanding your business, target audience, values, and competitive landscape to ensure your logo is strategically positioned from the start.'],
            ['page'=>'logo-designing','section'=>'services','key'=>'s2_title','value'=>'Concept Development'],
            ['page'=>'logo-designing','section'=>'services','key'=>'s2_desc', 'value'=>'We develop multiple logo concepts with varying styles and approaches, giving you real options to choose from and refine based on your vision.'],
            ['page'=>'logo-designing','section'=>'services','key'=>'s3_title','value'=>'Color & Typography'],
            ['page'=>'logo-designing','section'=>'services','key'=>'s3_desc', 'value'=>'Careful selection of colors, fonts, and visual elements that align with your brand personality and resonate with your target audience.'],
            ['page'=>'logo-designing','section'=>'services','key'=>'s4_title','value'=>'Final Delivery'],
            ['page'=>'logo-designing','section'=>'services','key'=>'s4_desc', 'value'=>'Complete logo package delivered in all required formats — vector files, transparent backgrounds, light and dark variants — ready for any application.'],

            // =====================================================================
            // BRANDING STRATEGY
            // =====================================================================
            ['page'=>'branding-strategy','section'=>'intro','key'=>'heading','value'=>'Branding Strategy That Positions You to Win'],
            ['page'=>'branding-strategy','section'=>'intro','key'=>'para1',  'value'=>'A strong brand strategy is the foundation of every successful marketing effort. Hawks Marketing develop data-informed brand strategies that align your positioning, messaging, and identity with your business goals and target audience expectations.'],
            ['page'=>'branding-strategy','section'=>'intro','key'=>'para2',  'value'=>'We analyse your market, competitors, and audience to develop a clear strategic direction that differentiates your brand and creates a lasting impression. Every decision is grounded in research and designed to build long-term brand equity.'],
            ['page'=>'branding-strategy','section'=>'highlight','key'=>'heading', 'value'=>'Why Hawks Marketing for Strategy?'],
            ['page'=>'branding-strategy','section'=>'highlight','key'=>'p1_label','value'=>'Research-Led'],
            ['page'=>'branding-strategy','section'=>'highlight','key'=>'p1_text', 'value'=>'Strategy built on real market data, competitor analysis, and audience insights.'],
            ['page'=>'branding-strategy','section'=>'highlight','key'=>'p2_label','value'=>'Differentiating'],
            ['page'=>'branding-strategy','section'=>'highlight','key'=>'p2_text', 'value'=>'We identify what makes your brand unique and build your positioning around it.'],
            ['page'=>'branding-strategy','section'=>'highlight','key'=>'p3_label','value'=>'Actionable'],
            ['page'=>'branding-strategy','section'=>'highlight','key'=>'p3_text', 'value'=>'Strategies that translate directly into marketing execution, not just documents.'],
            ['page'=>'branding-strategy','section'=>'services','key'=>'heading', 'value'=>'Our Branding Strategy Services'],
            ['page'=>'branding-strategy','section'=>'services','key'=>'s1_title','value'=>'Brand Positioning'],
            ['page'=>'branding-strategy','section'=>'services','key'=>'s1_desc', 'value'=>'We define a clear, compelling position for your brand in the market — identifying your unique value proposition and ensuring it resonates with your target audience.'],
            ['page'=>'branding-strategy','section'=>'services','key'=>'s2_title','value'=>'Messaging Framework'],
            ['page'=>'branding-strategy','section'=>'services','key'=>'s2_desc', 'value'=>'Consistent messaging guidelines covering your brand voice, key messages, and communication tone — ensuring every piece of content speaks with one clear voice.'],
            ['page'=>'branding-strategy','section'=>'services','key'=>'s3_title','value'=>'Competitor & Market Analysis'],
            ['page'=>'branding-strategy','section'=>'services','key'=>'s3_desc', 'value'=>'In-depth analysis of your competitive landscape to identify positioning gaps, differentiation opportunities, and strategic advantages you can exploit.'],
            ['page'=>'branding-strategy','section'=>'services','key'=>'s4_title','value'=>'Audience Profiling'],
            ['page'=>'branding-strategy','section'=>'services','key'=>'s4_desc', 'value'=>'Detailed audience persona development based on demographics, behavior, and psychographics — so your brand strategy is built around the people who matter most.'],

            // =====================================================================
            // BRANDING SERVICE
            // =====================================================================
            ['page'=>'branding-service','section'=>'intro','key'=>'heading','value'=>'Complete Branding That Builds Recognition and Trust'],
            ['page'=>'branding-service','section'=>'intro','key'=>'para1',  'value'=>'Branding is the process of creating a distinct identity for a business through visual, verbal, and strategic elements. Hawks Marketing develop strong brand identities that reflect the values, vision, and personality of a business.'],
            ['page'=>'branding-service','section'=>'intro','key'=>'para2',  'value'=>'We design cohesive brand assets including logos, color systems, typography, and guidelines. We ensure consistency across all platforms to build recognition and trust in the market. We shape brand positioning to differentiate businesses from competitors effectively.'],
            ['page'=>'branding-service','section'=>'intro','key'=>'para3',  'value'=>'We deliver complete branding solutions that strengthen perception, credibility, and long-term brand value.'],
            ['page'=>'branding-service','section'=>'highlight','key'=>'heading', 'value'=>'Why Hawks Marketing for Branding?'],
            ['page'=>'branding-service','section'=>'highlight','key'=>'p1_label','value'=>'Holistic Approach'],
            ['page'=>'branding-service','section'=>'highlight','key'=>'p1_text', 'value'=>'We cover every dimension of brand identity — visual, verbal, and strategic — in one integrated process.'],
            ['page'=>'branding-service','section'=>'highlight','key'=>'p2_label','value'=>'Built to Last'],
            ['page'=>'branding-service','section'=>'highlight','key'=>'p2_text', 'value'=>'Brand identities designed for longevity, not trends, ensuring relevance as your business grows.'],
            ['page'=>'branding-service','section'=>'highlight','key'=>'p3_label','value'=>'Consistent Across All Touchpoints'],
            ['page'=>'branding-service','section'=>'highlight','key'=>'p3_text', 'value'=>'We ensure your brand looks and feels the same everywhere it appears.'],
            ['page'=>'branding-service','section'=>'services','key'=>'heading', 'value'=>'Our Branding Services'],
            ['page'=>'branding-service','section'=>'services','key'=>'s1_title','value'=>'Visual Identity Design'],
            ['page'=>'branding-service','section'=>'services','key'=>'s1_desc', 'value'=>'Logo, color palette, typography, and graphic elements that form a cohesive visual system representing your brand consistently across every platform.'],
            ['page'=>'branding-service','section'=>'services','key'=>'s2_title','value'=>'Brand Asset Creation'],
            ['page'=>'branding-service','section'=>'services','key'=>'s2_desc', 'value'=>'All the branded materials your business needs — business cards, letterheads, social media templates, email signatures, and more, all aligned to your identity.'],
            ['page'=>'branding-service','section'=>'services','key'=>'s3_title','value'=>'Brand Refresh & Rebrand'],
            ['page'=>'branding-service','section'=>'services','key'=>'s3_desc', 'value'=>'Evolving or repositioning your existing brand identity to better reflect your current business direction, audience, and market positioning.'],
            ['page'=>'branding-service','section'=>'services','key'=>'s4_title','value'=>'Brand Consistency Management'],
            ['page'=>'branding-service','section'=>'services','key'=>'s4_desc', 'value'=>'Ensuring your brand is applied correctly and consistently across all digital and physical touchpoints — protecting and strengthening your brand equity over time.'],

            // =====================================================================
            // BRAND MANUAL
            // =====================================================================
            ['page'=>'brand-manual','section'=>'intro','key'=>'heading','value'=>'Brand Manual That Keeps Your Brand Consistent Everywhere'],
            ['page'=>'brand-manual','section'=>'intro','key'=>'para1',  'value'=>'A brand manual is the definitive reference document for how your brand should look, sound, and feel across every touchpoint. Hawks Marketing create comprehensive brand guidelines that give your team and partners everything they need to represent your brand correctly.'],
            ['page'=>'brand-manual','section'=>'intro','key'=>'para2',  'value'=>'We document logo usage rules, color specifications, typography systems, tone of voice guidelines, and visual standards — ensuring your brand is applied consistently whether by internal teams, agencies, or suppliers.'],
            ['page'=>'brand-manual','section'=>'highlight','key'=>'heading', 'value'=>'Why a Brand Manual Matters'],
            ['page'=>'brand-manual','section'=>'highlight','key'=>'p1_label','value'=>'Consistency'],
            ['page'=>'brand-manual','section'=>'highlight','key'=>'p1_text', 'value'=>'Ensures every piece of branded content looks and feels cohesive, no matter who creates it.'],
            ['page'=>'brand-manual','section'=>'highlight','key'=>'p2_label','value'=>'Protection'],
            ['page'=>'brand-manual','section'=>'highlight','key'=>'p2_text', 'value'=>'Clear rules prevent misuse of your brand assets that could dilute brand equity.'],
            ['page'=>'brand-manual','section'=>'highlight','key'=>'p3_label','value'=>'Efficiency'],
            ['page'=>'brand-manual','section'=>'highlight','key'=>'p3_text', 'value'=>'Faster onboarding for new team members and agencies with clear reference material.'],
            ['page'=>'brand-manual','section'=>'services','key'=>'heading', 'value'=>'Brand Manual Contents'],
            ['page'=>'brand-manual','section'=>'services','key'=>'s1_title','value'=>'Logo Usage Guidelines'],
            ['page'=>'brand-manual','section'=>'services','key'=>'s1_desc', 'value'=>'Correct and incorrect logo usage rules — minimum sizes, clear space requirements, approved color variations, and forbidden alterations.'],
            ['page'=>'brand-manual','section'=>'services','key'=>'s2_title','value'=>'Color System'],
            ['page'=>'brand-manual','section'=>'services','key'=>'s2_desc', 'value'=>'Primary and secondary color palettes with exact HEX, RGB, CMYK, and Pantone values for consistent reproduction across digital and print media.'],
            ['page'=>'brand-manual','section'=>'services','key'=>'s3_title','value'=>'Typography Standards'],
            ['page'=>'brand-manual','section'=>'services','key'=>'s3_desc', 'value'=>'Font families, weights, sizes, and hierarchy rules for all brand communications — headings, body copy, captions, and UI text.'],
            ['page'=>'brand-manual','section'=>'services','key'=>'s4_title','value'=>'Tone of Voice & Messaging'],
            ['page'=>'brand-manual','section'=>'services','key'=>'s4_desc', 'value'=>'Brand voice personality, communication tone, key messages, and language guidelines ensuring consistent, on-brand written communication across all channels.'],

            // =====================================================================
            // CUSTOM WEBSITE DEVELOPMENT
            // =====================================================================
            ['page'=>'custom-website-development','section'=>'intro','key'=>'heading','value'=>'Custom Websites Built to Fit Your Business Exactly'],
            ['page'=>'custom-website-development','section'=>'intro','key'=>'para1',  'value'=>'Off-the-shelf templates can\'t capture what makes your business unique. Hawks Marketing build custom websites from the ground up — tailored to your exact requirements, brand identity, and business objectives.'],
            ['page'=>'custom-website-development','section'=>'intro','key'=>'para2',  'value'=>'We focus on clean code, scalable architecture, and seamless integrations that grow with your business. Whether you need a marketing website, a complex web application, or a feature-rich platform, we deliver a solution built specifically for you — not adapted from something generic.'],
            ['page'=>'custom-website-development','section'=>'highlight','key'=>'heading', 'value'=>'Why Choose Custom Development?'],
            ['page'=>'custom-website-development','section'=>'highlight','key'=>'p1_label','value'=>'Built for You'],
            ['page'=>'custom-website-development','section'=>'highlight','key'=>'p1_text', 'value'=>'Every feature, layout, and functionality is designed around your specific needs, not a template\'s limitations.'],
            ['page'=>'custom-website-development','section'=>'highlight','key'=>'p2_label','value'=>'Scalable'],
            ['page'=>'custom-website-development','section'=>'highlight','key'=>'p2_text', 'value'=>'Clean, maintainable code that\'s easy to extend as your business and requirements evolve.'],
            ['page'=>'custom-website-development','section'=>'highlight','key'=>'p3_label','value'=>'Performance-Optimised'],
            ['page'=>'custom-website-development','section'=>'highlight','key'=>'p3_text', 'value'=>'Lightweight, fast-loading code that performs better than bloated template-based builds.'],
            ['page'=>'custom-website-development','section'=>'services','key'=>'heading', 'value'=>'Our Custom Development Services'],
            ['page'=>'custom-website-development','section'=>'services','key'=>'s1_title','value'=>'Fully Custom Web Development'],
            ['page'=>'custom-website-development','section'=>'services','key'=>'s1_desc', 'value'=>'End-to-end website development built from scratch using modern technologies — no templates, no shortcuts, just a solution crafted precisely for your business.'],
            ['page'=>'custom-website-development','section'=>'services','key'=>'s2_title','value'=>'Third-Party Integrations'],
            ['page'=>'custom-website-development','section'=>'services','key'=>'s2_desc', 'value'=>'Seamless integration with CRMs, payment gateways, APIs, email platforms, and any other tools your business relies on — all connected within your custom solution.'],
            ['page'=>'custom-website-development','section'=>'services','key'=>'s3_title','value'=>'Secure & Tested Builds'],
            ['page'=>'custom-website-development','section'=>'services','key'=>'s3_desc', 'value'=>'Security-first development with thorough testing across devices and browsers — ensuring your website is reliable, protected, and ready for real-world use.'],
            ['page'=>'custom-website-development','section'=>'services','key'=>'s4_title','value'=>'Maintenance & Support'],
            ['page'=>'custom-website-development','section'=>'services','key'=>'s4_desc', 'value'=>'Ongoing maintenance, updates, and technical support to keep your custom website running smoothly and securely after launch.'],

            // =====================================================================
            // ECOMMERCE DEVELOPMENT
            // =====================================================================
            ['page'=>'ecommerce-development','section'=>'intro','key'=>'heading','value'=>'Ecommerce Stores Built to Sell'],
            ['page'=>'ecommerce-development','section'=>'intro','key'=>'para1',  'value'=>'A great ecommerce store does more than list products — it guides visitors seamlessly from discovery to purchase. Hawks Marketing build fully featured online stores designed to convert browsers into buyers.'],
            ['page'=>'ecommerce-development','section'=>'intro','key'=>'para2',  'value'=>'We build fast, secure, and user-friendly ecommerce platforms with complete product management, payment gateway integrations, order tracking, and inventory systems. Every store is optimised for speed, mobile performance, and search visibility.'],
            ['page'=>'ecommerce-development','section'=>'highlight','key'=>'heading', 'value'=>'Why Hawks Marketing for Ecommerce?'],
            ['page'=>'ecommerce-development','section'=>'highlight','key'=>'p1_label','value'=>'Conversion-Focused'],
            ['page'=>'ecommerce-development','section'=>'highlight','key'=>'p1_text', 'value'=>'Store architecture and UX designed to reduce friction and increase purchase completion rates.'],
            ['page'=>'ecommerce-development','section'=>'highlight','key'=>'p2_label','value'=>'Secure Payments'],
            ['page'=>'ecommerce-development','section'=>'highlight','key'=>'p2_text', 'value'=>'Reliable payment gateway integrations with industry-standard security and fraud protection.'],
            ['page'=>'ecommerce-development','section'=>'highlight','key'=>'p3_label','value'=>'Scalable'],
            ['page'=>'ecommerce-development','section'=>'highlight','key'=>'p3_text', 'value'=>'Built to handle growing product catalogs and increasing traffic without performance degradation.'],
            ['page'=>'ecommerce-development','section'=>'services','key'=>'heading', 'value'=>'Our Ecommerce Services'],
            ['page'=>'ecommerce-development','section'=>'services','key'=>'s1_title','value'=>'Custom Ecommerce Development'],
            ['page'=>'ecommerce-development','section'=>'services','key'=>'s1_desc', 'value'=>'Fully custom online store development tailored to your product range, customer journey, and business processes — built for performance and scalability.'],
            ['page'=>'ecommerce-development','section'=>'services','key'=>'s2_title','value'=>'Payment Gateway Integration'],
            ['page'=>'ecommerce-development','section'=>'services','key'=>'s2_desc', 'value'=>'Smooth, secure integration with major payment processors — credit cards, bank transfers, and local payment methods — for a frictionless checkout experience.'],
            ['page'=>'ecommerce-development','section'=>'services','key'=>'s3_title','value'=>'Product & Inventory Management'],
            ['page'=>'ecommerce-development','section'=>'services','key'=>'s3_desc', 'value'=>'Intuitive admin panels for managing products, categories, stock levels, orders, and customer data — giving you complete control over your store operations.'],
            ['page'=>'ecommerce-development','section'=>'services','key'=>'s4_title','value'=>'Mobile-Optimised Shopping'],
            ['page'=>'ecommerce-development','section'=>'services','key'=>'s4_desc', 'value'=>'Fully responsive store designs that deliver a seamless shopping experience on smartphones and tablets — where the majority of ecommerce traffic comes from.'],

            // =====================================================================
            // APP DEVELOPMENT
            // =====================================================================
            ['page'=>'app-development','section'=>'intro','key'=>'heading','value'=>'Mobile Apps That Engage Users and Drive Growth'],
            ['page'=>'app-development','section'=>'intro','key'=>'para1',  'value'=>'App development involves creating functional and user-focused mobile applications for Android and iOS platforms. Hawks Marketing develop custom applications tailored to business needs, ensuring performance, scalability, and security.'],
            ['page'=>'app-development','section'=>'intro','key'=>'para2',  'value'=>'We design intuitive interfaces that provide smooth navigation and a seamless user experience. We build both front-end and back-end systems to ensure complete functionality and reliability. We focus on optimizing speed, usability, and integration with modern digital tools and services.'],
            ['page'=>'app-development','section'=>'intro','key'=>'para3',  'value'=>'We deliver high-quality mobile applications that enhance user engagement and support business growth.'],
            ['page'=>'app-development','section'=>'highlight','key'=>'heading', 'value'=>'Why Hawks Marketing for Apps?'],
            ['page'=>'app-development','section'=>'highlight','key'=>'p1_label','value'=>'Cross-Platform'],
            ['page'=>'app-development','section'=>'highlight','key'=>'p1_text', 'value'=>'Native and cross-platform development for both Android and iOS from a single project.'],
            ['page'=>'app-development','section'=>'highlight','key'=>'p2_label','value'=>'User-Centered Design'],
            ['page'=>'app-development','section'=>'highlight','key'=>'p2_text', 'value'=>'Intuitive interfaces designed around how your users actually think and navigate.'],
            ['page'=>'app-development','section'=>'highlight','key'=>'p3_label','value'=>'End-to-End'],
            ['page'=>'app-development','section'=>'highlight','key'=>'p3_text', 'value'=>'From concept and design through development, testing, and app store deployment.'],
            ['page'=>'app-development','section'=>'services','key'=>'heading', 'value'=>'Our App Development Services'],
            ['page'=>'app-development','section'=>'services','key'=>'s1_title','value'=>'Android & iOS Development'],
            ['page'=>'app-development','section'=>'services','key'=>'s1_desc', 'value'=>'Custom mobile application development for both Android and iOS platforms — native performance with a consistent, high-quality user experience on every device.'],
            ['page'=>'app-development','section'=>'services','key'=>'s2_title','value'=>'App UI/UX Design'],
            ['page'=>'app-development','section'=>'services','key'=>'s2_desc', 'value'=>'Clean, intuitive mobile interface design that makes your app easy to navigate and enjoyable to use — reducing drop-off and increasing user retention.'],
            ['page'=>'app-development','section'=>'services','key'=>'s3_title','value'=>'Backend & API Development'],
            ['page'=>'app-development','section'=>'services','key'=>'s3_desc', 'value'=>'Robust backend systems and APIs that power your app\'s functionality — user authentication, data management, push notifications, and third-party integrations.'],
            ['page'=>'app-development','section'=>'services','key'=>'s4_title','value'=>'App Store Deployment'],
            ['page'=>'app-development','section'=>'services','key'=>'s4_desc', 'value'=>'Complete handling of app store submission processes for Google Play and Apple App Store — including store listings, screenshots, and compliance requirements.'],

            // =====================================================================
            // SOCIAL MEDIA CONTENT MARKETING
            // =====================================================================
            ['page'=>'social-media-content-marketing','section'=>'intro','key'=>'heading','value'=>'Social Media Content Marketing That Builds Real Audiences'],
            ['page'=>'social-media-content-marketing','section'=>'intro','key'=>'para1',  'value'=>'Social media content marketing goes beyond posting regularly — it\'s about creating the right content for the right audience at the right time. Hawks Marketing develop strategic content plans that grow your following, drive meaningful engagement, and convert followers into customers.'],
            ['page'=>'social-media-content-marketing','section'=>'intro','key'=>'para2',  'value'=>'We tailor content strategies to align with your brand goals and target audience behavior. We focus on creating content that increases engagement, awareness, and audience retention across all major platforms.'],
            ['page'=>'social-media-content-marketing','section'=>'highlight','key'=>'heading', 'value'=>'Why Hawks Marketing for Social Content?'],
            ['page'=>'social-media-content-marketing','section'=>'highlight','key'=>'p1_label','value'=>'Strategy-Led'],
            ['page'=>'social-media-content-marketing','section'=>'highlight','key'=>'p1_text', 'value'=>'Content backed by platform data, audience insights, and clear objectives — not just random posting.'],
            ['page'=>'social-media-content-marketing','section'=>'highlight','key'=>'p2_label','value'=>'Platform-Native'],
            ['page'=>'social-media-content-marketing','section'=>'highlight','key'=>'p2_text', 'value'=>'Content tailored to how each platform\'s algorithm and audience prefers to consume information.'],
            ['page'=>'social-media-content-marketing','section'=>'highlight','key'=>'p3_label','value'=>'Consistent Voice'],
            ['page'=>'social-media-content-marketing','section'=>'highlight','key'=>'p3_text', 'value'=>'Every piece of content reflects your brand tone and messaging across all channels.'],
            ['page'=>'social-media-content-marketing','section'=>'services','key'=>'heading', 'value'=>'Our Social Media Content Services'],
            ['page'=>'social-media-content-marketing','section'=>'services','key'=>'s1_title','value'=>'Content Strategy & Planning'],
            ['page'=>'social-media-content-marketing','section'=>'services','key'=>'s1_desc', 'value'=>'Full content calendar development — topics, formats, posting frequency, and platform distribution — all aligned to your marketing goals and audience behavior.'],
            ['page'=>'social-media-content-marketing','section'=>'services','key'=>'s2_title','value'=>'Content Creation'],
            ['page'=>'social-media-content-marketing','section'=>'services','key'=>'s2_desc', 'value'=>'High-quality posts, captions, graphics, and short-form videos crafted to perform well organically and engage your target audience authentically.'],
            ['page'=>'social-media-content-marketing','section'=>'services','key'=>'s3_title','value'=>'Performance Analytics'],
            ['page'=>'social-media-content-marketing','section'=>'services','key'=>'s3_desc', 'value'=>'Regular reporting on reach, engagement, follower growth, and content performance — with insights used to continuously refine and improve your strategy.'],
            ['page'=>'social-media-content-marketing','section'=>'services','key'=>'s4_title','value'=>'Hashtag & Trend Strategy'],
            ['page'=>'social-media-content-marketing','section'=>'services','key'=>'s4_desc', 'value'=>'Research-based hashtag strategies and trend monitoring that expand your organic reach and keep your content visible and discoverable to new audiences.'],

            // =====================================================================
            // SOCIAL MEDIA CONTENT CREATION
            // =====================================================================
            ['page'=>'social-media-content-creation','section'=>'intro','key'=>'heading','value'=>'Social Media Content Creation at Scale'],
            ['page'=>'social-media-content-creation','section'=>'intro','key'=>'para1',  'value'=>'Consistent, high-quality content is what separates brands that grow from brands that stagnate. Hawks Marketing produce a steady stream of engaging social media content — posts, captions, visuals, and short-form videos — that keeps your brand active, relevant, and engaging.'],
            ['page'=>'social-media-content-creation','section'=>'intro','key'=>'para2',  'value'=>'We handle the full creation process: ideation, scripting, design, and scheduling. Every piece of content is crafted to align with your brand voice, resonate with your audience, and perform well on each platform\'s algorithm.'],
            ['page'=>'social-media-content-creation','section'=>'highlight','key'=>'heading', 'value'=>'Why Hawks Marketing for Content Creation?'],
            ['page'=>'social-media-content-creation','section'=>'highlight','key'=>'p1_label','value'=>'End-to-End'],
            ['page'=>'social-media-content-creation','section'=>'highlight','key'=>'p1_text', 'value'=>'We handle everything from concept through creation and scheduling, so you don\'t have to.'],
            ['page'=>'social-media-content-creation','section'=>'highlight','key'=>'p2_label','value'=>'Brand-Consistent'],
            ['page'=>'social-media-content-creation','section'=>'highlight','key'=>'p2_text', 'value'=>'Every piece of content reflects your brand voice, visual identity, and messaging.'],
            ['page'=>'social-media-content-creation','section'=>'highlight','key'=>'p3_label','value'=>'High Volume, High Quality'],
            ['page'=>'social-media-content-creation','section'=>'highlight','key'=>'p3_text', 'value'=>'Consistent output without compromising on the standard of each individual piece.'],
            ['page'=>'social-media-content-creation','section'=>'services','key'=>'heading', 'value'=>'Our Content Creation Services'],
            ['page'=>'social-media-content-creation','section'=>'services','key'=>'s1_title','value'=>'Visual Post Graphics'],
            ['page'=>'social-media-content-creation','section'=>'services','key'=>'s1_desc', 'value'=>'Branded graphic posts for your feed — single images, carousels, infographics, and quote cards designed to stand out and drive engagement.'],
            ['page'=>'social-media-content-creation','section'=>'services','key'=>'s2_title','value'=>'Caption & Copy Writing'],
            ['page'=>'social-media-content-creation','section'=>'services','key'=>'s2_desc', 'value'=>'Engaging, on-brand captions and post copy that complement your visuals, communicate your message clearly, and include relevant calls to action.'],
            ['page'=>'social-media-content-creation','section'=>'services','key'=>'s3_title','value'=>'Short-Form Video Content'],
            ['page'=>'social-media-content-creation','section'=>'services','key'=>'s3_desc', 'value'=>'Reels, shorts, and story videos produced and edited for social media — scripted, shot-listed, or edited from your existing footage.'],
            ['page'=>'social-media-content-creation','section'=>'services','key'=>'s4_title','value'=>'Content Scheduling & Publishing'],
            ['page'=>'social-media-content-creation','section'=>'services','key'=>'s4_desc', 'value'=>'Strategic scheduling of content at optimal times for your audience — with consistent posting frequency to maintain algorithm favour and audience engagement.'],

            // =====================================================================
            // BLOG WRITING
            // =====================================================================
            ['page'=>'blog-writing','section'=>'intro','key'=>'heading','value'=>'Blog Writing That Builds Authority and Drives Traffic'],
            ['page'=>'blog-writing','section'=>'intro','key'=>'para1',  'value'=>'Well-written, well-researched blog content does three things simultaneously: it establishes your brand as an industry authority, improves your SEO rankings, and drives consistent organic traffic to your website.'],
            ['page'=>'blog-writing','section'=>'intro','key'=>'para2',  'value'=>'Hawks Marketing produce professional blog articles tailored to your industry, audience, and keyword strategy. Every article is thoroughly researched, clearly structured, and written in your brand voice — ensuring it resonates with readers while satisfying search engine requirements.'],
            ['page'=>'blog-writing','section'=>'highlight','key'=>'heading', 'value'=>'Why Hawks Marketing for Blogs?'],
            ['page'=>'blog-writing','section'=>'highlight','key'=>'p1_label','value'=>'SEO-Optimised'],
            ['page'=>'blog-writing','section'=>'highlight','key'=>'p1_text', 'value'=>'Articles built around targeted keywords with proper structure, meta descriptions, and internal linking.'],
            ['page'=>'blog-writing','section'=>'highlight','key'=>'p2_label','value'=>'Research-Backed'],
            ['page'=>'blog-writing','section'=>'highlight','key'=>'p2_text', 'value'=>'Well-researched, accurate content that builds genuine trust and authority with your audience.'],
            ['page'=>'blog-writing','section'=>'highlight','key'=>'p3_label','value'=>'Brand Voice'],
            ['page'=>'blog-writing','section'=>'highlight','key'=>'p3_text', 'value'=>'Every article written in your tone — whether professional, conversational, technical, or industry-specific.'],
            ['page'=>'blog-writing','section'=>'services','key'=>'heading', 'value'=>'Our Blog Writing Services'],
            ['page'=>'blog-writing','section'=>'services','key'=>'s1_title','value'=>'Industry Blog Articles'],
            ['page'=>'blog-writing','section'=>'services','key'=>'s1_desc', 'value'=>'In-depth articles covering topics relevant to your industry — establishing your brand as a knowledgeable, trustworthy voice in your field.'],
            ['page'=>'blog-writing','section'=>'services','key'=>'s2_title','value'=>'SEO Blog Content'],
            ['page'=>'blog-writing','section'=>'services','key'=>'s2_desc', 'value'=>'Keyword-targeted articles structured to rank on search engines and drive qualified organic traffic to your website month after month.'],
            ['page'=>'blog-writing','section'=>'services','key'=>'s3_title','value'=>'How-To & Guide Articles'],
            ['page'=>'blog-writing','section'=>'services','key'=>'s3_desc', 'value'=>'Practical, value-driven how-to guides and educational content that helps your audience solve problems — building loyalty and encouraging return visits.'],
            ['page'=>'blog-writing','section'=>'services','key'=>'s4_title','value'=>'Blog Content Calendar'],
            ['page'=>'blog-writing','section'=>'services','key'=>'s4_desc', 'value'=>'Strategic blog publishing schedules with topics planned in advance — ensuring consistent output, topical relevance, and maximum SEO impact over time.'],

            // =====================================================================
            // BUSINESS ANALYSIS
            // =====================================================================
            ['page'=>'business-analysis','section'=>'intro','key'=>'heading','value'=>'Business Analysis That Turns Data into Growth'],
            ['page'=>'business-analysis','section'=>'intro','key'=>'para1',  'value'=>'Business analysis involves evaluating a company\'s operations, market position, and performance to identify growth opportunities. Hawks Marketing analyze data, audience behavior, and market trends to support strategic decision-making.'],
            ['page'=>'business-analysis','section'=>'intro','key'=>'para2',  'value'=>'We identify strengths, weaknesses, and gaps affecting business performance and scalability. We assess competitors to understand positioning and improve market advantage. We translate insights into actionable strategies that improve efficiency and results.'],
            ['page'=>'business-analysis','section'=>'intro','key'=>'para3',  'value'=>'We deliver structured analysis that supports sustainable business growth and better planning.'],
            ['page'=>'business-analysis','section'=>'highlight','key'=>'heading', 'value'=>'Why Hawks Marketing for Analysis?'],
            ['page'=>'business-analysis','section'=>'highlight','key'=>'p1_label','value'=>'Data-Driven'],
            ['page'=>'business-analysis','section'=>'highlight','key'=>'p1_text', 'value'=>'Analysis grounded in real data — not assumptions — for reliable, actionable conclusions.'],
            ['page'=>'business-analysis','section'=>'highlight','key'=>'p2_label','value'=>'Comprehensive'],
            ['page'=>'business-analysis','section'=>'highlight','key'=>'p2_text', 'value'=>'We evaluate every dimension: digital performance, audience behavior, market position, and competitive landscape.'],
            ['page'=>'business-analysis','section'=>'highlight','key'=>'p3_label','value'=>'Actionable Outputs'],
            ['page'=>'business-analysis','section'=>'highlight','key'=>'p3_text', 'value'=>'We deliver clear, prioritised recommendations you can implement immediately.'],
            ['page'=>'business-analysis','section'=>'services','key'=>'heading', 'value'=>'Our Business Analysis Services'],
            ['page'=>'business-analysis','section'=>'services','key'=>'s1_title','value'=>'Digital Performance Audit'],
            ['page'=>'business-analysis','section'=>'services','key'=>'s1_desc', 'value'=>'Comprehensive review of your current digital presence — website, social media, SEO, and advertising — identifying what\'s working, what\'s not, and where the biggest opportunities are.'],
            ['page'=>'business-analysis','section'=>'services','key'=>'s2_title','value'=>'Competitor Analysis'],
            ['page'=>'business-analysis','section'=>'services','key'=>'s2_desc', 'value'=>'In-depth assessment of your key competitors\' strategies, positioning, content, and digital performance to identify gaps and areas where you can gain a competitive edge.'],
            ['page'=>'business-analysis','section'=>'services','key'=>'s3_title','value'=>'Audience & Market Research'],
            ['page'=>'business-analysis','section'=>'services','key'=>'s3_desc', 'value'=>'Research into your target audience\'s behavior, preferences, pain points, and buying patterns — providing the foundation for more effective marketing and business decisions.'],
            ['page'=>'business-analysis','section'=>'services','key'=>'s4_title','value'=>'Growth Opportunity Report'],
            ['page'=>'business-analysis','section'=>'services','key'=>'s4_desc', 'value'=>'A structured analysis report with clear identification of your top growth opportunities, prioritised by impact and feasibility — a strategic roadmap for what to do next.'],

            // =====================================================================
            // CONSULTATION
            // =====================================================================
            ['page'=>'consultation','section'=>'intro','key'=>'heading','value'=>'Expert Consultation to Accelerate Your Growth'],
            ['page'=>'consultation','section'=>'intro','key'=>'para1',  'value'=>'Business consultation involves providing expert guidance to improve business strategy, operations, and growth potential. Hawks Marketing offer strategic recommendations based on market research, data analysis, and industry insights.'],
            ['page'=>'consultation','section'=>'intro','key'=>'para2',  'value'=>'We help businesses identify challenges and implement effective solutions for improvement. We guide decision-making processes to align with long-term business objectives. We support optimization of marketing, branding, and operational strategies.'],
            ['page'=>'consultation','section'=>'intro','key'=>'para3',  'value'=>'We deliver clear, actionable consultation to help businesses achieve measurable and sustainable success.'],
            ['page'=>'consultation','section'=>'highlight','key'=>'heading', 'value'=>'Why Hawks Marketing for Consultation?'],
            ['page'=>'consultation','section'=>'highlight','key'=>'p1_label','value'=>'Expert Guidance'],
            ['page'=>'consultation','section'=>'highlight','key'=>'p1_text', 'value'=>'Strategic advice from experienced professionals with deep knowledge of digital marketing and business growth.'],
            ['page'=>'consultation','section'=>'highlight','key'=>'p2_label','value'=>'Tailored to You'],
            ['page'=>'consultation','section'=>'highlight','key'=>'p2_text', 'value'=>'Recommendations built around your specific situation, goals, and challenges — not generic advice.'],
            ['page'=>'consultation','section'=>'highlight','key'=>'p3_label','value'=>'Actionable'],
            ['page'=>'consultation','section'=>'highlight','key'=>'p3_text', 'value'=>'Every session ends with clear next steps you can implement immediately to see results.'],
            ['page'=>'consultation','section'=>'services','key'=>'heading', 'value'=>'Our Consultation Services'],
            ['page'=>'consultation','section'=>'services','key'=>'s1_title','value'=>'Marketing Strategy Consultation'],
            ['page'=>'consultation','section'=>'services','key'=>'s1_desc', 'value'=>'Expert guidance on your overall digital marketing direction — channel selection, budget allocation, campaign priorities, and go-to-market approaches tailored to your business goals.'],
            ['page'=>'consultation','section'=>'services','key'=>'s2_title','value'=>'Brand Development Consultation'],
            ['page'=>'consultation','section'=>'services','key'=>'s2_desc', 'value'=>'Strategic advice on brand identity, positioning, and messaging — helping you build a brand that connects with your audience and differentiates you in the market.'],
            ['page'=>'consultation','section'=>'services','key'=>'s3_title','value'=>'Digital Growth Planning'],
            ['page'=>'consultation','section'=>'services','key'=>'s3_desc', 'value'=>'Structured planning sessions to map out your digital growth roadmap — identifying quick wins and long-term strategies to scale your online presence and revenue.'],
            ['page'=>'consultation','section'=>'services','key'=>'s4_title','value'=>'Ongoing Advisory Support'],
            ['page'=>'consultation','section'=>'services','key'=>'s4_desc', 'value'=>'Regular consultation sessions to keep your strategy aligned with changing market conditions, platform updates, and evolving business objectives over time.'],

        ]; // end $records

        // Fetch all existing page+section+key combinations
        $existing = PageContent::select(['page', 'section', 'key'])->get()
            ->mapWithKeys(fn($r) => ["{$r->page}|{$r->section}|{$r->key}" => true])
            ->toArray();

        $now      = now();
        $toInsert = [];

        foreach ($records as $record) {
            $key = "{$record['page']}|{$record['section']}|{$record['key']}";
            if (! isset($existing[$key])) {
                $toInsert[] = array_merge($record, [
                    'created_at' => $now,
                    'updated_at' => $now,
                ]);
            }
        }

        if (! empty($toInsert)) {
            PageContent::insert($toInsert);
            $this->command->info('ContentSeeder: inserted ' . count($toInsert) . ' new records.');
        } else {
            $this->command->info('ContentSeeder: all records already exist, nothing inserted.');
        }
    }
}
