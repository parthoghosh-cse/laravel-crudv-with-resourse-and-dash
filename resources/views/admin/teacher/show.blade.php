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

	<div class="wrap shadow">
        <div class="card">
            <div class="card-body">
                <h2 style="text-align:center" >Teacher Profile</h2>
                <img style="width:300px; height:300px; border-radius: 50%; margin:50px auto; display:block;" src="{{URL::to('/')}}/media/teacher/{{$view_data->photo}}" alt="">
                <h1 style="text-align:center" >{{$view_data->name}}</h1>

                <table class="table">
                    <tr>
                        <td>Name :</td>
                        <td>{{$view_data->name}}</td>
                    </tr>
                    <tr>
                        <td>Email : </td>
                        <td>{{$view_data->email}}</td>
                    </tr>
                  
                    <tr>
                        <td>Cell :</td>
                        <td>{{$view_data->cell}}</td>
                    </tr>
                    <tr>
                        <td>Location :</td>
                        <td>{{$view_data->location}}</td>
                    </tr>
                    <tr>
                        <td>Gender :</td>
                        <td>{{$view_data->gender}}</td>
                    </tr>
                </table>
                <a id="back" class="btn btn-primary btn-sm" href="{{route('teacher.index')}}">Back</a>
            </div>
        </div>
    
    </div>


</div>
	
@endsection