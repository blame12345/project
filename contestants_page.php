<main>
  <div class="cont">
   <div class ="container">
    <div class="sample-header-section">
        <p class="glitch">
      <span aria-hidden="true">Welcome to our contestants!</span>
      Welcome to our contestants!
      <span aria-hidden="true">Welcome to our contestants!</span>
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
      <h2 data-name="CONTESTANTS"></h2>
  </div>
  <div class="nav-link">
    <h2 onclick="sponsorsf()" data-name="SPONSORS"></h2>
  </div>
  <div class="nav-link">
    <h2 onclick="arenasf()" data-name="ARENAS"></h2>
  </div>
  </div>
    <div class="sample-section">
      <div class="x">
        <div class="allcont">
          <nav class="navcont">
               <h2 onclick="clickk('ull')" data-name="CHECK ALL CONTESTANTS"></h2>
             <ul id="ull">
              <?php
              session_start();
                if (isset($_SESSION["is_auth"]) and $_SESSION["is_auth"]){

                  include("config_pd.php");
                  $mysqli = mysqli_connect('localhost', $bd_user_login, $bd_password, $bd_name);
                  $sql="select * from contestants where sponsor !='' and loadout !=''";
                  $result = $mysqli->query($sql);
                  while ($row = mysqli_fetch_assoc($result)){
                    $l = $row['loadout'];
                    $n = $row['nickname'];
                    $s = $row['sponsor'];
                    $a = $row['avatar'];
                    if ($a == ''){
                      $a = 'other/namatama.webp';
                    }
                  echo <<< HTML
                  <div class="allcont">
                    <div class="us2">
                      <h2 style="width: 80%; margin: auto" data-name="LOADOUT"></h2>
                      <img style="width: 80%; margin: auto" src="$l"> </img>
                    </div>
                    <div class="us2">
                      <div>
                        <h2 data-name="NICKNAME"></h2>
                        <p style="text-align: center"> $n </p>
                      </div>
                    <div>
                        <h2 data-name="SPONSOR"></h2>
                        <img  src="$s"> </img>
                        <h2 data-name="AVATAR"></h2>
                        <img style="width:128px; height: 128px" src="$a"> </img>
                      </div>
                    </div>
                  </div>
                  HTML;}
                }
                else if (!isset($_SESSION["is_auth"]) or !($_SESSION["is_auth"])){
                  echo <<< HTML
                  <p> Please Log in </p>
                  <img style="width:80%" src="other/tamasad.webp"> </img>
                  HTML;
                }
               ?>
             </ul>
          </nav>
        </div>
        </div>
        <div class="x">
        <div class="allcont">
          <nav class="navcont">
                   <h2  data-name="REGISTRATION"></h2>
                   <div id="regg">
                     <form id="reg_form" action="reg_script.php" method="post" enctype="multipart/form-data">
                     <label>Login</label>
                      <input type="text" placeholder="Login" id="login1" name="login1">
                      <label>Nickname</label>
                       <input type="text" placeholder="Name" id="name" name="name">
                      <label>Password</label>
                      <input type="password" placeholder="Password" id="password1" name="password1">
                      <button class="regbut">Register</button>
                   </div>
                   </form>
                   <h2 data-name="AUTHORIZATION"></h2>
                   <div id="authh">
                     <form id="auth_form" action="aut_script.php" method="get">
                     <label>Login</label>
                      <input type="text" placeholder="Login" id="login" name="login">
                      <label>Password</label>
                      <input type="password" placeholder="Password" id="password" name="password">
                      <button onclick="startt()"class="autbut">Log In</button>
                   </div>
                 </form>
          </nav>
        </div>
        </div>
    </div>
    <div id="pause">
    </div>
  </div>

</main>
