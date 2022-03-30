<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ChildPage;
use App\Models\Testimonial;


class SelectClass extends Model
{
    public function selectSubHeading($heading)
    {

       $subheading=ChildPage::select('id','child_title')
                   ->whereHas('parentpage', function($q) use($heading){
                       $q->where('title', $heading);
                   })
                   ->get();

             return $subheading;
    }

    public function selectTestimonial()
    {
        $testinomials=Testimonial::all();
        return  $testinomials;
    }
}
