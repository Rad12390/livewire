<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Signin | Mocal's</title>
     @livewireStyles
    <link rel="icon" type="image/x-icon" href="{{ asset('vendor/livewire/images/fav.png')}}" />
    <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script> 
    <!-- Fonts -->
    <link href="./js/fonts.css" rel="stylesheet" />

    <!-- Bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />

    <!-- Link Swiper's CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/semantic.min.css"
    />

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/livewire/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/livewire/css/pages/register/register.css') }}" />
  </head>

  <body>
   
     <section class="signin-bg">
     

         <div class="signin-card">
                 @livewire('preview-form')
          </div>

       
    </section>
 
   
   @livewireScripts

  </body>
</html>
