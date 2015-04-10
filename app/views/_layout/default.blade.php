<!DOCTYPE html>
<html lang="en">
  <head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Vacancies</title>
{{ HTML::style('css/bootstrap.min.css') }}
{{ HTML::style('css/jquery-ui.theme.css') }}
 {{ HTML::script('js/jquery.js') }}
 {{ HTML::style('css/jquery-ui.css.css') }}
 {{ HTML::script('js/jquery-ui.js') }}


    <!-- Referencing Bootstrap CSS that is hosted locally -->

      <script>
      $(function() {
        $( "#datepicker" ).datepicker();
      });
      </script>
       @yield('intoheader')
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
              @if(Auth::user()->type==0)
               <li>
                 {{ link_to_route('dashboard', 'Dashboard') }}
                </li>
                  <li class="dropdown">
                    <a id="themes" href="#" data-toggle="dropdown" class="dropdown-toggle">{{ Lang::get('site.profile') }}<span class="caret"></span></a>
                    <ul aria-labelledby="themes" class="dropdown-menu">
                      <li>{{ link_to_route('dashboard', 'Personal Data', '#personal') }}</li>
                      <li> {{ link_to_route('dashboard', 'Education', '#education') }}</li>
                      <li>{{ link_to_route('dashboard', 'Experience', '#experience') }}</li>
                      <li>{{ link_to_route('dashboard', 'Achievements', '#achievements') }}</li>
                      <li>{{ link_to_route('dashboard', 'Courses', '#courses') }}</li>
                      <li>{{ link_to_route('dashboard', 'Certificates', '#certificates') }}</li>
                      <li>{{ link_to_route('dashboard', 'Skills', '#skills') }}</li>
                      <li>{{ link_to_route('dashboard', 'languages', '#languages') }}</li>
                      <li>{{ link_to_route('dashboard', 'cat of Interest' ,'#catOfInterest') }}</li>

                    </ul>
                  </li>
                <li>
                  {{ link_to_route('applications', 'Applications Status') }}
                </li>
                @endif
                @if(Auth::user()->type==1)
                <li>
                  {{ link_to_route('admin', 'Admin') }}
                </li>
                   <li>{{ link_to_route('search', 'Search') }} </li>
                @endif
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