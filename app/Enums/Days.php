<?php

namespace App\Enums;

enum Days: int
{
    use \ArchTech\Enums\Names;
    use \ArchTech\Enums\From;
    use \ArchTech\Enums\Values;
    use \ArchTech\Enums\Options;

    case Saturday = 1;
    case Sunday = 2;
    case Monday = 3;
    case Tuesday = 4;
    case Wednesday = 5;
    case Thursday = 6;
    case Friday = 7;
}
