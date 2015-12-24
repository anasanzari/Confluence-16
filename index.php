<?php
/* bootstrap */
require __DIR__.'/./vendor/autoload.php';
require './classes/boot.php';
require './classes/Student.php';
require './classes/Faculty.php';

$success = false;
if (isset($_POST['type'])) {
    if ($_POST['type'] == "student") {
      $v = Student::create($_POST);
    }else if($_POST['type'] == "faculty"){
      $v = Faculty::create($_POST);
    }

    if($v){
      $success = true;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!--link href="./css/bootstrap.min.css" rel="stylesheet" />
        <link href="./css/pagess.css" rel="stylesheet" /-->
  <link href="./css/styles.css" rel="stylesheet">
  <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/dynamics.min.js"></script>
</head>

<body>
  <div class="main">

    <div class="back"></div>
    <div class="front"></div>
    <div class="overlay"></div>

    <div class="center logo">
      <img src="images/logo.png" />
    </div>
    <h1>Confluence '16</h1>
    <h2>National Institute of Technology, Calicut</h2>

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 col-md-offset-3 col-xs-12">
          <div class="menucontainer">
            <ul class="menu">
              <li>
                <a class="hashmenu" href="#about">
                  <img src="images/icons/icon_point.png" /> About Confluence</a>
              </li>
              <li>
                <a class="hashmenu" href="#register">
                  <img src="images/icons/icon_reg.png" /> Register</a>
              </li>
              <li>
                <a class="hashmenu" href="#speakers">
                  <img src="images/icons/icon_speaker.png" /> Speakers</a>
              </li>
              <li>
                <a class="hashmenu" href="#contact">
                  <img src="images/icons/icon_contact.png" /> Contact Us</a>
              </li>
            </ul>
          </div>
          <a class="brochure" href="#">Download Brochure</a>

        </div>
      </div>
    </div>
  </div>
  <div class="about" id="about">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-5 col-md-offset-1">
          <h1 class="center">About Confluence</h1>
          <p class="justify">
            Confluence 2016, the first of it's kind, is a conference aimed at bringing in student-teacher fraternity of CS Departments of reputed NIT's across the nation under a single umbrella for exchange of ideas spark innovation. The conference would serve as
            a platform to improve interaction and bridge the gap between faculty and students of different NITs. This would help identify patrons of similiar research areas and help initiate collaboration in research projects to subsequently publish research
            papers. This conference presents excellent opportunity for students among various NITs to collaborate and form strong ties of technical expertise. This year's edition of Confluence will be hosted by National Institute of Technology Calicut.
          </p>
        </div>
        <div class="col-md-5">
          <h1 class="center">Main Programme</h1>
          <ul class="datemenu">
            <li>
              <img src="images/icons/icon_pwhite.png" /> Faculty/PhD students discussions on research collaborations.</li>
            <li>
              <img src="images/icons/icon_pwhite.png" /> Discussions on internship programs and faculty exchange.</li>
            <li>
              <img src="images/icons/icon_pwhite.png" /> Discussions on credit transfer and possible MOOC courses.</li>
            <li>
              <img src="images/icons/icon_pwhite.png" /> Discussions on formation of research groups.</li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <div class="registration" id="register">
    <h1 class="center">Registration</h1>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4">
          <h3 class="center">Important Dates</h3>
          <ul class="datemenu">
            <li>
              <img src="images/icons/icon_calendar.png" /> Registrations open : 15<sup>th</sup> Nov 2015</li>
            <li>
              <img src="images/icons/icon_calendar.png" /> Last date for Registration: 1<sup>st</sup> Dec 2015</li>
            <li>
              <img src="images/icons/icon_calendar.png" /> Confirmation: 15<sup>th</sup> Dec 2015</li>
          </ul>
        </div>
        <div class="col-md-4">
          <h3 class="center">Eligibility</h3>
          <p class="justify">A team of 5 members will be representing each NIT. HOD/Senior faculty from CS Department, 2 B.Tech students(preferably second years), 1 M.Tech student and a Ph.D scholar will be part of the 5 member team. Additionally, if the institute offers
            an MCA course, then a final year MCA student can also be a part of the team as well. There are no restrictions on the selection team from the host, it is purely the participating institute's decision.</p>
        </div>
        <div class="col-md-4">
          <h3 class="center">Accomodation</h3>
          <p class="justify">Arrangements will be made for the accommodation of the students from the participating NITs at the NIT Calicut hostels at the hosting institute's expense. Sufficient assistance will be provided for the faculty members for their stay in hostels
            in and around the city. The faculty will have to meet the expenses towards accomodation on their own.</p>
        </div>
      </div>

      <div class="btncont">
        <a class="brochure hashmenu" href="#reg" id="register">Register</a>
      </div>
    </div>
  </div>

  <div class="reg" id="reg">
    <?php if($success){
    ?>
        <div class="mesg">
          <h2>You've successfully registered for Confluence'16.</h2>
          <a class="brochure hashmenu" href="#reg" id="another">Register Another</a>
        </div>
    <?php
    }
    ?>
    <div class="wrap">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6 col-md-offset-3">
            <form id="studentform" action="#reg" method="POST">
              <h2>Student Registration <a id="facultybtn" class="btn btn-danger">Faculty Form</a></h2>
              <div class="form-group">
                <!--label>College</label-->
                <input type="text" name="college" class="form-control" placeholder="College" value="" required>
              </div>
              <div class="form-group">
                <!--label>Password</label-->
                <input type="text" name="faculty" class="form-control" placeholder="Accompanying Faculty" required>
              </div>
              <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Participant Name" required>
              </div>
              <div class="form-group">
                <input type="text" name="rollno" class="form-control" placeholder="Participant Roll No" required>
              </div>
              <div class="form-group">
                <input type="text" name="course" class="form-control" placeholder="Course" required>
              </div>
              <div class="form-group">
                <input type="text" name="semester" class="form-control" placeholder="Current Semester" required>
              </div>
              <div class="form-group">
                <label>Gender :&nbsp;&nbsp;
                  <label class="radio-inline">
                    <input type="radio" name="gender" value="male" checked> Male
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="gender" value="female"> Female
                  </label>
                </label>
              </div>
              <div class="form-group">
                <label>Food Preference :&nbsp;&nbsp;
                  <label class="radio-inline">
                    <input type="radio" name="food" value="veg" checked> Veg
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="food" value="nonveg"> Non-Veg
                  </label>
                </label>
              </div>
              <div class="form-group">
                <div class="g-recaptcha" data-sitekey="6LfwugwTAAAAAJPJ_hXFvzjprC8apea865BFjqB3"></div>
              </div>

              <input type="hidden" name="type" value="student" />
              <input type="submit" class="fbtn btn btn-default" value="Register" />
            </form>

            <form id="facultyform" action="#reg" method="POST">
              <h2>Faculty Registration <a id="studentbtn" class="btn btn-danger">Student Form</a></h2>
              <div class="form-group">
                <!--label>College</label-->
                <input type="text" name="college" class="form-control" placeholder="College" value="" required>
              </div>
              <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Participant Name" required>
              </div>
              <div class="form-group">
                <input type="text" name="designation" class="form-control" placeholder="Designation" required>
              </div>
              <div class="form-group">
                <input type="text" name="interest" class="form-control" placeholder="Area of Interest" required>
              </div>
              <div class="form-group">
                <label>Gender :&nbsp;&nbsp;
                  <label class="radio-inline">
                    <input type="radio" name="gender" value="male" checked> Male
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="gender" value="female"> Female
                  </label>
                </label>
              </div>
              <div class="form-group">
                <label>Food Preference :&nbsp;&nbsp;
                  <label class="radio-inline">
                    <input type="radio" name="food" value="veg" checked> Veg
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="food" value="nonveg"> Non-Veg
                  </label>
                </label>
              </div>
              <div class="form-group">
                <div class="g-recaptcha" data-sitekey="6LfwugwTAAAAAJPJ_hXFvzjprC8apea865BFjqB3"></div>
              </div>

              <input type="hidden" name="type" value="faculty" />
              <input type="submit" class="fbtn btn btn-default" value="Register" />
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>



  <div class="speakers" id="speakers" style="">
    <h1 class="center">Speakers</h1>
    <div class="box">
      <div class="spk active" data-val="a">
        <p>Athena</p>
        <img src="./images/speakers/ath.jpg" />
      </div>
      <div class="spk" data-val="b">
        <p>Aparna</p>
        <img src="./images/speakers/apa.jpg" />
      </div>
      <div class="spk" data-val="c">
        <p>Reshma</p>
        <img src="./images/speakers/shi.jpg" />
      </div>
      <div class="spk" data-val="a">
        <p>Kiran</p>
        <img src="./images/speakers/shiv.jpg" />
      </div>
      <div class="spk" data-val="b">
        <p>Sreeja</p>
        <img src="./images/speakers/sre.jpg" />
      </div>
      <div class="spk" data-val="c">
        <p>Rohit</p>
        <img src="./images/speakers/rohi.jpg" />
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="spkdesc col-md-6 col-md-offset-3">
          <div class="show"></div>
          <div class="desc a">
            <h3>Athena</h3>
            <p>Scarlett Johansson is an American actress, model, and singer. She made her film debut in North. Johansson subsequently starred in Manny & Lo in 1996, and garnered further acclaim and prominence with roles in The Horse Whisperer and Ghost World.
              She shifted to adult roles with her performances in Girl with a Pearl Earring (2003) and Sofia Coppola's Lost in Translation (2003), for which she won a BAFTA award for Best Actress in a Leading Role. Her subsequent films included A Love
              Song for Bobby Long (2004), Woody Allen's Match Point (2005), The Island (2005), The Black Dahlia (2006), The Prestige (2006), The Other Boleyn Girl (2008), Vicky Cristina Barcelona (2008), Just Not That Into You (2009), Don Jon (2013),
              Her (2013), Under the Skin (2013), and Lucy (2014).
            </p>
          </div>
          <div class="desc b">
            <h3>Scarlett</h3>
            <p>Scarlett Johansson is an American actress, model, and singer. She made her film debut in North. Johansson subsequently starred in Manny & Lo in 1996, and garnered further acclaim and prominence with roles in The Horse Whisperer and Ghost World.
              She shifted to adult roles with her performances in Girl with a Pearl Earring (2003) and Sofia Coppola's Lost in Translation (2003), for which she won a BAFTA award for Best Actress in a Leading Role. Her subsequent films included A Love
              Song for Bobby Long (2004), Woody Allen's Match Point (2005), The Island (2005), The Black Dahlia (2006), The Prestige (2006), The Other Boleyn Girl (2008), Vicky Cristina Barcelona (2008), Just Not That Into You (2009), Don Jon (2013),
              Her (2013), Under the Skin (2013), and Lucy (2014).
            </p>
          </div>
          <div class="desc c">
            <h3>Megan</h3>
            <p>Scarlett Johansson is an American actress, model, and singer. She made her film debut in North. Johansson subsequently starred in Manny & Lo in 1996, and garnered further acclaim and prominence with roles in The Horse Whisperer and Ghost World.
              She shifted to adult roles with her performances in Girl with a Pearl Earring (2003) and Sofia Coppola's Lost in Translation (2003), for which she won a BAFTA award for Best Actress in a Leading Role. Her subsequent films included A Love
              Song for Bobby Long (2004), Woody Allen's Match Point (2005), The Island (2005), The Black Dahlia (2006), The Prestige (2006), The Other Boleyn Girl (2008), Vicky Cristina Barcelona (2008), Just Not That Into You (2009), Don Jon (2013),
              Her (2013), Under the Skin (2013), and Lucy (2014).
            </p>
          </div>
        </div>
      </div>
    </div>


  </div>
  <div class="contactus" id="contact">

    <h1 class="center">Contact Us</h1>
    <div class="container-fluid">
      <div class="row" style="min-height: 250px">
        <div class="col-md-6">
          <h2 class="center">Coordinators</h2>
          <div class="center">
            <div class="p">
              <h3>Prasad</h3>
              <h4>9567212875</h4>
            </div>
            <div class="p">
              <h3>Gokul</h3>
              <h4>9567212875</h4>
            </div>
            <div class="p">
              <h3>Kiran</h3>
              <h4>9567212875</h4>
            </div>
          </div>


        </div>
        <div class="col-md-6">
          <h2 class="center">Managers</h2>
          <div class="center">
            <div class="p">
              <h3>Prasad</h3>
              <h4>9567212875</h4>
            </div>
            <div class="p">
              <h3>Gokul</h3>
              <h4>9567212875</h4>
            </div>
            <div class="p">
              <h3>Kiran</h3>
              <h4>9567212875</h4>
            </div>
          </div>
        </div>
      </div>

      <div class="row" style="padding-top: 10px">
        <div class="socialbuttons col-md-6 col-md-offset-3">
          <a class="social" href="https://www.facebook.com/" target="_blank">
            <img src="./images/social/facebook.png" />
          </a>
          <a class="social" href="https://instagram.com/" target="_blank">
            <img src="./images/social/Instagram.png" />
          </a>
          <a class="social" href="https://twitter.com/" target="_blank">
            <img src="./images/social/twitter.png" />
          </a>
          <a class="social" href="https://www.youtube.com/" target="_blank">
            <img src="./images/social/youtube.png" />
          </a>
        </div>
      </div>


    </div>
  </div>
  <div class="footer">
    <p> © Creative and Intellectual minds of NIT Calicut </p>
  </div>

  <script src="./js/page.js"></script>
  <script>

    <?php if($success){
      ?>
      $studentform.hide();
      $regSection.css('height',autoHeight);
      visible = true;
    <?php
    }else {
    ?>
      $regSection.css('height','0px');
    <?php
      }
    ?>
  </script>

</body>

</html>