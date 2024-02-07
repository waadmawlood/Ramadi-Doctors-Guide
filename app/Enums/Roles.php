<?php

namespace App\Enums;

enum Roles: int
{
    use \ArchTech\Enums\Names;
    use \ArchTech\Enums\From;
    use \ArchTech\Enums\Values;
    use \ArchTech\Enums\Options;

    case Admin = 1;
    case Doctor = 2;
    case Secretary = 3;
    case Customer = 4;
}
