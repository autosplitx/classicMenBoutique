<?php
require_once('../../private/initialize.php');

if (isset($_POST['add'])) {
  pre_r($_POST);
}

// if (is_post_request()) {


  //   $login = $_POST['login'] ?? '';
  //   if ($login) {

  //     $email = $login['email'] ?? '';
  //     $password = $login['password'] ?? '';

  //     // Validations
  //     if (is_blank($email)) {
  //       $errors[] = "Email cannot be blank.";
  //     }
  //     if (is_blank($password)) {
  //       $errors[] = "Password cannot be blank.";
  //     }


  //     // if there were no errors, try to login
  //     if (empty($errors)) {
  //       $clients = Customer::find_by_email($email);
  //       $admin = Admin::find_by_email($email);
  //       $rider = Rider::find_by_email($email);

  //       // test if firm found and password is correct
  //       if ($clients != false && $clients->verify_password($password)) {


  //         // Logged out Customer and riders before login in firm
  //         $session->logout(true); //for firm logout

  //         // Mark firm as logged in
  //         $session->login($clients, true);

  //         //for logging actions in the log file
  //         log_action('Client Login', "{$clients->firm_name}{$clients->first_name} Logged in.", "login");

  //         redirect_to(url_for('customer/'));
  //       } else {
  //         // email not found or password does not match
  //         $errors[] = "Log in was unsuccessful.";
  //       }
  //       // end
  //       // test if admin found and password is correct
  //       if ($admin != false && $admin->verify_password($password)) {


  //         // Logged out Customer and riders before login in Admin
  //         $session->logout(true); //for admin logout
  //         $session->logout('', true); //for Riders logout

  //         // Mark admin as logged in
  //         $session->login($admin);

  //         //for logging actions in the log file
  //         log_action('Admin Login', "{$admin->full_name()} Logged in.", "login");
  //         // if ($admin->level !== 9) {
  //         redirect_to(url_for('staff/'));
  //         // }

  //       } else {
  //         // email not found or password does not match
  //         $errors[] = "Log in was unsuccessful.";
  //       }
  //       // end
  //       // test if admin found and password is correct
  //       if ($rider != false && $rider->verify_password($password)) {

  //         // Logged out Admin and Customer before login in Riders
  //         $session->logout(); //for admin logout
  //         $session->logout(true); //for Riders logout

  //         //for logging actions in the log file
  //         log_action('Rider Login', "{$rider->full_name()} Logged in.", "login");

  //         // Mark admin as logged in
  //         $session->login($rider, '', true);
  //         redirect_to(url_for('/rider/task.php'));
  //       } else {
  //         // username not found or password does not match
  //         $errors[] = "Log in was unsuccessful.";
  //       }
  //       // end
  //     }
  //   }
  // } else {
  //   $clients = new Customer;
  //   $admin = new Admin;
// }
