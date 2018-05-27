 @extends('layouts.default', ['title' =>'About'])

@section('content')
    <div class="container">
    	<h2>What is Laracarte?</h2>
    	<p>Laracarte is a clone app of <a href="https;//laramap.com" target="blank">laramap.com</a></p>

    	<div class="row">
    		<div class="col-md-6">
    			<p class="alert alert-warning"> <i class="fas fa-exclamation-triangle"></i> <strong>
    				This app has been built by @sdiallo21 for learning proposes
    			</strong>
     			</p>
    		</div>
    	</div>

    	<p>Feel free help to improve the <a href="https://github.com/sdiallo21/laracarte-tdn">source code</a></p>

    	<hr>

    	<h2>What is laramap?</h2>
    	<p>laramap is the website by wich Laracarte was inspired :).</p>
    	<p>More info <a href="https://laramap.com/about">here</a></p>

    	<hr>

    	<h2>Wich tools and services are used in Laracarte?</h2>
    	<p>basically it's built on laravel &amp; Bootstrap. But there's a bunch of services used for email and other sections.</p>

    	<ul>
    		<li>Laravel</li>
    		<li>Bootstrap</li>
    		<li>Amazon</li>
    		<li>Mandrill</li>
    		<li>Google Maps</li>
    		<li>Gravatar</li>
    		<li>Antony Martin's Geolocation Packages</li>
    		<li>Michel Fortin's Perser package</li>
    		<li>Herokut</li>
    	</ul>
    </div>
@stop