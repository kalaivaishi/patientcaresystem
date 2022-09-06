<h1>Calculating Due</h1>
<form method="post" action="{{url('save_example')}}">
	@csrf
	<label>Interest Rate</label>
	<input type="text" name="interest_rate">
	<label>Principle Balance</label>
	<input type="text" name="principle_balance">
	<label>Period</label>
	<input type="text" name="period">
	<button type="submit">Submit</button>
</form>

@if(isset($due))
<input type="text" name="" value="{{$due}}">
@endif