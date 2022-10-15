<?php

namespace App;

use Illuminate\Http\Request;
use Illuminate\Foundation\Application;

class Laravel
{
    // 引入 laravel 测试 内存占用
    public static function start()
    {
        define('LARAVEL_START', microtime(true));

        if (file_exists($maintenance = __DIR__ . '/../storage/framework/maintenance.php')) {
            require $maintenance;
        }

        /** @var Application */
        $app = require_once __DIR__ . '/../bootstrap/app.php';

        $kernel = $app->make(\Illuminate\Contracts\Http\Kernel::class);
        // $response = $kernel->handle(
        //         $request = Request::capture()
        // );
        // $response = $kernel->handle(
        //     $request = Request::capture()
        // )->send();

        $kernel->bootstrap();

        // $kernel->terminate($request, $response);
    }
}
