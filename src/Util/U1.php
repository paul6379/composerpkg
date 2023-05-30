<?php

namespace Paul6379\Composerpkg\Util;

use GuzzleHttp\Client;

class U1
{

    public function run()
    {
        $cli = new Client();
        $ret = $cli->request('GET','https://www.baidu.com');
        echo $ret->getStatusCode();
        echo PHP_EOL;
        echo $ret->getBody();
        echo PHP_EOL;
    }

}