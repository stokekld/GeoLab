@extends('base')

@section('content')


<!-- Content strats -->

<div class="content">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            
            <!-- Service starts -->
            
            <div class="servic">
               <div class="row">
                  <div class="col-md-12">
                  
                     <!-- Service hero -->
                     <div class="hero">
                        <!-- Title. Don't forget the <span> tag -->
                        <h3><span>Detección de Incendios forestales utilizando imágenes GOES</span></h3>
                        <!-- para -->
			<p>A partir de 1998 bajo la Organización Meteorológica Mundial se estableció un sistema de aviso de incendios forestales y vigilancia de sequías, con el fin de emitir alertas tempranas para las zonas de riesgos por incendios (Juan Carlos 2015).</p>
			<p>Con ayuda de imágenes satelitales se tomaron Focos de Calor. En el año 2002 la Subgerencia de Monitoreo Atmosférico Ambiental del SMN estableció contacto con el Satellite Analysis Branch (SAB) de la National Environmental Satellite, Data and Information Service (NESDIS), a su vez adscrita a la National Oceanic and Atmospheric Administration (NOAA) de EUA, a fin de conocer la operación y funcionamiento del Hazard Mapping System (HMS), herramienta empleada por la NOAA para la detección de focos de calor y seguimiento de contaminación, provocada por las plumas de humo.</p>
			<p>Posterior al 2002, la NOAA comenzó a proporcionar datos más rápidos y precisos para rastrear eventos meteorológicos, con el nuevo lanzamiento del satélite GOES-S, que se unirá a GOES-16 y NOAA-20 a medida que NOAA continúe mejorando su flota de satélites. El cual proporcionara más información más precisa en el hemisferio occidental, escaneando cuatro veces más rápido y con una resolución mucho más alta que las versiones anteriores.</p>
			<p>En el artículo: "Validation of GOES and MODIS active fire detection products using ASTER and ETM+ data" escrito por Prins, E. M., Feltz, J. M., Menzel, W. P., & Ward, D. E., se realizó un exhaustivo análisis para poder validar los datos de detección de los incendios activos forestales por los satélites MODIS y GOES (MOD14 y WFABBA, respectivamente), caracterizando sus principales fuentes de errores de omisión y comisión que tienen implicaciones para una gran cantidad existente de usuarios que trabajan con datos de incendios. Sus análisis se basaron principalmente en el uso de las imágenes de resolución de 30 m ASTER y de ETM+ como los valores para los datos de validación, lo que les llevó a encontrar, que la marca de probabilidad de detección verdadera positiva era del 50%. El análisis de WFABBA, requería casi cuatro veces más área activa de fuego que la necesaria por MOD14 para que lograse la misma probabilidad de detección. Aproximadamente el 75% y 95% de todos los incendios forestales muestreados fueron omitidos por los productos instantáneos tanto de MOD14 como de WFABBA, respectivamente.</p>
			<p>Otros trabajos planteados sobre este tema, fue: "Observing Forest Fires with the GOES-8, 3.9-nm Imaging Channel" de Weaver, J. F., Purdom, J. F., & Schneider, T.L., donde se habla de los cuerpos negros que radian a los 3.9 nm, estos incrementan rápidamente con la temperatura, lo que conlleva a que una sugestión real acerca del potencial que tendría la aplicación de imágenes de satélite por los meteorólogos del clima de fuego con los datos de la imágenes a 3.9nm provistas por el satélite del clima, GOES-8, tiene la capacidad para detectar los incendios forestales. Un modelo de radiación simple fue utilizado para estimar el tamaño mínimo de la zona de fuego para varios tipos de incendios forestales.</p>
			<p>Finalmente, otro de los trabajos que se abordan acerca de los incendios forestales detectados por imágenes satelitales es:"Detection of the forest fires of April 1997 in Guanacaste, Costa Rica, using GOES-8 images" de los investigadores  Alfaro, R., Fernandez, W., & Connell, B., los cuales hablan acerca de que los productos del sensor GOES-8 combinados  (imágenes radiometricas de 3.9 nm y 10.7 nm de longitud de onda), pueden ser utilizados para detectar incendios tanto forestales como en praderas, los cuales ocurrieron en la ciudad de Guanacaste, en Costa Rica. En abril de 1997, se demostró que este producto (imágenes de GOES-8) es muy utilizado para la detección de incendios forestales en Centroamérica. El trabajo identifico las áreas que son quemadas año por año.</p>
                     </div>
                     <!-- Service -->
                     
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
