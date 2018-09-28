@extends('base')

@section('content')

<!-- Content strats -->

<div class="content">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            
            <!-- Blog starts -->
            
            <div class="blog">
               <div class="row">
                  <div class="col-md-12">
                     
                     <!-- Blog Posts -->
                     <div class="row">
                        <div class="col-md-8 col-sm-8">
                           <div class="posts">
                           
                              <!-- Each posts should be enclosed inside "entry" class" -->
                              <!-- Post one -->
                              <div class="entry">
                                 <h2><a href="#">Práctica: Coberturas Forestales</a></h2>
                                 
                                 <!-- Thumbnail -->
                                 <div class="bthumb2 bthumbleft">
                                    <a href="#"><img src="img/photos/r1.jpg" alt="" class="img-responsive" /></a>
                                 </div>
                                 
                                 <p>La cobertura forestal es una extensión de territorio ocupada por diferentes tipos de vegetación, la cual funge como indicador para el análisis y comportamiento de los bosques a lo largo del tiempo.</p>
                                 <div class="button"><a target="_blank" href="practices/Coberturasforestales.pdf">Ver</a></div>
                              </div>
                              <div class="clearfix"></div>
                              
                           </div>
                        </div>                        
                        <div class="col-md-4 col-sm-4">
                           <div class="sidebar">
                              <!-- Widget -->
                              <div class="widget">
                                 <h4>Recent Posts</h4>
                                  <ul>
									 <li><i class="fa fa-angle-right"></i> Etiam adipisc iaculis justo dictum non</li>
									 <li><i class="fa fa-angle-right"></i> Cras tinciarcu hendrerit eleifend</li>
									 <li><i class="fa fa-angle-right"></i> Aenean ullamco et lobortis diam faucibus</li>
									 <li><i class="fa fa-angle-right"></i> Maecenas ue id ante dictum mattis</li>
									 <li><i class="fa fa-angle-right"></i> Vivamus non, et cursus tortor</li>
                                 </ul>
                              </div>
                              <div class="widget">
                                 <h4>About</h4>
                                 <p>Nulla facilisi. Sed justo dui, id erat. Morbi auctor adipiscing tempor. Phasellus condimentum rutrum aliquet. Quisque eu consectetur erat. Proin rutrum, erat eget posuere semper, <em>arcu mauris posuere tortor</em>,velit at <a href="#">magna sollicitudin cursus</a> ac ultrices magna. Aliquam consequat, purus vitae auctor ullamcorper, sem velit convallis quam, a pharetra justo nunc et mauris. </p>
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
