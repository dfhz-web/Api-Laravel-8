<?php

namespace App\Http\Controllers\SpeciallyUpdate;

use App\Http\Controllers\Controller;
use App\Models\Kind;
use Illuminate\Http\Request;
use App\Models\Module;
use App\Models\Price;
use App\Models\Type;
use Illuminate\Support\Facades\Storage;

class ModuleController extends Controller
{
    /**
     * Display a listing ssof the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('specially.modules.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kinds = Kind::pluck('name', 'id');
        $prices = Price::pluck('name', 'id');
        $types = Type::pluck('name','id');
        return view('specially.modules.create',compact('kinds','prices','types'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
    
        $request->validate ([
            'kind_id' => 'required',
            'price_id' => 'required',
            'type_id' => 'required',
            'title' => 'required',
            'slug' => 'required|unique:modules',
            'subtitle' => 'required',
            'description' => 'required',
            'file' => 'image'
          
        ]);

        $module = Module::create($request->all());


       
        if($request->file('file'))
        {
            $place = Storage::put('pictureupdate',$request->file('file'));
              $module->picture()->create([
                  'url' => $place
              ]);
            
            
         }
         
         
        

        //  return view('specially.modules.index',compact('module'));
        return redirect()->route('updates.index');
      
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show(Module $module)
    {
        return view('specially.modules.create',compact('module'));
    }
   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\sHttp\Response
     */
    public function edit(Module $module)
    {
        $kinds = Kind::pluck('name', 'id');
        $prices = Price::pluck('name', 'id');
        $types = Type::pluck('name','id');
       
        return view('specially.modules.edit',compact('module','kinds','prices','types'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Module $module)
    {
        $request->validate ([
            'kind_id' => 'required',
            'price_id' => 'required',
            'type_id' => 'required',
            'title' => 'required',
            'slug' => 'required|unique:modules,slug,' . $module->id,
            'subtitle' => 'required',
            'description' => 'required',
            'file' => 'image'

           
          
        ]);
        
        $module->update($request->all());

        if($request->file('file'))
        {
            $place = Storage::put('pictureupdate',$request->file('file'));
            if($module->picture)
            {
                Storage::delete($module->picture->url);

                $module->picture->update([
                    'url' =>  $place
                ]);

            }
            else{
                $module->picture()->create([
                    'url' =>  $place
                ]);
            }
            
            
         } 



        return redirect()->route('updates.edit',$module);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Module $module)
    {
        //
    }

    public function goals(Module $module)
    {
      return view('specially.modules.goals',compact('module'));
    }
}
