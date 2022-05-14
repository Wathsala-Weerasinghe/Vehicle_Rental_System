  <!DOCTYPE html>
  <html>

  <head>
      <title>Search</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="../css/StyleSheet.css">
      <link rel="stylesheet" type="text/css" href="../css/style_contact_us.css">


  </head>

  <body style="background-image: url(../images/background.jpg);">
      <?php

        include("../../app/includes/headersection.php");

        ?>
      <hr style="border: 2px solid black; background-color: black;">

      <!-- this is the final template that everyone should use -->

      </div>

      <body>
          <div>
              <form action="" method="post">
                  <center>
                      <h1>!!You Can Edit Your Fill Detalis!!</h1> <input type="text" class="submit" size="40%" name="ID" required><br /><br /><br />

                      <button type="submit" id="editBtn" name="submit">edit and submit</button>
                  </center>
              </form>

              <?php                                      //refer w3 school and stackflow website
                include 'paymentdb.php';
                if (!empty($_REQUEST['ID'])) {

                    $ID = mysqli_real_escape_string($conn, $_REQUEST['ID']);

                    $sql = "SELECT * FROM payment WHERE ID LIKE '%" . $ID . "%'";
                    $r_query = mysqli_query($conn, $sql);

                    while ($row = mysqli_fetch_array($r_query)) {


                        echo  '<span style="color:white;"><br />CardName: ' . $row['cardname'];
                        echo 'Your ID: ' . $row['ID'];
                        echo '<br /> Paymenttype: ' . $row['paymenttype'];
                        echo '<br /> Customername: ' . $row['customername'];
                        echo '<br /> Email: ' . $row['email'];
                        echo '<br /> Address: ' . $row['address'];
                        echo '<br /> Cardnumber: ' . $row['cardnumber'];
                    }
                }
                ?>


              <form action="update_payment.php" method="POST">
                  <table border="1" bgcolor="grey">
                      <tr>

                          <th>ID</th>
                          <th>CARDNAME</th>
                          <th>Online Payment Type</th>
                          <th>HOLDER NAME </th>
                          <th>EMAIL </th>


                          <th>card_number </th>






                      </tr>


                      <tr>
                          <td><input type="text" name="ID"></td>
                          <td><input type="text" name="cardname"> </td>
                          <td><input type="text" name="paymenttype"></td>
                          <td><input type="text" name="customername"></td>
                          <td><input type="text" name="email"></td>


                          <td><input type="text" name="cardnumber"></td>

                      </tr>
                      <td><button type="submit" name="submit" id="submit">submit</button></td>
                  </table>
              </form>

              <style type="text/css">
                  .submit {
                      border-radius: 10px;
                      height: 70px;
                      width: 600px;
                  }

                  #editBtn {
                      width: 400px;
                      height: 40px;
                      background-color: red;
                      color: yellow;
                      border-radius: 30px;
                  }

                  h1 {
                      font-size: 60px;
                  }
              </style>
















          </div>
      </body>







      <br>
      <br><br>



      <footer>
          <div class="footer-gray">
              <div class="footer-custom">
                  <div class="footer-lists">
                      <div class="footer-list-wrap">
                          <h6 class="ftr-hdr">About Ust</h6>
                          <ul class="ftr-links-sub">
                              <art:content rule="!loggedin">
                                  <li class="ftr-Login"><span class="link login-trigger">+94 123 234 345</span></li>
                                  <li class="ftr-Login"><span class="link login-trigger">Team7@sliit.lk</span></li>
                                  <li class="ftr-Login"><span class="link login-trigger">MR. RENT , 143 Main road ,
                                          Malambe</span></li>
                              </art:content>
                          </ul>
                      </div>

                  </div>
                  <div class="footer-social">
                      <h6 class="ftr-hdr">Follow Us</h6>
                      <ul>
                          <li>
                              <img width="24" height="24" alt="Like us on Facebook" src="../images/footer/fb.png">
                          </li>
                          <li>
                              <img width="24" height="24" alt="Follow us on Google+" src="../images/footer/gplus.png">
                          </li>
                          <li>
                              <img width="24" height="24" alt="Follow us on Pinterest" src="../images/footer/pin-badge.png">
                          </li>
                          <li>
                              <img width="24" height="24" alt="Follow us on Instagram" src="../images/footer/instagram-badge.png">
                          </li>
                          <li>
                              <img width="67" alt="Follow us on Twitter" src="../images/footer/twitter.png">
                          </li>
                      </ul>
                  </div>
                  <!--/.footer-social-->
                  <div class="footer-legal">
                      <p>&copy; MLB_PG.02.01_01. All Rights Reserved. | <a href="#" rel="nofollow">Privacy Policy</a> | <a href="#" rel="nofollow">Terms
                              of Use</a> | <a href="#" rel="nofollow">Terms of Sale</a></p>
                      <p>This is a groupwork of sliit and this is not the final product.</p>
                      <p>this is done by MLB_PG.02.01_01 and this is .</p>
                  </div>
              </div>
          </div>
      </footer>

  </body>



  </html>