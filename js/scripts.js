
function init() {
  var vm = new Vue({ 
    el: '#services', 

    data: { 
      cities: window.cities,
      services: window.services,
      selectedCity: "", 
      selectedService: ""
    }, 

    methods:{ 
      onChange: function(service) { 
        if(service.cityId == this.selectedCity)  { 
          return true
        } 
        return false
      }   
    }
  });
}