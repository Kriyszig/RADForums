<html>
    <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <title>Calendar-RADForums</title>
            <link rel="stylesheet" href="calendar.css">
            <link rel="icon" href="../images/logotitle.png" type="image/x-icon">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
            <script>
            function checkdate()
            {
                if(!(document.getElementById("setdate").innerHTML>=1 && document.getElementById("setdate").innerHTML<=31))
                {
                    document.getElementById("setdate").innerHTML=''
                    alert('Enter valid date');
    
                }
            }
    
            function addevent()
        {
            if((document.getElementById("setdate").value<1) || (document.getElementById("setdate").value>31))
            {   
                document.getElementById("setdate").innerHTML=''
                alert('Enter valid date');
            }
            else
            {   document.getElementById("yourevents").innerHTML+="<br/>"+'December-'+document.getElementById("setdate").value+'\t'+document.getElementById("eventname").value;
                window.localStorage.setItem('December-'+document.getElementById("setdate").value,document.getElementById("eventname").value)
                btn=document.createElement('button');
                btn.appendChild(document.createTextNode('x'));
                document.getElementById('yourevents').appendChild(btn);
                window.location.reload();

        }
        } 
      
    function remove_event(x)
    {   
        localStorage.removeItem(localStorage.key(x));
        window.location.reload();
    }    
       
            
            </script>
        
    </head>
    <body>
        <div id="opacity">
            <div id="homepage">
                <div id="toppage">
                        <a href="../Home Page/homepage2.php">
                            <img id="logo" src="../images/logo2.png">
                        </a>
                        <div id="navbar">
                            <ul>
                                <li class="nav-op"><a>SUBJECT</a>
                                    <ul>
                                            <li><a href="../Subject Page/01.php">UE18CS201</a></li>
                                            <li><a href="../Subject Page/02.php">UE18CS202</a></li>
                                            <li><a href="../Subject Page/03.php">UE18CS203</a></li>
                                            <li><a href="../Subject Page/04.php">UE18CS204</a></li>
                                            <li><a href="../Subject Page/05.php">UE18CS205</a></li>
                                    </ul>
                                </li>
                                <li class="nav-op"><a>ACTIVITY</a>
                                    <ul>
                                        <li><a>CALENDAR</a></li>
                                        <li><a href="../Group Info/groupinfo.php">GROUP INFO</a></li>
                                        <li><a href="../activity_page.html">MY ACTIVITY</a></li>
                                    </ul>
                                </li>
                                <li class="nav-op"><a>MORE</a>
                                    <ul>
                                        <li><a href="../About Us/aboutus.php">ABOUT US</a></li>
                                        <li><a>REPORT A BUG</a></li>
                                        <li><a>FEEDBACK FORM</a></li>
                                    </ul>
                                </li>
                                <li class="nav-op"><a>OTHER FORUMS</a>
                                    <ul>
                                        <li><a>GD FORUMS</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                </div>
                <div class="user-bar">
                        <div class="user">
                            <div id="profile-pic">
                                <img src="" id="picture">
                            </div>
                            <div id="username">
                                <div class="btn-group">
                                    <button type="button" id="sb-user" class="btn btn-primary">Username</button>
                                    <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <div class="dropdown-menu">                                      
                                    <a class="dropdown-item" href="../userprofile.html">My Profile</a>
                                    <a class="dropdown-item" href="#">Followed Content</a>
                                    <a class="dropdown-item" href="#">Settings</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" id="logout" href="#">Logout</a>
                                </div>
                                </div>
                            </div>            
                        </div>
                        <div id="search-bar">
                            <input class="search-txt" type="text" name="" placeholder="Type to search">
                            <a class="search-btn" href="#">
                                <i class="fa fa-search"></i>
                            </a>
                        </div>
                </div>
                <div class="container">
                        <div class="addevent">
                                        Set Date:<br><input type="text" id="setdate" placeholder="1-30"><br>
                                        Event Name:<br><input type="text" id="eventname"><br>
                                        <button onclick="addevent()">Add Event</button>
                        </div>   
                        <div class="cal">
                        <button onclick="window.location.href='dec_calendar.html'" id="nav">Go to December</button>
                        <script language="javascript" type="text/javascript">
                        var day_of_week = new Array('Sun','Mon','Tue','Wed','Thu','Fri','Sat');
                        var month_of_year = new Array('January','February','March','April','May','June','July','August','September','October','November','December');
                        var Calendar = new Date();
                        
                        var year = Calendar.getFullYear();     
                        var month = Calendar.getMonth();    
                        var today = Calendar.getDate();    
                        var weekday = Calendar.getDay();   
                        
                        var DAYS_OF_WEEK = 7;   
                        var DAYS_OF_MONTH = 31; 
                        var cal;  
                        
                        Calendar.setDate(1);    
                        Calendar.setMonth(month);    
                        
                        
                        var TR_start = '<TR>';
                        var TR_end = '</TR>';
                        var highlight_start = '<TD ><TABLE  GCOLOR=DEDEFF BORDERCOLOR=CCCCCC><TR><TD ><CENTER>';
                        var highlight_end   = '</CENTER></TD></TR></TABLE>';
                        var TD_start = '<TD><CENTER>';
                        var TD_end = '</CENTER></TD>';
                        
                        
                        cal =  '<TABLE id="caltable"><TR><TD>';
                        cal += '<TABLE  ID="caltable" border="2" >' + TR_start;
                        cal += '<TD COLSPAN="' + DAYS_OF_WEEK + '" BGCOLOR="#EFEFEF"><CENTER><B>';
                        cal += month_of_year[month]  + '   ' + year + TD_end + TR_end;
                        cal += TR_start;
                        
                        for(index=0; index < DAYS_OF_WEEK; index++)
                        {
                        
                        if(weekday == index)
                        cal += TD_start +  day_of_week[index]  + TD_end;
                        
                        else
                        cal += TD_start + day_of_week[index] + TD_end;
                        }
                        
                        cal += TD_end + TR_end;
                        cal += TR_start;
                        
                        for(index=0; index < Calendar.getDay(); index++)
                        cal += TD_start + '  ' + TD_end;
                        
                        
                        for(index=0; index < DAYS_OF_MONTH; index++)
                        {
                        if( Calendar.getDate() > index )
                        {
                         
                          week_day =Calendar.getDay();
                         
                        
                        
                          if(week_day == 0)
                          cal += TR_start;
                        
                          if(week_day != DAYS_OF_WEEK)
                          {
                        
                        
                          var day  = Calendar.getDate();
                        
                          
                          if( today==Calendar.getDate() )
                          cal += highlight_start + day + highlight_end + TD_end;
                        
                        
                          else
                          {
                           cal += TD_start + day;
                           if(day==27 || day==30)
                           {
                               cal+='<br><small><b>MINOR ESA</b></small>'
                                  }
                                  
                          if(day==22)
                           {
                               cal+='<br><small><b>WT MP</b></small>'
                           }
                        
                           if(day==21)
                           {
                               cal+='<br><small><b>IDS MP</b></small>'
                           }
                           if(day==4 || day==5 || day==6 || day==7|| day==8)
                           {
                               cal+='<br><small><b>ISA 2</b></small>'
                           }
                          cal+=TD_end;
                          }
                        
                          if(week_day == DAYS_OF_WEEK)
                          cal += TR_end;
                          }
                        
                          
                          Calendar.setDate(Calendar.getDate()+1);
                        
                        }
                        }
                        cal += '</TD></TR></TABLE></TABLE>';
                        
                        
                        document.write(cal);
                        
                        </script>
                        </div>
                        <div id="yourevents">
                                <center><font size="6">Your Events</font></center>
                            
                        </div>
                </div>    
                <div id="bottompage">
                            <p>Switch theme:</p>
                            <div class="redirects" id="icons">
                                <a href=""><i class="fa fa-facebook-f fa-2x"></i></a>
                                <a href=""><i class="fa fa-github fa-2x"></i></a>
                                <a href=""><i class="fa fa-envelope fa-2x"></i></a>
                            </div>
                            <div class="redirects" id="tc">
                                <a href="">Terms & Conditions</a><br>
                                <a href="">Privacy Policy</a>
                            </div>
                </div>
            </div>
        </div>
                   <!-- The core Firebase JS SDK is always required and must be listed first -->
                   <script src="https://www.gstatic.com/firebasejs/7.3.0/firebase-app.js"></script>
                   <script src="https://www.gstatic.com/firebasejs/7.3.0/firebase-auth.js"></script>
                   <script src="https://www.gstatic.com/firebasejs/7.3.0/firebase-firestore.js"></script>
                   <script src="https://www.gstatic.com/firebasejs/7.3.0/firebase-storage.js"></script>
           
                   <!-- TODO: Add SDKs for Firebase products that you want to use
                   https://firebase.google.com/docs/web/setup#available-libraries -->
                   <script src="https://www.gstatic.com/firebasejs/7.3.0/firebase-analytics.js"></script>
                               
                   <script>
                       // Your web app's Firebase configuration
                       var firebaseConfig = {
                           apiKey: "AIzaSyCQ2E0UUN0VHrsDRsIkRa7b5dnsomqaxWg",
                           authDomain: "radforums-420ez.firebaseapp.com",
                           databaseURL: "https://radforums-420ez.firebaseio.com",
                           projectId: "radforums-420ez",
                           storageBucket: "radforums-420ez.appspot.com",
                           messagingSenderId: "308327911724",
                           appId: "1:308327911724:web:4c2c2ca9a2b2574a985c89",
                           measurementId: "G-WDQMS6T904"
                       };
                       // Initialize Firebase
                       firebase.initializeApp(firebaseConfig);
                       firebase.analytics();
           
                       //make auth and firestore references
                       const auth=firebase.auth();
                       const db=firebase.firestore();
                       const storage=firebase.storage();
                   </script>
                   <script src="calendar.js"></script>
    <script>
                        ids=[]
                        if(localStorage.key(0))
                                {  j=0;
                                    for(i=0;i<localStorage.length;i++)
                                    {   j++;
                                        if(localStorage.key(i).slice(0,8)==='November')
                                        {
                                        document.getElementById("yourevents").innerHTML+="<br/>"+localStorage.key(i)+'\t'+localStorage.getItem(localStorage.key(i))+'&nbsp;&nbsp;';
                                        btn=document.createElement('button');
                                        btn.setAttribute('id',i.toString())
                                        btn.appendChild(document.createTextNode('x'));
                                        ids.push(btn.id)
                                        document.getElementById('yourevents').appendChild(btn);
                                        }
                        
                                    }   
                                    document.getElementById('0').addEventListener('click',function(){remove_event(0)});  
                                    document.getElementById('1').addEventListener('click',function(){remove_event(1)});
                                    document.getElementById('2').addEventListener('click',function(){remove_event(2)});
                                    document.getElementById('3').addEventListener('click',function(){remove_event(3)});
                                    document.getElementById('4').addEventListener('click',function(){remove_event(4)});
                                    document.getElementById('5').addEventListener('click',function(){remove_event(5)});
                                    document.getElementById('6').addEventListener('click',function(){remove_event(6)});
                                    document.getElementById('7').addEventListener('click',function(){remove_event(7)});
                                    document.getElementById('8').addEventListener('click',function(){remove_event(8)});
                                    document.getElementById('9').addEventListener('click',function(){remove_event(9)});
                                    document.getElementById('10').addEventListener('click',function(){remove_event(10)});
                                }
    </script>
            
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
    </html>