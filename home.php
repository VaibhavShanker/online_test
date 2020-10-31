<!DOCTYPE html>
<html>
  <head>
      <title>
            Online Test Platform
     </title>

     <link rel="stylesheet" type="text/css" href="HTML_CSS_Test_Vaibhav_Shanker.css">
  </head>
<body>
            <div id="wrapper">
                      
                      <div id="topright">
                        <ul id="menu1">
                            <li><a href='login.php'><u>Login</u></a></li>
                            <li><a href='register.php'><u>Register</u></a></li>
                            
                        </ul>

                      </div>

                        <div id="header">
                                <h1 id="logo">Online Test Platform</h1>
                                              
                        </div>
            </div>

                <div id="content">
                        <div id="subcontent">
                                <h1>Online Examination</h1>
                              
                                <p style="color:white">
                                   Free online test to practice for Competitive exams.<br>
                                   Aptitude, Logical Reasoning, Computer Questions <br>
                                   will help you to prepare for Online Exam,Entrance <br>
                                   and Interview. Learn and Practice online test for <br>
                                   Free and Prepare for your exam online with many <br> 
                                   free tests.
                                </p>

                                <button>Learn More</button>

                        </div>

         

                        
            <?php

                require "config.php";
                $sql = "SELECT * from testcat" ;
                $result =$conn->query($sql);
                if ($result->num_rows> 0) {
                while($row =$result->fetch_assoc()) {

                    echo "  <div class='Heading'>
                            <a><img src=".$row['chooseimage']." /></a>
                            <h1>".$row['testname']."</h1>
                            <h4>".$row['test_descr']."</h4>
                            </div>
                           
                            

                                                    
                    ";
                }
                }

             ?>
<!-- 
                                  <h1>Android</h1>
                                  <p>
                                    This Test will cover some basic<br>
                                    concepts of Android related to<br>
                                    App development and project creation.
                                  </p>

                                  <p>
                                    <b>
                                      <a href="login.php">Start Test</a>
                                    </b>
                                  </p> -->

                         <!-- </div> -->

<!-- 
                                <div class="Heading" id="hidediv" style="background:url('java.png')";>                                 
                                </div>     

                                <div class="Heading" id="hidediv" style="background:url('aptitude.png')";>                                  
                                </div>

                                <div class="Heading" id="hidediv" style="background:url('cpp.png')";>                                
                                </div>
                                                    
                                <div class="Heading">
                                  <h1>Java</h1>
                                  <p>
                                    This Test will cover the basic concepts<br>
                                    of Core Java, including etc and etc.
                                  </p>

                                  <p>
                                    <b>
                                      <a href="login.php">Start Test</a>
                                    </b>
                                  </p>
                                </div>
                                        
                                <div class="Heading">
                                  <h1>Aptitude test</h1>
                                  <p>
                                    This Test will cover the basic concepts<br>
                                    of Aptitude Test.
                                  </p>

                                  <p>
                                    <b>                                     
                                    <a href="login.php">Start Test</a>
                                    </b>
                                  </p>
                                  
                                </div>


                                <div class="Heading">
                                  <h1>C ++</h1>
                                  <p>
                                    This Test will cover the basic concepts <br>
                                    of C++.
                                  </p>

                                  <p>
                                    <b>
                                    <a href="login.php">Start Test</a>
                                    </b>
                                  </p>
                                </div>

                                <div class="Heading" id="hidediv" style="background:url('php.png')";> 
                                <!-- <a href='#' title='Edit'><img src='java.png' alt='Edit' /></a>                                  -->
                                <!-- </div>
                                        
                                <div class="Heading" id="hidediv" style="background:url('android.png')";>                                  
                                </div>

                                <div class="Heading" id="hidediv" style="background:url('python.png')";>                                
                                </div>
                            
                               <div class="Heading">
                               <h1>PHP</h1> -->
<!-- 
                                <?php

                                    // require "config.php";
                                    // $display="";
                                    // $sql = "SELECT * from testcat";
                                    // $result =$conn->query($sql);
                                    // if ($result->num_rows> 0) {
                                    // while($row =$result->fetch_assoc()) {
                                    // $display.='<div class="Heading">';
                                    // $display.='<h1>'.$row['testname'].'</h1>';
                                    // $display.='<p>'.$row['test_descr'].'</p>';
                                    // $display.='</div>';
                                    // }
                                    // }
                                ?> -->
<!--                                                                   
                                  <p>
                                    This Test will cover some very basic <br>
                                    basic and introductory concepts of Android.
                                  </p>

                                 <p>
                                    <b>
                                      <a href="login.php">Start Test</a>
                                    </b>
                                  </p>
                                </div>

                                        
                                <div class="Heading">
                                  <h1>Android</h1>
                                  <p>
                                    This Test will cover some basic<br>
                                    concepts of Android related to<br>
                                    App development and project creation.
                                  </p>

                                  <p>
                                    <b>
                                      <a href="login.php">Start Test</a>
                                    </b>
                                  </p>

                                </div>


                                <div class="Heading">
                                  <h1>Python</h1>
                                  <p>
                                    This Test will cover complete Python<br>
                                    with very important questions, <br>
                                    starting off from basics level.
                                  </p>

                                  <p>
                                    <b>
                                    <a href="login.php">Start Test</a>
                                    </b>
                                  </p>
                                </div>
                </div> -->

            <div id="footer">
              <div id="footerL">
                  <p>COPYRIGHT @2020</p>
              </div>
              <div id="footerR">
                  <p>Online test platform</p>
              </div>
          </div>

        </div>

</body>
</html>