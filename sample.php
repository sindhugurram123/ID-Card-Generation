<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>My Cool Form</title>

    <style>
    body{
      background: #555;
    }

    form{
      display: block;
      position: relative;
      width: 400px;
      height: 400px;
      background: #fff;
      margin: 50px auto;
      padding: 30px;
    }

    label{
      display: block;
      position: relative;
      top: -20px;
      left: 0px;
      color: #999;
      font-family: 'Helvetica', sans-serif;
      font-size: 16px;
      z-index: 1;
      transition: all 0.3s ease-out;
    }

    input{
      display: block;
      position: relative;
      background: none;
      border: none;
      border-bottom: 1px solid #ddd;
      width: 100%;
      font-family: 'Helvetica', sans-serif;
      font-weight: bold;
      font-size: 16px;
      z-index: 2;
    }

    
input:focus, input:valid{
      outline: none;
      border-bottom: 1px solid #00aced;
    }


    input:focus + label, input:valid + label{
      top: -40px;
      font-size: 11px;
      color: #00aced;
    }


    .divider{
      position: relative;
      height: 30px;
      width: auto;
      background: none;
    }
    </style>
  </head>





  <body>
    <form>
      <input type="text" name="yourname" required autocomplete = "off" />
      <label for="yourname">Your Name</label>

      <div class='divider'></div>

      <input type="text" name="yoursite" required autocomplete = "off" />
      <label for="yoursite">Your Website</label>
    </form>
  </body>
</html>﻿