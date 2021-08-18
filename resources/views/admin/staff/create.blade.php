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
                    <h4 class="card-title">Add new staff</h4>
                </div>
                <div class="card-body">
                    <form action="{{route('staff.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label"> Name</label>
                            <div class="col-lg-9">
                                <input name="name" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label">Email</label>
                            <div class="col-lg-9">
                                <input name="email" type="email" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label">Cell</label>
                            <div class="col-lg-9">
                                <input name="cell" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label">Location</label>
                            <div class="col-lg-9">
                                <select name="location" class="form-control" tabindex="-1" aria-hidden="true">
                                    <option>Select</option>
                                    <option value="mirpur">Mirpur</option>
                                    <option value="shyamoli">Shyamoli</option>
                                    <option value="dhanmondi">Dhanmondi</option>
                                    <option value="badda">Badda</option>
                                    <option value="uttra">Uttra</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label">Gender</label>
                            <div class="col-lg-9">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="gender_male" value="male" checked="">
                                    <label class="form-check-label" for="gender_male">
                                    Male
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="gender_female" value="female">
                                    <label class="form-check-label" for="gender_female">
                                    Female
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label">Photo</label>
                            <div class="col-lg-9">
                                <input name="photo" type="file" class="form-control">
                            </div>
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