<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use OpenApi\Annotations as OA;

/**
 * @OA\Info(
 *     title="SME Platform API",
 *     version="1.0",
 *     description="API Documentation for SME Platform",
 *     @OA\Contact(
 *         email="support@sepplatform.com"
 *     )
 * )
 *
 * @OA\Server(
 *     url="http://127.0.0.1:8000/",
 *     description="Development Server"
 * )
 * 
 *  @OA\SecurityScheme(
 *     securityScheme="bearerAuth",
 *     type="http",
 *     scheme="bearer",
 *     bearerFormat="JWT"
 * )
 */

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}
