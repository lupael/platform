<?php

declare(strict_types=1);

namespace Orchid\Tests\Feature\App;

use Orchid\Tests\TestFeatureCase;

class ScreenAutoWritePropertyTest extends TestFeatureCase
{
    public function testWriteOnlyPublicProperty(): void
    {
        $this
            ->actingAs($this->createAdminUser())
            ->get(route('test.write-only-public-property'))
            ->assertDontSee('protectedProperty')
            ->assertDontSee('privateProperty')
            ->assertSee('publicProperty');
    }
}
