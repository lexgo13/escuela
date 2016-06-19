<!DOCTYPE html>
<html>
    <head>
       
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<style>
  

.container-fluid {
    padding-right: 10px;
    padding-left: 10px;
    margin-right: 10px;
    margin-left: 10px;
}


.navbar-default{
    padding-right: 10px;
    padding-left: 10px;
    margin-right: 0px;
    margin-left: 0px;


}

.navbar {
    position: relative;
    min-height: 75px;
    margin-bottom: 20px;
    border: 0px solid transparent;
}


</style>


    </head>
    <body>
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="#">
              <img alt="Brand" src="b.png">     
            </a>
          </div>
        </div>
      </nav>

    <div class="jumbotron">
      <h1>Bienvenido al Sistema Escuela!</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nunc nibh, vulputate a interdum eu, fermentum vel dolor. Cras et ligula at eros gravida tempor nec ut nunc. Vivamus posuere id tellus at aliquet. In eros erat, ornare eget leo nec, viverra porttitor ligula. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas a nisl sit amet est finibus accumsan non ut nisi. Etiam in magna mattis, cursus mauris eu, luctus risus. Nulla ultrices pretium erat ut placerat. Nulla tellus ex, euismod ac consequat in, lobortis ut felis. Suspendisse quis porta lacus.</p>
      
     
      <div class="btn-group" role="group" aria-label="...">

       
         <a href="{{ url('/login') }}" class="btn btn-info" role="button">Login</a>
        
      </div>

       <div class="btn-group" role="group" aria-label="...">
        
        <a href="{{ url('/register') }}" class="btn btn-info" role="button">Register</a>        
      </div>

    </div>

    <style>
       footer {
        background-color: #f5f5f5;
        height: 80px;
        width: 100%;
      }
    </style>


  <footer class="footer">
      <div class="container">
        <p class="text-muted">Copyright© alexander magno </p>
      </div>
  </footer>

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>  
    </body>
</html>
