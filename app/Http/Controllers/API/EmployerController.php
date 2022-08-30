<?php

namespace App\Http\Controllers\API;
use Spatie\RouteAttributes\Attributes\Get;
use Spatie\RouteAttributes\Attributes\Prefix;

#[Prefix(config('app.api_entrypoint') . 'test')]
class EmployerController extends Controller
{

    #[Get('function1')]
    public function test() {
        ddd(1);
    }
}
