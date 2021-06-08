/* Weather Widget */

window.weatherWidgetConfig =  window.weatherWidgetConfig || [];
window.weatherWidgetConfig.push({
	selector:".weatherWidget",
	apiKey:"M2UZGLXFWC6H9QZ9KXL3GDFTU", //Sign up for your personal key
	location:"Jl. Watu Gede, RT.01/RW.01, Selorejo, Kec. Dau, Malang, Jawa Timur 65151", //Enter an address
	unitGroup:"metric", //"us" or "metric"
	forecastDays:7, //how many days forecast to show
	title:"Jl. Watu Gede, RT.01/RW.01, Selorejo, Kec. Dau, Malang, Jawa Timur 65151", //optional title to show in the 
	showTitle:true, 
	showConditions:true
});

(function() {
var d = document, s = d.createElement('script');
s.src = 'https://www.visualcrossing.com/widgets/forecast-simple/weather-forecast-widget-simple.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();

/* Button to Top */
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
