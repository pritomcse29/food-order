<?php
 include('../config/constants.php'); 
  include('login-check.php');
 ?>



<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Order Website - Home page</title>
    

    
    <!--swiper js-->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    
    <!--Tailwind-->
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!--font awesome-->
    <script src="https://kit.fontawesome.com/52f1852c13.js" crossorigin="anonymous"></script>
    <title>Food bank</title>
    <!--google font-->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
    </style>
    <!--google font awesome-->
    <script src="https://kit.fontawesome.com/52f1852c13.js" crossorigin="anonymous"></script>
    <!-- Start of Async Drift Code -->
    <script>
        "use strict";

        !function () {
            var t = window.driftt = window.drift = window.driftt || [];
            if (!t.init) {
                if (t.invoked) return void (window.console && console.error && console.error("Drift snippet included twice."));
                t.invoked = !0, t.methods = ["identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on"],
                    t.factory = function (e) {
                        return function () {
                            var n = Array.prototype.slice.call(arguments);
                            return n.unshift(e), t.push(n), t;
                        };
                    }, t.methods.forEach(function (e) {
                        t[e] = t.factory(e);
                    }), t.load = function (t) {
                        var e = 3e5, n = Math.ceil(new Date() / e) * e, o = document.createElement("script");
                        o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + n + "/" + t + ".js";
                        var i = document.getElementsByTagName("script")[0];
                        i.parentNode.insertBefore(o, i);
                    };
            }
        }();
        drift.SNIPPET_VERSION = '0.3.1';
        drift.load('dtrwbxdbew2p');
    </script>
    <!-- End of Async Drift Code -->



    <link rel="stylesheet" href="../css/admin.css">
</head>
<body>
   
    <!--menu section starts-->
<div class="menu text-center">
    <div class="wrapper">
  <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="manage-admin.php">Admin</a></li>
      <li><a href="manage-category.php">Category</a></li>
      <li><a href="manage-food.php">Food</a></li>
      <li><a href="manage-order.php">Order</a></li>
      <li><a href="logout.php">Logout</a></li>
  </ul>
    </div>
  
</div>
    <!--menu section ends-->