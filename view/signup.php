<?php include_once('../inc/header.php'); ?>
<main>
     <section>
            <div class="signup_container">
                 <div class="signup_rows container">
                      <div class="signup_row d-flex justify-content-between">
                          <div class="rows_one">
                               <img src="../assets/images/real-estate.png" class="w-75 h-auto object-fit"/>
                            </div>

                           <div class="rows_two">
                                <form action="post">
                                      <div class="form_container w-75">
                                           <div class="signup_title">
                                                  <h1>Signup Form</h1>
                                           </div>

                                           <div class="signup_form">
                                                 <form>
                                                       <div class="form_cols mt-4">
                                                             <div class="first_name">
                                                                  <label>First Name: </label>
                                                                  <input type="text" name="first_name" />
                                                             </div>

                                                             <div class="last_name">
                                                                  <label>Last Name: </label>
                                                                  <input type="text" name="last_name" />
                                                             </div>

                                                             <div class="current_password">
                                                                  <label>Password: </label>
                                                                  <input type="password" name="password" />
                                                             </div>
                                                             <div class="confirm_password">
                                                                  <label>Confirm Password: </label>
                                                                  <input type="password" name="confirm_password" />
                                                             </div>

                                                              <div class="phone">
                                                                   <label>Phone Number: </label>
                                                                   <input type="text" name="number" />
                                                              </div>

                                                              <div class="agent_landlord">
                                                                   <label>Landlord Or Real Estate Agent</label>
                                                                   <select>
                                                                          <option selected>Landlord</option>
                                                                          <option>Real Estate</option>
                                                                   </select>
                                                              </div>

                                                              <div class="address">
                                                                   <label>Address: </label>
                                                                   <input type="text" name="addres"/>
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