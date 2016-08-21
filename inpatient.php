<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.php'; ?>

        <div id="page-wrapper">

            <div class="container-fluid">

			



<div class="container">
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#Patient_List">Patient List</a></li>
    <li><a data-toggle="tab" href="#Add_Patient">Add Patient</a></li>
    <li><a data-toggle="tab" href="#Add_New_Patient_Step_2">Add New Patient Step-2</a></li>
    <li><a data-toggle="tab" href="#Add_New_Patient_Step_3">Add New Patient Step-3</a></li>
  </ul>

  <div class="tab-content">

    <!--==========================================Start of Patient List Menu (Menu 1)=================================-->
    <div id="Patient_List" class="tab-pane fade in active">
      <div class="row">
                    <div class="col-lg-12">
                       <div class="row">
                              <div class="row">
                            <div class="dataTables_length pull-left" id="patient_list_length">
                               
                                <label><h5>Show </h5>
                                    <select name="patient_list_length" aria-controls="patient_list" class="form-control">
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select> <h5>entries</h5>
                                </label>
                            </div>

                            <div id="patient_list_filter" class="dataTables_filter pull-right">
                                <label>Search:
                                    <input type="search" class="form-control" placeholder="" aria-controls="patient_list">
                                </label>
                                <br><button type="button" class="btn btn-primary">Search</button>
                            </div>
                        </div>
                        
                        </div>

                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Photo</th>
                                        <th>Doctor Name</th>
                                        <th>Department</th>
                                        <th>Specialization</th>
                                        <th>Degree</th>
                                        <th>Doctor Email</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><img class="img-circle" style="height:50px; width:50px; " src="http://www.w3schools.com/bootstrap/cinqueterre.jpg" alt=""></td>
                                        <td>Fernando Therrien</td>
                                        <td>Surgen</td>
                                        <td>7</td>
                                        <td>MD</td>
                                        <td>abcd@gmail.com</td>
                                       <td>
                                            <a href="#" class="view-profile btn btn-default" idtest="2"><i class="fa fa-eye"></i> View Profile</a>
                                            <a href="#" class="view-profile btn btn-default" idtest="2"><i class="fa fa-eye"></i> Charges</a><br>
                                            <a href="#" class="view-profile btn btn-default" idtest="2"><i class="fa fa-eye"></i> Edit</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><img class="img-circle" style="height:50px; width:50px; " src="http://www.w3schools.com/bootstrap/cinqueterre.jpg" alt=""></td>
                                        <td>Fernando Therrien</td>
                                        <td>Surgen</td>
                                        <td>7</td>
                                        <td>MD</td>
                                        <td>abcd@gmail.com</td>
                                        <td>
                                            <a href="#" class="view-profile btn btn-default" idtest="2"><i class="fa fa-eye"></i> View Profile</a>
                                            <a href="#" class="view-profile btn btn-default" idtest="2"><i class="fa fa-eye"></i> Charges</a><br>
                                            <a href="#" class="view-profile btn btn-default" idtest="2"><i class="fa fa-eye"></i> Edit</a>
                                        </td>
                                    </tr>
       
                                </tbody>
                            </table>

                           
                            <div class="dataTables_paginate paging_simple_numbers" id="doctor_list_paginate">
                            <button type="button" class="btn btn-info">Previous
                            <a class="paginate_button previous disabled" aria-controls="doctor_list" data-dt-idx="0" tabindex="0" id="doctor_list_previous"></a></button>
                            <span>  <button type="button" class="btn btn-info">1<a class="paginate_button current" aria-controls="doctor_list" data-dt-idx="1" tabindex="0"></a>  </button></span>
                              <button type="button" class="btn btn-info">Next<a class="paginate_button next disabled" aria-controls="doctor_list" data-dt-idx="2" tabindex="0" id="doctor_list_next"> </button></a>
                            </div>


                        </div>
                    </div>
                </div>

    </div>

<!--==========================================End of Patient List Menu (Menu 1)================================-->

 
<!--==========================================Start of Add Patient Menu (Menu 2)=================================-->
    <div id="Add_Patient" class="tab-pane fade">
       <div class="row">
                    <div class="col-lg-10">

                    <form role="form " class="form-horizontal">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Patient Id*</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">First Name*</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Middle Name</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Last Name*</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Gender</label>
                            <div class="col-sm-10">
                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>Male
                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">Female
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Date of birth*</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Home Town Address*</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">City*</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">State</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Country</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Zip Code*</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Mobile Number*</label>
                            <div class="col-sm-10 input-group">
                            <span class="input-group-addon">+88</span>
                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label"> Phone
                            </label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Email*</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">User Name*</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Password*</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="inputEmail3" placeholder="Email">
                            </div>
                        </div>
                        
                        
                        <div class="form-group">
                             <label for="inputEmail3" class="col-sm-2 control-label">Image</label>
                             <div class="col-sm-10">
                                 <input type="file">
                            </div>
                           
                        </div>

                         <button type="submit" class="btn btn-default">Save and Next Step</button>
                        <button type="reset" class="btn btn-default">Reset</button>          

                        </form>

                    </div>
        </div>
</div>
        <!--==========================================End of Add Patient Menu (Menu 2)=================================-->

        <!--==========================================Start of Add Patient Menu (Menu 3)=================================-->
       <div id="Add_New_Patient_Step_2" class="tab-pane fade">
       <div class="row">
                    <div class="col-lg-10">

                    <form role="form " class="form-horizontal">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Guardian Id</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">First Name*</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Last Name*</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Gender*</label>
                            <div class="col-sm-10">
                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>Male
                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">Female
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Home Town Address*</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">City*</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Mobile Number*</label>
                            <div class="col-sm-10 input-group">
                            <span class="input-group-addon">+88</span>
                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label"> Phone
                            </label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Relation With Patient*</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group">
                             <label for="inputEmail3" class="col-sm-2 control-label">Image</label>
                             <div class="col-sm-10">
                                 <input type="file">
                            </div>
                           
                        </div>
                        <a data-toggle="tab" href="#Add_Patient"><input type="button" name="Go to Previous step" value="Go to Previous step" class="btn btn-default" /></a>

                         <button type="submit" class="btn btn-default">Save and Next Step</button>
                        <button type="reset" class="btn btn-default">Reset</button>

                        </form>

                    </div>
        </div>
</div>
        <!--==========================================End of Add Patient Menu (Menu 3)=================================-->

        <!--==========================================Start of Add Patient Menu (Menu 4)=================================-->

    <div id="Add_New_Patient_Step_3" class="tab-pane fade">
       <div class="row">
                    <div class="col-lg-10">

                    <form role="form " class="form-horizontal">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Admit Date*</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Admit Time*</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                            </div>
                        </div>
    
                          <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Patient Status*</label>
                                <div class="col-sm-10">
                                <select class="form-control">
                                    <option>Admit</option>
                                    <option>Under Treatment</option>
                                    <option>Operation</option>
                                    <option>Recovery</option>
                                    <option>Cured</option>
                                    <option>Dischurged</option>
                                    <option>Death</option>
                                </select>
                                   </div>
                            </div>
                       

                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Symptoms*</label>
                                <div class="col-sm-10">
                                <textarea class="form-control" rows="3"></textarea>
                                </div>
                            </div>

                        <div class="dataTables_paginate paging_simple_numbers" id="doctor_list_paginate">
                            <a data-toggle="tab" href="#Add_Patient"><input type="button" name="Go to Previous step" value="Go to Previous step" class="btn btn-default" /></a>

                         <button type="submit" class="btn btn-default">Save and Next Step</button>
                        <button type="reset" class="btn btn-default">Reset</button>
                            </div>
                   

                        </form>

                    </div>
        </div>
</div>

            <!--==========================================End of Add Patient Menu (Menu 4)=================================-->
  </div>
</div>


<?php include 'inc/footer.php' ?>