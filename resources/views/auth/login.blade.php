@extends('web.layouts.app2')
@section('title' , 'Login')
@section('content')
<div class="main ">
    
    <section
      class="bg-dark text-light header-inner p-0 jarallax o-hidden"
      data-overlay
      data-jarallax
      data-speed="0.2"
    >
      <img
        src="{{ $web_source }}/assets/img/event-1.jpg"
        alt="Image"
        class="jarallax-img opacity-30"
      />
      <div class="container py-0 layer-2">
        <div class="row my-3">
          <div class="col">
            <nav aria-label="breadcrumb"></nav>
          </div>
        </div>

        <div class="row my-4 my-md-6" data-aos="fade-up">
          <div class="col-xl-7 col-lg-8 col-md-9">
            <h1 class="display-4">Hello.. </h1>
          </div>
        </div>
      </div>
      </div> 
      <div class="divider flip-x">
        
      </div>
    </section>

    <section>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-9 col-lg-8 col-xl-6" id="contact_form1">
              <div class="text-center mb-4">
                <h2 class="h1">Login</h2>
              </div>
              
        <!-- Session Status -->
        <x-auth-session-status class="mb-4 text-info" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4 text-danger" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="form-group">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full form-control" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4 form-group">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full form-control"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="form-control-checkbox rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
                
                <x-button class="ml-3 btn btn-primary btn-loading">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>

            </div>
          </div>
        </div>
      </section>  

    </div>
@stop