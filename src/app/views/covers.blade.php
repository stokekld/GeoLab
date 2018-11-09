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
                        <h3><span>Clasificación de cubiertas forestales utilizando imágenes SPOT y fotografías</span></h3>
                        <!-- para -->
			<p>Se entiende como piso o lecho forestal, a la capa de vegetación y restos orgánicos que reposan sobre el suelo de un bosque, los cuales suelen depender de la dinámica de la vegetación. De él  podemos inferir muchas de las propiedades de la materia orgánica y comunidades de microorganismos del suelo (Juan, 2009).</p>
			<p>Conocer las características del piso forestal tiene una gran importancia y utilidad, para la realización de muestreos, ya que el microclima generado bajo las cubiertas vegetales, juega un papel especialmente trascendente en el desarrollo y perpetuación de las mismas (Sanz, 2004).</p>
			<p>El tipo de densidad forestal influye en el flujo de radiación solar entrante, ya que la sombra que proporciona la cubierta, no es continua ni uniforme al suelo.</p>
			<p>La única luz directa que alcanza el suelo forestal, lo hace en forma de manchas de luz, producidas cuando los rayos solares pasan a través de los huecos que deja la cubierta de hojas (según el día va progresando hacia ciertas áreas con intensidades de luz muy dispares, siendo en algunos casos muy próximas a las de sitios abiertos).</p>
			<p>Los lugares bajo las partes más densas de la cubierta, sólo reciben débil luz difusa y transmitida, posiblemente inferior a un 2% de la recibida en suelos descubiertos (Burrows, 1990), mientras que los huecos grandes de la misma, permiten que el suelo bajo ellos, pueda estar iluminado buena parte del día.</p>
			<p>Bajo los pequeños huecos que deja el dosel, las manchas de luz alcanzan el suelo brevemente, al cambiar continuamente de acuerdo con el movimiento relativo del Sol y las condiciones del viento (Packham et al., 1992). Este patrón de comportamiento se difumina en días cubiertos de nubosidad, cuando la mayor parte de la luz, tanto incidente sobre la cubierta forestal como circulante en su interior, es de carácter difuso, lo que provoca unas condiciones más homogéneas de iluminación.</p>
			<p>Así se puede monitorear el comportamiento de las diferentes cubiertas, dado a que el espesor de la cubierta forestal, depende del tipo de flora que se maneje en la región, además de clasificar las diferentes cubiertas de una zona determinada.</p>
			<p>En el artículo: "Using a land cover classification based on satellite imagery to improve the precision of forest inventory area estimates" de los investigadores Ronald E. McRoberts, Daniel G. Wendt, Mark D. Nelson y Mark H. Hansen, se obtuvieron estimaciones de las áreas forestales, para los estados de Indiana, Iowa, Minnesota y Missouri de los Estados Unidos de América. Utilizaron análisis de estratificados y observaciones de parcelas del inventario forestal, medidas en el año fiscal federal de 1999. Los datos de cobertura terrestre y los pesos de los estratos fueron calculados como proporciones de los resultados de píxeles de los estratos. Los análisis que se realizaron se centraron en mejorar la precisión de las estimaciones imparciales del área forestal, incluyendo la evaluación entre las agregaciones forestales y no forestales de los datos de cobertura terrestre, así como, herramientas de estratificación y la estimación de los efectos sobre la precisión del registro de la imagen y los errores de ubicación de la gráfica.</p>
			<p>Otros de los artículos que hablan acerca del tema es: "A comparison of pixel-based and object-based image analysis with selected machine learning algorithms for the classification of agricultural landscape using SPOT-5 HRG imagery" de los investigadores Dennis C. Duro, Steven E. Franklin y Monique G. Dubé. En la investigación se habla acerca de los enfoques de análisis de imágenes basados en objetos y píxeles para llevar a cabo una clasificación de clases de cobertura terrestre amplia sobre paisajes agrícolas, los cuales, se compararon utilizando tres algoritmos de aprendizaje automático supervisado, que son: árbol de Decisión (DT), Bosque Aleatorio (RF) y la Máquina de vectores de Soporte (SVM). Las clasificaciones basadas en píxeles, y basadas en objetos, resultaron no ser estadísticamente significativas, teniendo un valor de p>0.05, aun cuando se aplicaron los mismos algoritmos de aprendizaje automático.</p>
			<p>Usando el análisis de imágenes basadas en objetos, existió una diferencia estadísticamente significativa en la precisión de la clasificación entre los mapas producidos, usando el algoritmo DT, en comparación con los mapas producidos utilizando el algoritmo RF (p=0.0116) y algoritmo SMV (p=0.0067).</p>
			<p>Con lo que respectó a este estudio, las clasificaciones basadas en píxeles utilizaron menos variables, lograron exactitudes de clasificaciones similares, y requirieron menos tiempo para producir que las clasificaciones basadas en objetos.</p>
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
