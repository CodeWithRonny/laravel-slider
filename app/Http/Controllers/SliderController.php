<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Slider;



class SliderController extends Controller
{
    function __construct()
    {
        // 
    }
    
    public function index()
    {
        $sliders = Slider::get()->all();
        $title = 'Slider';
        return view('slider.index',compact('sliders','title'));
    }


    
    public function create()
    {
        $title = 'Slider';
        return view('slider.add',compact('title'));
    }


   
    public function store(Request $request)
    {

        $this->validate($request,[
            'title' => 'required',
            'image' => 'required',
            'tagline' => 'required',         
            'url' => 'required',


        ], 
        [
            'title.required' => 'Title field must be filled',
            'image.required' => 'Image field must be filled',                   
            'tagline.required' => 'Tagline field must be filled',
            'url.required' => 'Url field must be filled',                 
                       


        ]
    );


        $data = $request->all();
              // print_r($data);
              // die;
              
              $slider =  Slider::create([     
                'title'             => $data['title'],
                'image'             => $data['image'],
                'tagline'             => $data['title'],                
                'url'             => $data['url'],
                'is_active'             => 1          

                         
               ]);
             if(isset($slider)) {
              return redirect()->route('slider.index')
                  ->with('success','Slider created successfully.');
              }else{
                  return redirect()->back()
                  ->with('error',
                   'Action Failed Please try again.');
              }
       
    }


   
    public function show(Slider $slider)
    {
        $title = "Slider Show";
        return view('auth.dashboard.settings.Slider.show',compact('title','slider'));
    }


    
    public function edit(Slider $slider)
    {
        $title = 'Slider Edit';
        return view('slider.edit',compact('slider','title'));
    }


    
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'title' => 'required',
            'image' => 'required',
            'tagline' => 'required',         
            'url' => 'required',


        ], 
        [
            'title.required' => 'Title field must be filled',
            'image.required' => 'Image field must be filled',                   
            'tagline.required' => 'Tagline field must be filled',
            'url.required' => 'Url field must be filled',                 
                       


        ]
    );

         $slider = Slider::findOrFail($id);
          //dd($request->file('file'));          
          $slider->image            = $request->input('image');
          $slider->title            = $request->input('title');
          $slider->tagline            = $request->input('tagline');
          $slider->url            = $request->input('url');

          $update = $slider->update();
          if(isset($update)) {
              return redirect()->route('slider.index')->with('success','Slider updated successfully');
          }else{
              return redirect()->back()->with('error','Action Failed Please try again.');
          }
    }

    public function disable(Request $request, $id)
    {
        $slider = Slider::findOrFail($id);     

          $slider->is_active            = 0;      
          $update = $slider->update();


          if(isset($update)) {
              return redirect()->route('slider.index')->with('success','One Slider Catelogue disabled');
          }else{
              return redirect()->back()->with('error','Action Failed Please try again.');
          }

        
    }
    public function enable(Request $request, $id)
    {
        $slider = Slider::findOrFail($id);

          $slider->is_active            = 1;      
          $update = $slider->update();


          if(isset($update)) {
              return redirect()->route('slider.index')->with('success','One Slider Catelogue enabled');
          }else{
              return redirect()->back()->with('error','Action Failed Please try again.');
          }
    }

    
    public function destroy(Slider $slider)
    {
        $slider->delete();
        return redirect()->route('slider.index')
                        ->with('success','Slider deleted successfully');
    }
}