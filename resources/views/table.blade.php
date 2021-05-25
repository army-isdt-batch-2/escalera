<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
        <div class="container pt-5">
            <h3>Teacher</h3>
            
                <div class="row align-items-center">
                    
                        <div class="card">
                            <div class="card-body row">
                                <div class="coll-10">
                                
                                    <h4>All Records</h4>
                                    
                                </div>
                                
                                
                                <div class="col-6"> 
                                    <input type="text" class="form-control" placeholder="Search">
                                </div> 
                                
                               
                                <div class="col-6 text-end"> 
                                <button class="btn btn-dark pull-right">Create</button>
                                    
                                </div> 
                                
                                <br><br>
                                <hr>

                                <table class="table">
                                    <thead>
                                        
                                    </thead>
                                    <tbody>
                                        <tr>
                                    
                                        
                                            <th scope="row">#</th>
                                            <td>First</td>
                                            <td>Last</td>
                                            <td>Handle</td>

                                        </tr>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td colspan="2">Larry the Bird</td>
                                            <td>@twitter</td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>                                  
                    
                </div>        
        </div>           




        




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>