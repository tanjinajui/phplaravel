<!-- include message page -->
                         @include('messages.message')
                        
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 ">
                            
                            </div>
                        </div>
                    </div>

    <!-- User role Field-->
                                        <div class="form-group">
                                           <label for = "user_role">User Role</label>
                                          <select class="form-control" name="user_role">
                                            <option>Please Select User Role</option>
                                            <option value="0">Administrtor</option>
                                              <option value="1">Editor</option>
                                              <option value="2">Users</option>
                                          </select>
                                        </div>