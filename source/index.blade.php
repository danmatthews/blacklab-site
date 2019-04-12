@extends('_layouts.master')

@section('content')
    
<div class="lg:py-16 py-8">
	<div class="container px-4 mx-auto flex items-center flex-wrap">
		<div class="w-full lg:w-1/2 mb-0 lg:mb-0 pr-0 lg:pr-16 lg:mt-0">
			{{-- <img src="{{asset('img/me.jpg') }}" alt="me!" class="rounded shadow-lg" /> --}}
		</div>
		<div class="w-full pl-0 md:w-3/4 lg:w-1/2 md:pr-8">
			<div class="rounded p-8">
				<h2 class="text-grey-light text-xl mb-4 leading-normal">I'm Dan...</h2>
				<p class="text-white mb-4 leading-normal">I've been working in the industry for more than a decade, including stints at agencies and small startups.</p>
				<p class="text-white mb-4 leading-normal">I pride myself on being able to walk the line between design, marketing and development.</p>
				<p class="text-white mb-4 leading-normal">Above all, I enjoy turning ideas into well-designed products and websites that are focused on being secure, fast, and easy to use.</p>
			</div>
		</div>
		
		
	</div>
	<div class="container px-4 py-8 lg:py-4 mx-auto flex items-end flex-wrap mt-8">

			<div class="w-full lg:w-1/3 mb-0 lg:mb-0 pr-0 lg:pr-16 lg:mt-0">
				{{-- <img src="{{asset('img/finn.jpg') }}" alt="me!" class="rounded shadow-lg" /> --}}
			</div>
		<div class="w-full text-left md:w-3/4 lg:w-2/3 md:pr-8">
				<h2 class="text-grey-light text-xl mb-4 leading-normal">...and this is Finn</h2>
				<p class="text-white mb-4 leading-normal">He puts the "Black Lab" in "Black Lab Software".</p>
		</div>

		
		
	</div>
</div>
	<div class="bg-white shadow-lg">
		<div class="px-4 py-8 lg:py-16 container mx-auto">
			
			
			<h2 class="mb-16 text-2xl md:text-3xl text-center">Services</h2>
			
			<div class="flex py-8">
				<h4 class="text-right pr-8 w-1/3 inline-block text-secondary-light mb-4 text-xl">Bespoke Business Software</h4>
				<div class="w-2/3 border-l-4 border-secondary-light px-8 py-2">
					<p class="text-grey-darkest leading-normal">Web-based software designed for your specific business purposes can streamline your workflow and save you money.</p>
				</div>
			</div>
			
			<div class="flex py-8">
				<h4 class="text-right pr-8 w-1/3 inline-block text-secondary-light mb-4 text-xl">Websites</h4>
				<div class="w-2/3 border-l-4 border-secondary-light px-8 py-2">
					<p class="text-grey-darkest leading-normal">Every business needs a reliable, discoverable and good looking website.</p>
					<p class="text-grey-darkest leading-normal">I can get you off the ground with a site you can update and run yourself easily.</p>
				</div>
			</div>
			<div class="flex py-8">
				<h4 class="text-right pr-8 w-1/3 inline-block text-secondary-light mb-4 text-xl">Advice &amp; Consultancy</h4>
				<div class="w-2/3 border-l-4 border-secondary-light px-8 py-2">
					{{-- <p class="text-grey-darkest leading-normal">Need to know the best way to tackle an idea or project? Or wondering if an idea is even possible? <a class="text-secondary-light" href="{{ route('contact') }}">Get in touch</a> to chat.</p> --}}
				</div>
			</div>
			
			<div class="flex py-8">
				<h4 class="text-right pr-8 w-1/3 inline-block text-secondary-light mb-4 text-xl">Product Development</h4>
				<div class="w-2/3 border-l-4 border-secondary-light px-8 py-2">
					{{-- <p class="text-grey-darkest leading-normal">The web is opening new opportunities for everyone - and I love bringing ideas and products to life. Got an idea? <a href="{{route('contact') }}">Get in touch</a> and let's talk.</p> --}}
				</div>
			</div>
			<div class="flex py-8">
				<h4 class="text-right pr-8 w-1/3 inline-block text-secondary-light mb-4 text-xl">Technical Subcontracting</h4>
				<div class="w-2/3 border-l-4 border-secondary-light px-8 py-2">
					<p class="text-grey-darkest leading-normal mb-4">I've worked with many design agencies, ad agencies and marketing companies as a technical contractor to bring a project to life.</p>
					<p class="text-grey-darkest leading-normal">I can flexibly fit in with your existing technical or non-technical team to help start projects, or get them to the finish line.</p>	
				</div>
			</div>
			<div class="flex py-8">
				<h4 class="text-right pr-8 w-1/3 inline-block text-secondary-light mb-4 text-xl">The Full Stack</h4>
				<div class="w-2/3 border-l-4 border-secondary-light px-8 py-2">
					<p class="text-grey-darkest leading-normal">I work on the complete stack - from spinning up servers, to server-side business logic, to theming and design - i can help with every step.</p>
				</div>
			</div>
		</div>
		
	</div>
	<div>
		
		<div class="container px-4 py-8 lg:py-16 mx-auto flex flex-wrap">
			<div class="w-full lg:w-1/2 mb-8 lg:mb-0 pr-0 lg:pr-8 shadow rounded overflow-hidden">
				<iframe id="where-map" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJPcSz1z0bfUgRXIxM6rFmJFk&key=AIzaSyA-UcB_d9RbsxsNchKBast4PONDeqLknPA" allowfullscreen></iframe>
			</div>
			<div class="w-full pl-0 lg:w-1/2 lg:pl-8">
				<h2 class="text-grey-light mb-8">Where are you based?</h2>
				<p class="text-white mb-4 leading-normal">Black Lab is based in <strong>The Guild</strong>, an awesome co-working space in the heart of Carlisle.</p>
				<p class="text-white mb-3 leading-normal mb-8">We're 20 minutes from the Lake District and 5 minutes from the border with bonnie scotland.</p>
				<a href="http://theguild-carlisle.co.uk?refer=blacklab" class="shadow-lg inline-block text-sm rounded-full bg-primary-light text-white text-center px-6 py-3 no-underline">See Their Website</a>
			</div>
		</div>
	</div>
	{{-- <div class="bg-grey-lighter py-16">
		<div class="container px-2 mx-auto flex flex-wrap justify-center ">
			<div class="px-4 rounded w-1/4 text-center mb-8">
				<img class="block mx-auto mb-4" src="{{ asset('img/laravel.png') }}" />
				<h4 class="inline-block text-secondary-light mb-2">Laravel</h4>
				<p class="leading-normal">Laravel is a PHP Framework and my 'weapon of choice'. Battle-tested and enterprise ready for building everything from web applications to tools.</p>
			</div>
			<div class="px-4 rounded w-1/4 text-center">
				<img class="block mx-auto mb-4" src="{{ asset('img/vue.png') }}" />
				<h4 class="block text-secondary-light mb-4">VueJS</h3>
					<p class="leading-normal">Laravel is a PHP Framework and my 'weapon of choice'. Battle-tested and enterprise ready for building everything from web applications to tools.</p>
				</div>
				<div class="px-4 rounded w-1/4 text-center">
					<img class="block mx-auto mb-4" src="{{ asset('img/php.png') }}" />
					<h4 class="block text-secondary-light mb-2">PHP Development</h4>
					<p class="leading-normal">Laravel is a PHP Framework and my 'weapon of choice'. Battle-tested and enterprise ready for building everything from web applications to tools.</p>
				</div>
				{{-- <div class="px-4 rounded w-1/4 text-center">
					<img class="block mx-auto mb-4" src="{{ asset('img/javascript.png') }}" />
					<h4 class="block text-secondary-light mb-4">Javascript Development</h4>
					<p class="leading-normal">Laravel is a PHP Framework and my 'weapon of choice'. Battle-tested and enterprise ready for building everything from web applications to tools.</p>				
				</div> 
				<div class="px-4 rounded w-1/4 text-center">
					<img class="block mx-auto mb-4" src="{{ asset('img/wp.png') }}" />
					
					<h4 class="block text-secondary-light mb-4">Wordpress Development</h4>
					<p class="leading-normal">Laravel is a PHP Framework and my 'weapon of choice'. Battle-tested and enterprise ready for building everything from web applications to tools.</p>				
					
				</div>
			</div>
		</div>
	</div> --}}
</div>

@endsection
