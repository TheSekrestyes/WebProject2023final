<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/logo.png">
    <link rel="stylesheet" href="../css/style.css">
    <title>Boldog Blökik Állatmenhely</title>
</head>
<body>
    <nav class="navbar">
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fül">&#8801;</i>
        </label>
        <ul>
            <li><a href="index.html">Kezdőlap</a></li>
            <li>
                <div class="dropdown">
                    <div class="dropbtn">Kutyáink
                        <div class="dropdown-content">
                            <a href="gazdaraVaroKutyaink.html">Gazdára váró kutyáink</a>
                            <a href="gazdaraTalaltKutyaink.html">Gazdára talált kutyáink</a>
                        </div>
                    </div>
                </div>
            </li>
            <li><a href="orokbefogadasrol.html">Örökbefogadásról</a></li>
            <li><a href="rolunk.html">Rólunk</a></li>
            <li class ="active"><a href="login.html">Bejelentkezés</a></li>
        </ul>
        <span class="cim">Boldog Blökik Állatmenhely</span>
        <img class="icon" src="../img/logo.png" alt="logo">
    </nav>

    <div class="content">
        <form action="get">
            <div class="form">
                <div>
                    <label for="nicknameReg">Felhasználónév:</label><br>
                        <input type="text" name="nicknameReg" id="nicknameReg" placeholder="Felhasználónév"><br>
                        <label for="emailReg">Email cím:</label><br>
                        <input type="email" name="emailReg" id="emailReg" placeholder="Email cím"><br>
                        <label for="pwReg">Jelszó:</label><br>
                        <input type="password" name="pwReg" id="pwReg" placeholder="Jelszó"><br>
                        <input type="password" name="pw2Reg" id="pw2Reg" placeholder="Jelszó megerősítése"><br>
                        <label>Neme:</label><br> 
                        <input type="radio" name="gender" id="gender-ferfi"> <label for="gender-ferfi">Férfi</label>
                        <input type="radio" name="gender" id="gender-no"> <label for="gender-no">Nő</label>
                        <input type="radio" name="gender" id="gender-egyeb"> <label for="gender-egyeb">Egyéb</label><br>
                        <input type="submit" name="btnReg" id="btnReg" value="Regisztráció">
                </div>
                <div class="register">
                    <a href="login.html">Bejelentkezés</a>
                </div>
            </div>
        </form>
    </div>

    <footer>
        <p class="elerhetosegek">Elérhetőségek: e-mail: minta@minta.hu, telefon: +36 12 345 6789, cím: Szeged, Minta utca, 6724</p>
    </footer>
</body>
</html>