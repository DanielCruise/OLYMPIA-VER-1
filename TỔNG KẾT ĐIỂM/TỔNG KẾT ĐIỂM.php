<!DOCTYPE html>
<html>
<head>
    <title>TỔNG KẾT ĐIỂM</title>
    <meta charset="utf-8"/>
    <script src="jquery-3.2.1.min.js"></script>
    <style>
        body {
            background-image: url("ResultShowing.png");
            background-size: cover;
        }

        #video {
            position: fixed;
            right: 0;
            bottom: 0;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            z-index: -100;
        }

        #can1 {
            position: fixed;
            font-family: Arial;
            font-weight: bold;
            height: 100px;
            width: 655px;
            color: white;
            margin-top: 650px;
            margin-left: 300px;
            font-size: 50px;
            justify-content: center;
            display: flex;
            align-items: center;
        }

        #name1, #name2, #name3, #name4 {
            position: fixed;
            font-family: Arial;
            font-weight: bold;
            height: 51px;
            width: 350px;
            color: black;
            margin-top: 290px;
            margin-left: 875px;
            font-size: 30px;
            justify-content: center;
            display: flex;
            align-items: center;
        }

        #name2 {
            margin-top: 367px;
        }

        #name3 {
            margin-top: 443px;
        }

        #name4 {
            margin-top: 518px;
        }

        #pt1 {
            position: fixed;
            font-family: Arial;
            font-weight: bold;
            color: white;
            align-items: center;
            display: flex;
            color: white;
            margin-top: 580px;
            margin-left: 190px;
            height: 100px;
            width: 160px;
            font-size: 70px;
            justify-content: center;
        }

        .Menu {
            position: relative;
            color: white;
            font-family: Arial;
            font-weight: bold;
            display: inline-block;
            float: right;
            width: 30px;
            z-index: 50;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            min-width: 250px;
            right: 0;
            text-align: right;
            border: 1px solid yellow;
            box-shadow: black 3px 3px;
            background-color: gray;
            cursor: pointer;
        }

        .Menu:hover .dropdown-content {
            display: block;
        }

        .dropdown-content p {
            margin: 0;
            border: 1px solid black;
            padding: 10px 10px;
            height: 30px;
            box-sizing: border-box;
        }

        .dropdown-content p:hover {
            display: block;
            color: white;
            font-size: 15px;
            background-color: black;
            opacity: 1;
        }
    </style>
</head>
<body>
<div class="Menu">
    <p class="dropdown">=</p>
    <div class="dropdown-content">
        <p onclick="resultShowing()">KẾT QUẢ HIỆN TẠI</p>
        <p><a href="/OLYMPIA/KHỞI ĐỘNG/KHỞI ĐỘNG.php" style="color: white; text-decoration: none">KHỞI ĐỘNG</a></p>
        <p><a href="/OLYMPIA/VƯỢT CHƯỚNG NGẠI VẬT/VCNV.php" style="color: white; text-decoration: none">VƯỢT CHƯỚNG NGẠI VẬT</a></p>
        <p><a href="/OLYMPIA/TĂNG TỐC/TĂNG TỐC.php" style="color: white; text-decoration: none">TĂNG TỐC</a></p>
        <p><a href="/OLYMPIA/VỀ ĐÍCH/VỀ ĐÍCH.php" style="color: white; text-decoration: none">VỀ ĐÍCH</a></p>
    </div>
</div>
<video id="video">
    <source src="ResultShowing.mp4" type="video/mp4">
</video>
<section id="info">
<p id="can1" style="visibility: hidden"></p>
<section class="minor-can">
    <p class="minorName" id="name1" style="visibility: hidden"></p>
    <p class="minorName" id="name2" style="visibility: hidden"></p>
    <p class="minorName" id="name3" style="visibility: hidden"></p>
    <p class="minorName" id="name4" style="visibility: hidden"></p>
</section>
<p id="pt1" style="visibility: hidden"></p>
</section>
<?php
$servername = 'localhost';
$username = 'root';
$password = 'danielcruise';
$dbName = 'candidate';
$i = 0;

// create connection
$nameAndPointArray = array();
$nameArray = array("", "", "", "");
$pointArray = array(0, 0, 0, 0);
arsort($nameAndPointArray);
$conn = new mysqli($servername, $username, $password, $dbName);

// get candidates' name and points from database
for ($i = 1; $i < 5; $i++) {
    $sql = "SELECT * FROM candidate where candInd = '$i'";
    $result = $conn->query($sql);
    $row = mysqli_fetch_array($result);
    $nameArray[$i - 1] = $row["nameCan"];
    $pointArray[$i - 1] = (int)$row["point"];

}

// create associative array
for ($i = 0; $i < 4; $i++) {
    $nameAndPointArray[$nameArray[$i]] = (int)$pointArray[$i];
}

arsort($nameAndPointArray); // shuffle

$j = 0;
foreach ($nameAndPointArray as $x=>$x_val) {
    $nameArray[$j] = $x;
    $pointArray[$j] = $x_val;
    $j++;
}

$conn->close();
?>
</body>
<script>
    var candidate = <?php echo json_encode($nameArray)?>;
    var point = <?php echo json_encode($pointArray)?>;
    var nameTag = document.getElementsByClassName('minorName');
    var mainCan = document.getElementById('can1');
    var mainPoint = document.getElementById('pt1');
    for (var i = 0; i < 4; i++) {
        nameTag[i].innerHTML = candidate[i];
    }

    function resultShowing() {
        document.getElementById('video').play();
        pointOf(4);
        pointOf(3);
        pointOf(2);
        pointOf(1);
    }


    function pointOf(indCand) {
        if (indCand == 4) {
            setTimeout(function () {
                mainCan.innerHTML = candidate[indCand - 1];
                mainPoint.innerHTML = point[indCand - 1];
                mainCan.style.visibility = 'visible';
                mainPoint.style.visibility = 'visible';
                nameTag[indCand - 1].style.visibility = 'visible';
            }, 2200);
        }

        if (indCand == 3) {
            setTimeout(function () {
                mainCan.innerHTML = candidate[indCand - 1];
                mainPoint.innerHTML = point[indCand - 1];
                mainCan.style.visibility = 'visible';
                mainPoint.style.visibility = 'visible';
            }, 4200);
            setTimeout(function () {
                nameTag[indCand - 1].style.visibility = 'visible';
            }, 5100);
        }

        if (indCand == 2) {
            setTimeout(function () {
                mainCan.innerHTML = candidate[indCand - 1];
                mainPoint.innerHTML = point[indCand - 1];
                mainCan.style.visibility = 'visible';
                mainPoint.style.visibility = 'visible';
            }, 8000);
            setTimeout(function () {
                nameTag[indCand - 1].style.visibility = 'visible';
            }, 8800);
        }

        if (indCand == 1) {
            setTimeout(function () {
                mainCan.innerHTML = candidate[indCand - 1];
                mainPoint.innerHTML = point[indCand - 1];
                mainCan.style.visibility = 'visible';
                mainPoint.style.visibility = 'visible';
            }, 11000);
            setTimeout(function () {
                nameTag[indCand - 1].style.visibility = 'visible';
            }, 11800);
        }
    }

    function hideInfo() {
        $("#info").hide();
        document.getElementById('video').currentTime = 0;
    }
</script>
</html>