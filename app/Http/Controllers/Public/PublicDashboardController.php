<!DOCTYPE html>
<html lang="hi">
<head>
<meta charset="UTF-8">
<title>Manavta Parivar</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
body{
    margin:0;
    font-family:Arial, sans-serif;
}

/* TOP GREEN BAR */
.top-bar{
    background:#1e7d3b;
    color:#fff;
    font-size:13px;
    padding:6px 15px;
    display:flex;
    justify-content:space-between;
}

/* HEADER */
.header{
    background:#f4f4f4;
    padding:12px 15px;
    display:flex;
    align-items:center;
    justify-content:space-between;
}

.logo{
    font-weight:bold;
}

.center-title{
    text-align:center;
}
.center-title h1{
    margin:0;
    font-size:26px;
    color:#b52a2a;
}
.center-title p{
    margin:2px 0;
    font-size:13px;
}

.auth a{
    display:block;
    text-decoration:none;
    color:#fff;
    padding:7px 18px;
    border-radius:20px;
    margin-bottom:6px;
    font-size:14px;
}
.login{background:#2980b9;}
.register{background:#c0392b;}

/* NAVBAR */
.navbar{
    background:#c0392b;
}
.navbar ul{
    list-style:none;
    margin:0;
    padding:0;
    display:flex;
    justify-content:center;
}
.navbar ul li{
    position:relative;
}
.navbar ul li a{
    color:#fff;
    text-decoration:none;
    padding:12px 15px;
    display:block;
    font-size:14px;
}
.navbar ul li:hover{
    background:#a93226;
}

/* DROPDOWN */
.navbar ul li ul{
    display:none;
    position:absolute;
    top:100%;
    left:0;
    background:#c0392b;
    min-width:240px;
    z-index:9999;
}
.navbar ul li:hover ul{
    display:block;
}
.navbar ul li ul li a{
    padding:10px 14px;
    font-size:13px;
}

/* FOOTER */
footer{
    margin-top:40px;
    background:#333;
    color:#fff;
    text-align:center;
    padding:10px;
    font-size:13px;
}
</style>
</head>

<body>

<div class="top-bar">
    <div>📞 +91 63888 90090</div>
    <div>✉️ manavtafamily@gmail.com</div>
</div>

<div class="header">
    <div class="logo">LOGO</div>

    <div class="center-title">
        <h1>मानवता परिवार</h1>
        <p>(Reg No : U88100 UP2024 NPL 208944)</p>
        <p>आपका सहयोग, परिवार का सहारा</p>
    </div>

    <div class="auth">
        <a href="#" class="login">Login</a>
        <a href="#" class="register">Registration</a>
    </div>
</div>

<div class="navbar">
<ul>
    <li><a href="#">Home</a></li>

    <li>
        <a href="#">About ▾</a>
        <ul>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Our Team</a></li>
            <li><a href="#">Team Member</a></li>
            <li><a href="#">Social Media</a></li>
        </ul>
    </li>

    <li><a href="#">Members List</a></li>

    <li>
        <a href="#">Sahyog List ▾</a>
        <ul>
            <li><a href="#">Death Nominee Sahyog List</a></li>
            <li><a href="#">Accidental Sahyog List</a></li>
        </ul>
    </li>

    <li>
        <a href="#">Claim Registration ▾</a>
        <ul>
            <li><a href="#">Death Nominee Sahyog Claim</a></li>
            <li><a href="#">Accidental Claim</a></li>
            <li><a href="#">Critical 100% Disability Claim</a></li>
            <li><a href="#">Critical Illness & Accident Claim</a></li>
        </ul>
    </li>

    <li><a href="#">Revenue & Expenses</a></li>
    <li><a href="#">Complaint</a></li>

    <li>
        <a href="#">Gallery ▾</a>
        <ul>
            <li><a href="#">Photo Gallery</a></li>
            <li><a href="#">News Gallery</a></li>
        </ul>
    </li>

    <li><a href="#">Contact</a></li>
</ul>
</div>

<footer>
© 2025 Manavta Family Foundation
</footer>

</body>
</html>
