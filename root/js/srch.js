    function openPage(){
        var x = document.getElementById('search').value;
        if(x === "disease predict"){
            window.open("https://soumyajitnandi.000webhostapp.com/pages/test.php")
        }
        else if(x === "oxygen"){
            window.open("https://soumyajitnandi.000webhostapp.com/pages/oxygen.html")
        }
        else if(x === "doctor"){
            window.open("https://soumyajitnandi.000webhostapp.com/pages/appointment.html")
        }
        else if(x === "vaccine"){
            window.open("https://soumyajitnandi.000webhostapp.com/pages/vaccine.html")
        }
        else if(x === "medicine"){
            window.open("https://soumyajitnandi.000webhostapp.com/pages/medicine.html")
        }
        else if(x === "ambulance"){
            window.open("https://soumyajitnandi.000webhostapp.com/pages/ambulance.html")
        }
        else if(x === "social"){
            window.open("https://soumyajitnandi.000webhostapp.com/pages/social.html")
        }
        else{
            console.log("Not Found")
        }
    }