<?php include_once('../inc/header.php') ?>
<main>
     <section>
           <div class="container mt-4 mb-4">
               <div class="forget_password d-grid justify-content-center">
                 <form method="POST">
                   <div class="forget_input_email mt-4">
                        <label class="fs-6 fst-normal lh-normal">Username or Email</label><br>
                        <input type="text" name="username" class="rounded py-1 mt-2" />
                   </div>

                   <div class="old_password mt-4">
                         <label class="fs-6 fst-normal lh-normal">Old Password</label><br>
                        <input type="password" name="username" class="rounded py-1 mt-2" />
                   </div>

                   <div class="new_password mt-4">
                         <label class="fs-6 fst-normal lh-normal">New Password</label><br>
                        <input type="password" name="username" class="rounded py-1 mt-2" />
                   </div>

                   <div class="reset_password mt-4">
                        <input type="submit" value="Reset Password" class="btn-primary px-4 py-1 rounded fs-5 fst-normal lh-normal"/>
                   </div>

                 </form>
               </div>
           </div>
     </section>
</main>