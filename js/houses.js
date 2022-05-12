document.addEventListener('DOMContentLoaded', () => { 
    let home_wrapper = document.querySelectorAll(".home_wrapper");
    console.log(home_wrapper)
    for (let i = 0; i<home_wrapper.length; i++) {
        home_wrapper[i].addEventListener("click", (e) => { 
        console.log("do")
      })
    }
})