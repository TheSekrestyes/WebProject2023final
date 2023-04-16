<?php

    function navBar(){
           echo '<nav class="navbar">
           <input type="checkbox" id="check">
           <label for="check" class="checkbtn">
               <i class="fül">&#8801;</i>
           </label>
           <ul>
               <li class="active"><a href="index.html">Kezdőlap</a></li>
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
               <li ><a href="orokbefogadasrol.html">Örökbefogadásról</a></li>
               <li><a href="rolunk.html">Rólunk</a></li>
               <li><a href="login.html">Bejelentkezés</a></li>
           </ul>
           <span class="cim">Boldog Blökik Állatmenhely</span>
           <img class="icon" src="../img/logo.png" alt="logo">
       </nav>' 
    }


?>