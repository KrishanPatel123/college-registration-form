<?php
include('conn.php');
include('insert_data.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Registration form</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- CSS Link -->
    <link rel='stylesheet' type='text/css' media='screen' href='index.css'>
    <!-- bootstrap CDN Link -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body style="background-color:rgba(255, 99, 71, 0.5);">
    <div class="container bg-primary my-5 rounded">
        <div class="row">
            <h4 class="text-center my-3">Registration form</h4>
            <form method="POST" class="my-3 ">
                <div class="mb-3 col-4 mx-auto">
                    <label class="form-label fs-5 " style="font-weight:500;">Name</label>
                    <input type="text" class="form-control" name="Name">
                </div>
                <div class="mb-3 col-4 mx-auto">
                    <label class="form-label fs-5" style="font-weight:500;">Email</label>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="mb-3 col-4 mx-auto">
                    <label class="form-label fs-5" style="font-weight:500;">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <div class="mb-3 col-4 mx-auto">
                    <label class="form-label fs-5" style="font-weight:500;">City</label>
                    <input type="text" class="form-control" name="City">
                </div>
                <div class="mb-3 col-4 mx-auto">
                    <label class="form-label fs-5" style="font-weight:500;">Pin Code</label>
                    <input type="text" class="form-control" name="Code_Pin">
                </div>
                <div class="mb-3 col-4 mx-auto">
                    <label class="form-label fs-5" style="font-weight:500;">State</label>
                    <input type="text" class="form-control" name="State">
                </div>
                <div class="mb-3 col-4 mx-auto">
                    <label class="form-label fs-5" style="font-weight:500;">Country</label>
                    <input type="text" class="form-control" name="Country">
                </div>
                <div class="mb-3 col-4 mx-auto">
                    <label class="form-label fs-5" style="font-weight:500;">Course</label>
                    <select name="Course" class="form-control" style="font-weight:500;">
                        <option value="Course">Course</option>
                        <option value="BCA">BCA</option>
                        <option value="MCA">MCA</option>
                        <option value="B.sc">B.sc</option>
                        <option value="M.sc">M.sc</option>
                        <option value="BA">BA</option>
                        <option value="BBA">BBA</option>
                        <option value="MBA">MBA</option>
                        <option value="Other">Other</option>
                    </select>
                    </select>
                </div>
                <div class="mb-3 col-4 mx-auto">
                    <label class="form-label fs-5" style="font-weight:500;">Qualification</label>
                    <select name="Qualification" class="form-control" style="font-weight:500;">
                        <option value="Qualification">Qualification</option>
                        <option value="10th">10th</option>
                        <option value="12th">12th</option>
                        <option value="Bachelor">Bachelor</option>
                        <option value="Masters">Masters</option>
                        <option value="Other">Other</option>
                    </select>
                    </select>
                </div>
                <div class="mb-3 col-4 mx-auto">
                    <label class="form-label fs-5" style="font-weight:500;">Hobbies</label>
                    <select name="Hobbies" class="form-control" style="font-weight:500;">
                        <option value="Hobbies">Hobbies</option>
                        <option value="Travel">Travel</option>
                        <option value="Sports">Sports</option>
                        <option value="Reading">Reading</option>
                        <option value="Coding">Coding</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
                <div class="mb-3 col-4 mx-auto">
                    <label class="form-label fs-5" style="font-weight:500;">Query</label>
                    <textarea class="form-control" name="text_are" placeholder="Leave a comment here"
                        style="height: 80px"></textarea>
                </div>
                <button type="submit" class="btn btn-danger" name="submit">Submit</button></br>
                <span class="form-label fs-5" style="font-weight:500;">Develop By:- Priyanka Kumari</span>
            </form>
        </div>
    </div>
</body>

</html>