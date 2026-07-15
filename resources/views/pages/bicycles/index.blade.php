@extends('master.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">

                <!-- Chamada do Componente de Bicicletas -->
                @include('components.bicycles.bicycle-list', ['bicycles' => $bicycles])

            </div>
        </div>
    </div>
@endsection
