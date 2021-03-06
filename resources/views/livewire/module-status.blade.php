
  <div> 

    

    
     <section class="mt-1 bg-gray-700 py-0 text-center text-7xl">
        <div class="text-5xl font-extrabold ...">
            <span class="text-center text-4xl bg-clip-text text-transparent 
            bg-gradient-to-r from-purple-400 to-blue-500 leading-8">
                {{$module->title}}
            </span>
         </div>
 
      </section>

      <div class="mt-5">
          <div class="container grid grid-cols-1 lg:grid-cols-3 gap-7">

              <div class="card">


                  <div class="card-body">


                      <div class="flex items-center bg-gray-300  rounded px-1 py-5 mb-5">
                          <figure>
                              <img class="w-12 h-12 object-cover rounded-full mr-4" src="{{$module->managment->profile_photo_url}}" alt="">
                          </figure>
                          <div>
                              <p>{{$module->managment->name}}</p>
                                  <a class="text-blue-500 text-sm" href="">{{'@' . Str::slug($module->managment->name,' ')}}
                            </a>
                          </div>

                      </div>
                    <div>
                        <h1 class="text-gray-700 text-md">Progress {{$this->progress}}% complete</h1>
                      <div class="relative pt-1">
                        <div class="overflow-hidden h-2 mb-4 text-xs flex rounded bg-blue-100">
                          <div style="width:{{$this->progress . '%'}}" class="transition-all duration-200 shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-blue-500"></div>
                        </div>
                      </div>
                    </div> 



                      <ul>
                          @foreach ($module->sections as $section)
                              <li class="text-gray-900 mb-4">
                                  <a class="font-bold text-base inline-block mb-2 mt-5" href="">{{$section->name}}</a>
                                  <ul>
                                      @foreach ($section->lessons as $lesson)
                                        <li class="mb-3 flex">


                                            <div>
                                                @if ($lesson->complete)
                                                   @if ($currently->id == $lesson->id)
                                                        <span class="inline-block w-4 h-4 border-2 border-yellow-300  rounded-full mr-3 mt-1"></span>
                                                    @else
                                                    <span class="inline-block w-4 h-4 bg-yellow-300  rounded-full mr-3 mt-1"></span>

                                                    
                                                   @endif
                                                 
                                                
                                                @else

                                                    @if ($currently->id == $lesson->id)
                                                    <span class="inline-block w-4 h-4 border-2 border-yellow-300  rounded-full mr-3 mt-1"></span>


                                                    @else
                                                    <span class="inline-block w-4 h-4 bg-blue-200 rounded-full mr-3 mt-1"></span>

                                                        
                                                    @endif

                                                    
                                                @endif
                                            </div>


                                            <a class="cursor-pointer" wire:click="lessonchange({{$lesson}})">
                                                {{$lesson->name}} 
                                                {{-- @if($lesson->complete)
                                                (completed)
                                            @endif</a> --}}
                                            </a>
                                        </li>
                                      @endforeach
                                  </ul>
                              </li>
                          @endforeach
                      </ul>
                  </div>

              </div>

          


               <div class="lg:col-span-2">

                <div class="fix-responsive">
                      {!!$currently->iframe!!}

                </div>
                @if ($currently->description)
                     <div class="text-gray-900">
                         {{$currently->description->name}}
                     </div>
                    
                @endif

                <br>
               
                {{-- <div class="mt-1 bg-gray-700 py-7 text-center text-7xl">
                <h1 class="animate-pulse">Fill out</h1>
                </div> --}}
              
                <br>

                @if ($currently->fillout == 1)
                <br>
                 <div class="card">{{--ml-60 --}}
                <section class="card-body bg-gray-700 text-center">{{-- mt-0 bg-gray-700 py-0 w-80 text-center text-7xl --}}
                    <div class=""> {{-- mt-1 bg-gray-600 py-7 text-center text-7xl --}}
                        <h1 class="">Fill out</h1>
                        </div>
 
                        
                
                 {{-- <form action="{{route('assistance.store',$this->currentUser->id)}}" method="post"> --}}
                    {!! Form::open(['route'=>['assistance.store',$this->currentUser->id]]) !!}
                     
                    
                    {{-- @csrf --}}


{{--                     
                     <label>
                        Symptoms:
                          <br>
                          <input type="text" name="symptoms" value="{{old('symptoms')}}">
                      </label>
            
                    @error('name')
                        <br>
                        <small>*{{$message}}</small>
                 
                    @enderror
            
                    <br> --}}


                    <div class="m-3">

                        {!! Form::label('symptoms', 'Symptoms') !!}
                        {!! Form::text('symptoms',null, ['class'=>'form-input block w-full mt-1']) !!}
                    
                        @error('symptoms')
                        <strong class="text-yellow-400 text-bold">{{$message}}</strong>
                        @enderror
                    </div>
                    


{{-- 
                    <label>
                        <br>
                        Email:
                        <br>
                        <input type="email" name="email" value="{{old('email')}}">
                    </label>
                    @error('email')
                    <br>
                    <small>*{{$message}}</small>
             
                   @enderror
            
                    <br> --}}


                    <div class="m-3">

                        {!! Form::label('email', 'Email: ') !!}
                        {!! Form::text('email',null, ['class'=>'form-input block w-full mt-1']) !!}
                    
                        @error('email')
                        <strong class="text-yellow-400 text-bold">{{$message}}</strong>
                        @enderror
                    </div>
                    
            
            
                    {{-- <label>
                        <br>
                        Address:
                        
                        <br>
                        <textarea name="address" rows="5">{{old('address')}}</textarea>
                    </label>
            
                    @error('address')
                    <br>
                    <small>*{{$message}}</small>
             
                @enderror
            
                    <BR> --}}

                        
                    <div class="m-3">

                        {!! Form::label('address', 'Address: ') !!}
                        {!! Form::text('address',null, ['class'=>'form-input block w-full mt-1']) !!}
                    
                        @error('address')
                        <strong class="text-yellow-400 text-bold">{{$message}}</strong>
                        @enderror
                    </div>
                    

                    {!! Form::hidden('user_id', $this->currentUser->id) !!}

                        
              
                       
                


              
                   @if($this->rights == 0)
                   

                         <i class="far fa-square cursor-pointer"  wire:click='HerebyTerms'> I accepted terms and conditions of use my personal data</i><br>
                         <br>
                         <span class="btn btn-primary">Send</span>
                         
                       @else
                      
                         <i class="fas fa-check cursor-pointer"> I accepted term and condition of use my personal data</i><br><br>
                         {{-- <button class="btn btn-primary" type="submit" >Send</button> --}}
                         <div class="flex justify-center">
                            {!! Form::submit('Create', ['class' => ' cursor-pointer border border-green-500 text-green-500 rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:text-white hover:bg-green-600 focus:outline-none focus:shadow-outline']) !!}
                        </div>
                   @endif
                   <br>
                  



                   {!! Form::close() !!}
            </section>
                </div>
                     
              
                      
                    
                @endif
            
               
                



                @if ($currently->answere == 1)

                        

                  
                  
                        @livewire('result-assistance', ['user' => $this->currentUser], key($this->currentUser->id)) --}}

                        
                  
                 

              
             

        
                  
                   
                @endif
                <br>

                {{-- Here then i place if there is a form or answere of form --}}

                 {{-- //////////////////////////////////////////////////////////// --}}
                 

                
           

                


            


                 {{-- //////////////////////////////////////////////////////////// --}}
 
                 <div class="flex items-center mt-4 cursor-pointer" wire:click="completed">

                    @if ($currently->complete)

                         <i class="fas fa-toggle-on text-2xl text-yellow-300"></i>
                      @else
                        <i class="fas fa-toggle-off text-2xl text-gray-600"></i>
                    @endif
                   


                        <p class="text-sm ml-2">Mark this step as complete to continue</p>
                 </div>

                 <div class="card mt-2">
                        <div class="card-body flex text-blue-400 font-bold">
                              
                            @if ($this->previous)
                            <a wire:click="lessonchange({{$this->previous}})" class="cursor-pointer">Previous Step</a>
                            @endif

                            @if ($this->next)
                            <a wire:click="lessonchange({{$this->next}})" class="ml-auto cursor-pointer">Next Step</a>
                            @endif
                            
                            
                            




                           
                        </div>
                 </div>




{{-- 
                
                 {{$currently->name}}
                 <p>Index: {{$this->index}}</p>
                 <p>Previous: @if ($this->previous)
                 {{$this->previous->id}}
                 @endif</p>

                 <p>Next: @if ($this->next)
                 {{$this->next->id}}
                 @endif</p> --}}
              </div>
            </div>
      </div>
      


  </div>
 
