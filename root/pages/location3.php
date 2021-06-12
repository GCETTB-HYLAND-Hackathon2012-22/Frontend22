
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>Document</title>
    </head>
    <body>
        <form action="appointment.php" method="POST" name="frm1">
            <input type="hidden" name="longitude" id="getlon" />
            <input type="hidden" name="latitude" id="getlat" />
        </form>

    <script>
    document.addEventListener('DOMContentLoaded', () => {
    pageLoad();
});

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition, positionError);
    }
}

function showPosition(position) {
    console.log(position);
    document.getElementById('getlat').value = position.coords.latitude;
    document.getElementById('getlon').value = position.coords.longitude;
    lon = document.getElementById('getlon').value;
    lat = document.getElementById('getlat').value;

    document.frm1.submit(); // here the form is submit
}

function positionError(error) {
    if (error.PERMISSION_DENIED) alert('Please accept geolocation');
    hideLoadingDiv();
    showError('Geolocation is not enabled. Please enable to use this feature');
}

function pageLoad() {
    getLocation();
}
        </script>
<?php
// echo("<script>location.href = "."'results.php';</script>");
?>

    </body>
</html>
