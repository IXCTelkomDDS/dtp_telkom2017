<?php
    include "koneksi_db.php";
?>

<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Tue Dec 19 2017 09:47:38 GMT+0000 (UTC)  -->
<html data-wf-page="59fd0c1ae534be0001f52c87" data-wf-site="59fd0c1ae534be0001f52c86">
<head>
  <meta charset="utf-8">
    
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  
  <!-- bootstrap pagination -->
  <link href="bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css"/>
  
  <!-- chart -->
  <script src="js/jquery-1.10.1.min.js"></script>
  <script src="js/highcharts.js"></script>
  
  <!-- css table -->
  <link rel="stylesheet" type="text/css" href="css/css_table.css">
  
  <!-- css popup -->
  <!-- <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script> -->
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

  <link href="css/normalize.css" rel="stylesheet" type="text/css">
  <link href="css/webflow.css" rel="stylesheet" type="text/css">
  <link href="css/digitaltouchpoint.webflow.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic","Lato:100,100italic,300,300italic,400,400italic,700,700italic,900,900italic","Changa One:400,400italic","Oswald:200,300,400,500,600,700","Merriweather:300,300italic,400,400italic,700,700italic,900,900italic","Open Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic","Droid Serif:400,400italic,700,700italic","Bitter:400,700,400italic","Exo:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic","Droid Sans:400,700","Inconsolata:400,700","PT Sans:400,400italic,700,700italic","Righteous:regular:latin-ext,latin","Berkshire Swash:regular:latin-ext,latin","Bilbo Swash Caps:regular","Damion:regular"]  }});</script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="images/coba-logo.png" rel="shortcut icon" type="image/x-icon">
  <link href="images/logo-telkom_1.png" rel="apple-touch-icon">
  <script type="text/javascript">(function(d, t, e, m){
    // Async Rating-Widget initialization.
    window.RW_Async_Init = function(){
        RW.init({
            huid: "380741",
            uid: "b343a723c0cff0c7a5e2735df7c0fde9",
            source: "website",
            options: {
                "advanced": {
                    "layout": {
                        "lineHeight": "24px"
                    },
                    "font": {
                        "size": "12px",
                        "type": "\"Comic Sans MS\""
                    }
                },
                "size": "large",
                "style": "oxygen1",
                "isDummy": false
            } 
        });
        RW.render();
    };
        // Append Rating-Widget JavaScript library.
    var rw, s = d.getElementsByTagName(e)[0], id = "rw-js",
        l = d.location, ck = "Y" + t.getFullYear() + 
        "M" + t.getMonth() + "D" + t.getDate(), p = l.protocol,
        f = ((l.search.indexOf("DBG=") > -1) ? "" : ".min"),
        a = ("https:" == p ? "secure." + m + "js/" : "js." + m);
    if (d.getElementById(id)) return;              
    rw = d.createElement(e);
    rw.id = id; rw.async = true; rw.type = "text/javascript";
    rw.src = p + "//" + a + "external" + f + ".js?ck=" + ck;
    s.parentNode.insertBefore(rw, s);
    }(document, new Date(), "script", "rating-widget.com/"));</script>
    
</head>