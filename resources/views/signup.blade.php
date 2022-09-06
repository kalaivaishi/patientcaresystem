<h1>Nurse Register</h1>
<form action="{{url('register')}}" method="post">
	@csrf
	<label>Name</label><input type="text" name="name" id="name"><br><br>
	<label>Email</label><input type="text" name="email" id="email"><br><br>
	<label>Password</label><input type="password" name="password" id="password"><br><br>
	<button type="submit">Submit</button>
</form>