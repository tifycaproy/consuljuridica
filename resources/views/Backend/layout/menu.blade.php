<div class="sidebar-wrapper">
        <ul class="nav">
          <li id="slider" class="nav-item">
            <a class="nav-link" href="{{ route('versliders')}}">
              <i class="material-icons">view_carousel</i>
              <p>Slider</p>
            </a>
          </li>
          <li id="servicios" class="nav-item">
            <a class="nav-link disabled" href="{{ route('verservicios')}}">
              <i class="material-icons">iso</i>
              <p>Servicios</p>
            </a>
          </li>
          <li id="noticias" class="nav-item">
            <a class="nav-link" href="{{ route('vernoticias')}}">
              <i class="material-icons">vertical_split</i>
              <p>Noticias</p>
            </a>
          </li>
          <li id="comentarios" class="nav-item">
            <a class="nav-link disabled" href="{{ route('vercomentarios')}}">
              <i class="material-icons">comment</i>
              <p>Comentarios</p>
            </a>
          </li>
          <li id="newsletter" class="nav-item">
            <a class="nav-link disabled" href="{{ route('vernewsletter')}}">
              <i class="material-icons">email</i>
              <p>NewsLetter</p>
            </a>
          </li>
          <li id="preguntas" class="nav-item">
            <a class="nav-link disabled" href="{{ route('verpreguntas')}}">
              <i class="material-icons">contact_support</i>
              <p>Preguntas Frecuentes</p>
            </a>
          </li>
          <li id="tramites" class="nav-item">
            <a class="nav-link disabled" href="{{ route('vertramites')}}">
              <i class="material-icons">next_week</i>
              <p>Trámites</p>
            </a>
          </li>

          @if(Auth::user()->hasRole('admin'))
          <li id="usuarios" class="nav-item">
            <a class="nav-link" href="{{ route('verusuarios')}}">
              <i class="material-icons">people</i>
              <p>Usuarios</p>
            </a>
          </li>
          <li id="configuracion" class="nav-item">
            <a class="nav-link" href="{{ route('verconfiguraciones')}}">
              <i class="material-icons">settings_applications</i>
              {{-- <i class="fab fa-whmcs"></i> --}}
              <p>Configuraciones</p>
            </a>
          </li>
          @endif

          <!-- your sidebar here -->
        </ul>
      </div>
