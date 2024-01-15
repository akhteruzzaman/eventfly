@extends('layouts.master')

@section('title', 'Events')

@section('contents')


<div class="content-body">
	<!-- row -->	
	<div class="page-titles">
		<ol class="breadcrumb">
			<li><h5 class="bc-title">Update Events</h5></li>
			<li class="breadcrumb-item"><a href="javascript:void(0)">
				<svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M2.125 6.375L8.5 1.41667L14.875 6.375V14.1667C14.875 14.5424 14.7257 14.9027 14.4601 15.1684C14.1944 15.4341 13.8341 15.5833 13.4583 15.5833H3.54167C3.16594 15.5833 2.80561 15.4341 2.53993 15.1684C2.27426 14.9027 2.125 14.5424 2.125 14.1667V6.375Z" stroke="#2C2C2C" stroke-linecap="round" stroke-linejoin="round"/>
					<path d="M6.375 15.5833V8.5H10.625V15.5833" stroke="#2C2C2C" stroke-linecap="round" stroke-linejoin="round"/>
				</svg>
				Home </a>
			</li>
			<li class="breadcrumb-item active"><a href="javascript:void(0)">Events</a></li>
		</ol>
		<a class="text-primary fs-13" data-bs-toggle="offcanvas" href="#offcanvasExample1" role="button" aria-controls="offcanvasExample1">+ Add Task</a>
	</div>
	<div class="container-fluid">
		<div class="row">
			
			<form action="{{ route('add.event') }}" method="post">
            @csrf
			@sessionToken
			<input type="hidden" name="host" value="{{getHost()}}">
			<input type="hidden" name="id" value="{{$event->id}}">

                <div class="col-xl-6 mb-3">
                    <label for="exampleFormControlInputfirst" class="form-label">Event Title<span class="text-danger">*</span></label>
                    <input type="text" value="{{ old('event_title', $event->event_title) }}" name="event_title" class="form-control" id="exampleFormControlInputfirst" placeholder="Title" required>
                </div>

                <div class="col-xl-6 mb-3">
                    <label class="form-label">Event Type<span class="text-danger">*</span></label>
                    <select name="event_type" class="default-select style-1 form-control" required>
                        <option data-display="Select">Event Type</option>
                        <option value="Festival" {{ old('event_type', $event->event_type) == 'Festival' ? 'selected' : '' }}>Festival</option>
                        <option value="Seasonal" {{ old('event_type', $event->event_type) == 'Seasonal' ? 'selected' : '' }}>Seasonal</option>
                        <option value="Special Day" {{ old('event_type', $event->event_type) == 'Special Day' ? 'selected' : '' }}>Special Day</option>
                        <option value="Holiday" {{ old('event_type', $event->event_type) == 'Holiday' ? 'selected' : '' }}>Holiday</option>
                    </select>
                </div>

                <div class="col-xl-12 mb-3">
                    <label class="form-label">Event Details<span class="text-danger">*</span></label>
                    <textarea rows="3" name="event_details" class="form-control" required>{{ old('event_details', $event->event_details) }}</textarea>
                </div>

                <div class="col-xl-6 mb-3">
                    <label for="exampleFormControlInputthree" class="form-label">Start Date<span class="text-danger">*</span></label>
                    <input type="date" name="start_date" class="form-control" id="exampleFormControlInputthree" value="{{ old('start_date', $event->start_date) }}" required>
                </div>

                <div class="col-xl-6 mb-3">
                    <label for="exampleFormControlInputfour" class="form-label">End Date<span class="text-danger">*</span></label>
                    <input type="date" name="end_date" class="form-control" id="exampleFormControlInputfour" value="{{ old('end_date', $event->end_date) }}" required>
                </div>

                <div class="col-xl-6 mb-3">
                    <label class="form-label">Priority<span class="text-danger">*</span></label>
                    <select name="priority" class="default-select style-1 form-control" required>
                        <option data-display="Select">Priority</option>
                        <option value="High" {{ old('priority', $event->priority) == 'High' ? 'selected' : '' }}>High</option>
                        <option value="Medium" {{ old('priority', $event->priority) == 'Medium' ? 'selected' : '' }}>Medium</option>
                        <option value="Low" {{ old('priority', $event->priority) == 'Low' ? 'selected' : '' }}>Low</option>
                    </select>
                </div>

                <div class="col-xl-6 mb-3">
                    <label class="form-label">Discount Code<span class="text-danger">*</span></label>
                    <select name="discount_code" class="default-select style-1 form-control" required>
                        <option data-display="Select">Discount Code</option>
                        @foreach($discountCodesList as $discountCode)
                            <option value="{{ $discountCode['code'] }}" {{ old('discount_code', $event->discount_code) == $discountCode['code'] ? 'selected' : '' }}>
                                {{ $discountCode['code'] }}
                            </option>
                        @endforeach
                    </select>
                </div>

				<div>
					<input type="submit" class="btn btn-primary me-1" value="Update This Event">
				</div>
			</form>
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