@include('includes.header')
<!-- container-fluid -->
<div class="container-fluid">
    <!-- Basic Card Example -->
         <div class="card shadow mb-4">
             <div class="row">
                <div class="col-12 text-center">
                    <div class="p-5 m-auto" style="max-width:600px">
                    	<div class="heading text-center">
                    		<h1 class="h4 text-gray-900 mb-4">All Students View!</h1>
                    	</div>
                        <div class="col-12">
                            <div class="allstudentviewtable">
                                @include('messages.message')
                            <!-- database table data show starts -->
                            <table class="table allstudentviewtable table-striped">
                              <thead class="thead-dark">
                                <tr>
                                  <th scope="col">SL.</th>
                                  <th scope="col">Student id</th>
                                  <th scope="col">Student name</th>
                                  <th scope="col">Student address</th>
                                  <th scope="col">Student email</th>
                                  <th scope="col">Action</th>
                                </tr>
                              </thead>
                              <?php $i = $students->perPage().($students->currentPage()-1); ?>
                              <!-- foreach loops database er data show -->
                              @foreach($students as $key=>$data_show)
                              <tbody>
                                <tr>
                                  <td>{{++$i}}</td>
                                  <td>{{$data_show->student_id}}</td>
                                  <td>{{$data_show->student_name}}</td>
                                  <td>{{$data_show->student_address}}</td>
                                  <td>{{$data_show->student_email}}</td>
                                  <td><a href="/students/{{$data_show->id}}/edit">Edit</a>|<a href="/students/delete/{{$data_show->id}}" onclick="return confirm('Are you sure?')">Delete</a></td>
                                </tr>
                              </tbody>
                              @endforeach
                            </table>
                             <!-- page paginate add -->
        {{$students->links()}} 
    <!-- database table show ends -->
     <a href="/students/create" class="btn btn-primary">Add New Students</a>

    </div>
                        </div>
                </div>
            </div>
        </div>
        </div>
    </div>
 </div>
        @include('includes.footer')