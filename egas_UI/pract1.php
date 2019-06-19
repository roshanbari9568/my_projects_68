<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,height=device-height,initial-scale=1">
<title>untitled document</title>
<link rel="stylesheet" href="screen.css" media="screen">
<style media="screen">
body {
    background-color: #000;
    font: 1em/1.62em verdana, arial, helvetica, sans-serif;
 }
ul {
    padding: 0;
    margin: 0;
    list-style: none;
    text-align: center;
 }
ul li {
    display: inline-block;
    margin:0 0.25em;
 }
ul a {
    display: block;
    padding: 0.75em 1em;
    color: #fff;
    text-decoration: none;
    text-transform: uppercase;
 }
ul li:nth-child(1) a:focus {
    background-color: #fed136;
    color: #000;
 }
ul li:nth-child(2) a:focus {
    background-color: #136fed;
    color: #fff;
 }
ul li:nth-child(3) a:focus  {
    background-color: #13fed6;
    color: #033;
 }
ul li:nth-child(4) a:focus  {
    background-color: #fe136d;
    color: #fff;
 }
ul li:nth-child(5) a:focus  {
    background-color: #f136ed;
    color: #101;
 }
/************** for testing ********************/
#top {
    display: block;
    margin-top: 50em;
    color: #fff;
 }
/***********************************************/
</style>
</head>
<body> 
 <span id="page-top"></span>
 <ul>
  <li><a href="#services">Services</a></li>
  <li><a href="#portfolio">Portfolio</a></li>
  <li><a href="#about">About</a></li>
  <li><a href="#team">Team</a></li>
  <li><a href="#contact">Contact</a></li>
 </ul>
<!--************ for testing ************-->
 <a id="top" href="#page-top">page top</a>
<!--*************************************-->
</body>
</html>