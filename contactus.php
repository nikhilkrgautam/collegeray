<!DOCTYPE html>
<html lang="en-IN">
    <head>
           <meta charset="UTF-8">
           <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            CONTACT US
        </title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    </head>
        <body>
               
           <!--Including header file-->
           <?php include "header.html" ?>
                   
             <!--Contact us form starts here-->
             <section>
                    <div class="container mb-5">
                        <h1 class="text-center text-capitalize pt-5">
                            Contact Us
                        </h1>
                        <hr class="w-25 mx-auto pt-5"> 
                          <div class="w-50 mx-auto"> 
    
                             <form action= "contact.php" method="post" enctype="multipart/form-data">
                                 <div class="form-group">
                                     <label for="name">Name</label>
                                     <input type="text" class="form-control" name="name" placeholder="Enter Your Name">
                                 </div>
    
                                 <div class="form-group">
                                      <label for="email">Email:</label>
                                      <input type="text" class="form-control" name="mail" placeholder="Enter Your Email">
                                 </div>
                                
                                 <div class="form-group">
                                        <label >Message:</label>
                                        <textarea class="form-control" name="message" rows="7"></textarea>
                                 </div>
    
                                 <div class="form-group form-check">
                                        <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox"> Remember me
                                        </label>
                                 </div>
    
                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                             </form> 
                          </div>  
                    </div>  
                </section>
                <!--Contact us form ends here-->


          <!--Including footer-->
         <?php include "footer.html" ?>

                
                </body>
                </html>