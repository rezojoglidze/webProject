
 <?php
        if(isset($_SESSION['email']) || isset($_SESSION['id'])) {

             echo 'გამარჯობა '; echo $_SESSION['email'];
             echo ' id -> '; echo $_SESSION['id'];

             echo '<form  action="Auth/logOut.php" method="post">
                   <button class="logOut_btn" type="submit" name="logout-submit">გასვლა</button>
                   </form>';
        } else {
               echo  '<ul>';
               echo  '<form  action="Auth/LogIn.html" method="post">
                                  <button class="logOut_btn" type="submit" name="logIn-submit">შესვლა</button>
                                  </form>';
               echo    '<p class="logOut_slash" style="margin-right: 1px; margin-left: 1px"> / </p>';

               echo  '<form  action="Auth/Registration.html" method="post">
                      <button class="logOut_btn" type="submit" name="registracion-submit">რეგისტრაცია</button>
                       </form>';
               echo   '</ul>';
        }
  ?>