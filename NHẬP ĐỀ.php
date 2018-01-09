<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TẠO ĐỀ THI</title>
    <script src="angular.min.js"></script>
    <script src="jquery-3.2.1.min.js"></script>
    <style>
        body {
            background-image: url("./KHỞI ĐỘNG/Background.png");
            background-repeat: no-repeat;
            background-attachment: fixed;
            color: white;
            font-family: Arial;

        }

        h1, h2 {
            text-decoration: underline;
            font-size: 40px;
            text-align: center;
        }

        input {
            margin-left: 30px;
            margin-top: 20px
        }

        h2 {
            text-align: left;
            font-size: 30px;
        }

        form {
            margin-left: 50px;
        }

        form label {
            margin-left: 50px;
            display: block;
            width: 250px;
            float: left;
            margin-top: 20px;
        }

        form input {
            background-color: cornflowerblue;
        }

    </style>
</head>

<body>
<h1>NHẬP ĐỀ THI</h1>
<div>
    <form action="uploadQuestionToDB.php" method="post" enctype="multipart/form-data">
        <label style="line-height: 10px">TÊN BỘ ĐỀ: </label> <input type="text" name="nameOfDb" size="100">
        <h2>KHỞI ĐỘNG</h2>
        <h3 style="text-decoration: underline">THÍ SINH 1:</h3>
        <label>Câu hỏi 1 - Toán học:</label> <input type="text" name="wu1ques1" size="100">
        Đáp án:<input type="text" name="wu1ans1" size="10"> <br>
        <label>Câu hỏi 2 - Vật lý:</label> <input type="text" name="wu1ques2" size="100">
        Đáp án:<input type="text" name="wu1ans2" size="10"> <br>
        <label>Câu hỏi 3 - Hóa học:</label> <input type="text" name="wu1ques3" size="100">
        Đáp án:<input type="text" name="wu1ans3" size="10"> <br>
        <label>Câu hỏi 4 - Sinh học:</label> <input type="text" name="wu1ques4" size="100">
        Đáp án:<input type="text" name="wu1ans4" size="10"> <br>
        <label>Câu hỏi 5 - Tiếng Anh:</label> <input type="text" name="wu1ques5" size="100">
        Đáp án:<input type="text" name="wu1ans5" size="10"> <br>
        <label>Câu hỏi 6 - Văn học:</label> <input type="text" name="wu1ques6" size="100">
        Đáp án:<input type="text" name="wu1ans6" size="10"> <br>
        <label>Câu hỏi 7 - Lịch sử:</label> <input type="text" name="wu1ques7" size="100">
        Đáp án:<input type="text" name="wu1ans7" size="10"> <br>
        <label>Câu hỏi 8 - Địa lý:</label> <input type="text" name="wu1ques8" size="100">
        Đáp án:<input type="text" name="wu1ans8" size="10"> <br>
        <label>Câu hỏi 9 - Thể thao:</label> <input type="text" name="wu1ques9" size="100">
        Đáp án:<input type="text" name="wu1ans9" size="10"> <br>
        <label>Câu hỏi 10 - Nghệ thuật:</label> <input type="text" name="wu1ques10" size="100">
        Đáp án:<input type="text" name="wu1ans10" size="10"> <br>
        <label>Câu hỏi 11 - Lĩnh vực khác:</label> <input type="text" name="wu1ques11" size="100">
        Đáp án:<input type="text" name="wu1ans11" size="10"> <br>
        <label>Câu hỏi 12 - Hiểu biết chung:</label> <input type="text" name="wu1ques12" size="100">
        Đáp án:<input type="text" name="wu1ans12" size="10"> <br>

        <h3 style="text-decoration: underline">THÍ SINH 2:</h3>
        <label>Câu hỏi 1 - Toán học:</label> <input type="text" name="wu2ques1" size="100">
        Đáp án:<input type="text" name="wu2ans1" size="10"> <br>
        <label>Câu hỏi 2 - Vật lý:</label> <input type="text" name="wu2ques2" size="100">
        Đáp án:<input type="text" name="wu2ans2" size="10"> <br>
        <label>Câu hỏi 3 - Hóa học:</label> <input type="text" name="wu2ques3" size="100">
        Đáp án:<input type="text" name="wu2ans3" size="10"> <br>
        <label>Câu hỏi 4 - Sinh học:</label> <input type="text" name="wu2ques4" size="100">
        Đáp án:<input type="text" name="wu2ans4" size="10"> <br>
        <label>Câu hỏi 5 - Tiếng Anh:</label> <input type="text" name="wu2ques5" size="100">
        Đáp án:<input type="text" name="wu2ans5" size="10"> <br>
        <label>Câu hỏi 6 - Văn học:</label> <input type="text" name="wu2ques6" size="100">
        Đáp án:<input type="text" name="wu2ans6" size="10"> <br>
        <label>Câu hỏi 7 - Lịch sử:</label> <input type="text" name="wu2ques7" size="100">
        Đáp án:<input type="text" name="wu2ans7" size="10"> <br>
        <label>Câu hỏi 8 - Địa lý:</label> <input type="text" name="wu2ques8" size="100">
        Đáp án:<input type="text" name="wu2ans8" size="10"> <br>
        <label>Câu hỏi 9 - Thể thao:</label> <input type="text" name="wu2ques9" size="100">
        Đáp án:<input type="text" name="wu2ans9" size="10"> <br>
        <label>Câu hỏi 10 - Nghệ thuật:</label> <input type="text" name="wu2ques10" size="100">
        Đáp án:<input type="text" name="wu2ans10" size="10"> <br>
        <label>Câu hỏi 11 - Lĩnh vực khác:</label> <input type="text" name="wu2ques11" size="100">
        Đáp án:<input type="text" name="wu2ans11" size="10"> <br>
        <label>Câu hỏi 12 - Hiểu biết chung:</label> <input type="text" name="wu2ques12" size="100">
        Đáp án:<input type="text" name="wu2ans12" size="10"> <br>

        <h3 style="text-decoration: underline">THÍ SINH 3:</h3>
        <label>Câu hỏi 1 - Toán học:</label> <input type="text" name="wu3ques1" size="100">
        Đáp án:<input type="text" name="wu3ans1" size="10"> <br>
        <label>Câu hỏi 2 - Vật lý:</label> <input type="text" name="wu3ques2" size="100">
        Đáp án:<input type="text" name="wu3ans2" size="10"> <br>
        <label>Câu hỏi 3 - Hóa học:</label> <input type="text" name="wu3ques3" size="100">
        Đáp án:<input type="text" name="wu3ans3" size="10"> <br>
        <label>Câu hỏi 4 - Sinh học:</label> <input type="text" name="wu3ques4" size="100">
        Đáp án:<input type="text" name="wu3ans4" size="10"> <br>
        <label>Câu hỏi 5 - Tiếng Anh:</label> <input type="text" name="wu3ques5" size="100">
        Đáp án:<input type="text" name="wu3ans5" size="10"> <br>
        <label>Câu hỏi 6 - Văn học:</label> <input type="text" name="wu3ques6" size="100">
        Đáp án:<input type="text" name="wu3ans6" size="10"> <br>
        <label>Câu hỏi 7 - Lịch sử:</label> <input type="text" name="wu3ques7" size="100">
        Đáp án:<input type="text" name="wu3ans7" size="10"> <br>
        <label>Câu hỏi 8 - Địa lý:</label> <input type="text" name="wu3ques8" size="100">
        Đáp án:<input type="text" name="wu3ans8" size="10"> <br>
        <label>Câu hỏi 9 - Thể thao:</label> <input type="text" name="wu3ques9" size="100">
        Đáp án:<input type="text" name="wu3ans9" size="10"> <br>
        <label>Câu hỏi 10 - Nghệ thuật:</label> <input type="text" name="wu3ques10" size="100">
        Đáp án:<input type="text" name="wu3ans10" size="10"> <br>
        <label>Câu hỏi 11 - Lĩnh vực khác:</label> <input type="text" name="wu3ques11" size="100">
        Đáp án:<input type="text" name="wu3ans11" size="10"> <br>
        <label>Câu hỏi 12 - Hiểu biết chung:</label> <input type="text" name="wu3ques12" size="100">
        Đáp án:<input type="text" name="wu3ans12" size="10"> <br>

        <h3 style="text-decoration: underline">THÍ SINH 4:</h3>
       <label>Câu hỏi 1 - Toán học:</label> <input type="text" name="wu4ques1" size="100">
        Đáp án:<input type="text" name="wu4ans1" size="10"> <br>
        <label>Câu hỏi 2 - Vật lý:</label> <input type="text" name="wu4ques2" size="100">
        Đáp án:<input type="text" name="wu4ans2" size="10"> <br>
        <label>Câu hỏi 3 - Hóa học:</label> <input type="text" name="wu4ques3" size="100">
        Đáp án:<input type="text" name="wu4ans3" size="10"> <br>
        <label>Câu hỏi 4 - Sinh học:</label> <input type="text" name="wu4ques4" size="100">
        Đáp án:<input type="text" name="wu4ans4" size="10"> <br>
        <label>Câu hỏi 5 - Tiếng Anh:</label> <input type="text" name="wu4ques5" size="100">
        Đáp án:<input type="text" name="wu4ans5" size="10"> <br>
        <label>Câu hỏi 6 - Văn học:</label> <input type="text" name="wu4ques6" size="100">
        Đáp án:<input type="text" name="wu4ans6" size="10"> <br>
        <label>Câu hỏi 7 - Lịch sử:</label> <input type="text" name="wu4ques7" size="100">
        Đáp án:<input type="text" name="wu4ans7" size="10"> <br>
        <label>Câu hỏi 8 - Địa lý:</label> <input type="text" name="wu4ques8" size="100">
        Đáp án:<input type="text" name="wu4ans8" size="10"> <br>
        <label>Câu hỏi 9 - Thể thao:</label> <input type="text" name="wu4ques9" size="100">
        Đáp án:<input type="text" name="wu4ans9" size="10"> <br>
        <label>Câu hỏi 10 - Nghệ thuật:</label> <input type="text" name="wu4ques10" size="100">
        Đáp án:<input type="text" name="wu4ans10" size="10"> <br>
        <label>Câu hỏi 11 - Lĩnh vực khác:</label> <input type="text" name="wu4ques11" size="100">
        Đáp án:<input type="text" name="wu4ans11" size="10"> <br>
        <label>Câu hỏi 12 - Hiểu biết chung:</label> <input type="text" name="wu4ques12" size="100">
        Đáp án:<input type="text" name="wu4ans12" size="10"> <br>

        <h2>VƯỢT CHƯỚNG NGẠI VẬT</h2>
        <label>Câu hỏi hàng ngang 1:</label> <input type="text" name="obsQues1" size="100">
        <label>Câu hỏi hàng ngang 2:</label> <input type="text" name="obsQues2" size="100">
        <label>Câu hỏi hàng ngang 3:</label> <input type="text" name="obsQues3" size="100">
        <label>Câu hỏi hàng ngang 4:</label> <input type="text" name="obsQues4" size="100">
        <label>Câu hỏi ô trung tâm:</label> <input type="text" name="obsQuesCentrePiece" size="100">
        <label>Câu hỏi ô mạo hiểm:</label> <input type="text" name="obsQuesAdven" size="100">

        <div ng-app="completeRow" ng-controller="control">

        <label>Đáp án hàng ngang 1:</label> <input type="text" name="obsRow1" size="40" id="answer1">
        từ ô <input type="text" size="1" name="start1" style="margin-left: 3px" id="start1"> đến ô
        <input type="text" size="1" name="end1" style="margin-left: 3px" ng-model="endRow1">.<br>

        <label>Đáp án hàng ngang 2:</label> <input type="text" name="obsRow2" size="40" id="answer2">
        từ ô <input type="text" size="1" name="start2" style="margin-left: 3px" id="start2"> đến ô
        <input type="text" size="1" name="end2" style="margin-left: 3px" ng-model="endRow2">.<br>

        <label>Đáp án hàng ngang 3:</label> <input type="text" name="obsRow3" size="40" id="answer3">
        từ ô <input type="text" size="1" name="start3" style="margin-left: 3px" id="start3"> đến ô
        <input type="text" size="1" name="end3" style="margin-left: 3px" ng-model="endRow3">. <br>

        <label>Đáp án hàng ngang 4:</label> <input type="text" name="obsRow4" size="40" id="answer4">
        từ ô <input type="text" size="1" name="start4" style="margin-left: 3px" id="start4"> đến ô
        <input type="text" size="1" name="end4" style="margin-left: 3px" ng-model="endRow4">.<br>

        </div>

        <label>Đáp án câu hỏi ô trung tâm:</label> <input type="text" name="obsAnsCentrePiece" size="40"><br>
        <label>Đáp án câu hỏi ô mạo hiểm:</label> <input type="text" name="obsAnsAdven" size="40"><br>


        <label>Chướng ngại vật là: </label> <input type="text" name="obsAns" size="50"> có
        <input type="text" size="4" name="obsLetter" style="margin-left: 3px"> chữ cái.<br>

        <label>Đường dẫn hình ảnh gợi ý CNV:</label> <input type="text" name="ObsImg" size="100">


        <h2>TĂNG TỐC</h2>
        <h3 style="text-decoration: underline;">Câu hỏi 1 - Câu hỏi hình ảnh:</h3> <br>
        <label>Câu hỏi:</label> <input type="text" name="acceQues1" size="70"><br>
        <label>Đường dẫn hình ảnh 1:</label> <input type="text" name="img11" id="img11" size="100"><br>
        <label>Đường dẫn hình ảnh 2:</label> <input type="text" name="img12" id="img12" size="100"><br>
        <label>Đường dẫn hình ảnh 3:</label> <input type="text" name="img13" id="img13" size="100"><br>
        <label>Đường dẫn hình ảnh 4:</label> <input type="text" name="img14" id="img14" size="100"><br>
        <label>Đường dẫn hình ảnh 5:</label> <input type="text" name="img15" id="img15" size="100"><br>
        <label>Đường dẫn hình ảnh 6:</label> <input type="text" name="img16" id="img16" size="100"><br>
        <label>Đường dẫn hình ảnh 7:</label> <input type="text" name="img17" id="img17" size="100"><br>
        <label>Đường dẫn hình ảnh 8:</label> <input type="text" name="img18" id="img18" size="100"><br>
        <p>* Các hình ảnh sẽ xuất hiện theo thứ tự từ hình ảnh 1 đến hình ảnh 8</p>
        <label>Đáp án: </label> <input type="text" name="acceAns1" size="100"> <br>

        <h3 style="text-decoration: underline;">Câu hỏi 2 - Câu hỏi IQ:</h3> <br>
        <label>Câu hỏi:</label> <input type="text" name="acceQues2" size="70"> <br>
        <label>Đường dẫn hình ảnh:</label> <input type="text" name="img2" size="100"><br>
        <label>Đáp án: </label> <input type="text" name="acceAns2" size="100"><br>

        <h3 style="text-decoration: underline;">Câu hỏi 3 - Câu hỏi dữ kiện:</h3> <br>
        <label>Câu hỏi:</label> <input type="text" name="acceQues3" size="70"> <br>
        <label>Đường dẫn hình ảnh 1 - 1 dữ kiện:</label> <input type="text" name="img31" size="100"><br>
        <label>Đường dẫn hình ảnh 2 - 2 dữ kiện:</label> <input type="text" name="img32" size="100"><br>
        <label>Đường dẫn hình ảnh 3 - 3 dữ kiện:</label> <input type="text" name="img33" size="100"><br>
        <label>Đáp án: </label> <input type="text" name="acceAns3" size="100"><br>

        <h3 style="text-decoration: underline;">Câu hỏi 4 - Câu hỏi sắp xếp:</h3> <br>
        <label>Câu hỏi:</label> <input type="text" name="acceQues4" size="70"> <br>
        <label>Đường dẫn hình ảnh:</label> <input type="text" name="img4" size="100"><br>
        <label>Đáp án: </label> <input type="text" name="acceAns4" size="100"><br>

        <h2>VỀ ĐÍCH</h2>
        <h3 style="text-decoration: underline">Thí sinh 1:</h3>
        <h4 style="margin-left: 30px">Gói câu hỏi 40 điểm:</h4>
        <label>Câu hỏi 1:</label> <input type="text" name="can1ques1" size="100"><br>
        <label>Đáp án:</label> <input size="100" name="can1ans1"><br>
        <label>Câu hỏi 2:</label> <input type="text" name="can1ques2" size="100"><br>
        <label>Đáp án:</label> <input size="100" name="can1ans2"><br>
        <label>Câu hỏi 3:</label> <input type="text" name="can1ques3" size="100"><br>
        <label>Đáp án:</label> <input size="100" name="can1ans3"><br>
        <h4 style="margin-left: 30px">Gói câu hỏi 60 điểm:</h4>
        <label>Câu hỏi 1:</label> <input type="text" name="can1ques4" size="100"><br>
        <label>Đáp án:</label> <input size="100" name="can1ans4"><br>
        <label>Câu hỏi 2:</label> <input type="text" name="can1ques5" size="100"><br>
        <label>Đáp án:</label> <input size="100" name="can1ans5"><br>
        <label>Câu hỏi 3:</label> <input type="text" name="can1ques6" size="100"><br>
        <label>Đáp án:</label> <input size="100" name="can1ans6"><br>
        <h4 style="margin-left: 30px">Gói câu hỏi 80 điểm:</h4>
        <label>Câu hỏi 1:</label> <input type="text" name="can1ques7" size="100"><br>
        <label>Đáp án:</label> <input size="100" name="can1ans7"><br>
        <label>Câu hỏi 2:</label> <input type="text" name="can1ques8" size="100"><br>
        <label>Đáp án:</label> <input size="100" name="can1ans8"><br>
        <label>Câu hỏi 3:</label> <input type="text" name="can1ques9" size="100"><br>
        <label>Đáp án:</label> <input size="100" name="can1ans9"><br>

        <h3 style="text-decoration: underline">Thí sinh 2:</h3>
        <label>Câu hỏi 1:</label> <input type="text" name="can2ques1" size="100"><br>
        <label>Đáp án:</label> <input size="100" name="can2ans1"><br>
        <label>Câu hỏi 2:</label> <input type="text" name="can2ques2" size="100"><br>
        <label>Đáp án:</label> <input size="100" name="can2ans2"><br>
        <label>Câu hỏi 3:</label> <input type="text" name="can2ques3" size="100"><br>
        <label>Đáp án:</label> <input size="100" name="can2ans3"><br>
        <h4 style="margin-left: 30px">Gói câu hỏi 60 điểm:</h4>
        <label>Câu hỏi 1:</label> <input type="text" name="can2ques4" size="100"><br>
        <label>Đáp án:</label> <input size="100" name="can2ans4"><br>
        <label>Câu hỏi 2:</label> <input type="text" name="can2ques5" size="100"><br>
        <label>Đáp án:</label> <input size="100" name="can2ans5"><br>
        <label>Câu hỏi 3:</label> <input type="text" name="can2ques6" size="100"><br>
        <label>Đáp án:</label> <input size="100" name="can2ans6"><br>
        <h4 style="margin-left: 30px">Gói câu hỏi 80 điểm:</h4>
        <label>Câu hỏi 1:</label> <input type="text" name="can2ques7" size="100"><br>
        <label>Đáp án:</label> <input size="100" name="can2ans7"><br>
        <label>Câu hỏi 2:</label> <input type="text" name="can2ques8" size="100"><br>
        <label>Đáp án:</label> <input size="100" name="can2ans8"><br>
        <label>Câu hỏi 3:</label> <input type="text" name="can2ques9" size="100"><br>
        <label>Đáp án:</label> <input size="100" name="can2ans9"><br>

        <h3 style="text-decoration: underline">Thí sinh 3:</h3>
        <label>Câu hỏi 1:</label> <input type="text" name="can3ques1" size="100"><br>
        <label>Đáp án:</label> <input size="100" name="can3ans1"><br>
        <label>Câu hỏi 2:</label> <input type="text" name="can3ques2" size="100"><br>
        <label>Đáp án:</label> <input size="100" name="can3ans2"><br>
        <label>Câu hỏi 3:</label> <input type="text" name="can3ques3" size="100"><br>
        <label>Đáp án:</label> <input size="100" name="can3ans3"><br>
        <h4 style="margin-left: 30px">Gói câu hỏi 60 điểm:</h4>
        <label>Câu hỏi 1:</label> <input type="text" name="can3ques4" size="100"><br>
        <label>Đáp án:</label> <input size="100" name="can3ans4"><br>
        <label>Câu hỏi 2:</label> <input type="text" name="can3ques5" size="100"><br>
        <label>Đáp án:</label> <input size="100" name="can3ans5"><br>
        <label>Câu hỏi 3:</label> <input type="text" name="can3ques6" size="100"><br>
        <label>Đáp án:</label> <input size="100" name="can3ans6"><br>
        <h4 style="margin-left: 30px">Gói câu hỏi 80 điểm:</h4>
        <label>Câu hỏi 1:</label> <input type="text" name="can3ques7" size="100"><br>
        <label>Đáp án:</label> <input size="100" name="can3ans7"><br>
        <label>Câu hỏi 2:</label> <input type="text" name="can3ques8" size="100"><br>
        <label>Đáp án:</label> <input size="100" name="can3ans8"><br>
        <label>Câu hỏi 3:</label> <input type="text" name="can3ques9" size="100"><br>
        <label>Đáp án:</label> <input size="100" name="can3ans9"><br>
        <h3 style="text-decoration: underline">Thí sinh 4:</h3>
        <h4 style="margin-left: 30px">Gói câu hỏi 40 điểm:</h4>
       <label>Câu hỏi 1:</label> <input type="text" name="can4ques1" size="100"><br>
        <label>Đáp án:</label> <input size="100" name="can4ans1"><br>
        <label>Câu hỏi 2:</label> <input type="text" name="can4ques2" size="100"><br>
        <label>Đáp án:</label> <input size="100" name="can4ans2"><br>
        <label>Câu hỏi 3:</label> <input type="text" name="can4ques3" size="100"><br>
        <label>Đáp án:</label> <input size="100" name="can4ans3"><br>
        <h4 style="margin-left: 30px">Gói câu hỏi 60 điểm:</h4>
        <label>Câu hỏi 1:</label> <input type="text" name="can4ques4" size="100"><br>
        <label>Đáp án:</label> <input size="100" name="can4ans4"><br>
        <label>Câu hỏi 2:</label> <input type="text" name="can4ques5" size="100"><br>
        <label>Đáp án:</label> <input size="100" name="can4ans5"><br>
        <label>Câu hỏi 3:</label> <input type="text" name="can4ques6" size="100"><br>
        <label>Đáp án:</label> <input size="100" name="can4ans6"><br>
        <h4 style="margin-left: 30px">Gói câu hỏi 80 điểm:</h4>
        <label>Câu hỏi 1:</label> <input type="text" name="can4ques7" size="100"><br>
        <label>Đáp án:</label> <input size="100" name="can4ans7"><br>
        <label>Câu hỏi 2:</label> <input type="text" name="can4ques8" size="100"><br>
        <label>Đáp án:</label> <input size="100" name="can4ans8"><br>
        <label>Câu hỏi 3:</label> <input type="text" name="can4ques9" size="100"><br>
        <label>Đáp án:</label> <input size="100" name="can4ans9"><br>

        <h2>CÂU HỎI PHỤ:</h2>
        <label>Câu hỏi phụ 1:</label> <input type="text" name="extra1" size="100">
        Đáp án:<input type="text" name="extraAns1" size="10"> <br>
        <label>Câu hỏi phụ 2:</label> <input type="text" name="extra2" size="100">
        Đáp án:<input type="text" name="extraAns2" size="10"> <br>
        <label>Câu hỏi phụ 3:</label> <input type="text" name="extra3" size="100">
        Đáp án:<input type="text" name="extraAns3" size="10"> <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <input type="submit" style="margin-left: 45%; size: 90px; height: 50px;
     font-weight: bold; background-color: green; color: white" value="HOÀN TẤT NHẬP ĐỀ" name="submit">
    </form>
</div>
</body>
<script>
 /*   var numOfLetters = [0, 0, 0, 0];
    var ans = ["", "", "", ""];
    var start = [0, 0, 0, 0];
    setInterval(function () {
        ans[0] = $('#answer1').val();
        ans[1] = $('#answer2').val();
        ans[2] = $('#answer3').val();
        ans[3] = $('#answer4').val();
        start[0] = $('#start1').val();
        start[1] = $('#start2').val();
        start[2] = $('#start3').val();
        start[3] = $('#start4').val();
    }, 100);
    var app = angular.module('completeRow', []);
    app.controller('control', function ($scope) {
        $scope.endRow1 = {{ans[0].length}};
        $scope.endRow2 = {{ans[1].length}};
        $scope.endRow3 = {{ans[2].length}};
        $scope.endRow4 = {{ans[3].length}};

    });*/
</script>
</html>