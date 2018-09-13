@extends('base')

@section('content')


<!-- Content strats -->

<div class="content">
   <div class="container">
      <div class="row">
	 <div class="col-md-12">

	    <!-- Contact starts -->

	    <div class="contact">
	       <div class="row">
		  <div class="col-md-12">

		     <!-- Contact hero -->
		     <div class="hero">
			<!-- Title. Don't forget the <span> tag -->
			<h3><span>Contacto</span></h3>
			<!-- para -->
			<p>Para cualquier duda o comentario con respecto a los productos de este proyecto, favor de llenar el siguiente formulario:</p>
		     </div>
		     <!-- Contact -->

		     <div class="contact">
			<div class="row">
			   <div class="col-md-12">

			   </div>
			</div>
			<div class="row">
			   <div class="col-md-6 col-sm-6">
			      <div class="cwell">
				 <!-- Contact form -->
				    <h5>Formulario</h5>
				    <hr />
				    <div class="form">
				      <!-- Contact form (not working)-->
				      <form class="form-horizontal">
					  <!-- Name -->
					  <div class="form-group">
					    <label class="control-label col-md-3" for="name">Nombre</label>
					    <div class="col-md-9">
					      <input type="text" class="form-control" id="name">
					    </div>
					  </div>
					  <!-- Email -->
					  <div class="form-group">
					    <label class="control-label col-md-3" for="email">Email</label>
					    <div class="col-md-9">
					      <input type="text" class="form-control" id="email">
					    </div>
					  </div>
					  <!-- Comment -->
					  <div class="form-group">
					    <label class="control-label col-md-3" for="comment">Comentario</label>
					    <div class="col-md-9">
					      <textarea class="form-control" id="comment" rows="3"></textarea>
					    </div>
					  </div>
					  <!-- Buttons -->
					  <div class="form-group">
					<!-- Buttons -->
					    <div class="col-md-9 col-md-offset-3">
						<button type="submit" class="btn btn-default">Enviar</button>
						<button type="reset" class="btn btn-default">Reset</button>
					    </div>
					  </div>
				      </form>
				    </div>
				    <hr />

				       <div class="csoci">  
					   <!-- Social media icons -->
					   <strong>Mantente en contacto:</strong>
					   <div class="social">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
						<a href="#"><i class="fa fa-google-plus"></i></a>
						<a href="#"><i class="fa fa-pinterest"></i></a>
					   </div>
				       </div>
				 </div>
			   </div>
			   <div class="col-md-6 col-sm-6">
				 <div class="cwell">
			      <!-- Google maps -->
			      <div class="gmap">
				 <!-- Google Maps. Replace the below iframe with your Google Maps embed code -->
				 <iframe height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d941.2429831128487!2d-99.18205637076709!3d19.327024199184052!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ce00050840bd03%3A0x36f949a746abedb9!2sFACULTAD+DE+INGENIERIA+DIVISION+DE+INGENIERIAS+CIVIL+Y+GEOMATICA!5e0!3m2!1ses!2smx!4v1524179905981"></iframe>
			      </div>

				    <!-- Address section -->
				       <h5>Dirección</h5>
				       <hr />
				       <div class="address">
					   <address>
					      <!-- Company name -->
					      <strong>División de Ingenierías Civil y Geomática.</strong><br>
					      <!-- Address -->
					      Edificio R. Circuito exterior, Ciudad<br>
					      Universitaria, CDMX. C.P. 04510.<br>
					      <!-- Phone number -->
					      <abbr title="Phone">Tel.:</abbr> +52 (55) 5622 8001 ext. 1028 
					   </address>

					   <address>
					      <!-- Name -->
					      <strong>Full Name</strong><br>
					      <!-- Email -->
					      <a href="mailto:#">gberehc@ingenieria.unam.mx</a>
					   </address>
				       </div>
				 </div>
			   </div>
			</div>

		     </div>

		  </div>
	       </div>
	    </div>


	    <!-- Service ends -->
	 </div>
      </div>
   </div>
</div>   

<!-- Content ends --> 
@endsection
