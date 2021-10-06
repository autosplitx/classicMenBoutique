<?php
require_once('../private/initialize.php');

$uploadDir = '../private/upload/';
$response = [
  'status' => 0,
  'errors' => null,
  'message' => ''
];

if (isset($_POST['add'])) {
  $catName      = $_POST['name'];
  $description  = $_POST['description'];
  $add          = $_POST['add'];

  $uploadStatus = 1;

  $uploadedFile = '';
  if (!empty($_FILES['image_url']['name'])) {

    $fileName = basename($_FILES['image_url']['name']);
    $targetFilePath = $uploadDir . $fileName;
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

    $allowTypes = ['doc', 'docx', 'jpeg', 'jpg', 'pdf', 'png'];
    if (in_array($fileType, $allowTypes)) {
      if (move_uploaded_file($_FILES['image_url']['tmp_name'], $targetFilePath)) {
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
      'name' => $catName,
      'description' => $description,
      'image_url' => $uploadedFile,
    ];

    $category = new Category($data);
    $result = $category->save();

    if ($category->errors) {
      http_response_code(401);
      $response['errors'] = display_errors($category->errors);
    }

    if ($category) {
      http_response_code(201);
      $response['status'] = 1;
      $response['message'] = 'Form submitted successfully.';
    }
  }
}
exit(json_encode($response));
