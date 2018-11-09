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
                        <h3><span>CALCULO DE LA TEMPERATURA SUPERFICIAL TERRESTRE UTILIZANDO IMÁGENES SATELITALES</span></h3>
                        <!-- para -->
			<p>En la actualidad se tiene nuevas herramientas remotas que permiten conocer diferentes variables, que surgieron por la necesidad de contar con redes de información micro o meso meteorológicas. La búsqueda de nuevos métodos, se encuentra en un proceso de cambio permanente y que adquiere una gran importancia en el análisis por medio de modelos físicos y la utilización de sensores remotos.</p>
			<p>Normalmente, los valores que se obtienen de la temperatura de la superficie terrestre se obtienen mediante los datos registrados por estaciones meteorológicas instaladas en algunos lugares específicos para su medición, los cuales son posteriormente sometidos a procesos de corrección y finalmente se utiliza una extrapolación a otras zonas geográficas, sin embargo, las temperaturas de la superficie varían dependiendo de diferentes factores, como son: tipo de cobertura, topografía del lugar y latitud,  entre otros. Por lo anterior es normal que varíen los datos dentro de un área geográfica en un mismo momento.</p>
			<p>El análisis de la información de temperatura en imágenes con diferentes sensores, varía con respecto a la cantidad de energía radiante recibida por el sensor, en forma de valores relativos, no calibrados, simplemente llamados Niveles Digitales (ND). De esta forma, la información de temperatura registrada en los satélites, presenta diferentes complejidades dado a que poseen una o más bandas térmicas, dependiendo el diseño y uso del satélite. Conociendo estas especificaciones, se puede determinar el uso de modelos de transferencia de radiancia y emisividad, para el cálculo de la temperatura de superficie.</p>
			<p>Uno de los trabajos donde podemos ver la aplicación es: "Obtención de la Temperatura de la Superficie Terrestre a partir de datos LANDSAT y MODIS" de Gustavo Martín Morales, en el cual, debido al difícil acceso hacia las áreas protegidas del Parque Nacional Ciénega de Zapata (demasiado extensa y de difícil acceso, cuenta solamente con una estación meteorológica en la parte oriental) y del Parque Nacional  Jardines de la Reina (alejado de tierra firme y sin estación meteorológica), propone la utilización de imágenes satelitales de la serie Landsat y del producto MOD-Q11A2, y en un caso más particular, a este último, por su gran resolución espectral y temporal, así como el libre acceso para obtener estas imágenes, lo que ocasiona, que sea una herramienta idónea para el monitoreo de las temperaturas superficiales en las dos áreas de difícil acceso. Las bandas térmicas obtenidas desde los satélites permitieron un avance sustancial en la evaluación de la temperatura de la superficie terrestre, lo que favoreció, la eficiencia en la utilización de datos puntuales como los obtenidos por las estaciones meteorológicas.</p>
			<p>Otro uso de estas técnicas se ocupó en el cálculo de temperatura superficial en el Valle de Río Neuquén, donde se utilizaron imágenes de satélite LANDAT 7 ETM y NOAA-AVHRR, con el fin de detectar los cambios fenológicos de los cultivos y de los mayores contrastes de temperatura de dicho lugar, ocasionados por el calentamiento diferencial de la superficie, a partir de la mayor disponibilidad energética por unidad de área en verano.</p>
			<p>En el caso de la agricultura, se utiliza la temperatura de la superficie terrestre obtenida a partir de NOAA-AVHRR con datos infrarrojos térmicos. Debido a los efectos existentes de emisividad atmosférica y de cultivos es difícil obtener la temperatura real de la superficie del cultivo. Para corregir los efectos atmosféricos, los cuales son generalmente utilizados solamente para la validación de la temperatura de la superficie del mar, se utiliza el método de ventana dividida. El trabajo: "Atmospheric and emissivity correction of land surface temperature measured from satellite using ground measurements or satellite data", proponen dos soluciones distintas. La primera utilizan mediciones en Tierra, mientras que la segunda, se obtiene la información atmosférica contenida en los mismos datos de NOAA, los cuales, son la diferencia entre las temperaturas de brillo de las bandas 4 de AVHRR y la 5,en ambos casos, se conduce a un error de 2° K en la temperatura. Otro trabajo muy similar al anterior; que habla acerca de la utilización del método de Ventana Dividida es: "Land surface temperature measurements from the split window channels of the NOAA 7 Advance Very High Resolution Radiometer".</p>
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
