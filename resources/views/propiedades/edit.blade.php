@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} propiedad
@endsection

@section('css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.css" rel="stylesheet">
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} propiedad</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('propiedades.update', $data['propiedad']['id']) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('propiedades.formEdit')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('form')
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
<form action="{{ URL('uploadFiles') }}" method="post" enctype="multipart/form-data" id="image-upload" class="dropzone border-0.5 card-header bg-white max-w-5xl mx-auto sm:px-6 lg:px-8 py-5">
    @csrf
            <input type="hidden" name="id" value={{$data['propiedad']['id']}}>
            <div class="text-center py-1.5">
              <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z" clip-rule="evenodd" />
              </svg>
              <p class="text-xs leading-5 text-gray-600">PNG, JPG, GIF up to 10MB</p>
            </div>

</form> 
{{-- <div class="mt-6 flex items-center justify-end gap-x-6">
    <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
    <button type="submit" form="image-upload" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Submit</button>  
  </div>      
</div> --}}

<div class="card-body bg-white max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="table-responsive">
        <div class="p-6 overflow-scroll px-0">
            <table class="mt-4 w-full table-auto text-left">
              <thead>
                <tr>
                  <th class="cursor-pointer border-y border-blue-gray-100 bg-blue-gray-50/50 p-4 transition-colors hover:bg-blue-gray-50">
                      <p class="antialiased font-sans text-sm text-blue-gray-900 flex items-center justify-between gap-2 font-normal leading-none opacity-70">Imagen <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="h-4 w-4">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9"></path>
                          </svg>
                    </p>
                  </th>
                  
                  {{-- <th class="">
                    <p class="antialiased font-sans text-sm text-blue-gray-900 flex items-center justify-between gap-2 font-normal leading-none opacity-70">Descripcion <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="h-4 w-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9"></path>
                      </svg>
                    </p>
                  </th> --}}
                  {{-- <th class="cursor-pointer border-y border-blue-gray-100 bg-blue-gray-50/50 p-4 transition-colors hover:bg-blue-gray-50">
                    <p class="antialiased font-sans text-sm text-blue-gray-900 flex items-center justify-between gap-2 font-normal leading-none opacity-70">Precio <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="h-4 w-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9"></path>
                      </svg>
                    </p>
                  </th> --}}
                  {{-- <th class="cursor-pointer border-y border-blue-gray-100 bg-blue-gray-50/50 p-4 transition-colors hover:bg-blue-gray-50">
                    <p class="antialiased font-sans text-sm text-blue-gray-900 flex items-center justify-between gap-2 font-normal leading-none opacity-70">Direccion <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="h-4 w-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9"></path>
                      </svg>
                    </p>
                  </th> --}}
                  {{-- <th class="cursor-pointer border-y border-blue-gray-100 bg-blue-gray-50/50 p-4 transition-colors hover:bg-blue-gray-50">
                    <p class="antialiased font-sans text-sm text-blue-gray-900 flex items-center justify-between gap-2 font-normal leading-none opacity-70">Imagen <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="h-4 w-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9"></path>
                      </svg>
                    </p>
                  </th> --}}
                  <th class="cursor-pointer border-y border-blue-gray-100 bg-blue-gray-50/50 p-4 transition-colors hover:bg-blue-gray-50">
                    <p class="antialiased font-sans text-sm text-blue-gray-900 flex items-center justify-between gap-2 font-normal leading-none opacity-70">Actions</p>
                  </th>
                </tr>
              </thead>
              <tbody>
                {{-- @if(!$data['propiedad']['imagenes']->isEmpty()) --}}
                {{-- {{$data['imagenes']}} --}}
                @foreach ($data['imagenes'] as $propiedad)
                {{-- {{$propiedad['ruta']}} --}}
                <tr>
                  
                  <td class="p-4 border-b border-blue-gray-50">
                    <div class="flex items-center gap-3">
                      <div class="flex flex-col">
                        <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal"><img src="{{asset('storage/images/'.$propiedad->ruta) }}" alt="" class='thumb'></p>
                        <input type="hidden" value={{$propiedad->ruta}}
                        {{-- <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal opacity-70">{{asset('storage/images/'.$propiedad->ruta) }}</p> --}}
                      </div>
                    </div>
                  </td>
                  
                  <td class="p-4 border-b border-blue-gray-50">
                    <form action="{{ route('imagenes.destroy',$propiedad->id) }}" method="POST">
                        
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i></button>
                    </form>
                  </td>
                </tr>
                @endforeach
                {{-- @endif --}}
              </tbody>
            </table>
    </div>
</div>
@endsection

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/min/dropzone.min.js"></script>
        <script type="text/javascript">
            // Dropzone.options.imageUpload = {
            Dropzone.options.image-upload = {
                
              addRemoveLinks: true,
              autoProcessQueue: false,
              uploadMultiple: true,
              parallelUploads: 100,
              maxFiles: 100,
                maxFilesize         :       23,
                acceptedFiles: ".jpeg,.jpg,.png,.gif",
                removedfile: function(file, response){
                    //alert(response);
                    console.log(response);
                    console.log('response');
                },
                url: "/uploadFiles",
                
            };
           
    </script>
@endsection
