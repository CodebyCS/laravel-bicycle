@extends('master.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">

                <!-- Chamada do Componente e passagem dos dados -->
                @include('components.user-list', ['users' => $users])

            </div>
        </div>
    </div>
@endsection
