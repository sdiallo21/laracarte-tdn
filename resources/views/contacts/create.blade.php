 @extends('layouts.default', ['title' =>'Contact'])

@section('content')
    <div class="container">
    	<div class="row">
    		<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
    			<h2>Get in Touch</h2>
    			<p>If you having trouble with this service, please <a href="mailto:{{ config('laracarte.admin_support_email') }}">ask for help</a></p>


    			<form action="{{ route('contact_path') }}" method="Post">

    				{{ csrf_field() }}
    				<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
    					<label for="name" class="control-label">name</label>
    				     <input type="text" name="name" id="name" class="form-control" required="required" value="{{ old('name') }}">
    				     {!! $errors->first('name', '<span class = "help-block">:message</span>') !!}
    				</div>

    				<div class="form-group  {{ $errors->has('email') ? 'has-error' : '' }}">
    					<label for="email" class="control-label">Email</label>
    				     <input type="email" name="email" id="email" class="form-control" required="required" value="{{ old('email') }}">
    				      {!! $errors->first('email', '<span class = "help-block">:message</span>') !!}
    				</div>


    				<div class="form-group  {{ $errors->has('message') ? 'has-error' : '' }}">
    					<label for="message" class="control-label" sr-only>message</label>
    				    <textarea name="message" id="message" cols="30" rows="6" class="form-control" required="required" >{!! old('message') !!}</textarea>
    				     {!! $errors->first('message', '<span class = "help-block">:message</span>') !!}
    				</div>

    				<div class="form-group">
    					<button class="btn btn-dark btn-block">Submit Enquiry</button>
    				</div>
    			</form>
    		</div>
    	</div>
    </div>
@stop