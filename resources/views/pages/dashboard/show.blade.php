@extends('layouts.app')

@section('content')
    <main>

        <div class="container-fluid  position-relative  jumbo"></div>

        <div class="container-fluid w-75 ">

            <div class="row text-center">


                <div class="col ">

                    <p class="mt-3 text-uppercase ">{{ $projects->title }}</p>

                    @if ($projects->cover_image)
                        <img class="img-fluid" src="{{ asset('/storage/' . $projects->cover_image) }}" alt="{{ $projects->title }}">
                    @endif

                    <p class="mt-3 text-uppercase ">{{ $projects->content }}</p>

                </div>


            </div>


        </div>




    </main>
@endsection
