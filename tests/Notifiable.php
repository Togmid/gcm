<?php

namespace NotificationChannels\Gcm\Tests;

class Notifiable
{
    use \Illuminate\Notifications\Notifiable;

    /**
     * @return int
     */
    public function getKey()
    {
        return 1;
    }
}
