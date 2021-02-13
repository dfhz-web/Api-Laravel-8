<x-specially-layout>
  

    <h1 class="text-center">Client-update</h1>

    
    {!! Form::open(['route' => ['client.update',$item],'method'=>'put']) !!}                  
  <div class="mb-3">
  {!! Form::label('id_tipo_identificacion', " id_tipo_identificacion:") !!}
  {!! Form::text('id_tipo_identificacion', $result['id_tipo_identificacion'], ['class' => 'form-input block w-full mt-1']) !!}

            {{-- @error('name')
            <strong class="text-yellow-400 text-bold">{{$message}}</strong>
            @enderror --}}

  </div>


 <div class="mb-3">
  {!! Form::label('no_identificacion', " no_identificacion:") !!}
  {!! Form::text('no_identificacion',$result['no_identificacion'], ['class' => 'form-input block w-full mt-1']) !!}

        {{-- @error('kind')
        <strong class="text-yellow-400 text-bold">{{$message}}</strong>
        @enderror --}}

  </div>

 <div class="mb-3">
  {!! Form::label('id_naturaleza_tercero', "id_naturaleza_tercero:") !!}
  {!! Form::text('id_naturaleza_tercero', $result['id_naturaleza_tercero'], ['class' => 'form-input block w-full mt-1']) !!}

        {{-- @error('address')
        <strong class="text-yellow-400 text-bold">{{$message}}</strong>
        @enderror --}}

 </div>

 

 <div class="mb-3">
    {!! Form::label('id_regimen_tercero', "id_regimen_tercero:") !!}
    {!! Form::text('id_regimen_tercero', $result['id_regimen_tercero'], ['class' => 'form-input block w-full mt-1']) !!}
  
          {{-- @error('address')
          <strong class="text-yellow-400 text-bold">{{$message}}</strong>
          @enderror --}}
  
   </div>

   


   
 <div class="mb-3">
    {!! Form::label('digito_verificacion', "digito_verificacion:") !!}
    {!! Form::text('digito_verificacion', $result['digito_verificacion'], ['class' => 'form-input block w-full mt-1']) !!}
  
          {{-- @error('address')
          <strong class="text-yellow-400 text-bold">{{$message}}</strong>
          @enderror --}}
  
   </div>

   
   
 <div class="mb-3">
    {!! Form::label('nombres_terceros', "nombres_terceros:") !!}
    {!! Form::text('nombres_terceros', $result['nombres_terceros'], ['class' => 'form-input block w-full mt-1']) !!}
  
          {{-- @error('address')
          <strong class="text-yellow-400 text-bold">{{$message}}</strong>
          @enderror --}}
  
   </div>

   

   
 <div class="mb-3">
    {!! Form::label('apellidos_terceros', "apellidos_terceros:") !!}
    {!! Form::text('apellidos_terceros', $result['apellidos_terceros'], ['class' => 'form-input block w-full mt-1']) !!}
  
          {{-- @error('address')
          <strong class="text-yellow-400 text-bold">{{$message}}</strong>
          @enderror --}}
  
   </div>

   



   
 <div class="mb-3">
    {!! Form::label('id_genero_tercero', "id_genero_tercero:") !!}
    {!! Form::text('id_genero_tercero', $result['id_genero_tercero'], ['class' => 'form-input block w-full mt-1']) !!}
  
          {{-- @error('address')
          <strong class="text-yellow-400 text-bold">{{$message}}</strong>
          @enderror --}}
  
   </div>

   



   
 <div class="mb-3">
    {!! Form::label('fecha_nacimiento_tercero', "fecha_nacimiento_tercero:") !!}
    {!! Form::text('fecha_nacimiento_tercero', $result['fecha_nacimiento_tercero'], ['class' => 'form-input block w-full mt-1']) !!}
  
          {{-- @error('address')
          <strong class="text-yellow-400 text-bold">{{$message}}</strong>
          @enderror --}}
  
   </div>

   


   
 <div class="mb-3">
    {!! Form::label('id_pais_tercero', "id_pais_tercero:") !!}
    {!! Form::text('id_pais_tercero', $result['id_pais_tercero'], ['class' => 'form-input block w-full mt-1']) !!}
  
          {{-- @error('address')
          <strong class="text-yellow-400 text-bold">{{$message}}</strong>
          @enderror --}}
  
   </div>

  

   <div class="mb-3">
    {!! Form::label('id_departamento_tercero', "id_departamento_tercero:") !!}
    {!! Form::text('id_departamento_tercero', $result['id_departamento_tercero'], ['class' => 'form-input block w-full mt-1']) !!}
  
          {{-- @error('address')
          <strong class="text-yellow-400 text-bold">{{$message}}</strong>
          @enderror --}}
  
   </div>


   <div class="mb-3">
    {!! Form::label('id_ciudad_tercero', "id_ciudad_tercero:") !!}
    {!! Form::text('id_ciudad_tercero', $result['id_ciudad_tercero'], ['class' => 'form-input block w-full mt-1']) !!}
  
          {{-- @error('address')
          <strong class="text-yellow-400 text-bold">{{$message}}</strong>
          @enderror --}}
  
   </div>



   <div class="mb-3">
    {!! Form::label('razon_social_tercero', "razon_social_tercero:") !!}
    {!! Form::text('razon_social_tercero', $result['razon_social_tercero'], ['class' => 'form-input block w-full mt-1']) !!}
  
          {{-- @error('address')
          <strong class="text-yellow-400 text-bold">{{$message}}</strong>
          @enderror --}}
  
   </div>




   <div class="mb-3">
    {!! Form::label('establecimento_comercial_tercero', "establecimento_comercial_tercero:") !!}
    {!! Form::text('establecimento_comercial_tercero', $result['establecimento_comercial_tercero'], ['class' => 'form-input block w-full mt-1']) !!}
  
          {{-- @error('address')
          <strong class="text-yellow-400 text-bold">{{$message}}</strong>
          @enderror --}}
  
   </div>


 
   <div class="mb-3">
    {!! Form::label('direccion_tercero', "direccion_tercero:") !!}
    {!! Form::text('direccion_tercero', $result['direccion_tercero'], ['class' => 'form-input block w-full mt-1']) !!}
  
          {{-- @error('address')
          <strong class="text-yellow-400 text-bold">{{$message}}</strong>
          @enderror --}}
  
   </div>



   <div class="mb-3">
    {!! Form::label('telefono1_tercero', "telefono1_tercero:") !!}
    {!! Form::text('telefono1_tercero', $result['telefono1_tercero'], ['class' => 'form-input block w-full mt-1']) !!}
  
          {{-- @error('address')
          <strong class="text-yellow-400 text-bold">{{$message}}</strong>
          @enderror --}}
  
   </div>



   <div class="mb-3">
    {!! Form::label('telefono2_tercero', "telefono2_tercero:") !!}
    {!! Form::text('telefono2_tercero', $result['telefono2_tercero'], ['class' => 'form-input block w-full mt-1']) !!}
  
          {{-- @error('address')
          <strong class="text-yellow-400 text-bold">{{$message}}</strong>
          @enderror --}}
  
   </div>

   


   <div class="mb-3">
    {!! Form::label('usuario_registro', "usuario_registro:") !!}
    {!! Form::text('usuario_registro', $result['usuario_registro'], ['class' => 'form-input block w-full mt-1']) !!}
  
          {{-- @error('address')
          <strong class="text-yellow-400 text-bold">{{$message}}</strong>
          @enderror --}}
  
   </div>


   <div class="mb-3">
    {!! Form::label('fecha_registro', "fecha_registro:") !!}
    {!! Form::text('fecha_registro', $result['fecha_registro'], ['class' => 'form-input block w-full mt-1']) !!}
  
          {{-- @error('address')
          <strong class="text-yellow-400 text-bold">{{$message}}</strong>
          @enderror --}}
  
   </div>



   <div class="mb-3">
    {!! Form::label('estado_tercero', "estado_tercero:") !!}
    {!! Form::text('estado_tercero', $result['estado_tercero'], ['class' => 'form-input block w-full mt-1']) !!}
  
          {{-- @error('address')
          <strong class="text-yellow-400 text-bold">{{$message}}</strong>
          @enderror --}}
  
   </div>




   <div class="mb-3">
    {!! Form::label('id_impuesto', "id_impuesto:") !!}
    {!! Form::text('id_impuesto', $result['id_impuesto'], ['class' => 'form-input block w-full mt-1']) !!}
  
          {{-- @error('address')
          <strong class="text-yellow-400 text-bold">{{$message}}</strong>
          @enderror --}}
  
   </div>


  











<div class="flex justify-center">
  {!! Form::submit('Update', ['class' => 'border border-green-500 text-green-500 rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:text-white hover:bg-green-600 focus:outline-none focus:shadow-outline']) !!}
</div>


{!! Form::close() !!}

</x-specially-layout>