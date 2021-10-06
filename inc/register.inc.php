<?php
require_once('../private/initialize.php');

$uploadDir = '../private/upload/';
$response = [
  'status' => 0,
  'errors' => null,
  'message' => ''
];

if (isset($_POST['add'])) {
  // * Get the submitted form data

  $fName      = $_POST['first_name'];
  $lName      = $_POST['last_name'];
  $email      = $_POST['email'];
  $phone      = $_POST['phone'];
  $gender     = $_POST['gender'] ?? '';
  $roleId    = $_POST['role_id'] ?? 2;
  $password   = $_POST['password'];
  $cPassword  = $_POST['confirm_password'];
  $terms      = $_POST['terms'] ?? '';
  $add        = $_POST['add'];

  $uploadStatus = 1;

  $uploadedFile = '';
  if (!empty($_FILES['avatar']['name'])) {

    $fileName = basename($_FILES['avatar']['name']);
    $targetFilePath = $uploadDir . $fileName;
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

    $allowTypes = ['doc', 'docx', 'jpeg', 'jpg', 'pdf', 'png'];
    if (in_array($fileType, $allowTypes)) {
      if (move_uploaded_file($_FILES['avatar']['tmp_name'], $targetFilePath)) {
        $uploadedFile = $fileName;
      } else {
        $uploadStatus = 0;
        http_response_code(401);
        $response['errors'] = 'Sorry, there was an error uploading your file.';
      }
    } else {
      $uploadStatus = 0;
      http_response_code(404);
      $response['errors'] = 'Sorry, DOC, DOCX, JPEG, JPG, PDF & PNG files are allowed to upload.';
    }
  }

  if ($uploadStatus == 1) {
    $data = [
      'first_name' => $fName,
      'last_name' => $lName,
      'email' => $email,
      'role_id' => $roleId,
      'phone' => $phone,
      'gender' => $gender,
      'password' => $password,
      'confirm_password' => $cPassword,
      'avatar' => $uploadedFile,
      'terms' => $terms,
    ];

    $admin = new Admin($data);
    $result = $admin->save();

    if ($admin->errors) {
      http_response_code(401);
      $response['errors'] = display_errors($admin->errors);
    }

    if ($admin) {
      http_response_code(201);
      $response['status'] = 1;
      $response['message'] = 'Form submitted successfully. Kindly login';
    }
  }
}

if (isset($_POST['login'])) {

  $args = [
    'email'     => $_POST['email'] ?? '',
    'password'  => $_POST['password'] ?? ''
  ];

  // Validations
  if (is_blank($args['email'])) {
    $errors[] = "E-mail cannot be blank.";
  }
  if (is_blank($args['password'])) {
    $errors[] = "Password cannot be blank.";
  }

  if (empty($errors)) {
    $loginUser = Admin::find_by_email($args['email']);

    if ($loginUser != false && $loginUser->verify_password($args['password'])) {
      $session->logout();
      $session->logout('', true);

      if ($session->login($loginUser, '', '')) {
        log_action('Login', "{$loginUser->full_name()} Logged in.", "login");

        http_response_code(201);
        $response['status'] = 1;
        $response['message'] = 'Login successful.';
      }
    } else {
      http_response_code(404);
      $response['errors'] = display_errors(['Login unsuccessful.']);
    }
  }
}
exit(json_encode($response));
