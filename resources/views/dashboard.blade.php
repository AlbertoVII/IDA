<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @section('content')
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <p>Esto es un contenido publico</p>
                @role('admin')
                <p>Solo lo ve el admin</p>
            
                @endrole
                @role('cliente')
                <p>Esto solo lo ve el cliente</p>
                @endrole
            </div>
                @endsection
            </div>
        </div>
    </div>
</x-app-layout>
