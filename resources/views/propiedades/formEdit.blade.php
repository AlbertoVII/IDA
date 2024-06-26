<div class="row padding-1 p-1">

  <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="border-b border-gray-900/10 pb-12 ">
  
      <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
       
        <div class="sm:col-span-4">
          <label for="titulo" class="form-label block text-sm font-medium leading-6 text-gray-900">{{ __('Titulo') }}</label>
          <div class="mt-2">
            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
              <span class="flex select-none items-center pl-3 text-gray-500 sm:text-sm"></span>
              <input type="text" name="titulo" class="form-control block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="{{ old('titulo', $data['propiedad']['titulo'])}}" id="titulo" placeholder="Titulo">
            </div>
          </div>
        </div>

        <div class="sm:col-span-3">
          <label for="descripcion" class="form-label">{{ __('Descripcion') }}</label>
          <div class="mt-2">
            <input type="text" name="descripcion" rows="3" class="form-control block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="{{ old('descripcion', $data['propiedad']['descripcion']) }}" id="descripcion" placeholder="Descripcion">
            {!! $errors->first('descripcion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
          </div>
        </div>

    
          <div class="sm:col-span-3">
            <label for="precio" class="form-label block text-sm font-medium leading-6 text-gray-900">{{ __('Precio') }}</label>
            <div class="mt-2">
              <input type="text" name="precio" class="form-control block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="{{ old('precio', $data['propiedad']['precio']) }}" id="precio" placeholder="Precio">
            </div>
          </div>
       
          <div class="sm:col-span-3">
            <label for="direccion" class="form-label block text-sm font-medium leading-6 text-gray-900">{{ __('Direccion') }}</label>
            <div class="mt-2">
            <input type="text" name="direccion" class="form-control block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="{{ old('direccion', $data['propiedad']['direccion']) }}" id="direccion" placeholder="Direccion">
          
          </div>
        </div>
   
    </div>

  </div>

  <div class="mt-6 flex items-center justify-end gap-x-6">
    <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
    <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">{{ __('Submit') }}</button>  
  </div>


</div>