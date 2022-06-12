<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\ExpnseFormVal;
use Illuminate\Support\Facades\View;



class ExpnseFormSubmitController extends Controller
{
    //
    public function updateDataToDB(Request $req){

        //Validation
        $req -> validate(['prdName' => 'required']);


        // $updateFormData = new Expnseformval();
        // $updateFormData->prdName = $req->prod_name ;
        //  $updateFormData->prdPrice = $req->PriceValue ;
        //   $updateFormData->crncyType = $req->crncyType ;
        //    $updateFormData->prdType = $req->ProductType ;
        //    if($updateFormData->save()){
        //        return back()->withInput();
        //    } // else{
           //      echo "Not scues";
           // }

        // return $req->all();
        // console.log("Update Vals are ".$req->all());


        if($req->prdId!=""){
            echo $req;
            Expnseformval::where("prdId",$req->prdId)->update(['prdPrice'=>$req->prdPrice , 'prdName'=>$req->prdName , 'crncyType'=>$req->crncyType , 'prdType'=>$req->prdType]);

            return redirect('ProductDetailsTableView');
        }else if(Expnseformval::Create($req->all())){
            return back()->withInput();
        }else{
            return "failure";
        }
        
    }


    public function editDataFormController($editDataForm){
           
           return "Edit Row Val is ".$editDataForm;
            // return View::make("ProductDetailsTableView",['ExpnseFormValViewData'=>ExpnseFormVal::all()]);


    }

     public function removeDataFormController($editDataForm){

            Expnseformval::destroy($editDataForm);
             return back()->withInput();

            // $updateFormData = new Expnseformval();
            // $updateFormData->prdId = $editDataForm;

            // if($updateFormData->delete()){
            //     return "Remove Row Val is ".$editDataForm." True";
            // }else{
            //    return "Remove Row Val is ".$editDataForm." false";
            // }

           // 


            // return View::make("ProductDetailsTableView",['ExpnseFormValViewData'=>ExpnseFormVal::all()]);


    }


}
