<div id="qbx" class="modal fade" >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                Log in
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
            <div class="modal-body">
                <p class="text-warning ">Login to make a Play games</p>
                <form method="post" action="login_submit.php">
                    <div class="form-group">
                        <input type="text" class ="form-control" name="email" id="email" placeholder="User id" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class ="form-control" name="pass" id="pass" placeholder="password123*" required>
                    </div>
                    <input type="checkbox" onclick="myFunction()">Show Password
                    <div class="form-group">
                        <button type="submit" class="btn btn-success btn-lg">Log in</button>
                    </div>
                    
                    <div class="modal-footer">
                       

                        <a href="#" class="text-primary">Forgot password ?</a><br>
                        <span class="text-info">Don't have an account? </span><a href="signup.php" class="text-primary">Register</a>
                    </div>
                </form>
                <br><br>
            </div>
        </div>
    </div>
</div>
<script>
function myFunction() {
  var x = document.getElementById("pass");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>