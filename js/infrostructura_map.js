
document.addEventListener('DOMContentLoaded', () => {
  let allSelector = document.querySelectorAll(".infra_selector");
  for (let i = 0; i<allSelector.length; i++) {
    allSelector[i].addEventListener("click", (e) => {
      e.preventDefault();
      let element = allSelector[i].dataset.catname
      let elem_position = selectElement.indexOf(element)  
      
      if (elem_position >= 0) {
        selectElement.splice(elem_position,1)
        allSelector[i].classList.remove("_selected")
      } else {
        selectElement.push(element)
        allSelector[i].classList.add("_selected")
      }

      if (myMap != null) 
        filter_object();

        obj_table_repaint();
    }) 
  }
});

  var myMap = null; 

  let selectElement = []

  function clear_obj_filter() {
    selectElement = []
    filter_object()
    obj_table_repaint();
    let allSelector = document.querySelectorAll(".infra_selector");
    for (let i = 0; i<allSelector.length; i++) { 
      allSelector[i].classList.remove("_selected")
    }

  }

  function show_obj_filter() {
    filter_object()
  }


  function obj_table_repaint() {


    let objInTable = document.querySelectorAll(".object_table_element");

       
    for (let j = 0; j<objInTable.length; j++) {
      let cat = objInTable[j].dataset.catname
      let cat_position = selectElement.indexOf(cat) 
        if ((selectElement.length == 0 ) || (cat_position >= 0)) 
          objInTable[j].style.display = "flex"
        else 
          objInTable[j].style.display = "none"
    }
  }

  function get_map_pin(cat) {
    if (cat == "Образование") return "pin_school.svg";
    if (cat == "Торговые центры") return "pin_shop.svg";
    if (cat == "Фитнес и спорт") return "pin_sport.svg";
    if (cat == "Городские объекты") return "pin_city.svg";
  }

  function filter_object() {
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
      
      clusterer.add(myGeoObjects)
      myMap.geoObjects.removeAll()
      myMap.geoObjects.add( clusterer )
  }


  ymaps.ready(init); 

function init () {
  myMap = new ymaps.Map("map", {
    center:[51.706830092350074,36.106675680394076],
    zoom: 10,
    controls: ['fullscreenControl', 'zoomControl']
  }); 


  filter_object();

}