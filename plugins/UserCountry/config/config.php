<?php

use Matomo\Dependencies\DI;

return array(
    'diagnostics.optional' => DI\add(array(
        DI\get('Piwik\Plugins\UserCountry\Diagnostic\GeolocationDiagnostic'),
    )),
);
