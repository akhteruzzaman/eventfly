
<div class="offcanvas offcanvas-end customeoff" tabindex="-1" id="offcanvasExample1">
	<div class="offcanvas-header">
		<h5 class="modal-title" id="#gridSystemModal1">Add New Event</h5>
		<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
			<i class="fa-solid fa-xmark"></i>
		</button>
	</div>

	<div class="offcanvas-body">
		<div class="container-fluid">
			<form action="{{ route('add.event') }}" method="post">
			@csrf
			@sessionToken
			<input type="hidden" name="host" value="{{getHost()}}">
			<input type="hidden" id="event_id_input" name="event_id">
				<div class="row">
					<div class="col-xl-6 mb-3">
						<label for="exampleFormControlInputfirst" class="form-label">Event Title<span class="text-danger">*</span></label>
						<input type="text" name="event_title" class="form-control" id="exampleFormControlInputfirst" placeholder="Title" required>
					</div>	
					<div class="col-xl-6 mb-3">
						<label class="form-label">Event Type<span class="text-danger">*</span></label>
						<select name="event_type" class="default-select style-1 form-control" required>
							<option  data-display="Select">Event Type</option>
							<option value="Festival">Festival</option>
							<option value="Seasonal">Seasonal</option>
							<option value="Special Day">Special Day</option>
							<option value="Holiday">Holiday</option>
						</select>
					</div>
					
					<div class="col-xl-12 mb-3">
						<label class="form-label">Event Details<span class="text-danger">*</span></label>
						<textarea rows="3" name="event_details" class="form-control" required></textarea>
					</div>

					<div class="col-xl-6 mb-3">
						<label for="exampleFormControlInputthree" class="form-label">Start Date<span class="text-danger">*</span></label>
						<input type="date" name="start_date" class="form-control" id="exampleFormControlInputthree" required>
					</div>
					<div class="col-xl-6 mb-3">
						<label for="exampleFormControlInputfour" class="form-label">End Date<span class="text-danger">*</span></label>
						<input type="date" name="end_date" class="form-control" id="exampleFormControlInputfour" required>
					</div>
					
					
					<div class="col-xl-6 mb-3">
						<label class="form-label">Priority<span class="text-danger">*</span></label>
						<select name="priority" class="default-select style-1 form-control" required>
							<option  data-display="Select">Priority</option>
							<option value="Hight">Hight</option>
							<option value="Medium">Medium</option>
							<option value="Low">Low</option>
						</select>
					</div>

					<div class="col-xl-6 mb-3">
						<label class="form-label">Product<span class="text-danger">*</span></label>
						<select name="discount_code" class="default-select style-1 form-control" required>
							@foreach($discountCodesList as $discountCode)
								<option value="{{ $discountCode['code'] }}">{{ $discountCode['code'] }}</option>
							@endforeach
						</select>
					</div>

				</div>
				<div>
					<input type="submit" class="btn btn-primary me-1" value="Add This Event">
				</div>
			</form>
		</div>
	</div>
</div>	


		