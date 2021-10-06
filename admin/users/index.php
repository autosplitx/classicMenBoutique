<?php
require_once('../../private/initialize.php');
require_login();

$page_title = 'CMB | Users'; ?>

<title><?php echo h($page_title); ?></title>

<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div class="content">
  <div class="page-inner">
    <div class="page-header">
      <h4 class="page-title">Users</h4>
      <ul class="breadcrumbs">
        <li class="nav-home">
          <a href="#">
            <i class="flaticon-home"></i>
          </a>
        </li>
        <li class="separator">
          <i class="flaticon-right-arrow"></i>
        </li>
        <li class="nav-item">
          <a href="#">Pages</a>
        </li>
        <li class="separator">
          <i class="flaticon-right-arrow"></i>
        </li>
        <li class="nav-item">
          <a href="#!">Users</a>
        </li>
      </ul>
    </div>
    <div class="page-category">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <div class="d-flex align-items-center">
                <h4 class="card-title">Add Users</h4>
                <button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
                  <i class="fa fa-plus"></i>
                  Add User
                </button>
              </div>
            </div>
            <div class="card-body">
              <!-- Modal -->
              <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header no-bd">
                      <h5 class="modal-title">
                        <span class="fw-mediumbold">
                          New</span>
                        <span class="fw-light">
                          User
                        </span>
                      </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <p class="small">Create a new user, make sure you fill them all</p>
                      <form>
                        <div class="row">
                          <div class="col-sm-12">
                            <div class="form-group form-group-default">
                              <label>Name</label>
                              <input id="addName" type="text" class="form-control" placeholder="fill name">
                            </div>
                          </div>
                          <div class="col-md-6 pr-0">
                            <div class="form-group form-group-default">
                              <label>Position</label>
                              <input id="addPosition" type="text" class="form-control" placeholder="fill position">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group form-group-default">
                              <label>Office</label>
                              <input id="addOffice" type="text" class="form-control" placeholder="fill office">
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                    <div class="modal-footer no-bd">
                      <button type="button" id="addRowButton" class="btn btn-primary">Add</button>
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="table-responsive">
                <table id="usersTable" class="display table table-striped table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Gender</th>
                      <th>Role</th>
                      <th>Created At</th>
                      <th style="width: 10%">Action</th>
                    </tr>
                  </thead>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<style>
  .table td,
  .table th {
    padding: .375rem .75rem !important;
  }

  td {
    height: 0 !important;
  }
</style>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>

<script>
  $(document).ready(function() {
    const fetchAllUsers = async () => {
      const data = await fetch("../../inc/users.inc", {
        method: "GET",
      });
      const response = await data.json();
      let users = response.data

      var table = $('#usersTable').DataTable({
        "processing": true,
        "pageLength": 5,
        dom: 'Bfrtip',
        buttons: ['excel', 'pdf', 'print'],

        data: users,

        "columnDefs": [{
          "targets": -1,
          "data": null,
          "defaultContent": '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="Edit Task" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="Remove" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>',
          // "defaultContent": '<input id="check" type="checkbox">'
        }],

        "columns": [{
            "data": "id"
          },
          {
            "data": "first_name"
          },
          {
            "data": "last_name"
          },
          {
            "data": "email"
          },
          {
            "data": "phone"
          },
          {
            "data": "gender"
          },
          {
            "data": "role_id"
          },
          {
            "data": "created_at"
          },
          {
            "data": null
          },
        ],

      });

      $('#usersTable tbody').on('click', '.fa-edit', function() {
        var data = table.row($(this).parents('tr')).data();
        console.log("clicked on edit btn " + data.id);
      });

      $('#usersTable tbody').on('click', '.fa-times', function() {
        var data = table.row($(this).parents('tr')).data();
        console.log("clicked on delete btn " + data.id);
      });
    };

    fetchAllUsers();
  });
</script>