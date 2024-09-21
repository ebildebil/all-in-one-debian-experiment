<?php

namespace AIO\Container;

enum IContainerState: string
{
    case ImageDoesNotExist = 'image_does_not_exist';
    case NotRestarting = 'not_restarting';
    case Restarting = 'restarting';
    case Running = 'running';
    case Starting = 'starting';
    case Stopped = 'stopped';
    case Unhealthy = 'unhealthy';
}
