<?php

namespace App\Http\Controllers;

use App\Models\ChildContent;
use Illuminate\Http\Request;
use App\Models\SliderImage;
use App\Models\ParentPage;
use App\Models\ChildPage;


class FrontendController extends Controller
{

  
    
    public function sliderschange()
    {   
      
      //  $headingsubheading=ParentPage::with('childpages')->get();
      // $childpage = ChildPage::with('parentpage')->get();

    
      $sliders=SliderImage::orderBy('created_at','desc')->get();
      return view('frontend1.index',compact('sliders') );
    }

   public function selectPageDetailsFromTable($id)
   {
    
     
       $childContentDetails=ChildContent::select('id','childpage_id','text','Thumbnailimg',)
      ->with(['Childpage'=> function($q){
        $q->select(['id', 'child_title']);
      }])
      ->where('childpage_id',$id)
      ->get();
   
    

      return view('frontend1.pages',compact('childContentDetails') );
     }
    
    
}
