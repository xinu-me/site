<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <link href="https://fonts.googleapis.com/css?family=VT323" rel="stylesheet" type="text/css">
  <link href="css/style.css" rel="stylesheet" type="text/css">
  <title>xinu.me</title>
</head>

<body>
<div class="content" id="content-node">
  <div class="fuzz"></div>
  <div class="logo-area">
    <pre class="logo">
       _                                
 __  _(_)_ __  _   _    _ __ ___   ___ 
 \ \/ / | '_ \| | | |  | '_ ` _ \ / _ \
  >  <| | | | | |_| | _| | | | | |  __/
 /_/\_\_|_| |_|\__,_|(_)_| |_| |_|\___|
                                        
    </pre>
    <blockquote class="logo-area-quote white">&quot;pequeño sistema UNIX de acceso público&quot;</blockquote>
  </div>
  <div class="instructions-wrapper">
    <div class="instructions">
      <p>
      xinu.me no es una red social. Es una comunidad experimental para socializar, desarrollar habilidades digitales y colaborar a través de la shell del sistema.<br>
      </p>
      <strong>PRINCIPIOS:</strong>
      <ul style="margin-top:0px">
          <li>
            <strong class="yellow">FUERA DE LA WEB:</strong>
            Aunque los usuarios puede crear sitios web, cápsulas gemini y contenido gopher, lo interesante pasa en la línea de comandos donde tu controlas quién ve tu contenido.
          </li>
          <li>
            <strong class="yellow">DIY:</strong>
            El entorno UNIX facilita la "fabricación" de tus propias herramientas.
          </li>
          <li>
            <strong class="yellow">MINIMALISMO:</strong>
            xine.me corre sobre un VPS con 1 GB de RAM y 30 GB de disco duro. Usando interfaces basadas en texto se minimiza el consumo de recursos. 
          </li>
          <li>
            <strong class="yellow">NO COMERCIAL:</strong>
            Sin cuota de miembro, sin publicidad y nadie crea un perfil con tus movimientos online para venderlo. En xine.me pagas tu cuota de miembro participando en la comunidad, creando cosas molonas, testeando lo que crearon otros miembros y enseñando a otros lo que sabes. 
          </li>
          <li>
            <strong class="yellow">ASÍNCRONO:</strong>
            Aunque puedes usar el IRC para la comunicación en tiempo real, mucha de la interacción es asíncrona en el sentido de que puedes ver lo que están haciendo el resto de usuarios, darle unas vueltas y luego comentarlo en el BBS tranquílamente, sin prisa.
          </li>
      </ul>
      <p>
        Inspirado fuertemente por los principios del <a href="https://tildeverse.org/" class="cyan">"tildeverso"</a> y el servidor tilde <a href="https://rawtext.club/" class="cyan">rawtext.club</a>.
      </p>
      <span class="green">Enlaces de interés:</span><br>
      
        <ol class="green">
          <li>1. <a href="faq.html" class="cyan">FAQ</a></li>
          <li>2. <a href="inscripcion.html" class="cyan">Inscríbete</a>!</li>

        </ol>
      
      <span class="yellow">USUARIOS:</span><br>
        <ul style="margin-top:0px;">
<?php
$homes = preg_grep('/^([^.])/', scandir("/home/"));
foreach ($homes as $user){
    if ($user != '.' or $user != ".."){
        echo '<li><a href="https://xinu.me/~'.$user.'" class="cyan">~'.$user.'</a></li>';
    }
}
?>
        </ul>
      <br><span class="green">100% compatible con Lynx. En serio.</span>
    </div>
  </div>
</div>

<script>
  var p = document.getElementById("content-node");
  var p_prime = p.cloneNode(true);
  document.body.appendChild(p_prime);
</script>

</body>
</html>
