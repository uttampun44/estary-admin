<?php include_once('../inc/header.php'); ?>

<?php require('../model/adminform.php'); ?>
<main>
     <section>
            <div class="signup_container">
                 <div class="signup_rows container">
                      <div class="signup_row d-flex justify-content-between">
                          <div class="rows_one">
                               <img src="../assets/images/real-estate.png" class="w-100 h-100 object-fit"/>
                            </div>

                           <div class="rows_two">
                                      <div class="form_container w-75">
                                           <div class="signup_title">
                                                  <h1>Signup Form</h1>
                                           </div>

                                           <div class="signup_form">
                                                 <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
                                                       <div class="form_cols mt-4 form-group">
                                                             <div class="first_name">
                                                                  <label for="firstname">First Name: </label>
                                                                  <input type="text" name="first_name" class="w-100 px-2 py-1 rounded"/>
                                                             </div>

                                                             <div class="last_name">
                                                                  <label for="lastname">Last Name: </label>
                                                                  <input type="text" name="last_name" class="w-100 rounded px-2 py-1"/>
                                                             </div>

                                                             <div class="current_password">
                                                                  <label for="password">Password: </label>
                                                                  <input type="password" name="password" class="w-100 rounded px-2 py-1" />
                                                             </div>
                                                             <div class="confirm_password">
                                                                  <label for="confirmpassword">Confirm Password: </label>
                                                                  <input type="password" name="confirm_password" class="w-100 rounded px-2 py-1" />
                                                             </div>

                                                             <div class="email">
                                                                  <label for="email">Email</label>
                                                                  <input type="email" name="email" class="w-100 rounded px-2 py-1" />
                                                             </div>

                                                              <div class="phone">
                                                                   <label for="phonenumber">Phone Number: </label>
                                                                   <input type="text" name="number" class="w-100 rounded px-2 py-1" />
                                                              </div>

                                                              <div class="agent_landlord">
                                                                   <label for="landlord">Landlord Or Real Estate Agent</label>
                                                                   <select class="w-100 px-2 py-1 rounded" name="agent_category">
                                                                          <option selected>Landlord</option>
                                                                          <option>Real Estate Agent</option>
                                                                   </select>
                                                              </div>

                                                              <div class="address">
                                                                   <label for="address">Address: </label>
                                                                   <textarea type="text" name="address" class="w-100 rounded px-2 py-1"></textarea>
                                                              </div>

                                                              <div class="form_submit">
                                                                   <input type="submit" value="submit" class="px-2 py-2 btn btn-primary w-100" />
                                                              </div>
                                                       </div>
                                                 </form>
                                           </div>
                                     </div>
                           </div>
                      </div>
                 </div>
            </div>
     </section>

</main>

<?php

 if(($_SERVER['REQUEST_METHOD']) == "POST"){

     //    $signup_form = new Adminform($database);

        $firstname =  $_POST['first_name'];
        $lastname = $_POST['last_name'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];
        $email = $_POST['email'];
        $nubmer = $_POST['number'];
        $agent_category = $_POST['agent_category'];
        $address = $_POST['address'];

   if($password == $confirm_password){

      $hashed_password = password_hash($password, PASSWORD_BCRYPT);
      $signup_form->signupForm($firstname, $lastname, $hashed_password, $confirm_password, $email, $nubmer, $agent_category, $address);
     }else{
        echo "<p class=''>Password not matching</p>";
   }

 }