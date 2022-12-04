<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Bus Ticketing System</title>
    <link rel="stylesheet" href="cssfile/nav.css">
    <link rel="stylesheet" href="cssfile/footer_l.css">
    <link rel="stylesheet" href="cssfile/contact_us.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />


    <style type="text/css">
    body {
        padding: 0;
        margin: 0;
        line-height: 1.5;
        box-sizing: border-box;
        color: rgba(248, 248, 248, 0.938);
        background: #373d65;
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;

    }
    </style>

</head>

<body>

    <?php include("nav.php");
             ?>


    <section id="fancy-form">
        <div class="container">
            <div class="form-sections">
               

                <!-- form right -->
                <div class="Form-right">
                    <h1>Feedback</h1>
                    <div class="line"></div>
                    <!-- form -->
                    <form action="" method="post">
                        <h5>NAME</h5>
                        <input type="text"><br><br>
                        <h5>EMAIL</h5>
                        <input type="email"><br><br>
                        <h5>PHONE</h5>
                        <input type="number"><br><br>
                        <h5>YOUR Feedback</h5>
                        <textarea name="" id="" cols="50" rows="7"></textarea><br>
                        <button>Send</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php include("footer.php");
             ?>


</body>

</html>