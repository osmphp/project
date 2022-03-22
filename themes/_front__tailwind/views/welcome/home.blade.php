@extends('std-pages::layout')
@section('content')
    <div class="container mx-auto px-4 grid grid-cols-12 gap-4">
        <section class="col-start-1 col-span-12 md:col-start-5 md:col-span-8 lg:col-start-4 md:col-span-9">
            <h1 class="text-2xl sm:text-4xl font-bold my-8">
                {{ \Osm\__("Welcome to Osm Framework") }}
            </h1>
        </section>
    </div>
@endsection
