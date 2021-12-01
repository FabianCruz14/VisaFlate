console.log('hola')

if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', ready)
} else {
    ready()
}


function ready() {
    var removeCartItemButtons = document.getElementsByClassName('btEliminar')
    for (var i = 0; i < removeCartItemButtons.length; i++) {
        var button = removeCartItemButtons[i]
        button.addEventListener('click', removeCartItem)
    }

    var quantityInputs = document.getElementsByClassName('cart-quantity-input')
    for (var i = 0; i < quantityInputs.length; i++) {
        var input = quantityInputs[i]
        input.addEventListener('change', quantityChanged)
    }

   
    updateCartTotal()
   /* document.getElementsByClassName('btn-purchase')[0].addEventListener('click', purchaseClicked)*/
}

function removeCartItem(event) {
    var botonClicked = event.target;
    botonClicked.parentElement.parentElement.parentElement.parentElement.parentElement.remove();
    updateCartTotal()
    document.getElementsByClassName('cart-total-envio')[0].innerText = '$' + costoEnvio
var st = parseFloat(document.getElementsByClassName('cart-total-subtotal')[0].innerText.replace('$', ''))
var total = costoEnvio + st;
document.getElementsByClassName('cart-total-price')[0].innerText = '$' + total;
}


function quantityChanged(event) {
    var input = event.target
    if (isNaN(input.value) || input.value <= 0) {
        input.value = 1
    }
    updateCartTotal()
    document.getElementsByClassName('cart-total-envio')[0].innerText = '$' + costoEnvio
var st = parseFloat(document.getElementsByClassName('cart-total-subtotal')[0].innerText.replace('$', ''))
var total = costoEnvio + st;
document.getElementsByClassName('cart-total-price')[0].innerText = '$' + total;
}

function updateCartTotal() {
    var cartprice = document.getElementsByClassName('cart-price')
    var cantidad = document.getElementsByClassName('cart-quantity-input')

    console.log(cantidad)
    var total = 0
    for (var i = 0; i < cartprice.length; i++) {
        console.log(cartprice.length)
        var price = parseFloat(cartprice[i].innerText.replace('$', ''))
        console.log(price)
        var subtotal = 0
        var quantity = cantidad[i].value
        console.log(quantity)
        subtotal = price * quantity
        document.getElementsByClassName('subtotal')[i].innerText = '$' + subtotal
        total = total + (price * quantity)
    }
    total = Math.round(total * 100) / 100
    document.getElementsByClassName('cart-total-subtotal')[0].innerText = '$' + total

}

var costoEnvio=0;
const radiobtpuntoEntrega = document.querySelector('#envio_entrega');
const radiobtEnvNac = document.querySelector('#envio_nacional');
const radiobtEfectivo = document.querySelector('#Efectivo');
const radiobtdeposito = document.querySelector('#deposito');

radiobtEnvNac.onclick = function () {
    const rbs = document.querySelectorAll('input[name="envios"]');
    let envioNacional;
    for (const rb of rbs) {
        if (rb.checked) {
            costoEnvio = 200;
            envioNacional=1;
            break;
        }
    }
    if(!envioNacional==1){
        costoEnvio = 0;
    }

    document.getElementsByClassName('cart-total-envio')[0].innerText = '$' + costoEnvio
var st = parseFloat(document.getElementsByClassName('cart-total-subtotal')[0].innerText.replace('$', ''))
var total = costoEnvio + st;
document.getElementsByClassName('cart-total-price')[0].innerText = '$' + total;
    
    
};


radiobtpuntoEntrega.onclick = function () {
    const rbs = document.querySelectorAll('input[name="envios"]');
    let PE;
    for (const rb of rbs) {
        if (rb.checked) {
            costoEnvio = 0;
            PE=1;
            break;
        }
    }
    if(!PE==1){
        costoEnvio = 200;
    }
    console.log(costoEnvio);
    document.getElementsByClassName('cart-total-envio')[0].innerText = '$' + costoEnvio
var st = parseFloat(document.getElementsByClassName('cart-total-subtotal')[0].innerText.replace('$', ''))
var total = costoEnvio + st;
document.getElementsByClassName('cart-total-price')[0].innerText = '$' + total;
    
};

radiobtEfectivo.onclick = function () {
    const rbs = document.querySelectorAll('input[name="pagos"]');
    let efectivo;
    for (const rb of rbs) {
        if (rb.checked) {
            efectivo = 1;
            break;
        }
    }
    alert(efectivo);
};

document.getElementsByClassName('cart-total-envio')[0].innerText = '$' + costoEnvio
var st = parseFloat(document.getElementsByClassName('cart-total-subtotal')[0].innerText.replace('$', ''))
var total = costoEnvio + st;
document.getElementsByClassName('cart-total-price')[0].innerText = '$' + total;

