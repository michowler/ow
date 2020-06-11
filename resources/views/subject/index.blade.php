@extends('layout.main_layout')
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="header">
					<h4 class="title">My Subjects</h4>
				</div>

				<div class="content">
					<form>
						<div class="row">
							<div class="col-md-12">    					
								<table class="table table-borderless">
									<tbody>
										<tr>
											<th>ID</th>
											<th>Name</th>
										</tr>
										@foreach($subjects as $subject)
										<tr>
											<td>{{ $subject->id }}</td>
											<td>{{ $subject->name }}</td>
										</tr>
										@endforeach
									</tbody>
								</table>
							</div>
						</div>                                                                      
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
