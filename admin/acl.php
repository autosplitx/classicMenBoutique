<?php
require_once('../private/initialize.php');
require_login();

$page_title = 'CMB | ACL'; ?>

<title><?php echo h($page_title); ?></title>

<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div class="content">
  <div class="panel-header bg-primary-gradient">
    <div class="page-inner py-5">
      <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
        <h1>Welcome to ACL</h1>
      </div>
    </div>
  </div>

  <div class="page-inner mt--5">
    <div class="row mt--2">
      <div class="col-md-6">
        <div class="card full-height">
          <div class="card-body">
            <div class="card-title">Overall statistics</div>
            <div class="card-category">Daily information about statistics in system</div>
            <div class="d-flex flex-wrap justify-content-around pb-2 pt-4">
              ACL 1
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="card full-height">
          <div class="card-body">
            <div class="card-title">Total income & spend statistics</div>
            <div class="row py-3">
              ACL 2
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<?php include(SHARED_PATH . '/staff_footer.php'); ?>