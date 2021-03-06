<x-specially-layout>

  <x-slot name="module">
    {{$module->slug}}
  </x-slot>

  {!! Form::model($module, ['route' => ['updates.update',$module],'method' => 'put','files' => true]) !!}
           
  <div class="grid grid-cols-4 gap-5">
       <div class="">
       <h1 class="text-2xl font-bold">Module's information</h1>
       </div>
     


       <div class="">
        {!! Form::label('type_id', 'Type') !!}
        {!! Form::select('type_id',$types, null, ['class' => 'form-input block w-full mt-1']) !!}

       </div>
       <div class="">
       {!! Form::label('kind_id', 'Kind') !!}
       {!! Form::select('kind_id',$kinds, null, ['class' => 'form-input block w-full mt-1']) !!}
       </div>
       <div class="">
       {!! Form::label('price_id', 'Price') !!}
       {!! Form::select('price_id',$prices, null, ['class' => 'form-input block w-full mt-1']) !!}

       </div>

     

  </div>
       <hr class="mt-3 mb-4">
  
  
       <div class="">

       </div>
       <div class="mb-3">
          {!! Form::label('title', "Title's course") !!}
          {!! Form::text('title', null, ['class' => 'form-input block w-full mt-1']) !!}

       </div>


       <h1 class=" font-bold mt-5 mb-5">Image of the module</h1>
       <div class="grid grid-cols-2 gap-5">
   
       @isset($module->picture)
       <figure>
         <div class="flex items-center">
         <div class="flex-shrink-0 h-30 w-full">
             <img id="picture" class="h-20 w-50 rounded-full bg-cover " src={{Storage::url($module->picture->url)}} alt="">
          </div>
         </div>
       </figure>
       
      

         @else

         <figure>
           <div class="flex items-center">
           <div class="flex-shrink-0 h-30 w-full">
               <img id="picture" class="h-20 w-50 rounded-full bg-cover " src="https://images.pexels.com/photos/53114/horse-arabs-stallion-ride-53114.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
           </div>
         </div>
   


         </figure>

         
       @endisset
   
     
       <div class="">
        
         {!! Form::file('file', ['class' => 'form-input w-full','id'=>'file','accept' => 'image/*']) !!}
         @error('file')
         <strong class="text-yellow-400 text-bold">{{$message}}</strong>
         @enderror

       </div>
     </div>

     <br>
     <br>

     <div class="mb-3">
       {!! Form::label('slug', "slug' course") !!}
       {!! Form::text('slug', null, ['class' => 'form-input block w-full mt-1']) !!}

     </div>

     <div class="mb-3">
       {!! Form::label('subtitle', "Subtitle's course") !!}
       {!! Form::text('subtitle', null, ['class' => 'form-input block w-full mt-1']) !!}

     </div>

     <div class="mb-3">
       {!! Form::label('description', "Description's course") !!}
       {!! Form::textarea('description', null, ['class' => 'form-input block w-full mt-1']) !!}

     </div>

     <div class="flex justify-center">
          {!! Form::submit('update', ['class'=> 'border border-green-500 text-green-500 rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:text-white hover:bg-green-600 focus:outline-none focus:shadow-outline']) !!} 


     </div>

    

     
   

    
    {!! Form::close() !!}
 


  <x-slot name="Helperwithslugwithname">
     <script src="{{asset('js/specially/shape.js')}}">  
     </script>
  </x-slot>
</x-specially-layout>