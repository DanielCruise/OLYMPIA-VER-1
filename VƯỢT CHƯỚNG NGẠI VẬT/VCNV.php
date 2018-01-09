<!DOCTYPE html>
<html>
<head>
    <title>VƯỢT CHƯỚNG NGẠI VẬT</title>
    <meta charset="utf-8"/>
    <style>
        body {
            text-align: center;
            font-family: Arial;
            background-image: url("background.png");
            background-size: cover;
        }

        #SectionName {
            display: block;
            position: fixed;
            margin-top: 20%;
            text-align: center;
            width: 100%;
            height: auto;
            font-size: 90px;
            font-weight: bold;
            color: white;
            font-size: 90px;
            z-index: 50;
            cursor: pointer;
        }

        #mainImg {
            position: fixed;
            z-index: 49;
            height: 490px;
            width: 780px;
            margin-left: -380px;
            margin-top: 20px;
        }

        #Pie1, #Pie2, #Pie3, #Pie4, #PieCen {
            position: fixed;
            height: 250px;
            width: 400px;
            margin-left: -190px;
            margin-top: 140px;
            z-index: 200;
            cursor: pointer;
        }

        #Pie1 {
            margin-top: 20px;
            margin-left: -380px;
        }

        #Pie4 {
            margin-top: 20px;
            margin-left: 0px;
        }

        #Pie2 {
            margin-top: 260px;
            margin-left: -380px;
        }

        #Pie3 {
            margin-top: 260px;
            margin-left: 0px;
        }

        .row {
            display: block;
            position: fixed;
            font-weight: bold;
            margin-left: 1280px;
            margin-top: 70px;
        }

        .rowInd {
            width: 50px;
            background-color: black;
            color: white;
            border-radius: 10px;
            padding: 15px 0;
            margin-top: 40px;
            font-size: 20px;
            cursor: pointer;
        }

        .firstRow, .secondRow, .thirdRow, .fourthRow {
            position: fixed;
            margin-left: 20px;
            text-align: center;
            font-size: 35px;
            color: white;
            font-weight: bold;
        }

        .row1, .row2, .row3, .row4 {
            box-sizing: border-box;
            border: 3px black solid;
            justify-content: center;
            display: flex;
            align-items: center;
            background-color: white;
            float: left;
            width: 50px;
            height: 50px;
            margin-left: 4px;
            border-radius: 30px;
            margin-top: 110px;

        }

        .row2 {
            margin-top: 205px;

        }

        .row3 {
            margin-top: 295px;

        }

        .row4 {
            margin-top: 390px;
        }

        #fifteenSec, #quesShow, #ShowRowAnsVideo {
            /*  making the video fullscreen  */
            position: fixed;
            right: 0;
            bottom: 0;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            z-index: -100;

        }

        #fifteenSec {
            cursor: pointer;
        }

        #ques {
            position: fixed;
            margin-left: 90px;
            margin-top: 540px;
            font-weight: bold;
            color: white;
            font-size: 25px;
            width: 916px;
            height: 156px;
            text-align: left;
            padding: 7px 7px;
            text-shadow: 2px 2px black;
            cursor: pointer;
        }

        #ObstacVideo {
            /*  making the video fullscreen  */
            position: fixed;
            right: 0;
            bottom: 0;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            z-index: 100;
        }

        #pointCan {
            margin-left: 25px;
            z-index: 1000;
        }

        .Menu {
            position: relative;
            color: white;
            font-family: Arial;
            font-weight: bold;
            display: inline-block;
            float: right;
            text-align: right;
            z-index: 50;
        }

        .dropdown-content {
            margin-top: -10px;
            display: none;
            position: absolute;
            width: 250px;
            margin-left: -240px;
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
        }

        .advenMenu {
            position: relative;
            color: white;
            font-family: Arial;
            font-weight: bold;
            display: inline-block;
            float: left;
            text-align: left;
            z-index: 50;
        }

        .advenDropdown-content {

            margin-top: -10px;
            display: none;
            position: absolute;
            width: 250px;
            margin-left: 0px;
            box-shadow: black 3px 3px;
            background-color: gray;
            cursor: pointer;
        }

        .advenMenu:hover .advenDropdown-content {
            display: block;
        }

        .advenDropdown-content p {
            margin: 0;
            border: 1px solid black;
            padding: 10px 10px;
            height: 30px;
            box-sizing: border-box;
        }

        .advenDropdown-content p:hover {
            display: block;
            color: white;
            font-size: 15px;
            background-color: black;
        }

        .name {
            position: fixed;
            display: flex;
            margin-top: 160px;
            height: 100px;
            width: 1200px;
        }

        .name p {
            margin-left: 100px;
            background-color: black;
            border: 2px solid white;
            color: white;
            font-weight: bold;
            font-size: 20px;
            justify-content: center;
            display: flex;
            align-items: center;
            width: 200px;
            height: 50px;

        }

        .score {
            position: fixed;
            display: flex;
            margin-top: 170px;
            height: 100px;
            width: 1200px;
        }

        .score p {
            background-color: black;
            border: 2px solid white;
            color: white;
            justify-content: center;
            display: flex;
            align-items: center;
            margin-left: 100px;
            width: 200px;
            height: 150px;
            font-size: 80px;
            font-weight: bold;
        }

        #topCand {
            margin-top: -20px;
            margin-left: -50px;
            justify-content: center;
            display: flex;
            align-items: center;
            position: fixed;
            font-family: Arial;
            color: white;
            font-weight: bold;
            width: 1300px;
        }

        #topCand p {
            border-box;
            box-sizing;
            width: 250px;
            padding: 10px 20px;
            margin-left: 100px;
            background-color: blue;
            border: 2px solid white;
            font-size: 20px;
        }

        #topPoint {
            margin-top: -40px;
            margin-left: -50px;
            justify-content: center;
            display: flex;
            align-items: center;
            position: fixed;
            font-family: Arial;
            color: white;
            font-weight: bold;
            width: 1300px;

        }

        #topPoint p {
            width: 250px;
            margin-left: 100px;
            background-color: black;
            border: 2px solid white;
            font-size: 100px;
        }

        .addPointCan1, .addPointCan2, .addPointCan3, .addPointCan4 {
            display: flex;
            align-items: center;
            position: fixed;
            background-color: black;
            color: white;
            font-family: Arial;
            font-weight: bold;
            margin-top: 160px;
            margin-left: 100px;
            width: 200px;
            height: 20px;
            cursor: pointer;

        }

        .addPointCan1 p, .addPointCan2 p, .addPointCan3 p, .addPointCan4 p {
            width: 50px;
            border: 1px white solid;
            box-sizing: border-box;
            cursor: pointer;
        }

        .addPointCan2 {
            margin-left: 400px;
        }

        .addPointCan3 {
            margin-left: 700px;
        }

        .addPointCan4 {
            margin-left: 1000px;
        }

        .adventurousCan1, .adventurousCan2, .adventurousCan3, .adventurousCan4 {
            display: flex;
            align-items: center;
            position: fixed;
            background-color: black;
            position: fixed;
            color: white;
            font-family: Arial;
            font-weight: bold;
            margin-top: 140px;
            margin-left: 100px;
            width: 200px;
            height: 20px;
        }

        .adventurousCan1 p, .adventurousCan2 p, .adventurousCan3 p, .adventurousCan4 p {
            width: 100px;
            border: 1px white solid;
            box-sizing: border-box;
        }

        .adventurousCan2 {
            margin-left: 400px;
        }

        .adventurousCan3 {
            margin-left: 700px;
        }

        .adventurousCan4 {
            margin-left: 1000px;
        }

        #minorSectionName {
            position: fixed;
            font-family: Cambria;
            font-weight: bold;
            font-size: 95px;
            color: white;
            margin-left: 85px;
            margin-top: 550px;
        }

        #undo1, #undo2, #undo3, #undo4 {
            display: flex;
            position: fixed;
            font-weight: bold;
            margin-top: 380px;
            margin-left: 100px;
            width: 200px;

        }

        #undo1 p, #undo2 p, #undo3 p, #undo4 p {
            width: 100px;
            height: 150px;
        }

        #undo2 {
            margin-left: 400px;
        }

        #undo3 {
            margin-left: 700px;
        }

        #undo4 {
            margin-left: 1000px;
        }

        #advenImg {
            position: fixed;
            right: 0;
            bottom: 0;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
        }

        #advenSection {
            z-index: 90;
        }

        #onObstacleAnswer {
            position: fixed;
            display: flex;
            color: yellow;
            width: 808px;
            height: 30px;
            margin-top: 470px;
            margin-left: 87px;
            text-align: left;
            z-index: 250;
        }

        .obstacAnswer {
            width: 200px;
            height: 45px;
            font-size: 20px;
            border: 1px yellow solid;
            font-weight: bold;
            background-color: red;
            display: flex;
            justify-content: flex-start;
            align-items: center;
            margin-left: 3px;
        }

        #candidateRowAns {
            position: fixed;
            font-size: 23px;
            text-shadow: 2px 2px 3px black;
        }

        .candName {
            color: yellow;
            font-weight: bold;

        }

        .candAns {
            color: white;
            font-weight: bold;
        }

        #ansCan1, #ansCan3 {
            position: fixed;
            right: 715px;
            top: 45px;
            line-height: 1.6;
            text-align: right;
        }

        #ansCan3 {
            top: 363px;
        }

        #ansCan2, #ansCan4 {
            position: fixed;
            left: 715px;
            top: 205px;
            line-height: 1.6;
            text-align: left;
        }

        #ansCan3 {
            top: 363px;
        }

        #ansCan4 {
            top: 525px;
        }

        #congratzAudioPlay {
            position: fixed;
            left: 0;
            bottom: -20px;
            height: 220px;
            width: 70px;
            background-color: red;
            z-index: 3000;
            opacity: 0;
        }

        #candOnAdven {
            position: fixed;
            width: 200px;
            height: 45px;
            font-size: 20px;
            border: 1px yellow solid;
            font-weight: bold;
            background-color: blue;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            margin-left: 30px;
            margin-top: 500px;
        }
    </style>
    <script src="jquery-3.2.1.min.js"></script>
</head>
<body>
<video id="ObstacVideo" autoplay>
    <source src="ObstacVideo.mp4" type="video/mp4">
</video>

<p id="SectionName" style="font-family: Cambria">VƯỢT CHƯỚNG NGẠI VẬT</p>
<div id="onObstacleAnswer">
    <p class="obstacAnswer" id="name1Ans"></p>
    <p class="obstacAnswer" id="name2Ans"></p>
    <p class="obstacAnswer" id="name3Ans"></p>
    <p class="obstacAnswer" id="name4Ans"></p>
</div>
<div class="Menu">
    <p class="dropdown">=</p>
    <div class="dropdown-content">
        <p onclick="onAdvenSection()">Ô MẠO HIỂM</p>
        <p onclick="showRowAnswer()">CÂU TRẢ LỜI HÀNG NGANG</p>
        <p onclick="showAllRow()">HIỆN TẤT CẢ HÀNG NGANG</p>
        <p onclick="showAllImage()">HIỆN TOÀN BỘ HÌNH ẢNH</p>
        <p onclick="sectionShowing('#pointCan', '')">ĐIỂM THÍ SINH</p>
        <p onclick="centerPiece()">Ô TRUNG TÂM</p>
        <p onclick="sectionShowing('#mainImg','#ClueImg')">HÌNH ẢNH GỢI Ý</p>
        <p onclick="sectionShowing('#rows', '')">HÀNG NGANG</p>
        <p onclick="final()">15 GIÂY CUỐI CÙNG</p>
        <p onclick="resetObstacleAnswering()">ĐẶT LẠI TRẢ LỜI CNV</p>
        <p onclick="updatePoint()">CẬP NHẬT ĐIỂM</p>
        <p><a href="/OLYMPIA/TỔNG KẾT ĐIỂM/TỔNG KẾT ĐIỂM.php" style="text-decoration: none; color: white">TỔNG KẾT
                ĐIỂM</a></p>
    </div>
</div>
<p id="congratzAudioPlay" onclick="document.getElementById('rightObs').play()"></p>
<div id="advenSection">
    <img id="advenImg" src="AdvenPic.png">
    <div class="advenMenu">
        <p class="advenDropdown" style="color: black">=</p>
        <div class="advenDropdown-content">
            <p onclick="document.getElementById('fiveSecAdven').play()">5 GIÂY QUYẾT ĐỊNH</p>
            <p onclick="document.getElementById('fifteenSecAdven').play()">15 GIÂY CHO CÂU HỎI GỢI Ý</p>
            <p onclick="document.getElementById('thirtySecAdven').play()">30 GIÂY TÌM CNV</p>
            <p onclick="exitAdvenSection()">THOÁT</p>
        </div>
    </div>
    <p id="candOnAdven"></p>
</div>
<div id="candidateRowAns">
    <div id="wholeAns">
        <div id="ansCan1">
            <p class="candName" id="name1"></p>
            <p class="candAns" id="ans1"></p>
        </div>
        <div id="ansCan2">
            <p class="candName" id="name2"></p>
            <p class="candAns" id="ans2"></p>
        </div>
        <div id="ansCan3">
            <p class="candName" id="name3"></p>
            <p class="candAns" id="ans3"></p>
        </div>
        <div id="ansCan4">
            <p class="candName" id="name4"></p>
            <p class="candAns" id="ans4"></p>
        </div>
    </div>
</div>
<section id="pointTop">
    <div id="topCand">
        <p class="minorCand"></p>
        <p class="minorCand"></p>
        <p class="minorCand"></p>
        <p class="minorCand"></p>
    </div>
    <div id="topPoint">
        <p class="minorPoint"></p>
        <p class="minorPoint"></p>
        <p class="minorPoint"></p>
        <p class="minorPoint"></p>
</section>
<section id="pointCan">
    <section class="name">
        <p class="candi"></p>
        <p class="candi"></p>
        <p class="candi"></p>
        <p class="candi"></p>
    </section>
    <div class="score">
        <p class="pt" onclick="addPts(1, 10)"></p>
        <p class="pt" onclick="addPts(2, 10)"></p>
        <p class="pt" onclick="addPts(3, 10)"></p>
        <p class="pt" onclick="addPts(4, 10)"></p>
    </div>
    <div class="addPointCan1">
        <p onclick="addPts(1, 80)">80</p>
        <p onclick="addPts(1, 60)">60</p>
        <p onclick="addPts(1, 40)">40</p>
        <p onclick="addPts(1, 20)">20</p>
    </div>
    <div class="addPointCan2">
        <p onclick="addPts(2, 80)">80</p>
        <p onclick="addPts(2, 60)">60</p>
        <p onclick="addPts(2, 40)">40</p>
        <p onclick="addPts(2, 20)">20</p>
    </div>
    <div class="addPointCan3">
        <p onclick="addPts(3, 80)">80</p>
        <p onclick="addPts(3, 60)">60</p>
        <p onclick="addPts(3, 40)">40</p>
        <p onclick="addPts(3, 20)">20</p>
    </div>
    <div class="addPointCan4">
        <p onclick="addPts(4, 80)">80</p>
        <p onclick="addPts(4, 60)">60</p>
        <p onclick="addPts(4, 40)">40</p>
        <p onclick="addPts(4, 20)">20</p>
    </div>
    <div class="adventurousCan1">
        <p onclick="halfPts(1)">1/2</p>
        <p onclick="addPts(1, 120)">120</p>
    </div>
    <div class="adventurousCan2">
        <p onclick="halfPts(2)">1/2</p>
        <p onclick="addPts(2, 120)">120</p>
    </div>
    <div class="adventurousCan3">
        <p onclick="halfPts(3)">1/2</p>
        <p onclick="addPts(3, 120)">120</p>
    </div>
    <div class="adventurousCan4">
        <p onclick="halfPts(4)">1/2</p>
        <p onclick="addPts(4, 120)">120</p>
    </div>
    <div id="undo1">
        <p onclick="addPts(1, -10)"></p>
        <p onclick="doublePoint(1)"></p>
    </div>
    <div id="undo2">
        <p onclick="addPts(2, -10)"></p>
        <p onclick="doublePoint(2)"></p>
    </div>
    <div id="undo3">
        <p onclick="addPts(3, -10)"></p>
        <p onclick="doublePoint(3)"></p>
    </div>
    <div id="undo4">
        <p onclick="addPts(4, -10)"></p>
        <p onclick="doublePoint(4)"></p>
    </div>
    <p id="minorSectionName"><i>VƯỢT CHƯỚNG NGẠI VẬT</i></p>
</section>
<section id="rows">
    <p id="ques" style="visibility: hidden;" onclick="showAns()"></p>
    <section class="row">
        <p class="rowInd" id="num1" style="visibility: hidden;" onclick="rowOn(1)">1</p>
        <p class="rowInd" id="num2" style="visibility: hidden;" onclick="rowOn(2)">2</p>
        <p class="rowInd" id="num3" style="visibility: hidden;" onclick="rowOn(3)">3</p>
        <p class="rowInd" id="num4" style="visibility: hidden;" onclick="rowOn(4)">4</p>
    </section>
    <section class="firstRow">
        <p class="row1" style="visibility: hidden;"></p>
        <p class="row1" style="visibility: hidden;"></p>
        <p class="row1" style="visibility: hidden;"></p>
        <p class="row1" style="visibility: hidden;"></p>
        <p class="row1" style="visibility: hidden;"></p>
        <p class="row1" style="visibility: hidden;"></p>
        <p class="row1" style="visibility: hidden;"></p>
        <p class="row1" style="visibility: hidden;"></p>
        <p class="row1" style="visibility: hidden;"></p>
        <p class="row1" style="visibility: hidden;"></p>
        <p class="row1" style="visibility: hidden;"></p>
        <p class="row1" style="visibility: hidden;"></p>
        <p class="row1" style="visibility: hidden;"></p>
        <p class="row1" style="visibility: hidden;"></p>
        <p class="row1" style="visibility: hidden;"></p>
        <p class="row1" style="visibility: hidden;"></p>
        <p class="row1" style="visibility: hidden;"></p>
        <p class="row1" style="visibility: hidden;"></p>
        <p class="row1" style="visibility: hidden;"></p>
        <p class="row1" style="visibility: hidden;"></p>
        <p class="row1" style="visibility: hidden;"></p>
        <p class="row1" style="visibility: hidden;"></p>
        <p class="row1" style="visibility: hidden;"></p>
    </section>
    <section class="secondRow">
        <p class="row2" style="visibility: hidden;"></p>
        <p class="row2" style="visibility: hidden;"></p>
        <p class="row2" style="visibility: hidden;"></p>
        <p class="row2" style="visibility: hidden;"></p>
        <p class="row2" style="visibility: hidden;"></p>
        <p class="row2" style="visibility: hidden;"></p>
        <p class="row2" style="visibility: hidden;"></p>
        <p class="row2" style="visibility: hidden;"></p>
        <p class="row2" style="visibility: hidden;"></p>
        <p class="row2" style="visibility: hidden;"></p>
        <p class="row2" style="visibility: hidden;"></p>
        <p class="row2" style="visibility: hidden;"></p>
        <p class="row2" style="visibility: hidden;"></p>
        <p class="row2" style="visibility: hidden;"></p>
        <p class="row2" style="visibility: hidden;"></p>
        <p class="row2" style="visibility: hidden;"></p>
        <p class="row2" style="visibility: hidden;"></p>
        <p class="row2" style="visibility: hidden;"></p>
        <p class="row2" style="visibility: hidden;"></p>
        <p class="row2" style="visibility: hidden;"></p>
        <p class="row2" style="visibility: hidden;"></p>
        <p class="row2" style="visibility: hidden;"></p>
        <p class="row2" style="visibility: hidden;"></p>
    </section>

    <section class="thirdRow">
        <p class="row3" style="visibility: hidden;"></p>
        <p class="row3" style="visibility: hidden;"></p>
        <p class="row3" style="visibility: hidden;"></p>
        <p class="row3" style="visibility: hidden;"></p>
        <p class="row3" style="visibility: hidden;"></p>
        <p class="row3" style="visibility: hidden;"></p>
        <p class="row3" style="visibility: hidden;"></p>
        <p class="row3" style="visibility: hidden;"></p>
        <p class="row3" style="visibility: hidden;"></p>
        <p class="row3" style="visibility: hidden;"></p>
        <p class="row3" style="visibility: hidden;"></p>
        <p class="row3" style="visibility: hidden;"></p>
        <p class="row3" style="visibility: hidden;"></p>
        <p class="row3" style="visibility: hidden;"></p>
        <p class="row3" style="visibility: hidden;"></p>
        <p class="row3" style="visibility: hidden;"></p>
        <p class="row3" style="visibility: hidden;"></p>
        <p class="row3" style="visibility: hidden;"></p>
        <p class="row3" style="visibility: hidden;"></p>
        <p class="row3" style="visibility: hidden;"></p>
        <p class="row3" style="visibility: hidden;"></p>
        <p class="row3" style="visibility: hidden;"></p>
        <p class="row3" style="visibility: hidden;"></p>
    </section>

    <section class="fourthRow">
        <p class="row4" style="visibility: hidden;"></p>
        <p class="row4" style="visibility: hidden;"></p>
        <p class="row4" style="visibility: hidden;"></p>
        <p class="row4" style="visibility: hidden;"></p>
        <p class="row4" style="visibility: hidden;"></p>
        <p class="row4" style="visibility: hidden;"></p>
        <p class="row4" style="visibility: hidden;"></p>
        <p class="row4" style="visibility: hidden;"></p>
        <p class="row4" style="visibility: hidden;"></p>
        <p class="row4" style="visibility: hidden;"></p>
        <p class="row4" style="visibility: hidden;"></p>
        <p class="row4" style="visibility: hidden;"></p>
        <p class="row4" style="visibility: hidden;"></p>
        <p class="row4" style="visibility: hidden;"></p>
        <p class="row4" style="visibility: hidden;"></p>
        <p class="row4" style="visibility: hidden;"></p>
        <p class="row4" style="visibility: hidden;"></p>
        <p class="row4" style="visibility: hidden;"></p>
        <p class="row4" style="visibility: hidden;"></p>
        <p class="row4" style="visibility: hidden;"></p>
        <p class="row4" style="visibility: hidden;"></p>
        <p class="row4" style="visibility: hidden;"></p>
        <p class="row4" style="visibility: hidden;"></p>
    </section>
</section>
<section class="tempObsReference" style="position: fixed; display: none">
    <p class="referObs" id="referObs1"></p>
    <p class="referObs" id="referObs2"></p>
    <p class="referObs" id="referObs3"></p>
    <p class="referObs" id="referObs4"></p>
</section>
<section class="tempAdvenObsReference" style="position: fixed; display: none">
    <p class="referAdven" id="referAdven1"></p>
    <p class="referAdven" id="referAdven2"></p>
    <p class="referAdven" id="referAdven3"></p>
    <p class="referAdven" id="referAdven4"></p>
</section>
<section id="ClueImg">
    <img src="Pie1.png" class="Piece" id="Pie1" onclick="clearPiece(1)">
    <img src="Pie2.png" class="Piece" id="Pie2" onclick="clearPiece(2)">
    <img src="Pie3.png" class="Piece" id="Pie3" onclick="clearPiece(3)">
    <img src="Pie4.png" class="Piece" id="Pie4" onclick="clearPiece(4)">
    <img src="PieCen.png" class="Piece" id="PieCen" onclick="clearPiece(5)">
</section>
<img id="mainImg" src="">
<video id="fifteenSec" style="visibility: hidden;" onclick="timerStart()">
    <source src="obstac.mp4" type="video/mp4">
</video>
<video id="quesShow" style="display: none;">
    <source src="QuesShow.mp4" type="video/mp4">
</video>
<video id="ShowRowAnsVideo">
    <source src="ShowRowAns.mp4" type="video/mp4">
</video>
<audio id="ObstacleStart">
    <source src="ObstacleStart.mp3" type="audio/mp3">
</audio>
<audio id="rowShow">
    <source src="ObstacleRowShow.mp3" type="audio/mp3">
</audio>
<audio id="rightObs">
    <source src="ObstacleRightAnswer.mp3" type="audio/mp3">
</audio>
<audio id="openRow">
    <source src="OpenRow.mp3" type="audio/mp3">
</audio>
<audio id="rightAns">
    <source src="ObstacleRowRightAnswer.mp3" type="audio/mp3">
</audio>
<audio id="showImg">
    <source src="ObstacleShowImage.mp3" type="audio/mp3">
</audio>
<audio id="fifteenSecAdven">
    <source src="15sAdven.wav" type="audio/wav">
</audio>
<audio id="fiveSecAdven">
    <source src="5sAdven.wav" type="audio/wav">
</audio>
<audio id="thirtySecAdven">
    <source src="30sAdven.mp3" type="audio/mp3">
</audio>
<audio id="startAdvenSec">
    <source src="StartAdvenSec.wav" type="audio/wav">
</audio>
<audio id="obsGranted">
    <source src="ObsGranted.wav" type="audio/wav">
</audio>
<audio id="exitAdvenSec">
    <source src="ExitAdvenSec.mp3" type="audio/mp3">
</audio>
<?php
$servername = 'localhost';
$username = 'root';
$password = 'danielcruise';

$i = 0;
$rowStart = array(0, 0, 0, 0);
$rowEnd = array(0, 0, 0, 0);
$question = array("", "", "", "");
$ans = array("", "", "", "");
$point = array(0, 0, 0, 0);
$nameArray = array("", "", "", "");
$codeDb = "";

// create connection

$conn = new mysqli($servername, $username, $password, 'candidate');
$sql = "SELECT * FROM candidate WHERE candInd = '1'";
$result = $conn->query($sql);
$row = mysqli_fetch_array($result);
$codeDb = $row["code"];

for ($i = 1; $i < 5; $i++) {
    $sql = "SELECT * FROM candidate where candInd = '$i'";
    $result = $conn->query($sql);
    $row = mysqli_fetch_array($result);
    if ($row["candInd"] == '1') {
        $nameArray[0] = $row["nameCan"];
        $point[0] = (int)$row["point"];
    }

    if ($row["candInd"] == '2') {
        $nameArray[1] = $row["nameCan"];
        $point[1] = (int)$row["point"];
    }
    if ($row["candInd"] == '3') {
        $nameArray[2] = $row["nameCan"];
        $point[2] = (int)$row["point"];
    }
    if ($row["candInd"] == '4') {
        $nameArray[3] = $row["nameCan"];
        $point[3] = (int)$row["point"];
    }

}
$conn->close();

$conn = new mysqli($servername, $username, $password, $codeDb);
$quesInd = 0;
for ($quesInd = 1; $quesInd < 5; $quesInd++) {
    $sql = "SELECT * FROM obstacle WHERE row = '$quesInd'";
    $result = $conn->query($sql);
    $row = mysqli_fetch_array($result);
    $question[$quesInd - 1] = $row["question"];
    $ans[$quesInd - 1] = $row["answer"];
    $rowStart[$quesInd - 1] = (int)$row["rowStart"];
    $rowEnd[$quesInd - 1] = (int)$row["rowEnd"];
}

$sql = "SELECT * FROM obstacle WHERE row = '5'";
$result = $conn->query($sql);
$row = mysqli_fetch_array($result);
$quesCentrePiece = $row["question"];
$ansCentrePiece = $row["answer"];

$sql = "SELECT * FROM obstacle WHERE row = '6'";
$result = $conn->query($sql);
$row = mysqli_fetch_array($result);
$obsNumOfLetter = (int)$row["rowEnd"];
// get clue img
$sql = "SELECT * FROM acceleration WHERE questionNum = '5'";
$result = $conn->query($sql);
$row = mysqli_fetch_array($result);
$clueImg = $row["imageLink"];
$conn->close();
?>

<script type="text/javascript">
    var k = 0; // control variable
    var centerPieceOpened = false;
    var currentRow = 0;
    var candidate = <?php echo json_encode($nameArray); ?>;
    var point = <?php echo json_encode($point); ?>;
    var rowStart = <?php echo json_encode($rowStart); ?>;
    var rowEnd = <?php echo json_encode($rowEnd); ?>;
    var quesCentrePiece = <?php echo json_encode($quesCentrePiece); ?>;
    var ansCentrePiece = <?php echo json_encode($ansCentrePiece); ?>;
    var obsNumOfLetter = <?php echo json_encode($obsNumOfLetter); ?>;
    var clueImg = <?php echo json_encode($clueImg); ?>;
    var numOfSpace = [0, 0, 0, 0];
    var nameShowAns = document.getElementsByClassName('candName');
    var rowInd = document.getElementsByClassName('rowInd');
    var candi = document.getElementsByClassName('candi');
    var pt = document.getElementsByClassName('pt');
    var blueCand = document.getElementsByClassName("minorCand");
    var pointStart = document.getElementsByClassName("minorPoint");
    var row1 = document.getElementsByClassName('row1');
    var row2 = document.getElementsByClassName('row2');
    var row3 = document.getElementsByClassName('row3');
    var row4 = document.getElementsByClassName('row4');
    var questionPane = document.getElementById('ques');
    var fifteenSec = document.getElementById('fifteenSec');
    var obsGrantedAudio = document.getElementById('obsGranted');
    var showImg = document.getElementById('showImg');
    var showRowAns = document.getElementById('ShowRowAnsVideo');
    var obstacPane1 = document.getElementById('name1Ans');
    var obstacPane2 = document.getElementById('name2Ans');
    var obstacPane3 = document.getElementById('name3Ans');
    var obstacPane4 = document.getElementById('name4Ans');
    var referObs = document.getElementsByClassName('referObs');
    var referAdven = document.getElementsByClassName('referAdven');
    var piece = document.getElementsByClassName('Piece');
    var question = <?php echo json_encode($question); ?>;
    var ans = <?php echo json_encode($ans); ?>;
    var paneEnabled = [true, true, true, true];
    var candGranted = [true, true, true, true];
    var candIndexGranted = 1;
    var advenSection = setInterval(function () {

    }, 100);

    initialize();
    currentQues("", "", 0);
    ansRowReset();
    document.getElementById("mainImg").src = clueImg;
    $(document).ready(function () {
        $("#SectionName").click(function () {
            rowAppear();
            $("#pointTop").hide();
        })
    });
    setTimeout(goOnObstac, 6000);

    for (var i = 0; i < candidate.length; i++) {
        candi[i].innerHTML = candidate[i];
        pt[i].innerHTML = point[i];
        blueCand[i].innerHTML = candidate[i];
        pointStart[i].innerHTML = point[i];
        nameShowAns[i].innerHTML = candidate[i];
    }

    function rowAppear() {
        var rowShow = document.getElementById('rowShow');
        rowShow.play();
        document.getElementById('SectionName').style.visibility = 'hidden';
        allRowAppear();
    }

    function rowOn(curRow) {
        currentRow = curRow;
        showRow(curRow, rowStart[curRow - 1], rowEnd[curRow - 1]);
    }

    function vidQuesAppear() {
        var vidQues = fifteenSec;
        vidQues.style.visibility = 'visible';
    }

    function playObsQuesShow() {
        var playObsQuesShow = document.getElementById('quesShow');
        playObsQuesShow.style.display = 'block';
        playObsQuesShow.play();
        setTimeout(function () {
            playObsQuesShow.style.display = 'none';
            questionPane.style.visibility = 'visible';
        }, 3000);
    }

    function showAns() {
        oneRightAns(currentRow);
        restartTime();
    }

    function wrongAns() {
        oneWrongAns(currentRow);
        restartTime();
    }

    function hideQues() {
        fifteenSec.style.visibility = 'hidden';
        questionPane.style.visibility = 'hidden';
    }

    function goOnObstac() {
        document.getElementById('ObstacVideo').style.display = 'none';
        var startObstac = document.getElementById('ObstacleStart');
        startObstac.play();
    }

    function restartTime() {
        fifteenSec.currentTime = 0;
        var quesShow = document.getElementById('quesShow');
        quesShow.currentTime = 0;
    }

    function timerStart() {
        fifteenSec.play();
        controlSection(1);
        setTimeout(function () {
            controlSection(0);
        }, 15000);

        if (questionPane.innerHTML == quesCentrePiece ||
            questionPane.innerHTML == "Chướng ngại vật có " + obsNumOfLetter + " chữ cái.") setTimeout(function () {
            fifteenSec.style.visibility = "hidden";
            questionPane.innerHTML = "";
        }, 18000);
    }

    function showAllRow() {
        for (var i = 0; i < rowInd.length; i++) {
            oneRowRight(i + 1, rowStart[i], rowEnd[i], numOfSpace[i]);
        }
    }

    function showRow(curRow, start, end) {
        if (k == 0) {
            for (var i = start; i <= end; i++) {
                if (curRow == 1) row1[i].style.backgroundColor = '#0088FF';
                if (curRow == 2) row2[i].style.backgroundColor = '#0088FF';
                if (curRow == 3) row3[i].style.backgroundColor = '#0088FF';
                if (curRow == 4) row4[i].style.backgroundColor = '#0088FF';
            }
            var openRow = document.getElementById('openRow');
            openRow.play();
            setTimeout(playObsQuesShow, 1000);
            setTimeout(function () {
                questionPane.innerHTML = question[curRow - 1];
            }, 3000);
            setTimeout(function () {
                vidQuesAppear();
                currentQues(question[curRow - 1], ans[curRow - 1], 2);
                setTimeout(function () {
                    currentQues(question[curRow - 1], ans[curRow - 1], 0);
                }, 1500);
            }, 4000);
            k = 1;
            rowVisited[curRow - 1] = true;
        } else {
            wrongAns();
            k = 0;
            rowVisited[curRow - 1] = true;
        }
    }

    function oneRowRight(curRow, start, end, space) {
        for (i = start; i <= end + space; i++) {
            if (ans[curRow - 1].charAt(i - start) == ' ') {
                space++;
                continue;
            }
            if (curRow == 1) {
                row1[i - space].innerHTML = ans[curRow - 1].charAt(i - start);
                row1[i - space].style.backgroundColor = 'green';
            }
            if (curRow == 2) {
                row2[i - space].innerHTML = ans[curRow - 1].charAt(i - start);
                row2[i - space].style.backgroundColor = 'green';
            }
            if (curRow == 3) {
                row3[i - space].innerHTML = ans[curRow - 1].charAt(i - start);
                row3[i - space].style.backgroundColor = 'green';
            }
            if (curRow == 4) {
                row4[i - space].innerHTML = ans[curRow - 1].charAt(i - start);
                row4[i - space].style.backgroundColor = 'green';
            }
        }
        currentQues("", "", 2);
        setTimeout(function () {
            currentQues("", "", 0);
        }, 1000);
        ansRowReset();
    }

    function allRowAppear() {
        var i, j;
        for (i = 0; i < rowInd.length; i++) {
            rowInd[i].style.visibility = 'visible';
            for (j = rowStart[i]; j <= rowEnd[i]; j++) {
                if (i == 0) row1[j].style.visibility = 'visible';
                if (i == 1) row2[j].style.visibility = 'visible';
                if (i == 2) row3[j].style.visibility = 'visible';
                if (i == 3) row4[j].style.visibility = 'visible';
            }
        }
    }

    function oneRightAns(curRow) {
        var ObstacleRowRightAnswer = document.getElementById('rightAns');
        oneRowRight(curRow, rowStart[curRow - 1], rowEnd[curRow - 1], numOfSpace[curRow - 1]);
        hideQues();
        ObstacleRowRightAnswer.play();
        k = 0;
        rowInd[curRow - 1].onclick = null;
    }

    function oneWrongAns(curRow) {
        for (i = rowStart[curRow - 1]; i <= rowEnd[curRow - 1]; i++) {
            if (curRow == 1) row1[i].style.backgroundColor = '#595959';
            if (curRow == 2) row2[i].style.backgroundColor = '#595959';
            if (curRow == 3) row3[i].style.backgroundColor = '#595959';
            if (curRow == 4) row4[i].style.backgroundColor = '#595959';
        }
        hideQues();
        currentQues("", "", 2);
        setTimeout(function () {
            currentQues("", "", 0);
        }, 1000);
        ansRowReset();
        rowInd[curRow - 1].onclick = null;
    }

    function showRowAnswer() {
        sectionShowing('', '');
        $("#ShowRowAnsVideo").show();
        updateRowAns();
        showRowAns.play();
        setTimeout(function () {
            $("#candidateRowAns").show();
        }, 2200);
        setDefaultBackground();

    }

    function sectionShowing(section1, section2) {
        $("#rows").hide();
        $("#ClueImg").hide();
        $("#pointCan").hide();
        $("#mainImg").hide();
        $(section1).show();
        $(section2).show();
        resetShowAns();
        if (section1 == "#pointCan") changeBackgroundImage();
        else setDefaultBackground();
    }

    function resetShowAns() {
        $("#candidateRowAns").hide();
        $("#ShowRowAnsVideo").hide();
        showRowAns.currentTime = 0;
    }

    function centerPiece() {
        if (!centerPieceOpened) {
            questionPane.innerHTML = quesCentrePiece;
            playObsQuesShow();
            setTimeout(vidQuesAppear, 3000);
            setTimeout(function () {
                vidQuesAppear();
                currentQues(quesCentrePiece, ansCentrePiece, 2);
                setTimeout(function () {
                    currentQues(quesCentrePiece, ansCentrePiece, 0);
                }, 1500);
            }, 4000);
            centerPieceOpened = true;
        } else {
            questionPane.style.visibility = "hidden";
            fifteenSec.style.visibility = "hidden";
        }
    }

    function initialize() {
        $(document).ready(function () {
            clearInterval(advenSection);
            $("#ClueImg").hide();
            $("#pointCan").hide();
            $("#mainImg").hide();
            $("#advenSection").hide();
            $('#name1Ans').hide();
            $('#name2Ans').hide();
            $('#name3Ans').hide();
            $('#name4Ans').hide();
            $('#candOnAdven').hide();
            $("#candidateRowAns").hide();
            $("#ShowRowAnsVideo").hide();
        });
    }

    function clearPiece(i) {
        piece[i - 1].style.visibility = "hidden";
        showImg.play();
    }

    function showAllImage() {
       for (var i = 0; i < 5; i++) {
           piece[i].style.visibility = "hidden";
       }
    }

    function final() {
        fifteenSec.style.visibility = "visible";
        questionPane.style.visibility = "visible";
        questionPane.innerHTML = "Chướng ngại vật có " + obsNumOfLetter + " chữ cái.";
        var finalQues = questionPane.innerHTML;
        currentQues(finalQues, "", 2);
        setTimeout(function () {
            currentQues(finalQues, "", 0);
        }, 1500);
    }

    function updatePoint() {
        $.ajax({
            url: "updatePoint.php",
            type: "POST",
            data: {'pointCan1': point[0], 'pointCan2': point[1], 'pointCan3': point[2], 'pointCan4': point[3]},
            success: function () {
                alert("OK! :)");
            }
        });
    }

    function changeBackgroundImage() {
        $('body').css("background-image", "url(pointBckgr.png)");
    }

    function setDefaultBackground() {
        $('body').css("background-image", "url(background.png)");
    }

    // functions for adventurous section
    function onAdvenSection() {
        advenSection = setInterval(advenSec, 100);
        $(document).ready(function () {
            $("#advenSection").fadeIn(5000);
            $("#rows").fadeOut(5000);
        });
        document.getElementById('startAdvenSec').play();
    }

    function exitAdvenSection() {
        $(document).ready(function () {
            $("#advenSection").fadeOut(5000);
            $("#rows").fadeIn(5000);
        });
        document.getElementById('exitAdvenSec').play();
        clearInterval(advenSection);
    }


    // functions for adding points
    function addPts(candidate, ptAdded) {
        point[candidate - 1] += ptAdded;
        pt[candidate - 1].innerHTML = point[candidate - 1];
    }


    function halfPts(candidate) {
        point[candidate - 1] /= 2;
        pt[candidate - 1].innerHTML = point[candidate - 1];
    }

    function doublePoint(candidate) {
        point[candidate - 1] *= 2;
        pt[candidate - 1].innerHTML = point[candidate - 1];
    }

    // OPTIMIZABLE
    function grantedObstacle(canGranted) {
        if (candIndexGranted == 1 && paneEnabled[0] == true && paneEnabled[1] == true && paneEnabled[2] == true
            && paneEnabled[3] == true && candGranted[canGranted - 1] == true) {
            $('#name1Ans').show();
            obstacPane1.innerHTML = candIndexGranted + ". " + candidate[canGranted - 1];
            candIndexGranted++;
            paneEnabled[0] = false;
            candGranted[canGranted - 1] = false;
        }

        if (candIndexGranted == 2 && paneEnabled[0] == false && paneEnabled[1] == true && paneEnabled[2] == true
            && paneEnabled[3] == true && candGranted[canGranted - 1] == true) {
            $('#name2Ans').show();
            obstacPane2.innerHTML = candIndexGranted + ". " + candidate[canGranted - 1];
            candIndexGranted++;
            paneEnabled[1] = false;
            candGranted[canGranted - 1] = false;
        }

        if (candIndexGranted == 3 && paneEnabled[0] == false && paneEnabled[1] == false && paneEnabled[2] == true
            && paneEnabled[3] == true && candGranted[canGranted - 1] == true) {
            $('#name3Ans').show();
            obstacPane3.innerHTML = candIndexGranted + ". " + candidate[canGranted - 1];
            candIndexGranted++;
            paneEnabled[2] = false;
            candGranted[canGranted - 1] = false;
        }

        if (candIndexGranted == 4 && paneEnabled[0] == false && paneEnabled[1] == false && paneEnabled[2] == false
            && paneEnabled[3] == true && candGranted[canGranted - 1] == true) {
            $('#name4Ans').show();
            obstacPane4.innerHTML = candIndexGranted + ". " + candidate[canGranted - 1];
            candIndexGranted++;
            paneEnabled[3] = false;
            candGranted[canGranted - 1] = false;
        }
        obsGrantedAudio.play();
    }

    function resetObstacleAnswering() {
        var i;
        for (i = 0; i < 4; i++) {
            paneEnabled[i] = true;
        }
        candIndexGranted = 1;
        $('#name1Ans').hide();
        $('#name2Ans').hide();
        $('#name3Ans').hide();
        $('#name4Ans').hide();
    }

    function currentQues(ques, ans, turn) {
        $.ajax({
            url: "uploadCurrentQuestion.php",
            type: "POST",
            data: {'question': ques, 'curCand': turn, 'answer': ans},
            success: function () {
            }
        });
    }

    function controlSection(turn) {
        $.ajax({
            url: "controlSection.php",
            type: "POST",
            data: {'curCand': turn},
            success: function () {
            }
        });
    }

    function updateRowAns() {
        $('#ans1').load('rowAns1.php');
        $('#ans2').load('rowAns2.php');
        $('#ans3').load('rowAns3.php');
        $('#ans4').load('rowAns4.php');
    }

    function ansRowReset() {
        $.ajax({
            url: "resetRowAns.php",
            type: "POST",
            data: {'curCand': 1},
            success: function () {
            }
        });
    }

    setInterval(function () {
        $('#referObs1').load('TLCNV1.php');
        $('#referObs2').load('TLCNV2.php');
        $('#referObs3').load('TLCNV3.php');
        $('#referObs4').load('TLCNV4.php');

        for (var i = 0; i < 4; i++) {
            if (referObs[i].innerHTML == '1' && candGranted[i]) grantedObstacle(i + 1);
        }
    }, 100);

    function advenSec() {
        $('#referAdven1').load('OMH1.php');
        $('#referAdven2').load('OMH2.php');
        $('#referAdven3').load('OMH3.php');
        $('#referAdven4').load('OMH4.php');

        for (var i = 0; i < 4; i++) {
            var test = testAdvenSection(i);
            if (test) {
                $('#candOnAdven').fadeIn(3000);
                $('#candOnAdven').html(candidate[i]);
            }
        }
    }

    function testAdvenSection(candIndex) {
        for (var i = 0; i < 4; i++) {
            if (i != candIndex && referAdven[candIndex].innerHTML == '0') continue;
            else if (referAdven[i].innerHTML == '1') return true;
            else {
                return false;
            }
        }
    }
</script>
</body>
</html>