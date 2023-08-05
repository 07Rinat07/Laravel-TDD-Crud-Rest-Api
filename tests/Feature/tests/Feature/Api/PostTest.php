<?php

namespace tests\Feature\Api;

use App\Models\Post;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Http\Testing\File;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class PostTest extends TestCase
{
    use DatabaseTransactions;

    protected function setUp(): void
    {
        parent::setUp();
        Storage::fake('local');  // TODO: что бы каждый раз непрокидывать
    }

    /** @test */

    public function a_post_can_be_stored()
    {
        $this->withoutExceptionHandling();

        $file = File::create('my_image.jpg');

        $data = [
            'title' => 'Some title',
            'description' => 'Description',
            'image' => $file
        ];
        $res = $this->post('/api/posts', $data);

        $this->assertDatabaseCount('posts', 1);

        $post = Post::first();

        $this->assertEquals($data['title'], $post->title);
        $this->assertEquals($data['description'], $post->description);

        $this->assertEquals('images/' . $file->hashName(), $post->image_url);
        Storage::disk('local')->assertExists($post->image_url);

        $res->assertJson([
                'id' => $post->id,
                'title' => $post->title,
                'description' => $post->description,
                'image_url' => $post->image_url,
        ]);

    }

}
