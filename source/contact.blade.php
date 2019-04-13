@extends('_layouts.master', [
    'slogan' => "Get in touch"
])


@section('content')
    <div class="container px-4 mx-auto flex pb-16">
        <div class="w-2/3 contact-form bg-white rounded shadow-lg p-8">
        
        <form class=" w-full" netlify>
            
            <div class="flex flex-wrap">
            <div class="w-1/2 items-center py-4 pr-4">
                <label for="name" class="text-grey-darkest font-bold mb-4 block">Your name <span class="text-sm text-grey-dark italic font-normal">required</span></label>
                <input name="name" v-validate="'required|min:3'" type="text" class="border-2 block mt-2 p-3 rounded w-full"  required>
            </div>
    
            <div class="w-1/2 items-center py-4 pl-4">
                <label for="email" class="text-grey-darkest font-bold mb-4 block">Your email <span class="text-sm text-grey-dark italic font-normal">required</span></label>
                <input type="email" name="email" v-validate="'required|email'" class="border-2 block mt-2 p-3 rounded w-full error"  required>
            </div>
            </div>
    
            <div class="items-center py-4">
                <label for="message" class="text-grey-darkest font-bold mb-4 block">Your message <span class="text-sm text-grey-dark italic font-normal">required</span></label>        
                <textarea name="message" v-validate="'required|min:3'" class="border-2 h-32 block mt-2 p-3 rounded w-full"  name="message" required ></textarea>
            </div>
    
              
    
            <div class="py-2">
                <button type="submit" class="shadow-lg inline-block text-sm rounded-full bg-primary-light text-white text-center px-6 py-3 no-underline">Send</button>
            </div>
    
    
            
    
        </form>
        </div>
        <div class="w-1/3 p-8">
            <p class="leading-normal text-grey-light italic">You can also email <a class="text-grey-light" href="">hello@blacklabsoftware.co.uk</a> if it's easier.</p>
        </div>
    
    </div>
@endsection
