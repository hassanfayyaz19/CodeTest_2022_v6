<?php

namespace App/Enums;


enum JobStatusEnum: string
{
    case PENDING = 'pending';
    case ASSIGNED = 'assigned';
    case STARTED = 'started';
    case COMPLETED = 'completed';
}