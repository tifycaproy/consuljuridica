<div class="sidebar-wrapper">
        <ul class="nav">
          <li id="slider" class="nav-item">
            <a class="nav-link" href="{{ route('versliders')}}">
              <i class="material-icons">view_carousel</i>
              <p>Slider</p>
            </a>
          </li>
          <li id="servicios" class="nav-item">
            <a class="nav-link disabled" href="
            <?php
            // echo route('ingresarmodulo', ['modulo' => 'servicios'])
            echo "#";
            ?>
            ">
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

          <li id="usuarios" class="nav-item">
            <a class="nav-link" href="{{ route('verusuarios')}}">
              <i class="material-icons">people</i>
              <p>Usuarios</p>
            </a>
          </li>
          
          <!-- your sidebar here -->
        </ul>
      </div>
