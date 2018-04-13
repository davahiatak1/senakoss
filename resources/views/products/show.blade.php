@extends('layouts.app')

@section('content')

<div class="container">

 	<section class="magazine-section text-center">
 

 		<h2 class="h1 text-center my-5 font-weight-bold">Section title</h2>


 		<p class="grey-text pb-5">Duis aute irure dolor in reprehenderit
			in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
	 		occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
 		</p>


		<div class="row text-left">
 			<div class="col-lg-6 col-md-12">
 				<div class="single-news">
 					<div class="view overlay rounded z-depth-1-half mb-3">
						<img src="https://mdbootstrap.com/img/Photos/Slides/1.jpg" class="img-fluid" alt="Wider sample post image">
 						<a><div class="mask rgba-white-slight"></div></a>
					</div>

 					<div class="news-data mb-5">
 						<a href="" class="deep-orange-text">
	 						<h6><i class="fa fa-cutlery"></i><strong> Culinary</strong></h6>
 						</a>
 						<p class="dark-grey-text">
							<strong><i class="fa fa-clock-o"></i> 27/02/2018</strong>
 						</p>
					</div>

 					<h3 class="pt-2"><a><strong>This is title of the news</strong></a></h3>

					<p align="justify">Sed ut perspiciatis unde voluptatem omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae explicabo. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
					</p>


				</div>
 			</div>

 			<div class="col-lg-6 col-md-12">

				<div class="single-news">

 					<div class="row">
 						<div class="col-md-3">
 							<div class="view overlay rounded z-depth-1">
 								<img src="https://mdbootstrap.com/img/Photos/Others/img%20(29).jpg" class="img-fluid" alt="Minor sample post image">
 								<a><div class="mask rgba-white-slight"></div></a>
							</div>
 						</div>

 						<div class="col-md-9">

							<p class="dark-grey-text">
 								<strong>25/02/2018</strong>
 							</p>

							<a class="grey-text">Duis aute irure dolor in reprehenderit in voluptate.
 								<i class="fa fa-angle-right"></i>
 							</a>
 						</div>
 					</div>
				</div>
 			</div>

		</div>

	</section>
            
</div>

@endsection