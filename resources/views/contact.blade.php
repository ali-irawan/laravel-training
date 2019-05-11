@extends("layout")

@section("content")

<div class="content">
  <h2>Contact Us</h2>

  <div class="row">
      <div class="col-sm-12 col-md-6 col-lg-6">

          <p>Address:</p>
          {{ $address1 }} <br/>
          {{ $address2 }} <br/>
          
          <br/>
          <p>Phone:</p>
          @foreach( $phone as $item )
            {{ $item }}<br/>
          @endforeach
      </div>
      <div class="col-sm-12 col-md-6 col-lg-6">
          <br/>
          Email:
          <a href="mailto:{{ $email }}">{{ $email }}</a>

          <br/>
          Website:
          <a target="_blank" href="{{ $website }}">{{ $website }}</a>
      </div>   
 </div>

  

 
</div>

@endsection