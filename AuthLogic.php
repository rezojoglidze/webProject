

 <?php
        if(isset($_SESSION['email'])){
             echo $_SESSION['email'];
//              echo <p>$_SESSION['email']</p>;

             echo '<form  action="Auth/logOut.php" method="post">
                   <button class="logOut_btn" type="submit" name="logout-submit">გასვლა</button>
                   </form>';
        } else {
               echo  '<ul>';
               echo  '<form  action="Auth/LogIn.html" method="post">
                                  <button class="logOut_btn" type="submit" name="logIn-submit">შესვლა</button>
                                  </form>';
               echo    '<p class="logOut_slash" style="margin-right: 5px; margin-left: 5px"> / </p>';

               echo  '<form  action="Auth/Registration.html" method="post">
                                                 <button class="logOut_btn" type="submit" name="registracion-submit">რეგისტრაცია</button>
                                                 </form>';
               echo   '</ul>';
        }
  ?>