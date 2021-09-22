@extends('layouts.master')


@section('styles')

@endsection

@section('header')
    @include('includes.head')
@endsection

@section('content')

    	<section>
            <div class="product1">
                <div class="container">
                    <div class="back"></div>
                    <img src="{{URL::to('images/casa.jpg')}}">
                </div>
                <div class="info">
                    <span></span>
                    <h3>Hotel 100</h3>
                    <h2>Casablanca</h2>
                </div>
            </div>
           <div class="product2">
    		   <div class="container">
    			<div class="back"></div>
                <img src="{{URL::to('images/rabat.jpg')}}">
    			
    			</div>
                <div class="info">
                    <span></span>
                    <h3>Hotel 100</h3>
                    <h2>Rabat</h2>
                </div>
            </div>
            <div class="product3">
               <div class="container">
                    <div class="back"></div>
					<img src="{{URL::to('images/fez.jpg')}}">
    			</div>
                <div class="info">
                    <span></span>
                    <h3>Hotel 100</h3>
                    <h2>Fes</h2>
                </div>
            </div>
            <div class="product4">
                <div class="container">
                 <div class="back"></div>
				 <img src="{{URL::to('images/marakech.jpg')}}">
    			</div>
                <div class="info">
                    <span></span>
                    <h3>Hotel 100</h3>
                    <h2>Marakech</h2>
                </div>
            </div>
            <div class="product5">
    			<div class="container">
                    <div class="back"></div>
					<img src="{{URL::to('images/tanger.jpg')}}">
    			</div>
                <div class="info">
                    <span></span>
                    <h3>Hotel 100</h3>
                    <h2>Tanger</h2>
                </div>
            </div>
            <div class="product6">
    		<div class="container">
                    <div class="back"></div>
					<img src="{{URL::to('images/safi.jpg')}}">
    			</div>
                <div class="info">
                    <span></span>
                    <h3>Hotel 100</h3>
                    <h2>Safi</h2>
                </div>
            </div>
            <div class="product7">
    		<div class="container">
                    <div class="back"></div>
					<img src="{{URL::to('images/meknes.jpg')}}">
    			</div>
                <div class="info">
                    <span></span>
                    <h3>Hotel 100</h3>
                    <h2>Meknes</h2>
                </div></div>
            <div class="product8">
    		<div class="container">
                    <div class="back"></div>
					<img src="{{URL::to('images/agadir.jpg')}}">
             </div>
                <div class="info">
                    <span></span>
                    <h3>Hotel 100</h3>
                    <h2>Agadir</h2>
                </div></div>
            <div class="product9">
    			<div class="container">
                    <div class="back"></div>
					<img src="{{URL::to('images/chefchaouen.jpg')}}">
    			</div>
                <div class="info">
                    <span></span>
                    <h3>Hotel 100</h3>
                    <h2>Chefchaouen</h2>
                </div>
            </div>
    	</section>

@endsection

@section('scripts')

@endsection


@section('footer')
    @include('includes.foot')
@endsection