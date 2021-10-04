<?php require_once('../private/initialize.php'); ?>

<?php $page_title = 'Login'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Login</title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <link rel="icon" href="../assets/img/icon.ico" type="image/x-icon" />

  <!-- Fonts and icons -->
  <script src="../assets/js/plugin/webfont/webfont.min.js"></script>
  <script>
    WebFont.load({
      google: {
        "families": ["Lato:300,400,700,900"]
      },
      custom: {
        "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
        urls: ['../assets/css/fonts.min.css']
      },
      active: function() {
        sessionStorage.fonts = true;
      }
    });
  </script>

  <!-- CSS Files -->
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/atlantis.css">
</head>

<body class="login">
  <div class="wrapper wrapper-login">
    <div class="container container-login animated fadeIn">
      <div class="col-lg-12">
        <div id="showAlertLogin"></div>
      </div>

      <h3 class="text-center">Sign In To Admin</h3>
      <div class="login-form">
        <form id="loginAdmin">
          <div class="form-group form-floating-label">
            <input id="email-login" name="email" type="text" class="form-control input-border-bottom" required>
            <label for="email" class="placeholder">Email</label>
          </div>
          <div class="form-group form-floating-label">
            <input id="password1" name="password" type="password" class="form-control input-border-bottom" required>
            <label for="password" class="placeholder">Password</label>
            <div class="show-password">
              <i class="icon-eye"></i>
            </div>
          </div>
          <div class="row form-sub m-0">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="rememberme">
              <label class="custom-control-label" for="rememberme">Remember Me</label>
            </div>
            <a href="#" class="link float-right">Forget Password ?</a>
          </div>
          <div class="form-action mb-3">
            <input type="submit" value="Sign In" class="btn btn-primary btn-rounded btn-login" id="login-admin">
          </div>
        </form>
        <div class="login-account">
          <span class="msg">Don't have an account yet ?</span>
          <a href="#" id="show-signup" class="link">Sign Up</a>
        </div>
      </div>
    </div>

    <div class="container container-signup animated fadeIn">
      <div class="col-lg-12">
        <div id="showAlert"></div>
      </div>
      <h3 class="text-center">Sign Up</h3>
      <div class="row">
        <div class="col-md-12">
          <form id="registrationValidation">
            <div class="row">
              <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="form-group form-show-validation ">
                  <label for="name">First Name <span class="required-label">*</span></label>
                  <div>
                    <input type="text" class="form-control" id="fname" name="first_name" placeholder="First Name" required>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="form-group form-show-validation">
                  <label for="name">Last Name <span class="required-label">*</span></label>
                  <div>
                    <input type="text" class="form-control" id="lname" name="last_name" placeholder="Last Name" required>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="form-group form-show-validation">
                  <label for="email">Email Address <span class="required-label">*</span></label>
                  <div>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" required>
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="form-group form-show-validation">
                  <label for="email">Phone Number <span class="required-label">*</span></label>
                  <div>
                    <input type="tel" class="form-control" id="tel" name="phone" placeholder="Enter Phone Number" required>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="form-group form-show-validation">
                  <label for="password">Password <span class="required-label">*</span></label>
                  <div>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" required>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="form-group form-show-validation">
                  <label for="confirm_password">Confirm Password <span class="required-label">*</span></label>
                  <div>
                    <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Enter Password" required>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="form-group form-show-validation">
                  <label>Gender <span class="required-label">*</span></label>
                  <div class=" d-flex align-items-center">
                    <div class="custom-control custom-radio">
                      <input type="radio" id="male" name="gender" value="male" class="custom-control-input">
                      <label class="custom-control-label" for="male">Male</label>
                    </div>
                    <div class="custom-control custom-radio">
                      <input type="radio" id="female" name="gender" value="female" class="custom-control-input">
                      <label class="custom-control-label" for="female">Female</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="d-flex justify-content-center align-items-center text-center">
              <div class="form-group form-show-validation">
                <label>Upload Image <span class="required-label">*</span></label>
                <div>
                  <div class="input-file input-file-image">
                    <img class="img-upload-preview img-circle" width="100" height="100" src="http://placehold.it/100x100" alt="preview">
                    <input type="file" class="form-control form-control-file" id="avatar" name="avatar" accept="image/*" required>
                    <label for="avatar" class="btn btn-primary btn-round btn-lg"><i class="fa fa-file-image"></i> Upload a Image</label>
                  </div>
                </div>
              </div>
            </div>

            <div class="form-check">
              <div class="row">
                <div class=" d-flex align-items-center">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="agree" name="terms" value="1" required>
                    <label class="custom-control-label" for="agree">Agree with terms and conditions</label>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <a href="#" id="show-signin" class="btn btn-danger btn-link btn-login mr-3">Login</a>
                <input class="btn btn-success" type="submit" value="Submit" id="add-user-btn">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script src="../assets/js/core/jquery.3.2.1.min.js"></script>
  <script src="../assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugin/jquery.validate/jquery.validate.min.js"></script>
  <script src="../assets/js/plugin/sweetalert/sweetalert.min.js"></script>
  <script src="../assets/js/atlantis.min.js"></script>

  <script>
    // validation when inputfile change
    $("#avatar").on("change", function() {
      $(this).parent('form').validate();
    })

    $("#registrationValidation").validate({
      validClass: "success",
      rules: {
        gender: {
          required: true
        },
        confirm_password: {
          equalTo: "#password"
        },
        avatar: {
          required: true,
        },
      },
      highlight: function(element) {
        $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
      },
      success: function(element) {
        $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
      },
    });

    var DOMAIN = 'http://localhost/cmb/admin';

    const addForm = document.getElementById("registrationValidation");
    addForm.addEventListener("submit", async (e) => {
      e.preventDefault();
      e.stopPropagation();

      const formData = new FormData(addForm);
      formData.append("add", 1);

      document.getElementById("add-user-btn").value = "Please Wait...";

      const data = await fetch("../inc/register.inc", {
        method: "POST",
        body: formData,
      });

      const response = await data.text();
      const res = JSON.parse(response)

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
          },
        });
        document.getElementById("add-user-btn").value = "Submit";
        addForm.reset();
      }

      // fetchAllUsers();
    });

    const loginAdmin = document.getElementById("loginAdmin");
    loginAdmin.addEventListener("submit", async (e) => {
      e.preventDefault();
      e.stopPropagation();

      const formData = new FormData(loginAdmin);
      formData.append("login", 1);

      document.getElementById("login-admin").value = "Please Wait...";

      const data = await fetch("../inc/register.inc", {
        method: "POST",
        body: formData,
      });

      const response = await data.text();
      const res = JSON.parse(response)

      console.log(res.errors);
      if (res.errors) {
        showAlertLogin.innerHTML = res.errors;
      }

      if (res.message) {
        swal("Success!", res.message, {
          icon: "success",
          buttons: {
            confirm: {
              className: 'btn btn-success'
            }
          },
        });
        document.getElementById("login-admin").value = "Sign in";
        window.location.href = encodeURI(DOMAIN + '/dashboard');
        loginAdmin.reset();
      }

      // fetchAllUsers();
    });























    // const addForm = document.getElementById("add-user-form");
    // const updateForm = document.getElementById("edit-user-form");
    // const showAlert = document.getElementById("showAlert");
    // const addModal = new bootstrap.Modal(document.getElementById("addNewUserModal"));
    // const editModal = new bootstrap.Modal(document.getElementById("editUserModal"));
    // const tbody = document.querySelector("tbody");

    // // Add New User Ajax Request
    // addForm.addEventListener("submit", async (e) => {
    //   e.preventDefault();

    //   const formData = new FormData(addForm);
    //   formData.append("add", 1);

    //   if (addForm.checkValidity() === false) {
    //     e.preventDefault();
    //     e.stopPropagation();
    //     addForm.classList.add("was-validated");
    //     return false;
    //   } else {
    //     document.getElementById("add-user-btn").value = "Please Wait...";

    //     const data = await fetch("action.php", {
    //       method: "POST",
    //       body: formData,
    //     });
    //     const response = await data.text();
    //     showAlert.innerHTML = response;
    //     document.getElementById("add-user-btn").value = "Add User";
    //     addForm.reset();
    //     addForm.classList.remove("was-validated");
    //     addModal.hide();
    //     fetchAllUsers();
    //   }
    // });

    // // Fetch All Users Ajax Request
    // const fetchAllUsers = async () => {
    //   const data = await fetch("action.php?read=1", {
    //     method: "GET",
    //   });
    //   const response = await data.text();
    //   tbody.innerHTML = response;
    // };
    // fetchAllUsers();

    // // Edit User Ajax Request
    // tbody.addEventListener("click", (e) => {
    //   if (e.target && e.target.matches("a.editLink")) {
    //     e.preventDefault();
    //     let id = e.target.getAttribute("id");
    //     editUser(id);
    //   }
    // });

    // const editUser = async (id) => {
    //   const data = await fetch(`action.php?edit=1&id=${id}`, {
    //     method: "GET",
    //   });
    //   const response = await data.json();
    //   document.getElementById("id").value = response.id;
    //   document.getElementById("fname").value = response.first_name;
    //   document.getElementById("lname").value = response.last_name;
    //   document.getElementById("email").value = response.email;
    //   document.getElementById("phone").value = response.phone;
    // };

    // // Update User Ajax Request
    // updateForm.addEventListener("submit", async (e) => {
    //   e.preventDefault();

    //   const formData = new FormData(updateForm);
    //   formData.append("update", 1);

    //   if (updateForm.checkValidity() === false) {
    //     e.preventDefault();
    //     e.stopPropagation();
    //     updateForm.classList.add("was-validated");
    //     return false;
    //   } else {
    //     document.getElementById("edit-user-btn").value = "Please Wait...";

    //     const data = await fetch("action.php", {
    //       method: "POST",
    //       body: formData,
    //     });
    //     const response = await data.text();

    //     showAlert.innerHTML = response;
    //     document.getElementById("edit-user-btn").value = "Add User";
    //     updateForm.reset();
    //     updateForm.classList.remove("was-validated");
    //     editModal.hide();
    //     fetchAllUsers();
    //   }
    // });

    // // Delete User Ajax Request
    // tbody.addEventListener("click", (e) => {
    //   if (e.target && e.target.matches("a.deleteLink")) {
    //     e.preventDefault();
    //     let id = e.target.getAttribute("id");
    //     deleteUser(id);
    //   }
    // });

    // const deleteUser = async (id) => {
    //   const data = await fetch(`action.php?delete=1&id=${id}`, {
    //     method: "GET",
    //   });
    //   const response = await data.text();
    //   showAlert.innerHTML = response;
    //   fetchAllUsers();
    // };
  </script>

  <style>
    .input-file.input-file-image img.img-upload-preview {
      margin: 15px auto;
    }

    .login {
      background: #efefee;
    }

    .login .wrapper.wrapper-login {
      display: flex;
      justify-content: center;
      align-items: center;
      height: unset;
      padding: 15px;
    }

    .login .wrapper.wrapper-login .container-login,
    .login .wrapper.wrapper-login .container-signup {
      width: 60%;
      padding: 60px 25px;
      border-radius: 5px;
    }

    .login .wrapper.wrapper-login .container-login:not(.container-transparent),
    .login .wrapper.wrapper-login .container-signup:not(.container-transparent) {
      background: #fff;
      -webkit-box-shadow: 0 0.75rem 1.5rem rgba(18, 38, 63, 0.03);
      -moz-box-shadow: 0 0.75rem 1.5rem rgba(18, 38, 63, 0.03);
      box-shadow: 0 0.75rem 1.5rem rgba(18, 38, 63, 0.03);
      border: 1px solid #ebecec;
    }

    .login .wrapper.wrapper-login .container-login h3,
    .login .wrapper.wrapper-login .container-signup h3 {
      font-size: 19px;
      font-weight: bold;
      margin-bottom: 25px;
    }

    .login .wrapper.wrapper-login .container-login .form-sub,
    .login .wrapper.wrapper-login .container-signup .form-sub {
      align-items: center;
      justify-content: space-between;
      padding: 8px 10px;
    }

    .login .wrapper.wrapper-login .container-login .btn-login,
    .login .wrapper.wrapper-login .container-signup .btn-login {
      padding: 15px 0;
      width: 135px;
    }

    .login .wrapper.wrapper-login .container-login .form-action,
    .login .wrapper.wrapper-login .container-signup .form-action {
      text-align: center;
      padding: 25px 10px 0;
    }

    .login .wrapper.wrapper-login .container-login .form-action-d-flex,
    .login .wrapper.wrapper-login .container-signup .form-action-d-flex {
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .login .wrapper.wrapper-login .container-login .login-account,
    .login .wrapper.wrapper-login .container-signup .login-account {
      padding-top: 10px;
      text-align: center;
    }

    .login .wrapper.wrapper-login .container-signup .form-action {
      display: flex;
      justify-content: center;
    }

    .login .wrapper.wrapper-login-full {
      justify-content: unset;
      align-items: unset;
      padding: 0 !important;
    }

    .login .login-aside {
      padding: 25px;
    }

    .login .login-aside .title {
      font-size: 36px;
    }

    .login .login-aside .subtitle {
      font-size: 18px;
    }

    .login .show-password {
      position: absolute;
      right: 20px;
      top: 50%;
      transform: translateY(-50%);
      font-size: 20px;
      cursor: pointer;
    }

    .login .custom-control-label {
      white-space: nowrap;
    }

    @media screen and (max-width: 576px) {
      .form-action-d-flex {
        flex-direction: column;
        align-items: start !important;
      }

      .login .wrapper-login-full {
        flex-direction: column;
      }

      .login .login-aside {
        width: 100% !important;
      }

      .login .login-aside .title {
        font-size: 24px;
      }

      .login .login-aside .subtitle {
        font-size: 16px;
      }
    }

    @media screen and (max-width: 399px) {
      .wrapper-login {
        padding: 15px !important;
      }

      .container-login {
        width: 100% !important;
        padding: 60px 15px !important;
      }
    }
  </style>
</body>

</html>