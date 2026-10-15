<?php

namespace Tests\Feature;

use App\Models\BookWaitlist;
use App\Models\Insight;
use App\Models\MentorshipApplication;
use App\Models\NewsletterSubscriber;
use App\Models\SpeakingEnquiry;
use App\Models\User;
use Database\Seeders\InsightSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class AdminManagementTest extends TestCase
{
    use RefreshDatabase;

    private User $adminUser;

    protected function setUp(): void
    {
        parent::setUp();

        $this->adminUser = User::factory()->create([
            'email' => 'admin@modupeolusoga.com',
            'name' => 'Modupe Olusoga',
            'password' => Hash::make('Modupe2026!'),
        ]);
    }

    public function test_guest_is_redirected_to_admin_login(): void
    {
        $response = $this->get(route('admin.dashboard'));
        $response->assertRedirect(route('admin.login'));

        $insightsResponse = $this->get(route('admin.insights.index'));
        $insightsResponse->assertRedirect(route('admin.login'));
    }

    public function test_admin_login_screen_renders_successfully(): void
    {
        $response = $this->get(route('admin.login'));

        $response->assertStatus(200);
        $response->assertSee('Modupe Olusoga');
        $response->assertSee('Executive Suite');
        $response->assertSee('Access Dashboard');
    }

    public function test_admin_login_fails_with_invalid_credentials(): void
    {
        $response = $this->post(route('admin.login.post'), [
            'email' => 'admin@modupeolusoga.com',
            'password' => 'WrongPassword!',
        ]);

        $response->assertSessionHasErrors('email');
        $this->assertGuest();
    }

    public function test_admin_login_succeeds_with_valid_credentials(): void
    {
        $response = $this->post(route('admin.login.post'), [
            'email' => 'admin@modupeolusoga.com',
            'password' => 'Modupe2026!',
        ]);

        $response->assertRedirect(route('admin.dashboard'));
        $this->assertAuthenticatedAs($this->adminUser);
    }

    public function test_admin_dashboard_renders_metrics_and_recent_items(): void
    {
        $this->seed(InsightSeeder::class);

        MentorshipApplication::create([
            'full_name' => 'Folake Solanke',
            'email' => 'folake@example.com',
            'phone' => '+234 802 000 0000',
            'location' => 'Lagos',
            'current_role' => 'Managing Partner',
            'organisation' => 'Solanke & Co',
            'aspirations_and_goals' => 'Institution building goals',
            'six_month_objective' => 'Achieve partnership transition plan',
            'why_now' => 'Critical turning point',
            'schedule_commitment' => true,
            'investment_acknowledged' => true,
            'status' => 'pending',
        ]);

        $response = $this->actingAs($this->adminUser)->get(route('admin.dashboard'));

        $response->assertStatus(200);
        $response->assertSee('Executive Platform Pulse');
        $response->assertSee('Published Insights');
        $response->assertSee('Mentorship Cohort');
        $response->assertSee('Folake Solanke');
    }

    public function test_admin_can_view_insights_list(): void
    {
        $this->seed(InsightSeeder::class);

        $response = $this->actingAs($this->adminUser)->get(route('admin.insights.index'));

        $response->assertStatus(200);
        $response->assertSee('Insights &amp; Published Essays', false);
        $response->assertSee('Building the Transgenerational Firm');
    }

    public function test_admin_can_create_new_insight(): void
    {
        $response = $this->actingAs($this->adminUser)->post(route('admin.insights.store'), [
            'title' => 'The Architecture of Firm Longevity',
            'slug' => '', // should auto-generate from title
            'category' => 'Institutional Governance',
            'summary' => 'A strategic framework examining the governance requirements for African professional firms.',
            'content' => 'Paragraph one regarding firm longevity.\n\nParagraph two with actionable guidelines.\n\nAspiration → Clarity → Action → Consistency → Results',
            'read_time' => '', // should auto calculate
            'published_date' => '2026-10-15',
            'is_featured' => '1',
        ]);

        $response->assertRedirect(route('admin.insights.index'));
        $response->assertSessionHas('success');

        $this->assertDatabaseHas('insights', [
            'title' => 'The Architecture of Firm Longevity',
            'slug' => 'the-architecture-of-firm-longevity',
            'category' => 'Institutional Governance',
            'is_featured' => true,
            'read_time' => '1 min read',
        ]);

        // Check it renders on public platform
        $publicResponse = $this->get(route('insights.show', 'the-architecture-of-firm-longevity'));
        $publicResponse->assertStatus(200);
        $publicResponse->assertSee('The Architecture of Firm Longevity');
    }

    public function test_admin_can_edit_and_update_insight(): void
    {
        $insight = Insight::create([
            'title' => 'Draft Initial Title',
            'slug' => 'draft-initial-title',
            'category' => 'Law Firm Management',
            'summary' => 'Initial summary for testing purposes.',
            'content' => 'Initial content body.',
            'read_time' => '3 min read',
            'published_date' => '2026-10-10',
            'is_featured' => false,
        ]);

        $editView = $this->actingAs($this->adminUser)->get(route('admin.insights.edit', $insight));
        $editView->assertStatus(200);
        $editView->assertSee('Draft Initial Title');

        $updateResponse = $this->actingAs($this->adminUser)->put(route('admin.insights.update', $insight), [
            'title' => 'Updated Polished Title',
            'slug' => 'updated-polished-title',
            'category' => 'Leadership & Succession',
            'summary' => 'Updated summary text for the monograph.',
            'content' => 'Updated content with comprehensive insights.',
            'read_time' => '5 min read',
            'published_date' => '2026-10-14',
            'is_featured' => '1',
        ]);

        $updateResponse->assertRedirect(route('admin.insights.index'));
        $updateResponse->assertSessionHas('success');

        $this->assertDatabaseHas('insights', [
            'id' => $insight->id,
            'title' => 'Updated Polished Title',
            'slug' => 'updated-polished-title',
            'category' => 'Leadership & Succession',
            'is_featured' => true,
        ]);
    }

    public function test_admin_can_delete_insight(): void
    {
        $insight = Insight::create([
            'title' => 'Insight to be Deleted',
            'slug' => 'insight-to-be-deleted',
            'category' => 'Executive Commentary',
            'summary' => 'Summary to delete.',
            'content' => 'Content to delete.',
            'read_time' => '2 min read',
            'published_date' => '2026-10-10',
            'is_featured' => false,
        ]);

        $deleteResponse = $this->actingAs($this->adminUser)->delete(route('admin.insights.destroy', $insight));

        $deleteResponse->assertRedirect(route('admin.insights.index'));
        $deleteResponse->assertSessionHas('success');

        $this->assertDatabaseMissing('insights', [
            'id' => $insight->id,
        ]);
    }

    public function test_admin_can_view_all_submissions_screens(): void
    {
        MentorshipApplication::create([
            'full_name' => 'Akinola Davies',
            'email' => 'akinola@example.com',
            'phone' => '+234 801 111 2222',
            'location' => 'Lagos, Nigeria',
            'current_role' => 'Partner',
            'organisation' => 'Davies Law',
            'aspirations_and_goals' => 'Firm governance',
            'six_month_objective' => 'Institutional transition',
            'why_now' => 'Immediate need',
            'schedule_commitment' => true,
            'investment_acknowledged' => true,
        ]);

        SpeakingEnquiry::create([
            'full_name' => 'Kemi Adebayo',
            'email' => 'kemi@summit.ng',
            'organisation' => 'African Governance Forum',
            'job_title' => 'Summit Convenor',
            'engagement_type' => 'Keynote Address',
            'audience_profile' => 'Senior Partners',
            'expected_participants' => '200',
            'topic_objectives' => 'Succession',
        ]);

        BookWaitlist::create([
            'full_name' => 'Emeka Okafor',
            'email' => 'emeka@example.com',
            'interest_format' => 'Print Edition',
        ]);

        NewsletterSubscriber::create([
            'email' => 'reader@example.com',
        ]);

        $this->actingAs($this->adminUser)
            ->get(route('admin.submissions.mentorship'))
            ->assertStatus(200)
            ->assertSee('Akinola Davies');

        $this->actingAs($this->adminUser)
            ->get(route('admin.submissions.speaking'))
            ->assertStatus(200)
            ->assertSee('African Governance Forum');

        $this->actingAs($this->adminUser)
            ->get(route('admin.submissions.book-waitlist'))
            ->assertStatus(200)
            ->assertSee('Emeka Okafor');

        $this->actingAs($this->adminUser)
            ->get(route('admin.submissions.subscribers'))
            ->assertStatus(200)
            ->assertSee('reader@example.com');
    }

    public function test_admin_can_logout(): void
    {
        $response = $this->actingAs($this->adminUser)->post(route('admin.logout'));

        $response->assertRedirect(route('admin.login'));
        $this->assertGuest();
    }
}
