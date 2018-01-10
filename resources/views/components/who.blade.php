@if(Auth::guard('web')->check())
	<p class=" h1 text-success bg-success">
		You are Logged In as a <strong>USER</strong>
	</p>
@else
	<p class="bg-danger h1 text-danger">
		You are Logged Out as a <strong>USER</strong>
	</p>
@endif

@if(Auth::guard('admin')->check())
	<p class="bg-success h1 text-success">
		You are Logged In as a <strong>ADMIN</strong>
	</p>
@else
	<p class="bg-danger h1 text-danger">
		You are Logged Out as a <strong>ADMIN</strong>
	</p>
@endif
