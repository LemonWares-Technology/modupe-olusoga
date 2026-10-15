<?php

namespace Database\Seeders;

use App\Models\Insight;
use Illuminate\Database\Seeder;

class InsightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $articles = [
            [
                'title' => 'Building the Transgenerational Firm: Moving Beyond Founder Dependency in Professional Services',
                'slug' => 'building-the-transgenerational-firm',
                'category' => 'Governance & Institutions',
                'summary' => 'Why traditional law firms struggle to survive past their founding generation, and how intentional governance, institutionalisation, and shared leadership architecture create lasting enterprises.',
                'content' => "In commercial legal practice and broader professional services, the prevailing model has historically been built around the brilliance, relationships, and driving force of individual founders. For decades, this model produced formidable commercial success. Yet, across Africa and global emerging markets, we repeatedly witness a sobering phenomenon: firms that thrived under their creators struggle to preserve their market leadership, cohesion, and cultural essence once the founding generation departs.\n\nThe fundamental challenge is founder dependency. When strategy, institutional wisdom, key client relationships, and cultural norms reside primarily within the consciousness of one or two individuals, the firm is not an institution; it is a proprietorship in partnership clothing.\n\nTo build a transgenerational firm, leadership must intentionally pursue three structural shifts:\n\n1. From Personality-Driven Authority to Institutional Governance: Codifying decision-making frameworks, clear delegation protocols, and transparent partner remuneration and accountability metrics.\n\n2. De-linking Client Loyalty from Singular Personalities: Cultivating institutional client relationships grounded in cross-functional service excellence, institutional trust, and proactive team succession.\n\n3. Engineering the Next-Generation Leadership Pipeline: Transitioning from casual apprenticeship to deliberate development of business-of-law competencies, strategic leadership, and operational excellence.\n\nLongevity is neither accidental nor organic. It is an intentional design choice.",
                'read_time' => '7 min read',
                'published_date' => '2026-09-15',
                'is_featured' => true,
            ],
            [
                'title' => 'From Aspiration to Intentional Action: The Discipline of Execution in Leadership',
                'slug' => 'from-aspiration-to-intentional-action',
                'category' => 'Leadership & Execution',
                'summary' => 'Desire and ambition are abundant; the capacity to maintain disciplined, deliberate execution over time is rare. How leaders bridge the chasm between stated ambition and measurable outcome.',
                'content' => "In my work with executives, senior partners, and ambitious emerging leaders, one pattern repeats itself with striking regularity: people do not fail because they lack ambition. They struggle because they fail to understand the exacting demands of consistency.\n\nAspiration is intoxicating. It provides emotional momentum and clarity of desire. But desire alone cannot build an institution, write a seminal book, or elevate an executive career. Between aspiration and tangible results lies a non-negotiable discipline:\n\nAspiration → Clarity → Action → Consistency → Results.\n\nTrue clarity requires shedding conflicting priorities and defining the core non-negotiable levers. Intentional action demands structural weekly rituals rather than bursts of sporadic effort. And consistency requires an accountability mechanism that outlasts initial enthusiasm.\n\nWhen we cultivate leaders who can hold themselves and their teams accountable to the quiet work of daily progress, transformation ceases to be theoretical.",
                'read_time' => '5 min read',
                'published_date' => '2026-08-28',
                'is_featured' => true,
            ],
            [
                'title' => 'The Modern Law Firm COO: Institutionalising Operations, Strategy, and People',
                'slug' => 'the-modern-law-firm-coo',
                'category' => 'Law Firm Management',
                'summary' => 'As legal markets mature and client demands escalate, the role of professional business leadership within law firms has evolved from administrative support to strategic catalyst.',
                'content' => "Historically, law firms viewed operational leadership through the narrow lens of administrative overhead. Practice partners billed hours, while operational staff handled facilities, billing mechanics, and basic office logistics. Today, that paradigm is entirely obsolete.\n\nThe commercial law firm of the 21st century operates in a hyper-competitive, technology-driven, and highly regulated global marketplace. Clients no longer purchase legal advice in a vacuum; they evaluate delivery predictability, information security, pricing transparency, and talent stability.\n\nIn this environment, executive leadership—spanning strategy, institutional governance, people systems, technology adoption, and operational excellence—is an indispensable partner to equity leadership. When practice heads and business operations executives achieve genuine strategic alignment, firms achieve sustainable commercial resilience and elite talent retention.",
                'read_time' => '6 min read',
                'published_date' => '2026-07-14',
                'is_featured' => false,
            ],
            [
                'title' => 'The Future of Professional Services: Technology, AI, and the Human Premium',
                'slug' => 'the-future-of-professional-services-ai-and-people',
                'category' => 'Future of Work',
                'summary' => 'In an era where generative AI and automated workflows commoditise routine legal tasks, what becomes the true differentiator for top-tier advisory institutions?',
                'content' => "Artificial intelligence and legal tech workflow automation are accelerating at unprecedented speed across international jurisdictions. Document analysis, contract drafting, and preliminary research are becoming radically compressed.\n\nYet the greatest mistake leaders can make is to treat technology as a purely technical consideration. The true frontier of competitive advantage in professional services will not be access to algorithms—which will rapidly commoditise—but the institutional human premium.\n\nWhat cannot be automated is strategic judgment, high-stakes empathy, ethical fortitude, relationship trust, and the institutional integrity that enables an organisation to endure across generations. Firms that invest equally in operational modernisation and human leadership development will command the future.",
                'read_time' => '8 min read',
                'published_date' => '2026-06-02',
                'is_featured' => false,
            ],
        ];

        foreach ($articles as $article) {
            Insight::updateOrCreate(
                ['slug' => $article['slug']],
                $article
            );
        }
    }
}
