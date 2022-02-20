<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>成绩信息</title>
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/punishment.css">
</head>
<body>
    <?php include 'controller/showAllScore.php' ?>
    <div class="container">
        <div class="content">
            <div class="header clearfix">
                <div class="top fl">当前位置>成绩信息</div>
              
            </div>
            <div class="main">
                <!--基础信息-->
                <div class="BasicInformation">
                    <div class="title">基础信息</div>
                </div>
                <div class="content clearfix">
                    
                    <div class="reason fl">
                       <table width="300px" height="100px" border="1px">
                       <?php 
                            foreach ($attr as $key) {
                                echo "<tr><th>".$key[0]."</th><th>".$key[1]."</th></tr>";
                            }
                        ?>
                 
                       </table>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>
