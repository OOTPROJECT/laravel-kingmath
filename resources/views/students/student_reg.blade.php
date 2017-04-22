@extends('layouts.app')
@extends('layouts.partials.scripts')

@section('htmlheader_title')
การสมัครเรียน
@endsection

@section('contentheader_title')
การสมัครเรียน
@endsection

@section('main-content')

<div class="box">
	<div class="box-header with-border">
		<h3 class="box-title"></h3>
	</div>
	<div class="box-body">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">ข้อมูลผู้สมัคร</h3>
			</div>
			<div class="panel-body">
				<form action="{{ url('/student') }}" method="post">
					{!! csrf_field() !!}
					@if(count($errors))
					<div class="alert alert-danger">
						<strong>Whoops!</strong> There were some problems with your input.
						<br/>
						<ul>
							@foreach($errors->all() as $error)
							<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
					@endif

				</br>

				<div class="row">
					<span class="col-sm-2 col-md-2 text-right">ชื่อ </span>
					<div class="col-sm-4 col-md-4 text-right">
						<div class="form-group {{ $errors->has('firstname') ? 'has-error' : '' }}">
							<input type="text" name="firstname" class="form-control"placeholder="" value="{{ old('firstname') }}">

						</div>
					</div>
					<span class="col-sm-2 col-md-2 text-right">นามสกุล </span>
					<div class="col-sm-4 col-md-4 text-right">
						<div class="form-group {{ $errors->has('lastname') ? 'has-error' : '' }}">
							<input type="text" name="lastname" class="form-control"
							placeholder="" value="{{ old('lastname') }}">

						</div>
					</div>
				</div>
				<div class="row">
					<span class="col-sm-2 col-md-2 text-right">ชื่อเล่น</span>
					<div class="col-sm-10 col-md-4 text-left">
						<div class="form-group {{ $errors->has('nickname') ? 'has-error' : '' }}">
							<input type="text" name="nickname" class="form-control"
							placeholder="" value="{{ old('nickname') }}">

						</div>
					</div>
				</div>
				<div class="row">
					<span class="col-sm-2 col-md-2 text-right">วันเดือนปีเกิด</span>
					<div class="col-sm-10 col-md-4 text-left">
						<div class="form-group {{ $errors->has('std_birthdate') ? 'has-error' : '' }}">
							<div id="datepicker" class="input-group date" data-date-format="yyyy-mm-dd">
								<input class="form-control" type="text" name="std_birthdate" readonly />
								<span class="input-group-addon">
									<i class="glyphicon glyphicon-calendar"></i>
								</span>
							</div>

						</div>
					</div>


				</div><br>
				<div class="row"><span class="col-sm-2 col-md-2 text-right">เพศ</span>
					<div class="col-sm-11 col-md-3 text-center"> <div class="form-group {{ $errors->has('gender') ? 'has-error' : '' }}">
						<label class="radio-inline"> <input type="radio" name="optradio">&nbsp;&nbsp;ชาย &nbsp;&nbsp;&nbsp;
						</label>
						<label class="radio-inline">
							<input type="radio" name="optradio">  หญิง&nbsp;&nbsp;&nbsp;
						</label></div>
					</div>
				</div>
				<br>
				<div class="row"><span class="col-sm-2 col-md-2 text-right">ชื่อสถานศึกษา</span>
					<div class="col-sm-4 col-md-4 text-center"> <div class="form-group {{ $errors->has('schoolname') ? 'has-error' : '' }}">
						<input type='text' name="schoolname" class="form-control text-left" placeholder="" value="{{ old('schoolname') }}" /></div></div>
						<div class="col-sm-2 col-md-2 text-right">จังหวัด</div>
						<div class="col-sm-4 col-md-4 text-center">
							<div class="form-group {{ $errors->has('schoolname') ? 'has-error' : '' }}">
								<select class="form-control">
								</select></div>
							</div>
						</div>

						<div class="row">
							<span class="col-sm-2 col-md-2 text-right">ชั้นประถมศึกษาปีที่ </span>
							<div class="col-sm-4 col-md-4 text-center"> <div class="form-group {{ $errors->has('school_level') ? 'has-error' : '' }}">
								<input type="text" class="form-control" placeholder="" value="{{ old('school_level') }}">
							</div></div>
						</div>
						<div class="row"><span class="col-sm-2 col-md-2 text-right">ชื่อผู้ปกครอง  </span>
							<div class="col-sm-4 col-md-4 text-center">
								<div class="form-group {{ $errors->has('parent_fname') ? 'has-error' : '' }}">
									<input type="text"  class="form-control" placeholder="" value="{{ old('parent_fname') }}">
								</div>
							</div>

							<span class="col-sm-2 col-md-2 text-right">นามสกุล </span>

							<div class="col-sm-4 col-md-4 text-center"><div class="form-group {{ $errors->has('parent_lname') ? 'has-error' : '' }}">
								<input type="text"  class="form-control" placeholder="" value="{{ old('parent_lname') }}">
							</div>
						</div>
					</div>
					<div class="row"><span class="col-sm-2 col-md-2 text-right">ความสัมพันธ์กับนักเรียน</span>
						<div class="col-sm-4 col-md-4 text-center"> <div class="form-group {{ $errors->has('student_relationship') ? 'has-error' : '' }}">

							<input type="text"  class="form-control" placeholder="" value="{{ old('student_relationship') }}">
						</div>
					</div></div>
					<div class="row"><span class="col-sm-2 col-md-2 text-right">วันเดือนปีเกิด</span>
						<div class="col-sm-4 col-md-4 text-left">
							<div class="form-group {{ $errors->has('parent_birthdate') ? 'has-error' : '' }}">

								<div id="datepicker1" class="input-group date" data-date-format="yyyy-mm-dd">
									<input class="form-control" type="text" name="std_birthdate" readonly />
									<span class="input-group-addon">
										<i class="glyphicon glyphicon-calendar"></i>
									</span>
								</div>





							</div>
						</div>


					<span class="col-sm-2 col-md-2 text-right">อาชีพ</span>
					<div class="col-sm-4 col-md-4 text-center"> <div class="form-group {{ $errors->has('parent_occupation') ? 'has-error' : '' }}">
						<input type='text' class="form-control" name="parent_occupation" placeholder="" value="{{ old('parent_occupation') }}"  /></div>
					</div></div>

					<div class="row"><span class="col-sm-2 col-md-2 text-right">บ้านเลขที่</span>
						<div class="col-sm-4 col-md-4 text-left"><div class="form-group {{ $errors->has('addr') ? 'has-error' : '' }}">
							<input type='text' class="form-control" name="addr" placeholder="" value="{{ old('addr') }}" /></div>
						</div>

						<span class="col-sm-2 col-md-2 text-right">ซอย</span>
						<div class="col-sm-4 col-md-4 text-center">
							<input type='text' class="form-control"  /></div>
						</div>
						<div class="row"><span class="col-sm-2 col-md-2 text-right">ถนน</span>
							<div class="col-sm-4 col-md-4 text-left">
								<input type='text' class="form-control"  /></div>

								<span class="col-sm-2 col-md-2 text-right">จังหวัด</span>
								<div class="col-sm-4 col-md-4 text-center"> <div class="form-group {{ $errors->has('province_id') ? 'has-error' : '' }}">
									<select class="form-control">
									</select></div>
								</div></div>

								<div class="row">
									<span class="col-sm-2 col-md-2 text-right">อำเภอ/เขต</span>
									<div class="col-sm-4 col-md-4 text-left">
										<div class="form-group {{ $errors->has('teacher_lname') ? 'has-error' : '' }}">
											<select class="form-control">
											</select></div>
										</div>
										<span class="col-sm-2 col-md-2 text-right">ตำบล/แขวง</span>
										<div class="col-sm-4 col-md-4 text-center">
											<select class="form-control">
											</select></div>
										</div>

										<div class="row"><span class="col-sm-2 col-md-2 text-right">รหัสไปรษณีย์</span>
											<div class="col-sm-4 col-md-4 text-left"><div class="form-group {{ $errors->has('postcode') ? 'has-error' : '' }}">
												<input type='text' class="form-control" name="postcode" placeholder="" value="{{ old('postcode') }}"  /></div>
											</div>

											<span class="col-sm-2 col-md-2 text-right">อีเมล</span>
											<div class="col-sm-4 col-md-4 text-center"><div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
												<input type='text' class="form-control" name="email" placeholder="" value="{{ old('email') }}"  /></div>
											</div>
										</div>
										<div class="row"><span class="col-sm-2 col-md-2 text-right">เบอร์โทรศัพท์</span>
											<div class="col-sm-4 col-md-4 text-left"><div class="form-group {{ $errors->has('mobile') ? 'has-error' : '' }}">
												<input type='text' class="form-control" name="mobile" placeholder="" value="{{ old('mobile') }}"  /></div>
											</div>

											<span class="col-sm-2 col-md-2 text-right">เบอร์บ้าน</span>
											<div class="col-sm-4 col-md-4 text-center"><div class="form-group {{ $errors->has('tel') ? 'has-error' : '' }}">
												<input type='text' class="form-control" name="tel" placeholder="" value="{{ old('tel') }}"  />
											</div></div>
											<br><br>
											<div class="row">
												<div class="col-sm-12 col-md-12"></div>
												<div class="col-sm-12 col-md-12 text-center">
													<button type="submit" class="btn btn-primary">บันทีก</button>
													<button type="submit" class="btn">รีเซ็ต</button>
												</div>
											</div>
										</div>
									</form></div>
								</div>
							</div>

						</div>
						@endsection
