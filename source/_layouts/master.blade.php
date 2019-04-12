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
                            <a href="/">
                            <img src="/img/logo-white-on-black.svg" alt="Logo" style="max-width:320px;">
                            </a>
                        </div>
                        
                        <div class="nav flex mt-8 md:mt-0">
                            <a href="/" class=" text-base px-4 py-2 no-underline  nunito rounded-full text-white ml-2 lg:ml-4">About</a>
                            <a href="work" class=" text-base px-4 py-2 no-underline  nunito rounded-full text-white ml-2 lg:ml-4">Work &amp; Clients</a>
                            {{-- <a href="fullstackgoals" class=" text-base bg-white px-4 py-2 no-underline  nunito rounded-full text-white ml-2 lg:ml-4">Full stack goals <span class=" text-base bg-red text-xs text-white p-1 uppercase rounded">new</span></a> --}}
                            <a href="blog" class=" text-base px-4 py-2 no-underline  nunito rounded-full text-white ml-2 lg:ml-4">Blog</a>
                            <a href="contact" class=" text-base px-4 py-2 no-underline  nunito rounded-full text-white ml-2 lg:ml-4">Get In Touch</a>
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
                    <div class="container mx-auto flex items-center px-4">
                        <div class="mr-4">
                        <a href="https://www.netlify.com" class="block">
                            <img class="block" src="https://www.netlify.com/img/global/badges/netlify-color-bg.svg"/>
                        </a>
                        </div>
                        <div>
                            <p class="text-white text-sm mb-1">Powered by <a class="text-white" href="#">Jigsaw</a>, deployed on <a class="text-white" href="https://www.netlify.com">Netlify</a>.</p>
                            <p class="text-xs text-grey">Check them out, you won't be disappointed.</p>
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
