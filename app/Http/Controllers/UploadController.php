<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

use Illuminate\Support\Facades\File;

use Dilab\Network\SimpleRequest;
use Dilab\Network\SimpleResponse;
use Dilab\Resumable;
class UploadController extends Controller
{
    /**
     * Handles resumeable uploads via resumable.js
     *
     * @return Response
     */
    public function resumableUpload()
    {
        $tmpPath    = storage_path().'/tmp';
        $uploadPath = storage_path().'/uploads';
        if(!File::exists($tmpPath)) {
            File::makeDirectory($tmpPath, $mode = 0777, true, true);
        }

        if(!File::exists($uploadPath)) {
            File::makeDirectory($uploadPath, $mode = 0777, true, true);
        }

        $simpleRequest              = new SimpleRequest();
        $simpleResponse             = new SimpleResponse();

        $resumable                  = new Resumable($simpleRequest, $simpleResponse);
        $resumable->tempFolder      = $tmpPath;
        $resumable->uploadFolder    = $uploadPath;

        $result = $resumable->process();

        switch($result) {
            case 200:
                return response([
                    'message' => 'OK',
                ], 200);
                break;
            case 201:
                // mark uploaded file as complete etc
                return response([
                    'message' => 'OK',
                ], 200);
                break;
            case 204:
                return response([
                    'message' => 'Chunk not found',
                ], 204);
                break;
            default:
                return response([
                    'message' => 'An error occurred',
                ], 404);
        }
    }
}
