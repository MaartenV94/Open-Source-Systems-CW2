
<?php echo $message; ?>

<!-- <form >
   Student ID:
   <input name="txtid" type="text" />
   <br/>
   Password:
   <input name="txtpwd" type="password" />
   <br/>
   <input type="submit" value="Login" name="btnlogin" />
</form> -->

<form name="frmLogin" action="authenticate.php" method="post" class="row justify-content-center">
   <div class="mb-3 col-sm-8">
      <label for="txtid" class="form-label text-dark mt-5">Student ID:</label>
      <input type="text" class="form-control" id="txtid" name="txtid">
   </div>
   <div class="mb-3 col-sm-8">
      <label for="txtpwd" class="form-label text-dark">Password:</label>
      <input type="password" class="form-control" id="txtpwd" name="txtpwd">
   </div>
   <div class="mb-3 col-sm-8">
   <input type="submit" name="btnlogin" class="btn btn-primary" value="Login"></input>
</div>
</form>
