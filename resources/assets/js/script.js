var SIMULATE_DATA = 0;//2000;//0 = use real data;
var DEBUG = true;

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
			//TODO
			//position: denuncias[i].position,
			position: {
				lat:Math.floor(Math.random() * 180 - 90),
				lng:Math.floor(Math.random() * 360 - 180)
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
		'<h2>' + denuncias[marker.index].data + '</h2>'+
		'<p>' + denuncias[marker.index].descricao + '</p>'+
	'</div>';
	infoWindow.setContent(contentString);
	infoWindow.open(map, marker);
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
				denuncias[i].position = {
					lat:Math.floor(Math.random() * 180 - 90),
					lng:Math.floor(Math.random() * 360 - 180)
				};
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
			return searchInString(d.nome);
		},
		queryTokenizer: Bloodhound.tokenizers.whitespace,
		limit: 10
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
		displayKey: 'estabelecimento',
		templates: {
			suggestion: function(e) {
				return '<div>' + e.nome + '</div>';
			},
			empty: [
				'<div class="empty-message">Não encontramos este estabelecimento</div>'
			]
		}
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

/*********
INIT
**********/
function onload() {
	initUI();
	initMap();
	carregaDados();
}