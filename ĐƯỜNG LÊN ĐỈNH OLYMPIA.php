<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ĐƯỜNG LÊN ĐỈNH OLYMPIA</title>
    <script src="jquery-3.2.1.min.js"></script>
    <style>
        body {
            background-image: url("ĐƯỜNG LÊN ĐỈNH OLYMPIA.png");
            background-size: cover;
        }

        .nameInp {
            height: 70px !important;
            background-color: blue;
            margin-top: 150px;
            margin-left: 260px;
            color: white;
            font-size: 60px;
            font-weight: bold;
        }

        #name2, #name3, #name4 {
            margin-top: 80px;
        }

        #start {
            position: fixed;
            height: 75px !important;
            width: 150px !important;
            background-color: yellow;
            color: red;
            border: 3px solid red;
            margin-top: 550px;
            margin-left: 1020px;
            font-size: 20px;
            font-weight: bold;
        }

        #createQues a, #updateCand {
            font-weight: bold;
            font-family: Arial;
            color: white;
            font-size: 20px;
            float: right;
            margin-top: 10px;
            cursor: pointer;
        }

        #menu {
            position: fixed;
            right: 1px;
            bottom: 0;
        }
        #packUsing {
            position: fixed;
            color: white;
            font-size: 30px;
            font-family: Arial;
        }

        #packUsing input {
            font-size: 30px;
        }
    </style>
</head>
<body>
<button id="start"><a href="/OLYMPIA/KHỞI ĐỘNG/KHỞI ĐỘNG.php" style="text-decoration: none">START</a></button>
<div id="packUsing"><label>Bộ đề sử dụng:</label> <input id="code" size="16"> </div>
<section id="menu">
    <p id="createQues"><a href="/OLYMPIA/NHẬP ĐỀ.php">TẠO ĐỀ THI</a></p>
    <a id="updateCand" onclick="updateCand()" style="text-decoration: underline">CẬP NHẬT TÊN THÍ SINH</a>
</section>
<form>
    <input class="nameInp" id="name1" name="cand1" size="16">
    <input class="nameInp" id="name2" name="cand2" size="16">
    <input class="nameInp" id="name3" name="cand3" size="16">
    <input class="nameInp" id="name4" name="cand4" size="16">
</form>
<?php
$servername = 'localhost';
$username = 'root';
$password = 'danielcruise';
$dbName = 'candidate';

$name = array("", "", "", "");

$conn = new mysqli($servername, $username, $password, $dbName);


for ($i = 1; $i < 5; $i++) {
    $sql = "SELECT * FROM candidate WHERE candInd = '$i'";
    $result = $conn->query($sql);
    $row = mysqli_fetch_array($result);
    if ($row["candInd"] == "1") $name[0] = $row["nameCan"];
    if ($row["candInd"] == "2") $name[1] = $row["nameCan"];
    if ($row["candInd"] == "3") $name[2] = $row["nameCan"];
    if ($row["candInd"] == "4") $name[3] = $row["nameCan"];
    $conn->query($sql);
}

for ($i = 1; $i < 5; $i++) {
    $k = $i - 1;
    $sql = "UPDATE obstalecandidateanswer SET nameCan = '$name[$k]' WHERE candInd = '$i'";
    $conn->query($sql);
    $sql = "UPDATE obstalecandidateanswer SET obstacleGranted = '0' WHERE candInd = '$i'";
    $conn->query($sql);
}

for ($i = 1; $i < 5; $i++) {
    $k = $i - 1;
    $sql = "UPDATE accecandidateanswer SET nameCan = '$name[$k]' WHERE candInd = '$i'";
    $conn->query($sql);
}

for ($i = 1; $i < 5; $i++) {
    $k = $i - 1;
    $sql = "UPDATE finishingcandidategranted SET finishingGranted = '0' WHERE candInd = '$i'";
    $conn->query($sql);
}

$conn->close();

?>
<script>
    function updateCand() {
        candidate = <?php echo json_encode($name); ?>;
        document.getElementById("name1").value = candidate[0];
        document.getElementById("name2").value = candidate[1];
        document.getElementById("name3").value = candidate[2];
        document.getElementById("name4").value = candidate[3];
        $.ajax({
            url: "updateCode.php",
            type: "POST",
            data: {'code': $('#code').val()},
            success: function () {
            }
        });
        alert("CẬP NHẬT TÊN THÍ SINH THÀNH CÔNG! :)");
    }
</script>

</body>
</html>