document.addEventListener('DOMContentLoaded', (e) => {
    e.preventDefault() 
    let home_wrapper = document.querySelectorAll(".home_wrapper");
    console.log(home_wrapper)
    for (let i = 0; i<home_wrapper.length; i++) {
        home_wrapper[i].addEventListener("click", (e) => { 
          let type = home_wrapper[i].dataset.postr
          let nomerdoma = home_wrapper[i].dataset.hnumber
          let hid = home_wrapper[i].dataset.hild
          let price = home_wrapper[i].dataset.price
          let element = houses_project[type]
          let img = ""
          let html = "";
          for (var k in element){
            if (k == "img") {
              img = element[k]
              continue
            }
            html  += '<div class="popup-houses__charect-block-row d-flex">'
            html  += '<div class="popup-houses__charect-block-cell">'+k+':</div>'
            html  += '<div class="popup-houses__charect-block-cell">'+element[k]+'</div>'
            html  += '</div>'
          }

          console.log(html)

          if (document.getElementById("popup-houses__charect-block"))
          {
              document.getElementById("popup-houses__charect-block").innerHTML = html
              document.querySelector(".popup-houses h2").innerHTML = "Коттедж № "+nomerdoma
              document.querySelector(".popup-houses .popup-houses__identifier").innerHTML = "# "+hid
              document.querySelector(".popup-houses .popup-houses__price").innerHTML = "<span class = 'price_formator'>"+price+"</span> руб"
              console.log(img)
              document.querySelector(".popup-houses img").src = img

              
          }

          number_format()
          
          popup_open("houses")
      })
    }
})