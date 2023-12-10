<?php

session_start();

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <script src='scripts.js'></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Billing System</title>
    <link rel="icon" type="image/png" href="fevi.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/brands.min.css" integrity="sha512-W/zrbCncQnky/EzL+/AYwTtosvrM+YG/V6piQLSe2HuKS6cmbw89kjYkp3tWFn1dkWV7L1ruvJyKbLz73Vlgfg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/fontawesome.min.css" integrity="sha512-siarrzI1u3pCqFG2LEzi87McrBmq6Tp7juVsdmGY1Dr8Saw+ZBAzDzrGwX3vgxX1NkioYNCFOVC0GpDPss10zQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/regular.min.css" integrity="sha512-rOTVxSYNb4+/vo9pLIcNAv9yQVpC8DNcFDWPoc+gTv9SLu5H8W0Dn7QA4ffLHKA0wysdo6C5iqc+2LEO1miAow==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/solid.min.css" integrity="sha512-P9pgMgcSNlLb4Z2WAB2sH5KBKGnBfyJnq+bhcfLCFusrRc4XdXrhfDluBl/usq75NF5gTDIMcwI1GaG5gju+Mw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/svg-with-js.min.css" integrity="sha512-4oP5WpLD1feGamTDxyKyYjJj9a15AlPfKOt78LpGmZ+XfrUcuC7hjHVTuzhJhO4pPvi3RHL6CI2Tyjdoik3AnA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/v4-font-face.min.css" integrity="sha512-sx5f0oBw5bYJXpvIAFXqCP3p5heQFrIDUJEUu2ja7WbmFHBHKY565OjQK2PQM+8PruMwcDR18WEIOse4qEBJ8Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/v4-shims.min.css" integrity="sha512-fWfO/7eGDprvp7/UATnfhpPDgF33fetj94tDv9q0z/WN4PDYiTP97+QcV1QWgpbkb+rUp76g6glID5mdf/K+SQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/v4-shims.min.css" integrity="sha512-fWfO/7eGDprvp7/UATnfhpPDgF33fetj94tDv9q0z/WN4PDYiTP97+QcV1QWgpbkb+rUp76g6glID5mdf/K+SQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js" integrity="sha512-uKQ39gEGiyUJl4AI6L+ekBdGKpGw4xJ55+xyJG7YFlJokPNYegn9KwQ3P8A7aFQAUtUsAQHep+d/lrGqrbPIDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/brands.min.js" integrity="sha512-IZeK0c+nwCpZdoWLUoguVYEnBOwOnS3eTyS5Eg57YCk41x2NphG1E/vSa886whDSXG7vGauI8mmbP5PI/VC5LQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/brands.min.js" integrity="sha512-IZeK0c+nwCpZdoWLUoguVYEnBOwOnS3eTyS5Eg57YCk41x2NphG1E/vSa886whDSXG7vGauI8mmbP5PI/VC5LQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/conflict-detection.min.js" integrity="sha512-tOK04OMrEtOhHdTJSiClQ6wlAHB4BizsjbKbt8KRLLfN1xeCl84CdOW0B++kTNYPp+VDlgJg+jrWX6FuCDx7kg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/fontawesome.min.js" integrity="sha512-64O4TSvYybbO2u06YzKDmZfLj/Tcr9+oorWhxzE3yDnmBRf7wvDgQweCzUf5pm2xYTgHMMyk5tW8kWU92JENng==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/regular.min.js" integrity="sha512-kSAGSlODsZwG7bMv/Hydyvybjk+WOz4oEqQiWYwpCxQ7/7yXMFynr2QrvNc2myZW/7wyi0IF2TXZZWMeg8AGhw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/solid.min.js" integrity="sha512-s6yNeC6faUgveCQocceGXVia7ciAebyTH7hRNazwZa2FHhnxX22qaGeb9d3a8PUKdnoHo3T3bYI/0ZOjmgWkNg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/v4-shims.min.js" integrity="sha512-6n3X18GAJomziz6HVPbmyBOEZeoB8+unwEBTRXFs3IZTRYYCkbXNAWNV68uHujamEvDBqaGe2FTW19o81h1/RA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body onload="date()">
    
    <section class="background-radial-gradient overflow-hidden">
    <style>
        h2{
            align-items: center;
        }
      .background-radial-gradient {
        background-color: hsl(218, 41%, 15%);
        background-image: radial-gradient(650px circle at 0% 0%,
            hsl(220, 11%, 89%) 15%,
            hsl(18, 78%, 55%) 35%,
            hsl(218, 41%, 20%) 75%,
            hsl(218, 41%, 19%) 80%,
            transparent 100%),
          radial-gradient(1250px circle at 100% 100%,
            hsl(218, 41%, 45%) 15%,
            hsl(218, 41%, 30%) 35%,
            hsl(218, 41%, 20%) 75%,
            hsl(218, 41%, 19%) 80%,
            transparent 100%);
      }

        .row1{
          position: relative;
        }
      #radius-shape-1 {
        height: 220px;
        width: 220px;
        top: -60px;
        left: -130px;
        background: radial-gradient(#44006b, #ad1fff);
        overflow: hidden;
      }
  
      #radius-shape-2 {
        border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
        bottom: -60px;
        right: -110px;
        width: 300px;
        height: 300px;
        background: radial-gradient(#44006b, #ad1fff);
        overflow: hidden;
      }
  
      .bg-glass {
        background-color: hsla(0, 0%, 100%, 0.9) !important;
        backdrop-filter: saturate(200%) blur(25px);
      }
      h1{
        padding-left: 36%;
      }
      p{
        padding-left: 42%;
      }
      hr{
        font-size: 10%;
      }

      .button{
         padding-left:70%;

      }
    </style>
  
    <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
      <div class="row gx-lg-5 align-items-center mb-5">
        <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
          <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
        <br />
            <span style="color: hsl(218, 81%, 75%)"></span>
          </h1>
          <h3 style="color: hsl(216, 16%, 94%)"></h3>
        </div>
  
        <div class="col-lg-12 mb-7 mb-lg-5 position-relative">
          <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
          <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>
  
          <div class="card bg-glass">
            <div class="card-body px-10 py-5 px-md-5">
             <!-- <form action="checkbill.php">
            <div class="row">
                  <div class="col-md-3 mb-2">
                    <div class="form-outline">
                      <input type="number" id="form3Example1" class="form-control" name="id"   placeholder="Enter Token Id"/>
                    </div>
                      <button type="button" class="btn btn-success">Check Bill</button>
                    
                  </div>
                 
                  </div>

                  
                  
              </form> -->
              <form action="checkbill.php" method="post">
            <div class="row">
            <div class="col-md-3 mb-2">
            <div class="form-outline">
            
            <input type="number" class="form-control" id="inputText" name="inputText" placeholder="Type Token number">
           </div>
           <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </div>
            </div>
          </form>
                <br>

          <form action="backed.php"  method="POST" name="priceOptionForm" class="priceOptionForm" id="priceOptionForm">

                <!-- 2 column grid layout with text inputs for the first and last names -->
                <h1><b>Pande Agency</b></h1>
                 <p class="font-weight-bold">Building Material</p>

                 
                
                
                 <hr>
                 
                 <br></br>
                <h2>Customer<i class="fa-solid fa-star-of-life fa-xs" style="color: #e82711;"></i></h2>
                <br>
                <div class="row">
                  <div class="col-md-4 mb-4">
                    <div class="form-outline">
                      <input type="text" id="form3Example10" class="form-control" name="fname" placeholder="Enter Customer Name" data-toggle="tooltip"  data-placement="top"  title="Enter Customer Name" required/>
                      <label class="" for="form3Example1"></label>
                    </div>
                  </div>
                  <div class="col-md-4 mb-4">
                    <div class="form-outline">
                      <input type="text" id="form3Example12" name="lname" class="form-control" placeholder="Customer Last  Name" title="Enter Customer last Name" required/>
                      <label class="form-label" for="form3Example2"></label>
                    </div>
                  </div>
                  <div class="col-md-4 mb-4">
                    <div class="form-outline">
                      <input type="tel" id="form3Example13" name="pno" class="form-control" placeholder="Customer Phone number" title="Enter 10 digit number" pattern="[1-9]{1}[0-9]{9}" minlength="10" maxlength="10" onmouseout="phonenumber()" required/>
                      <label class="form-label" for="form3Example2"></label>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-5 mb-4">
                    <div class="form-outline">
                      <input type="text" id="form3Example14" name="VillegeName" class="form-control"  placeholder="Enter Villege Name"  title="Enter Villege Name" required/>
                      <label class="form-label" for="form3Example1"></label>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="date" id="form3Example15" name="date" class="form-control" placeholder="Enter today date"  title="Enter today date"  disabled/>
                      <label class="form-label" for="form3Example2"></label>
                    </div>
                  </div>
                  <hr>
                </div>

                <div class="row">
                    <h2>Cements</h2>
                    <br>
                    <div class="col-md-4 mb-4">
                      <div class="form-outline">
                        <select class="form-select" aria-label="Default select example" name="cementname" title="Enter Cement Name"> 
                            <option selected>Select Cement</option>
                            <option value="JK SUPER">Jk Super</option>
                            <option value="ULTRATECH">Ultratech</option>
                            <option value="BIRL SUPER KING">Birla Super King</option>
                          </select>
                      </div>
                    </div>
                    <div class="col-md-3 mb-3">
                      <div class="form-outline">
                        <input type="number" id="form3Example2" name="cementquality" class="form-control" placeholder="Enter bag Quantity" title="Enter Quantity" onmouseleave="cement()"  onmousemove="tbill()" required/>
                        <label class="form-label" for="form3Example2"></label>
                      </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="form-outline">
                          <input type="number" id="form3Example3" name="cement_Rate" class="form-control" placeholder="Rate" title="Enter Rate" onmouseleave="cement()" onmousemove="tbill()"  required/>
                          <label class="form-label" for="form3Example2"></label>
                        </div>
                    </div>
                    <div class="col-md-2 mb-3">
                      <div class="form-outline">
                        <input type="number" id="form3Example4" name="CTotal" class="form-control" placeholder="Cement Total" disabled/>
                        <label class="form-label" for="form3Example2"></label>
                      </div>
                    </div>
                      <hr>
                    
                  </div>
                  <div class="row">
                    <h2>Marbal</h2>
                    <br>
                    <div class="col-md-4 mb-4">
                      <div class="form-outline">
                        <select class="form-select" name="marbalname" aria-label="Default select example">
                            <option selected>Select Marbal</option>
                            <option value="ROUGH STONE">Rough Marbal</option>
                            <option value="SOFT MARBAL">Soft Marbal</option>
                            <option value="BLACK MARBAL(KADAPA)">Black marbal(Kadapa)</option>
                            <option value="KITCHEN MARBAL">Kitchen Marbal</option>
                            <option value="KITCHEN OTHERS">Kitchen others</option>
                          </select>
                      </div>
                    </div>
                    <div class="col-md-3 mb-3">
                      <div class="form-outline">
                        <input type="number" id="form3Example5" name="marbalquality" class="form-control" placeholder="Enter baras Quantity"  onmousemove="marbal()" onmouseleave="tbill()" required/>
                        <label class="form-label" for="form3Example2"></label>
                      </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="form-outline">
                          <input type="number" id="form3Example6" name="baras_Rate" class="form-control" placeholder="Rate" onmousemove="marbal()"  onmouseleave="tbill()" required/>
                          <label class="form-label" for="form3Example2"></label>
                        </div>
                    </div>
                    <div class="col-md-2 mb-3">
                      <div class="form-outline">
                        <input type="number" id="form3Example7" name="marbalTotal" class="form-control" placeholder="Marbal Total" disabled/>
                        <label class="form-label" for="form3Example2"></label>
                      </div>
                    </div>
                      <hr>
                    
                  </div>

                  <div class="row">
                    <h2>Payment</h2>
                    <br>
                    <div class="col-md-4 mb-4">
                      <div class="form-outline">
                        <select class="form-select" name="paymentstatus" aria-label="Default select example">
                            <option selected>Select Status</option>
                            <option value="Paid">Paid-Cash</option>
                            
                            <option value="Paid-UPI">Paid-UPI</option>
                            <option value="Pending">No Paid</option>
                           
                          </select>
                      </div>
                      
                    </div>
                   
                    <!-- <div class="col-md-4 mb-4">
                      <h2>Total Bill</h2>
                      <div class="form-outline">
                        <input type="number" id="form3Example8" name="Total Bill" class="form-control" placeholder="Total" disabled/>
                            
                      </div>
                    </div> -->
                    <div class="col-auto">
                      <label class="sr-only" for="inlineFormInputGroup">Total Bill</label>
                      <h2>Total Bill</h2>
                      <div class="input-group mb-2">
                        
                        <div class="input-group-prepend">
                          <div class="input-group-text" aria-disabled="true">₹</div>
                        </div>
                        <input type="number" class="form-control" name="totalpayament" id="form3Example8" placeholder="Total Bill" disabled>
                      </div>
                    </div>
                   <hr>
                   
                    
                    
                  </div>
                  
            
                
              
  
  
                <!-- Submit button -->
                <button type="submit"  id="btn" class="btn btn-primary btn-block mb-10">Done
                <button>
             
                <button type="reset" id="btn" class="btn btn-outline-primary" >Reset</button>
                
                 
  
                <!-- Register buttons -->
           
                </div>
               
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
 
 <script>
  document.onkeydown=function(){
   if(window.event.keyCode===13){
       submitForm();
   }
}
//Token id

 </script>
  
</body>
</html>