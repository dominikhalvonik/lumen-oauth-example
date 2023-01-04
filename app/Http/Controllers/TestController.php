<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController
{
    public function testAction(Request $request)
    {
        return response()->json([
            'lol' => 22
        ]);
    }

    public function testGetAction()
    {
        return response()->json([
            'lol' => 23
        ]);
    }
}
