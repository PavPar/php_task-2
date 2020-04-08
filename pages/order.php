<html>

<head>
    <title>Работа</title>
    <meta http-equiv="Content-Type" content="text/html">
    <meta charset="UTF-8">
    <link href="../css/style.css" rel="stylesheet" type="text/css">
    <link href="../css/index.css" rel="stylesheet" type="text/css">
    <?php include("auth-check.php") ?>
    <?php include("order-return.php")?>
</head>

<body topmargin="0" bottommargin="0" rightmargin="0" leftmargin="0" background="../images/back_main.gif">

    <form method="POST" action="./order-data.php">
        <table cellpadding="0" cellspacing="0" border="0" align="center" width="583" height="614">
            <tr>
                <td valign="top" width="583" height="208" background="../images/row1.gif">
                    <div style="margin-left:88px; margin-top:57px "><img src="../images/w1.gif"> </div>
                    <div style="margin-left:50px; margin-top:69px ">
                        <a href="../index.php">Главная<img src="../images/m1.gif" border="0"></a>
                        <img src="../images/spacer.gif" width="20" height="10">
                        <a href="order.php">Заказ<img src="../images/m2.gif" border="0"></a>
                        <img src="../images/spacer.gif" width="5" height="10">
                        <a href="basket.php">Корзина<img src="../images/m3.gif" border="0"></a>
                        <img src="../images/spacer.gif" width="5" height="10">
                        <a href="index-3.php">О компании<img src="../images/m4.gif" border="0"></a>
                        <img src="../images/spacer.gif" width="5" height="10">
                        <a href="index-4.php">Контакты<img src="../images/m5.gif" border="0"></a>

                    </div>
                </td>
            </tr>
            <tr>
                <td valign="top" width="583" height="338" bgcolor="#FFFFFF">
                    <table cellpadding="0" cellspacing="0" border="0">
                        <tr>
                            <td valign="top" height="338" width="42"></td>
                            <td valign="top" height="338" width="492">
                                <table cellpadding="0" cellspacing="0" border="0">
                                    <tr>
                                        <td width="492" valign="top" height="106">

                                            <div style="margin-left:1px; margin-top:2px; margin-right:10px "><br>
                                                <div style="margin-left:5px "><img src="../images/1_p1.gif"
                                                        align="left"></div>
                                                <select id="service_type" name="service_type">
                                                    <option value="service_type-prokat"
                                                        <?php setSetviceType("service_type-prokat")?>>Прокат</option>
                                                    <option value="service_type-sale"
                                                        <?php setSetviceType("service_type-sale")?>>Продажа</option>
                                                    <option value="service_type-lizing"
                                                        <?php setSetviceType("service_type-lizing")?>>Лизинг</option>
                                                </select>
                                            </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="492" valign="top" height="232">
                                            <table cellpadding="0" cellspacing="0" border="0">
                                                <tr>
                                                    <td valign="top" height="232" width="248">
                                                        <div style="margin-left:6px; margin-top:2px; ">
                                                            <img src="../images/hl.gif">
                                                        </div>

                                                        <div class="service__extra">

                                                            <label class="option" for="service__leather">Кожаный салон
                                                                <input type="checkbox" id="service__leather"
                                                                    value="service__extra-leather"
                                                                    name="service__extra-leather"
                                                                    <?php setFlags("service__extra-leather")?>>
                                                            </label>

                                                            <label class="option" for="service__heater">Подогрев сидений
                                                                <input type="checkbox" id="service__heater"
                                                                    value="service__extra-heater"
                                                                    name="service__extra-heater"
                                                                    <?php setFlags("service__extra-heater")?>>
                                                            </label>

                                                            <label class="option" for="service__luke">Люк
                                                                <input type="checkbox" id="service__luke"
                                                                    value="service__extra-luke"
                                                                    name="service__extra-luke"
                                                                    <?php setFlags("service__extra-luke")?>>
                                                            </label>

                                                        </div>



                                                    <td valign="top" height="215" width="1"
                                                        background="../images/tal.gif"
                                                        style="background-repeat:repeat-y"></td>
                                                    <td valign="top" height="215" width="243">
                                                        <div style="margin-left:22px; margin-top:2px; "><img
                                                                src="../images/hl.gif"></div>
                                                        <div style="margin-left:22px; margin-top:7px; "><img
                                                                src="../images/1_w2.gif"></div>
                                                        <div style="margin-left:22px; margin-top:13px; ">
                                                            <div class="user-info">
                                                                <label class="option option_user-info" for="name">Имя :
                                                                    <input id="name" name="user_name"
                                                                        placeholder="Имя пользователя" required
                                                                        type="text"
                                                                        value=<?php setFieldValue("user_name")?>>
                                                                </label>

                                                                <label class="option option_user-info"
                                                                    for="phone">Телефон :
                                                                    <input type="tel" id="phone" name="user_phone"
                                                                        placeholder="Телефон" required
                                                                        value=<?php setFieldValue("user_phone")?>>
                                                                </label>

                                                                <label class="option option_user-info" for="email">Email
                                                                    :
                                                                    <input type="email" id="email" name="user_email"
                                                                        placeholder="E-mail" required
                                                                        value=<?php setFieldValue("user_email")?>>
                                                                </label>
                                                            </div>
                                                            <br><br><br><br>
                                                            <div
                                                                style="margin-left:67px; margin-top:7px; margin-right:10px ">
                                                                <img src="../images/pointer.gif"><a href="#"><img
                                                                        src="../images/read_more.gif" border="0"></a>
                                                            </div>
                                                        </div>
                                                        <div style="margin-left:22px; margin-top:16px; "><img
                                                                src="../images/hl.gif"></div>
                                                        <div style="margin-left:22px; margin-top:7px; "><img
                                                                src="../images/1_w4.gif"></div>
                                                        <div style="margin-left:22px; margin-top:9px; ">
                                                            <input type="submit" value="Далее">
                                                        </div>
                                                        </div>

                                                        <div
                                                            style="margin-left:0px; margin-top:7px; margin-right:10px ">
                                                            <img src="../images/pointer.gif"><a href="#"><img
                                                                    src="../images/read_more.gif" border="0"></a></div>


                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <td valign="top" height="338" width="49"></td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td valign="top" width="583" height="68" background="../images/row3.gif">
                    <div style="margin-left:51px; margin-top:31px ">
                        <a href="../index.php"><img src="../images/p1.gif" border="0"></a>
                        <img src="../images/spacer.gif" width="26" height="9">
                        <a href="#"><img src="../images/p2.gif" border="0"></a>
                        <img src="../images/spacer.gif" width="30" height="9">
                        <a href="#"><img src="../images/p3.gif" border="0"></a>
                        <img src="../images/spacer.gif" width="149" height="9">
                        <a href="index-5.php"><img src="../images/copyright.gif" border="0"></a>
                    </div>
                </td>
            </tr>

        </table>
    </form>
</body>

</html>