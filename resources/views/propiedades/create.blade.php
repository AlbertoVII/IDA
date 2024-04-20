@extends('layouts.app')


@section('template_title')
    {{ __('Create') }} Propiedad
@endsection
@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header bg-white max-w-7xl mx-auto sm:px-6 lg:px-8 py-5">
                        <span class="card-title">{{ __('Create') }} Propiedad</span>
                    </div>
                    <div class="card-body bg-white max-w-7xl mx-auto sm:px-6 lg:px-8 py-5">
                        <form method="POST" action="{{ route('propiedades.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('propiedades.form')

                        </form>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>
  
@endsection

<<<<<<< HEAD
=======
@section('form')
 <div style="display:true" >
<form action="{{ URL('uploadFiles') }}" method="post" enctype="multipart/form-data" id="image-upload" class="dropzone border-0.5 card-header bg-white max-w-5xl mx-auto sm:px-6 lg:px-8 py-5">
    @csrf
      
            <div class="text-center py-1.5">
              <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z" clip-rule="evenodd" />
              </svg>
              
              <p class="text-xs leading-5 text-gray-600">PNG, JPG, GIF up to 10MB</p>
            </div>
    </form>
</div>        
@endsection
>>>>>>> e46cd55110e6b1bb0c23d7f3cad1fa2410438bc1
