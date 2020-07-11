<?php
 session_start();

 $connect = mysqli_connect("localhost", "root", "", "webProject");
 $sql = "SELECT * FROM brand INNER JOIN product ON brand.brand_id = product.brand_id";
 $result = mysqli_query($connect, $sql);
 ?>
 <!DOCTYPE html>
 <html>
      <head>
           <title>Webslesson Tutorial | Fetch Data from Two or more Table Join using PHP and MySql</title>
           <link rel="stylesheet" href="css/style.css" />
      </head>

      <body>
      <?php include("header/header.php"); ?>

           <br/>
                <h3>Fetch Data from Two or more Table Join using PHP and MySql</h3><br />
                     <table class="about-table" style="width: 60%;">
                          <tr style="margin: 20px;">
                               <th>Brand Name</th>
                               <th>Product Name</th>
                          </tr>
                          <?php
                          if(mysqli_num_rows($result) > 0)
                          {
                               while($row = mysqli_fetch_array($result))
                               {
                          ?>
                          <tr>
                               <td><?php echo $row["brand_name"];?></td>
                               <td><?php echo $row["product_name"]; ?></td>
                          </tr>
                          <?php
                               }
                          }
                          ?>
                     </table>
           <br />
      </body>
 </html>