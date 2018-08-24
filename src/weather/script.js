// https://developer.yahoo.com/weather/documentation.html#codes

var xmlhttp = new XMLHttpRequest();
var url = 'https://query.yahooapis.com/v1/public/yql?q=select%20*%20from%20weather.forecast%20where%20woeid%20in%20(select%20woeid%20from%20geo.places(1)%20where%20text%3D%22stockholm%2C%20swe%22)&format=json&env=store%3A%2F%2Fdatatables.org%2Falltableswithkeys';

xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        var jsonRes = JSON.parse(this.responseText);
        weatherRes(jsonRes);
    }
};
xmlhttp.open("GET", url, true);
xmlhttp.send();

function weatherRes(arr) {
    var date = new Date();
    var hour = date.getHours();
    var div = document.querySelector('#weather');
    var temp = arr.query.results.channel.item.condition.temp;
    var cond = arr.query.results.channel.item.condition.text;
    var code = arr.query.results.channel.item.condition.code;
	cond = cond.toLowerCase();

    if ( (code == 29 && (hour > 19 || hour < 05)) || (code == 27 && (hour > 19 || hour < 05)) ) {
        window_img = 'window_cloudy_night';
    } else if ( code == 31 && (hour > 19 || hour < 05) ) { 
	    window_img = 'window_clear_night';
	} else if ( hour > 19 || hour < 05 ) { 
        window_img = 'window_clear_night';
    } else if ( 
    	cond == 'sunny' || 
    	cond == 'fair' || 
    	cond == 'hot' || 
    	cond == 'mostly sunny' || 
    	cond == 'clear' 
    ) {
        window_img = 'window_sunny';
    } else if ( cond == 'partly cloudy' ) {
        window_img = 'window_partly_cloudy';
	} else if ( cond == 'partly cloudy' ) {
        window_img = 'window_cloudy';
    } else if ( 
    	cond == 'showers' || 
    	cond == 'thunderstorms' || 
    	cond == 'drizzle' || 
    	cond == 'freezing rain' || 
    	cond == 'thundershowers' || 
    	cond == 'isolated thunderstorms' || 
    	cond == 'scattered thunderstorms' || 
    	cond == 'scattered showers' || 
    	cond == 'severe thunderstorms' || 
    	cond == 'freezing rain' ) {
            window_img = 'window_raining';
    } else if ( 
    	cond == 'snow showers' || 
    	cond == 'scattered snow showers' || 
    	cond == 'heavy snow' || 
    	cond == 'mixed rain and hail' || 
    	cond == 'mixed rain and snow' || 
    	cond == 'snow flurries' || 
    	cond == 'light snow showers' || 
    	cond == 'snow' || 
    	cond == 'hail' || 
    	cond == 'sleet' ) {
            window_img = 'window_snowing';
    } else {
        window_img = 'window_cloudy';
    }
    div.innerHTML = '<img src="src/weather/weather_imgs/' + window_img + '.jpg" >';
    console.log('Temp: ' + temp);
    console.log('Cond: ' + cond);
    console.log('Code: ' + code);
    console.log('Hour: ' + hour);

    //Tempature 
    // 86 f = 30 c 
    // 5 f = -15 c

    ctemp = (temp - 32) * .5556;
    ctemp = Math.floor(ctemp);
    console.log('Temp in C: ' + ctemp);

    if ( temp > 86 ) {
        temp = 100
    }
    if ( temp < 5 ) {
        temp = 1
    }

    var thermometer = document.querySelector('#hotness_white');
    temp = 100 - temp;
    thermometer.style.height = temp + '%';
    
    thermometer.innerHTML = '<span id="ctemp">' + ctemp + '</span>';
}