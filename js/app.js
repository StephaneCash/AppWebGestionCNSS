let qt = document.querySelector('#qt');
let btnAdd = document.querySelector('#btnAdd');
let textQt = document.querySelector('#textQt');

let desc = document.querySelector('#desc');

let btnBuy = document.querySelector("#btnBuy");

let modeP = document.querySelector('#modeP');
let h6 = document.querySelector('#h6');

let spanGen = document.querySelector('#spanGen');

let modePayementMoney = document.querySelector('#modePayementMoney');
let modePayementCarte = document.querySelector('#modePayementCarte');
let textConfirm = document.querySelector('#textConfirm');

let modePayementLivraison = document.querySelector('#modePayementLivraison');

//let qtT = document.querySelector('#qtT');

btnAdd.addEventListener('click', () => {
    textQt.innerHTML = qt.value;

    if (qt.value === "") {
        textQt.innerHTML = "Veuillez entrer une valeur";
        textQt.style.fontStyle = 'italic';
        textQt.style.marginLeft = '15px';
        textQt.style.color = 'red';
    } else {
        textQt.style.fontStyle = 'italic';
        textQt.style.marginLeft = '15px';
        btnBuy.style.display = "block";
        textQt.style.color = '#333';
    }
});

btnBuy.addEventListener("click", () => {
    btnAdd.style.display = "none";
    desc.style.display = "none";
    modeP.style.display = "block";
    btnBuy.style.display = "none";
    h6.style.marginTop = "20px";
    h6.style.marginBottom = "20px";
})

modePayementMoney.addEventListener('click', () => {
    textConfirm.innerHTML = "Votre achat a été effectué avec succès par " + modePayementMoney.value;
    textConfirm.style.marginTop = "20px";
    btnBuy.style.display = "none";
    modePayementCarte.style.display = "none";
    desc.style.display = "block";
    h6.style.display = "none";
    modePayementMoney.style.display = "none";
    textQt.innerHTML = "0";
    qt.value = 0;
    btnAdd.style.display = "block";
})

modePayementCarte.addEventListener('click', () => {
    textConfirm.innerHTML = "Votre achat a été effectué avec succès par " + modePayementCarte.value;
    textConfirm.style.marginTop = "20px";
    btnBuy.style.display = "none";
    modePayementMoney.style.display = "none";
    desc.style.display = "block";
    h6.style.display = "none";
    modePayementCarte.style.display = "none";
    textQt.innerHTML = "0";
    qt.value = 0;
    btnAdd.style.display = "block";
})

modePayementLivraison.addEventListener('click', ()=>{
    textConfirm.innerHTML = "Votre achat a été effectué avec succès par " + modePayementCarte.value;
    textConfirm.style.marginTop = "20px";
    btnBuy.style.display = "none";
    modePayementMoney.style.display = "none";
    desc.style.display = "block";
    h6.style.display = "none";
    modePayementCarte.style.display = "none";
    textQt.innerHTML = "0";
    qt.value = 0;
    btnAdd.style.display = "block";
    modePayementLivraison.style.display = "none";
})


