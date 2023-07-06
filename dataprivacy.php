<html>
<title>Privacy Act</title>
<style>
body{
    background-image:url(images/login-blur.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    font-family: Arial;
}

.container1{
    border-style: solid black;
    width: 530px;
    height: 340px;
    border-radius: 5px;
    border: 1px solid black;
    padding-top: 20px;
    margin-top: 120px;
    margin-right: 700px;
    margin-left: 400px;
    background-color: rgba(255,255,255,.7);
    color: black;

}
.btn_agree{
    margin-right: 36px;
    font-size: 18px;
    background-color: #fffff;
    color: white;
    height: 10px;
    width: 20px;
    border-radius: 12px;

}
.check_box{
    margin-right: 15px;
}

input[type="submit"]{
  margin-left: -50px;
  margin-top: -10px;
  width: 150px;
  height: 50px;
  border: 2px solid;
  background: white;
  border-radius: 5px;
  font-size: 18px;
  color: black;
  font-weight: 700;
  cursor: pointer;
  outline: none;
}
input[type="submit"]:hover{
  border-color: #2691d9;
  background: #3956fa;
  transition: .5s;
  color: white;
}

.back-btn {
  margin-left: -7px;
  margin-top: 15px;
  width: 70px;
  height: 35px;
  border: 2px solid black;
  background: white;
  border-radius: 5px;
  font-size: 18px;
  color: black;
  font-weight: 700;
  cursor: pointer;
  outline: none;
}

.back-btn:hover{
  border-color: #2691d9;
  background: #3956fa;
  transition: .5s;
  color: white;
}

</style>
<body>
<div class="container1">
<center>
<br>
<b>I hereby affirm my right to be informed, object to <br> processing, access and rectify, suspend or withdraw <br> my personal data, and be indemnified in case of <br> damages pursuant to the<br> privision of Republic Act No, 10173 of the Philippines,<br> Data Privacy Act of 2012 and its corresponding <br> Implementing Rules and Regulations.<br>
</b><br>


<form action="index.php">
<div class="check_box">
<input type="checkbox" id="agree" name="link" value="home" required>
<label><b>I Agree</b></label><br>
</div>
<br>
<div class="btn_agree">
<input type="submit">
<br>
</form>
</div>
<br>
<a href="logout.php"><button class="back-btn">Back</button></a>
</div>
</center>

</div>
</body>

</html>