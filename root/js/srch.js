    var search_db = [
        {
            keywords: ["oxygen","Oxygen","OXYGEN","O2",],
            result: "https://soumyajitnandi.000webhostapp.com/pages/location2.php"
        },
        {
            keywords: ["doctor","Doctor","DOCTOR","doc","Doc","appointment","Appointment","APPOINTMENT"],
            result: "https://soumyajitnandi.000webhostapp.com/pages/location3.php"
        },
        {
            keywords: ["predict","prediction","Predict","Prediction","Health","HEALTH","health","checkup"],
            result: "https://soumyajitnandi.000webhostapp.com/pages/test.php"
        },
        {
            keywords: ["vaccine","Vaccine","vaccinated","Vccinated" ,"vaccination","Vaccination"],
            result: "https://soumyajitnandi.000webhostapp.com/pages/vaccine.html"
        },
        {
            keywords: ["medicine","Medicine","MEDICINE","drug","Drug","DRUG","tablet","Tablet"],
            result: "https://soumyajitnandi.000webhostapp.com/pages/locationmed.php"
        },
        {
            keywords: ["ambulance","Ambulance"],
            result: "https://soumyajitnandi.000webhostapp.com/pages/ambulance.html"
        },
        {
            keywords: ["social","Social","SOCIAL","help","Help","HELP","Chat","CHAT","chat"],
            result: "https://soumyajitnandi.000webhostapp.com/pages/social.html"
        },
		{
            keywords: ["Aritra","aritra","Arpan","Raktim","raktim","arpan","Soumyajit","soumyajit","Apratim","apratim","Soumya","soumya"],
            result: "https://soumyajitnandi.000webhostapp.com/pages/contact.html"
        },
    ]
	
    function openPage(){
        var x = document.getElementById('search').value;

        for (let index = 0; index < search_db.length; index++) {
            const element = search_db[index];
            for (let j = 0; j < element.keywords.length; j++) {
                if (x.toLowerCase().search(element.keywords[j].toLowerCase()) > -1)
                {
                    window.open(element.result);
                    return;
                }
            }
        }

        console.log("Not Found")
        
        
        // if(x === "disease predict"){
        //     window.open("https://soumyajitnandi.000webhostapp.com/pages/test.php")
        // }
        // else if(x === "oxygen"){
        //     window.open("https://soumyajitnandi.000webhostapp.com/pages/oxygen.html")
        // }
        // else if(x === "doctor"){
        //     window.open("https://soumyajitnandi.000webhostapp.com/pages/appointment.html")
        // }
        // else if(x === "vaccine"){
        //     window.open("https://soumyajitnandi.000webhostapp.com/pages/vaccine.html")
        // }
        // else if(x === "medicine"){
        //     window.open("https://soumyajitnandi.000webhostapp.com/pages/medicine.html")
        // }
        // else if(x === "ambulance"){
        //     window.open("https://soumyajitnandi.000webhostapp.com/pages/ambulance.html")
        // }
        // else if(x === "social"){
        //     window.open("https://soumyajitnandi.000webhostapp.com/pages/social.html")
        // }
        // else{
        //     console.log("Not Found")
        // }
    }