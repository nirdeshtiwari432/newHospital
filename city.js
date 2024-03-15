  document.getElementById('hospitalForm').addEventListener('submit', function(event) {
        event.preventDefault();
        var city = document.getElementById('city').value;
        displayHospitals(city);
    });

    function displayHospitals(city) {
        var hospitalListDiv = document.getElementById('hospitalList');
        var selectedCitySpan = document.getElementById('selectedCity');
        var hospitalsUl = document.getElementById('hospitals');
        
        // Clear previous data
        hospitalsUl.innerHTML = '';

        // Mock data - Replace with real data fetching logic
        var hospitals = getHospitalsForCity(city);

        // Display hospitals
        if (hospitals.length > 0) {
            selectedCitySpan.textContent = city;
            hospitalListDiv.style.display = 'block';
            hospitals.forEach(function(hospital) {
                var li = document.createElement('li');
                li.textContent = hospital;
                hospitalsUl.appendChild(li);
            });
        } else {
            hospitalListDiv.style.display = 'none';
            alert('No hospitals found in ' + city);
        }
    }

    function getHospitalsForCity(city) {
        // Mock data - Replace with real data fetching logic
        if (city.toLowerCase() === 'new york') {
            window.location.href = "hospitalList.html";
            //return ['Hospital A', 'Hospital B', 'Hospital C'];
        } else if (city.toLowerCase() === 'los angeles') {
            return ['Hospital X', 'Hospital Y', 'Hospital Z'];
        } else {
            return [];
        }
    }

