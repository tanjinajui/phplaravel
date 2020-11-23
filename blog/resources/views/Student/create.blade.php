@include('includes.header')
<!-- container-fluid -->
        <div class="container-fluid">
          <!-- Basic Card Example -->
              <div class="card shadow mb-4">
                <div class="row">
                	<div class="col-12 text-center">
                		<div class="p-5 m-auto" style="max-width:600px">
                			<div class="heading text-center">
                				<h1 class="h4 text-gray-900 mb-4">Create New Students!</h1>
                                 <h3><a href="/students">View All Students</a></h3>
                			</div>
                           <!-- include message page -->
                            @include('messages.message')
                			<form action="/students" method="POST">
                                {{csrf_field()}}
                                <!-- student_id field -->
                				<div class="form-group">
                					<input type="text" name="student_id" class="form-control" id="student_id" placeholder="Student ID">
                				</div>
                                <!-- student_name field -->
                                <div class="form-group">
                                    <input type="text" name="student_name" class="form-control" id="student_name" placeholder="Student Name">
                                </div> 
                                <div class="form-group">
                                          <select class="form-control" name="student_department">
                                            <option>Please Select Department</option>
                                            <option value="CSE">CSE</option>
                                              <option value="BCE">BCE</option>
                                              <option value="BME">BME</option>
                                              <option value="FDT">FDT</option>
                                              <option value="TEX">TEX</option>
                                          </select>
                                        </div>
                                <!-- student_address field -->
                                <div class="form-group">
                                    <input type="text" name="student_address" class="form-control" id="student_address" placeholder="Student Address" >
                                </div> 
                                <!-- student_email field -->
                                <div class="form-group">
                                    <input type="email" name="student_email" class="form-control" id="student_email" placeholder="Student Email" >
                                </div>
                				<!-- student_mobile field -->
                                <div class="form-group">
                                    <input type="text" name="student_mobile" class="form-control" placeholder="Student Mobile">
                                </div>
                				<input type="submit" name="create_student" class="btn btn-primary btn-user btn-block mt-5" value="Create Student">
                			</form>
                		</div>
                	</div>

                </div>
              </div>

            </div>
 		</div>
        @include('includes.footer')