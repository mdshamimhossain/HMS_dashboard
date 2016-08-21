<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.php'; ?>

        <div id="page-wrapper">

            <div class="container-fluid">
                
                <div class="container">
                  <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#Patient_List">Nurse List</a></li>
                  </ul>

				  <div class="row">
                    <div class="col-lg-11">
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


                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Photo</th>
                                        <th>Nurse Name</th>
                                        <th>Department</th>
                                        <th>Mobile No</th>
                                        <th>Nurse Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><img class="img-circle" style="height:50px; width:50px; " src="http://www.w3schools.com/bootstrap/cinqueterre.jpg" alt=""></td>
                                        <td>Scott Moberly</td>
                                        <td>Nurse</td>
                                        <td>8565895625</td>
                                        <td>scott.12@gmail.com</td>
                                    </tr>
                                </tbody>
                                     <thead>
                                    <tr>
                                        <th>Photo</th>
                                        <th>Nurse Name</th>
                                        <th>Department</th>
                                        <th>Mobile No</th>
                                        <th>Nurse Email</th>
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
</div>
</div>
<?php include 'inc/footer.php' ?>