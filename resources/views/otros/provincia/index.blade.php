    

  <!DOCTYPE html>
  <html>
  <head>
      <title></title>

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">


    <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

  </head>
  <body>

      <nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/home">Escuela</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
         
       

       


        </ul>
     
        <ul class="nav navbar-nav navbar-right">
          
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sesion <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="{{ url('/logout') }}">Cerrar Sesión</a></li>
            </ul>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>

<h3>Lista de todas las Provincias</h3>



<div class="container">
  <table class="table">
    <thead>
      <tr>Nombre de Provincia</tr>
    </thead>
    <tbody>
      
        @foreach($provinciass as $prov)
          <tr>
            <td> {{$prov->nombre}} </td>
            <td> 
           <!--    <a href="{{ route('provincia.show', $prov->id ) }}" class="btn btn-default btn-sm">Ver</a> -->
           
                <a href="{{ route('provincia.show', $prov->id ) }}" class="btn btn-default btn-sm" data-toggle="modal" data-target="#myModal">Ver</a>
            

             
              <a href="{{ route('provincia.edit', $prov->id ) }}" class="btn btn-default btn-sm">Edit</a>
            </td>
          </tr>
        @endforeach 
      
    </tbody>    

  </table>
</div>



<a href="/home" class="btn btn-primary"> Atrás</a>

<div class="bs-example">
    <!-- Button HTML (to Trigger Modal) -->
  
    <!-- Modal HTML -->
    <div id="myModal" class="modal" tabindex="" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Content will be loaded here from "remote.php" file -->

            </div>
        </div>
    </div>
</div>

<style>
    footer {
      background-color: #f5f5f5;
      
      width: 100%;
      height: 50px;
      bottom: 0px;
      
      margin:0 auto auto auto;

      position: relative;
      
      
      border-top: 1px ;
    }
</style>

<!-- <script> CUANDO EL MODAL PIERDA EL FOCO QUE ME REDIRIJA A LA RUTA "PROVINCIA" ;)
$(document).ready(function(){
    $("#jquery").click(function(){
        $("#cont").load("otros/provincia/hola.html");
    });

      $("#jquery").click(function(){
        $("#cont").load("otros/provincia/hola.html");
    });

  

    $("#mimod").click(function() {
       $("#myModal" ).removeData('modal-content');
});


});
</script> -->


<footer class="footer">
  <div class="container">
    <p class="text-muted text-center">Copyright© alexander magno </p>
  </div>
</footer>




</body>
</html>




