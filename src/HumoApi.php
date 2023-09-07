<?php

namespace Humolog;

class HumoApi
{
    public final function info(string $title, string $description): void
    {
        echo $title . $description;
    }
}
