<?php

namespace  App\core\app\enums;


enum StatusUser: string
{
    case SHOW = 'SHOW';
    case HIDDEN = 'HIDDEN';
    case SUSPENDED = 'SUSPENDED';
    case ACTIVE = 'ACTIVE';
    case DELETE = "DELETE";
    case WAITING = 'WAITING';
}
