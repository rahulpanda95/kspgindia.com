<!DOCTYPE html>
<html>
<head>
    <link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel = "stylesheet">
    <script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <script>
        function showUser(str) {
            if (str=="") {
                document.getElementById("txtHint").innerHTML="";
                return;
            }
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp=new XMLHttpRequest();
            } else { // code for IE6, IE5
                xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange=function() {
                if (this.readyState==4 && this.status==200) {
                    document.getElementById("txtHint").innerHTML=this.responseText;
                }
            }
            xmlhttp.open("GET","visitor_as_per_date.php?q="+str,true);
            xmlhttp.send();
        }
    </script>
    <script>
        $(function() {
            $( "#datepicker" ).datepicker({ dateFormat: 'yy-mm-dd' });
            $( "#datepicker" ).datepicker("show");
        });
    </script>
</head>
<body>

<form>
    <p style="color: darkred">Enter Date for Visitor History: <input type = "text" name = "datepicker" id = "datepicker" onchange="showUser(this.value)"></p>
</form>
<br>
<div id="txtHint"><b>Visitor List will be shown here.</b></div>

</body>
</html>