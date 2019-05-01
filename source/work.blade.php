@extends('_layouts.master', [
    'slogan' => "Work & Clients",
])

@section('content')
<!-- Start Slogan -->
<div class="container mx-auto lg:flex items-center py-8 lg:py-16 px-4">
    <div class="w-full lg:w-full mb-4 lg:mb-0">
        <p class="animated text-center fadeIn nunito text-2xl md:text-4xl text-white leading-normal font-bold">Work &amp; Clients</p>
    </div>
</div>
<!-- End Slogan -->

<div class="container mx-auto px-4">
    @foreach (range(0,4) as $row)
    <div class="flex flex-wrap">

        <div class="p-4 lg:w-1/2">
            <img src="http://placehold.it/600x400" class="shadow-lg rounded">
        </div>
        <div class="p-4 lg:w-1/2">
            <img src="http://placehold.it/600x400" class="shadow-lg rounded">
        </div>
        
    </div>
    @endforeach
</div>

@endsection
