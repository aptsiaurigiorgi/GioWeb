<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="imgs/584a9b47b080d7616d298778.ico">
    <link rel="stylesheet" href="styles/style.css">
    <script src="js/index.js"></script>
    <title>REAL MADRID - The best football team ever</title>
</head>
<body>
<?php
// Form and methods of working with it
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  
  // Process the form data
  // ...
}

// Methods of working with strings
$string = "Hello, World!";
$length = strlen($string);
$uppercase = strtoupper($string);
$lowercase = strtolower($string);
$newString = str_replace("Hello", "Hi", $string);

// Arrays
$fruits = array("Apple", "Banana", "Orange");
$person = array("name" => "John", "age" => 25, "country" => "USA");

// Work with files (write/read/delete)
$file = fopen("data.txt", "w");
fwrite($file, "Hello, World!");
fclose($file);

$file = fopen("data.txt", "r");
$data = fread($file, filesize("data.txt"));
fclose($file);

if (file_exists("data.txt")) {
  unlink("data.txt");
}

// Upload a file and make some entries in the file
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $file = $_FILES['file'];
  $fileName = $file['name'];
  $fileTmpName = $file['tmp_name'];
  
  move_uploaded_file($fileTmpName, 'uploads/' . $fileName);
  
  $entries = "Entry 1\nEntry 2\nEntry 3";
  file_put_contents('uploads/' . $fileName, $entries, FILE_APPEND);
}
?>
  <!-- Form -->
  <form action="<?php echo $_SERVER['AboutUs.php']; ?>" method="POST">
    <input type="text" name="name" placeholder="Name" />
    <input type="email" name="email" placeholder="Email" />
    <input type="submit" value="Submit" />
  </form>

  <!-- Strings -->
  <p>Length: <?php echo $length; ?></p>
  <p>Uppercase: <?php echo $uppercase; ?></p>
  <p>Lowercase: <?php echo $lowercase; ?></p>
  <p>New String: <?php echo $newString; ?></p>

  <!-- Arrays -->
  <p>First fruit: <?php echo $fruits[0]; ?></p>
  <p>Second fruit: <?php echo $fruits[1]; ?></p>
  <p>Name: <?php echo $person['name']; ?></p>
  <p>Age: <?php echo $person['age']; ?></p>

  <!-- File Operations -->
  <p>Data: <?php echo $data; ?></p>

  <!-- File Upload -->
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
    <input type="file" name="file" />
    <input type="submit" value="Upload" />
  </form>


    <header>
        <div class="logos">
            <a href="https://www.emirates.com/english/" target="_blank" ><img class="emirates" src="imgs/emirates.png" alt="emirates image" ></a>
            <a href="https://www.adidas.com/us" target="_blank" ><img class="addidas" src="imgs/images.png" alt="adidas logo"></a> 
        </div>
    </header>
    <main>
        <div class="grey">
            <div class="head">
                <a class="font" href="home.html"><img class="real" src="imgs/584a9b47b080d7616d298778.ico" alt="real madrid logo">Real madrid</a> 
                <nav>
                    <ul class="flex">
                        <li><a href="Home.html" >Home</a></li>
                        <li><a href="Tickets.html">Tickets</a></li>
                        <li><a href="merch.html">Merch</a></li>
                        <li><a href="Tours.html">Tours</a></li>
                        <li><a href="#" class="active" >About Us</a></li>
                    </ul>
                </nav>
                <div class="contacts">
                    <h1 class="contactsh1">
                        the history of real madrid
                    </h1>
                    <div class="contactsdiv">
                        <p class="contactsp"> Real Madrid Club de Fútbol (Spanish pronunciation: [reˈal maˈðɾið ˈkluβ ðe ˈfuðβol] (listen), meaning Royal Madrid Football Club), commonly referred to as Real Madrid, is a Spanish professional football club based in Madrid who have been playing in La Liga since 1929.

                        Founded in 1902 as Madrid Football Club, the club has traditionally worn a white home kit since its inception. The honorific title real is Spanish for "royal" and was bestowed to the club by King Alfonso XIII in 1920 together with the royal crown in the emblem. Real Madrid have played their home matches in the 81,044-capacity Santiago Bernabéu Stadium in downtown Madrid since 1947 and Real Madrid is also the most successful team in the FIFA Club World Cup, having been crowned winners 5 times since the tournament first started in 2000. Unlike most European sporting entities, Real Madrid's members (socios) have owned and operated the club throughout its history. The club is one of the most widely supported in the world, and was estimated to be worth $5.1 billion in 2022, making it the world's most valuable football team. In 2021, it was the second highest-earning football club in the world, with an annual revenue of €640.7 million.
                            
                        Being one of the three founding members of La Liga that have never been relegated from the top division since its inception in 1929 (along with Athletic Bilbao and Barcelona), Real Madrid holds many long-standing rivalries, most notably El Clásico with Barcelona and El Derbi Madrileño with Atlético Madrid. The club established itself as a major force in both Spanish and European football during the 1950s and 60s, winning five consecutive and six overall European Cups and reaching a further two finals. This success was replicated on the domestic front, with Madrid winning twelve league titles in the span of 16 years. This team, which included Alfredo Di Stéfano, Ferenc Puskás, Francisco Gento, and Raymond Kopa, is considered by some in the sport to be the greatest of all time. Real Madrid is known for its Galácticos policy, which involves signing the world's best players, such as Ronaldo, Zidane, and David Beckham, to create a superstar team. The term ‘Galácticos policy’ generally refers to the two eras of Florentino Pérez’s presidency of the club (2000-2006 and 2009-2018), however, players brought in just before his tenure are sometimes considered to be part of the Galácticos legacy. A notable example is Steve McManaman, who like many other players also suffered under the policy. On 26 June 2009, Madrid signed Cristiano Ronaldo for a record breaking £80 million (€94 million); he became both the club and history's all-time top goalscorer.
                            
                        In domestic football, the club has won 69 trophies; a record 35 La Liga titles, 20 Copa del Rey, 12 Supercopa de España, a Copa Eva Duarte, and a Copa de la Liga. In European football, Real Madrid have won a record 21 trophies; a record 14 European Cup/UEFA Champions League titles, two UEFA Cups, and a record five UEFA Super Cups. In worldwide competitions, they have achieved a record eight club world championships. Madrid was ranked second in the International Federation of Football History & Statistics Club World Ranking for 2000, 2002, 2014, 2017. In UEFA, Madrid ranks 1st in the all-time club ranking.
                            
                        Real Madrid was recognised as the best football club of the 20th century by FIFA and as the best European club during the same timeframe by the IFFHS, whilst also receiving the FIFA Centennial Order of Merit in 2004.Real Madrid has the highest participations in the European Cup/Champions League (42),tournament in which they hold the overall record for the most wins, most draws and most goals scored. Real Madrid is the only club to have won three consecutive titles (three-peat) in the European Cup/Champions League twice, first in 1955–56, 1956–57, and 1957–58, and second in 2015–16, 2016–17, and 2017–18. In May 2022, they won a record-extending fourteenth Champions League title (the fifth in nine seasons), recognized by the Guinness World Records. Real Madrid is the first club across all of Europe's top five leagues to win 100 trophies in all competitions. As of March 2023, Real Madrid are ranked fifth in the UEFA club rankings.</p>
                        </div>
                        <div class="about">
                            <p class="aboutp">if you want to join our fan group there is our authorization</p>
                            <div class="container">
                                <label id="uname"><b>Username</b></label>
                                <input type="text" placeholder="Enter Username" name="uname" required>
                            
                                <label id="psw"><b>Password</b></label>
                                <input type="password" placeholder="Enter Password" name="psw" required>
                            
                                <button type="submit">Login</button>
                                <label>
                                  <input type="checkbox" checked="checked" name="remember"> Remember me
                                </label>
                              </div>
                            
                              <div class="container" style="background-color:#f1f1f1">
                                <button type="button" class="cancelbtn">Cancel</button>
                                <span class="psw">Forgot <a href="#">password?</a></span>
                              </div>
                        </div>
                        <div class="aboutus">
                            <div class="aboutus1">
                                    <p>FOLLOW US</p>
                                    <div class="line1"></div>
                                    <a href="https://www.facebook.com/RealMadrid/" target="_blank"><img src="imgs/facebook.png" alt="facebook logo"></a>
                                    <a href="https://www.instagram.com/realmadrid/" target="_blank"><img src="imgs/instagram.png" alt="instagram logo"></a>
                                    <a href="https://twitter.com/realmadriden" target="_blank"><img src="imgs/twitter.png" alt="twitter logo"></a>
                                    <a href="https://www.youtube.com/realmadrid" target="_blank"><img src="imgs/youtube.png" alt="youtube logo"></a>
                                    <a href="https://www.twitch.tv/realmadrid" target="_blank"><img src="imgs/twitch.png" alt="twitch logo"></a>
                                    <a href="https://www.tiktok.com/@realmadrid" target="_blank"><img src="imgs/tik-tok.png" alt="tiktok logo"></a>
                                    <a href="https://www.snapchat.com/add/realmadrid" target="_blank"><img src="imgs/snapchat.png" alt="snapchat logo"></a>
                                    <a href="https://onefootball.com/en/team/real-madrid-26" target="_blank"><img src="imgs/one.png" alt=" onefootball logo"></a>
                                <div class="aboutus2">
                                    <p>REAL MADRID APP</p>
                                    <div class="line1"></div>
                                    <a href="https://apps.apple.com/es/app/realmadrid-app/id1107624540" target="_blank"><img src="imgs/app-store.png" alt="app store logo"></a>
                                    <a href="https://play.google.com/store/apps/details?id=com.mcentric.mcclient.MyMadrid&hl=en&gl=US&pli=1" target="_blank"><img src="imgs/google-play.png" alt="google play logo"></a>
                                </div>
                            </div>
                            
                        </div>
                </div>
            </div>  
        </div>
    </main>
    <footer>
        <div class="footers">
            <p>Sponsors</p>
            <div class="line"></div>
            <div class="footerlogos">
                <a  href="https://www.emirates.com/english/" target="_blank" ><img class="emiratess" src="imgs/emirates.png" alt="emirates image" ></a>
                <a href="https://www.adidas.com/us" target="_blank" ><img class="addidass" src="imgs/images.png" alt="adidas logo"></a> 
                <a  href="https://www.ea.com/sports" target="_blank"><img class="ea"  src="imgs/ea-sports.png" alt="EA sports logo"></a>
                <a  href="https://www.bmw.com/en/index.html" target="_blank" ><img class="bmw" src="imgs/bmw.png" alt="BMW logo"></a>
                <a  href="https://www.adobe.com/" target="_blank" ><img class="adobe" src="imgs/Adobe-Logo.png" alt="adobe logo"></a>
                <a  href="https://www.hankooktire.com/global/en/home.html" target="_blank" ><img class="hank" src="imgs/Hankook-Logo.png" alt="hankook logo"></a>
            </div>
            <div class="footersd" >
                 <p class="footersp"> <b> Legal Notice.
                    Privacy Policy.
                    Cookies Policy.
                    Notification management.
                    Patrocinadores.
                    Mapa Web. </b> </p>
                    <p class="footerp">
                        Real Madrid © 2023 All rights reserved
                    </p>
            </div>
        </div>
    </footer>
</body>
</html>    