var SIMULATE_DATA = 2000;//0 = use real data;
/*********
MAP
**********/
var map;
function initMap() {
	map = new google.maps.Map(document.getElementById('map'), {
		center: {lat: -14.2392976, lng: -53.1805017},
		zoom: 4,
		streetViewControl: false,
		mapTypeControl: false,
		styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]
	});
}

var markers = [];
function initMarkers(){
	for(var i = 0; i< data.length; i++){
		var marker = new google.maps.Marker({
			map: map,
			icon: TYPE_ICONS[data[i].type],
			position: data[i].position,
			index: i
		});
		marker.addListener('click', function(){showInfo(this);});
		markers.push(marker);
	}
	var markerCluster = new MarkerClusterer(map, markers, {
		styles: [{
			url: 'images/group0.png',
			height: 91,
			width: 66,
			anchor: [25, 0],
			textColor: '#ffffff',
			textSize: 13
		}, {
			url: 'images/group1.png',
			height: 91,
			width: 66,
			anchor: [25, 0],
			textColor: '#ffffff',
			textSize: 13
		}, {
			url: 'images/group2.png',
			height: 91,
			width: 66,
			anchor: [25, 0],
			textColor: '#ffffff',
			textSize: 13
		}]
	});
}

var infoWindow;
var selectedMarker;
function showInfo(marker)
{
	if(!infoWindow) infoWindow = new google.maps.InfoWindow();
	infoWindow.close();
	
	if(selectedMarker==marker){
		selectedMarker = null;
		return;
	}
	selectedMarker = marker;
	
	var contentString = '<div id="infoWindow">'+
		'<h1><img src="' + TYPE_ICONS[data[marker.index].type] + '"/> ' + TYPE_LABELS[data[marker.index].type] + '</h1>'+
		'<h2>' + data[marker.index].date + '</h2>'+
		'<p>' + data[marker.index].description + '</p>'+
	'</div>';
	infoWindow.setContent(contentString);
	infoWindow.open(map, marker);
}


/*********
DATA
**********/
var TYPES = {
	SEM_MEDICO:0,
	DEMORA_ATENDIMENTO:1,
	DEMORA_AMBULANCIA:2,
	HOSPITAL_SEM_ESTRUTURA:3,
	FALTA_MEDICACAO:4,
	NEGLIGENCIA:5
};
var TYPE_ICONS = [
	"images/1.png",
	"images/2.png",
	"images/3.png",
	"images/4.png",
	"images/5.png",
	"images/6.png"
];
var TYPE_LABELS = [
	"Sem M&eacute;dico",
	"Demora no Atendimento",
	"Demora na Ambul&acirc;ncia",
	"Hospital sem Estrutura",
	"Falta de Medica&ccedil;&atilde;o",
	"Neglig&ecirc;ncia"
];

var data;
var dataUrl = "data/data.json";
function loadData(){
	console.log("data loading: " + dataUrl);
	$.getJSON(dataUrl, function(json) {
		console.log("data loaded: " + json);
		data = json.data;
		if(SIMULATE_DATA){
			for(var i = json.data.length; i< SIMULATE_DATA; i++){
				var copy = json.data[i%json.data.length];
				data[i] = {};
				for (var attr in copy) {
					if (copy.hasOwnProperty(attr)) data[i][attr] = copy[attr];
				}
				data[i].position = {
					lat:Math.floor(Math.random() * 180 - 90),
					lng:Math.floor(Math.random() * 360 - 180)
				};
			}
		}
		initMarkers();
	})
	.fail(function(jqxhr, textStatus, error) {
		console.log( "loading data error" );
		var err = textStatus + ", " + error;
		console.log( "Request Failed: " + err );
	})
}

/*********
UI
**********/
var filterOptions = [];

function initUI() {

	//login
	$('#loginButton').on('click', function( event ) {
		$('#loginWindow').modal('show');
	});

	//denuncie
	$('#denuncie').on('click', function( event ) {
		$('#denuncieWindow').modal('show');
	});
	
	//filters
	$( '.dropdown-menu a' ).on( 'click', function( event ) {
		var $target = $( event.currentTarget ),
			val = $target.attr( 'data-value' ),
			$inp = $target.find( 'input' ),
			idx;

		if ( ( idx = filterOptions.indexOf( val ) ) > -1 ) {
			filterOptions.splice( idx, 1 );
			$inp.prop( 'checked', false );
		} else {
			filterOptions.push( val );
			$inp.prop( 'checked', true );
		}

		$( event.target ).blur();

		console.log( filterOptions );
		return false;
	});  
}

/*********
INIT
**********/
function onload() {
	initUI();
	initMap();
	loadData();
}