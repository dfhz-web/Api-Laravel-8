<div>
    <div class="container py-8 px-auto flex justify-items-center">
      
      
     
        <x-table>
        
         
        
                <div class="px-2 py-1">
                     <input wire:keydown="search_all_pages" wire:model="search" class="form-input w-full shadow-sm" placeholder="Here you will find a providers!">
                </div>
    
    
              @if ($providers->count())
               
               
               <table class="min-w-full divide-y divide-gray-200">
                 <thead class="bg-gray-50">
                  <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                      Kind
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                      Address
                    </th>
                    <th scope="col" class="relative px-6 py-3">
                      <span class="sr-only">Go</span>
                    </th>
                  </tr>
                </thead>

                 <tbody class="bg-white divide-y divide-gray-200">

                  @foreach ($providers as $provider)
                   

                  <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                      
                      <div class="text-sm text-gray-500 flex items-center">
                        {{$provider->kind}}
                      </div>
                    <td>

                    <td class="px-6 py-4 whitespace-nowrap">
                      
                        <div class="text-sm text-gray-500 flex items-center">
                          {{$provider->address}}
                        </div>
                    <td>

                      <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                        <a href="{{route('providers.checkProvider',[$provider,$assistance])}}" class="text-indigo-600 hover:text-indigo-900">Go</a>
                      </td>
               
                    </tr>
                

                

              </tbody>
              @endforeach


              <div class="w-max">
                {{$providers->links()}}
        
              </div>

                    
                
             
            
    


    


              @else
                <div class="px-8 py-2">No results matched</div>
    
              @endif
    
        </x-table>
          
      
    </div>
    
</div>
