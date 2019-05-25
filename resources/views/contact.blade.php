@extends("layout")

@section("content")

<div class="content">
  <h2>Contact Us</h2>

  <div class="row">
      <div class="col-sm-12 col-md-6 col-lg-6">

          <p>@lang('messages.address'):</p>
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

          @if ( Session::has('success_message') )
            <div class="alert alert-success">
               {!! Session::get('success_message') !!}
            </div>
          @endif

          <form action="{{ route('contact') }}" method="post">

            {{ csrf_field() }}
            
            <div class="form-group">
              <label>Your email <span class="text-danger">*</span></label>
              <input autofocus type="text" class="form-control" name="email" value="{{ old('email') }}"/>
              @error('email')
                <span class="text-danger">{{ $errors->first('email') }}</span>
              @enderror
            </div>

            <div class="form-group">
              <label>Topic <span class="text-danger">*</span></label>
              <select name="topic" class="form-control">
                <option value="">--Choose topic--</option>
                <option value="Technical" {{ old('topic')=='Technical' ? "selected" : "" }} >Technical Question</option>
                <option value="Billing" {{ old('topic')=='Billing' ? "selected" : "" }}>Billing Question</option>
                <option value="Other" {{ old('topic')=='Other' ? "selected" : "" }}>Other</option>
              </select>
              @error('topic')
                <span class="text-danger">{{ $errors->first('topic') }}</span>
              @enderror
            </div>

            <div class="form-group">
              <label>Message <span class="text-danger">*</span></label>
              <textarea class="form-control" name="message">{{ old('message') }}</textarea>
              @error('message')
                <span class="text-danger">{{ $errors->first('message') }}</span>
              @enderror
            </div>

            <button class="btn btn-primary">Submit</button>
          </form>
      </div>   
 </div>

  

 
</div>

@endsection