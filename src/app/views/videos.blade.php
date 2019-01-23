@extends('base')

@section('content')
<!-- Content strats -->

<div class="content">
   <div class="container">
      <div class="row">
	 <div class="col-md-12">

	    <!-- Gallery starts -->

	    <div class="gallery">
	       <div class="row">
		  <div class="col-md-12">

		    <div class="videos">
			<div class="row">
			    <div class="col-md-6 col-sm-6">
				<h4>Análisis de Clorofila</h4>
				<video width="320" height="240" controls>
				    <source src="media/Analisis_de_clorofila.mp4" type="video/mp4">
				    Your browser does not support the video tag.
				</video> 
			    </div>
			    <div class="col-md-6 col-sm-6">
				<h4>Corrección Radiométrica</h4>
				<video width="320" height="240" controls>
				    <source src="media/Correccion_radiometrica.mp4" type="video/mp4">
				    Your browser does not support the video tag.
				</video> 
			    </div>
			</div>
			<div class="row">
			    <div class="col-md-6 col-sm-6">
				<h4>Firmas Espectrales</h4>
				<video width="320" height="240" controls>
				    <source src="media/Firmas_espectrales.mp4" type="video/mp4">
				    Your browser does not support the video tag.
				</video> 
			    </div>
			    <div class="col-md-6 col-sm-6">
				<h4>Geodatabase QGIS</h4>
				<video width="320" height="240" controls>
				    <source src="media/GEODATABASE_QGIS.mp4" type="video/mp4">
				    Your browser does not support the video tag.
				</video> 
			    </div>
			</div>
		    </div>

		  </div>
	       </div>
	    </div>


	    <!-- gallery ends -->

	 </div>
      </div>
   </div>
</div>   

<!-- Content ends --> 
@endsection
