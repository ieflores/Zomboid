<?php if (isset($_POST['reportform'])) {?>
    <section class="contact-us">
<br><br>
<div class="title" >
    <h1>STUDENT ABSENCES REPORT FORM</h1>
</div>

<!---Note to faculty--->
<div class="container">
    <div class="note" >
        <h2 class="noteheader">NOTE TO FACULTY</h2>

        <p>
            <h3 class="number1">1. Students who have incurred the below listed absences MUST BE REPORTED  TO THE GUIDANCE OFFICE immediately: </h3><br>
            <br><br>    
                <ol>
                    <li>3 absences for MTh / TF / WS classes;</li>
                    <li>1 abscene for once a week classes;</li>
                    <li>1 absence for PE classes</li>
                </ol>
        </p>
        
        <p>
            <h3 class="number1">2. A student is absent if he/she arrives in class after the first: </h3>
            <br><br>
                <ol>
                    <li>25 minutes for a 80 - minute class session</li>
                    <li>40 minutes for a 120 - minute class session</li>
                    <li>50 minutes for a 160 - minute class session</li>
                    <li>60 minutes for a 240 - minute class session</li>
                </ol>
        </p>

        <p class="para">
            <h3 class="number1">3. Upon receipt of your report, a call will be made to the student concerned or parent/s of the student/s concerned.
                Feedback varies depending on whether or not the contact numbers are still inservice, hence it may take a week before we get a feeback.
            </h3>
        </p>

        <br><br><br>
        <p class="para">
            <h3 class="number1">4. Reporting names to the Guidance when the student already incurred more than the maximum allowable
                absences will defeat the purpose of this program. Please be reminded that the purpose of reporting absences is for
                the counselors to find out reasons of student's absence and help the student get back to class.
            </h3>
        </p>
        <br><br><br>

    </div>
</div>

<div class="container2">
    <div class="contact-col" >
    <form action="components/inquirypf.php" method="POST">
        
            <input type="hidden" name="iid" id="iid" value="<?=$_SESSION['id']?>" required>
            <input type="hidden" name="iname" id="iname" value="<?=$_SESSION['fname'] . " " . $_SESSION['lname'] ?>" required>
            <input type="hidden" name="iemail" id="iemail" value="<?=$_SESSION['username']?>" required>

                <br>
                    <div class="studentid">STUDENT NO.</div>
                    <div class="nmstudent">NAME OF STUDENT</div>
                    <div class="subj">SUBJECT</div>
                    <div class="numabsent">NO. OF ABSENCES</div>
                    <div class="absentdate">DATE OF ABSCENCES</div>
                    <div class="remrks">REMARKS</div>   
                
            <input type="student" name="studentno" id="sNUm" placeholder="Enter Student ID Number" required>
            <input type="studentnm" name="studentname" id="sName" placeholder="Enter Student Name" required>
            <input type="subject" name="subject" id="Subject" placeholder="Enter Course Subject" required>
            <input type="absenceNo" name="numabsence" id="aNo" placeholder="No. of Absence" required>
            <input type="dateofabsence" name="absencedate" id="DoA" placeholder="Enter Date of Absence" required>
            <input type="remarks" name="remarks" id="Rem" placeholder="Enter Remarks, if any">                 
            
                <!-- <button type="button" onclick="addRow();" class="add-btn">Add Student</button> -->

            <table class="form-table">
                <tr>
                    <th>STUDENT NO.</th>
                    <th>NAME OF STUDENT</th>
                    <th>SUBJECT</th>
                    <th>NUMBER OF ABSENCE</th>
                    <th>DATE OF ABSENCE</th>
                    <th>REMARKS</th>
                </tr>
                <tr>
                    <td class="examples"><i>Ex. 2020123456</i></td>
                    <td class="examples"><i>Ex. Juan Dela Cruz</i></td>
                    <td class="examples"><i>Ex. EXCOMP</i></td>
                    <td class="examples"><i>Ex. 1</i></td>
                    <td class="examples"><i>Ex. January 3 2023</i></td>
                    <td class="examples"><i>Ex. N/A</i></td>
                </tr>
            </table>

            <input type="hidden" name="_template" value="table">
            <div class="buttonform">
                <br><button type="submit" class="hero-btn red-btn">Send Form</button>
            </div>
        </form>

    </div>
 </div>

</section>

<!-- button2 -->
<?php }  if (isset($_POST['inq'])) {?> 
    <link rel="stylesheet" href="css_files/style.css">
    <form action="components/inquiryps.php" method="POST">
    <section class="contact-us">

<div class="inq-contain">
    <div class="contact-col" >

            <container class="faqlbl">
                <label for="faq"><b>Choose a subject</b><br></label>
                <select id="isbj" name="isbj">
                    <option value="Request to set a Counseling Schedule">Request to set a Counseling Schedule</option>
                    <option value="Request for change in Appointment Schedule setting">Request for change in Counseling Appointment setting</option>    
                    <option value=""></option>
                </select>
            </container>
            <input type="hidden" id="iid" name="iid" value="<?=$_SESSION["id"]?>">
            <input type="hidden" id="iname" name="iname" value="<?=$_SESSION["fname"]. " " . $_SESSION["lname"]?>">
            <input type="hidden"  id="iemail" name="iemail" value="<?=$_SESSION["username"]?>">
            <textarea rows="8" id="imsg" name="imsg" placeholder="Message" required></textarea>
            <button type="submit" class="submitbtn">Send Message</button>

        </form>

    </div>
</div>

</section>
    <?php } ?> 

    <container class="inqBtnsCon" style="height: 300px; width: 200px;">
        <div class="inqBtns" style="margin-top: 15px; margin-left: 580px;">
        <form method="post">
            <input type="submit" name="reportform" value="Report Forms" style="background-color: yellow; color: black; font-size: 16px; cursor: pointer;
            height: 40px; width: 120px;">
            <input type="submit" name="inq" value="Inquiry Form" style="background-color: yellow; color: black; font-size: 16px; cursor: pointer;
            height: 40px; width: 120px;">
        </form>
        </div>
    </container>