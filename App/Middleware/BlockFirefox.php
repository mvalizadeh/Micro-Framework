<?php

namespace App\Middleware;

use hisorange\BrowserDetect\Parser as Browser;

class BlockFirefox implements MiddlewareInterface
{
    public function handle()
    {
        if (Browser::isFirefox()) {
            die("Firefox detected");
        }
    }
}
