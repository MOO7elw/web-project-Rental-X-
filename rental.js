      document.getElementById('rentalForm').addEventListener('submit', function(event) {
        event.preventDefault();
        var name = document.getElementById('name').value;
        var car = document.getElementById('car').value;
        alert('Thank you, ' + name + '. You have selected the ' + car + '.');
      });