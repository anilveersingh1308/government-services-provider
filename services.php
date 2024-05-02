
<!DOCTYPE HTML>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="homepage.css">
        <script src="myscript.js"></script>
    </head>
    <body>
        <div class="header">
            <div class="header-menu" onclick="myMenu()">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
           
            <div class="header-title">
                <img src="/icon/name.png" alt="title">
            </div>
            <div class="header-right">
                <img src="/icon/trns user.png" alt="title">
                <span>Login</span>            
            </div>
        </div>    
            
        <div class="menu-content" id="myDropdown">
            <input type="submit" name="login" id="login" value="Login Now">            
            <div class="menu-content-inside">
                <hr class="menu-hr">
                <a href="homepage.html">
                    <img src="/icon/home.png" alt="home">
                    <span>Home  </span>
                </a>
                <a href="#">
                    <img src="/icon/status.png" alt="home">
                    <span>Application Status  </span>
                </a>
                <a href="#">
                    <img src="/icon/bell.png" alt="home">
                    <span>Latest Notifications  </span>
                </a>
                <a href="services.html">
                        <img src="/icon/service.png" alt="home">
                    <span>Services  </span>
                </a>
                <a href="#">
                    <img src="/icon/admission.png" alt="home">
                    <span>Admissions </span>
                </a>
                <a href="#">
                    <img src="/icon/jobs.png" alt="home">
                    <span>Jobs </span>
                </a>
                <a href="#">
                    <img src="/icon/result.png" alt="home">
                    <span>Results </span>
                </a>
                <a href="#">
                    <img src="/icon/admit.png" alt="home">
                    <span>Admit Cards  </span>
                </a>
                <a href="#">
                    <img src="/icon/schollarship.png" alt="home">
                    <span>Schollarships </span>
                </a>
                <a href="#">
                    <img src="/icon/about.png" alt="home">
                    <span>About US </span>
                </a>
                <a href="#">
                    <img src="/icon/phone.png" alt="home">
                    <span>Contact US </span>
                </a>
            </div>                        
        </div>
            
        <div class="navbar">
            <div class="category">
                <button id="general">General Services</button>
            </div>
            <div class="category">
                <button id="central">Central Government</button>
            </div>
            <div class="category">
                <button id="state">State Government</button>
            </div>
        </div>

        <div class="govsearch">
            <label for="title">Search for Government Services</label>
            <form autocomplete="off" action="#">
                <div class="govsearchservices">
                    <input type="text" name="myCountry" placeholder="Country" id="myInput">
                    <img src="/icon/search.png" alt="search">
                </div>
            </form>
        </div>
        <div class="space"></div>

        <div class="services-content">
            <div class="general-services">
                <!---------------------------start here----------------------------------->
                <div class="content">
                    <div class="content-inside">
                        <img src="/icon/certificate3.png" alt="Caste">
                        <label for="cast">Caste Certificate</label>
                    </div>
                    <div class="content-inside">
                        <button class="include">include services</button>
                        <button>Required Details</button>
                    </div>
                    <div class="content-inside">
                        <input type="submit" name="apply" value="Apply  Now" id="apply">
                    </div>
                </div>
                <div class="content">
                    <div class="content-inside">
                        <img src="/icon/income.png" alt="income">
                        <label for="income">Income Certificate</label>
                    </div>
                    <div class="content-inside">
                        <button class="include">include services</button>
                        <button>Required Details</button>
                    </div>
                    <div class="content-inside">
                        <input type="submit" name="apply" value="Apply  Now" id="apply">
                    </div>
                </div>
                <div class="content">
                    <div class="content-inside">
                        <img src="/icon/certificate3.png" alt="domicile">
                        <label for="domicile">Domicile Certificate</label>
                    </div>
                    <div class="content-inside">
                        <button class="include">include services</button>
                        <button>Required Details</button>
                    </div>
                    <div class="content-inside">
                        <input type="submit" name="apply" value="Apply  Now" id="apply">
                    </div>
                </div>
                <div class="content">
                    <div class="content-inside">
                        <img src="/icon/list.png" alt="list">
                        <label for="clg">Permanent Account Number (PAN) Card</label>
                    </div>
                    <div class="content-inside">
                        <button class="include">include services</button>
                        <button>Required Details</button>
                    </div>
                    <div class="content-inside">
                        <input type="submit" name="apply" value="Apply  Now" id="apply">
                    </div>
                </div>            
                <div class="content">
                    <div class="content-inside">
                        <img src="/icon/birth.png" alt="Caste">
                        <label for="cast">Birth Certificate</label>
                    </div>
                    <div class="content-inside">
                        <button class="include">include services</button>
                        <button>Required Details</button>
                    </div>
                    <div class="content-inside">
                        <input type="submit" name="apply" value="Apply  Now" id="apply">
                    </div>
                </div>
                <div class="content">
                    <div class="content-inside">
                        <img src="/icon/death.png" alt="income">
                        <label for="income">Death Certificate</label>
                    </div>
                    <div class="content-inside">
                        <button class="include">include services</button>
                        <button>Required Details</button>
                    </div>
                    <div class="content-inside">
                        <input type="submit" name="apply" value="Apply  Now" id="apply">
                    </div>
                </div>
                <div class="content">
                    <div class="content-inside">
                        <img src="/icon/passport.png" alt="domicile">
                        <label for="domicile">Passport Registration</label>
                    </div>
                    <div class="content-inside">
                        <button class="include">include services</button>
                        <button>Required Details</button>
                    </div>
                    <div class="content-inside">
                        <input type="submit" name="apply" value="Apply  Now" id="apply">
                    </div>
                </div>
                <div class="content">
                    <div class="content-inside">
                        <img src="/icon/certificate.png" alt="list">
                        <label for="clg">Age Certificate</label>
                    </div>
                    <div class="content-inside">
                        <button class="include">include services</button>
                        <button>Required Details</button>
                    </div>
                    <div class="content-inside">
                        <input type="submit" name="apply" value="Apply  Now" id="apply">
                    </div>
                </div>            
                <div class="content">
                    <div class="content-inside">
                        <img src="/icon/aadhar.png" alt="Caste">
                        <label for="cast">UIDAI Aadhar Card</label>
                    </div>
                    <div class="content-inside">
                        <button class="include">include services</button>
                        <button>Required Details</button>
                    </div>
                    <div class="content-inside">
                        <input type="submit" name="apply" value="Apply  Now" id="apply">
                    </div>
                </div>
                <div class="content">
                    <div class="content-inside">
                        <img src="/icon/income.png" alt="income">
                        <label for="income">Property Value Certificate</label>
                    </div>
                    <div class="content-inside">
                        <button class="include">include services</button>
                        <button>Required Details</button>
                    </div>
                    <div class="content-inside">
                        <input type="submit" name="apply" value="Apply  Now" id="apply">
                    </div>
                </div>
                <div class="content">
                    <div class="content-inside">
                        <img src="/icon/nielit.png" alt="domicile">
                        <label for="domicile">NIELIT Services</label>
                    </div>
                    <div class="content-inside">
                        <button class="include">include services</button>
                        <button>Required Details</button>
                    </div>
                    <div class="content-inside">
                        <input type="submit" name="apply" value="Apply  Now" id="apply">
                    </div>
                </div>
                <div class="content">
                    <div class="content-inside">
                        <img src="/icon/list.png" alt="list">
                        <label for="clg">Handicap Services</label>
                    </div>
                    <div class="content-inside">
                        <button class="include">include services</button>
                        <button>Required Details</button>
                    </div>
                    <div class="content-inside">
                        <input type="submit" name="apply" value="Apply  Now" id="apply">
                    </div>
                </div>
                <!---------------------------start here----------------------------------->
                <div class="content">
                    <div class="content-inside">
                        <img src="/icon/dl.png" alt="Caste">
                        <label for="cast">Driving license services</label>
                    </div>
                    <div class="content-inside">
                        <button class="include">include services</button>
                        <button>Required Details</button>
                    </div>
                    <div class="content-inside">
                        <input type="submit" name="apply" value="Apply  Now" id="apply">
                    </div>
                </div>
                <div class="content">
                    <div class="content-inside">
                        <img src="/icon/income.png" alt="income">
                        <label for="income">Ration Card Services</label>
                    </div>
                    <div class="content-inside">
                        <button class="include">include services</button>
                        <button>Required Details</button>
                    </div>
                    <div class="content-inside">
                        <input type="submit" name="apply" value="Apply  Now" id="apply">
                    </div>
                </div>
                <div class="content">
                    <div class="content-inside">
                        <img src="/icon/certificate3.png" alt="domicile">
                        <label for="domicile">Marriage Certificate</label>
                    </div>
                    <div class="content-inside">
                        <button class="include">include services</button>
                        <button>Required Details</button>
                    </div>
                    <div class="content-inside">
                        <input type="submit" name="apply" value="Apply  Now" id="apply">
                    </div>
                </div>
                <div class="content">
                    <div class="content-inside">
                        <img src="/icon/schollarship1.png" alt="list">
                        <label for="clg">Schollarships</label>
                    </div>
                    <div class="content-inside">
                        <button class="include">include services</button>
                        <button>Required Details</button>
                    </div>
                    <div class="content-inside">
                        <input type="submit" name="apply" value="Apply  Now" id="apply">
                    </div>
                </div>
                <div class="content">
                    <div class="content-inside">
                        <img src="/icon/list.png" alt="list">
                        <label for="clg">Disability Certificate</label>
                    </div>
                    <div class="content-inside">
                        <button class="include">include services</button>
                        <button>Required Details</button>
                    </div>
                    <div class="content-inside">
                        <input type="submit" name="apply" value="Apply  Now" id="apply">
                    </div>
                </div>
                <div class="content">
                    <div class="content-inside">
                        <img src="/icon/schollarship1.png" alt="list">
                        <label for="clg">Home Department Services</label>
                    </div>
                    <div class="content-inside">
                        <button class="include">include services</button>
                        <button>Required Details</button>
                    </div>
                    <div class="content-inside">
                        <input type="submit" name="apply" value="Apply  Now" id="apply">
                    </div>
                </div>
                <div class="content">
                    <div class="content-inside">
                        <img src="/icon/schollarship1.png" alt="list">
                        <label for="clg">Transport Department Services</label>
                    </div>
                    <div class="content-inside">
                        <button class="include">include services</button>
                        <button>Required Details</button>
                    </div>
                    <div class="content-inside">
                        <input type="submit" name="apply" value="Apply  Now" id="apply">
                    </div>
                </div>
                <div class="content">
                    <div class="content-inside">
                        <img src="/icon/schollarship1.png" alt="list">
                        <label for="clg">Applicatication for Khatauni</label>
                    </div>
                    <div class="content-inside">
                        <button class="include">include services</button>
                        <button>Required Details</button>
                    </div>
                    <div class="content-inside">
                        <input type="submit" name="apply" value="Apply  Now" id="apply">
                    </div>
                </div>
                <div class="content">
                    <div class="content-inside">
                        <img src="/icon/schollarship1.png" alt="list">
                        <label for="clg">Copy of Kutumb Register</label>
                    </div>
                    <div class="content-inside">
                        <button class="include">include services</button>
                        <button>Required Details</button>
                    </div>
                    <div class="content-inside">
                        <input type="submit" name="apply" value="Apply  Now" id="apply">
                    </div>
                </div>
                <div class="content">
                    <div class="content-inside">
                        <img src="/icon/certificate3.png" alt="Caste">
                        <label for="cast">Medical & Health Department Services</label>
                    </div>
                    <div class="content-inside">
                        <button class="include">include services</button>
                        <button>Required Details</button>
                    </div>
                    <div class="content-inside">
                        <input type="submit" name="apply" value="Apply  Now" id="apply">
                    </div>
                </div>
                <div class="content">
                    <div class="content-inside">
                        <img src="/icon/schollarship1.png" alt="list">
                        <label for="clg">Employment Services</label>
                    </div>
                    <div class="content-inside">
                        <button class="include">include services</button>
                        <button>Required Details</button>
                    </div>
                    <div class="content-inside">
                        <input type="submit" name="apply" value="Apply  Now" id="apply">
                    </div>
                </div>
                <div class="content">
                    <div class="content-inside">
                        <img src="/icon/schollarship1.png" alt="list">
                        <label for="clg">Vocational Education & Skill Development Department services</label>
                    </div>
                    <div class="content-inside">
                        <button class="include">include services</button>
                        <button>Required Details</button>
                    </div>
                    <div class="content-inside">
                        <input type="submit" name="apply" value="Apply  Now" id="apply">
                    </div>
                </div>
                <div class="content">
                    <div class="content-inside">
                        <img src="/icon/schollarship1.png" alt="list">
                        <label for="clg">Services of Power</label>
                    </div>
                    <div class="content-inside">
                        <button class="include">include services</button>
                        <button>Required Details</button>
                    </div>
                    <div class="content-inside">
                        <input type="submit" name="apply" value="Apply  Now" id="apply">
                    </div>
                </div>
                <div class="content">
                    <div class="content-inside">
                        <img src="/icon/schollarship1.png" alt="list">
                        <label for="clg">Secondary Education Department Services</label>
                    </div>
                    <div class="content-inside">
                        <button class="include">include services</button>
                        <button>Required Details</button>
                    </div>
                    <div class="content-inside">
                        <input type="submit" name="apply" value="Apply  Now" id="apply">
                    </div>
                </div>
                <div class="content">
                    <div class="content-inside">
                        <img src="/icon/schollarship1.png" alt="list">
                        <label for="clg">Welfare & Pension Services</label>
                    </div>
                    <div class="content-inside">
                        <button class="include">include services</button>
                        <button>Required Details</button>
                    </div>
                    <div class="content-inside">
                        <input type="submit" name="apply" value="Apply  Now" id="apply">
                    </div>
                </div>
                <div class="content">
                    <div class="content-inside">
                        <img src="/icon/schollarship1.png" alt="list">
                        <label for="clg">Home Affairs & Justice Department Services</label>
                    </div>
                    <div class="content-inside">
                        <button class="include">include services</button>
                        <button>Required Details</button>
                    </div>
                    <div class="content-inside">
                        <input type="submit" name="apply" value="Apply  Now" id="apply">
                    </div>
                </div>
                <div class="content">
                    <div class="content-inside">
                        <img src="/icon/birth.png" alt="Caste">
                        <label for="cast">Comercial Tax Services</label>
                    </div>
                    <div class="content-inside">
                        <button class="include">include services</button>
                        <button>Required Details</button>
                    </div>
                    <div class="content-inside">
                        <input type="submit" name="apply" value="Apply  Now" id="apply">
                    </div>
                </div>
                <div class="content">
                    <div class="content-inside">
                        <img src="/icon/death.png" alt="income">
                        <label for="income">Religious Affairs Services</label>
                    </div>
                    <div class="content-inside">
                        <button class="include">include services</button>
                        <button>Required Details</button>
                    </div>
                    <div class="content-inside">
                        <input type="submit" name="apply" value="Apply  Now" id="apply">
                    </div>
                </div>
                <div class="content">
                    <div class="content-inside">
                        <img src="/icon/certificate.png" alt="list">
                        <label for="clg">Entertainment Tax Services</label>
                    </div>
                    <div class="content-inside">
                        <button class="include">include services</button>
                        <button>Required Details</button>
                    </div>
                    <div class="content-inside">
                        <input type="submit" name="apply" value="Apply  Now" id="apply">
                    </div>
                </div>            
                <div class="content">
                    <div class="content-inside">
                        <img src="/icon/aadhar.png" alt="Caste">
                        <label for="cast">Dairy Development Services</label>
                    </div>
                    <div class="content-inside">
                        <button class="include">include services</button>
                        <button>Required Details</button>
                    </div>
                    <div class="content-inside">
                        <input type="submit" name="apply" value="Apply  Now" id="apply">
                    </div>
                </div>
                <div class="content">
                    <div class="content-inside">
                        <img src="/icon/income.png" alt="income">
                        <label for="income">Nurseries and Cold Storage Services</label>
                    </div>
                    <div class="content-inside">
                        <button class="include">include services</button>
                        <button>Required Details</button>
                    </div>
                    <div class="content-inside">
                        <input type="submit" name="apply" value="Apply  Now" id="apply">
                    </div>
                </div>
                <div class="content">
                    <div class="content-inside">
                        <img src="/icon/nielit.png" alt="domicile">
                        <label for="domicile">Food Manufacturing Services (FSSAI)</label>
                    </div>
                    <div class="content-inside">
                        <button class="include">include services</button>
                        <button>Required Details</button>
                    </div>
                    <div class="content-inside">
                        <input type="submit" name="apply" value="Apply  Now" id="apply">
                    </div>
                </div>
                <div class="content">
                    <div class="content-inside">
                        <img src="/icon/list.png" alt="list">
                        <label for="clg">Agriculture Services</label>
                    </div>
                    <div class="content-inside">
                        <button class="include">include services</button>
                        <button>Required Details</button>
                    </div>
                    <div class="content-inside">
                        <input type="submit" name="apply" value="Apply  Now" id="apply">
                    </div>
                </div>
                <!---------------------------start here----------------------------------->
                <div class="content">
                    <div class="content-inside">
                        <img src="/icon/certificate3.png" alt="Caste">
                        <label for="cast">Arms' Department Services</label>
                    </div>
                    <div class="content-inside">
                        <button class="include">include services</button>
                        <button>Required Details</button>
                    </div>
                    <div class="content-inside">
                        <input type="submit" name="apply" value="Apply  Now" id="apply">
                    </div>
                </div>
                <div class="content">
                    <div class="content-inside">
                        <img src="/icon/certificate3.png" alt="Caste">
                        <label for="cast">Fire Department Services</label>
                    </div>
                    <div class="content-inside">
                        <button class="include">include services</button>
                        <button>Required Details</button>
                    </div>
                    <div class="content-inside">
                        <input type="submit" name="apply" value="Apply  Now" id="apply">
                    </div>
                </div>
                <div class="content">
                    <div class="content-inside">
                        <img src="/icon/income.png" alt="income">
                        <label for="income">Ground Water Services</label>
                    </div>
                    <div class="content-inside">
                        <button class="include">include services</button>
                        <button>Required Details</button>
                    </div>
                    <div class="content-inside">
                        <input type="submit" name="apply" value="Apply  Now" id="apply">
                    </div>
                </div>
                <div class="content">
                    <div class="content-inside">
                        <img src="/icon/certificate3.png" alt="domicile">
                        <label for="domicile">Waight & Mesurement Department Services</label>
                    </div>
                    <div class="content-inside">
                        <button class="include">include services</button>
                        <button>Required Details</button>
                    </div>
                    <div class="content-inside">
                        <input type="submit" name="apply" value="Apply  Now" id="apply">
                    </div>
                </div>
                <div class="content">
                    <div class="content-inside">
                        <img src="/icon/list.png" alt="list">
                        <label for="clg">Excise Department Services</label>
                    </div>
                    <div class="content-inside">
                        <button class="include">include services</button>
                        <button>Required Details</button>
                    </div>
                    <div class="content-inside">
                        <input type="submit" name="apply" value="Apply  Now" id="apply">
                    </div>
                </div>            
                <div class="content">
                    <div class="content-inside">
                        <img src="/icon/birth.png" alt="Caste">
                        <label for="cast">Housing & Urban Planning Department Services</label>
                    </div>
                    <div class="content-inside">
                        <button class="include">include services</button>
                        <button>Required Details</button>
                    </div>
                    <div class="content-inside">
                        <input type="submit" name="apply" value="Apply  Now" id="apply">
                    </div>
                </div>
                <div class="content">
                    <div class="content-inside">
                        <img src="/icon/death.png" alt="income">
                        <label for="income">Fishries Department Services</label>
                    </div>
                    <div class="content-inside">
                        <button class="include">include services</button>
                        <button>Required Details</button>
                    </div>
                    <div class="content-inside">
                        <input type="submit" name="apply" value="Apply  Now" id="apply">
                    </div>
                </div>
            </div>                
        </div>
    </body>
</html>

<script>
    function govsearchservices(inp, arr) {
    var currentFocus;
    inp.addEventListener("input", function(e) {
        var a, b, i, val = this.value;
        closeAllLists();
        if (!val) { return false;}
        currentFocus = -1;

        a = document.createElement("DIV");
        a.setAttribute("id", this.id + "govsearchservices-list");
        a.setAttribute("class", "govsearchservices-items");

        this.parentNode.appendChild(a);

        for (i=0; i < arr.length;  i++){
            if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
                b = document.createElement("DIv");

                b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
                b.innerHTML += arr[i].substr(val.length);
                b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
                b.addEventListener("click",  function(e) {
                    inp.value = this.getElementsByTagName("input")[0].value;
                    closeAllLists();
                });
                a.appendChild(b);
            }
        }
    });

    inp.addEventListener("keydown", function(e){
        var x = document.getElementById(tis.id + "govsearchservices-list");
        if (x) x = x.getElementsByTagName("DIV");
        if(e.keyCode ==  40) {
            currentFocus ++;
            addActive (x);
        }
        else if(e.keyCode == 38){
            currentFocus --;
            addActive(x);
        }
        else if(e.keyCode  == 13){
            e.preventDefault();

            if(currentFocus > -1){
                if(x) x[currentFocus].click();
            }
        }
    });

    function  addActive(x){
        if (!x) return false;
        removeActive(x);
        if (currentFocus >= x.length) currentFocus = 0;
        if (currentFocus < 0) currentFocus = (x.length - 1);

        x[currentFocus].classList.add("govsearchservices-active");
    }

    function removeActive(x){
        for (var i = 0; i < x.length; i++){
            x[i].classList.remove("govsearchservices-active");
        }
    }

    function closeAllLists(elmnt){
        var x = document.getElementsByClassName("govsearchservices-items");
        for (var i=0; i < x.length; i++){
            if(elmnt != x[i] && elmnt != inp){
                x[i].parentNode.removeChild(x[i]);
            }
        }
    }

    document.addEventListener("click", function(e){
        closeAllLists(e.target);
    });
}

var countries = ["Pan Card","Aadhar Card","Votar Card","Domicile Certificate","Caste Certificate","Income Certificate","Birth Certificate","DeathCertificate","Passport Registration","Age Certificate","Property Value Certificate","NIELIT Services","HAndicap Services","Driving Licence Services","Ration Card Services","Marriage Certificate","Schollarships","Disability Certificate","Home Department Services","Transport Department Services","Khatauni Copy","Kutumb Register Copy","Medical And Health Department Services","Employment Services","Vocational Education And Skill Development Department Services","Power Services","Secondary Education Department Services","Welfare And Pension Services","Home Affairs And Justice Department Services","Comercial Tax Services","Religious Affairs Services","Entertainment Tax Services","Dairy Development Services","Nerseries and Cold Storage Services","Cold Storage Services","Food Manufacturing Services (FSSAI)","FSSAI","Agricultural Services","Arms Department Services","Fire Department Services","Ground Water Services","Weight And Measurement Department Services","Excise Department Services","Housing And Urban Planning Department Services","Fishries Department Services","Dublicate Drivind License"];
govsearchservices(document.getElementById("myInput"), countries);
</script>