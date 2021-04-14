<footer class="footer mt-auto py-3 bg-light">
  <div class="container">
    <span class="text-muted">&copy;my website 2016.</span>
  </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
		<input id="loginactive" name="loginactive" value="1" type="hidden">
  <div class="mb-3">
    <label for="Email" class="form-label">Email address</label>
    <input type="email" class="form-control" id="Email" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="Password">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
 
</form>
      </div>
      <div class="modal-footer">
	  
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="loginmodal">login</button>
      </div>
	  <div class="modal-footer">
	  New to twitter?&nbsp&nbsp<button type="button" class="btn btn-primary" id="signupbutton">Join Now</button>
	  
    </div>
  </div>
</div>
<script>
$("#signupbutton").click(function()
{
	if($("#loginactive").val() == "1")
	{
		$("#loginactive").val("0");
		$("#exampleModalLabel").html("Sign up");
		$("#loginmodal").html("sign up");
		$("#signupbutton").html("log in");
	}
	else
	{
		$("#loginactive").val("1");
		$("#exampleModalLabel").html("login");
		$("#loginmodal").html("login");
		$("#signupbutton").html("sign up");
	}
	
}
	)	
	$("#loginmodal").click(function()
	{
	$.ajax({
        type:"POST",
		url:"action.php?action=loginsignup",
		data:"email=" + $("#email").val() + "&password=" + $("#password").val() + "&loginactive=" + $("#loginactive").val(),
		success:function(result){
			alert(result)
		}
	})
		
		
		
		
		
	}
	)
		

</script>	
</body>
</html>