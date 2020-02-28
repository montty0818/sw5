<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ResponseController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public static function response($success, $data = array(), $status = 200)
    {
        return response()
        ->json(
            [
            'success' => $success,
            'data' => $data
            ],
            $status
        );
    }

    public static function validateObjectExists($object)
    {
        if (!$object) {
            self::response(false, ['code'=>config('responses.ERROR_CODES.OBJECT_NOT_FOUND'),
                'message'=>config('responses.ERROR_MESSAGES.OBJECT_NOT_FOUND'),'function'=>__FUNCTION__,
                'class'=>__CLASS__,])->send();
            exit();
        }
    }
}
