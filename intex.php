
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Form</title>
     <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
 integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>


<div class="container"> <div class=" text-center mt-5 ">
        <h1> Welcome </h1>
    </div>
    <div class="row ">
        <div class="col-lg-7 mx-auto">
            <div class="card mt-2 mx-auto p-4 bg-light">
                <div class="card-body bg-light">
                    <div class="container">
                        <form action="server.php" method="POST" role="form">
                            <div class="controls">
                              
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_email">Email *</label> <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required."><br> </div>
                                    </div>
                                   
                                </div>
								
								
								 <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_email">Password *</label> <input id="form_password" type="password" name="password" class="form-control" placeholder="Please enter your Password *" required="required" data-error="Valid email is required."><br> </div>
                                    </div>
									</div>
                                <div class="row">
                                   
                                    <div class="col-md-2"> <input type="submit" class="btn btn-success btn-send pt-2 btn-block " value="Submit"> </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div> 
        </div> 
    </div>
</div>


























</body>
</html>