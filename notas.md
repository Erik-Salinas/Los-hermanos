RESOLUCIONES DE ALTA CALIDAD Y NORMAL EN HTML Y CSS

//HTML
<!-- resolucion de alta calidad img -->
<img src="imagen.jpg" srcset="imagen@2x.jpg 2x"> 

   <!-- resolucion de alta calidad video -->
<video controls>
    <source src="video.mp4" type="video/mp4">
    <source src="video@2x.mp4" type="video/mp4" srcset="video@2x.mp4 2x">
</video>

//CSS
 img {
    background-image: url("imagen.jpg"); Imagen predeterminada 
} 

 @media (min-device-pixel-ratio: 1.5) and (max-device-pixel-ratio: 2) {
    img {
      background-image: url("imagen@2x.jpg"); Imagen de alta resolución para dppx 1.5-2 
    }
  } 
  