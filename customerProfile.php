<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
    <script src="country.js"></script>
</head>
<body>
    <h1>Customer Profile</h1>
    <div class="MyAccount" style="border: 1px solid ;">
        <a href="#Overview">Overview</a><br>
        <a href="#Orders">Orders</a><br>
        <a href="#Setting">Setting</a><br>
        <a href="#ShippingAddress">Shipping Address</a><br>
        <a href="#MessageCenter">Message Center</a><br>
        <a href="#Wallet">Wallet</a>

    </div>
    
    <div id="Overview" style="border: 1px solid;">
        <h1>Overview</h1>

        <h3>Personal Information</h3>
        <a href="">Upload picture</a><br>
        <a href="">Edit Profile</a>

        <h3>Security Information</h3>
        <a href="">Change email address</a><br>
        <a href="">Change Password</a><br>
        <a href="">Change Password</a>

        <h3>Activate email notifications</h3>
        <a href="">Activate</a>
    </div>
    <div id="Settings" style="border: 1px solid;">
        <h1>Account</h1>
        <h3>Personal Information</h3>
        <a href="">Upload picture</a><br>
        <a href="">Edit Profile</a>

        <h3>Security Information</h3>
        <a href="">Change email address</a><br>
        <a href="">Change Password</a><br>
        <a href="">Change Password</a>

        <h3>Activate email notifications</h3>
        <a href="">Activate</a>
    </div>
    <div id="ShippingAddress" style="border: 1px solid;">
        <h1>My Shipping Address</h1>

        <form action="">
            <label>Contact</label>
            <input type="text" placeholder="Name">
            <input type="text" placeholder="Phone Number">
            <br>
            <label>Address</label>
            <input type="text" placeholder="Street,house/apartment/Unit">
            <input type="text" placeholder="Apt, Suite, Unit, etc. (Optional)">
            <input type="text" placeholder="Zip Code">
            <br>
            <select name="country" id="country">
                <option value="Select Country"></option>
            </select>
            <input type="submit" value="Save">
        </form>
       
    </div>
 
</body>
</html>