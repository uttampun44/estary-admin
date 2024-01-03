<?php include_once('../inc/header.php'); ?>

<?php require('../model/database.php'); ?>
<main>
     <section>
            <div class="signup_container">
                 <div class="signup_rows container">
                      <div class="signup_row d-flex justify-content-between">
                          <div class="rows_one">
                               <img src="../assets/images/real-estate.png" class="w-100 h-100 object-fit"/>
                            </div>

                           <div class="rows_two">
                                <form action="post">
                                      <div class="form_container w-75">
                                           <div class="signup_title">
                                                  <h1>Signup Form</h1>
                                           </div>

                                           <div class="signup_form">
                                                 <form method="post">
                                                       <div class="form_cols mt-4">
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
                                                                   <select class="w-100 px-2 py-1 rounded">
                                                                          <option selected>Landlord</option>
                                                                          <option>Real Estate</option>
                                                                   </select>
                                                              </div>

                                                              <div class="address">
                                                                   <label for="address">Address: </label>
                                                                   <input type="text" name="addres" class="w-100 rounded px-2 py-1"/>
                                                              </div>

                                                              <div class="form_submit">
                                                                   <input type="submit" value="submit" class="px-2 py-2 btn btn-primary w-100" />
                                                              </div>
                                                       </div>
                                                 </form>
                                           </div>
                                     </div>
                                </form>
                           </div>
                      </div>
                 </div>
            </div>
     </section>

</main>

