<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Alarm Clock</title>
    <!-- custom stylesheet -->
    <script src="../public/js/reveil.js" type="text/javascript"></script>
    <link rel="stylesheet" href="../public/css/reveil.css" type="text/css" />
    <!-- google font ::  Orbitron -->
<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500&display=swap" rel="stylesheet">

<!-- font awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <?php require_once('header.php'); ?>
    <main >
    <!-- LOCAL CLOCK CONTAINER -->
    <div class="container">
        <div class="clock-body">
            <div id="clock" ></div>
        </div>
    </div>
    <!-- SELECT ALARM TIME FORM -->
    <div class="container">
        <div class="row">
        <form>
            <div class="input_container">
                <!-- input label -->
                <p class="label">Set Alarm</p>
                <!-- time input field -->
                <div class="alarm_clock  ">
                    <input id="alarm_input" type="datetime-local" step="2"  required />
                </div>
                <!-- submit button  -->
                <div class="submit_time">
                    <button id="submit_alarm_time" type="submit"><i class="fas fa-plus-circle"> </i>  Add Alarm</button>
                </div>
                <div class="submit_message">
                    <input type="text" id="message">
                </div>
            </div>
        </form>
        </div>
        <!-- form end -->
    </div>
    <!--  alarm list container -->
    <div class="container">
        <h3 class="label">Alarms</h3>
        <div class="alarms_list_container">
        <ul id="alarms_ul" class="fa-ul">
        </ul>
        </div>
        <!-- end list container -->
    </div>
    </main>
    <?php require_once('footer.php'); ?>
    </body>
</html>