<?php

namespace packages\humolog\src;

class HumoLog
{
    public final function info(string $title, string $description): void
    {
        echo $title . $description;
    }
}
