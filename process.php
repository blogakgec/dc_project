
<!doctype html>
<html>
    <head>
        <link rel="stylesheet" href="stylesheets/style.css" type="text/css" />
    </head>
    <body>
        <div id="big_wrapper">
            <div id="header">
                <h1 id="head_text">AKGEC LATE ENTRY SYSTEM</h1>
            </div>
            <div id="inner_box">
                <div>
                    <img src="images/gaurav.jpg" width="250px" height="250px" id="image" id="img_p"  />
                </div>
                
                <div id="data1">
                    
                <?php
                    session_start();
                    
                    require('includes/connection.php');
                    $st_no= $_POST['st_no'];
                    $_SESSION['student_no']=$st_no;
                    $query= "SELECT * FROM data WHERE st_no=".$st_no." ";
                    $query_select= mysqli_query($con,$query);
                    if($query_select)
                        {
                            while($query_detail= mysqli_fetch_array($query_select,MYSQLI_ASSOC))
                                {
                                echo '<p id="info">';
                                echo '<div id="name">'.$query_detail['name'].'</div>';
                                echo '<hr><br>';
                                echo '<div id="student_no">'.$query_detail['st_no'].'</div>';
                                echo '<div id="branch">';
                                if($query_detail['branch'] == 'ECE')
                                {
                                    echo "Electronics and Communication Engineering";
                                }
                                echo '</div>';
                                
                            //    echo $query_detail['name'];
                              //  echo '   -    ';
                            //    echo $query_detail['st_no'];
                            //    echo '<br>';
                            //    echo '<div id="inner_text" >';
                            //    echo $query_detail['branch'];
                            //    echo '  -   ';
                            //    echo $query_detail['year'];
                            //    echo 'year</p>';
                            //    echo '</div>';                                
                                }
                        }
                    else
                        {
                        echo "error";
                        echo mysqli_error($con);
                        die();
                        }
                ?>    
                <div id="button_box">
                    
                    <form action="process_register.php" method="post">
                        <br><br>
                        <input type="submit" value="REGISTER LATE ENTRY" id="button1" />
                        
                    
                    </form>   
                
                </div>
                
                
                </div>
                
                
            </div>
            
            
            
            <div id="footer">
                <img src="images/silogo.png" width="60px" height="60px" id="image_logo" />
                <p id="footer_text">Powered by Software Incubator</p>
                
            </div>
        </div>
        
    </body>



</html>