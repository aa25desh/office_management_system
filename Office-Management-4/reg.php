
<html>

   <head>
      <title>Register</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">


      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         .box {
            border:#666666 solid 1px;
         }
      </style>

   </head>

   <body bgcolor = "#F0F0F0">
	<iframe src="header.html" style="border:2px solid black;" height="160" width="100% "></iframe>

      <div align = "center" style="margin-top:50px">
         <h1> Register </h1>
         <div style = "margin: 20px; width:450px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:10px;"><b>Login</b></div>

            <div style = "margin:40px">

               <form action = "Index.php" method = "">
							 <table class="table table-striped">
						 		<tr>
						 					<td> username </td>
						 		<td><input name = "username" type = "text" id = "username" required></td>
						 		</tr>
								<tr>
								       <td> password </td>
								<td><input name = "password" type = "text" id = "password" required></td>
					      </tr>

                  <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i> Submit</button></td>
               </form>

               <div style = "font-size:11px; color:#cc0000; margin-top:10px"></div>

            </div>

         </div>

      </div>

   </body>
</html>
