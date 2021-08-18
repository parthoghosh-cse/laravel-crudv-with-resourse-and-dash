@extends('admin.layouts.app')


@section('main')
<div class="content container-fluid">
					
	<!-- Page Header -->
	<div class="page-header">
		<div class="row">
			<div class="col-sm-12">
				<h3 class="page-title">Welcome Admin!</h3>
				<ul class="breadcrumb">
					<li class="breadcrumb-item active">Dashboard</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- /Page Header -->
    <div class="row">
        <div class="col-xl-6 d-flex">
            <div class="card flex-fill">
                <div class="card-header">
                    <h4 class="card-title">Edit Staff {{ $edit_data->name}}</h4>
                </div>
                <div class="card-body">
                    <form action="{{route('staff.update', $edit_data->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
						@method('PUT')
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label"> Name</label>
                            <div class="col-lg-9">
                                <input name="name" type="text" value="{{ $edit_data->name}}" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label">Email</label>
                            <div class="col-lg-9">
                                <input name="email" type="email" value="{{ $edit_data->email}}" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label">Cell</label>
                            <div class="col-lg-9">
                                <input name="cell" type="text" value="{{ $edit_data->cell}}" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label">Location</label>
                            <div class="col-lg-9">
                                <select name="location" class="form-control" tabindex="-1" aria-hidden="true">
                                    
                                    <option @if($edit_data-> location =='') @endif >Select</option>
                                    <option @if($edit_data-> location =='mirpur') selected  @endif  value="mirpur">Mirpur</option>
                                    <option @if($edit_data-> location =='shyamoli') selected  @endif value="shyamoli">Shyamoli</option>
                                    <option @if($edit_data-> location =='dhanmondi') selected  @endif value="dhanmondi">Dhanmondi</option>
                                    <option @if($edit_data-> location =='badda') selected  @endif  value="badda">Badda</option>
                                    <option @if($edit_data-> location =='uttra') selected  @endif value="uttra">Uttra</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label">Gender</label>
                            <div class="col-lg-9">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input"  @if( $edit_data->gender == 'male') checked @endif  type="radio" name="gender" id="gender_male" value="male" checked="">
                                    <label class="form-check-label"  for="gender_male">
                                    Male
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" @if($edit_data->gender == 'female') checked @endif  type="radio" name="gender" id="gender_female" value="female">
                                    <label class="form-check-label"  for="gender_female">
                                    Female
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">

                            <label class="col-lg-3 col-form-label"></label>
							<br>
							
                            <div class="col-lg-9">
								<input name="old_photo" type="hidden" value="{{$edit_data->photo}}">
                                <img style="width:200px;" src="{{ URL::to('media/staff/' . $edit_data->photo)}}" alt="">
                            </div>
                        </div>
						<div class="form group row">
							<label class="col-lg-3 col-form-label">Photo</label>
							<input name="new_photo" type="file" class="form-control">
						</div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
    </div>

</div>
	
@endsection