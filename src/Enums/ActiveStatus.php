<?php

namespace Laraditz\Lazada\Enums;

enum ActiveStatus: int
{
    case Inactive = 0;
    case Active = 1;
    case Deleted = 2;
    case Others = 99;
}
