<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="headerstyle.css">
    <link rel="stylesheet" type="text/css" href="bodycon.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <title>Document</title>
</head>
<body>
    <div class="sidebar-header">
        <header class="header-container">
            <div class="sidebar">
                <span class="sidebarspan"></span>
                <span class="sidebarspan"></span>
                <span class="sidebarspan"></span>
            </div>

            <div class="logo">
                <h1>cvDragon</h1>
            </div>

            <div class="settings">
                <i class="fa fa-cogs fa-2x" aria-hidden="true"></i>
            </div> 
        </header>
    </div>


    <div class="body-container">
        <div class="col1"></div>

        <div class="left-section">
            <ul class="list-option">
                <h2><li><a href="">Basic info</a></li></h2>
                <h2><li><a href="">Website link</a></li></h2>
                <h2><li><a href="">Placement Detail</a></li></h2>
                <h2><li><a href="">Student Update</a></li></h2>
                <h2><li><a href="">TPO Details</a></li></h2>
            </ul>
        </div>

        <div class="right-section">
            <div class="right basicinfo">
                <form action="">
                    <div class="institute-name">
                    <label for="">Institute Name:</label>
                    <input type="text">
                    </div>

                    <div class="contact-detail">
                    <label for="">Contact Details:</label>
                    <input type="text">
                    </div>

                    <div class="photo">
                    <label for="">Uplaod Photo:</label>
                    <input type="file" name="pic" accept="image/*">
                    </div>
                    <button>Update</button>
                </form>
            </div>

            <div class="right tpodetails">
                <form action="">
                    <div class="tpo-name">
                    <label for="">TPO Name:</label>
                    <input type="text">
                    </div>

                    <div class="contact-detail">
                    <label for="">Contact Details:</label>
                    <input type="text">
                    </div>

                    <div class="photo">
                    <label for="">Uplaod Photo:</label>
                    <input type="file" name="pic" accept="image/*">
                    </div>
                    <button>Update</button>
                </form>
            </div>
        </div>

        <div class="col1"></div>
    </div>
    <!-- end of body container -->

    <script src="script.js">
        $('.right').css('display','none');
    </script>
</body>
</html>