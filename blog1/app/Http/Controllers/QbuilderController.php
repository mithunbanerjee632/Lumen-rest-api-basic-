<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QbuilderController extends Controller{
  function AllRows(){
    $result = DB::table('details')->get();
    return $result;
  }

  public function Rows()
  {
    //$result =DB::table('details')->where('name','Mithun Banerjee')->first();
    //$result = DB::table('details')->find(2);//data object akare ase tai object thekedata nibo
  
    //$result = DB::table('details')->pluck('name');//column er sob data niye asbe
    $result = DB::table('details')->pluck('name','city');
    return $result;

  }

  public function aggregts()
  {
    //$result = DB::table('details')->count();
    //$result = DB::table('details')->max('roll');
    //$result = DB::table('details')->min('roll');
    //$result = DB::table('details')->avg('roll');
    $result = DB::table('details')->sum('roll');
    return $result;
  }

  function Insert(Request $request){
    $name= $request->input('name');
    $roll=  $request->input('roll');
    $city=  $request->input('city');
    $phone = $request->input('phone');
    $class=  $request->input('class');
    
    $result =DB::table('details')->insert(['name'=>$name,'roll'=>$roll,'city'=>$city,'phone'=>$phone,'class'=>$class]);

    if($result == true){
      return "Data Inserted Successfully";
    }else{
      return "Data Not Inserted";
    }
  }

  function Update(Request $request){
    $name= $request->input('name');
    $id=  $request->input('id');
    $result = DB::table('details')->where('id',$id)->update(['name'=>$name]);

    if($result == true){
      return "Data Updated Successfully";
    }else{
      return "Data Not Updated";
    }
  }

  function Delete(Request $request){
    $id=  $request->input('id');
    $result = DB::table('details')->where('id',$id)->delete();
    if($result == true){
      return "Data Deleted Successfully";
    }else{
      return "Data Not Deleted";
    }

  }
}