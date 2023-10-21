<?php

/**
 * Copyright (c) Vincent Klaiber
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @see https://github.com/vinkla/extended-acf
 */

declare(strict_types=1);

namespace Extended\ACF\Tests\Fields;

use Extended\ACF\Fields\Link;
use PHPUnit\Framework\TestCase;

class LinkTest extends TestCase
{
    public function testType()
    {
        $field = Link::make('Link')->get();
        $this->assertSame('link', $field['type']);
    }
}
