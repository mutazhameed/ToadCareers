<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Profile</title>
    <!-- Referencing Bootstrap CSS that is hosted locally -->
    {{ HTML::style('css/style.css') }}

  </head>
  <body>
<header>
<div class="container">
Menu:
 {{ link_to_route('dashboard', 'Dashboard') }}
| {{ link_to_route('profile', 'Personal Data') }}
| {{ link_to_route('education.index', 'Education') }}
| {{ link_to_route('experiences', 'Experience') }}
| {{ link_to_route('achievements', 'Achievements') }}
| {{ link_to_route('courses', 'Courses') }}
| {{ link_to_route('certificates', 'Certificates') }}
| {{ link_to_route('skills', 'Skills') }}
| {{ link_to_route('languages', 'languages') }}
| {{ link_to_route('applications', 'Applications Status') }}
| {{ link_to_route('interests.index', 'cat of Interest') }}
| {{ link_to_route('admin', 'Admin') }}
@yield('header')
</div>
</header>

<main class="container">
@yield('content')
</main>

<foort>
<div class="container">
{{ link_to_route('home', 'Home') }}
</div>
</foort>
  </body>
</html>