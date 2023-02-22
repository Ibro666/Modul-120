window.onload=function() {
    var fromlocation = "";
    var tolocation = "";
    var clas = "";
    var rod = "";
    var quant = "";
    var tax = "";
    var result = 2.90;

    var station = new Array("location=schwarzenburg","location=riedstaettkalchstaetten","location=plaffeien","location=passelb","location=chrachen","location=parmathaux-mouret","location=roche-roulin","location=roche","location=hauteville","location=corbieres","location=villarvolard","location=botterens","location=broc-fabrique","location=broc-village");
    var fromStation = new Array("from-location=schwarzenburg","from-location=riedstaettkalchstaetten","from-location=plaffeien","from-location=passelb","from-location=chrachen","from-location=parmathaux-mouret","from-location=roche-roulin","from-location=roche","from-location=hauteville","from-location=corbieres","from-location=villarvolard","from-location=botterens","from-location=broc-fabrique","from-location=broc-village");
    var road = new Array("rod=oneway","rod=roundtrip","rod=multi-journey");
    var quantity = new Array("quantity=1","quantity=2","quantity=3","quantity=4","quantity=5","quantity=6","quantity=7");
    var classes = new Array("class=first","class=second");
    var halffare = new Array("price=full","price=half");

    function calc(a, b) {
        var distance = b - a;
        if (distance < 0) {
            distance = -distance;
        }

        var price = 2.90;

        if (distance > 3) {
            var leftDistance = distance - 3;
            for (let i = 0; i <= leftDistance; i++) {
                price += 0.9;
            }
        }
        
        document.getElementById("travel-costs").innerHTML = price;
    }

    function calcWith(a, b, q, c, r, h) {
        if (q > 1) {
            result = calc(a, b) * q;
        } 
        if (c == 1) {
            result = calc(a, b) * 1.7/100;
        }
        if (r == 1) {
            result = calc(a, b) * 2;
        }
        if (r == 2) {
            result = 20.00;
        }
        if (h == 0) {
            result = calc(a, b) / 2;
        }
        document.getElementById("travel-costs").innerHTML = result;
    }

    function cookieread() {
        var cookieList = (document.cookie) ? document.cookie.split('; ') : [];
        fromlocation = cookieList[1];
        tolocation = cookieList[2];
        rod = cookieList[3];
        quant = cookieList[4];
        clas = cookieList[5];
        tax = cookieList[6];
        var from = fromStation.indexOf(fromlocation);
        var to = station.indexOf(tolocation);
        var ro = road.indexOf(rod);
        var qua = quantity.indexOf(quant);
        var cla = classes.indexOf(clas);
        var halff = halffare.indexOf(tax);
        
        //calcWith(from, to, qua, cla, ro, halff);
        calc(from, to);

        //console.log(fromlocation + from + " " + tolocation + to);
            
      
        
        var cookieValues = {};
        for (var i = 0, n = cookieList.length; i != n; ++i) {
        var cookie = cookieList[i];
        var f = cookie.indexOf('=');
            if (f >= 0) {
                var cookieName = cookie.substring(0, f);
                var cookieValue = cookie.substring(f + 1);

                //arrayValues(cookieName, cookieValue);
                
               // console.log (" cookieName " + cookieName);
                
                if (!cookieValues.hasOwnProperty(cookieName)) {
                cookieValues[cookieName] = cookieValue;
                }
            }
            
        }
    }
cookieread();
}