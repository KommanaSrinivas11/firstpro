 <html>
   <head>
     <style>
     .mycls{background:url("https://lumiere-a.akamaihd.net/v1/images/sa_pixar_virtualbg_coco_16x9_9ccd7110.jpeg?region=0,0,1920,1080")  no-repeat ;
           background-size:cover;
           }
           table{
             border-collapse: separate;
             border-spacing:2em 0.5em;
             background-color:white;
           }
   </style>
   </head>
 <body class="mycls">
  
 <h2 align="center">CREATE ACCOUNT</h2>
<p align="center"></p>

<form method="post" action="sql_connection.php" >  
<table align="center" >
<tr>
  <th align="left"><b>FullName:</b></th>
  <th align="left"><b>UserName: </b></th>
</tr>

<tr>
  <td> <input type="text"  name="fname" size="40"></td>
   <td> <input type="text" name="uname" size="40"> </td>
</tr>
<tr>
  <td align="left"><b>Email:</b> </td>
  <td align="left"><b> PhoneNumber:</b></td>
</tr>
<tr>
<td> <input type="text"  name="email" size="40"> </td>
<td> <input type="text"  name="phneno" size="40"> </td>
</tr>
<tr>
  <td align="left"><b>Password:</b></td>
  <td align="left"><b>ConfirmPassword:</b></td>
</tr>
  <tr>
   <td> <input type="password" name="password"  size="40"></td>
  <td> <input type="password" name="conpassword" size="40"> </td>
</tr>
<tr>
  <td><b>Gender:</b>
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
</td>
</tr>
<tr>
  <tr>
    <td> <input type="checkbox" name="c1"> I Agree the Terms And Conditions</td>
</tr>
<tr>
  <td align="right"><input type="submit" name="submit" value="Submit"></td>
</tr>
</table>  
  <a href="login.html">  <H3 ALIGN="CENTER">ACCOUNT EXISTS ?</H3> </A>
</FORM>
</body>
</html>