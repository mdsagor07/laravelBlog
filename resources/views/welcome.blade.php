<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>blog hgb </title>
  </head>

  <body>
    <h1>hello laravel</h1>

    <! --using url to route  -->
    <a href="{{ URL::to('/about') }}">about page</a>
    <h2>click to contact pages</h2>
    <a href="{{ URL::to('/contact') }}">contact page</a>
    <h3>service encrypted url </h3>
    <!- using direct route used->
    <a href="{{ Route('serviceii') }}">service page</a>

  </body>
</html>
