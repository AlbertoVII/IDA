@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} propiedad
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">
                
        {{$identificador}}
                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} propiedad</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('propiedades.update', $propiedad->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('propiedades.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
