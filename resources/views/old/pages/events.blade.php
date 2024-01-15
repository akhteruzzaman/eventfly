@extends('layouts.master')

@section('title', 'Events')

@section('contents')


<div class="content-body">
	<!-- row -->	
	<div class="page-titles">
		<ol class="breadcrumb">
			<li><h5 class="bc-title">Events</h5></li>
			<li class="breadcrumb-item"><a href="javascript:void(0)">
				<svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M2.125 6.375L8.5 1.41667L14.875 6.375V14.1667C14.875 14.5424 14.7257 14.9027 14.4601 15.1684C14.1944 15.4341 13.8341 15.5833 13.4583 15.5833H3.54167C3.16594 15.5833 2.80561 15.4341 2.53993 15.1684C2.27426 14.9027 2.125 14.5424 2.125 14.1667V6.375Z" stroke="#2C2C2C" stroke-linecap="round" stroke-linejoin="round"/>
					<path d="M6.375 15.5833V8.5H10.625V15.5833" stroke="#2C2C2C" stroke-linecap="round" stroke-linejoin="round"/>
				</svg>
				Home </a>
			</li>
			<li class="breadcrumb-item active"><a href="javascript:void(0)">Events</a></li>
		</ol>
		<a class="text-primary fs-13" data-bs-toggle="offcanvas" href="#offcanvasExample1" role="button" aria-controls="offcanvasExample1">+ Add Event</a>
	</div>
	<div class="container-fluid">
		<div class="row">			
					
				<div class="col-xl-12">
					<div class="card">
						<div class="card-body p-0">
							<div class="table-responsive active-projects style-1">
								<div class="tbl-caption">
									<h4 class="heading mb-0">Event</h4>
									<div>
										<a class="btn btn-primary btn-sm" data-bs-toggle="offcanvas" href="#offcanvasExample1" role="button" aria-controls="offcanvasExample1">+ Add New Event</a>
									
										<button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal1">
											+ Add Event Type
										</button>
									</div>
								</div>
								@if(session('success'))
									<div class="alert alert-success">
										{{ session('success') }}
									</div>
								@endif
								<table id="empoloyees-tblwrapper" class="table">
									<thead>
										<tr>
											<th>ID</th>
											<th>Event Title</th>                           
											<th>Type</th>
											<th>Start</th>
											<th>End</th>
											<th>Discount Code</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody> 
										@foreach($events as $event)
										<tr>
											<td><span>{{$event->id}}</span></td>
											<td>
												<div class="products">                                   
													<div>
														<h6>{{$event->event_title}}</h6>
													</div>	
												</div>
											</td>
											<td><span class="text-primary">{{$event->event_type}}</span></td>
											<td><span class="text-primary">{{$event->start_date}}</span></td>
											<td><span class="text-primary">{{$event->end_date}}</span></td>											
											<td><span class="text-primary">{{$event->discount_code}}</span></td>
											<td>
												<div>
													<a href="{{ URL::tokenRoute('event-update-data', ['id' => $event->id]) }}" class="badge badge-success border-0">
														<i class="fas fa-edit"></i>
													</a>

													<form action="{{ route('delete.event', ['id' => $event->id]) }}" method="post" class="d-inline">
														@csrf
														@method('delete')
														@sessionToken
														<button type="submit" class="badge badge-danger border-0" class="badge badge-success border-0">
															<i class="fas fa-trash-alt"></i>
														</button>
													</form>
												</div>
											</td>
										</tr> 
										@endforeach
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				
		</div>
	</div>
</div>



@endsection

@section('scripts')
    @parent

    <script>
        actions.TitleBar.create(app, { title: 'Dashboard' });
    </script>
@endsection