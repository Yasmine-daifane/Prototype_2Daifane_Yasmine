<?php

namespace Tests\Feature\Repositories;

use App\Models\Chapitre;
use App\Repositories\ChapitresRepository;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ChapitreRepositoryTest extends TestCase
{
    use RefreshDatabase;

    protected $chapitreRepository;

    public function setUp(): void
    {
        parent::setUp();
        $this->chapitreRepository = new ChapitresRepository(new Chapitre());
    }

    public function test_update_chapitre(): void
    {
        // Create a chapitre in the database
        $chapitre = Chapitre::factory()->create();

        // New data for updating the chapitre
        $newData = [
            'Titre' => 'Updated Title',
            'description' => 'Updated Description',
            'autoformation_id' => 2, // Updated autoformation_id
            // Add other fields as needed
        ];

        $response = $this->put('/test-repository/update-chapitre/' . $chapitre->id, $newData);

        $response->assertRedirect('/test-repository/get-all-chapitres')
            ->assertSessionHas('success');

        // Assert the chapitre is updated in the database
        $this->assertDatabaseHas('chapitres', $newData);
    }

    public function test_get_all_chapitres(): void
    {
        // Create some chapitres in the database
        Chapitre::factory()->count(5)->create();

        $response = $this->get('/test-repository/get-all-chapitres');

        $response->assertStatus(200)
            ->assertViewIs('chapitres.index')
            ->assertViewHas('chapitres');
    }
}
