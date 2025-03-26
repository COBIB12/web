    <?php
            include("datos1.php");

            if(isset($_POST['nombre']) && !empty($_POST['nombre']) &&
            isset($_POST['user']) && !empty($_POST['user']) &&
            isset($_POST['pw']) && !empty($_POST['pw']) &&
            isset($_POST['pw2']) && !empty($_POST['pw2']) &&
            isset($_POST['email']) && !empty($_POST['email']) &&
            $_POST['pw'] == $_POST['pw2'])
            {

                $con=mysqli_connect($host,$user,$pw) or die("problemas al conectar el servidor");

                mysqli_select_db($con,$db) or die("problemas al conectar con db");



                mysqli_query($con, "INSERT INTO registro (nombre,user,pw,email) 
                VALUES('{$_POST['nombre']}','{$_POST['user']}','{$_POST['pw']}','{$_POST['email']}')");


                print '<h3 class="co">Registrado completo, revise su correo</h3>' ;

            }else{
                print '<h3 class="co">Verifique que llenaste los campos y las contraseñas coincidan  </h3>';

            }

        ?>