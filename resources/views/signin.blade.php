<h1>Nurse Login</h1>
<form action="{{url('login')}}" method="post">
	@csrf
	<label>Email</label><input type="text" name="email" id="email"><br><br>
	<label>Password</label><input type="password" name="password" id="password"><br><br>
	<button type="submit">Login</button>
</form>