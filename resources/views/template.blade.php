<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" integrity="sha512-P5MgMn1jBN01asBgU0z60Qk4QxiXo86+wlFahKrsQf37c9cro517WzVSPPV1tDKzhku2iJ2FVgL67wG03SGnNA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
   <div class="container">
   <ul>
       <li><a href="{{ route('getHomePage') }}">Home</a></li>
       <li><a href="{{ route('getProfile') }}">Profile</a></li>
       <li><a href="{{ route('getAboutPage') }}">About</a></li>
       <li><a href="{{ route('getHobbiesPage') }}">Hobbies</a></li>
       <li><a href="{{ route('listPost') }}">List Post</a></li>
       <li><a href="{{ route('listUser') }}">List User</a></li>
       <li><a href="{{ route('listStory') }}">List Story</a></li>
       <li><a href="{{ route('getLogin') }}">Login</a></li>
       <li><a href="{{ route('getLogout') }}">Logout</a></li>
      
     </ul>
    @yield('content')
   </div>
</body>
</html>