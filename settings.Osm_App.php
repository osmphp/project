<?php

declare(strict_types=1);

/* @see \Osm\Framework\Settings\Hints\Settings */
return \Osm\merge((object)[
    // main app settings
], include __DIR__ . '/settings.php');