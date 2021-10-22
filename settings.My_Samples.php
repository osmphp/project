<?php

declare(strict_types=1);

/* @see \Osm\Framework\Settings\Hints\Settings */
return \Osm\merge((object)[
    // sample app settings
], include __DIR__ . '/settings.php');