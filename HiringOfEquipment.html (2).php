

<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <h1>Hiring of Equipment</h1>

    <?php include 'CustomerListbox.php'; ?>
    <script>
        function populate() {
            var sel = document.getElementById("listBox");
            var result = sel.options[sel.selectedIndex].value;
            var CustomerDetails = result.split(',');
            document.getElementById("display").innerHTML = "The details of the selected Customer are: " + result;
            document.getElementById("CustomerId").value = CustomerDetails[0];
            document.getElementById("Surname").value = CustomerDetails[1];
            document.getElementById("FirstName").value = CustomerDetails[2];
            document.getElementById("Address").value = CustomerDetails[3];
            document.getElementById("PhoneNumber").value = CustomerDetails[4];
            document.getElementById("AccountBalance").value = CustomerDetails[5];
            document.getElementById("CreditLimit").value = CustomerDetails[6];
        }

        function toggleLock() {
            if (document.getElementById("amendViewbutton").value == "Amend Details") {
                document.getElementById("Surname").disabled = false;
                document.getElementById("FirstName").disabled = false;
                document.getElementById("Address").disabled = false;
                document.getElementById("PhoneNumber").disabled = false;
                document.getElementById("AccountBalance").disabled = false;
                document.getElementById("CreditLimit").disabled = false;
                document.getElementById("amendViewbutton").value = "View Details";
            } else {
                document.getElementById("Surname").disabled = true;
                document.getElementById("FirstName").disabled = true;
                document.getElementById("Address").disabled = true;
                document.getElementById("PhoneNumber").disabled = true;
                document.getElementById("AccountBalance").disabled = true;
                document.getElementById("CreditLimit").disabled = true;
                document.getElementById("amendViewbutton").value = "Amend Details";
            }
        }

       


function ConfirmCheck()
{
    var response;
    response = confirm('Are you sure you want to save these changes?');
    if(response)
    {
        document.getElementById("CustomerId").disabled = false;
        document.getElementById("Surname").disabled = false;
        document.getElementById("FirstName").disabled = false;
        document.getElementById("Address").disabled = false;
        document.getElementById("PhoneNumber").disabled = false;
        document.getElementById("AccountBalance").disabled = false;
        document.getElementById("CreditLimit").disabled = false;
		return true;
    }
    else
    {
        populate();
        toggleLock();
        return false;
    }
}
</script>

<p id ="display"> </p>
<div class ="boxx">
<input type = "button" value = "Amend Details" id = "amendViewbutton" onclick = "toggleLock()">

<form name="myForm" action = "AmendView.php" onsubmit="return ConfirmCheck()" method="post">

<label for  "CustomerId"> CustomerID </label>
<input type = "number" name = "CustomerId" id = "CustomerId" disabled>

<label for  "Surname">Surname</label>
<input type = "number" name = "Surname" id = "Surname"   disabled>

<label for  "FirstName">First Name</label>
<input type = "text" name = "FirstName" id = "FirstName"  disabled>

<label for  "Address">address Of Customer</label>
<input type = "text" name = "Address" id = "Address" disabled>

<label for  "PhoneNumber">Customer Phone Number</label>
<input type = "number" name = "PhoneNumber" id = "PhoneNumber" disabled>

<label for  "AccountBalance"> Account Balance </label>
<input type = "int" name = "AccountBalance" id = "AccountBalance" disabled>

<label for  "CreditLimit"> Customer's Credit Limit </label>
<input type = "text" name = "CreditLimit" id = "CreditLimit" disabled>

<br><br>
<input type = "submit" value = "Save Changes">
</form>
</div>
</body>
</html>