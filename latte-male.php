<!DOCTYPE html>
<html>
<head>
  <title>Latte | Personal-a-Tea Selfie</title>
  <!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
  <meta http-equiv="cache-control" content="no-cache">
  <link rel="icon" type="image/png" href="images/coffee.png">
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta name="robots" content="noindex, nofollow">
  <meta name="googlebot" content="noindex, nofollow">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="jquery-1.9.1.js"></script>
  <!--<link rel="stylesheet" type="text/css" href="/css/result-light.css">-->
  <script type="text/javascript" src="html2canvas.js"></script>
  <script type="text/javascript" src="base64.js"></script>
  <script type="text/javascript" src="canvas2image.js"></script>
  <!--<link rel="stylesheet" type="text/css" href="fonts.css" charset="utf-8" />-->
  <link rel="stylesheet" type="text/css" href="radio1.css" />
  <link rel="stylesheet" type="text/css" href="radio2.css" />
  <link rel="stylesheet" type="text/css" href="font-txt.css">
  <link rel="stylesheet" type="text/css" href="data-txt.css">
  <link rel="stylesheet" type="text/css" href="buttons-animation.css" />
  <link rel="stylesheet" type="text/css" href="traits-latte-male.css">

  <script type='text/javascript'>//<![CDATA[
    $(window).load(function(){
      $(function() { 
        $("#btnSave").click(function() { 
          html2canvas($("#widget"), {
            onrendered: function(canvas) {
                theCanvas = canvas;
                document.body.appendChild(canvas);
                // Convert and download as image 
                  // Canvas2Image.saveAsPNG(canvas); 
                $("#img-out").append(canvas);
                // Clean up 
                //document.body.removeChild(canvas);
            }
          });
        });
      }); 
    });
  //]]> 
  </script>
  
  <script>
    function randString(x){
      var s = "";
      while(s.length<x&&x>0){
        var r = Math.random();
        s+= (r<0.1?Math.floor(r*100):String.fromCharCode(Math.floor(r*26) + (r>0.5?97:65)));
      }
      return s;
    }
  </script>
  
  <script type="text/javascript" >
    function writeComment(e) {
        var comment = document.forma.nameMug.value;
        // alert(comment);
        document.getElementById("foo").value = randString(14);
        document.getElementById('nameMugArea').innerHTML = comment + " Latte";
        e.preventDefault();
        return false;
    } 
  </script>
  
  <script>
    $(document).ready(function() {
      $('#trigAnimate').on('click', checkAvatar)
    });
  </script> 
  
  <script>
    function checkAvatar() {
      $('.animate').toggleClass('animateBut');
    
      var persa;
      for (i=0;i<document.fpersa.personalitya.length;i++){
        if (document.fpersa.personalitya[i].checked==true){
            persa=i;
            //exist for loop, as target acquired.
            break;
        }
      }
    
      var persb;
        for (j=0;j<document.fpersb.personalityb.length;j++){
          if (document.fpersb.personalityb[j].checked==true){
          persb=j;
          //exist for loop, as target acquired.
          break;
        }
      }
    
      var persc;
        for (k=0;k<document.fpersc.personalityc.length;k++){
          if (document.fpersc.personalityc[k].checked==true){
            persc=k;
            //exist for loop, as target acquired.
            break;
        }
      }
      
      var persd;
        for (l=0;l<document.fpersd.personalityd.length;l++){
          if (document.fpersd.personalityd[l].checked==true){
            persd=l;
            //exist for loop, as target acquired.
            break;
        }
      }
    
      if (persa == 1  && persb == 4  && persc == 0  && persd == 1 ) {
        document.getElementById('checkAvatare').innerHTML = '<span style="color:white;">BOOM! Youve Just Won A Prize From Personal-A-Teas.<span style="color:#fff899"> Latte</span> Is Your Personality. <span style="color:#fff899">"Create Selfie"</span> to continue</span>';
        document.getElementById('match').value = 'Yes!';
        return true;
      }
      else {
        document.getElementById('checkAvatare').innerHTML = '<span style="color:white;">Better luck next time! <span style="color:#fff899">"Create Selfie"</span> to continue</span>';
        document.getElementById('match').value = 'No';
        return false;
      }
    } 
  </script>
  
  <script src="gen_validatorv4.js" type="text/javascript"></script>
  
  <script>
    function myTimer() {
      //alert('Hello');
      // document.getElementById("foo").value = randString(14);
      setTimeout(myTimerb, 100);
      document.getElementById('display-avatar').style.display = 'inline';
      //myTimer2;
    }
  </script>
  
  <script>
    function myTimerb() {
      document.getElementById('avatar-generator').style.display = 'none';
    }
  </script>
  
  <script>
    function validateFormX() {
      var x = document.forma.elements['nameMug'].value;
      if (x == null || x == "") {
        alert("Personal-a-Tea Selfie name must be filled out. Then press 'Enter name' button");
        //return false;
      }
      else {
        btnSave.click();
      	document.getElementById('display-avatar').style.display = 'inline';
      	setTimeout(myTimerb, 100);
      }
    }
  </script>
  
  <script>
    function validateForm() {
      var x = document.forms["forma"]["nameMug"].value;
      var a = document.forms["fpersa"]["personalitya"].value;
      var b = document.forms["fpersb"]["personalityb"].value;
      var c = document.forms["fpersc"]["personalityc"].value;
      var d = document.forms["fpersd"]["personalityd"].value;
      if (x == null || x == "") {
        alert("Please enter Personal-a-Tea Selfie Name and press 'Add name' button");
        return false;
      }
      else if (a == null || a == "") {
        alert("Please select a personality trait from Set A");
        return false;
      }
      else if (b == null || b == "") {
        alert("Please select a personality trait from Set B");
        return false;
      }
      else if (c == null || c == "") {
        alert("Please select a personality trait from Set C");
        return false;
      }
      else if (d == null || d == "") {
        alert("Please select a personality trait from Set D");
        return false;
      }
      else {
        btnSave.click();
      	document.getElementById('display-avatar').style.display = 'inline';
      	setTimeout(myTimerb, 100);
      }
    }
  </script>
  
  <script>
  function fade(){
    for (d=0;d<100;d++){
      $('#btnSaveX').fadeOut(1000).fadeIn(1000);
    }
  }
  </script>
  
  <script>
    function getRndInteger(min, max) {
      return Math.floor(Math.random() * (max - min + 1)) + min;
    }
  </script>

</head>


<body>
  
  <div id="display-avatar">
    <br/>
    <span class="titleh2">Wow! Nice Selfie!</span>
    <br/>
    <br/>
    <div id="img-out"></div>
    <br/>
    <div class="titleh3">Enter Your Name And Email To Receive Your Personal-A-Teas Selfie</div>
    <!--<div class="titleh3">Enter Your Name And Email To Receive Your Avatar/Selfie</div>-->
    <br/><br/>
    <form id="fSaveAvatar" method="post" action="save-personal-a-tea-selfie.php">
      <span style="font-size:200%; color:#60929d;">Your full name:</span><br/>
      <input type="text" name="fullname" id="fullname" maxlength="30" required><br />
      <span style="font-size:200%; color:#60929d;">Your e-mail address:</span><br/>
      <input type="email" name="email" id="email" maxlength="30" required><br />
      <br />
      <input type="checkbox" name="optin" id="optin" value="yes" checked="checked"> <span style="color:#60929d">I agree to receive offers and promotional e-mails from JSP</span><br>
      <br />
      
      <input type="hidden" name="gender" id="gender" value="Male">
      <input type="hidden" name="drink2" id="drink2" value="">
      <input type="hidden" name="design2" id="design2" value="">
      <input type="hidden" name="personalitya2" id="personalitya2" value="">
      <input type="hidden" name="personalityb2" id="personalityb2" value="">
      <input type="hidden" name="personalityc2" id="personalityc2" value="">
      <input type="hidden" name="personalityd2" id="personalityd2" value="">
      <input type="hidden" name="nameMugb" id="nameMugb" value="">
      <input type="hidden" name="match2" id="match2" value="">
      <input type="hidden" name="foo2" id="foo2" value="">
      
      <input type="submit" name="send" id="saveAvatar" value="Send Me My Selfie" 
      onclick="
      getElementById('gender').value = fSaveAvatar.elements['gender'].value; 
      getElementById('drink2').value = fdrink.elements['drink'].value; 
      getElementById('design2').value = fdesign.elements['m-bg'].value; 
      getElementById('personalitya2').value = fpersa.elements['personalitya'].value; 
      getElementById('personalityb2').value = fpersb.elements['personalityb'].value; 
      getElementById('personalityc2').value = fpersc.elements['personalityc'].value; 
      getElementById('personalityd2').value = fpersd.elements['personalityd'].value; 
      getElementById('nameMugb').value = forma.elements['nameMug'].value; 
      getElementById('match2').value = fmatch.elements['match'].value; 
      getElementById('foo2').value = fCode.elements['foo'].value; 
      getElementById('lovedonefullname').value = fSaveAvatar.elements['lovedonefullname'].value; 
      getElementById('lovedoneemail').value = fSaveAvatar.elements['lovedoneemail'].value;" class="button">
      
    </form>
    <form id="fCode">
    <p style="color:#60929d">Gift Shop Code: <input type="text" id='foo' style='width:auto;height:20px;font-weight:bold;border:0px;' readonly></p>
    </form>
    <!--<ul>-->
    <!--<li>Bring this code with you to our shop to personalise your gift item</li>-->
    <!--<li>Print and bring this code to a &#8216;Personal-a-Teas&#8217; engaged café* to pick up a promotional drink!</li>-->
    <!--</ul>-->
    <!--<p><em>* See the <a href="https://jesuispersonality.xyz/shop/" target="_blank" title="Promotions">Promotions</a> page for details</em></p>-->
    <!--<br/>-->
    <!--<span style="font-size:85%;color:#777;"><em>Save and use this code in our Shop.</em></span>-->
    <br/><br/>
    <!--<div class="titleh3">Save Your Avatar code</div>-->
    <!--<div class="titleh3">Then Press The <span style="color:white">"Save Personal-A-Tea"</span> Button above</div>-->
    <!--<div class="titleh3">This Will Bring You To Our Shop</div>-->
    <!--<div class="titleh3">Where You Can Use Your Avatar Image And Code To Personalise Gifts</div>-->
    <br/><br/>
  </div> <!--diaplay avatar-->

<!----------------------------------------------------Begining of landing page---------------------------------->

  <div id="avatar-generator">
    <h2 id="title-heading">Create Your Ticket To Treats At Local Cafés</h2>
  
                        <!--Top Image-->
    <img style="max-width:100%;" src="images/top-logo-blue.png">

    <div id=background-image> 
    
      <form name="fdrink">
        <input type="hidden" name="drink" id="drink" value="Latte">
      </form>
      
                        <!--Avatar-->
      <span id="widget" class="widget">
        <div class="elementx ng-scopex">
          <div ng-show="hasData()x" class="contentx">
            <div id="mbga"></div>
              <br/><br/>
              <div class="demo" id="design"></div>
              <br/><br/>
              <div class="demo" id="personality-a"></div>
              <br/><br/>
              <div class="demo" id="personality-b"></div>
              <br/><br/>
              <div class="demo" id="personality-c"></div>
              <br/><br/>
              <div class="demo" id="personality-d"></div>
              <br/><br/>
              <div class="demo" id="nameMugArea"></div>
              <br/><br/>
          </div>
        </div>
      <!-- ngRepeat: field in getChildren(field) -->
      </span>
                  <!-- ^ avatar end ^ -->
      <!--<br />-->
      <!--<br />-->
      <input style="text-align:center; float:right; clear:right;" type="submit" value="^ Create Selfie ^" onclick="validateForm()" class="button animate" id="btnSaveX">
                    <!--Select Gender-->
      <div class="buttons-gender">
        <ul>
          <li><a href="#" class="current2 round green" id="male-but">Male<span class="round"> <h1>:D</h1> </span></a></li>
          <li><a href="latte-female.php" class="round red" id="female-but">Female<span class="round"> <h1>:D</h1> </span></a></li>
        </ul> 
      </div> <!--buttons-gender-->

                    <!--Select Drink-->
      <h3 id="sd-heading">Select drink:</h3>
      <div class="buttons-drink">
        <ul>                  
          <li>
            <a href="cappuccino.php" id="cap-but" class="round yellow"><div id="cap-but-text">Cappuccino</div>
              <span class="round">
                <img src="images/icon-cappuccino3.png">
              </span>
            </a>
          </li>
          
          <li>
            <a href="loose-leaf-tea-male.php" id="llt-but" class="round yellow"><div id="llt-but-text">Loose Leaf Tea</div>
              <span class="round">
                <img src="images/icon-tea5.png">
              </span>
            </a>
          </li>
          
          <li>
            <a href="latte-male.php" id=latte-but class="current round yellow"><div id="latte-but-text">Latte</div>
              <span class="round">
                <img src="images/icon-latte4.png">
              </span>
            </a>
          </li>
          
          <li>
            <a href="earl-grey-male.php" id="eg-but" class="round yellow"><div id="eg-but-text">Earl Grey</div>
              <span class="round">
                <img src="images/icon-tea6.png">
              </span>
            </a>
          </li>
          
          <li>
            <a href="flat-white-male.php" id="fw-but" class="round yellow"><div id="fw-but-text">Flat White</div>
              <span class="round">
                <img src="images/icon-flat-white.png">
              </span>
            </a>
          </li>
    	  </ul> 
      </div> <!--buttons-drink-->

      <div id="contentx"> <!--all content below drink buttons except bottom partner logos-->
        <br />
        <br />
                        <!--Name box and button-->
        <form name="forma">
          <input name="nameMug" id="nameMug" value="" placeholder="e.g. Gavin's" maxlength="20" >
          <input type="button" id="nameButton" value="Add Name!" onClick="writeComment()" />
        </form>
        
                        <!--Avatar save button-->
        
        <div id="desRadio" class="desRadio" name="desRadio">
          <h3>Choose design:</h3>
          <form name="fdesign">
            <ul>
              <li>
                <a onclick="
                  getElementById('design').style.backgroundImage = 'url(latte-hongoram-male.jpg)'; 
                  getElementById('personality-a').style.color = '#00a751'; 
                  getElementById('personality-b').style.color = '#00a751'; 
                  getElementById('personality-c').style.color = '#00a751'; 
                  getElementById('personality-d').style.color = '#00a751'; 
                  getElementById('nameMugArea').style.color = '#00a751'">
                  <input type="radio" name="m-bg" id="m-bg1" value="Hongoram" checked>
                  <label for="m-bg1">Hongoram</label>
                  <div class="check"></div> 
                </a>
              </li>
              
              <li>
                <a onclick="
                  getElementById('design').style.backgroundImage = 'url(latte-nostalgia-male.jpg)'; 
                  getElementById('personality-a').style.color = '#777'; 
                  getElementById('personality-b').style.color = '#777'; 
                  getElementById('personality-c').style.color = '#777'; 
                  getElementById('personality-d').style.color = '#777'; 
                  getElementById('nameMugArea').style.color = '#777'">
                  <input type="radio" name="m-bg" id="m-bg2" value="Nostalgia">
                  <label for="m-bg2">Nostalgia</label>
                  <div class="check"></div> 
                </a>
              </li>
              
              <li>
                <a onclick="
                  getElementById('design').style.backgroundImage = 'url(latte-paupau-male.jpg)'; 
                  getElementById('personality-a').style.color = '#fcf49b'; 
                  getElementById('personality-b').style.color = '#fcf49b'; 
                  getElementById('personality-c').style.color = '#fcf49b'; 
                  getElementById('personality-d').style.color = '#fcf49b'; 
                  getElementById('nameMugArea').style.color = '#fcf49b'">
                  <input type="radio" name="m-bg" id="m-bg3" value="Paupau">
                  <label for="m-bg3">Paupau</label>
                  <div class="check"></div> 
                  </a>
              </li>
            </ul>
          </form>
        </div> <!--desRadio-->
        <br/>
        
                        <!--Personality Traits-->
        <div  id="containerOutx" name="containerOutx">               
        <h3>Select a personality trait from each column:</h3>
        <div  class="containerOut" name="containerOut" >
          
          <div class="radio-container" name="radio-container" >
            <img class="letter" id="lettera">
            <div id="p1">
              <form name="fpersa">
                <ul>
                  <li id="li-top">
                    <a onclick="getElementById('personality-a').innerHTML = 'Casual'" >
                      <input type="radio" id="a1-option" name="personalitya" value="Casual" >
                      <label for="a1-option">Casual</label>
                      <div class="check"></div>
                    </a>
                  </li>
          
                  <li>
                    <a onclick="getElementById('personality-a').innerHTML = 'Calm'">
                      <input type="radio" id="a2-option" name="personalitya" value="Calm"> 
                      <label for="a2-option">Calm</label>
                      <div class="check"></div>
                    </a>
                  </li>
          
                  <li>
                    <a onclick="getElementById('personality-a').innerHTML = 'Genuine'">
                      <input type="radio" id="a3-option" name="personalitya" value="Genuine"> 
                      <label for="a3-option">Genuine</label>
                      <div class="check"></div>
                    </a>
                  </li>
                  <li>
                    <a onclick="getElementById('personality-a').innerHTML = 'Generous'">
                      <input type="radio" id="a4-option" name="personalitya" value="Generous"> 
                      <label for="a4-option">Generous</label>
                      <div class="check"></div>
                    </a>
                  </li>
                  <li>
                    <a onclick="getElementById('personality-a').innerHTML = 'Loyal'">
                      <input type="radio" id="a5-option" name="personalitya" value="Loyal"> 
                      <label for="a5-option">Loyal</label>
                      <div class="check"></div>
                    </a>
                  </li>
                </ul>
              </form>
            </div> <!--p1-->
          </div> <!--radio-container1-->
        
          <div class="radio-container" name="radio-container">
            <img class="letter" id="letterb">
            <div id="p2">
              <form name="fpersb">
                <ul>
                  <li id="li-top" >
                    <a onclick="getElementById('personality-b').innerHTML = 'Kind'" >
                      <input type="radio" id="b1-option" name="personalityb" value="Kind" >
                      <label for="b1-option">Kind</label>
                      <div class="check"></div>
                    </a>
                  </li>
          
                  <li>
                    <a onclick="getElementById('personality-b').innerHTML = 'Reliable'">
                      <input type="radio" id="b2-option" name="personalityb" value="Reliable"> 
                      <label for="b2-option">Reliable</label>
                      <div class="check"></div>
                    </a>
                  </li>
          
                  <li>
                    <a onclick="getElementById('personality-b').innerHTML = 'Funny'">
                      <input type="radio" id="b3-option" name="personalityb" value="Funny"> 
                      <label for="b3-option">Funny</label>
                      <div class="check"></div>
                    </a>
                  </li>
                  <li>
                    <a onclick="getElementById('personality-b').innerHTML = 'Strong'">
                      <input type="radio" id="b4-option" name="personalityb" value="Strong"> 
                      <label for="b4-option">Strong</label>
                      <div class="check"></div>
                    </a>
                  </li>
                  <li>
                    <a onclick="getElementById('personality-b').innerHTML = 'Hard-working'">
                      <input type="radio" id="b5-option" name="personalityb" value="Hard-working"> 
                      <label for="b5-option">Hard-working</label>
                      <div class="check"></div>
                    </a>
                  </li>
                </ul>
              </form>
            </div> <!--p2-->
          </div> <!--radio-container2-->
        
          <div class="radio-container" name="radio-container">
            <img class="letter" id="letterc">
            <div id="p3">
              <form name="fpersc">
                <ul>
                  <li id="li-top" >
                    <a onclick="getElementById('personality-c').innerHTML = 'Outgoing'" >
                      <input type="radio" id="c1-option" name="personalityc" value="Outgoing" >
                      <label for="c1-option">Outgoing</label>
                      <div class="check"></div>
                    </a>
                  </li>
          
                  <li>
                    <a onclick="getElementById('personality-c').innerHTML = 'Clever'">
                      <input type="radio" id="c2-option" name="personalityc" value="Clever"> 
                      <label for="c2-option">Clever</label>
                      <div class="check"></div>
                    </a>
                  </li>
          
                  <li>
                    <a onclick="getElementById('personality-c').innerHTML = 'Protective'">
                      <input type="radio" id="c3-option" name="personalityc" value="Protective"> 
                      <label for="c3-option">Protective</label>
                      <div class="check"></div>
                    </a>
                  </li>
                  <li>
                    <a onclick="getElementById('personality-c').innerHTML = 'Trustworthy'">
                      <input type="radio" id="c4-option" name="personalityc" value="Trustworthy"> 
                      <label for="c4-option">Trustworthy</label>
                      <div class="check"></div>
                    </a>
                  </li>
                  <li>
                    <a onclick="getElementById('personality-c').innerHTML = 'Determined'">
                      <input type="radio" id="c5-option" name="personalityc" value="Determined"> 
                      <label for="c5-option">Determined</label>
                      <div class="check"></div>
                    </a>
                  </li>
                </ul>
              </form>
            </div> <!--p3-->
          </div> <!--radio-container3-->
        
          <div class="radio-container" name="radio-container">
            <img class="letter" id="letterd">
            <div id="p4">
              <form name="fpersd">
                <ul>
                  <li id="li-top">
                    <a onclick="getElementById('personality-d').innerHTML = 'Frank'" >
                      <input type="radio" id="d1-option" name="personalityd" value="Frank" >
                      <label for="d1-option">Frank</label>
                      <div class="check"></div>
                    </a>
                  </li>
          
                  <li id="li-top">
                    <a onclick="getElementById('personality-d').innerHTML = 'Listener'">
                      <input type="radio" id="d2-option" name="personalityd" value="Listener"> 
                      <label for="d2-option">Listener</label>
                      <div class="check"></div>
                    </a>
                  </li>
          
                  <li id="li-top">
                    <a onclick="getElementById('personality-d').innerHTML = 'Cheeky'">
                      <input type="radio" id="d3-option" name="personalityd" value="Cheeky"> 
                      <label for="d3-option">Cheeky</label>
                      <div class="check"></div>
                    </a>
                  </li>
                  
                  <li id="li-top">
                    <a onclick="getElementById('personality-d').innerHTML = 'Pragmatic'">
                      <input type="radio" id="d4-option" name="personalityd" value="Pragmatic"> 
                      <label for="d4-option">Pragmatic</label>
                      <div class="check"></div>
                    </a>
                  </li>
                  
                  <li id="li-top">
                    <a onclick="getElementById('personality-d').innerHTML = 'Romantic'">
                      <input type="radio" id="d5-option" name="personalityd" value="Romantic"> 
                      <label for="d5-option">Romantic</label>
                      <div class="check"></div>
                    </a>
                  </li>
                </ul>
              </form>
            </div> <!--p4-->
          </div> <!--radio-container4-->
        
        </div> <!--containerOut-->
        </div> <!--containerOutx-->
        <div style="clear: both;"></div>
        <br/>
        <br/>
        
        <div class="mesg" >
          <h3 id="bottom-heading">Are You A Latte Personality?</h3>
        </div>
        
        <br/>
        <br/>
        <div id="giftx" >
          <div id="checkAvatare" style="display:inline; align-text:center;"></div>
          <br/>
          <br/>
          <input type="button" value="Personal-a-Teas match?" id="trigAnimate" class="button" /><br/>
          <form id="fmatch">
            <input type="hidden" name="match" id="match" value="" readonly="readonly">
          </form>
          <br/>
          <br/>
          <br/>
          <input type="hidden" value="Display Personal-a-Tea Selfie" class="button" id="btnSave" />
        </div><!--giftx-->
      
      </div> <!--contentx-->
      
      <?php
      require 'media-footer.php';
      ?>
      
    </div> <!--background-image-->
    
  </div> <!--avatar generator-->
  
  
</body>
</html>