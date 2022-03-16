<html>

<head>

<style>
.myDiv{
    border : 10px;
    background-color : #95D9D2;
    opacity: 0.7;
}
</style>

<meta name="keywords" content="墾丁旅遊, 墾丁, Visit Kenting, Kenting">
<link rel = "icon" href = "/img/beachIcon.webp" type = "image/x-icon"/>
<title>墾丁三日遊 Registration Form</title>
<font color = "#77DFD3" size = "5"><center><h1>墾丁三日遊</h1></center></font>

</head>

<body>

<?php
    echo "<body background = '/img/minimalistsea.jpg'>";
?>

<ol>
<font face = "Helvetica" size = 5 color = "#ffb948"><u><h4><li>Itenerary</h4></u></font>

<p><font size = 4 color = "#FFE5B4" face = "Verdana">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href = "https://en.wikipedia.org/wiki/Kenting_National_Park" target = "new"><b>Kenting</b></a> 
is a wonderful place that located at the most southern part of Taiwan. It's famous for its beach, such as <i>Kenting Beach, White Sand Bay</i>, etc. 
But, besides of that, there are so much more amazing places worth to visit in Kenting, like <i>Eluanbi Park, Fengchuisha, Longpan Park</i> and so many more! 
And, happy to tell you guys that we will hold a 3-days trip to Kenting!!!</font></p><br/>

<div class = "myDiv">
    <font size = 3 color = "#000000" face = "Verdana">Here is the itenerary of our 3 days trip:<br/><br/>
   
   <ol>
   <li><b>1st Day : <font color = "080AA1"><i>Hello Marine!</i></font></b><br/>
   07:00 Gathering<br/>
   07:45 Set off<br/>
   09:30 Little Bali Rock<br/>
   12:00 Lunch<br/>
   13:00 Maobitou Park<br/>
   14:00 Gathering<br/>
   15:30 White Sand Bay<br/>
   17:00 Kentington Resort<br/>
   18:00 Dinner<br/>
   19:00 Mini game<br/>
   20:00 End of First Day<br/><br/>
   <li><b>2nd Day : <font color = "080AA1"><i>Southern Taiwan</i></font></b><br/>
   08:00 Get up<br/>
   09:00 Breakfast<br/>
   09:30 Gathering<br/>
   09:45 Set off<br/>
   10:15 Longpan Park<br/>
   11:00 Fengchuisha<br/>
   12:30 Lunch<br/>
   14:00 Southern Most Point of Taiwan<br/>
   15:00 Eluanbi Lighthouse<br/>
   17:00 Chuan Fan Rock<br/>
   18:00 Dinner<br/>
   19:00 Kenting Night Market<br/>
   20:00 End of Second Day<br/><br/>
   <li><b>3nd Day : <font color = "080AA1"><i>How Dare Are You?</i></font></b><br/>
   08:00 Get up<br/>
   09:00 Breakfast<br/>
   09:30 Gathering<br/>
   09:45 Mini game<br/>
   12:00 Lunch<br/>
   13:00 National Museum of Marine Biology and Aquarium<br/>
   16:50 Gathering<br/>
   17:00 Back to school<br/>
   18:30 Arrived<br/>
   </ol>
</font>
</div>

<font face = "Helvetica" size = 5 color = "#ffb948"><u><h4><li>Registration Form</h4></u></font>

<div class = "myDiv">
<form action = "index.php" onsubmit="alert('報名資料已成功送出！'); return false">
    <ol>
    <font size = 3 color = "#000000" face = "Verdana">
    <li> <u>Name:</u>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type = "text" name = lastName placeholder = "First Name" style = "width : 80"required>&nbsp&nbsp<input type = "text" name = "lastName" placeholder = "Last Name" style = "width : 80"><br/><br/>
    <li> <u>Birthday:</u>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type = "date" name = birth required><br/><br/>
    <li> <u>Gender:</u>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type = "radio" name = gender checked> Male <input type = "radio" name = gender > Female<br/><br/>
    <li> <u>Email:</u>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type = "email" name = email required style = "width : 200"><br/><br/>
    <li> <u>Phone Number:</u>&nbsp&nbsp&nbsp&nbsp <input type="tel" pattern="[0-9]{4}" placeholder="XXXX" required style = "width : 45">-<input type="tel" pattern="[0-9]{3}" placeholder="XXX" required style = "width : 35">-<input type="tel" pattern="[0-9]{3}" placeholder="XXX" required style = "width : 35"><br/><br/>
    <li> <u>Food Preference:</u>&nbsp&nbsp<input type="checkbox" name = Vegetarian>Vegetarian&nbsp&nbsp<input type="checkbox" name = Pork>No Pork&nbsp&nbsp<input type="checkbox" name = Beef>No Beef&nbsp&nbsp<input type="checkbox" name = Seafood>No Seafood&nbsp&nbsp<input type="checkbox" name = none checked>None of the Above<br/><br/>
    <li> <u>T-Shirt Size:</u>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <select required>
            <option>XS</option>
            <option>S</option>
            <option>M</option>
            <option>L</option>
            <option>XL</option>
        </select><br/>
        <a href = "tshirt.php" style = "font-size : 15" target = "new">Size Chart</a></br></br>

        <li> <u>T-Shirt Color:</u>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <select required>
            <option>White</option>
            <option>Navy</option>
            <option>Khaki</option>
            <option>Black</option>
            <option>Maroon</option>
        </select><br/><br/>
        <li><u>Ticket(s) for:</u>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type = "number" min = "1" max = "20" name = ticket required><br/><br/><br/>

        <center><input type = "submit" name = "submit" value = "SEND!" style = "font-face: 'Impact'; font-size : 20px; color : teal; height: 30px; width: 25%; background-color: ##58436b; border: 3pt ridge lightgrey"></center>
        
</font>
    </ol>
</div>
</ol>
</body>

</html>