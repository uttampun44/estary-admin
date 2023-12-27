
    <?php  include_once( '../inc/header.php'); ?>
    <main>
         <section>
               <div class="main_container container">
                    <div class="container_cols d-flex justify-content-center flex-column align-items-center">
                        <div class="cols_grid d-grid w-50 justify-content-center">
                           <div class="title">
                            <h1>Estary Admin</h1>
                          </div>

                         <div class="login">
                            <form>
                                 <div class="login_form_container d-flex flex-column justify-content-center">
                                      <div class="email_username">
                                         <label>Email or username</label><br>
                                         <input type="text" name="email or username" class="py-1 mt-2 mb-2 rounded"/>
                                      </div>

                                      <div class="password mt-4">
                                         <label>Password</label><br>
                                         <input type="password" name="password" class="py-1 mt-2 mb-2 rounded"/>
                                      </div>

                                      <div class="forget_password mt-4 d-flex align-items-center justify-content-between">
                                         <label class="text-danger">Forget Password ? </label> <a href="signup.php" class="text-decoration-none">Sign up</a>
                                      </div>

                                      <div class="login_button mt-4">
                                         <input type="submit" name="submit" class="btn-success border-none px-4 py-1 fs-6 lh-base fst-normal rounded btn"/>
                                      </div>
                                 </div>
                              </form>
                            </div>
                        </div>
                    </div>
               </div>
         </section>
    </main>
