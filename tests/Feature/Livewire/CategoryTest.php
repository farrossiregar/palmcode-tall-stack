<?php

namespace Tests\Feature\Livewire;

use App\Livewire\Category;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class CategoryTest extends TestCase
{
    public function test_renders_successfully()
    {
        Livewire::test(Category::class)
            ->assertStatus(200);
    }
}
