<!DOCTYPE html>
<html>

<head>
    <title>Lab-Task1</title>
</head>

<body>
    <form action="/action_page.php" method="post">
        <h2 style="font-size: x-small;"><sup>*</sup>-Denotes Required Information </h2>
        <h3 style="font-size: 15px;">> 1 Donation > 2 confirmation > 3 Thank you</h3>
        <h1 style="color: #ff0000;font-size: 20px;">Donor Information</h1>
        <label for="Fname">First name</label><br>
        <input type="text" id="Fname" name="Fname"><br>

        <label for="Lname">Last Name</label><br>
        <input type="text" id="Lname" name="Lname"><br>
        <label for="cname">Company </label><br>
        <input type="text" id="cname" name="cname"><br>
        <label for="address1">Address 1</label><br>
        <input type="text" id="address1" name="address1"><br>
        <label for="address2">Address 2</label><br>
        <input type="text" id="address2" name="address2"><br>
        <label for="city">City</label><br>
        <input type="text" id="city" name="city"><br>
        <label for="state">State</label><br>
        <select name="state" id="state">
            <option value="dhaka">Dhaka</option>
            <option value="rajshahi">Rajshahi</option>
            <option value="barisal">Barisal</option>
            <option value="khulna">Khulna</option>
            <option value="chittagong">Chittagong</option>
            <option value="comilla">Comilla</option>
        </select>
        <br>
        <label for="zip">Zip Code</label><br>
        <input type="text" id="zip" name="zip"><br>

        <label for="country">Country</label><br>
        <select name="country" id="country">
            <option value="bd">Bangladesh</option>
            <option value="india">India</option>
            <option value="pak">Pakistan</option>
            <option value="aus">Australia</option>
            <option value="nz">Newzeland</option>
            <option value="us">America</option>
        </select>
        <br>
        <label for="phone">Phone:</label><br>
        <input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{5}-[0-9]{3}"> <br>
        <label for="fax">Fax</label><br>
        <input type="tel" id="fax" name="fax" pattern="[0-9]{1}-[0-9]{3}-[0-9]{7}"><br>
        <label for="email">Email</label><br>
        <input type="email" id="email" name="email"><br>
        <label for="amount">Donation Amount </label>
        <input type="radio" id="none" name="dollar" value="None">
        <label for="none">None</label>
        <input type="radio" id="50" name="dollar" value="$50">
        <label for="50">$50</label>
        <input type="radio" id="75" name="dollar" value="$75">
        <label for="75">$75</label>
        <input type="radio" id="100" name="dollar" value="$100">
        <label for="100">$100</label>
        <input type="radio" id="250" name="dollar" value="$250">
        <label for="250">$250</label>
        <input type="radio" id="other" name="dollar" value="Other">
        <label for="other">Other</label><br>
        <p style="font-size: x-small;"> (Check a button or type in your <br> amount)</p>
        <label for="otheramount">Other Amount $</label>
        <input type="text" id="otheramount" name="otheramount"><br>
        <label for="donation">Recurring Donation</label>
        <input type="checkbox" id="donation" name="donation">
        <label style="font-size: 15px;">I am interested in giving on a regular basis</label> <br>
        <label for="CreditCard">Monthly Credit Card $</label>
        <input type="text" id="CreditCard" name="CreditCard">
        <label for="for">for</label>
        <input type="number" id="for" name="for" min="1" max="12">
        <label>months</label><br>
        <h1 style="color: #ff0000;font-size: 20px;">Honorarium and Memorial Donation Information</h1>
        <label>I would like to make this
            <input type="radio" id="honor" name="purpose" value="To_Honor">
            <label for="honor">To Honor</label>
            <input type="radio" id="memory" name="purpose" value="In_Memory_of">
            <label for="memory">In Memory of</label>
            <br> donation</label> <br>
        <label for="name">Name</label><br>
        <input type="text" id="name" name="name"><br>
        <label for="acknowledgement">Acknowledge Donation to</label><br>
        <input type="text" id="acknowledgement" name="acknowledgement"><br>
        <label for="addressformemorial">Address</label><br>
        <input type="text" id="addressformemorial" name="addressformemorial"><br>
        <label for="city2">City</label><br>
        <input type="text" id="city" name="city"><br>
        <label for="state2">State</label><br>
        <select name="state2" id="state2s">
            <option value="dhaka">Dhaka</option>
            <option value="rajshahi">Rajshahi</option>
            <option value="barisal">Barisal</option>
            <option value="khulna">Khulna</option>
            <option value="chittagong">Chittagong</option>
            <option value="comilla">Comilla</option>
        </select> <br>
        <label for="zip">Zip Code</label><br>
        <input type="text" id="zip" name="zip"><br>
        <h1 style="color: #ff0000;font-size: 20px;">Additional Information</h1>
        <p style="font-size: 15px;">Please enter your name,company or organization as you would like it to apprear in
            our publications :</p>
        <label for="name">Name</label><br>
        <input type="text" id="name" name="name"><br>
        <input type="checkbox" id="gift" name="gift">
        <label for="gift">I would like my gift to remain anonymous</label> <br>
        <input type="checkbox" id="matching_gift" name="matching_gift">
        <label for="matching_gift">My employer offers a matching gift program. I will mail the matching gift
            form</label> <br>
        <input type="checkbox" id="no_mail" name="save_cost">
        <label for="no_mail">Please save the cost of acknowledging this gift by not mailing a thank you letter</label>
        <br>
        <label for="comment">Comments <br>(Please type feedback here)</label><br>
        <textarea id="comment" name="comment" rows="4" cols="50"> </textarea> <br>
        <label style="font-style: italic;">How may we contact you?</label><br>
        <input type="checkbox" id="contact2" name="contact2">
        <label for="contact2">E-Mail</label><br>
        <input type="checkbox" id="contact3" name="contact3">
        <label for="contact3">Postal Mail</label><br>
        <input type="checkbox" id="contact4" name="contact4">
        <label for="contact4">Telephone</label><br>
        <input type="checkbox" id="contact5" name="contact5">
        <label for="contact5">Fax</label><br>
        <label style="font-style: italic;">I would like to receive newsletters and information about special events
            by:</label><br>
        <input type="checkbox" id="contact6" name="contact6">
        <label for="contact6">E-Mail</label><br>
        <input type="checkbox" id="contact7" name="contact7">
        <label for="contact7">Postal Mail</label><br>
        <input type="reset"><input type="submit">
    </form>

</body>

</html>