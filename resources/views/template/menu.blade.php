    <!-- Header Start -->
  <header>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <!-- header Nav Start -->
          <nav class="navbar navbar-default">
            <div class="container-fluid">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{!! asset('bienvenida') !!}">
                  <img src="{!! asset('estilo/img/logo1.png') !!}" height="70px" alt="Logo">
                </a>
              </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav navbar-right">
                    <!--@auth
                      <li><a href="{!! asset('inicio') !!}" >Inicio</a></li>
                      <li><a href="{!! asset('cruds') !!}">Catálogos</a></li>
                      <li><a href="{!! asset('curriculums_c') !!}">Currículum</a></li>
                      <li><a href="{!! asset('vist_guias') !!}">Guías</a></li>
                      <li><a href="{!! asset('vist_ofer') !!}">Ofertas</a></li>
                      <li><a href="{!! asset('empresa_ini') !!}">Empresa</a></li>
                      <li><a href="{!! asset('ver_perfil') !!}">Perfil  </a></li>
                      <li><a href="{!! asset('logout') !!}">Cerrar sesión</a></li>
                    @else
                      <li><a href="{!! asset('bienvenida') !!}">Inicio</a></li>
                      <li><a href="{!! asset('login') !!}">Iniciar Sesión</a></li>
                      
                    <li><a href="{!! asset('register') !!}">Registrarse</a></li>
                    @endauth-->


                    <!--Esto es lo que podría ser para quitar algunas pestañas-->
                    <?php

                  $usuario = \Auth::user();?>
                   @if(isset($usuario))
                          @if($usuario->tipo_usuario_id==1)
                           
                            <li><a href="{!! asset('inicio') !!}" >Inicio</a></li>
                            <li><a href="{!! asset('cruds') !!}">Catálogos</a></li>
                            <li><a href="{!! asset('vist_guias') !!}">Guías</a></li>
                            <li><a href="{!! asset('vist_ofer') !!}">Ofertas</a></li>
                            <li><a href="{!! asset('ver_perfil') !!}">{{
                            $usuario->nombre }} {{ $usuario->ap_pat }} {{
                            $usuario->ap_mat }}</a></li>
                            <li><a href="{!! asset('logout') !!}">Cerrar sesión</a></li>
                            @endif

                          @if($usuario->tipo_usuario_id==2)
                           
                            <li><a href="{!! asset('inicio') !!}" >Inicio</a></li>
                            <li><a href="{!! asset('vist_guias') !!}">Guías</a></li>
                            <li><a href="{!! asset('vist_ofer') !!}">Ofertas</a></li>
                            <li><a href="{!! asset('ver_perfil') !!}">{{
                            $usuario->nombre }} {{ $usuario->ap_pat }} {{
                            $usuario->ap_mat }}</a></li>
                            <li><a href="{!! asset('empresa_ini') !!}">Empresa</a></li>
                            <li><a href="{!! asset('logout') !!}">Cerrar sesión</a></li>
                           @endif 


                          @if($usuario->tipo_usuario_id==3)
                           
                            <li><a href="{!! asset('inicio') !!}" >Inicio</a></li>
                            <li><a href="{!! asset('curriculums_c') !!}">Currículum</a></li>
                            <li><a href="{!! asset('vist_guias') !!}">Guías</a></li>
                            <li><a href="{!! asset('vist_ofer') !!}">Ofertas</a></li>
                            <li><a href="{!! asset('ver_perfil') !!}">{{
                            $usuario->nombre }} {{ $usuario->ap_pat }} {{
                            $usuario->ap_mat }}</a></li>
                            <li><a href="{!! asset('logout') !!}">Cerrar sesión</a></li>
                            @endif


                        @else
                            <li><a href="{!! asset('bienvenida') !!}">Inicio</a></li>
                            <li><a href="{!! asset('login') !!}">Iniciar Sesión</a></li>
                      
                            <li><a href="{!! asset('register') !!}">Registrarse</a></li>
                        @endif
                      

                    
                    <!--
                    <li><a href="contact.html">Contáctanos</a></li>-->
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>
          </div>
        </div>
      </div>
    </header><!-- header close -->