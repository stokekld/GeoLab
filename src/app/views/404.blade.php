@extends('base')

@section('content')

<!-- Content strats -->

<div class="content">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            
            <!-- 404 starts -->
            
            <div class="error">
               <div class="row">
                  <div class="col-md-12">
                     <div class="error-page">
                        <p class="error-med">Oops! Something missing</p>                        
                        <p class="error-big">404<span class="color">!!!</span></p>                        
                        <p class="error-small">Fusce imperdiet, risus eget viverra faucibus, diam mi vestibulum libero, ut vestibulum tellus magna nec enim. Nunc dapibus varius interdum.</p>
                     </div>
                  </div>
               </div>
            </div>
            
            <!-- 404 ends -->
            
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
