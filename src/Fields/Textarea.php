<?php

/**
 * Copyright (c) Vincent Klaiber.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @see https://github.com/vinkla/extended-acf
 */

declare(strict_types=1);

namespace Extended\ACF\Fields;

use Extended\ACF\Fields\Settings\ConditionalLogic;
use Extended\ACF\Fields\Settings\DefaultValue;
use Extended\ACF\Fields\Settings\Disabled;
use Extended\ACF\Fields\Settings\Immutable;
use Extended\ACF\Fields\Settings\Instructions;
use Extended\ACF\Fields\Settings\MaxLength;
use Extended\ACF\Fields\Settings\NewLines;
use Extended\ACF\Fields\Settings\Placeholder;
use Extended\ACF\Fields\Settings\Required;
use Extended\ACF\Fields\Settings\Wrapper;

class Textarea extends Field
{
    use MaxLength;
    use ConditionalLogic;
    use DefaultValue;
    use Disabled;
    use Instructions;
    use NewLines;
    use Placeholder;
    use Required;
    use Wrapper;
    use Immutable;

    protected string|null $type = 'textarea';

    public function rows(int $rows): static
    {
        $this->settings['rows'] = $rows;

        return $this;
    }
}
