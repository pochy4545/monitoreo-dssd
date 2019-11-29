<?php

namespace Monitor;

class Cases {

    public static function getCases(){
        return Request::doTheRequest('GET', 'API/bpm/case?p=0&c=1000');
    }

    public static function getArchivedCases(){
        return Request::doTheRequest('GET', 'API/bpm/archivedCase?p=0&c=1000');
    }

    public static function getCountCases(){
        $response = Request::doTheRequest('GET', 'API/bpm/case?p=0&c=1000');
        return count($response['data']);
    }

    public static function getDataFromArchivedCase($id){
        $context = Request::doTheRequest('GET', 'API/bpm/archivedCase/'.$id.'/context');
        //var_dump($context);
        $link = $context['data']->venta_ref->link;

        $data = Request::doTheRequest('GET', $link);
        //$data = "Todavia no!";
        return $data;
    }
}