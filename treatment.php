<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.php'; ?>

        <div id="page-wrapper">

            <div class="container-fluid">

			



<div class="container">
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#Patient_List">Treatment List</a></li>
    <li><a data-toggle="tab" href="#Add_Patient">Add Treatment</a></li>
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
                                        <th style="width:700px;">Treatment Name</th>
                                        <th>Price</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Md. Emtiaz Zahid</td>
                                        <td>31000</td>
                                       <td>
                                            <a href="#" class="view-profile btn btn-info" idtest="2"> Edit</a>
                                            <a href="#" class="view-profile btn btn-danger" idtest="2">Delete</a><br>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Md.Shamim Hossain</td>
                                        <td>0</td>
                                        <td>
                                            <a href="#" class="view-profile btn btn-info" idtest="2"> Edit</a>
                                            <a href="#" class="view-profile btn btn-danger" idtest="2">Delete</a><br>
                                        </td>
                                    </tr><tr>
                                        <td>Atia Parvin</td>
                                        <td>5000</td>
                                        <td>
                                            <a href="#" class="view-profile btn btn-info" idtest="2"> Edit</a>
                                           <a href="#" class="view-profile btn btn-danger" idtest="2">Delete</a><br>
                                        </td>
                                    </tr><tr>
                                        <td>Md. Emtiaz Zahid</td>
                                        <td>0</td>
                                        <td>
                                            <a href="#" class="view-profile btn btn-info" idtest="2"> Edit</a>
                                            <a href="#" class="view-profile btn btn-danger" idtest="2">Delete</a><br>
                                        </td>
                                    </tr><tr>
                                        <td>Md.Shamim Usman</td>
                                        <td>7000</td>
                                        <td>
                                            <a href="#" class="view-profile btn btn-info" idtest="2"> Edit</a>
                                            <a href="#" class="view-profile btn btn-danger" idtest="2">Delete</a><br>
                                        </td>
                                    </tr>
       
                                </tbody>
                                <thead>
                                    <tr>
                                        <th>Treatment Name</th>
                                        <th>Price</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
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
                            <label for="inputEmail3" class="col-sm-2 control-label">Treatment Name*</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputEmail3" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Treatment Price</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputEmail3">
                            </div>
                        </div>
                         <button type="submit" class="btn btn-info">Add Treatment</button>
                        <button type="reset" class="btn btn-default">Reset</button>          
                        </form>

                    </div>
        </div>
</div>
        <!--==========================================End of Add Patient Menu (Menu 2)=================================-->

  </div>
</div>


<?php include 'inc/footer.php' ?>