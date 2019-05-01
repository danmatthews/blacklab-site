@extends('_layouts.master', [
    'slogan' => "Blog"
])

@section('content')
<!-- Start Slogan -->
<div class="container mx-auto lg:flex items-center py-8 lg:py-16 px-4">
    <div class="w-full lg:w-full mb-4 lg:mb-0">
        <p class="animated text-center fadeIn nunito text-2xl md:text-4xl text-white leading-normal font-bold">Blog</p>
    </div>
</div>
<!-- End Slogan -->
    <div class="container px-4 mx-auto pb-16">
        
        @forelse ($posts as $post)
        
        <div class="flex mb-4">
            <div class="w-1/4 pr-8 pt-8">
                <p class="text-grey-lighter text-right text-sm font-medium mb-2">{{ $post->getDate()->format('F j, Y') }}</p>
            </div>
            <div class="w-3/4 bg-white p-8 rounded shadow-lg">
                
            
                <h2 class="text-xl mb-4">
                    <a
                        href="{{ $post->getUrl() }}"
                        title="Read more - {{ $post->title }}"
                        class="text-primary no-underline"
                    >{{ $post->title }}</a>
                </h2>
            
                <p class="mt-0 leading-normal text-grey-darker">{!! $post->excerpt() !!}</p>
            
            </div>
            </div>


        @empty

        <div class="w-3/4 bg-white rounded shadow-lg text-center p-16">
            <p class="text-primary-light">Nothing Here Yet.</p>
        </div>

        @endforelse
        
    </div>
@endsection
