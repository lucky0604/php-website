<?php

namespace App\Http\Controllers;

use App\Setting;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    //
    static public function uploadFile($file) {
        $fileName = md5_file($file) . '.' . $file -> extension();
        $file_disk = Setting::where('key', 'file_disk')-> value('value');

        if ($file_disk == 'cos') {
            $cosClient = new Client(
                array('region' => env('COS_REGION'),
                'credentials' => array(
                    'appId' => env('COS_APPID'),
                    'secretId' => env('COS_KEY'),
                    'secretKey' => env('COS_SECRET')
                )
            ));
            $result = $cosClient -> putObject(array(
                'Bucket' => env('COS_BUCKET'),
                'Key' => $fileName,
                'Body' => file_get_contents($file),
                'ServerSideEncrypt' => 'AES256'
            ));
        } else {
            $file -> storeAs('public/images', $fileName);
        }

        return $fileName;
    }

    public function uploadFileApi(Request $request) {
        return $this -> uploadFile($request -> file);
    }
}
