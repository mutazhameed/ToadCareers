<!DOCTYPE html>
<html lang="en">
  <head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Vacancies</title>
    <!-- Referencing Bootstrap CSS that is hosted locally -->
    {{ HTML::style('css/bootstrap.min.css') }}
    {{ HTML::style('css/jquery.dataTables.min.css') }}
    {{ HTML::style('css/jquery.dataTables.css') }}
        {{ HTML::script('js/jquery.js') }}
    {{ HTML::script('js/jquery.dataTables.min.js') }}
     {{ HTML::style('css/jquery-ui.css.css') }}
     {{ HTML::script('js/jquery-ui.js') }}


        <!-- Referencing Bootstrap CSS that is hosted locally -->

@yield('intoheader')
  <script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>
  </head>
  <body>
  <div class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            {{ link_to_route('home', Lang::get('site.name'), null,array('class' => 'navbar-brand')) }}
          </div>
          <div id="navbar-main" class="navbar-collapse collapse">
             @if(Auth::check())
            <ul class="nav navbar-nav">

              <li>
                {{ link_to_route('admin', 'Admin') }}
              </li>
                 <li>{{ link_to_route('search', 'Search') }} </li>
            </ul>
            @endif
            <ul class="nav navbar-nav navbar-right">
            @if(Auth::check())
           <li> {{ link_to_route('logout', 'Logout') }}</li>
            @else
         <li>   {{ link_to_route('user.create', 'Register') }}</li>
           <li> {{ link_to_route('login', 'Login') }}</li>
            @endif
                         </ul>

          </div>
        </div>
      </div>
<header>
<div class="container">
@yield('header')
</div>
</header>
<div class="container">
<div class="bs-docs-section">
<div class="page-header">
        <div class="row">
          <div class="col-lg-12">
           @yield('content')

          </div>
          </div>
        </div>
      </div>
</div>


<foort>
<div class="container">
Developed by <a href="http://mutaz.info" target="_blank"> MutazHameed</a>
</div>
</foort>

{{ HTML::script('js/bootstrap.min.js') }}
  </body>
</html>