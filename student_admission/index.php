<!DOCTYPE html>
<html>
<head>
    <title>Student Admission Form</title>

    <style>

        body{
            font-family: Arial, sans-serif;
            background:#f4f4f4;
        }

        .container{
            width:500px;
            margin:40px auto;
            background:white;
            padding:20px;
            border-radius:10px;
            box-shadow:0px 0px 10px gray;
        }

        h2{
            text-align:center;
        }

        input,
        select,
        textarea{
            width:100%;
            padding:10px;
            margin-top:5px;
            margin-bottom:15px;
        }

        button{
            width:100%;
            padding:12px;
            background:green;
            color:white;
            border:none;
            cursor:pointer;
            font-size:16px;
        }

    </style>

</head>

<body>

<div class="container">

<h2>Student Admission Form</h2>

<form action="insert.php" method="POST">

<label>Full Name</label>
<input type="text" name="fullname" required>

<label>Email</label>
<input type="email" name="email" required>

<label>Phone Number</label>
<input type="text" name="phone" required>

<label>Gender</label>

<select name="gender">
    <option value="Male">Male</option>
    <option value="Female">Female</option>
</select>

<label>Course</label>

<select name="course">
    <option value="BSCS">BSCS</option>
    <option value="BSIT">BSIT</option>
    <option value="BBA">BBA</option>
    <option value="BSE">BSE</option>
</select>

<label>Address</label>

<textarea name="address" rows="4"></textarea>

<button type="submit" name="submit">
    Submit
</button>

</form>

</div>

</body>
</html>