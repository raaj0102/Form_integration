<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Form Data</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">

        <link href="assets/css/bootstrap.min.css" rel="stylesheet">

        <link href="assets/css/bootstrap-icons.css" rel="stylesheet">
    </head>
    <body>
        <form action="form-data" method="post" id="submit">
            <table class="table table-bordered mt-2" style="color:black;">   
                <tr>
                    <td>
                <div class="container mt-2"> 

                    <div class="row">
                        <div class="col-lg-6">
                            <label>Name </label>
                            <input class="form-control" type="text" name="name" required>
                        </div>
                        <div class="col-lg-6">
                            <label>Contact </label>
                            <input  class="form-control" type="number" name="contact" required>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-lg-6">
                            <label>Email ID</label>
                            <input class="form-control" type="email" name="email" required>	 
                        </div>
                        <div class="col-lg-6">
                            <label>Photo</label>
                            <input class="form-control" accept="image/*" name="user_photo" type='file'>                          
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-12">
                            <label>Objective</label>
                            <textarea class="form-control" name="obj"></textarea>
                        </div>

                    </div>
                    <div class="row mt-2">
                        <div class="col-md-3">
                            <label>Qualification</label>
                        </div>
                        <div class="col-md-3">
                            <label>Board</label>
                        </div>
                        <div class="col-md-3">
                            <label>Year</label>
                        </div>
                        <div class="col-md-3">
                            <label>%</label>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                    <div id="inputContainer1" >
                        <div class="row inputWrapper1">
                            <div class="col-md-3">
                                <input class="form-control" type="text" name="qq[]">
                            </div>
                            <div class="col-md-3">
                                <input class="form-control" type="text" name="bb[]">
                            </div>
                            <div class="col-md-3">
                                <input class="form-control" type="number" name="yy[]">
                            </div>
                            <div class="col-md-2">
                                <input class="form-control" type="number" name="per[]">
                            </div>
                            <div class="col-md-1">
                                <button type="button" id="add-btn1" class="btn btn-primary"><i class="bi bi-plus-circle-fill"></i></button>
                            </div>
                        </div> 
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-12">
                            <label>Hobbies</label>
                            <textarea class="form-control" name="hobbies"></textarea>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-5">
                            <label>Skill</label>
                        </div>
                        <div class="col-md-6">
                            <label>Description</label>
                        </div>
                    </div>
                    <div id="inputContainer2">
                        <div class="row mt-2 inputWrapper2">
                            <div class="col-md-5">

                                <input class="form-control" type="text" name="skill[]">
                            </div>
                            <div class="col-md-6">

                                <input class="form-control" type="text" name="desc[]">
                            </div>
                            <div class="col-md-1">
                                <button type="button" id="add-btn2" class="btn btn-primary"><i class="bi bi-plus-circle-fill"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-3">
                            <label>Experience</label>
                        </div>
                        <div class="col-md-3">
                            <label>From</label>
                        </div>
                        <div class="col-md-3">
                            <label>To</label>
                        </div>
                        <div class="col-md-3">
                            <label>Description</label>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                    <div id="inputContainer">
                        <div class="row inputWrapper">
                            <div class="col-md-3">
                                <input class="form-control" type="text" name="exp[]" required>
                            </div>
                            <div class="col-md-3">
                                <input class="form-control" type="date" name="from[]" required>
                            </div>
                            <div class="col-md-3">
                                <input class="form-control" type="date" name="to[]" required>
                            </div>
                            <div class="col-md-2">
                                <input class="form-control" type="text" name="descr[]" required>
                            </div>
                            <div class="col-md-1">
                                <button type="button" id="add-btn" class="btn btn-primary"><i class="bi bi-plus-circle-fill"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-12">
                            <label>Declaration</label>
                            <input type="checkbox" required>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"> 
                            <button type="submit" class="form-control">Submit</button>
                        </div>    
                    </div>
                </div>
                    </td>
                </tr>     
            </table> 
        </form>
        <script>
            $(document).ready(function () {
                // Add new input field
                $('#add-btn').click(function () {
                    $('#inputContainer').append(` <div id="inputContainer">
                           <div class="mt-3 row inputWrapper">
                               <div class="col-md-3">
                                   <input class="form-control" type="text" name="exp[]">
                               </div>
                               <div class="col-md-3">
                                   <input class="form-control" type="date" name="from[]">
                               </div>
                               <div class="col-md-3">
                                   <input class="form-control" type="date" name="to[]">
                               </div>
                               <div class="col-md-2">
                                   <input class="form-control" type="text" name="descr[]">
                               </div>
                               <div class="col-md-1">
                                   <button type="button" class="btn btn-danger removeInput"><i class="bi bi-dash-circle-fill"></i></button>
                               </div>
                           </div>
       </div>
                           `);
                });
                $('#inputContainer').on('click', '.removeInput', function () {
                    $(this).closest('.row').remove();
                });
            });
        </script>
        <script>
            $(document).ready(function () {
                // Add new input field
                $('#add-btn1').click(function () {
                    $('#inputContainer1').append(` <div id="inputContainer1" >
                        <div class="row inputWrapper1 mt-2">
                            <div class="col-md-3">
                                <input class="form-control" type="text" name="qq[]">
                            </div>
                            <div class="col-md-3">
                                <input class="form-control" type="text" name="bb[]">
                            </div>
                            <div class="col-md-3">
                                <input class="form-control" type="number" name="yy[]">
                            </div>
                            <div class="col-md-2">
                                <input class="form-control" type="number" name="per[]">
                            </div>
                            <div class="col-md-1">
                                <button type="button" class="btn btn-danger removeInput1"><i class="bi bi-dash-circle-fill"></i></button>
                            </div>
                        </div> 
                        </div>
                        `);
                });
                $('#inputContainer1').on('click', '.removeInput1', function () {
                    $(this).closest('.row').remove();
                });
            });
        </script>
        <script>
            $(document).ready(function () {
                // Add new input field
                $('#add-btn2').click(function () {
                    $('#inputContainer2').append(`<div id="inputContainer2">
                        <div class="row mt-2 inputWrapper2">
                            <div class="col-md-5">

                                <input class="form-control" type="text" name="skill[]">
                            </div>
                            <div class="col-md-6">

                                <input class="form-control" type="text" name="desc[]">
                            </div>
                            <div class="col-md-1">
                                <button type="button" class="btn btn-danger removeInput2"><i class="bi bi-dash-circle-fill"></i></button>
                            </div>
                        </div>
                        </div>
                        `);
                });
                $('#inputContainer2').on('click', '.removeInput2', function () {
                    $(this).closest('.row').remove();
                });
            });
        </script>
    </body>
</html>
