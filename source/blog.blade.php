@extends('_layouts.master')

@section('content')
<div class="bg-white py-8">
    <div class="container px-4 mx-auto my-16">
        <h2 class="text-2xl ">Get In Touch!</h2>
        <div class="contact-form">
        
        <form class="mt-6 w-full lg:w-2/3" data-netlify="true"  @submit.prevent="submitForm()" novalidate>
            
            <div v-if="formSuccess == false">
            <div class="items-center py-4">
                <label for="name" class="text-grey-darkest font-bold mb-4 block">Your name <span class="text-sm text-grey-dark italic font-normal">required</span></label>
                <input name="name" v-validate="'required|min:3'" type="text" class="border-2 block mt-2 p-3 rounded w-full"  required>
            </div>
    
            <div class="items-center py-4">
                <label for="email" class="text-grey-darkest font-bold mb-4 block">Your email <span class="text-sm text-grey-dark italic font-normal">required</span></label>
                <input type="email" name="email" v-validate="'required|email'" class="border-2 block mt-2 p-3 rounded w-full error"  required>
            </div>
    
            <div class="items-center py-4">
                <label for="message" class="text-grey-darkest font-bold mb-4 block">Your message <span class="text-sm text-grey-dark italic font-normal">required</span></label>        
                <textarea name="message" v-validate="'required|min:3'" class="border-2 h-32 block mt-2 p-3 rounded w-full"  name="message" required ></textarea>
            </div>
    
              
    
            <div class="py-2">
                <button type="submit" class="bg-secondary-light font-bold text-white rounded-full py-3 px-6">Send</button>
            </div>
    
            </div>
    
            
    
        </form>
        </div>
    
    </div>
    </div>
@endsection
