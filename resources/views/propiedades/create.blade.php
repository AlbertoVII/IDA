@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Propiedad
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header bg-white max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <span class="card-title">{{ __('Create') }} Propiedad</span>
                    </div>
                    <div class="card-body bg-white">
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
