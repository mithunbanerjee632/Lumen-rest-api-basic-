<?php
namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
//use App\User;

class MyController extends Controller{
    // public function myFunc($name){
    //   return response($name)
    //         ->header('name',$name)
    //         ->header('age','25')
    //         ->header('city','Barishal')
    //         ->header('country','Bangladesh');
    // }

    // public function myFunc(){
    //   $myarray = array (
    //     array("Volvo",22,18),
    //     array("BMW",15,13),
    //     array("Saab",5,2),
    //     array("Land Rover",17,15)
    //   );

    //   return response()->json($myarray);
    // }

    //  public function first()
    // {
    //   return redirect('/second');
    // }

    // public function second()
    // {
    //   return "I am Second";
    // }

    // public function download()
    // {
    //   $path='demo.txt';
    //   return response()->download($path);
    // }

     public function Catch(Request $request)
    {
      return $request->header("name");
    }
}