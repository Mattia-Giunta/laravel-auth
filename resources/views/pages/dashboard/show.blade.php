@extends('layouts.app')

@section('content')
<main>

    <div class="container-fluid  position-relative  jumbo" ></div>

    <div class="container-fluid w-75 ">

        <div class="row text-center">


            <div class="col ">

                <p class="mt-3 text-uppercase ">{{ $project->title }}</p>

                <p class="mt-3 text-uppercase ">{{ $project->content }}</p>

            </div>


        </div>


    </div>




</main>
@endsection
