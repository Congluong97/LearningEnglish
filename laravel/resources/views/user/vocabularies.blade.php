@extends('user.master')
@section('content')

<!-- ##### Breadcumb Area Start ##### -->
<div class="breadcumb-area">
	<!-- Breadcumb -->
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Home</a></li>
			<li class="breadcrumb-item"><a href="#">Lectures</a></li>
		</ol>
	</nav>
</div>
<!-- ##### Breadcumb Area End ##### -->

<!-- ##### Catagory ##### -->
<div class="clever-catagory bg-img d-flex align-items-center justify-content-center p-3" style="background-image: url(img/bg-img/bg2.jpg);">
	<h3>Vocabularies</h3>
</div>

<section>
<<<<<<< HEAD
							<div class="notes_box">
								<div id="notespromo">
								  All vocabulary from the lesson!</div>
								  @foreach($vocabularies as $vocabulary)
								<div class="text_box">
								  <div class="notes">
								    <div class="player"></div>
								    <div class="explanation">
								      <p class="items">{{$vocabulary->name}}</p>
								      <div class="audio">
								        <audio src="{{asset('')}}public/{{$vocabulary->pronunciation}}"   width="100%" height="90%" controls style="width: 480px;height: 75px;"></audio>
							          </div>
								      <p>{{$vocabulary->mean}}</p>
							          
							        </div>
							      </div>
							 	</div>     
							 </div>
							 @endforeach
=======
	<div class="notes_box">
		<div id="notespromo">
		All vocabulary from the lesson!</div>
		@foreach($vocabulary as $v)
		<div class="text_box">
			<div class="notes">
				<div class="player"></div>
				<div class="explanation">
					<p class="items">{{$v->name}}</p>
					<div class="audio">
						<audio controls preload="none">
							<source src="{{$v->pronunciation}}" />
							Your browser does not support the audio element.</audio>
						</div>
						<p>{{$v->mean}}</p>
						
					</div>
				</div>
			</div>     
		</div>
		@endforeach
>>>>>>> b543d5c6f5422c8f8b9728aada00cfffbc430a4e

	</section>							    

<<<<<<< HEAD
@endsection
=======
	@endsectinon()
>>>>>>> b543d5c6f5422c8f8b9728aada00cfffbc430a4e
