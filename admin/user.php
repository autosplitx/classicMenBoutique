<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Forms - Atlantis Bootstrap 4 Admin Dashboard</title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <link rel="icon" href="../assets/img/mainlogo.jpg" type="image/x-icon" />

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

  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/atlantis.css">
</head>

<body>
  <div class="wrapper">

    <div class="main-panel">
      <div class="container">
        <div class="page-inner">
          <div class="page-header">
            <h4 class="page-title">Form Validation</h4>
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
                <a href="#">Forms</a>
              </li>
              <li class="separator">
                <i class="flaticon-right-arrow"></i>
              </li>
              <li class="nav-item">
                <a href="#">Form Validation</a>
              </li>
            </ul>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <div class="card-title">jQuery Validation</div>
                  <div class="card-category">Form validation with jQuery from <a href="https://jqueryvalidation.org/">jQuery Validate</a></div>
                </div>
                <form id="exampleValidation">
                  <div class="card-body">
                    <div class="form-group form-show-validation row">
                      <label for="name" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Name <span class="required-label">*</span></label>
                      <div class="col-lg-4 col-md-9 col-sm-8">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Username" required>
                      </div>
                    </div>
                    <div class="form-group form-show-validation row">
                      <label for="username" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Username <span class="required-label">*</span></label>
                      <div class="col-lg-4 col-md-9 col-sm-8">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="username-addon">@</span>
                          </div>
                          <input type="text" class="form-control" placeholder="username" aria-label="username" aria-describedby="username-addon" id="username" name="username" required>
                        </div>
                      </div>
                    </div>
                    <div class="form-group form-show-validation row">
                      <label for="email" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Email Address <span class="required-label">*</span></label>
                      <div class="col-lg-4 col-md-9 col-sm-8">
                        <input type="email" class="form-control" id="email" placeholder="Enter Email" required>
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                      </div>
                    </div>
                    <div class="form-group form-show-validation row">
                      <label for="password" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Password <span class="required-label">*</span></label>
                      <div class="col-lg-4 col-md-9 col-sm-8">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" required>
                      </div>
                    </div>
                    <div class="form-group form-show-validation row">
                      <label for="confirmpassword" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Confirm Password <span class="required-label">*</span></label>
                      <div class="col-lg-4 col-md-9 col-sm-8">
                        <input type="password" class="form-control" id="confirmpassword" name="confirmpassword" placeholder="Enter Password" required>
                      </div>
                    </div>
                    <div class="separator-solid"></div>
                    <div class="form-group form-show-validation row">
                      <label class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Gender <span class="required-label">*</span></label>
                      <div class="col-lg-4 col-md-9 col-sm-8 d-flex align-items-center">
                        <div class="custom-control custom-radio">
                          <input type="radio" id="male" name="gender" class="custom-control-input">
                          <label class="custom-control-label" for="male">Male</label>
                        </div>
                        <div class="custom-control custom-radio">
                          <input type="radio" id="female" name="gender" class="custom-control-input">
                          <label class="custom-control-label" for="female">Female</label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group form-show-validation row">
                      <label for="birth" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Birth <span class="required-label">*</span></label>
                      <div class="col-lg-4 col-md-9 col-sm-8">
                        <div class="input-group">
                          <input type="text" class="form-control" id="birth" name="birth" required>
                          <div class="input-group-append">
                            <span class="input-group-text">
                              <i class="fa fa-calendar-alt"></i>
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group form-show-validation row">
                      <label for="birth" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">State <span class="required-label">*</span></label>
                      <div class="col-lg-4 col-md-9 col-sm-8">
                        <div class="select2-input">
                          <select id="state" name="state" class="form-control" required>
                            <option value="">&nbsp;</option>
                            <optgroup label="Alaskan/Hawaiian Time Zone">
                              <option value="AK">Alaska</option>
                              <option value="HI">Hawaii</option>
                            </optgroup>
                            <optgroup label="Pacific Time Zone">
                              <option value="CA">California</option>
                              <option value="NV">Nevada</option>
                              <option value="OR">Oregon</option>
                              <option value="WA">Washington</option>
                            </optgroup>
                            <optgroup label="Mountain Time Zone">
                              <option value="AZ">Arizona</option>
                              <option value="CO">Colorado</option>
                              <option value="ID">Idaho</option>
                              <option value="MT">Montana</option>
                              <option value="NE">Nebraska</option>
                              <option value="NM">New Mexico</option>
                              <option value="ND">North Dakota</option>
                              <option value="UT">Utah</option>
                              <option value="WY">Wyoming</option>
                            </optgroup>
                            <optgroup label="Central Time Zone">
                              <option value="AL">Alabama</option>
                              <option value="AR">Arkansas</option>
                              <option value="IL">Illinois</option>
                              <option value="IA">Iowa</option>
                              <option value="KS">Kansas</option>
                              <option value="KY">Kentucky</option>
                              <option value="LA">Louisiana</option>
                              <option value="MN">Minnesota</option>
                              <option value="MS">Mississippi</option>
                              <option value="MO">Missouri</option>
                              <option value="OK">Oklahoma</option>
                              <option value="SD">South Dakota</option>
                              <option value="TX">Texas</option>
                              <option value="TN">Tennessee</option>
                              <option value="WI">Wisconsin</option>
                            </optgroup>
                            <optgroup label="Eastern Time Zone">
                              <option value="CT">Connecticut</option>
                              <option value="DE">Delaware</option>
                              <option value="FL">Florida</option>
                              <option value="GA">Georgia</option>
                              <option value="IN">Indiana</option>
                              <option value="ME">Maine</option>
                              <option value="MD">Maryland</option>
                              <option value="MA">Massachusetts</option>
                              <option value="MI">Michigan</option>
                              <option value="NH">New Hampshire</option>
                              <option value="NJ">New Jersey</option>
                              <option value="NY">New York</option>
                              <option value="NC">North Carolina</option>
                              <option value="OH">Ohio</option>
                              <option value="PA">Pennsylvania</option>
                              <option value="RI">Rhode Island</option>
                              <option value="SC">South Carolina</option>
                              <option value="VT">Vermont</option>
                              <option value="VA">Virginia</option>
                              <option value="WV">West Virginia</option>
                            </optgroup>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="separator-solid"></div>
                    <div class="form-group form-show-validation row">
                      <label class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Upload Image <span class="required-label">*</span></label>
                      <div class="col-lg-4 col-md-9 col-sm-8">
                        <div class="input-file input-file-image">
                          <img class="img-upload-preview img-circle" width="100" height="100" src="http://placehold.it/100x100" alt="preview">
                          <input type="file" class="form-control form-control-file" id="uploadImg" name="uploadImg" accept="image/*" required>
                          <label for="uploadImg" class="btn btn-primary btn-round btn-lg"><i class="fa fa-file-image"></i> Upload a Image</label>
                        </div>
                      </div>
                    </div>
                    <div class="form-check">
                      <div class="row">
                        <label class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Agree <span class="required-label">*</span></label>
                        <div class="col-lg-4 col-md-9 col-sm-8 d-flex align-items-center">
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="agree" name="agree" required>
                            <label class="custom-control-label" for="agree">Agree with terms and conditions</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-action">
                    <div class="row">
                      <div class="col-md-12">
                        <a href="#" id="show-signin" class="btn btn-danger btn-link btn-login mr-3">Cancel</a>
                        <input class="btn btn-success" type="submit" value="Validate">
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

        <div class="page-inner">
          <div class="page-header">
            <h4 class="page-title">Multiple Upload</h4>
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
                <a href="#">Forms</a>
              </li>
              <li class="separator">
                <i class="flaticon-right-arrow"></i>
              </li>
              <li class="nav-item">
                <a href="#">Multiple Upload</a>
              </li>
            </ul>
          </div>
          <div class="card">
            <div class="card-header">
              <div class="card-title">Dropzone</div>
            </div>
            <div class="card-body">
              <form action="upload.php" class="dropzone" id="upload-form">
                <div class="dz-message" data-dz-message>
                  <div class="icon">
                    <i class="flaticon-file"></i>
                  </div>
                  <h4 class="message">Drag and Drop files here</h4>
                  <div class="note">(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</div>
                </div>
                <div class="fallback">
                  <input name="file" type="file" multiple />
                </div>

                <button type="submit" class="btn btn-sm btn-primary">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="../assets/js/core/jquery.3.2.1.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
  <script src="../assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
  <script src="../assets/js/plugin/moment/moment.min.js"></script>
  <script src="../assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
  <script src="../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
  <script src="../assets/js/plugin/datepicker/bootstrap-datetimepicker.min.js"></script>
  <script src="../assets/js/plugin/select2/select2.full.min.js"></script>
  <script src="../assets/js/plugin/jquery.validate/jquery.validate.min.js"></script>
  <script src="../assets/js/plugin/dropzone/dropzone.min.js"></script>
  <script src="../assets/js/atlantis.min.js"></script>



  <style>
    /* SELECT2 */
    /* Select2 */
    .select2-container {
      box-sizing: border-box;
      display: inline-block;
      margin: 0;
      position: relative;
      vertical-align: middle;
    }

    .select2-container .select2-selection--single {
      box-sizing: border-box;
      cursor: pointer;
      display: block;
      height: 28px;
      user-select: none;
      -webkit-user-select: none;
    }

    .select2-container .select2-selection--single .select2-selection__rendered {
      display: block;
      padding-left: 8px;
      padding-right: 20px;
      overflow: hidden;
      text-overflow: ellipsis;
      white-space: nowrap;
    }

    .select2-container .select2-selection--single .select2-selection__clear {
      position: relative;
    }

    .select2-container[dir="rtl"] .select2-selection--single .select2-selection__rendered {
      padding-right: 8px;
      padding-left: 20px;
    }

    .select2-container .select2-selection--multiple {
      box-sizing: border-box;
      cursor: pointer;
      display: block;
      min-height: 32px;
      user-select: none;
      -webkit-user-select: none;
    }

    .select2-container .select2-selection--multiple .select2-selection__rendered {
      display: inline-block;
      overflow: hidden;
      padding-left: 8px;
      text-overflow: ellipsis;
      white-space: nowrap;
    }

    .select2-container .select2-search--inline {
      float: left;
    }

    .select2-container .select2-search--inline .select2-search__field {
      box-sizing: border-box;
      border: none;
      font-size: 100%;
      margin-top: 5px;
      padding: 0;
    }

    .select2-container .select2-search--inline .select2-search__field::-webkit-search-cancel-button {
      -webkit-appearance: none;
    }

    .select2-dropdown {
      background-color: white;
      border: 1px solid #aaa;
      border-radius: 4px;
      box-sizing: border-box;
      display: block;
      position: absolute;
      left: -100000px;
      width: 100%;
      z-index: 1051;
    }

    .select2-results {
      display: block;
    }

    .select2-results__options {
      list-style: none;
      margin: 0;
      padding: 0;
    }

    .select2-results__option {
      padding: 6px;
      user-select: none;
      -webkit-user-select: none;
    }

    .select2-results__option[aria-selected] {
      cursor: pointer;
    }

    .select2-container--open .select2-dropdown {
      left: 0;
    }

    .select2-container--open .select2-dropdown--above {
      border-bottom: none;
      border-bottom-left-radius: 0;
      border-bottom-right-radius: 0;
    }

    .select2-container--open .select2-dropdown--below {
      border-top: none;
      border-top-left-radius: 0;
      border-top-right-radius: 0;
    }

    .select2-search--dropdown {
      display: block;
      padding: 5px 10px;
    }

    .select2-search--dropdown .select2-search__field {
      padding: 4px;
      width: 100%;
      box-sizing: border-box;
    }

    .select2-search--dropdown .select2-search__field::-webkit-search-cancel-button {
      -webkit-appearance: none;
    }

    .select2-search--dropdown.select2-search--hide {
      display: none;
    }

    .select2-close-mask {
      border: 0;
      margin: 0;
      padding: 0;
      display: block;
      position: fixed;
      left: 0;
      top: 0;
      min-height: 100%;
      min-width: 100%;
      height: auto;
      width: auto;
      opacity: 0;
      z-index: 99;
      background-color: #fff;
      filter: alpha(opacity=0);
    }

    .select2-hidden-accessible {
      border: 0 !important;
      clip: rect(0 0 0 0) !important;
      -webkit-clip-path: inset(50%) !important;
      clip-path: inset(50%) !important;
      height: 1px !important;
      overflow: hidden !important;
      padding: 0 !important;
      position: absolute !important;
      width: 1px !important;
      white-space: nowrap !important;
    }

    .select2-container--default .select2-selection--single {
      background-color: #fff;
      border: 1px solid #aaa;
      border-radius: 4px;
    }

    .select2-container--default .select2-selection--single .select2-selection__rendered {
      color: #444;
      line-height: 28px;
    }

    .select2-container--default .select2-selection--single .select2-selection__clear {
      cursor: pointer;
      float: right;
      font-weight: bold;
    }

    .select2-container--default .select2-selection--single .select2-selection__placeholder {
      color: #999;
    }

    .select2-container--default .select2-selection--single .select2-selection__arrow {
      height: 26px;
      position: absolute;
      top: 1px;
      right: 1px;
      width: 20px;
    }

    .select2-container--default .select2-selection--single .select2-selection__arrow b {
      border-color: #888 rgba(0, 0, 0, 0.3) rgba(0, 0, 0, 0.3) rgba(0, 0, 0, 0.3);
      border-style: solid;
      border-width: 5px 4px 0 4px;
      height: 0;
      left: 50%;
      margin-left: -4px;
      margin-top: -2px;
      position: absolute;
      top: 50%;
      width: 0;
    }

    .select2-container--default[dir="rtl"] .select2-selection--single .select2-selection__clear {
      float: left;
    }

    .select2-container--default[dir="rtl"] .select2-selection--single .select2-selection__arrow {
      left: 1px;
      right: auto;
    }

    .select2-container--default.select2-container--disabled .select2-selection--single {
      background-color: #6c757d;
      cursor: default;
    }

    .select2-container--default.select2-container--disabled .select2-selection--single .select2-selection__clear {
      display: none;
    }

    .select2-container--default.select2-container--open .select2-selection--single .select2-selection__arrow b {
      border-color: rgba(0, 0, 0, 0.3) rgba(0, 0, 0, 0.3) #888 rgba(0, 0, 0, 0.3);
      border-width: 0 4px 5px 4px;
    }

    .select2-container--default .select2-selection--multiple {
      background-color: white;
      border: 1px solid #aaa;
      border-radius: 4px;
      cursor: text;
    }

    .select2-container--default .select2-selection--multiple .select2-selection__rendered {
      box-sizing: border-box;
      list-style: none;
      margin: 0;
      padding: 0 5px;
      width: 100%;
    }

    .select2-container--default .select2-selection--multiple .select2-selection__rendered li {
      list-style: none;
    }

    .select2-container--default .select2-selection--multiple .select2-selection__placeholder {
      color: #999;
      margin-top: 5px;
      float: left;
    }

    .select2-container--default .select2-selection--multiple .select2-selection__clear {
      cursor: pointer;
      float: right;
      font-weight: bold;
      margin-top: 5px;
      margin-right: 10px;
    }

    .select2-container--default .select2-selection--multiple .select2-selection__choice {
      background-color: #e4e4e4;
      border: 1px solid #aaa;
      border-radius: 4px;
      cursor: default;
      float: left;
      margin-right: 5px;
      margin-top: 5px;
      padding: 0 5px;
    }

    .select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
      color: #999;
      cursor: pointer;
      display: inline-block;
      font-weight: bold;
      margin-right: 2px;
    }

    .select2-container--default .select2-selection--multiple .select2-selection__choice__remove:hover {
      color: #333;
    }

    .select2-container--default[dir="rtl"] .select2-selection--multiple .select2-selection__choice,
    .select2-container--default[dir="rtl"] .select2-selection--multiple .select2-selection__placeholder,
    .select2-container--default[dir="rtl"] .select2-selection--multiple .select2-search--inline {
      float: right;
    }

    .select2-container--default[dir="rtl"] .select2-selection--multiple .select2-selection__choice {
      margin-left: 5px;
      margin-right: auto;
    }

    .select2-container--default[dir="rtl"] .select2-selection--multiple .select2-selection__choice__remove {
      margin-left: 2px;
      margin-right: auto;
    }

    .select2-container--default.select2-container--focus .select2-selection--multiple {
      border: solid black 1px;
      outline: 0;
    }

    .select2-container--default.select2-container--disabled .select2-selection--multiple {
      background-color: #6c757d;
      cursor: default;
    }

    .select2-container--default.select2-container--disabled .select2-selection__choice__remove {
      display: none;
    }

    .select2-container--default.select2-container--open.select2-container--above .select2-selection--single,
    .select2-container--default.select2-container--open.select2-container--above .select2-selection--multiple {
      border-top-left-radius: 0;
      border-top-right-radius: 0;
    }

    .select2-container--default.select2-container--open.select2-container--below .select2-selection--single,
    .select2-container--default.select2-container--open.select2-container--below .select2-selection--multiple {
      border-bottom-left-radius: 0;
      border-bottom-right-radius: 0;
    }

    .select2-container--default .select2-search--dropdown .select2-search__field {
      border: 1px solid #aaa;
    }

    .select2-container--default .select2-search--inline .select2-search__field {
      background: rgba(0, 0, 0, 0.3);
      border: none;
      outline: 0;
      box-shadow: none;
      -webkit-appearance: textfield;
    }

    .select2-container--default .select2-results>.select2-results__options {
      max-height: 200px;
      overflow-y: auto;
    }

    .select2-container--default .select2-results__option[role=group] {
      padding: 0;
    }

    .select2-container--default .select2-results__option[aria-disabled=true] {
      color: #999;
    }

    .select2-container--default .select2-results__option[aria-selected=true] {
      background-color: #ddd;
    }

    .select2-container--default .select2-results__option .select2-results__option {
      padding-left: 1em;
    }

    .select2-container--default .select2-results__option .select2-results__option .select2-results__group {
      padding-left: 0;
    }

    .select2-container--default .select2-results__option .select2-results__option .select2-results__option {
      margin-left: -1em;
      padding-left: 2em;
    }

    .select2-container--default .select2-results__option .select2-results__option .select2-results__option .select2-results__option {
      margin-left: -2em;
      padding-left: 3em;
    }

    .select2-container--default .select2-results__option .select2-results__option .select2-results__option .select2-results__option .select2-results__option {
      margin-left: -3em;
      padding-left: 4em;
    }

    .select2-container--default .select2-results__option .select2-results__option .select2-results__option .select2-results__option .select2-results__option .select2-results__option {
      margin-left: -4em;
      padding-left: 5em;
    }

    .select2-container--default .select2-results__option .select2-results__option .select2-results__option .select2-results__option .select2-results__option .select2-results__option .select2-results__option {
      margin-left: -5em;
      padding-left: 6em;
    }

    .select2-container--default .select2-results__option--highlighted[aria-selected] {
      background-color: #5897fb;
      color: white;
    }

    .select2-container--default .select2-results__group {
      cursor: default;
      display: block;
      padding: 6px;
    }

    .select2-container--classic .select2-selection--single {
      background-color: #f7f7f7;
      border: 1px solid #aaa;
      border-radius: 4px;
      outline: 0;
      background-image: -webkit-linear-gradient(top, white 50%, #eee 100%);
      background-image: -o-linear-gradient(top, white 50%, #eee 100%);
      background-image: linear-gradient(to bottom, white 50%, #eee 100%);
      background-repeat: repeat-x;
      filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='$white-colorFFFFF', endColorstr='#FFEEEEEE', GradientType=0);
    }

    .select2-container--classic .select2-selection--single:focus {
      border: 1px solid #5897fb;
    }

    .select2-container--classic .select2-selection--single .select2-selection__rendered {
      color: #444;
      line-height: 28px;
    }

    .select2-container--classic .select2-selection--single .select2-selection__clear {
      cursor: pointer;
      float: right;
      font-weight: bold;
      margin-right: 10px;
    }

    .select2-container--classic .select2-selection--single .select2-selection__placeholder {
      color: #999;
    }

    .select2-container--classic .select2-selection--single .select2-selection__arrow {
      background-color: #ddd;
      border: none;
      border-left: 1px solid #aaa;
      border-top-right-radius: 4px;
      border-bottom-right-radius: 4px;
      height: 26px;
      position: absolute;
      top: 1px;
      right: 1px;
      width: 20px;
      background-image: -webkit-linear-gradient(top, #eee 50%, #ccc 100%);
      background-image: -o-linear-gradient(top, #eee 50%, #ccc 100%);
      background-image: linear-gradient(to bottom, #eee 50%, #ccc 100%);
      background-repeat: repeat-x;
      filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#FFEEEEEE', endColorstr='#FFCCCCCC', GradientType=0);
    }

    .select2-container--classic .select2-selection--single .select2-selection__arrow b {
      border-color: #888 rgba(0, 0, 0, 0.3) rgba(0, 0, 0, 0.3) rgba(0, 0, 0, 0.3);
      border-style: solid;
      border-width: 5px 4px 0 4px;
      height: 0;
      left: 50%;
      margin-left: -4px;
      margin-top: -2px;
      position: absolute;
      top: 50%;
      width: 0;
    }

    .select2-container--classic[dir="rtl"] .select2-selection--single .select2-selection__clear {
      float: left;
    }

    .select2-container--classic[dir="rtl"] .select2-selection--single .select2-selection__arrow {
      border: none;
      border-right: 1px solid #aaa;
      border-radius: 0;
      border-top-left-radius: 4px;
      border-bottom-left-radius: 4px;
      left: 1px;
      right: auto;
    }

    .select2-container--classic.select2-container--open .select2-selection--single {
      border: 1px solid #5897fb;
    }

    .select2-container--classic.select2-container--open .select2-selection--single .select2-selection__arrow {
      background: rgba(0, 0, 0, 0.3);
      border: none;
    }

    .select2-container--classic.select2-container--open .select2-selection--single .select2-selection__arrow b {
      border-color: rgba(0, 0, 0, 0.3) rgba(0, 0, 0, 0.3) #888 rgba(0, 0, 0, 0.3);
      border-width: 0 4px 5px 4px;
    }

    .select2-container--classic.select2-container--open.select2-container--above .select2-selection--single {
      border-top: none;
      border-top-left-radius: 0;
      border-top-right-radius: 0;
      background-image: -webkit-linear-gradient(top, white 0%, #eee 50%);
      background-image: -o-linear-gradient(top, white 0%, #eee 50%);
      background-image: linear-gradient(to bottom, white 0%, #eee 50%);
      background-repeat: repeat-x;
      filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='$white-colorFFFFF', endColorstr='#FFEEEEEE', GradientType=0);
    }

    .select2-container--classic.select2-container--open.select2-container--below .select2-selection--single {
      border-bottom: none;
      border-bottom-left-radius: 0;
      border-bottom-right-radius: 0;
      background-image: -webkit-linear-gradient(top, #eee 50%, white 100%);
      background-image: -o-linear-gradient(top, #eee 50%, white 100%);
      background-image: linear-gradient(to bottom, #eee 50%, white 100%);
      background-repeat: repeat-x;
      filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#FFEEEEEE', endColorstr='$white-colorFFFFF', GradientType=0);
    }

    .select2-container--classic .select2-selection--multiple {
      background-color: white;
      border: 1px solid #aaa;
      border-radius: 4px;
      cursor: text;
      outline: 0;
    }

    .select2-container--classic .select2-selection--multiple:focus {
      border: 1px solid #5897fb;
    }

    .select2-container--classic .select2-selection--multiple .select2-selection__rendered {
      list-style: none;
      margin: 0;
      padding: 0 5px;
    }

    .select2-container--classic .select2-selection--multiple .select2-selection__clear {
      display: none;
    }

    .select2-container--classic .select2-selection--multiple .select2-selection__choice {
      background-color: #e4e4e4;
      border: 1px solid #aaa;
      border-radius: 4px;
      cursor: default;
      float: left;
      margin-right: 5px;
      margin-top: 5px;
      padding: 0 5px;
    }

    .select2-container--classic .select2-selection--multiple .select2-selection__choice__remove {
      color: #888;
      cursor: pointer;
      display: inline-block;
      font-weight: bold;
      margin-right: 2px;
    }

    .select2-container--classic .select2-selection--multiple .select2-selection__choice__remove:hover {
      color: #555;
    }

    .select2-container--classic[dir="rtl"] .select2-selection--multiple .select2-selection__choice {
      float: right;
      margin-left: 5px;
      margin-right: auto;
    }

    .select2-container--classic[dir="rtl"] .select2-selection--multiple .select2-selection__choice__remove {
      margin-left: 2px;
      margin-right: auto;
    }

    .select2-container--classic.select2-container--open .select2-selection--multiple {
      border: 1px solid #5897fb;
    }

    .select2-container--classic.select2-container--open.select2-container--above .select2-selection--multiple {
      border-top: none;
      border-top-left-radius: 0;
      border-top-right-radius: 0;
    }

    .select2-container--classic.select2-container--open.select2-container--below .select2-selection--multiple {
      border-bottom: none;
      border-bottom-left-radius: 0;
      border-bottom-right-radius: 0;
    }

    .select2-container--classic .select2-search--dropdown .select2-search__field {
      border: 1px solid #aaa;
      outline: 0;
    }

    .select2-container--classic .select2-search--inline .select2-search__field {
      outline: 0;
      box-shadow: none;
    }

    .select2-container--classic .select2-dropdown {
      background-color: white;
      border: 1px solid rgba(0, 0, 0, 0.3);
    }

    .select2-container--classic .select2-dropdown--above {
      border-bottom: none;
    }

    .select2-container--classic .select2-dropdown--below {
      border-top: none;
    }

    .select2-container--classic .select2-results>.select2-results__options {
      max-height: 200px;
      overflow-y: auto;
    }

    .select2-container--classic .select2-results__option[role=group] {
      padding: 0;
    }

    .select2-container--classic .select2-results__option[aria-disabled=true] {
      color: grey;
    }

    .select2-container--classic .select2-results__option--highlighted[aria-selected] {
      background-color: #3875d7;
      color: white;
    }

    .select2-container--classic .select2-results__group {
      cursor: default;
      display: block;
      padding: 6px;
    }

    .select2-container--classic.select2-container--open .select2-dropdown {
      border-color: #5897fb;
    }

    /*! * Select2 Bootstrap Theme v0.1.0-beta.10 (https://select2.github.io/select2-bootstrap-theme) * Copyright 2015-2017 Florian Kissling and contributors (https://github.com/select2/select2-bootstrap-theme/graphs/contributors) * Licensed under MIT (https://github.com/select2/select2-bootstrap-theme/blob/master/LICENSE) */
    .select2-container--bootstrap {
      display: block;
    }

    .select2-container--bootstrap .select2-selection {
      background-color: #fff;
      border: 1px solid #ebedf2;
      border-radius: 4px;
      color: inherit;
      font-size: 13px;
      outline: 0;
      line-height: 1.5 !important;
    }

    .select2-container--bootstrap .select2-selection.form-control {
      border-radius: 4px;
    }

    .select2-container--bootstrap .select2-search--dropdown .select2-search__field {
      background-color: #fff;
      border: 1px solid #ebedf2;
      border-radius: 4px;
      color: #555;
      font-size: 13px;
      padding: 4px 10px;
    }

    .select2-container--bootstrap .select2-search__field {
      outline: 0;
    }

    .select2-container--bootstrap .select2-search__field::-webkit-input-placeholder,
    .select2-container--bootstrap .select2-search__field:-moz-placeholder {
      color: #999;
    }

    .select2-container--bootstrap .select2-search__field::-moz-placeholder {
      color: #999;
      opacity: 1;
    }

    .select2-container--bootstrap .select2-search__field:-ms-input-placeholder {
      color: #999;
    }

    .select2-container--bootstrap .select2-results__option {
      padding: 6px 12px;
    }

    .select2-container--bootstrap .select2-results__option[role=group] {
      padding: 0;
    }

    .select2-container--bootstrap .select2-results__option[aria-disabled=true] {
      color: #777;
      cursor: not-allowed;
    }

    .select2-container--bootstrap .select2-results__option[aria-selected=true] {
      background-color: #f5f5f5;
      color: #262626;
    }

    .select2-container--bootstrap .select2-results__option--highlighted[aria-selected] {
      background-color: royalblue;
      color: #fff;
    }

    .select2-container--bootstrap .select2-results__option .select2-results__option {
      padding: 6px 12px;
    }

    .select2-container--bootstrap .select2-results__option .select2-results__option .select2-results__group {
      padding-left: 0;
    }

    .select2-container--bootstrap .select2-results__option .select2-results__option .select2-results__option {
      margin-left: -12px;
      padding-left: 24px;
    }

    .select2-container--bootstrap .select2-results__option .select2-results__option .select2-results__option .select2-results__option {
      margin-left: -24px;
      padding-left: 36px;
    }

    .select2-container--bootstrap .select2-results__option .select2-results__option .select2-results__option .select2-results__option .select2-results__option {
      margin-left: -36px;
      padding-left: 48px;
    }

    .select2-container--bootstrap .select2-results__option .select2-results__option .select2-results__option .select2-results__option .select2-results__option .select2-results__option {
      margin-left: -48px;
      padding-left: 60px;
    }

    .select2-container--bootstrap .select2-results__option .select2-results__option .select2-results__option .select2-results__option .select2-results__option .select2-results__option .select2-results__option {
      margin-left: -60px;
      padding-left: 72px;
    }

    .select2-container--bootstrap .select2-results__group {
      color: #9e9e9e;
      font-weight: bold;
      display: block;
      padding: 7px 12px;
      line-height: 1.42857143;
      white-space: nowrap;
      margin-top: 6px;
    }

    .select2-container--bootstrap.select2-container--focus .select2-selection {
      border-color: #66afe9;
    }

    .select2-container--bootstrap.select2-container--open .select2-selection {
      -webkit-box-shadow: 0px 0px 15px 1px rgba(69, 65, 78, 0.2) !important;
      -moz-box-shadow: 0px 0px 15px 1px rgba(69, 65, 78, 0.2) !important;
      box-shadow: 0px 0px 15px 1px rgba(69, 65, 78, 0.2) !important;
      -o-transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
      -webkit-transition: border-color ease-in-out 0.15s, -webkit-box-shadow ease-in-out 0.15s;
      transition: border-color ease-in-out 0.15s, -webkit-box-shadow ease-in-out 0.15s;
      transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
      transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s, -webkit-box-shadow ease-in-out 0.15s;
    }

    .select2-container--bootstrap.select2-container--open .select2-selection .select2-selection__arrow b {
      border-color: rgba(0, 0, 0, 0.3) rgba(0, 0, 0, 0.3) #999;
      border-width: 0 4px 4px;
    }

    .select2-container--bootstrap.select2-container--open.select2-container--below .select2-selection {
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
      border-bottom-color: rgba(0, 0, 0, 0.3);
    }

    .select2-container--bootstrap.select2-container--open.select2-container--above .select2-selection {
      border-top-right-radius: 0;
      border-top-left-radius: 0;
      border-top-color: rgba(0, 0, 0, 0.3);
    }

    .select2-container--bootstrap .select2-selection__clear {
      color: #999;
      cursor: pointer;
      float: right;
      font-weight: 700;
      margin-right: 10px;
    }

    .select2-container--bootstrap .select2-selection__clear:hover {
      color: #333;
    }

    .select2-container--bootstrap.select2-container--disabled .select2-selection {
      border-color: #ccc;
      -webkit-box-shadow: none;
      box-shadow: none;
    }

    .select2-container--bootstrap.select2-container--disabled .select2-search__field {
      cursor: not-allowed;
    }

    .select2-container--bootstrap.select2-container--disabled .select2-selection {
      cursor: not-allowed;
      background-color: #6c757d;
    }

    .select2-container--bootstrap.select2-container--disabled .select2-selection--multiple .select2-selection__choice {
      background-color: #6c757d;
    }

    .select2-container--bootstrap.select2-container--disabled .select2-selection--multiple .select2-selection__choice__remove {
      display: none;
    }

    .select2-container--bootstrap.select2-container--disabled .select2-selection__clear {
      display: none;
    }

    .select2-container--bootstrap .select2-dropdown {
      -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
      border-color: #ebedf2;
      overflow-x: hidden;
      margin-top: -1px;
    }

    .select2-container--bootstrap .select2-dropdown--above {
      -webkit-box-shadow: 0 -6px 12px rgba(0, 0, 0, 0.175);
      box-shadow: 0 -6px 12px rgba(0, 0, 0, 0.175);
      margin-top: 1px;
    }

    .select2-container--bootstrap .select2-results>.select2-results__options {
      max-height: 200px;
      overflow-y: auto;
    }

    .select2-container--bootstrap .select2-selection--single {
      height: 40px;
      line-height: 1.42857143;
      padding: 0.6rem 1rem;
    }

    .select2-container--bootstrap .select2-selection--single .select2-selection__arrow {
      position: absolute;
      bottom: 0;
      right: 12px;
      top: 0;
      width: 4px;
    }

    .select2-container--bootstrap .select2-selection--single .select2-selection__arrow b {
      border-color: #999 rgba(0, 0, 0, 0.3) rgba(0, 0, 0, 0.3);
      border-style: solid;
      border-width: 4px 4px 0;
      height: 0;
      left: 0;
      margin-left: -4px;
      margin-top: -2px;
      position: absolute;
      top: 50%;
      width: 0;
    }

    .select2-container--bootstrap .select2-selection--single .select2-selection__rendered {
      color: #555;
      padding: 0;
    }

    .select2-container--bootstrap .select2-selection--single .select2-selection__placeholder {
      color: #999;
    }

    .select2-container--bootstrap .select2-selection--multiple {
      padding: 3.25px 0px;
      height: auto;
    }

    .select2-container--bootstrap .select2-selection--multiple .select2-selection__rendered {
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      box-sizing: border-box;
      display: block;
      line-height: 1.42857143;
      list-style: none;
      margin: 0;
      overflow: hidden;
      padding: 0;
      width: 100%;
      text-overflow: ellipsis;
      white-space: nowrap;
    }

    .select2-container--bootstrap .select2-selection--multiple .select2-selection__placeholder {
      color: #999;
      float: left;
      margin-top: 5px;
    }

    .select2-container--bootstrap .select2-selection--multiple .select2-selection__choice {
      color: #555;
      background: #fff;
      border: 1px solid #ccc;
      border-radius: 30px;
      cursor: default;
      float: left;
      margin: 5px 0 0 6px;
      font-size: 11px;
      padding: 3px 23px 3px 10px;
      position: relative;
    }

    .select2-container--bootstrap .select2-selection--multiple .select2-search--inline .select2-search__field {
      background: 0 0;
      padding: 0 12px;
      height: 32px;
      line-height: 1.42857143;
      margin-top: 0;
      min-width: 5em;
    }

    .select2-container--bootstrap .select2-selection--multiple .select2-selection__choice__remove {
      color: #666 !important;
      cursor: pointer;
      display: inline-block;
      margin-right: 3px;
      position: absolute;
      right: 5px;
      font-weight: bold;
    }

    .select2-container--bootstrap .select2-selection--multiple .select2-selection__choice__remove:hover {
      color: #666 !important;
    }

    .select2-container--bootstrap .select2-selection--multiple .select2-selection__clear {
      margin-top: 6px;
    }

    .form-group-sm .select2-container--bootstrap .select2-selection--single,
    .input-group-sm .select2-container--bootstrap .select2-selection--single,
    .select2-container--bootstrap .select2-selection--single.input-sm {
      border-radius: 3px;
      font-size: 12px;
      height: 30px;
      line-height: 1.5;
      padding: 5px 22px 5px 10px;
    }

    .form-group-sm .select2-container--bootstrap .select2-selection--single .select2-selection__arrow b,
    .input-group-sm .select2-container--bootstrap .select2-selection--single .select2-selection__arrow b,
    .select2-container--bootstrap .select2-selection--single.input-sm .select2-selection__arrow b {
      margin-left: -5px;
    }

    .form-group-sm .select2-container--bootstrap .select2-selection--multiple,
    .input-group-sm .select2-container--bootstrap .select2-selection--multiple,
    .select2-container--bootstrap .select2-selection--multiple.input-sm {
      min-height: 30px;
      border-radius: 3px;
    }

    .form-group-sm .select2-container--bootstrap .select2-selection--multiple .select2-selection__choice,
    .input-group-sm .select2-container--bootstrap .select2-selection--multiple .select2-selection__choice,
    .select2-container--bootstrap .select2-selection--multiple.input-sm .select2-selection__choice {
      font-size: 12px;
      line-height: 1.5;
      margin: 4px 0 0 5px;
      padding: 0 5px;
    }

    .form-group-sm .select2-container--bootstrap .select2-selection--multiple .select2-search--inline .select2-search__field,
    .input-group-sm .select2-container--bootstrap .select2-selection--multiple .select2-search--inline .select2-search__field,
    .select2-container--bootstrap .select2-selection--multiple.input-sm .select2-search--inline .select2-search__field {
      padding: 0 10px;
      font-size: 12px;
      height: 28px;
      line-height: 1.5;
    }

    .form-group-sm .select2-container--bootstrap .select2-selection--multiple .select2-selection__clear,
    .input-group-sm .select2-container--bootstrap .select2-selection--multiple .select2-selection__clear,
    .select2-container--bootstrap .select2-selection--multiple.input-sm .select2-selection__clear {
      margin-top: 5px;
    }

    .form-group-lg .select2-container--bootstrap .select2-selection--single,
    .input-group-lg .select2-container--bootstrap .select2-selection--single,
    .select2-container--bootstrap .select2-selection--single.input-lg {
      border-radius: 6px;
      font-size: 18px;
      height: 46px;
      line-height: 1.3333333;
      padding: 10px 31px 10px 16px;
    }

    .form-group-lg .select2-container--bootstrap .select2-selection--single .select2-selection__arrow,
    .input-group-lg .select2-container--bootstrap .select2-selection--single .select2-selection__arrow,
    .select2-container--bootstrap .select2-selection--single.input-lg .select2-selection__arrow {
      width: 5px;
    }

    .form-group-lg .select2-container--bootstrap .select2-selection--single .select2-selection__arrow b,
    .input-group-lg .select2-container--bootstrap .select2-selection--single .select2-selection__arrow b,
    .select2-container--bootstrap .select2-selection--single.input-lg .select2-selection__arrow b {
      border-width: 5px 5px 0;
      margin-left: -10px;
      margin-top: -2.5px;
    }

    .form-group-lg .select2-container--bootstrap .select2-selection--multiple,
    .input-group-lg .select2-container--bootstrap .select2-selection--multiple,
    .select2-container--bootstrap .select2-selection--multiple.input-lg {
      min-height: 46px;
      border-radius: 6px;
    }

    .form-group-lg .select2-container--bootstrap .select2-selection--multiple .select2-selection__choice,
    .input-group-lg .select2-container--bootstrap .select2-selection--multiple .select2-selection__choice,
    .select2-container--bootstrap .select2-selection--multiple.input-lg .select2-selection__choice {
      font-size: 18px;
      line-height: 1.3333333;
      border-radius: 4px;
      margin: 9px 0 0 8px;
      padding: 0 10px;
    }

    .form-group-lg .select2-container--bootstrap .select2-selection--multiple .select2-search--inline .select2-search__field,
    .input-group-lg .select2-container--bootstrap .select2-selection--multiple .select2-search--inline .select2-search__field,
    .select2-container--bootstrap .select2-selection--multiple.input-lg .select2-search--inline .select2-search__field {
      padding: 0 16px;
      font-size: 18px;
      height: 44px;
      line-height: 1.3333333;
    }

    .form-group-lg .select2-container--bootstrap .select2-selection--multiple .select2-selection__clear,
    .input-group-lg .select2-container--bootstrap .select2-selection--multiple .select2-selection__clear,
    .select2-container--bootstrap .select2-selection--multiple.input-lg .select2-selection__clear {
      margin-top: 10px;
    }

    .input-group-lg .select2-container--bootstrap .select2-selection.select2-container--open .select2-selection--single .select2-selection__arrow b {
      border-color: rgba(0, 0, 0, 0.3) rgba(0, 0, 0, 0.3) #999;
      border-width: 0 5px 5px;
    }

    .select2-container--bootstrap .select2-selection.input-lg.select2-container--open .select2-selection--single .select2-selection__arrow b {
      border-color: rgba(0, 0, 0, 0.3) rgba(0, 0, 0, 0.3) #999;
      border-width: 0 5px 5px;
    }

    .select2-container--bootstrap[dir=rtl] .select2-selection--single {
      padding-left: 24px;
      padding-right: 12px;
    }

    .select2-container--bootstrap[dir=rtl] .select2-selection--single .select2-selection__rendered {
      padding-right: 0;
      padding-left: 0;
      text-align: right;
    }

    .select2-container--bootstrap[dir=rtl] .select2-selection--single .select2-selection__clear {
      float: left;
    }

    .select2-container--bootstrap[dir=rtl] .select2-selection--single .select2-selection__arrow {
      left: 12px;
      right: auto;
    }

    .select2-container--bootstrap[dir=rtl] .select2-selection--single .select2-selection__arrow b {
      margin-left: 0;
    }

    .select2-container--bootstrap[dir=rtl] .select2-selection--multiple .select2-search--inline,
    .select2-container--bootstrap[dir=rtl] .select2-selection--multiple .select2-selection__choice,
    .select2-container--bootstrap[dir=rtl] .select2-selection--multiple .select2-selection__placeholder {
      float: right;
    }

    .select2-container--bootstrap[dir=rtl] .select2-selection--multiple .select2-selection__choice {
      margin-left: 0;
      margin-right: 6px;
    }

    .select2-container--bootstrap[dir=rtl] .select2-selection--multiple .select2-selection__choice__remove {
      margin-left: 2px;
      margin-right: auto;
    }

    .has-warning .select2-dropdown,
    .has-warning .select2-selection {
      border-color: #8a6d3b;
    }

    .has-warning .select2-container--focus .select2-selection,
    .has-warning .select2-container--open .select2-selection {
      -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #c0a16b;
      box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #c0a16b;
      border-color: #66512c;
    }

    .has-warning.select2-drop-active {
      border-color: #66512c;
    }

    .has-warning.select2-drop-active.select2-drop.select2-drop-above {
      border-top-color: #66512c;
    }

    .has-error .select2-dropdown,
    .has-error .select2-selection {
      border-color: #f94144;
    }

    .has-error .select2-dropdown .select2-selection__rendered,
    .has-error .select2-selection .select2-selection__rendered {
      color: #f94144;
    }

    .has-error .select2-container--focus .select2-selection,
    .has-error .select2-container--open .select2-selection {
      border-color: #f94144;
    }

    .has-error.select2-drop-active {
      border-color: #f94144;
    }

    .has-error.select2-drop-active.select2-drop.select2-drop-above {
      border-top-color: #f94144;
    }

    .has-success .select2-dropdown,
    .has-success .select2-selection {
      border-color: #3cb371;
    }

    .has-success .select2-dropdown .select2-selection__rendered,
    .has-success .select2-selection .select2-selection__rendered {
      color: #3cb371;
    }

    .has-success .select2-container--focus .select2-selection,
    .has-success .select2-container--open .select2-selection {
      border-color: #3cb371;
    }

    .has-success.select2-drop-active {
      border-color: #3cb371;
    }

    .has-success.select2-drop-active.select2-drop.select2-drop-above {
      border-top-color: #3cb371;
    }

    .input-group>.select2-hidden-accessible:first-child+.select2-container--bootstrap>.selection>.select2-selection {
      border-bottom-right-radius: 0;
      border-top-right-radius: 0;
    }

    .input-group>.select2-hidden-accessible:first-child+.select2-container--bootstrap>.selection>.select2-selection.form-control {
      border-bottom-right-radius: 0;
      border-top-right-radius: 0;
    }

    .input-group>.select2-hidden-accessible:not(:first-child)+.select2-container--bootstrap:not(:last-child)>.selection>.select2-selection {
      border-radius: 0;
    }

    .input-group>.select2-hidden-accessible:not(:first-child)+.select2-container--bootstrap:not(:last-child)>.selection>.select2-selection.form-control {
      border-radius: 0;
    }

    .input-group>.select2-hidden-accessible:not(:first-child):not(:last-child)+.select2-container--bootstrap:last-child>.selection>.select2-selection {
      border-bottom-left-radius: 0;
      border-top-left-radius: 0;
    }

    .input-group>.select2-hidden-accessible:not(:first-child):not(:last-child)+.select2-container--bootstrap:last-child>.selection>.select2-selection.form-control {
      border-bottom-left-radius: 0;
      border-top-left-radius: 0;
    }

    .input-group>.select2-container--bootstrap {
      display: table;
      table-layout: fixed;
      position: relative;
      z-index: 2;
      width: 100%;
      margin-bottom: 0;
      vertical-align: top;
    }

    .input-group>.select2-container--bootstrap>.selection>.select2-selection.form-control {
      float: none;
    }

    .input-group>.select2-container--bootstrap.select2-container--focus,
    .input-group>.select2-container--bootstrap.select2-container--open {
      z-index: 3;
    }

    .input-group>.select2-container--bootstrap .input-group-btn {
      vertical-align: top;
    }

    .input-group>.select2-container--bootstrap .input-group-btn .btn {
      vertical-align: top;
    }

    .form-control.select2-hidden-accessible {
      position: absolute !important;
      width: 1px !important;
    }

    .select2-black .select2-selection__choice .select2-selection__choice__remove,
    .select2-primary .select2-selection__choice .select2-selection__choice__remove,
    .select2-info .select2-selection__choice .select2-selection__choice__remove,
    .select2-danger .select2-selection__choice .select2-selection__choice__remove,
    .select2-warning .select2-selection__choice .select2-selection__choice__remove,
    .select2-success .select2-selection__choice .select2-selection__choice__remove {
      color: #fff !important;
    }

    .select2-black .select2-selection__choice .select2-selection__choice__remove:hover,
    .select2-primary .select2-selection__choice .select2-selection__choice__remove:hover,
    .select2-info .select2-selection__choice .select2-selection__choice__remove:hover,
    .select2-danger .select2-selection__choice .select2-selection__choice__remove:hover,
    .select2-warning .select2-selection__choice .select2-selection__choice__remove:hover,
    .select2-success .select2-selection__choice .select2-selection__choice__remove:hover {
      color: #fff !important;
    }

    .select2-black .select2-selection__choice {
      background: #000 !important;
      border-color: #000 !important;
      color: #fff !important;
    }

    .select2-primary .select2-selection__choice {
      background: royalblue !important;
      border-color: royalblue !important;
      color: #fff !important;
    }

    .select2-secondary .select2-selection__choice {
      background: #6c757d !important;
      border-color: #6c757d !important;
      color: #fff !important;
    }

    .select2-info .select2-selection__choice {
      background: #5bc0de !important;
      border-color: #5bc0de !important;
      color: #fff !important;
    }

    .select2-success .select2-selection__choice {
      background: #5cb85c !important;
      border-color: #5cb85c !important;
      color: #fff !important;
    }

    .select2-danger .select2-selection__choice {
      background: #fe2013 !important;
      border-color: #fe2013 !important;
      color: #fff !important;
    }

    .select2-warning .select2-selection__choice {
      background: #f0ad4e !important;
      border-color: #f0ad4e !important;
      color: #fff !important;
    }

    @media (min-width: 768px) {
      .form-inline .select2-container--bootstrap {
        display: inline-block;
      }
    }
  </style>

  <style>
    /* * The MIT License * Copyright (c) 2012 Matias Meno <m@tias.me> DROPZONE */
    @-webkit-keyframes passing-through {
      0% {
        opacity: 0;
        -webkit-transform: translateY(40px);
        -moz-transform: translateY(40px);
        -ms-transform: translateY(40px);
        -o-transform: translateY(40px);
        transform: translateY(40px);
      }

      30%,
      70% {
        opacity: 1;
        -webkit-transform: translateY(0px);
        -moz-transform: translateY(0px);
        -ms-transform: translateY(0px);
        -o-transform: translateY(0px);
        transform: translateY(0px);
      }

      100% {
        opacity: 0;
        -webkit-transform: translateY(-40px);
        -moz-transform: translateY(-40px);
        -ms-transform: translateY(-40px);
        -o-transform: translateY(-40px);
        transform: translateY(-40px);
      }
    }

    @-moz-keyframes passing-through {
      0% {
        opacity: 0;
        -webkit-transform: translateY(40px);
        -moz-transform: translateY(40px);
        -ms-transform: translateY(40px);
        -o-transform: translateY(40px);
        transform: translateY(40px);
      }

      30%,
      70% {
        opacity: 1;
        -webkit-transform: translateY(0px);
        -moz-transform: translateY(0px);
        -ms-transform: translateY(0px);
        -o-transform: translateY(0px);
        transform: translateY(0px);
      }

      100% {
        opacity: 0;
        -webkit-transform: translateY(-40px);
        -moz-transform: translateY(-40px);
        -ms-transform: translateY(-40px);
        -o-transform: translateY(-40px);
        transform: translateY(-40px);
      }
    }

    @keyframes passing-through {
      0% {
        opacity: 0;
        -webkit-transform: translateY(40px);
        -moz-transform: translateY(40px);
        -ms-transform: translateY(40px);
        -o-transform: translateY(40px);
        transform: translateY(40px);
      }

      30%,
      70% {
        opacity: 1;
        -webkit-transform: translateY(0px);
        -moz-transform: translateY(0px);
        -ms-transform: translateY(0px);
        -o-transform: translateY(0px);
        transform: translateY(0px);
      }

      100% {
        opacity: 0;
        -webkit-transform: translateY(-40px);
        -moz-transform: translateY(-40px);
        -ms-transform: translateY(-40px);
        -o-transform: translateY(-40px);
        transform: translateY(-40px);
      }
    }

    @-webkit-keyframes slide-in {
      0% {
        opacity: 0;
        -webkit-transform: translateY(40px);
        -moz-transform: translateY(40px);
        -ms-transform: translateY(40px);
        -o-transform: translateY(40px);
        transform: translateY(40px);
      }

      30% {
        opacity: 1;
        -webkit-transform: translateY(0px);
        -moz-transform: translateY(0px);
        -ms-transform: translateY(0px);
        -o-transform: translateY(0px);
        transform: translateY(0px);
      }
    }

    @-moz-keyframes slide-in {
      0% {
        opacity: 0;
        -webkit-transform: translateY(40px);
        -moz-transform: translateY(40px);
        -ms-transform: translateY(40px);
        -o-transform: translateY(40px);
        transform: translateY(40px);
      }

      30% {
        opacity: 1;
        -webkit-transform: translateY(0px);
        -moz-transform: translateY(0px);
        -ms-transform: translateY(0px);
        -o-transform: translateY(0px);
        transform: translateY(0px);
      }
    }

    @keyframes slide-in {
      0% {
        opacity: 0;
        -webkit-transform: translateY(40px);
        -moz-transform: translateY(40px);
        -ms-transform: translateY(40px);
        -o-transform: translateY(40px);
        transform: translateY(40px);
      }

      30% {
        opacity: 1;
        -webkit-transform: translateY(0px);
        -moz-transform: translateY(0px);
        -ms-transform: translateY(0px);
        -o-transform: translateY(0px);
        transform: translateY(0px);
      }
    }

    @-webkit-keyframes pulse {
      0% {
        -webkit-transform: scale(1);
        -moz-transform: scale(1);
        -ms-transform: scale(1);
        -o-transform: scale(1);
        transform: scale(1);
      }

      10% {
        -webkit-transform: scale(1.1);
        -moz-transform: scale(1.1);
        -ms-transform: scale(1.1);
        -o-transform: scale(1.1);
        transform: scale(1.1);
      }

      20% {
        -webkit-transform: scale(1);
        -moz-transform: scale(1);
        -ms-transform: scale(1);
        -o-transform: scale(1);
        transform: scale(1);
      }
    }

    @-moz-keyframes pulse {
      0% {
        -webkit-transform: scale(1);
        -moz-transform: scale(1);
        -ms-transform: scale(1);
        -o-transform: scale(1);
        transform: scale(1);
      }

      10% {
        -webkit-transform: scale(1.1);
        -moz-transform: scale(1.1);
        -ms-transform: scale(1.1);
        -o-transform: scale(1.1);
        transform: scale(1.1);
      }

      20% {
        -webkit-transform: scale(1);
        -moz-transform: scale(1);
        -ms-transform: scale(1);
        -o-transform: scale(1);
        transform: scale(1);
      }
    }

    @keyframes pulse {
      0% {
        -webkit-transform: scale(1);
        -moz-transform: scale(1);
        -ms-transform: scale(1);
        -o-transform: scale(1);
        transform: scale(1);
      }

      10% {
        -webkit-transform: scale(1.1);
        -moz-transform: scale(1.1);
        -ms-transform: scale(1.1);
        -o-transform: scale(1.1);
        transform: scale(1.1);
      }

      20% {
        -webkit-transform: scale(1);
        -moz-transform: scale(1);
        -ms-transform: scale(1);
        -o-transform: scale(1);
        transform: scale(1);
      }
    }

    .dropzone,
    .dropzone * {
      box-sizing: border-box;
    }

    .dropzone {
      min-height: 150px;
      border: 2px solid rgba(0, 0, 0, 0.3);
      background: white;
      padding: 20px 20px;
    }

    .dropzone.dz-clickable {
      cursor: pointer;
    }

    .dropzone.dz-clickable * {
      cursor: default;
    }

    .dropzone.dz-clickable .dz-message,
    .dropzone.dz-clickable .dz-message * {
      cursor: pointer;
    }

    .dropzone.dz-started .dz-message {
      display: none;
    }

    .dropzone.dz-drag-hover {
      border-style: solid;
    }

    .dropzone.dz-drag-hover .dz-message {
      opacity: 0.5;
    }

    .dropzone .dz-message {
      text-align: center;
      margin: 2em 0;
    }

    .dropzone .dz-preview {
      position: relative;
      display: inline-block;
      vertical-align: top;
      margin: 16px;
      min-height: 100px;
    }

    .dropzone .dz-preview:hover {
      z-index: 1000;
    }

    .dropzone .dz-preview:hover .dz-details {
      opacity: 1;
    }

    .dropzone .dz-preview.dz-file-preview .dz-image {
      border-radius: 20px;
      background: #999;
      background: linear-gradient(to bottom, #eee, #ddd);
    }

    .dropzone .dz-preview.dz-file-preview .dz-details {
      opacity: 1;
    }

    .dropzone .dz-preview.dz-image-preview {
      background: white;
    }

    .dropzone .dz-preview.dz-image-preview .dz-details {
      -webkit-transition: opacity 0.2s linear;
      -moz-transition: opacity 0.2s linear;
      -ms-transition: opacity 0.2s linear;
      -o-transition: opacity 0.2s linear;
      transition: opacity 0.2s linear;
    }

    .dropzone .dz-preview .dz-remove {
      font-size: 14px;
      text-align: center;
      display: block;
      cursor: pointer;
      border: none;
    }

    .dropzone .dz-preview .dz-remove:hover {
      text-decoration: underline;
    }

    .dropzone .dz-preview:hover .dz-details {
      opacity: 1;
    }

    .dropzone .dz-preview .dz-details {
      z-index: 20;
      position: absolute;
      top: 0;
      left: 0;
      opacity: 0;
      font-size: 13px;
      min-width: 100%;
      max-width: 100%;
      padding: 2em 1em;
      text-align: center;
      color: rgba(0, 0, 0, 0.9);
      line-height: 150%;
    }

    .dropzone .dz-preview .dz-details .dz-size {
      margin-bottom: 1em;
      font-size: 16px;
    }

    .dropzone .dz-preview .dz-details .dz-filename {
      white-space: nowrap;
    }

    .dropzone .dz-preview .dz-details .dz-filename:hover span {
      border: 1px solid rgba(200, 200, 200, 0.8);
      background-color: rgba(255, 255, 255, 0.8);
    }

    .dropzone .dz-preview .dz-details .dz-filename:not(:hover) {
      overflow: hidden;
      text-overflow: ellipsis;
    }

    .dropzone .dz-preview .dz-details .dz-filename:not(:hover) span {
      border: 1px solid rgba(200, 200, 200, 0.8);
    }

    .dropzone .dz-preview .dz-details .dz-filename span,
    .dropzone .dz-preview .dz-details .dz-size span {
      background-color: rgba(255, 255, 255, 0.4);
      padding: 0 0.4em;
      border-radius: 3px;
    }

    .dropzone .dz-preview:hover .dz-image img {
      -webkit-transform: scale(1.05, 1.05);
      -moz-transform: scale(1.05, 1.05);
      -ms-transform: scale(1.05, 1.05);
      -o-transform: scale(1.05, 1.05);
      transform: scale(1.05, 1.05);
      -webkit-filter: blur(8px);
      filter: blur(8px);
    }

    .dropzone .dz-preview .dz-image {
      border-radius: 20px;
      overflow: hidden;
      width: 120px;
      height: 120px;
      position: relative;
      display: block;
      z-index: 10;
    }

    .dropzone .dz-preview .dz-image img {
      display: block;
    }

    .dropzone .dz-preview.dz-success .dz-success-mark {
      -webkit-animation: passing-through 3s cubic-bezier(0.77, 0, 0.175, 1);
      -moz-animation: passing-through 3s cubic-bezier(0.77, 0, 0.175, 1);
      -ms-animation: passing-through 3s cubic-bezier(0.77, 0, 0.175, 1);
      -o-animation: passing-through 3s cubic-bezier(0.77, 0, 0.175, 1);
      animation: passing-through 3s cubic-bezier(0.77, 0, 0.175, 1);
    }

    .dropzone .dz-preview.dz-error .dz-error-mark {
      opacity: 1;
      -webkit-animation: slide-in 3s cubic-bezier(0.77, 0, 0.175, 1);
      -moz-animation: slide-in 3s cubic-bezier(0.77, 0, 0.175, 1);
      -ms-animation: slide-in 3s cubic-bezier(0.77, 0, 0.175, 1);
      -o-animation: slide-in 3s cubic-bezier(0.77, 0, 0.175, 1);
      animation: slide-in 3s cubic-bezier(0.77, 0, 0.175, 1);
    }

    .dropzone .dz-preview .dz-success-mark,
    .dropzone .dz-preview .dz-error-mark {
      pointer-events: none;
      opacity: 0;
      z-index: 500;
      position: absolute;
      display: block;
      top: 50%;
      left: 50%;
      margin-left: -27px;
      margin-top: -27px;
    }

    .dropzone .dz-preview .dz-success-mark svg,
    .dropzone .dz-preview .dz-error-mark svg {
      display: block;
      width: 54px;
      height: 54px;
    }

    .dropzone .dz-preview.dz-processing .dz-progress {
      opacity: 1;
      -webkit-transition: all 0.2s linear;
      -moz-transition: all 0.2s linear;
      -ms-transition: all 0.2s linear;
      -o-transition: all 0.2s linear;
      transition: all 0.2s linear;
    }

    .dropzone .dz-preview.dz-complete .dz-progress {
      opacity: 0;
      -webkit-transition: opacity 0.4s ease-in;
      -moz-transition: opacity 0.4s ease-in;
      -ms-transition: opacity 0.4s ease-in;
      -o-transition: opacity 0.4s ease-in;
      transition: opacity 0.4s ease-in;
    }

    .dropzone .dz-preview:not(.dz-processing) .dz-progress {
      -webkit-animation: pulse 6s ease infinite;
      -moz-animation: pulse 6s ease infinite;
      -ms-animation: pulse 6s ease infinite;
      -o-animation: pulse 6s ease infinite;
      animation: pulse 6s ease infinite;
    }

    .dropzone .dz-preview .dz-progress {
      opacity: 1;
      z-index: 1000;
      pointer-events: none;
      position: absolute;
      height: 16px;
      left: 50%;
      top: 50%;
      margin-top: -8px;
      width: 80px;
      margin-left: -40px;
      background: rgba(255, 255, 255, 0.9);
      -webkit-transform: scale(1);
      border-radius: 8px;
      overflow: hidden;
    }

    .dropzone .dz-preview .dz-progress .dz-upload {
      background: #333;
      background: linear-gradient(to bottom, #666, #444);
      position: absolute;
      top: 0;
      left: 0;
      bottom: 0;
      width: 0;
      -webkit-transition: width 300ms ease-in-out;
      -moz-transition: width 300ms ease-in-out;
      -ms-transition: width 300ms ease-in-out;
      -o-transition: width 300ms ease-in-out;
      transition: width 300ms ease-in-out;
    }

    .dropzone .dz-preview.dz-error .dz-error-message {
      display: block;
    }

    .dropzone .dz-preview.dz-error:hover .dz-error-message {
      opacity: 1;
      pointer-events: auto;
    }

    .dropzone .dz-preview .dz-error-message {
      pointer-events: none;
      z-index: 1000;
      position: absolute;
      display: block;
      display: none;
      opacity: 0;
      -webkit-transition: opacity 0.3s ease;
      -moz-transition: opacity 0.3s ease;
      -ms-transition: opacity 0.3s ease;
      -o-transition: opacity 0.3s ease;
      transition: opacity 0.3s ease;
      border-radius: 8px;
      font-size: 13px;
      top: 130px;
      left: -10px;
      width: 140px;
      background: #be2626;
      background: linear-gradient(to bottom, #be2626, #a92222);
      padding: 0.5em 1.2em;
      color: white;
    }

    .dropzone .dz-preview .dz-error-message:after {
      content: '';
      position: absolute;
      top: -6px;
      left: 64px;
      width: 0;
      height: 0;
      border-left: 6px solid rgba(200, 200, 200, 0.8);
      border-right: 6px solid rgba(200, 200, 200, 0.8);
      border-bottom: 6px solid #be2626;
    }
  </style>

  <script>
    $('#birth').datetimepicker({
      format: 'MM/DD/YYYY'
    });

    $('#state').select2({
      theme: "bootstrap"
    });

    /* validate */

    // validation when select change
    $("#state").change(function() {
      $(this).valid();
    })

    // validation when inputfile change
    $("#uploadImg").on("change", function() {
      $(this).parent('form').validate();
    })

    $("#exampleValidation").validate({
      validClass: "success",
      rules: {
        gender: {
          required: true
        },
        confirmpassword: {
          equalTo: "#password"
        },
        birth: {
          date: true
        },
        uploadImg: {
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
  </script>

  <script type="text/javascript">
    Dropzone.options.uploadForm = { // The camelized version of the ID of the form element

      // The configuration we've talked about above
      autoProcessQueue: false,
      uploadMultiple: true,
      parallelUploads: 100,
      maxFilesize: 2,
      maxFiles: 5,

      // The setting up of the dropzone
      init: function() {
        var myDropzone = this;

        // First change the button to actually tell Dropzone to process the queue.
        this.element.querySelector("button[type=submit]").addEventListener("click", function(e) {
          // Make sure that the form isn't actually being sent.
          e.preventDefault();
          e.stopPropagation();
          myDropzone.processQueue();
        });

        myDropzone.on("sending", function(file, xhr, formData) {
          // Will send the filesize along with the file as POST data.
          formData.append("filesize", file.size);
        });

        myDropzone.on("addedfile", function(file) {
          file.previewElement.addEventListener("click", function() {
            myDropzone.removeFile(file);
          });
        });

        // Listen to the sendingmultiple event. In this case, it's the sendingmultiple event instead
        // of the sending event because uploadMultiple is set to true.
        this.on("sendingmultiple", function() {
          // Gets triggered when the form is actually being sent.
          // Hide the success button or the complete form.
        });
        this.on("successmultiple", function(files, response) {
          // Gets triggered when the files have successfully been sent.
          // Redirect user or notify of success.
        });
        this.on("errormultiple", function(files, response) {
          // Gets triggered when there was an error sending the files.
          // Maybe show form again, and notify user of error
        });
      }

    }
  </script>
</body>

</html>