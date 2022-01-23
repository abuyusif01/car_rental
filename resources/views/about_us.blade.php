<link rel="stylesheet" href={{ asset("css/aboutus.css") }}> 
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('About Us') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
				<!-- <x-jet-welcome /> -->
			@include('test')
				<div class="about-section">
					<h1 class="about-section">About Us</h1>
					<p>Car Rental project is a small project started by a few undergraduate students of ICT from the prestigious International Islamic University of Malaysia (IIUM).<p>
					<p>An innovative newly designed web application, we created this website using the Laravel Framework to apply our knowledge and skills we have learnt throughout the semester 1 of 2021/2022 </p>
					<p>We seek to provide a platform for a centralised system of car renting, including adding new features such as group renting multiple cars and also reserve booking cars for premium customers that wish to reserve their favourite car far ahead of time.  </p>
				</div>

				<img src= {{ asset("assets/img/abootbanner.jpg") }}  style="width:100%" alt="vroom vroom" />
				
				<h2 style="text-align:center">Our Team</h2>
				<div class="row">
				
				  <div class="column">
					<div class="card">
					 <!--  <img src={{ asset("boyu.jfif") }} alt="Maboyu" style="width:100%"> -->
					  <div class="container">
						<h2>Ma Boyu</h2>
						<p class="title">CEO and Founder</p>
						<p>Founder and pioneer of the car rental system</p>
						<p>1711575</p>
					  </div>
					</div>
				  </div>

				  <div class="column">
					<div class="card">
					<!--  <img src={{ asset("abu.jfif") }} alt="Abubakar" style="width:100%"> -->
					  <div class="container">
						<h2>Abubakar Yusif</h2>
						<p class="title">Group Leader and Head Web Engineer</p>
						<p>Main brain and leader of the project.</p>
						<p>1821881</p>
					  </div>
					</div>
				  </div>
				  
				  <div class="column">
					<div class="card">
					<!--  <img src={{ asset("isaak.jfif") }} alt="Isaak" style="width:100%"> -->
					  <div class="container">
						<h2>Isaak Ali Mahamat</h2>
						<p class="title">Web Engineer</p>
						<p>Friendly and outgoing team member</p>
						<p>1829957</p>
					  </div>
					</div>
				  </div>


				  <div class="column">
					<div class="card">
					<!--  <img src={{ asset("fatina.jfif") }} alt="Fatina" style="width:100%"> -->
					  <div class="container">
						<h2>Mukhammadalieva Fatina</h2>
						<p class="title">Assistant Web Engineer</p>
						<p>Innovative and creative team member</p>
						<p>1920218</p>
					  </div>
					</div>
				  </div>

				  <div class="column">
					<div class="card">
					<!--  <img src={{ asset("zaidi.jfif") }} alt="Zaidi" style="width:100%"> -->
					  <div class="container">
						<h2>Muhammad Zaidi Abdul Razak</h2>
						<p class="title">Junior Web Engineer</p>
						<p>Working team member</p>
						<p>1820833</p>
					  </div>
					</div>
				  </div>
				</div>			
			</div>
		</div>
	</div>
</x-app-layout>