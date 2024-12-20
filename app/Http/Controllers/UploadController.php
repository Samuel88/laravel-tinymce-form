<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function upload(Request $request): JsonResponse {        
        $file = $request->file("file");

        if ($file->isValid()) {
            $imagePath = $file->storePubliclyAs(
                'uploads/tinyMCE',
                $file->getClientOriginalName(),
                'public'
            );
    
            return response()->json([
                'location' => asset(path: "storage/{$imagePath}"),
            ]);
        } else {
            return response()
                ->json([
                    "message"=> $file->getErrorMessage(),
                ], 500);
        }
    }
}
