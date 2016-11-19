<?php


function baseUrl($url=''){
    return _PROJECTSUBFOLDER_.$url;
}
function baseFile($path=''){

     return _BASEFILE_.$path;
}
function customException($errorArray){
//['message'=>trans('fileNotExist').$viewPath,'number'=>1,'details'=>'']
    /* 0    No Number for this error
     * 1    file not exist
     *
     *
     */
    $errorArray=(is_array($errorArray))? $errorArray:['message'=>$errorArray,'number'=>0,'details'=>'No Number for this error'] ;

    $errorArray['message']=(array_key_exists('message',$errorArray))? $errorArray['message']:'You have to insert error message for this error';
    $errorArray['number']=(array_key_exists('number',$errorArray))? $errorArray['number']:'You have to insert  number for this error';
    $errorArray['details']=(array_key_exists('details',$errorArray))? $errorArray['details']:'You have to insert error details for this error';

die(var_dump($errorArray));

}

function trans($text){
return textCapitalizeFix($text);

}



function getUperCase($text){

    $text=trim(preg_replace('/\_|\-|\s|\'/',' ',$text));

    $text=ucwords ( $text );
    $capitalize=str_replace(' ','',$text);

    $firstLower=lcfirst($capitalize);

    return [$capitalize,$firstLower];
}

function textCapitalizeFix($text){

    $text=trim(preg_replace('/\_|\-|\s|\'/',' ',$text));
    $text=ucwords ( $text );
    return $text;
}


function moduleViewPath($viewPath,$moduleName){

    return baseFile('/modules/'.$moduleName.'/views/'.$viewPath.'.php');
}

function css($fileName=''){
    return baseUrl('/public/css/'.$fileName);
}
function js($fileName=''){
    return baseUrl('/public/js/'.$fileName);
}
function images($fileName=''){
    return baseUrl('/public/images/'.$fileName);
}
