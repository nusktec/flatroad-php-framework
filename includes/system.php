<?php

use Picqer\Barcode\BarcodeGeneratorPNG;

//get retrofit kind of data
function getRetrofit()
{
    return file_get_contents("php://input");
}

function getAxios(){
    $data = json_decode(file_get_contents("php://input"), TRUE);
    return $data;
}

/**
 * make and return barcode string
 * */
function getBarCode($data)
{
    try {
        $generatorPNG = new Picqer\Barcode\BarcodeGeneratorPNG();
        return base64_encode($generatorPNG->getBarcode($data, $generatorPNG::TYPE_CODE_128));
    } catch (\Picqer\Barcode\Exceptions\BarcodeException $e) {
        $generatorJPG = new Picqer\Barcode\BarcodeGeneratorJPG();
        return base64_encode($generatorJPG->getBarcode($data, $generatorJPG::TYPE_CODE_128));
    }
}

/*
 *
 file saver functions
*/
function putFile($filename, $data, $filetype = "files")
{
    file_put_contents(__DIR__ . "/../downloads/" . $filetype . "/" . sha1($filename) . ".rsc", $data);
    return true;
}
function getFile($filename, $filetype = "files")
{
    return APP_FILE_PATH."downloads/".$filetype."/".sha1($filename).".rsc";
}
