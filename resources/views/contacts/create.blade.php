@extends('layouts.default', ['title' => 'Contact'])

@section('content')

	<div class="blocked no-margin font-open-sans">

		<div class="dev-row">
			<div class="dev-col dev-col-3x">&nbsp;</div>
			<div class="dev-col dev-col-6x">
				<h1 class="laracarteh1 text-capitalize">Get in touch</h1>
				<p class="dev-color-grey">if you having trouble with this service, please <a href="mailto:{{ config('laracarte.admin_support_email') }}" class="btn-link">ask for help</a>.</p>

				<form action="{{ route('contact') }}" method="POST" class="margin-top-zx">

					{{ csrf_field() }}
					
					<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
						<label for="name" class="label-ctrl">Name</label>
						<input type="text" name="name" id="name" class="dev-form-ctrl" value="{{ old('name') }}" required="required">
						{!! $errors->first('name', '<span class="help-block">:message</span>') !!}
					</div>
					<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
						<label for="email" class="label-ctrl">Email</label>
						<input type="email" name="email" id="email" class="dev-form-ctrl" value="{{ old('email') }}" required="required">
						{!! $errors->first('email', '<span class="help-block">:message</span>') !!}
					</div>
					<div class="form-group{{ $errors->has('message') ? ' has-error' : '' }}">
						<label for="message" class="label-ctrl sr-only">Name</label>
						<textarea name="message" 
							id="elasticarea" class="dev-form-ctrl dev-bh-150x" 
							required="required">{{ old('message') }}</textarea>
						{!! $errors->first('message', '<span class="help-block">:message</span>') !!}
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary dev-bh-35x">Submit Enquiry <i class="fa fa-angle-right"></i></button>
					</div>

				</form>
				
			</div>
			<div class="dev-col dev-col-3x">&nbsp;</div>
		</div>

	</div>

@stop