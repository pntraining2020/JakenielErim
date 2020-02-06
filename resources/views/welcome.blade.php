<html>

<head>
    <title>Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</head>

<body id="body" class="container-fluid">
    <div class="col-md-12">
        <div class="col-md-6">
            <div class="card">
                <div class="col-md-12">
                    <select class="custom-select form-control">
                        <option selected>Name</option>
                        <option value="person1">Jakeniel Erim</option>
                        <option value="person2">Raul Flores</option>
                        <option value="person3">Grace Laborada</option>
                        <option value="person4">Mellyne Grace Nadela</option>
                        <option value="person5">Abdul Aziz Mamarinta</option>
                    </select>


                    <div id="div1">
                        <p>Current Time and Date</p>
                        <p id="time"></p>
                        <p id="date"></p>
                    </div>
                    <div>
                        <button type="button" id="clockin" class="btn btn-outline-primary">CLOCK IN</button>
                        <div>TIME:
                            <p id="checktime"></p>
                        </div>
                    </div>
                    <br>
                    <div>
                        <button type="button" class="btn btn-outline-warning">CHECK OUT</button>
                        <div>TIME:
                        <p id="checkouttime"></p></div>
                    </div>
                    <div>
                        <h4>Total Time Worked:</h4>
                        <h4>Hours Left Before TimeOut:</h4>
                        <h4>Total Break Issued:</h4>

                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="col-md-6">
                <div class="card">
                    <center>
                        <h3>BREAK TIME</h3>
                    </center>
                    <button type="button" id ="start" class="btn btn-outline-success">START TIME</button>
                    <div>TIME:
                    <p id="starttime"></p></div>
                    <button type="button" id ="end" class="btn btn-outline-danger">END TIME</button>
                    <div>TIME:
                    <p id="endtime"></p>
                    </div>
                </div>
    </div>







    <script src="https://code.jquery.com/jquery-3.1.0.min.js"
        integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" crossorigin="anonymous">

    </script>

    <script>
    $(document).ready(function() {

        $("#checktime").hide();
        $("#starttime").hide();
        $("#endtime").hide();
        $("#clockin").click(function() {
            $("#checktime").show();
        });
        $("#start").click(function() {
            $("#starttime").show();
        });
        $("#end").click(function() {
            $("#endtime").show();
        });
     
    });
    window.setInterval(ut, 1000);

    function ut() {
        var d = new Date();
        document.getElementById("time").innerHTML = d.toLocaleTimeString();
        document.getElementById("date").innerHTML = d.toLocaleDateString();

        document.getElementById("checktime").innerHTML = d.toLocaleTimeString();
        document.getElementById("starttime").innerHTML = d.toLocaleTimeString();
        document.getElementById("endtime").innerHTML = d.toLocaleTimeString();
    }
    </script>
</body>

</html>

<style>
@import 'https://fonts.googleapis.com/css?family=Nova+Mono|Eczar';

#body {
    background-color: #8AC0DE;
    color: black;
}

#div1 {

    transform: translateY(33%);
}

#time {
    font-family: 'Nova Mono', monospace;
    font-size: 18px;
    text-align: center;
    /* text-shadow: 0px 0px 20px; */
}

#checktime {
    text-align: center;
}

#date {
    font-family: 'Eczar', serif;
    font-size: 15px;
    text-align: center;
    text-shadow: 0px 0px 20px white;
}

.card {
    background-color: white;
    width: 500px;
    margin-left: 50%;
}
</style>