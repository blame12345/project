<main>
  <div class="you">
   <div class ="container">
    <div class="sample-header-section">
        <p class="glitch">
      <span aria-hidden="true">Welcome to your page, contestant!</span>
      Welcome to your page, contestant!
      <span aria-hidden="true">Welcome to your page, contestant!</span>
        </p>
    </div>
   </div>
  </div>
  <div class="sample-section-wrap">
    <div id="nav">
      <div class="nav-link">
        <h2 onclick="homef()" data-name="HOME"> </h2>
      </div>
      <div class="nav-link">
        <h2 onclick="contestantsf()" data-name="CONTESTANTS"></h2>
    </div>
    <div class="nav-link">
      <h2 onclick="sponsorsf()" data-name="SPONSORS"></h2>
    </div>
    <div class="nav-link">
      <h2 onclick="arenasf()" data-name="ARENAS"></h2>
    </div>
    </div>
    <?php
    session_start();

    include("config_pd.php");
    $mysqli = mysqli_connect('localhost', $bd_user_login, $bd_password, $bd_name);

    if (isset($_SESSION["is_auth"]) and $_SESSION["is_auth"]){
    $login = $_SESSION['log'];
    $pass = $_SESSION['pas'];

    $sql="select * from contestants where login = '$login' and password = '$pass'";

    $result = $mysqli->query($sql);
    $a = mysqli_fetch_assoc($result);
    $img_sponsor = $a['sponsor'];
    $img_loadout = $a['loadout'];
    $nickname =  $a['nickname'];

    echo <<< HTML
    <div class="us0">
      <div class="us1">
        <div class="us2">
          <h2 style="width: 60%;" data-name="LOADOUT"></h2>
          <img style="width: 60%;" src="$img_loadout"> </img>
        </div>
        <div class="us2">
          <div>
            <h2 data-name="NICKNAME"></h2>
            <p style="text-align: center"> $nickname </p>
          </div>
        <div>
            <h2 data-name="SPONSOR"></h2>
            <img  src="$img_sponsor"> </img>
            <form id="avat_form" action="avatar_script.php" method="post" enctype="multipart/form-data">
             <h2 data-name="SET AVATAR"></h2>
             <label id="sss" class="input-file">
               <input type="file" name="img">
             </label>
             <button class="autbut">SAVE</button>
            </form>
          </div>
        </div>
      </div>
    <div class="chang">
      <div id="authh">
        <form id="nickname_form" action="nickname_script.php" method="post">
         <h2 data-name="Change nickname"></h2>
         <input type="text" placeholder="Nickname" id="nickname" name="nickname">
         <button class="autbut">Change</button>
        </form>
        <form id="pass_form" action="password_script.php" method="post">
         <h2 data-name="Change password"></h2>
         <label>Old password</label>
         <input type="password" placeholder="Password" id="oldpassword" name="oldpassword">
         <label>New password</label>
         <input type="password" placeholder="Password" id="newpassword" name="newpassword">
         <button class="autbut">Change</button>
         </form>
    </div>
    </div>
    </div>
    <div class="allcont">
      <nav class="navcont">
             <h2 onclick="clickk('divv0')"  data-name="CHOOSE YOUR SPONSOR"></h2>
             <div id="divv0">
               <div class="gallery">
                 <input onclick="clickk('fkd')" class="choosing" type="checkbox">
                 <input type="image" onclick="icon('im1')" id="im1" class="sponsorimg" src="icons/im1.png" alt="volpe">
                 <input type="image" onclick="icon('im2')" id="im2" class="sponsorimg" src="icons/im2.png" alt="cns">
                 <input type="image" onclick="icon('im3')" id="im3" class="sponsorimg" src="icons/im3.png" alt="ospuze">
                 <input type="image" onclick="icon('im4')" id="im4" class="sponsorimg" src="icons/im4.png" alt="dissun">
                 <input type="image" onclick="icon('im5')" id="im5" class="sponsorimg" src="icons/im5.png" alt="engimo">
                 <input type="image" onclick="icon('im6')" id="im6" class="sponsorimg" src="icons/im6.png" alt="vaiiya">
                 <input type="image" onclick="icon('im7')" id="im7" class="sponsorimg" src="icons/im7.png" alt="holtow">
                 <input type="image" onclick="icon('im8')" id="im8" class="sponsorimg" src="icons/im8.png" alt="iseul-t">
               </div>
               <form id="icon_form" action="icon_script.php" method="post">
                <button  id="fkd" class="linksub1"> CHOOSE </button>
               </form>
             </div>

             <h2 onclick="clickk('divv1')"  data-name="CHOOSE YOUR LOADOUT"></h2>
             <div id="divv1">
               <ul class="results">
                 <li class="result">
                   <input type="image" onclick="loadout('lo1')" id="lo1" class="lod" src="loadouts/lo1.png" width="403" height="700" alt="">
                 </li>
                 <li class="result">
                   <input type="image" onclick="loadout('lo2')" id="lo2" class="lod" src="loadouts/lo2.png" width="403" height="700" alt="">
                 </li>
                 <li class="result">
                   <input type="image" onclick="loadout('lo3')" id="lo3" class="lod"  src="loadouts/lo3.png" width="403" height="700" alt="">
                 </li>
                 <li class="result">
                   <input type="image" onclick="loadout('lo4')" id="lo4"  class="lod" src="loadouts/lo4.png" width="403" height="700" alt="">
                 </li>
                 <li class="result">
                   <input type="image" onclick="loadout('lo5')" id="lo5" class="lod" src="loadouts/lo5.png" width="403" height="700" alt="">
                 </li>
                 <li class="result">
                   <input type="image" onclick="loadout('lo6')" id="lo6" class="lod"  src="loadouts/lo6.png" width="403" height="700" alt="">
                 </li>
                 <li class="result">
                   <input type="image" onclick="loadout('lo7')" id="lo7"  class="lod" src="loadouts/lo7.png" width="403" height="700" alt="">
                 </li>
                 <li class="result">
                   <input type="image" onclick="loadout('lo8')" id="lo8" class="lod" src="loadouts/lo8.png" width="403" height="700" alt="">
                 </li>
                 <li class="result">
                   <input type="image" onclick="loadout('lo9')" id="lo9" class="lod" src="loadouts/lo9.png" width="403" height="700" alt="">
                 </li>
                 <li class="result">
                   <input type="image" onclick="loadout('lo10')" id="lo10" class="lod" src="loadouts/lo10.png" width="403" height="700" alt="">
                 </li>
                 <li class="result">
                   <input type="image" onclick="loadout('lo11')" id="lo11" class="lod" src="loadouts/lo11.png" width="403" height="700" alt="">
                 </li>
                 <li class="result">
                   <input type="image" onclick="loadout('lo12')" id="lo12" class="lod" src="loadouts/lo12.png" width="403" height="700" alt="">
                 </li>
                 <li class="result">
                   <input type="image" onclick="loadout('lo13')" id="lo13" class="lod" src="loadouts/lo13.png" width="403" height="700" alt="">
                 </li>
                 <li class="result">
                   <input type="image" onclick="loadout('lo14')" id="lo14" class="lod" src="loadouts/lo14.png" width="403" height="700" alt="">
                 </li>
                 <li class="result">
                   <input type="image" onclick="loadout('lo15')" id="lo15" class="lod" src="loadouts/lo15.png" width="403" height="700" alt="">
                 </li>
                 <li class="result">
                   <input type="image" onclick="loadout('lo16')" id="lo16" class="lod" src="loadouts/lo16.png" width="403" height="700" alt="">
                 </li>
                 <li class="result">
                   <input type="image" onclick="loadout('lo17')" id="lo17" class="lod" src="loadouts/lo17.png" width="403" height="700" alt="">
                 </li>
                 <li class="result">
                   <input type="image" onclick="loadout('lo18')" id="lo18" class="lod" src="loadouts/lo18.png" width="403" height="700" alt="">
                 </li>
                 <li class="result">
                   <input type="image" onclick="loadout('lo19')" id="lo19" class="lod" src="loadouts/lo19.png" width="403" height="700" alt="">
                 </li>
                 <li class="result">
                   <input type="image" onclick="loadout('lo20')" id="lo20" class="lod" src="loadouts/lo20.png" width="403" height="700" alt="">
                 </li>
                 <li class="result">
                   <input type="image" onclick="loadout('lo21')" id="lo21" class="lod" src="loadouts/lo21.png" width="403" height="700" alt="">
                 </li>
                 <li class="result">
                   <input type="image" onclick="loadout('lo22')" id="lo22" class="lod" src="loadouts/lo22.png" width="403" height="700" alt="">
                 </li>
                 <li class="result">
                   <input type="image" onclick="loadout('lo23')" id="lo23" class="lod" src="loadouts/lo23.png" width="403" height="700" alt="">
                 </li>
                 <li class="result">
                   <input type="image"  onclick="loadout('lo24')" id="lo24" class="lod" src="loadouts/lo24.png" width="403" height="700" alt="">
                 </li>
               </ul>
               <form id="load_form" action="load_script.php" method="post">
                <button style="display: inline-block" id="fkd1" class="linksub1"> CHOOSE </button>
               </form>
              </div>
      </nav>
    </div>
    <form id="delete_form" action="delete_script.php" method="post">
     <button style="display: inline-block" id="fkd2" class="linksub1"> DELETE YOUR ACCOUNT </button>
    </form>
    HTML;}
    else if(!isset($_SESSION["is_auth"]) or !$_SESSION["is_auth"]){
      echo <<< HTML
      <div style="display:flex; justify-content: center; flex-wrap: wrap; flex-direction: column;">
        <div style="display:flex; justify-content: center; flex-wrap: wrap; flex-direction: column; margin-left: auto; margin-right: auto;"> <h2 onclick="location.href='contestants.php#nav'" style="text-align: center; font-size: 40px;" data-name="LOG IN TO YOUR ACCOUNT..."> </h2></div>
        <div style="display:flex; justify-content: center; flex-wrap: wrap; flex-direction: column; margin-left: auto; margin-right: auto;"><img style="max-width:70%; max-height:70%; width:auto; height:auto; margin-left: auto; margin-right: auto;" src="other/namasad.webp"> </img> </div>
      </div>
      HTML;
    }
    ?>
    <div id="pause">
    </div>
  </div>

</main>
