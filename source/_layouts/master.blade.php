<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        @yield('title')
        {{ !empty($__env->yieldContent('title')) ? ' | ' : '' }}
        {{ $page->site->title }}
    </title>

    @include('_partials.head.favicon')
    @include('_partials.head.meta')
    @include('_partials.cms.identity_widget')

    <link rel="stylesheet" href="{{ mix('css/app.css', 'assets/build') }}">
</head>
<body class="g-radient">
    <header>
        <div id="app">
            {{-- <div class="bg-primary-darker">
                <a href="#" class="inline-block p-4 bg-primary-dark">
                    <i class="fas fa-code text-white"></i>
                </a>
                <a href="#" class="inline-block p-4">
                    <i class="fas fa-video text-white"></i>
                </a>
            </div> --}}
            <header class="m-header">
                <div class="container mx-auto">
                    <div class="md:flex px-4 justify-between items-center py-8 lg:py-8">
                        <div class="items-center">
                            {{-- <a href="{{ url('') }}"> --}}
                            <img src="/img/logo-white-on-black.svg" alt="Logo" style="max-width:320px;">
                            {{-- </a> --}}
                        </div>
                        
                        <div class="nav flex mt-8 md:mt-0">
                            {{-- <a href="{{ url('') }}" class=" text-base px-4 py-2 no-underline  nunito rounded-full text-white ml-2 lg:ml-4 {{ activeRoute('home') }}">About</a> --}}
                            {{-- <a href="{{ route('work') }}" class=" text-base px-4 py-2 no-underline  nunito rounded-full text-white ml-2 lg:ml-4 {{ activeRoute('work') }}">Work &amp; Clients</a> --}}
                            {{-- <a href="{{ route('fullstackgoals') }}" class=" text-base bg-white px-4 py-2 no-underline  nunito rounded-full text-white ml-2 lg:ml-4 {{ activeRoute('fullstackgoals') }}">Full stack goals <span class=" text-base bg-red text-xs text-white p-1 uppercase rounded">new</span></a> --}}
                            {{-- <a href="{{ route('blog') }}" class=" text-base px-4 py-2 no-underline  nunito rounded-full text-white ml-2 lg:ml-4 {{ activeRoute(['blog','article']) }}">Blog</a> --}}
                            {{-- <a href="{{ route('contact') }}" class=" text-base px-4 py-2 no-underline  nunito rounded-full text-white ml-2 lg:ml-4 {{ activeRoute('contact') }}">Get In Touch</a> --}}
                        </div>
                    </div>
    
                    <div class="px-4">
                        <div class="container mx-auto lg:flex items-center py-8 lg:py-16">
                            <div class="w-full lg:w-full mb-4 lg:mb-0">
                                <p class="animated text-center fadeIn nunito text-2xl md:text-4xl text-white leading-normal font-bold">Bespoke web development, websites, and trusted development subcontracting.</p>
                            </div>
                        </div>
                    </div>
                    
                    {{-- <div class="hero w-3/4 py-16"> --}}
                        {{-- <p class="text-xl lg:text-5xl mb-3 text-grey-darker font-bold">Let's build cool stuff together.</p> --}}
                        {{-- <p class="nunito text-5xl text-grey-dark leading-normal">Bespoke business software, web apps, websites and trusted development subcontracting.</p> --}}
                        {{-- </div> --}}
                        
                    </header>
                    <main>
                    @yield('content')
                    </main>
                    
                </div>
                
                <footer class="bg-primary-dark py-16 mb-6 md:mb-0">
                    <div class="container mx-auto flex px-4  flex-wrap ">
                        <div class="w-full md:w-1/4 mb-6 md:mb-0">
                            <h3 class="text-white mb-8 text-base inline-block border-b-4 pb-2 border-grey-light">Links</h3>
                            {{-- <p class="mb-3 text-sm"><a class="text-white no-underline" href="{{ url('terms-of-business') }}">Basic terms of business</a></p> --}}
                            
                        </div>
                        <div class="w-full md:w-1/4 mb-6 md:mb-0">
                            <h3 class="text-white mb-8 text-base inline-block border-b-4 pb-2 border-grey-light">Elsewhere on the web</h3>
                            <p class="mb-3 text-sm"><a class="text-white no-underline" href="http://twitter.com/danmatthews">Twitter</a></p>
                            <p class="mb-3 text-sm"><a class="text-white no-underline" href="http://instagram.com/danmatthews">Instagram</a></p>
                            
                        </div>
                      
                        <div class="w-full md:w-1/4 mt-6 md:mt-0">
                            <p class="text-sm mb-2 text-white tracking-wide nunito mb-4">&copy; Dan Matthews {{ date('Y') }}</p>
                        </div>
                    </div>
                </footer>
    
    
    
    
            <!-- Global site tag (gtag.js) - Google Analytics -->
            <script async src="https://www.googletagmanager.com/gtag/js?id=UA-27703704-1"></script>
            <script>
                window.dataLayer = window.dataLayer || [];
                function gtag(){dataLayer.push(arguments);}
                gtag('js', new Date());
                
                gtag('config', 'UA-27703704-1');
            </script>
            
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
            <script>
                $(document).ready(function() {
                    $('pre code').each(function(i, block) {
                        hljs.highlightBlock(block);
                    });
                });
            </script>
            
            {{-- <script src={{ asset('/js/app.js') }}></script> --}}

    <script src="{{ mix('js/main.js', 'assets/build') }}"></script>
    @includeWhen($page->production, '_partials.analytics')
    @include('_partials.cms.identity_redirect')
</body>
</html>
