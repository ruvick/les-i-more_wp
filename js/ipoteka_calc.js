
function calc_ipt() {
    let house_price = "";
    if (document.getElementById("select_home_price"))
        house_price = select_home_price.value;
    else return;

    let vznos = "";
    if (document.getElementById("select_home_vznos"))
        vznos = select_home_vznos.value;
    else return;

    let srok = "";
    if (document.getElementById("select_home_srok"))
        srok = select_home_srok.value;
    else return;

    let S = parseInt(house_price) * ((100 - parseInt(vznos)) / 100) //тело кредита
    let p = 3 //процентная ставка в годовых
    let n = parseInt(srok) //количество лет
    

    p = p / 1200; 
    n = n * 12;

    let A = (S * p / (1 - Math.pow(1 + p, -n))).toFixed(2) //ежемесячный платёж

    inp_summ.innerHTML = n * A
    inp_em_pl.innerHTML = A
    number_format()
}

document.addEventListener('DOMContentLoaded', (e) => {
    calc_ipt()
    let ipot_selectors = document.querySelectorAll(".ipt_select");
    
    for (let i = 0; i<ipot_selectors.length; i++) {

       

        ipot_selectors[i].addEventListener('ipt_calc_chenge', (e) => {            
            e.preventDefault()
            calc_ipt()
            
        })
    }
})