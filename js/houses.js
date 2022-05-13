document.addEventListener('DOMContentLoaded', () => { 
    let home_wrapper = document.querySelectorAll(".home_wrapper");
    console.log(home_wrapper)
    for (let i = 0; i<home_wrapper.length; i++) {
        home_wrapper[i].addEventListener("click", (e) => { 
          let type = home_wrapper[i].dataset.postr
          let nomerdoma = home_wrapper[i].dataset.hnumber
          let hid = home_wrapper[i].dataset.hild
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
              console.log(img)
              document.querySelector(".popup-houses img").src = img
          }
          
          popup_open("houses")
      })
    }
})