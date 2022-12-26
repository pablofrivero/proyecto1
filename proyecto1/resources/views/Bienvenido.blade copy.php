@extends('Layouts.full_width')

@section('contenido')

<!-- Page Heading/Breadcrumbs -->

  <h1 class="mt-5 mb-2" style="text-align: center; color: #3D439C;"><b>Bienvenido al sitio de <br> Administración y Puesta Productiva de Aplicaciones</b><br><br>Una herramienta que nos acerca<br></h1>
  <br>
  <br>
  <h3 style="color: #3D439C;"><i><b>¿Quiénes somos?</b></i></h3>
  <big><i>Somos parte de la historia de Claro, venimos del melancólico edificio Alcorta y de la histórica Ertach.
  <br>
  Algunos mamamos CDMA, otros telefonía fija, nos enfrentamos con los ciclos de facturación móvil, fija y eventual, la mediación, el provisioning, CPP, negados, black list, Vantive, Remedy, Clearquest y Harvest, las métricas, las auditorias (y los auditores), los oficios judiciales, las cobranzas y los morosos,  SOX, ISO y cuanto nuevo desafío se ha presentado.
  <br>Para solucionar problemas en tiempo récord aprendimos malabares, acrobacia, equilibrismo, trapecismo, a ser hombre bala y hasta a veces mimos, pero nuestra especialidad es la magia de hacer aparecer una solución donde, hasta recién, había un problema.
  <br>
  <br>
  Antes y a modo de homenaje, pertenecimos a la Gerencia de Redes y Operaciones dependiente de la, ya vieja, Dirección de Sistemas. Aplausos para Sergio Capri!
  <br>
  <br>
  Hoy formamos parte de la Gerencia de Soporte de Negocios a cargo de Mario Nicotra, dependiente de la <b>Dirección de IT</b>.
  <br>
  <br>
  ¡En el menú contactos podes conocernos!
  <br>
  <br>
</i></big>
  <br>
  <h3 style="color: #3D439C;"><i><b>¿Qué hacemos? ¡¡Muchas cosas!!<br></b></i></h3>
  <ul>
      <li><big><i>Administramos el scheduler de la compañía, Control-M. Sobre esta plataforma corren los procesos batch encargados de soportar el negocio pero también otros que satisfacen necesidades de muchas áreas. <b>Actualmente BMC Control-M cuenta con más de 50.000 jobs, siendo una de las mayores implementaciones de BMC en Argentina!</b></i></big></li>
      <li><big><i>Tenemos la responsabilidad de la puesta en producción de los desarrollos de Claro y de proveedores externos. Estos son desarrollados en varias tecnologías, como Oracle PL/SQL, JAVA, PROC, PERL, JBOSS, PHP, etc. y bajo diferentes arquitecturas. Esta tarea requiere que trabajemos de día y de noche, para esto trabajamos en equipo para poder asegurar la correcta implementación de todos los requerimientos. <b>La meta es impactar los cambios validando la operatividad y evitando experiencias frustrantes a nuestros clientes.</b></i></big></li>
      <li><big><i>La administración de plataformas críticas es otra de nuestras responsabilidades. <b>Para nosotros administrar implica, operar, mantener, monitorear, evidenciar problemas, buscar soluciones temporales y definitivas, y colaborar con los referentes para lograr la mejor experiencia de nuestros clientes.</b></i></big></li>
      <li><big><i>Las principales plataformas que administramos son:</i></big></li>
      <ul>
        <li><big><i style="color: red;">Nokia Eventlink</i></big></li>
        <li><big><i style="color: red;">Nokia Order Manager</i></big></li>
        <li><big><i style="color: red;">Mahindra PRETUPS</i></big></li>
        <li><big><i style="color: red;">Mahindra USSD</i></big></li>
        <li><big><i style="color: red;">InSwitch GIROS</i></big></li>
        <li><big><i style="color: red;">HP ERM</i></big></li>
        <li><big><i style="color: red;">INTEC</i></big></li>
        <li><big><i style="color: red;">BMC Control-M</i></big></li>
      </ul>
  </ul>
  <br>
  <br>
  <h3 style="color: #3D439C;"><i><b>Valor Agregado e Innovación<br></b></i></h3>
  <big><i>Nuestra alma técnica naturalmente nos mueve hacia estos dos conceptos. Brindar soluciones a otras áreas es parte de la impronta del grupo, muestra de ello es el conjunto de soluciones desarrolladas o implementadas por nosotros para colaborar en la mejora operativa o vivencial de otras áreas.  Paneles de disponibilidad, alertas, mails, alarmas, aplicaciones para self service (Sírvase usted mismo!), robots que controlan servicios, la Wiki de Claro, gestión de guardias, etc. son nuestra forma de decir <b> ¡Estamos para ayudarte!</b></i></big>
  <ul>
      <li><big><i>La automatización es uno de nuestros valores agregados. Por iniciativa propia o por pedido de terceros buscamos soluciones eficaces e innovadoras a problemas complejos. Para esta tarea nos apoyamos en las más diversas herramientas tecnológicas. <b>¡Invertimos mucho tiempo en hacer sencillo lo complejo!</b></i></big></li>
      <li><big><i>La generación de controles y alarmas que permitan evidenciar problemas o adelantarnos a ellos es una tarea prioritaria de este grupo humano, para ello nos valemos de paneles de disponibilidad, estadísticas de servicios, robots, etc. Y somos capaces de notificar un problema por diferentes vías (Traps SMPP, SMS, Mails, etc.)</i></big></li>
      <li><big><i>El desarrollo de nuevas herramientas también es una característica nuestra. Creemos que con herramientas eficientes se controla el caos y se mejora la vida laboral. <b>Para nosotros el desafío pasa por pensar soluciones creativas que mejoren la experiencia, sumen certidumbre y faciliten las tareas.<br> Estos son algunos de nuestros desarrollos:</b></i></big></li>
        <ul>
          <li><big><i style="color: #blue;">¡¡Este sitio y todas sus herramientas!!</i></big></li>
          <li><big><i style="color: #blue;">Los paneles de disponibilidad de servicios</i></big></li>
          <li><big><i style="color: #blue;">Reportes de servicios</i></big></li>
          <li><big><i style="color: #blue;">SCAP: Solicitud de cambio en ambientes productivos</i></big></li>
          <li><big><i style="color: #blue;">Módulo de gestión de Alarmas de Control-M</i></big></li>
          <li><big><i style="color: #blue;">Módulo de gestión de Alarmas de Servicios</i></big></li>
          <li><big><i style="color: #blue;">BFT y JMFT: Módulos de transferencia de Archivos y sus módulos de alarming y estadísticas.</i></big></li>
          <li><big><i style="color: #blue;">Refrescos automáticos de Lookups y reinicio de nodos</i></big></li>
          <li><big><i style="color: #blue;">La Interface de Guardias de IT</i></big></li>
          <li><big><i style="color: #blue;">SQL LOADER: Módulo para upload masivo de archivos en base de datos</i></big></li>
          <li><big><i style="color: #blue;">Aplicación de Campañas Masivas SMS.</i></big></li>
          <li><big><i style="color: #blue;">Controles de todo tipo tendientes a solucionar o disminuir una problemática.</i></big></li>
          <li><big><i style="color: #blue;">Etc.</i></big></li>
        </ul>
      <li><big><i>Otra característica nuestra son las pequeñas soluciones creativas.  Estás son mejoras en tiempo de producción a problemas no detectados en tiempo de desarrollo/testing. Cuando no se visualiza una solución a corto plazo, nosotros ayudamos sumando soluciones creativas con el fin de soportar el negocio hasta la solución definitiva, ¡¡¡que puede no llegar jamás!!! Estas soluciones son particulares para cada problema y pueden ser desde simples shell scripts hasta complicados PERLs,con acceso a base de datos y estadísticas, que reinicien servicios automáticamente, limpien buffers, etc. <b>¡Cada solución que somos capaces de brindar es un auto reconocimiento a nuestro rol técnico!</b></i></big></li>
  </ul>
  <big><i>¡Esperamos que este sitio te sea útil! y ya sabes... ¡Estamos para ayudarte!</i></big>
  <br>
  <br>


@endsection

