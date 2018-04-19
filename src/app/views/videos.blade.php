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
                  
                     <!-- Gallery hero -->
                     <div class="hero">
                        <!-- Title. Don't forget the <span> tag -->
                        <h3><span>Gallery</span></h3>
                        <!-- para -->
                        <p>Praesent at tellus porttitor nisl porttitor sagittis. Mauris in massa ligula, a tempor nulla. Ut tempus interdum mauris vel vehicula. Nulla ullamcorper tortor commodo in sagittis est accumsan.</p>
                     </div>
                     <!-- Gallery -->
                     
                    <div id="gallery">
                        <!-- For image lightbox you need to include "a" tag pointing to image link, along with the class "prettyphoto".-->
                       <a href="img/photos/r1.jpg" class="prettyphoto">
                           <img src="img/photos/r1.jpg" alt=""/>
                       </a>
                       <a href="img/photos/r2.jpg" class="prettyphoto">
                           <img src="img/photos/r2.jpg" alt=""/>                         
                       </a>
                       <a href="img/photos/r3.jpg" class="prettyphoto">
                           <img src="img/photos/r3.jpg" alt=""/>                        
                       </a>
                       <a href="img/photos/r4.jpg" class="prettyphoto">
                           <img src="img/photos/r4.jpg" alt=""/>                          
                       </a>
                       <a href="img/photos/r5.jpg" class="prettyphoto">
                           <img src="img/photos/r5.jpg" alt=""/>                          
                       </a> 
                       <a href="img/photos/r6.jpg" class="prettyphoto">
                           <img src="img/photos/r6.jpg" alt=""/>                           
                       </a> 
                       <a href="img/photos/r7.jpg" class="prettyphoto">
                           <img src="img/photos/r7.jpg" alt=""/>                          
                       </a>
                       <a href="img/photos/r8.jpg" class="prettyphoto">
                           <img src="img/photos/r8.jpg" alt=""/>                           
                       </a>
                    </div>
                     
                  </div>
               </div>
            </div>
            
            
            <!-- gallery ends -->
            
            <!-- CTA starts -->
            
            <div class="cta">
               <div class="row">
                  <div class="col-md-9">
                     <!-- First line -->
                     <p class="cbig">Lorem ipsum consectetur dolor sit amet, consectetur adipiscing.</p>
                     <!-- Second line -->
                     <p class="csmall">Duis vulputate consectetur malesuada eros nec odio consect eturegestas et netus et in dictum nisi vehicula.</p>
                  </div>
                  <div class="col-md-2">
                     <!-- Button -->
                     <div class="button"><a href="#">Get A Free Trail</a></div>
                  </div>
               </div>
            </div>
            
            <!-- CTA Ends -->
            
         </div>
      </div>
   </div>
</div>   

<!-- Content ends --> 
@endsection
