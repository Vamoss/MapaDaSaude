var SIMULATE_DATA = 0;//2000;//0 = use real data;
var DEBUG = true;

/**********
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
var oms;
function initMarkers(){
	oms = new OverlappingMarkerSpiderfier(map,
		{
			markersWontMove: true,
			markersWontHide: false,
			keepSpiderfied: true,
			nearbyDistance: 30,
			spiralLengthStart: 15,
			spiralAngleSeparation: 0.005
		}
	);
	oms.addListener('click', function(marker, event) {
	  showInfo(marker);
	});
	
	for(var i = 0; i< denuncias.length; i++){
		var marker = new google.maps.Marker({
			map: map,
			icon: tiposDenunciasImagens[denuncias[i].tipo],
			position: {
				lat: denuncias[i].lat,
				lng: denuncias[i].lng
			},
			index: i
		});
		markers.push(marker);
		oms.addMarker(marker);
	}
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
		'<h1><img src="' + tiposDenunciasImagens[denuncias[marker.index].tipo] + '"/> ' + tiposDenuncias[denuncias[marker.index].tipo] + '</h1>'+
		'<h2>' + denuncias[marker.index].data + '</h2>';
		if(denuncias[marker.index].provedor=='SUS'){
			contentString += '<h3>' + denuncias[marker.index].provedor + '</h3>';
		}else{
			//TODO
			//plano de saude
			//listar nome 
			contentString += '<h3>' + denuncias[marker.index].provedor + '</h3>';
		}
		contentString += '<p>' + denuncias[marker.index].descricao + '</p>'+
	'</div>';
	infoWindow.setContent(contentString);
	infoWindow.open(map, marker);
}

/*********
MAP NO FORMULÁRIO DE DENUNCIA NO CAMPO LOCAL
**********/
var draggableMarker;
var mapLocal;
function initMapLocal() {
	if(mapLocal) return;

	mapLocal = new google.maps.Map(document.getElementById('mapLocal'), {
		streetViewControl: false,
		mapTypeControl: true,
		mapTypeControlOptions: {
	      mapTypeIds: [google.maps.MapTypeId.ROADMAP, google.maps.MapTypeId.HYBRID]
	    }, // here´s the array of controls
	    zoom: 17,
		center: {lat: -15.7213868, lng: -48.078664},
		//styles: map.getStyle()
	});

	draggableMarker = new google.maps.Marker({
		map: mapLocal,
		draggable: true,
		animation: google.maps.Animation.DROP,
		position: {lat: -15.7213868, lng: -48.078664}
	});
	draggableMarker.addListener('dragend', onMarkDraggableChanged);
}

function autoDetectMapLocal() {
	// Detect user location.
	// Try HTML5 geolocation.
	if (navigator.geolocation) {
		navigator.geolocation.getCurrentPosition(function(position) {
			showMapLocal(position.coords.latitude, position.coords.longitude, 17);
		}, function() {
			//console.log("não foi possível reconhecer a localização do visitante");
		});
	} else {
		//console.log("não foi possível reconhecer a localização do visitante");
	}
}

function showMapLocal(lat, lng, zoom) {
	$('#mapLocal').slideDown("slow", function() {
		initMapLocal();
		var pos = {
			lat: lat,
			lng: lng
		};

		draggableMarker.setPosition(pos);
		mapLocal.setCenter(pos);
		mapLocal.setZoom(zoom);
	});
	setMapLocalValue(lat, lng);
}

var geocoder = new google.maps.Geocoder();
function findMapLocalByName(name) {
  geocoder.geocode({'address': name}, function(results, status) {
    if (status === google.maps.GeocoderStatus.OK) {
    	if(DEBUG) console.log(results[0].geometry.location);
      	showMapLocal(results[0].geometry.location.lat(), results[0].geometry.location.lng(), 12);
    } else {
      	if(DEBUG) console.log('Geocode was not successful for the following reason: ' + status);
    }
  });
}

function setMapLocalValue(lat, lng){
	$("#lat").val(lat);
	$("#lng").val(lng);
}

function onMarkDraggableChanged() {
	var lat = draggableMarker.getPosition().lat();
	var lng = draggableMarker.getPosition().lng();
	setMapLocalValue(lat, lng);
}

/*********
DATA
**********/
var tiposDenuncias = [];
var tiposDenunciasImagens = [];
var denuncias = [];
function carregaDados(){
	if(DEBUG) console.log("carregando dados...");
	$.getJSON("/dados", function(json) {
		if(DEBUG){
			console.log("dados carregadas:");
			console.log(json);
		}
		
		for(var i=0; i<json.tiposDenuncias.length; i++){
			tiposDenuncias[json.tiposDenuncias[i].id] = json.tiposDenuncias[i].nome;
			tiposDenunciasImagens[json.tiposDenuncias[i].id] = "img/" + json.tiposDenuncias[i].imagem;
		}
		
		denuncias = json.denuncias;
		if(SIMULATE_DATA){
			for(var i = json.data.length; i< SIMULATE_DATA; i++){
				var copy = json.data[i%json.data.length];
				denuncias[i] = {};
				for (var attr in copy) {
					if (copy.hasOwnProperty(attr)) denuncias[i][attr] = copy[attr];
				}
			}
		}
		initMarkers();
	})
	.fail(function(jqxhr, textStatus, error) {
		console.log( "erro ao carregar denúncias: " + err );
		var err = textStatus + ", " + error;
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

/************************************************************************/
	//frora
	$('#botao').click (function( event ) {
		$('.janeladafroralinda').toggle();
	});

    $('a.question-2').click(function() {
        $("#question-2").addClass("show");
        $('#question-1').addClass('hide');
    });

    $('a.question-3').click(function() {
        $("#question-3").addClass("show");
        $('#question-1').addClass('hide');
    });

    $('a.question-4').click(function() {
        $("#question-4").addClass("show");
        $('#question-1').addClass('hide');
    });

    $('a.button-back').click(function() {
        $("#question-2").addClass("hide");
        $("#question-3").addClass("hide");
        $("#question-4").addClass("hide");
        $("#question-21").addClass("hide");
        $('#question-1').addClass('show');
    });

    $('a.button-next').click(function() {
        $("#question-2").addClass("hide");
        $('#question-21').addClass('show');
        $('question-1').addClass('hide');
    });
/***********************************************************************/
	
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

		if(DEBUG) console.log( filterOptions );
		return false;
	});

	//typeahead init
	function searchInString(d) {
		var test = Bloodhound.tokenizers.whitespace(d);
		$.each(test,function(k,v){
			var i = 0;
			while( (i+1) < v.length ){
				test.push(v.substr(i,v.length));
				i++;
			}
		});
		return test;
	}

	//search estabelecimento
	var estabelecimentosEngine = new Bloodhound({
		remote: {
			url: '/estabelecimento/query?estabelecimento=%QUERY',
			wildcard: '%QUERY'
		},
		datumTokenizer: function(d) {
			if(d.no_fantasia) return searchInString(d.no_fantasia);
			else return searchInString(d.nome);
		},
		queryTokenizer: Bloodhound.tokenizers.whitespace,
		limit: 99999
	});

	estabelecimentosEngine.initialize();

	$("#local").typeahead({
		hint: true,
		highlight: true,
		minLength: 3,
		sufficient: 5
	}, {
		source: estabelecimentosEngine.ttAdapter(),
		// This will be appended to "tt-dataset-" to form the class name of the suggestion menu.
		name: 'estabelecimento',
		// the key from the array we want to display
		display: function(e){
			if(e.no_fantasia) return toTitleCase(e.no_fantasia);
			else return toTitleCase(e.nome);
		},
		templates: {
			suggestion: function(e) {
				if(e.no_fantasia) return '<div>' + toTitleCase(e.no_fantasia) + " (" + toTitleCase(e.nome) + "-" + e.uf + ")" + '</div>';
				else return '<div>' + toTitleCase(e.nome) + " - " + e.uf + '</div>';
			},
			empty: [
				'<div class="empty-message">Não encontramos este estabelecimento</div>'
			]
		}
	});
	$('#local').on('typeahead:selected', function (e, datum) {
		if(DEBUG) console.log("selected: ");
		if(DEBUG) console.log(datum);
		if(datum.no_fantasia) showMapLocal(datum.lat, datum.lng, 17);
		else findMapLocalByName(datum.nome, datum.uf);
	});

	//search planos de saúde
	var planosEngine = new Bloodhound({
		datumTokenizer: function(d) {
			return searchInString(d.nome);
		},
		queryTokenizer: Bloodhound.tokenizers.whitespace,
		sufficient : 0,
		identify: function(obj) { return obj.nome; },
		prefetch: {
			url: '/planos/',
			cache: false
		}
	});
	
	function planosWithDefaults(q, sync) {
		if(q === ''){
			sync(planosEngine.get('Amil','Bradesco','Unimed'));
		}else{
			planosEngine.search(q, sync);
		}
	}

	$('#plano').typeahead({
		hint: true,
		highlight: true,
		minLength: 0,
		limit: 10
    }, {
		name: 'plano',
		source: planosWithDefaults,
		displayKey: 'nome',
		templates: {
			suggestion: function(e) {
				return '<div>' + e.nome + '</div>';
			},
			empty: [
				'<div class="empty-message">Não encontramos este plano de saúde, tente com outras palavras.</div>'
			]
		}
	});
	$('#plano').on('typeahead:selected', function (e, datum) {
		if(DEBUG) console.log("selected: ");
		if(DEBUG) console.log(datum);
		$('#planoId').val(datum.id);
	});
}

function toTitleCase(str)
{
    return str.replace(/\w\S*/g, function(txt){return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();});
}

/*********
INIT
**********/
function onload() {
	initUI();
	initMap();
	carregaDados();
}