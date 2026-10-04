<!DOCTYPE html>
<html>
<head>

<title>Registration Form</title>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<style>
    body {
        font-family: Arial;
        width: 500px;
        margin: 30px auto;
    }

    input, select {
        width: 100%;
        padding: 8px;
        margin: 5px 0 15px;
    }

    .error {
        color: red;
    }

    button {
        padding: 10px 20px;
    }
</style>

</head>

<body>

<h2>Registration Form</h2>

<form id="registerForm">

<label>Name</label>
<input type="text" id="name">

<label>Address</label>
<input type="text" id="address">

<label>Username</label>
<input type="text" id="username">

<label>Email</label>
<input type="text" id="email">

<label>Password</label>
<input type="password" id="password">

<label>Website</label>
<input type="text" id="website">

<label>Phone</label>
<input type="text" id="phone">

<label>Gender</label><br>
<input type="radio" name="gender" value="Male"> Male
<input type="radio" name="gender" value="Female"> Female

<br><br>

<label>Course</label>

<select id="course">
    <option value="">Select Course</option>
    <option value="BCA">BCA</option>
    <option value="BSc CSIT">BSc CSIT</option>
    <option value="BIT">BIT</option>
</select>

<button type="submit">Register</button>

</form>

<p id="message"></p>

<script>

$("#registerForm").submit(function(e) {

    e.preventDefault();

    let name = $("#name").val().trim();
    let address = $("#address").val().trim();
    let username = $("#username").val().trim();
    let email = $("#email").val().trim();
    let password = $("#password").val();
    let phone = $("#phone").val().trim();
    let gender = $("input[name='gender']:checked").val();
    let course = $("#course").val();

    let errors = [];

    // Name
    if (name === "") {
        errors.push("Name is required.");
    } else if (/[0-9]/.test(name)) {
        errors.push("Name must not contain numbers.");
    }

    // Address
    if (address === "") {
        errors.push("Address is required.");
    }

    // Username
    if (username === "") {
        errors.push("Username is required.");
    } else if (!/^[A-Za-z0-9_]+$/.test(username)) {
        errors.push("Username can contain only letters, numbers and underscore.");
    }

    // Email
    if (email === "") {
        errors.push("Email is required.");
    } else if (!email.includes("@")) {
        errors.push("Email must contain @.");
    }

    // Password
    if (!/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^A-Za-z0-9]).{8,}$/.test(password)) {
        errors.push(
            "Password must have 8 characters, digit, uppercase, lowercase and special character."
        );
    }

    // Phone
    if (!/^(98|97|96)[0-9]{8}$/.test(phone)) {
        errors.push("Phone must contain 10 digits and start with 98, 97 or 96.");
    }

    // Gender
    if (!gender) {
        errors.push("Please select gender.");
    }

    // Course
    if (course === "") {
        errors.push("Please select a course.");
    }

    if (errors.length > 0) {
        $("#message")
            .css("color", "red")
            .html(errors.join("<br>"));
    } else {
        $("#message")
            .css("color", "green")
            .html("Registration successful!");
    }

});

</script>

</body>
</html>