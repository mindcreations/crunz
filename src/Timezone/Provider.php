<?php

declare(strict_types=1);

namespace Crunz\Timezone;

final class Provider implements ProviderInterface
{
    /**
     * {@inheritdoc}
     */
    public function defaultTimezone()
    {
        return new \DateTimeZone(\date_default_timezone_get());
    }
}
