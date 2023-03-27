<?php
if($_POST['formSubmit'] == "Submit")
{
	$errorMessage = "";
	
	if(empty($_POST['firstName']))
	{
		$errorMessage .= "<li>You forgot to enter your First Name!</li>";
	}
	if(empty($_POST['lastName']))
	{
		$errorMessage .= "<li>You forgot to enter your Last Name!</li>";
	}
  if(empty($_POST['constituency']))
  {
    $errorMessage .= "<li>You forgot to enter your Constituency!</li>";
  }
  if(empty($_POST['registrationcenter']))
  {
    $errorMessage .= "<li>You forgot to enter your registration center!</li>";
  }
  if(empty($_POST['voterNumber']))
  {
    $errorMessage .= "<li>You forgot to enter your Voter Number!</li>";
  }
  if(empty($_POST['nId']))
  {
    $errorMessage .= "<li>You forgot to enter your ID!</li>";
  }
  if(empty($_POST['dateofBirth']))
  {
    $errorMessage .= "<li>You forgot to enter your Date of Birth!</li>";
  }
  if(empty($_POST['gender']))
  {
    $errorMessage .= "<li>You forgot to choose your gender!</li>";
  }
	
	$varfname = $_POST['firstName'];
	$varlname = $_POST['lastName'];
  $varconstituency = $_POST['constituency'];
  $varregcenter = $_POST['registrationcenter'];
  $varvoterno = $_POST['voterNumber'];
  $varid = $_POST['nId'];
  $vardob = $_POST['dateofBirth'];
  $varfemale = $_POST['gender'];
  $varMale = $_POST['gender'];

	if(empty($errorMessage)) 
	{
		$fs = fopen("mydata.csv","a");
		fwrite($fs,$varfname . ", " . $varlname . ", " . $varconstituency . ", " . $varregcenter . ", " . $varvoterno . ", " . $varid . ", " . $vardob . ", " . $varfemale . ", " . $varMale . "\n");
		fclose($fs);
		
		header("Location: thankyou.html");
		exit;
	}
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Voter Registration Form</title>
        <link rel="stylesheet" href="myform.css">
    </head>
    <body>
      <?php
		if(!empty($errorMessage)) 
		{
			echo("<p>There was an error with your form:</p>\n");
			echo("<ul>" . $errorMessage . "</ul>\n");
		} 
	?>
       
<form action="myform.php" method="post">
    <div class="header">
        <div class="topic" align="center"><h3>Voter Registration Form</h3></div>
     </div>
  
  <fieldset class="account-info">
    <table>
      <tr>
      <td><label>
      First Name </label></td>
     <td><input type="text" name="firstName" value = "<?$varfname;?>" >
    </td>
    </tr>
     <tr>
     <td><label>
      Last Name </label></td>
     <td><input type="text" name="lastName" value = "<?$varlname;?>"></td> 
    </tr>
    <tr>
    <td><label>
        Constituency Name </label></td>
       <td> <select name="constituency" value = "<?$varconstituency;?>">
            <option value="Langata">Langata</option>
            <option value="Pangani">Pangani</option>
            <option value="Starehe">Starehe</option>
            <option value="CBD">CBD</option>
          </select>
          </td>
      </tr>
      <tr>
      <td><label>
        Registration Center Name
      </label></td>
        <td><select name="registrationcenter" value = "<?$varregcenter;?>">
            <option value="Langata">Langata  Primary School</option>
            <option value="Pangani Secondary School">Pangani Secondary School</option>
            <option value="Starehe ACK Church">Starehe  ACK Church</option>
            <option value="GPO">GPO</option>
          </select>
          </td>
      </tr>
      <tr>
        <td><label>
        Voter's Number
      </label></td>
        <td><input type="text" name="voterNumber" value = "<?$varvoterno;?>" maxlength="10"></td>
      </tr>
      <tr><td><label>
        National Identity Card Number
      </label></td>
        <td><input type="text" name="nId" value = "<?$varid;?>" maxlength="10"></td>
      </tr>
      <tr><td><label>
        Date Of Birth </label></td>
       <td> <input type="date" name="dateofBirth" value = "<?$vardob;?>"></td>
      </tr>
      <tr><td><label>
        Choose your gender:
      </label></td></tr>
        <tr>
          <td><label for="female">Female
        <input class="radio" type="radio" name="gender" id="female" value = "<?$varfemale;?>" checked></label>
      </td>
        <td><label for="male">male
        <input class="radio" type="radio" name="gender" id="male" value = "<?$varmale;?>" ></label>
      </td>
      </tr>
       </table>     
    
      
  </fieldset>
  <fieldset class="account-action">
    <input class="btn" type="submit" name="formSubmit" value="Submit">
    <input class="btn" type="clear" name="clear" value="Clear">
  </fieldset>
</form>
</body>
</html>
