<div class="">
  @if ($this->answere)


   <div class="text-white px-6 py-4 border-0 rounded relative mb-4 bg-pink-500">
    <h1 class="text-bold text-black">Provider:</h1> 
    <br>
    <button class="absolute bg-transparent text-2xl font-semibold leading-none right-0 top-0 mt-4 mr-6 outline-none focus:outline-none">
      <span><i class="fas fa-at"></i></span>
    </button>
      {{$this->assistances}}
      ID : {{$provider->id}}<br>
      Name: {{$provider->name}}<br>
      Address: {{$provider->address}}<br>
      Email: {{$provider->email}}<br>
      Phone: {{$provider->phone}}<br>
      Price: {{$provider->price}}<br>
      Open_week {{$provider->open_week}}<br>
      Break_week: {{$provider->break_week}}<br>
      Close_week: {{$provider->close_week}}<br>
      Open_weekend: {{$provider->open_weekend}}<br>
      Break_weekend: {{$provider->break_weekend}}<br>
      Close_weekend: {{$provider->close_weekend}}<br>
      Note: {{$provider->note}}

    </div> 

 
   @else 




 
      
  @endif


</div>




