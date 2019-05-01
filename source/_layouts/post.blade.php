@extends('_layouts.master', [
    'slogan' => $page->title,
])

{{-- @section('title', $page->title) --}}

@section('content')
<!-- Start Slogan -->
<div class="container mx-auto lg:flex items-center py-8 lg:py-16 px-4">
    <div class="w-full lg:w-full mb-4 lg:mb-0">
        <p class="uppercase tracking-wide text-center text-primary-light mb-2">{{ $page->getDate()->format('F j, Y') }}</p>
        <p class="animated text-center fadeIn nunito text-2xl md:text-4xl text-white leading-normal font-bold">{{ $page->title }}</p>
    </div>
</div>
<!-- End Slogan -->

<div class="bg-white shadow-lg px-4 py-16">
<div class="container mx-auto">

    {{-- <p>
        <strong>{{ date('F j, Y', $page->date) }}</strong><br>
        @foreach ($page->tags as $tag)
            <a href="/tags/{{ $tag }}">{{ $tag }}</a>
            {{ $loop->last ? '' : '-' }}
        @endforeach
    </p> --}}

    <blockquote data-phpdate="{{ $page->date }}">
        <em>WARNING: This post is over a year old. Some of the information this contains may be outdated.</em>
    </blockquote>


    <div class="post-content">
    @yield('postContent')
    </div>

    @include('_partials.share')

    
</div>
</div>
@endsection
