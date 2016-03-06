<?php

namespace App\Api\V1\Controllers;

use JWTAuth;
use App\Book;
use App\Http\Requests;
use Illuminate\Http\Request;
use Dingo\Api\Routing\Helpers;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class NotifyController extends Controller
{
    use Helpers;

    public function subscribe(Request $request)
    {
        $title = $request->get('title');
        return response()->json('Subscribe on!' . $title);
    }

    private function sendNotify()
    {
        return response()->json('Get notify from server!');
    }

    private function currentUser() {
        return JWTAuth::parseToken()->authenticate();
    }
}
