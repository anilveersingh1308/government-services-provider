
/*--------------------------------------- menu section ---------------------------------------------*/

function myMenu(){
    document.getElementById("myDropdown").classList.toggle("show");

    window.onclick=function(event){
        if(!eent.target.matches('.header-menu')){
            var dropdowns = document.getElementsByClassName("menu-content");
            var i;
            for(i=0; i<dropdowns.length; i++){
                var openDropdown = dropdowns[i];
                if(openDropdown.classList.contains('show')){
                    openDropdown.classList.remove('show');
                }
            }
        }
    }
}

/*----------------------------- autocomplte search -------------------------------------------------*/

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