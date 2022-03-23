<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetailsModel;

class EloquentController extends Controller
{
    public function selectAll()
    {
        $result = DetailsModel::all();
        return $result;
    }

    public function selectedById(Request $request)
    {   
        $id = $request->input('id');
        $result = DetailsModel::where('id',$id)->get();
        return $result;
    }

    public function count()
    {
        $result = DetailsModel::count();
        return $result;
    }

    public function max()
    {
        $result = DetailsModel::max('roll');
        return $result;
    }

    public function min()
    {
        $result = DetailsModel::min('roll');
        return $result;
    }

    public function avg()
    {
        $result = DetailsModel::avg('roll');
        return $result;
    }

    public function sum()
    {
        $result = DetailsModel::sum('roll');
        return $result;
    }

    public function Insert(Request $request)
    {
        $name = $request->input('name');
        $roll = $request->input('roll');
        $city = $request->input('city');
        $phone = $request->input('phone');
        $class = $request->input('class');

        $result = DetailsModel::insert(['name'=>$name,'roll'=>$roll,'city'=>$city,'phone'=>$phone,'class'=>$class]);

        if($result ==true){
            return "Data Inserted Successfully!";
        }else{
            return "Data Not Inserted!";
        }

    }

    public function Delete(Request $request)
       {
           $id =$request->input('id');
           $result=DetailsModel::where('id',$id)->delete();

           if($result ==true){
            return "Data deleted Successfully!"; 
           }else{
            return "Data not Deleted !";
           }
       }

       public function Update(Request $request)
       {
        $id =$request->input('id');
        $name = $request->input('name');
        $roll = $request->input('roll');

        $result = DetailsModel::where('id',$id)->update(['name'=>$name,'roll'=>$roll]);

        if($result ==true){
            return "Data Updated Successfully!"; 
           }else{
            return "Data not Updated !";
           }

       }


}
