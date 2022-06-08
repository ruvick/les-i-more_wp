function show_table (el) {
  let type = el.dataset.postr
  let nomerdoma = el.dataset.hnumber
  let hid = el.dataset.hild
  let price = el.dataset.price
  let element = houses_project[type]
  let img = ""
  let pasport = ""
  let pname = ""
  let html = ""
  for (var k in element){
    if (k == "img") {
      img = element[k]
      continue
    }

    if (k == "pasport") {
      pasport = element[k]
      continue
    }

    if (k == "price"){
      price = element[k]
      continue
    }

    if (k == "pname"){
      pname = element[k]
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
      document.querySelector(".popup-houses h2").innerHTML = pname
      document.querySelector(".popup-houses .popup-houses__identifier").innerHTML = "# "+hid
      document.querySelector(".popup-houses .popup-houses__price").innerHTML = "от <span class = 'price_formator'>"+price+"</span> руб"
      document.querySelector(".popup-houses .pasport_lnk").href = pasport
      console.log(img)
      document.querySelector(".popup-houses img").src = img

      
  }
  let p_e = document.querySelector('.popup-houses__price span');
  
  p_e.innerHTML = Number(p_e.innerHTML).toLocaleString('ru-RU');

  popup_open("houses")
}

document.addEventListener('DOMContentLoaded', (e) => {
    number_format();
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
          let pasport = ""
          let pname = ""
          let html = ""
          for (var k in element){
            if (k == "img") {
              img = element[k]
              continue
            }

            if (k == "pasport") {
              pasport = element[k]
              continue
            }

            if (k == "price"){
              price = element[k]
              continue
            }

            if (k == "pname"){
              pname = element[k]
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
              document.querySelector(".popup-houses h2").innerHTML = pname
              document.querySelector(".popup-houses .popup-houses__identifier").innerHTML = "# "+hid
              document.querySelector(".popup-houses .popup-houses__price").innerHTML = "от <span class = 'price_formator'>"+price+"</span> руб"
              document.querySelector(".popup-houses .pasport_lnk").href = pasport
              console.log(img)
              document.querySelector(".popup-houses img").src = img

              
          }
          let p_e = document.querySelector('.popup-houses__price span');
          
		      p_e.innerHTML = Number(p_e.innerHTML).toLocaleString('ru-RU');

          popup_open("houses")
      })
    }


    if (document.getElementById("podbor_kottedga_btn"))
    podbor_kottedga_btn.addEventListener("click", (e) => { 
      e.preventDefault() 
      win_table_wrapper.innerHTML = win_table_content.innerHTML
      popup_open("podbor")
    })
})