<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Audit_ReportsController extends Controller
{
    $name = NULL;
    $path = NULL;
    $agencies_id = NULL;
    $county = NULL;
    $type = NULL;
    $year = NULL;
    $meetings = NULL;
    $deferred = NULL;
    $early = NULL;
    $early_date = NULL;
    $early_time = NULL;

    $data = array('name'=>$name,'path'=>$path,'agencies_id'=>$agencies_id,'county'=>$county,'type'=>$type,'year'=>$year,'meetings'=>$meetings,
            'deferred'=>$deferred,'early'=>$early,'early_date'=>$early_date,'early_time'=>$early_time);

    $value = Audit_Report::insertData($data);
    if($value){
        Session::flash('message','Insert successful.');
    }else{
        Session::flash('message','Failure.');
    }
}
