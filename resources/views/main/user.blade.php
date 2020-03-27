@extends('main.layouts.index')

@section('content')
<!-- Start testimonial Area -->
    <section class="testimonial-area section-gap">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Client’s Feedback About Me</h1>
                        <p>It is very easy to start smoking but it is an uphill task to quit it. Ask any chain smoker or even a person.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="active-testimonial">
					@forelse($users as $user)
                    	<div class="single-testimonial item d-flex flex-row">
                    	    <div class="thumb">
                    	        <img class="img-fluid" src="/img/elements/user1.png" alt="">
                    	    </div>
                    	    <div class="desc">
                    	        <p>
									{{ $user['text'] }}		     
                    	        </p>
                    	        <h4>{{ $user['name'] }}</h4>
                    	        <p>{{ $user['position'] }}</p>
                    	    </div>
						</div>
					@empty
						No User reviews
					@endforelse
                </div>
            </div>
        </div>
    </section>
<!-- End testimonial Area -->	
@endsection