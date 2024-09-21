<?php

namespace AIO\Container;

enum IContainerState
{
    case ImageDoesNotExist;
    case NotRestarting;
    case Restarting;
    case Running;
    case Starting;
    case Stopped;
    case Unhealthy;
}
