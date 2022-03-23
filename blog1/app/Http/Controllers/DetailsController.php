<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DetailsController extends Controller{
  public function DetailsSelect(Request $request)
  {
    $sql = "SELECT * FROM details";
    $request = DB::select($sql);
    return $request;
  }

 
    function DetailsCreate(Request $request){

      $name= $request->input('name');
      $roll=  $request->input('roll');
      $city=  $request->input('city');
      $phone = $request->input('phone');
      $class=  $request->input('class');

      $SQL="INSERT INTO `details`(`name`, `roll`, `city`, `phone`, `class`) VALUES (?,?,?,?,?)";
      $result= DB::insert($SQL,[$name,$roll,$city,$phone,$class]);

    if($result == true){
      return "Data inserted Successfully";
    }else{
      return "Data Not Inserted!Please Try Again.";
    }
  }

  public function DetailsUpdate(Request $request)
  {
    $roll=  $request->input('roll');
    $city=  $request->input('city');
    $phone = $request->input('phone');

    $sql = "UPDATE `details` SET `city`=?,`phone`=? WHERE `roll`=?";
    $result=DB::update($sql,[$city,$phone,$roll]);
    if($result == true){
      return "Data Updated Successfully!";
    }else{
      return "Data Not Updated";
    }
    
  }

  public function DetailsDelete(Request $request)
  {
    $id = $request->input("id");
    $sql = "DELETE FROM `details` WHERE `id`=?";
    $result=DB::delete($sql,[$id]);
    if($result == true){
      return "Data Deleted Successfully!";
    }else{
      return "Data Not Deleted";
    }
  }
}