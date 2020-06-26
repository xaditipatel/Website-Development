@extends('layouts.app')
@section('title', 'Contacto')
@section('content')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js" ></script>

<main id="main_content">
<div class="zig-zag-top">
<div class="main_content_header" id="content1"><img src="images/Burguer.png" style=" width: 30px; height: 30px;" />
<h1>Di hola</h1>

<h4>Di hola, envianos un mesanje</h4>

<h5>Envianos tus comentarios y suguerencias ustedes son importante para nostros</h5>
</div>
           
          <form method="post" action="contact-us">
             {{csrf_field()}}
             <div id="main_content_1">
                <div class="large-12 columns">
                <input id="name" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Name" type="text" value="{{ old('name') }}"> 
                   @error('name')
                       <span style="color:	#FFFFFF;" class="error" role="alert">
                           </br></br><strong>{{ $message }}</strong>
                       </span>
                   @enderror

                <input id="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email Id" type="text" value="{{ old('email') }}"> 
                   @error('email')
                       <span style="color:	#FFFFFF;" class="error" role="alert">
                       </br></br><strong>{{ $message }}</strong>
                       </span>
                   @enderror

                <input id="subject" name="subject" class="form-control @error('subject') is-invalid @enderror" placeholder="Subject" type="text" value="{{ old('subject') }}"> 
                   @error('subject')
                       <span style="color:	#FFFFFF;" class="error" role="alert">
                       </br></br><strong>{{ $message }}</strong>
                       </span>
                   @enderror

                   <input id="message" name="message" class="form-control @error('message') is-invalid @enderror" placeholder="Message" type="text" value="{{ old('message') }}"> 
                   @error('message')
                       <span style="color:	#FFFFFF;" class="error" role="alert">
                           </br></br><strong>{{ $message }}</strong>
                       </span>
                   @enderror
             <div class="row">
              <div class="update ml-auto mr-auto">
                 <button type="submit" class="btn btn-primary btn-round">Entar</button>
               </div>
               </div>
               </div>
             </div>
           </form>
</div>

<div class="flash-message">
    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
      @if(Session::has('alert-' . $msg))

      <p style="color:	#FFFFFF;" class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
      @endif
    @endforeach
  </div> <!-- end .flash-message -->

@endsection