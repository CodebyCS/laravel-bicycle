@extends('master.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <!-- Chamada do Componente de Países -->
                @include('components.countries.country-list', ['countries' => $countries])

            </div>
        </div>
    </div>
@endsection
