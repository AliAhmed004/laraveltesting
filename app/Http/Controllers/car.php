<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\carBasicInfo;
use App\Models\carFurtherInfo;

class car extends Controller
{
    function addCar()
    {
        return view('addcar');
    }
    function moreCar(Request $r)
    {
        // Validation Start
        if($r->input('title')[0]==null || $r->input('desc')[0]==null)
        {
            $r->session()->flash('status','Please Fill Out All the Fields');
            return redirect('addcar');
        }
        $count = count($r->input('color'));
        for($i=0; $i<=$count-1; $i++)
        {
             if($r->input('color')[$i]==null || $r->input('model')[$i]==null || $r->input('condition')[$i]==null || $r->input('price')[$i]==null)
             {
                  $r->session()->flash('status','Please Fill Out All the Fields');
                 return redirect('addcar');
             }
        }
        // End Validation
        $carBasicInfo=new carBasicInfo;
        $carBasicInfo->title=json_encode($r->input('title'));
        $carBasicInfo->desc=json_encode($r->input('desc'));

        $carFurtherInfo = new carFurtherInfo;
        $carFurtherInfo->color=json_encode($r->input('color'));
        $carFurtherInfo->model=json_encode($r->input('model'));
        $carFurtherInfo->running=json_encode($r->input('drived'));
        $carFurtherInfo->condition=json_encode($r->input('condition'));
        $carFurtherInfo->price=json_encode($r->input('price'));
        
        if($carBasicInfo->save()==1 && $carFurtherInfo->save()==1) 
        {
            $r->session()->flash('status','Car Added Successfully');
            return redirect('addcar');
        } 
        
    }

    function viewCar()
    {
         $alldata=car_further_infos::all();
        //  return $alldata[0];
         return view('viewcar',['alldata'=>$alldata]);
    }
}
