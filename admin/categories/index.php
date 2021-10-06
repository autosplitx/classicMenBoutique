<?php
require_once('../../private/initialize.php');
require_login();

$page_title = 'CMB | Categories'; ?>

<title><?php echo h($page_title); ?></title>

<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div class="content">
  <div class="page-inner">
    <div class="page-header">
      <h4 class="page-title">Categories</h4>
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
          <a href="#">Categories</a>
        </li>
      </ul>
    </div>
    <div class="page-category">
      <div class="row">
        <div id="showAlert"></div>
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <div class="d-flex align-items-center">
                <h4 class="card-title">Add Product Categories</h4>
                <button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#categoryModal">
                  <i class="fa fa-plus"></i>
                  Add Category
                </button>
              </div>
            </div>
            <div class="card-body">
              <!-- Modal -->
              <div class="modal fade" id="categoryModal" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header no-bd">
                      <h5 class="modal-title">
                        <span class="fw-mediumbold">
                          New</span>
                        <span class="fw-light">
                          Category
                        </span>
                      </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <form id="add-category-form">
                      <div class="modal-body">
                        <p class="small">Create a new category, make sure you fill them all</p>
                        <div class="row">
                          <div class="col-sm-12">
                            <div class="form-group form-group-default form-show-validation">
                              <label>Name <span class="required-label">*</span></label>
                              <input id="categoryName" type="text" name="name" class="form-control" placeholder="Category name" required>
                            </div>
                          </div>
                          <div class="col-sm-12">
                            <div class="form-group form-group-default">
                              <label>Description</label>
                              <input id="categoryDescription" type="text" name="description" class="form-control" placeholder="Category description" required>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="categoryImage">Example file input</label>
                              <input type="file" name="image_url" class="form-control form-control-file" id="categoryImage">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer no-bd">
                        <input class="btn btn-primary" type="submit" value="Add" id="add-category-btn">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>

              <div class="table-responsive">
                <table id="add-category-table" class="display table table-striped table-hover">
                  <thead>
                    <tr>
                      <th>SN</th>
                      <th>Upload</th>
                      <th>Name</th>
                      <th>Description</th>
                      <th>Created At</th>
                      <th style="width: 10%">Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>SN</th>
                      <th>Upload</th>
                      <th>Name</th>
                      <th>Description</th>
                      <th>Created At</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php $sn = 1;
                    foreach (Category::find_all() as $cat) : ?>
                      <tr>
                        <td><?php echo $sn++ ?></td>
                        <td class="d-flex justify-content-center align-items-center"><img src="../../private/upload/<?php echo $cat->image_url ?>" class="avatar-sm rounded-circle" alt="<?php echo $cat->name ?>"></td>
                        <td><?php echo $cat->name ?></td>
                        <td><?php echo $cat->description ?></td>
                        <td><?php echo date('Y-m-d', strtotime($cat->created_at)) ?></td>
                        <td>
                          <div class="form-button-action">
                            <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task" id="<?php echo $cat->id ?>">
                              <i class="fa fa-edit"></i>
                            </button>
                            <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove" id="<?php echo $cat->id ?>">
                              <i class="fa fa-times"></i>
                            </button>
                          </div>
                        </td>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>

<script>
  $(document).ready(function() {
    const URL = "../../inc/category.inc";
    // const tbody = document.querySelector("tbody");

    $('#add-category-table').DataTable({
      "pageLength": 5,
    });

    $("#add-category-form").validate({
      validClass: "success",
      highlight: function(element) {
        $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
      },
      success: function(element) {
        $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
      },
    });

    const addCategoryForm = document.getElementById("add-category-form");
    addCategoryForm.addEventListener("submit", async (e) => {
      e.preventDefault();

      console.log(e);
      const formData = new FormData(addCategoryForm);
      formData.append("add", 1);

      if (addCategoryForm.checkValidity() === false) {
        e.preventDefault();
        e.stopPropagation();
        addCategoryForm.classList.add("was-validated");
        return false;
      } else {
        document.getElementById("add-category-btn").value = "Please Wait...";

        const response = await fetch('../../inc/category.inc', {
          method: "POST",
          body: formData,
        });
        const res = await response.json();

        if (res.errors) {
          showAlert.innerHTML = res.errors;
        }

        if (res.message) {
          swal("Success!", res.message, {
            icon: "success",
            buttons: {
              confirm: {
                className: 'btn btn-success'
              }
            }
          }).then(function() {
            location.reload();
          });

          document.getElementById("add-category-btn").value = "Add Category";
          addCategoryForm.reset();
          addCategoryForm.classList.remove("was-validated");
          $('#categoryModal').modal('hide');
          // fetchAllCategories();
        }
      }
    });


    // const fetchAllCategories = async () => {
    //   const data = await fetch(URL + ".php?fetchData=1", {
    //     method: "GET",
    //   });
    //   const response = await data.text();
    //   tbody.innerHTML = response;
    // };

    // fetchAllCategories();

  });
</script>