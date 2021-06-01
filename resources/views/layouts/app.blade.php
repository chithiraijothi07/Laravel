<html>
<head>
<div id="app">
<name class="navbar navbar-md navbar-light navbar-laravel">
</nav>

<main class="py-4">
@auth
<div class="container">
</div>
@else
@yield('content')

<div class="row">
<div class="col-md-4">
<ul class="list-group">
<li class="list-group-item">
<a href="resources\views\welcome.blade.php">posts</a>
</div>
</li>
<li class="list-group-item">
<a href="resources\views\welcome.blade.php">Categories</a>
</li>
</ul>
</div>

<div class="col-md-8">
@yield('content')
</div>
</div>
</main>
</div>
</body>
</html>