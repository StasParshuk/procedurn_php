

const selectors = {
    productInfo: {
        title: '#buy-form .product-block .product-name',
        price: '#buy-form .product-block .product-price',
        total: '#buy-form .product-block .product-total',
    },
    quantityField: '.quantity-field',
    productField: '#buy-form .product',
    additionsField: '#buy-form .additions-check',
    additionsQntyField: '#buy-form .additions-qnty',
    additionsTotalField: ' .additions-total',
    finalPrice: '#buy-form .final-price'
};

$(document).ready(function() {
    const $alert = $('.alert.notification');

    if (typeof $alert !== 'undefined') {
        setTimeout(() => $alert.remove(), 3000)
    }
});

$(document).on('click', '.item-slon', function (e) {
    let data = $(this).data();
    let $form = $('#buy-form');
    let $quantityField = $form.find(selectors.quantityField);

    $quantityField.attr('max', data.qnty);

    let quantity = parseInt($quantityField.val());

    $(selectors.productInfo.title).html(`<b>${data.name}</b>`);
    $(selectors.productInfo.price).text(data.price);
    $(selectors.productInfo.total).text(data.price * quantity);

    $(selectors.productField).val(data.id);
});

$(document).on('change', `#buy-form ${selectors.quantityField}`, function () {
    let qnty = $(this).val();
    let price = parseFloat($(selectors.productInfo.price).text());

    $(selectors.productInfo.total).text(price * qnty);
    calculateTotal();
});

$(document).on('change', selectors.additionsField, function () {
    let field = $(this)[0];
    let qnty = $(field).parent().find('input[type="number"]')[0];

    if ($(field).is(':checked')) {
        $(qnty).prop('disabled', false);
        $(qnty).val(1);
    } else {
        $(qnty).val(0);
        $(qnty).prop('disabled', true);
    }
    $(qnty).trigger('change');
});

$(document).on('change', `${selectors.additionsQntyField}`, function() {
    let $total = $(this).parent().find(selectors.additionsTotalField);
    let qnty = parseInt($(this).val());
    let singlePrice = parseFloat($(this).parent().find('.price').text());

    $total.text(singlePrice * qnty);

    calculateTotal();
});

function calculateTotal()
{
    let productTotal = parseFloat($(selectors.productInfo.total).text());
    let additions = $(selectors.additionsTotalField);

    for(let i = 0; i < additions.length; i++) {
        if($(additions[i]).text().length > 0) {
            let price = parseFloat($(additions[i]).text());
            productTotal = productTotal + price;
        }
    }

    $(selectors.finalPrice).text(productTotal);
}