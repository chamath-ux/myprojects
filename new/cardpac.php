<?php 
    include 'connection.php';

 $sql = "SELECT image,title,description FROM packages";
                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while($row = $result->fetch_assoc()) {
                                           echo " <div class='card-deck'>";
                                              echo"<div class='card'>";
                                                     echo '<img src ="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'"/>';
                                                echo "<div class='card-body'>";
                                                  echo "<h5 class='card-title'>".$row['title']."</h5>";
                                                  echo "<p class='card-text'>".$row['description']."</p>";
                                                echo "</div>";
                                                echo "<div class='card-footer'>
                                                  <small class='text-muted'>Last updated 3 mins ago</small>
                                                </div>
                                              </div>";
                                      
                                        }
                                    } else {
                                        echo "<div class='alert alert-success'>
                                                    thank you for paiten Coming soon with packages
                                                </div>";
                                    }

    ?>