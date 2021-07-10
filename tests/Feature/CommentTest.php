<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models\Comment;

class CommentTest extends TestCase
{
    /**
     * Objectivity
     *
     * @return void
     */
    public function testObject()
    {
      $comment = new Comment();

      $this->assertIsObject($comment);
    }
}
