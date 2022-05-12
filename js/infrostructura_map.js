
  let selectElement = []



  function get_map_pin(cat) {
    if (cat == "Образование") return "pin_school.svg";
    if (cat == "Торговые центры") return "pin_shop.svg";
    if (cat == "Фитнес") return "pin_sport.svg";
  }

  function filter_object(myMap) {
      if (!mapPin) return;
      var myGeoObjects = [];
    
      for (let i = 0; i<mapPin.length; i++ )
      { 
        

        if ((selectElement.length > 0) && ( selectElement.indexOf(mapPin[i].cat) < 0 )) continue;

        let coord = mapPin[i].coord.replace("[","").replace("]","");

        let content = 
        '<strong>'+mapPin[i].name+'</strong>'+
        
        '<div class="WrapperPage__sidebar-infoBlock-item-descp-charect d-flex">'+
            '<div class="WrapperPage__sidebar-infoBlock-item-descp-charect-time">'+mapPin[i].time+'</div>'+
            '<div class="WrapperPage__sidebar-infoBlock-item-descp-charect-distance">'+mapPin[i].rasst+'</div>'+
        '</div>';
        let pin = new ymaps.Placemark([parseFloat(coord.split(",")[0]), parseFloat(coord.split(",")[1])], {
                      balloonContent: content, 
                    },
                    {
                      iconLayout: 'default#image',
                      iconImageHref:  templateAdr+'/img/ifra_icon/'+get_map_pin(mapPin[i].cat),  
                      iconImageSize: [45, 60],
                      iconImageOffset: [-22, -60]
                    }
        );

        myGeoObjects.push(pin);

      }

      var clusterer = new ymaps.Clusterer({
        clusterDisableClickZoom: false,
        clusterOpenBalloonOnClick: false,
        clusterIconColor: "#879026"
      });
      
      clusterer.add(myGeoObjects);
      myMap.geoObjects.add( clusterer );
  }


  ymaps.ready(init); 

function init () {
    var myMap = new ymaps.Map("map", {
      center:[51.706830092350074,36.106675680394076],
      zoom: 13,
      controls: ['fullscreenControl', 'zoomControl']
    }); 

  filter_object(myMap);

}