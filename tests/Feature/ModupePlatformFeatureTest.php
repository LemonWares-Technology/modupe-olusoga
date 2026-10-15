<?php

namespace Tests\Feature;

use Database\Seeders\InsightSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ModupePlatformFeatureTest extends TestCase
{
    use RefreshDatabase;

    public function test_homepage_renders_successfully_with_positioning_and_pillars(): void
    {
        $response = $this->get(route('home'));

        $response->assertStatus(200);
        $response->assertSee('MODUPE OLUSOGA');
        $response->assertSee('Building');
        $response->assertSee('that endure');
        $response->assertSee('Streamsowers &amp; Köhn', false);
        $response->assertSee('Association of Law Firm Administrators Nigeria');
    }

    public function test_about_page_renders_with_biography_and_credentials(): void
    {
        $response = $this->get(route('about'));

        $response->assertStatus(200);
        $response->assertSee('Executive Biography');
        $response->assertSee('Harvard');
        $response->assertSee('MIT Sloan');
        $response->assertSee('Labour Relations');
    }

    public function test_mentorship_page_renders_with_cohort_details(): void
    {
        $response = $this->get(route('mentorship'));

        $response->assertStatus(200);
        $response->assertSee('You already have the aspiration');
        $response->assertSee('200,000');
        $response->assertSee('February – July');
        $response->assertSee('Apply for the 6-Month Mentorship Programme');
    }

    public function test_mentorship_application_submission_stores_data_and_redirects(): void
    {
        $applicationData = [
            'full_name' => 'Adewale Adeleke',
            'email' => 'adewale@example.com',
            'phone' => '+234 803 123 4567',
            'location' => 'Lagos, Nigeria',
            'current_role' => 'Senior Associate, Commercial Practice',
            'organisation' => 'Adeleke & Partners',
            'aspirations_and_goals' => 'I am looking to launch our firm\'s energy practice group and build institutional governance structures.',
            'six_month_objective' => 'Formalize client engagement frameworks and achieve measurable practice growth by July.',
            'why_now' => 'I require the structure, mentorship, and accountability to transition from intention to consistent weekly execution.',
            'schedule_commitment' => '1',
            'investment_acknowledged' => '1',
        ];

        $response = $this->post(route('mentorship.apply'), $applicationData);

        $response->assertRedirect(route('mentorship'));
        $response->assertSessionHas('success');

        $this->assertDatabaseHas('mentorship_applications', [
            'email' => 'adewale@example.com',
            'full_name' => 'Adewale Adeleke',
            'schedule_commitment' => true,
            'investment_acknowledged' => true,
            'status' => 'pending',
        ]);
    }

    public function test_speaking_page_renders_and_enquiry_form_stores_record(): void
    {
        $response = $this->get(route('speaking'));
        $response->assertStatus(200);
        $response->assertSee('Building the Transgenerational Firm');

        $enquiryData = [
            'full_name' => 'Chinyere Okonjo',
            'email' => 'chinyere@corporatelaw.ng',
            'phone' => '+234 809 987 6543',
            'organisation' => 'African Legal Leadership Summit',
            'job_title' => 'Convening Director',
            'engagement_type' => 'Keynote Address',
            'proposed_date' => 'November 2026',
            'location_type' => 'In-Person',
            'event_location' => 'Eko Convention Centre, Lagos',
            'audience_profile' => 'Managing Partners & In-House General Counsel',
            'expected_participants' => '350 Delegates',
            'topic_objectives' => 'Institutional longevity and modernizing African commercial law firms.',
            'additional_info' => 'Plenary morning keynote followed by an executive fireside chat.',
        ];

        $submitResponse = $this->post(route('speaking.enquire'), $enquiryData);

        $submitResponse->assertRedirect();
        $submitResponse->assertSessionHas('success');

        $this->assertDatabaseHas('speaking_enquiries', [
            'email' => 'chinyere@corporatelaw.ng',
            'organisation' => 'African Legal Leadership Summit',
            'engagement_type' => 'Keynote Address',
        ]);
    }

    public function test_book_page_renders_and_waitlist_stores_record(): void
    {
        $response = $this->get(route('book'));
        $response->assertStatus(200);
        $response->assertSee('Building the Transgenerational Law Firm');
        $response->assertSee('November 2027');

        $waitlistData = [
            'full_name' => 'Babatunde Fashina',
            'email' => 'babatunde@fashina.com',
            'organisation' => 'Fashina Legal',
            'interest_format' => 'Both Print & Digital',
            'interested_in_bulk' => '1',
            'estimated_copies' => 25,
            'notes' => 'Very keen on the founder dependency and succession planning chapters.',
        ];

        $submitResponse = $this->post(route('book.waitlist'), $waitlistData);

        $submitResponse->assertRedirect(route('book'));
        $submitResponse->assertSessionHas('success');

        $this->assertDatabaseHas('book_waitlists', [
            'email' => 'babatunde@fashina.com',
            'interested_in_bulk' => true,
            'estimated_copies' => 25,
        ]);
    }

    public function test_insights_index_and_detail_pages_render_content(): void
    {
        $this->seed(InsightSeeder::class);

        $response = $this->get(route('insights.index'));
        $response->assertStatus(200);
        $response->assertSee('Building the Transgenerational Firm');

        $detailResponse = $this->get(route('insights.show', 'building-the-transgenerational-firm'));
        $detailResponse->assertStatus(200);
        $detailResponse->assertSee('Founder Dependency');
    }

    public function test_leadership_and_impact_page_renders_affiliated_organisations(): void
    {
        $response = $this->get(route('impact'));

        $response->assertStatus(200);
        $response->assertSee('Streamsowers &amp; Köhn', false);
        $response->assertSee('Association of Law Firm Administrators Nigeria');
        $response->assertSee('The Strides Platform');
        $response->assertSee('Project CHAM');
    }

    public function test_podcast_and_media_page_renders(): void
    {
        $response = $this->get(route('podcast'));

        $response->assertStatus(200);
        $response->assertSee('The Transgenerational Enterprise');
        $response->assertSee('Official Press Kit');
    }

    public function test_contact_page_renders(): void
    {
        $response = $this->get(route('contact'));

        $response->assertStatus(200);
        $response->assertSee('Book a Session');
        $response->assertSee('Engagement Concierge');
    }

    public function test_newsletter_subscription_stores_email(): void
    {
        $response = $this->post(route('newsletter.subscribe'), [
            'email' => 'subscriber@firm.com',
        ]);

        $response->assertRedirect();
        $response->assertSessionHas('success');

        $this->assertDatabaseHas('newsletter_subscribers', [
            'email' => 'subscriber@firm.com',
        ]);
    }
}
