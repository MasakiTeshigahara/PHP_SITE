<?php
$title = ' ';
include('_header.php');
include('_sidebar.php');
?>

<main class="main">
    <div class="box">
        <section>
            <div class="layout_bukai">
                <div class="img_bukai">
                    <img src="img/baseball_draft_akusyu.png" width="260" height="260" alt="占い師">
                </div>
                <p class="ttl_main">【部会】メンバー振り分け</p>
                <?php
                $numbers_1 = array('小菅', '近田', '池田', '高橋龍', '岸', '高橋麻', '菅野日', '勅使河原', '庄司'); //9
                $numbers_2 = array('小倉', '七田', '高橋慎', '岩永', '古山', '黒沼', '高規', '田代', '吉田', '斎藤', '赤津', '加藤', '川村', '飛塚', '菅野堅', '馮', '飯島'); //17

                shuffle($numbers_1);
                shuffle($numbers_2);
                
                echo "<p class='ttl_group'>１グループ</p>";
                $group1 = [$numbers_1[0], $numbers_1[1], $numbers_2[1], $numbers_2[2], $numbers_2[3], $numbers_2[16]];
                echo "<p class='msg_group'>　$group1[0]、 $group1[1]、 $group1[2]、 $group1[3]、 $group1[4]、$group1[5]</p>";

                echo "<p class='ttl_group'>２グループ</p>";
                $group2 = [$numbers_1[2], $numbers_1[3], $numbers_2[4], $numbers_2[5], $numbers_2[6]];
                echo "<p class='msg_group'>　$group2[0]、 $group2[1]、 $group2[2]、 $group2[3]、 $group2[4]</p>";

                echo "<p class='ttl_group'>３グループ</p>";
                $group3 = [$numbers_1[4], $numbers_1[5], $numbers_2[7], $numbers_2[8], $numbers_2[9]];
                echo "<p class='msg_group'>　$group3[0]、 $group3[1]、 $group3[2]、 $group3[3]、 $group3[4]</p>";

                echo "<p class='ttl_group'>４グループ</p>";
                $group4 = [$numbers_1[6], $numbers_1[7], $numbers_2[10], $numbers_2[11], $numbers_2[12]];
                echo "<p class='msg_group'>　$group4[0]、 $group4[1]、 $group4[2]、 $group4[3]、 $group4[4]</p>";

                echo "<p class='ttl_group'>５グループ</p>";
                $group5 = [$numbers_1[8], $numbers_2[0], $numbers_2[13], $numbers_2[14], $numbers_2[15]];
                echo "<p class='msg_group'>　$group5[0]、 $group5[1]、 $group5[2]、 $group5[3]、 $group5[4]</p>";

                ?>
                </br>
                </br>
                </br>
                <div class="img_bukai">
                    <a href="bukai_start.php" class="btn btn-flat"><span>RETURN</span></a>
                </div>
            </div>
        </section>
    </div>
</main>

</div>
</body>

</html>
</DOCTYPE>