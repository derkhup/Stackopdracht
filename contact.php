<?php
include_once 'header.php';
?>

        <section class="main-container">
            <div class="main-wrapper">
                <h2>Contact</h2>
                
                <center> <br>
                
                Onder constructie
                
                </center>
                
                <br>
                  <br>
                    <br>
                    <script>
                    $(document).ready(function(){
                    $("button").click(function(){
                    $(".test") .slideToggle (3000);
                          });
                    });
                    </script>
                    <center><button><img class="test" src="IMG/download.png"></button></center> 
                    
                    <?php
                    if (isset($_SESSION['u_id'])) {
                        echo "You are logged in";
                        
                    }
                    
                    ?>
                
            </div>
        </section>
<?php
include_once 'footer.php';
?>