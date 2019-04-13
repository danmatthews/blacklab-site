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
            
            <header class="m-header">
                <div class="">
                    <div class="container mx-auto">
                    
                        <div class="md:flex px-4 justify-between items-center py-8 lg:py-8">
                            <div class="items-center">
                                <a href="/">
                                    <img src="/img/logo-white-on-black.svg" alt="Logo" style="max-width:320px;">
                                </a>
                            </div>
                        
                            <div class="nav flex mt-8 md:mt-0">
                                @include('_partials.menu')
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container mx-auto">

                <div class="px-4">
                    <div class="container mx-auto lg:flex items-center py-8 lg:py-16">
                        <div class="w-full lg:w-full mb-4 lg:mb-0">
                                @if (isset($slogan))
                                <p class="animated text-center fadeIn nunito text-2xl md:text-4xl text-white leading-normal font-bold">{{ $slogan }}</p>
                                @else
                                <p class="animated text-center fadeIn nunito text-2xl md:text-4xl text-white leading-normal font-bold">Bespoke web development, websites, and trusted development subcontracting.</p>
                                @endif
                        </div>
                    </div>
                </div>
                    
                   
                        
                    </header>
                    <main>
                    @yield('content')
                    </main>
                    
                </div>
                
                <footer class="py-16 mb-6 md:mb-0 bg-primary-dark">
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
