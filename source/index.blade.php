@extends('_layouts.master')

@section('content')
<div class="bg-primary-dark">
	<!-- Start Slogan -->
	<div class="container mx-auto lg:flex items-center py-8 lg:py-16 px-4">
		<div class="w-full lg:w-full mb-4 lg:mb-0">
			<p class="animated text-center fadeIn nunito text-2xl md:text-4xl text-white leading-normal font-bold">Bespoke web development, websites, and trusted development subcontracting.</p>
		</div>
	</div>
	<!-- End Slogan -->
</div>
<div class=" shadow-lg">
		<div class="px-4 py-16 lg:py-16 container mx-auto">
			
			<div class="flex">

				<div class="w-1/3 pr-8">
					<video class="portfolio-video mb-4 shadow-lg" style="max-width: 100%; height: auto;" autoplay loop muted>
						<source type="video/mp4" src="assets/site-2.mp4"/>
					</video>
					<h3 class="mb-2 text-white font-normal text-sm">New Website!</h3>
					<p class="leading-normal text-grey-light text-sm">Static, fast &amp; powered by Netlify.</p>
				</div>

				<div class="w-1/3 px-4">
					<video class="portfolio-video shadow-lg mb-4" style="max-width: 100%; height: auto;" autoplay loop muted>
							<source type="video/mp4" src="assets/lf/site-3.mp4"/>
					</video>

					<h3 class="mb-2 text-white font-normal text-sm">Is My Ingredient Safe?</h3>
					<p class="leading-normal text-grey-light text-sm">Global Ingredient Intelligence</p>
				</div>

				<div class="w-1/3 pl-8">
					<video class="portfolio-video shadow-lg mb-4" style="max-width: 100%; height: auto;" autoplay loop muted>
							<source type="video/mp4" src="assets/lf/site-3.mp4"/>
					</video>

					<h3 class="mb-2 text-white font-normal text-sm">Is My Ingredient Safe?</h3>
					<p class="leading-normal text-grey-light text-sm">Static, fast &amp; powered by Netlify.</p>
				</div>

			</div>
			
		</div>
</div>

    
<div class="lg:pb py-16 bg-white">
	
	<div class="container px-4 mx-auto">
		<h2 class="mb-16 text-2xl md:text-3xl text-primary-dark">About</h2>
		<div class=" flex items-center flex-wrap">
		<div class="w-full lg:w-1/2 mb-0 lg:mb-0 pr-0 lg:pr-16 lg:mt-0">
			<img src="/img/me.jpg" alt="me!" class="rounded shadow-lg" />
		</div>
		<div class="w-full pl-0 md:w-3/4 lg:w-1/2">
            <h2 class="text-grey-darker text-xl mb-4 leading-normal">I'm Dan</h2>
            <p class="text-grey-darkest mb-4 leading-normal">I've been working in the industry for more than a decade, including stints at agencies and small startups.</p>
            <p class="text-grey-darkest mb-4 leading-normal">I pride myself on being able to walk the line between design, idea development, and coding.</p>
            <p class="text-grey-darkest mb-4 leading-normal">Above all, I enjoy turning ideas into well-designed products and websites that are focused on being secure, fast, and easy to use.</p>
		</div>
	</div>
		
		
	</div>
	{{-- <div class="container px-4 py-8 lg:py-4 mx-auto flex items-center flex-wrap mt-8">

			<div class="w-full lg:w-1/3 mb-0 lg:mb-0 pr-0 lg:pr-16 lg:mt-0">
				<img src="/img/finn.jpg" alt="me!" class="rounded shadow-lg" />
			</div>
		<div class="w-full text-left md:w-3/4 lg:w-2/3 md:pr-8">
				<h2 class="text-grey-light text-xl mb-4 leading-normal">...and this is Finn</h2>
				<p class="text-white mb-4 leading-normal">He puts the "Black Lab" in "Black Lab Software".</p>
				<p class="text-primary-light text-xs"><strong>Why is a dog relevant to a web development company?</strong> Well, he's not, really, but I did name the company after him.</p>
		</div>

		
		
	</div> --}}
</div>

<div class="py-4">
		<div class="container p-8 lg:py-16 mx-auto flex flex-wrap">
			<div class="w-1/2 pr-4">
				<img src="/img/endear-small.png" class="mb-8">
				<p class="text-white text-xl mb-4 font-bold">Customer feedback tools for everything.</p>
				<p class="leading-normal text-white mb-4">Endear provides simple customer feedback tools for everybody - from online retailers, shops, and professional services.</p>
				<p class="leading-normal text-white mb-8">Sign up now for a discount when we launch.</p>
				<a href="http://endear.app?ref=blacklab" class="shadow-lg inline-block text-sm rounded-full bg-primary-light text-white text-center px-6 py-3 no-underline">Sign Up</a>
			</div>
			<div class="w-1/2 pl-4">
				<img src="/img/endear-tiles.png">
			</div>
		</div>
	</div>
	<div class="bg-white shadow-lg">
		<div class="px-4 py-8 lg:py-16 container mx-auto">
			
			
			<h2 class="mb-8 text-2xl md:text-3xl text-center">Services</h2>
			
			<div class="py-8">
				<h4 class="text-secondary-light mb-0 text-xl py-2 mb-4">Laravel &amp; VueJS Development</h4>
				<div class="border-primary max-w-md">
					<p class="text-grey-darkest leading-normal mb-4"><a href="http://laravel.com">Laravel</a> is an enterprise-ready PHP framework designed to be productive - it lets me get things done quickly without sacrificing performance or security.</p>
					<p class="text-grey-darkest leading-normal"><a href="http://vuejs.com">VueJS</a> is a blazingly fast Javascript framework I use to build responsive, interactive interfaces.</p>
					
				</div>
			</div>
			<div class="py-8">
				<h4 class="text-secondary-light mb-0 text-xl py-2 mb-4">Bespoke Business Software</h4>
				<div class="border-primary max-w-md">
					<p class="text-grey-darkest leading-normal">Web-based software designed for your specific business purposes can help streamline your workflow and save you money.</p>
				</div>
			</div>
			
			
			<div class="py-8">
				<h4 class="text-secondary-light mb-0 text-xl py-2 mb-4">Websites</h4>
				<div class="border-primary max-w-md">
					<p class="text-grey-darkest leading-normal">Every business needs a reliable, discoverable and good looking website.</p>
					<p class="text-grey-darkest leading-normal">I can get you off the ground with a site you can update and run yourself easily.</p>
				</div>
			</div>
			<div class="py-8">
				<h4 class="text-secondary-light mb-0 text-xl py-2 mb-4">Advice &amp; Consultancy</h4>
				<div class="border-primary max-w-md">
					<p class="text-grey-darkest leading-normal">Need to know the best way to tackle an idea or project? Or wondering if an idea is even possible? <a class="text-secondary-light" href="contact">Get in touch</a> to chat.</p>
				</div>
			</div>
			
			<div class="py-8">
				<h4 class="text-secondary-light mb-0 text-xl py-2 mb-4">Product Development</h4>
				<div class="border-primary max-w-md">
					<p class="text-grey-darkest leading-normal">The web is opening new opportunities for everyone - and I love bringing ideas and products to life. Got an idea? <a href="contact">Get in touch</a> and let's talk.</p>
				</div>
			</div>
			<div class="py-8">
				<h4 class="text-secondary-light mb-0 text-xl py-2 mb-4">Technical Subcontracting</h4>
				<div class="border-primary max-w-md">
					<p class="text-grey-darkest leading-normal mb-4">I've worked with many design agencies, ad agencies and marketing companies as a technical contractor to bring a project to life.</p>
					<p class="text-grey-darkest leading-normal">I can flexibly fit in with your existing technical or non-technical team to help start projects, or get them to the finish line.</p>	
				</div>
			</div>
			<div class="py-8">
				<h4 class="text-secondary-light mb-0 text-xl py-2 mb-4">The Full Stack</h4>
				<div class="border-primary max-w-md">
					<p class="text-grey-darkest leading-normal">I work on the complete stack - from spinning up servers, to server-side business logic, to theming and design - i can help with every step.</p>
				</div>
			</div>
		</div>
		
	</div>
	
	<div class="bg-white">
		<div class="container px-4 py-8 lg:py-16 mx-auto flex items-center flex-wrap">
			<div class="w-full lg:w-1/2 mb-8 lg:mb-0 pr-0 lg:pr-16 shadow rounded-lg overflow-hidden">
				<iframe id="where-map" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJPcSz1z0bfUgRXIxM6rFmJFk&key=AIzaSyA-UcB_d9RbsxsNchKBast4PONDeqLknPA" allowfullscreen></iframe>
			</div>
			<div class="w-full pl-0 lg:w-1/2 lg:pl-16">
				<h2 class="text-grey-darker mb-8">Where are you based?</h2>
				<p class="text-grey-dark mb-4 leading-normal">Black Lab is based in <strong>The Guild</strong>, an awesome co-working space in the heart of Carlisle.</p>
				<p class="text-grey-dark mb-3 leading-normal mb-8">We're 20 minutes from the Lake District and 5 minutes from the border with bonnie scotland.</p>
				<a href="http://theguild-carlisle.co.uk?refer=blacklab" class="shadow-lg inline-block text-sm rounded-full bg-primary-light text-white text-center px-6 py-3 no-underline">See Their Website</a>
			</div>
		</div>
	</div>
</div>

@endsection
