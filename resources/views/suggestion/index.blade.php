<x-app-layout>
  
    
    <div class=" container grid grid-cols-1 lg:grid-cols-4 bg-cover" style="background-image: url({{asset('storage/another/touch.jpg')}})">
        <div class="col-span-3">
            {{-- <a href="{{route('suggestions.create',$suggestions)}}" class="btn btn-primary btn-block btn-primary:hover">Fill out request</a>
             --}}

             
             <div class="mt-40 text-center">
              
                  
            @auth
           
             <form action="{{route('suggestions.store')}}" method="POST">
            
                @csrf
                <label>
                    Name:
                      <br>
                      <input type="text" name="name" value="{{old('name')}}">
                </label>
                @error('name')
                    <br>
                    <small>*{{$message}}</small>
             
                @enderror
        
                <br>
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
    
                <br>

        
                <label>
                    <br>
                    Request:
                    
                    <br>
                    <textarea name="requestt" rows="5">{{old('requestt')}}</textarea>
                </label>

                @error('requestt')
                <br>
                <small>*{{$message}}</small>
         
            @enderror

                <BR>
                    <button class="btn btn-primary" type="submit"> Send</button>
            </form>
           

             @else


             <form action="{{route('suggestions.store')}}" method="POST">
            
                @csrf
                <label>
                    Name:
                      <br>
                      <input type="text" name="name" value="{{old('name')}}">
                </label>
                @error('name')
                    <br>
                    <small>*{{$message}}</small>
             
                @enderror
        
                <br>
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
    
                <br>

        
                <label>
                    <br>
                    Request:
                    
                    <br>
                    <textarea name="requestt" rows="5">{{old('requestt')}}</textarea>
                </label>

                @error('requestt')
                <br>
                <small>*{{$message}}</small>
         
            @enderror

                <BR>
                    <button class="btn btn-primary" type="submit"> Send</button>
            </form>
             
            
            @endauth



           

        </div>

        </div>
        <div class="mt-7">
            <section class="mb-12">

                  
                <h1 class="font-bold text-3xl mb-2">Possibles answeres</h1>
               
                @foreach ($suggestions as $suggestion)
                    <article class="mb-4 shadow"
                     @if ($loop->first)
                     x-data="{open:true}"
                       @else
                       x-data="{open:false}"
                     @endif>
                        
                    
                        <header class="bg-blue-100 border border-red px-4 py-2 cursor-pointer bg-transparent-200" x-on:click="open = !open">
                               <h1 class="font-bold text-lg text-black">
                               <i class="fas fa-angle-down mr-2 text-black"></i>
                               {{$suggestion->question}}</h1>
                        </header>
        
        
        
                        <div class="bg-white py-2 px-4" x-show="open" x-on:click.away="open = false">
                            <ul class="grid grid-cols-1 gap-2">
                               
                                    <li class="text-gray-900 text-base"><i class="fas fa-crosshairs"></i>
                                        {{$suggestion->answere}}
                                    </li>
                                
                            </ul>
        
                        </div>
        
                    </article>

                    {{-- {{$suggestions->links()}} --}}
                @endforeach
        
              
            </section>
           
        </div>
       
       
        
   
     </div>

    
     @livewire('mainfooter')


</x-app-layout>