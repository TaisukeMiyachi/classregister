<?php
///db接続/////////////////////////////////////////////////////////////
$dbn ='mysql:dbname=student_db;charset=utf8mb4;port=3306;host=localhost';
$user = 'root';
$pwd = '';

try {
  $pdo = new PDO($dbn, $user, $pwd);
} catch (PDOException $e) {
  echo json_encode(["db error" => "{$e->getMessage()}"]);
  exit();
};

///SQL作成(1年3組の生徒を出席番号順に)
$sql = 'SELECT * FROM `alldatas` WHERE grade = 1 & class = 3 ORDER BY student_number ASC';
$stmt = $pdo->prepare($sql);

try {
  $status = $stmt->execute();
} catch (PDOException $e) {
  echo json_encode(["sql error" => "{$e->getMessage()}"]);
  exit();
}

/// SQL実行 クラス毎の配列作成
$students = $stmt->fetchAll(PDO::FETCH_ASSOC);

// echo'<pre>';
// var_dump($students);
// '</pre>';
// exit();

// $class1_1 = [];

// foreach ($students as $student) {
//     if($student['grade'] == '1' && $student['class'] == '1' ){
//         $class1_1[] = $student;
//     }
// }
$json_students = json_encode($students);

?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <style>
        html {
            height: 100%;
        }

        body {
            min-width: 80vw;
            height: 100%;
        }

        #row_1 {
            display: flex;
            justify-content: space-around;
            align-items: center;
            flex-wrap: wrap;
        }

        #header{
            display: flex;
            justify-content: space-around;
            align-items: center;
        }

        #student_data1,
        #student_data2,
        #student_data3,
        #student_data4,
        #student_data5,
        #student_data6,
        #student_data7,
        #student_data8,
        #student_data9,
        #student_data10,
        #student_data11,
        #student_data12,
        #student_data13,
        #student_data14,
        #student_data15,
        #student_data16,
        #student_data17,
        #student_data18,
        #student_data19,
        #student_data20,
        #student_data21,
        #student_data22,
        #student_data23,
        #student_data24,
        #student_data25,
        #student_data26,
        #student_data27,
        #student_data28,
        #student_data29,
        #student_data30,
        #student_data31,
        #student_data32,
        #student_data33,
        #student_data34,
        #student_data35,
        #student_data36,
        #student_data37,
        #student_data38,
        #student_data39,
        #student_data40 {
            width: 200px;
            height: 250px;
            display: flex;
            flex-direction: column;
        }

        .student_number {
            width: 30%;
            height: 50px;
            border: solid 1px #666666;
            display: flex;
            justify-content: center;
            align-items: center;
        }


        .student_name {
            width: 70%;
            height: 50px;
            border: solid 1px #666666;
            display: flex;
            justify-content: center;
            align-items: center;
        }


        #student_text_data {
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
    <title>Document</title>
</head>

<body>
    <div id="header">
    <h1>1年3組　担任：上田順一</h1>
    <a href="input.php">登録画面へ</a>
    </div>
    <fieldset>
        <div id="row_1">
            <div id="student_data1">
                <img width=auto height="200px">
                <div id="student_text_data">
                    <div class="student_number">1</div>
                    <div class="student_name"></div>
                </div>
            </div>
            <div id="student_data2">
                <img width=auto height="200px">
                <div id="student_text_data">
                    <div class="student_number">2</div>
                    <div class="student_name"></div>
                </div>
            </div>
            <div id="student_data3">
                <img width=auto height="200px">
                <div id="student_text_data">
                    <div class="student_number">3</div>
                    <div class="student_name"></div>
                </div>
            </div>
            <div id="student_data4">
                <img width=auto height="200px">
                <div id="student_text_data">
                    <div class="student_number">4</div>
                    <div class="student_name"></div>
                </div>
            </div>
            <div id="student_data5">
                <img width=auto height="200px">
                <div id="student_text_data">
                    <div class="student_number">5</div>
                    <div class="student_name"></div>
                </div>
            </div>
            <div id="student_data6">
                <img width=auto height="200px">
                <div id="student_text_data">
                    <div class="student_number">6</div>
                    <div class="student_name"></div>
                </div>
            </div>
            <div id="student_data7">
                <img width=auto height="200px">
                <div id="student_text_data">
                    <div class="student_number">7</div>
                    <div class="student_name"></div>
                </div>
            </div>
            <div id="student_data8">
                <img width=auto height="200px">
                <div id="student_text_data">
                    <div class="student_number">8</div>
                    <div class="student_name"></div>
                </div>
            </div>
            <div id="student_data9">
                <img width=auto height="200px">
                <div id="student_text_data">
                    <div class="student_number">9</div>
                    <div class="student_name"></div>
                </div>
            </div>
            <div id="student_data10">
                <img width=auto height="200px">
                <div id="student_text_data">
                    <div class="student_number">10</div>
                    <div class="student_name"></div>
                </div>
            </div>
            <div id="student_data11">
                <img width=auto height="200px">
                <div id="student_text_data">
                    <div class="student_number">11</div>
                    <div class="student_name"></div>
                </div>
            </div>
            <div id="student_data12">
                <img width=auto height="200px">
                <div id="student_text_data">
                    <div class="student_number">12</div>
                    <div class="student_name"></div>
                </div>
            </div>
            <div id="student_data13">
                <img width=auto height="200px">
                <div id="student_text_data">
                    <div class="student_number">13</div>
                    <div class="student_name"></div>
                </div>
            </div>
            <div id="student_data14">
                <img width=auto height="200px">
                <div id="student_text_data">
                    <div class="student_number">14</div>
                    <div class="student_name"></div>
                </div>
            </div>
            <div id="student_data15">
                <img width=auto height="200px">
                <div id="student_text_data">
                    <div class="student_number">15</div>
                    <div class="student_name"></div>
                </div>
            </div>
            <div id="student_data16">
                <img width=auto height="200px">
                <div id="student_text_data">
                    <div class="student_number">16</div>
                    <div class="student_name"></div>
                </div>
            </div>
            <div id="student_data17">
                <img width=auto height="200px">
                <div id="student_text_data">
                    <div class="student_number">17</div>
                    <div class="student_name"></div>
                </div>
            </div>
            <div id="student_data18">
                <img width=auto height="200px">
                <div id="student_text_data">
                    <div class="student_number">18</div>
                    <div class="student_name"></div>
                </div>
            </div>
            <div id="student_data19">
                <img width=auto height="200px">
                <div id="student_text_data">
                    <div class="student_number">19</div>
                    <div class="student_name"></div>
                </div>
            </div>
            <div id="student_data20">
                <img width=auto height="200px">
                <div id="student_text_data">
                    <div class="student_number">20</div>
                    <div class="student_name"></div>
                </div>
            </div>
            <div id="student_data21">
                <img width=auto height="200px">
                <div id="student_text_data">
                    <div class="student_number">21</div>
                    <div class="student_name"></div>
                </div>
            </div>
            <div id="student_data22">
                <img width=auto height="200px">
                <div id="student_text_data">
                    <div class="student_number">22</div>
                    <div class="student_name"></div>
                </div>
            </div>
            <div id="student_data23">
                <img width=auto height="200px">
                <div id="student_text_data">
                    <div class="student_number">23</div>
                    <div class="student_name"></div>
                </div>
            </div>
            <div id="student_data24">
                <img width=auto height="200px">
                <div id="student_text_data">
                    <div class="student_number">24</div>
                    <div class="student_name"></div>
                </div>
            </div>
            <div id="student_data25">
                <img width=auto height="200px">
                <div id="student_text_data">
                    <div class="student_number">25</div>
                    <div class="student_name"></div>
                </div>
            </div>
            <div id="student_data26">
                <img width=auto height="200px">
                <div id="student_text_data">
                    <div class="student_number">26</div>
                    <div class="student_name"></div>
                </div>
            </div>
            <div id="student_data27">
                <img width=auto height="200px">
                <div id="student_text_data">
                    <div class="student_number">27</div>
                    <div class="student_name"></div>
                </div>
            </div>
            <div id="student_data28">
                <img width=auto height="200px">
                <div id="student_text_data">
                    <div class="student_number">28</div>
                    <div class="student_name"></div>
                </div>
            </div>
            <div id="student_data29">
                <img width=auto height="200px">
                <div id="student_text_data">
                    <div class="student_number">29</div>
                    <div class="student_name"></div>
                </div>
            </div>
            <div id="student_data30">
                <img width=auto height="200px">
                <div id="student_text_data">
                    <div class="student_number">30</div>
                    <div class="student_name"></div>
                </div>
            </div>
            <div id="student_data31">
                <img width=auto height="200px">
                <div id="student_text_data">
                    <div class="student_number">31</div>
                    <div class="student_name"></div>
                </div>
            </div>
            <div id="student_data32">
                <img width=auto height="200px">
                <div id="student_text_data">
                    <div class="student_number">32</div>
                    <div class="student_name"></div>
                </div>
            </div>
            <div id="student_data33">
                <img width=auto height="200px">
                <div id="student_text_data">
                    <div class="student_number">33</div>
                    <div class="student_name"></div>
                </div>
            </div>
            <div id="student_data34">
                <img width=auto height="200px">
                <div id="student_text_data">
                    <div class="student_number">34</div>
                    <div class="student_name"></div>
                </div>
            </div>
            <div id="student_data35">
                <img width=auto height="200px">
                <div id="student_text_data">
                    <div class="student_number">35</div>
                    <div class="student_name"></div>
                </div>
            </div>
            <div id="student_data36">
                <img width=auto height="200px">
                <div id="student_text_data">
                    <div class="student_number">36</div>
                    <div class="student_name"></div>
                </div>
            </div>
            <div id="student_data37">
                <img width=auto height="200px">
                <div id="student_text_data">
                    <div class="student_number">37</div>
                    <div class="student_name"></div>
                </div>
            </div>
            <div id="student_data38">
                <img width=auto height="200px">
                <div id="student_text_data">
                    <div class="student_number">38</div>
                    <div class="student_name"></div>
                </div>
            </div>
            <div id="student_data39">
                <img width=auto height="200px">
                <div id="student_text_data">
                    <div class="student_number">39</div>
                    <div class="student_name"></div>
                </div>
            </div>
            <div id="student_data40">
                <img width=auto height="200px">
                <div id="student_text_data">
                    <div class="student_number">40</div>
                    <div class="student_name"></div>
                </div>
            </div>
        </div>
    </fieldset>
    <script>

    const students = <?php echo $json_students ?>;
  
    //空欄へ生徒データを追加（要素入れ替え）
    const len = students.length;

    console.log(students)

    for (let i = 0; i < len; i++) {
        if (students[i]["student_number"] === 1) {
            $(function () {
                $('#student_data1').replaceWith(`<div id="student_data1"><img src="images/${students[i]["img_name"]}" width = auto height = "200px" ><div id="student_text_data"><div class="student_number">1</div><div class="student_name">${students[i]["name"]}</div></div></div >`);
            });
        } else if (students[i]["student_number"] === 2) {
            $(function () {
                $('#student_data2').replaceWith(`<div id="student_data2"><img src="images/${students[i]["img_name"]}" width = auto height = "200px" ><div id="student_text_data"><div class="student_number">2</div><div class="student_name">${students[i]["name"]}</div></div></div >`);
            });
        } else if (students[i]["student_number"] === 3) {
            $(function () {
                $('#student_data3').replaceWith(`<div id="student_data3"><img src="images/${students[i]["img_name"]}" width = auto height = "200px" ><div id="student_text_data"><div class="student_number">3</div><div class="student_name">${students[i]["name"]}</div></div></div >`);
            });
        } else if (students[i]["student_number"] === 4) {
            $(function () {
                $('#student_data4').replaceWith(`<div id="student_data4"><img src="images/${students[i]["img_name"]}" width = auto height = "200px" ><div id="student_text_data"><div class="student_number">4</div><div class="student_name">${students[i]["name"]}</div></div></div >`);
            });
        } else if (students[i]["student_number"] === 5) {
            $(function () {
                $('#student_data5').replaceWith(`<div id="student_data5"><img src="images/${students[i]["img_name"]}" width = auto height = "200px" ><div id="student_text_data"><div class="student_number">5</div><div class="student_name">${students[i]["name"]}</div></div></div >`);
            });
        } else if (students[i]["student_number"] === 6) {
            $(function () {
                $('#student_data6').replaceWith(`<div id="student_data6"><img src="images/${students[i]["img_name"]}" width = auto height = "200px" ><div id="student_text_data"><div class="student_number">6</div><div class="student_name">${students[i]["name"]}</div></div></div >`);
            });
        } else if (students[i]["student_number"] === 7) {
            $(function () {
                $('#student_data7').replaceWith(`<div id="student_data7"><img src="images/${students[i]["img_name"]}" width = auto height = "200px" ><div id="student_text_data"><div class="student_number">7</div><div class="student_name">${students[i]["name"]}</div></div></div >`);
            });
        } else if (students[i]["student_number"] === 8) {
            $(function () {
                $('#student_data8').replaceWith(`<div id="student_data8"><img src="images/${students[i]["img_name"]}" width = auto height = "200px" ><div id="student_text_data"><div class="student_number">8</div><div class="student_name">${students[i]["name"]}</div></div></div >`);
            });
        } else if (students[i]["student_number"] === 9) {
            $(function () {
                $('#student_data9').replaceWith(`<div id="student_data9"><img src="images/${students[i]["img_name"]}" width = auto height = "200px" ><div id="student_text_data"><div class="student_number">9</div><div class="student_name">${students[i]["name"]}</div></div></div >`);
            });
        } else if (students[i]["student_number"] === 10) {
            $(function () {
                $('#student_data10').replaceWith(`<div id="student_data10"><img src="images/${students[i]["img_name"]}" width = auto height = "200px" ><div id="student_text_data"><div class="student_number">10</div><div class="student_name">${students[i]["name"]}</div></div></div >`);
            });
        } else if (students[i]["student_number"] === 11) {
            $(function () {
                $('#student_data11').replaceWith(`<div id="student_data11"><img src="images/${students[i]["img_name"]}" width = auto height = "200px" ><div id="student_text_data"><div class="student_number">11</div><div class="student_name">${students[i]["name"]}</div></div></div >`);
            });
        } else if (students[i]["student_number"] === 12) {
            $(function () {
                $('#student_data12').replaceWith(`<div id="student_data12"><img src="images/${students[i]["img_name"]}" width = auto height = "200px" ><div id="student_text_data"><div class="student_number">12</div><div class="student_name">${students[i]["name"]}</div></div></div >`);
            });
        } else if (students[i]["student_number"] === 13) {
            $(function () {
                $('#student_data13').replaceWith(`<div id="student_data13"><img src="images/${students[i]["img_name"]}" width = auto height = "200px" ><div id="student_text_data"><div class="student_number">13</div><div class="student_name">${students[i]["name"]}</div></div></div >`);
            });
        } else if (students[i]["student_number"] === 14) {
            $(function () {
                $('#student_data14').replaceWith(`<div id="student_data14"><img src="images/${students[i]["img_name"]}" width = auto height = "200px" ><div id="student_text_data"><div class="student_number">14</div><div class="student_name">${students[i]["name"]}</div></div></div >`);
            });
        } else if (students[i]["student_number"] === 15) {
            $(function () {
                $('#student_data15').replaceWith(`<div id="student_data15"><img src="images/${students[i]["img_name"]}" width = auto height = "200px" ><div id="student_text_data"><div class="student_number">15</div><div class="student_name">${students[i]["name"]}</div></div></div >`);
            });
        } else if (students[i]["student_number"] === 16) {
            $(function () {
                $('#student_data16').replaceWith(`<div id="student_data16"><img src="images/${students[i]["img_name"]}" width = auto height = "200px" ><div id="student_text_data"><div class="student_number">16</div><div class="student_name">${students[i]["name"]}</div></div></div >`);
            });
        } else if (students[i]["student_number"] === 17) {
            $(function () {
                $('#student_data17').replaceWith(`<div id="student_data17"><img src="images/${students[i]["img_name"]}" width = auto height = "200px" ><div id="student_text_data"><div class="student_number">17</div><div class="student_name">${students[i]["name"]}</div></div></div >`);
            });
        } else if (students[i]["student_number"] === 18) {
            $(function () {
                $('#student_data18').replaceWith(`<div id="student_data18"><img src="images/${students[i]["img_name"]}" width = auto height = "200px" ><div id="student_text_data"><div class="student_number">18</div><div class="student_name">${students[i]["name"]}</div></div></div >`);
            });
        } else if (students[i]["student_number"] === 19) {
            $(function () {
                $('#student_data19').replaceWith(`<div id="student_data19"><img src="images/${students[i]["img_name"]}" width = auto height = "200px" ><div id="student_text_data"><div class="student_number">19</div><div class="student_name">${students[i]["name"]}</div></div></div >`);
            });
        } else if (students[i]["student_number"] === 20) {
            $(function () {
                $('#student_data20').replaceWith(`<div id="student_data20"><img src="images/${students[i]["img_name"]}" width = auto height = "200px" ><div id="student_text_data"><div class="student_number">20</div><div class="student_name">${students[i]["name"]}</div></div></div >`);
            });
        } else if (students[i]["student_number"] === 21) {
            $(function () {
                $('#student_data21').replaceWith(`<div id="student_data21"><img src="images/${students[i]["img_name"]}" width = auto height = "200px" ><div id="student_text_data"><div class="student_number">21</div><div class="student_name">${students[i]["name"]}</div></div></div >`);
            });
        } else if (students[i]["student_number"] === 22) {
            $(function () {
                $('#student_data22').replaceWith(`<div id="student_data22"><img src="images/${students[i]["img_name"]}" width = auto height = "200px" ><div id="student_text_data"><div class="student_number">22</div><div class="student_name">${students[i]["name"]}</div></div></div >`);
            });
        } else if (students[i]["student_number"] === 23) {
            $(function () {
                $('#student_data23').replaceWith(`<div id="student_data23"><img src="images/${students[i]["img_name"]}" width = auto height = "200px" ><div id="student_text_data"><div class="student_number">23</div><div class="student_name">${students[i]["name"]}</div></div></div >`);
            });
        } else if (students[i]["student_number"] === 24) {
            $(function () {
                $('#student_data24').replaceWith(`<div id="student_data24"><img src="images/${students[i]["img_name"]}" width = auto height = "200px" ><div id="student_text_data"><div class="student_number">24</div><div class="student_name">${students[i]["name"]}</div></div></div >`);
            });
        } else if (students[i]["student_number"] === 25) {
            $(function () {
                $('#student_data25').replaceWith(`<div id="student_data25"><img src="images/${students[i]["img_name"]}" width = auto height = "200px" ><div id="student_text_data"><div class="student_number">25</div><div class="student_name">${students[i]["name"]}</div></div></div >`);
            });
        } else if (students[i]["student_number"] === 26) {
            $(function () {
                $('#student_data26').replaceWith(`<div id="student_data26"><img src="images/${students[i]["img_name"]}" width = auto height = "200px" ><div id="student_text_data"><div class="student_number">26</div><div class="student_name">${students[i]["name"]}</div></div></div >`);
            });
        } else if (students[i]["student_number"] === 27) {
            $(function () {
                $('#student_data27').replaceWith(`<div id="student_data27"><img src="images/${students[i]["img_name"]}" width = auto height = "200px" ><div id="student_text_data"><div class="student_number">27</div><div class="student_name">${students[i]["name"]}</div></div></div >`);
            });
        } else if (students[i]["student_number"] === 28) {
            $(function () {
                $('#student_data28').replaceWith(`<div id="student_data28"><img src="images/${students[i]["img_name"]}" width = auto height = "200px" ><div id="student_text_data"><div class="student_number">28</div><div class="student_name">${students[i]["name"]}</div></div></div >`);
            });
        } else if (students[i]["student_number"] === 29) {
            $(function () {
                $('#student_data29').replaceWith(`<div id="student_data29"><img src="images/${students[i]["img_name"]}" width = auto height = "200px" ><div id="student_text_data"><div class="student_number">29</div><div class="student_name">${students[i]["name"]}</div></div></div >`);
            });
        } else if (students[i]["student_number"] === 30) {
            $(function () {
                $('#student_data30').replaceWith(`<div id="student_data30"><img src="images/${students[i]["img_name"]}" width = auto height = "200px" ><div id="student_text_data"><div class="student_number">30</div><div class="student_name">${students[i]["name"]}</div></div></div >`);
            });
        } else if (students[i]["student_number"] === 31) {
            $(function () {
                $('#student_data31').replaceWith(`<div id="student_data31"><img src="images/${students[i]["img_name"]}" width = auto height = "200px" ><div id="student_text_data"><div class="student_number">31</div><div class="student_name">${students[i]["name"]}</div></div></div >`);
            });
        } else if (students[i]["student_number"] === 32) {
            $(function () {
                $('#student_data32').replaceWith(`<div id="student_data32"><img src="images/${students[i]["img_name"]}" width = auto height = "200px" ><div id="student_text_data"><div class="student_number">32</div><div class="student_name">${students[i]["name"]}</div></div></div >`);
            });
        } else if (students[i]["student_number"] === 33) {
            $(function () {
                $('#student_data33').replaceWith(`<div id="student_data33"><img src="images/${students[i]["img_name"]}" width = auto height = "200px" ><div id="student_text_data"><div class="student_number">33</div><div class="student_name">${students[i]["name"]}</div></div></div >`);
            });
        } else if (students[i]["student_number"] === 34) {
            $(function () {
                $('#student_data34').replaceWith(`<div id="student_data34"><img src="images/${students[i]["img_name"]}" width = auto height = "200px" ><div id="student_text_data"><div class="student_number">34</div><div class="student_name">${students[i]["name"]}</div></div></div >`);
            });
        } else if (students[i]["student_number"] === 35) {
            $(function () {
                $('#student_data35').replaceWith(`<div id="student_data35"><img src="images/${students[i]["img_name"]}" width = auto height = "200px" ><div id="student_text_data"><div class="student_number">35</div><div class="student_name">${students[i]["name"]}</div></div></div >`);
            });
        } else if (students[i]["student_number"] === 36) {
            $(function () {
                $('#student_data36').replaceWith(`<div id="student_data36"><img src="images/${students[i]["img_name"]}" width = auto height = "200px" ><div id="student_text_data"><div class="student_number">36</div><div class="student_name">${students[i]["name"]}</div></div></div >`);
            });
        } else if (students[i]["student_number"] === 37) {
            $(function () {
                $('#student_data37').replaceWith(`<div id="student_data37"><img src="images/${students[i]["img_name"]}" width = auto height = "200px" ><div id="student_text_data"><div class="student_number">37</div><div class="student_name">${students[i]["name"]}</div></div></div >`);
            });
        } else if (students[i]["student_number"] === 38) {
            $(function () {
                $('#student_data38').replaceWith(`<div id="student_data38"><img src="images/${students[i]["img_name"]}" width = auto height = "200px" ><div id="student_text_data"><div class="student_number">38</div><div class="student_name">${students[i]["name"]}</div></div></div >`);
            });
        } else if (students[i]["student_number"] === 39) {
            $(function () {
                $('#student_data39').replaceWith(`<div id="student_data39"><img src="images/${students[i]["img_name"]}" width = auto height = "200px" ><div id="student_text_data"><div class="student_number">39</div><div class="student_name">${students[i]["name"]}</div></div></div >`);
            });
        } else if (students[i]["student_number"] === 40) {
            $(function () {
                $('#student_data40').replaceWith(`<div id="student_data40"><img src="images/${students[i]["img_name"]}" width = auto height = "200px" ><div id="student_text_data"><div class="student_number">40</div><div class="student_name">${students[i]["name"]}</div></div></div >`);
            });
        }
    }

</script>
</body>

</html>