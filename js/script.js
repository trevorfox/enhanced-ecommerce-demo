$(document).ready(function() {
  /* Product Click */
  $('body').on('click', ".products__item__link", function(event) {
    var id = $(this).data('id');
    var listname = $(this).parent().parent().data('listname');
    var url = $(this).prop('href');
    $.getJSON("functions/productData.php?id=" + id, function(productData) {
      productClick(listname, productData.name, id, productData.price, productData.brand, productData.category, productData.variant, url);
    });
    event.preventDefault();
  });
  /* Product Add */
  $('body').on('click', ".productAdd", function() {
    var id = $(this).data('id');
    $.getJSON("functions/productData.php?id=" + id, function(productData) {
      $.get('functions/addToCart.php?id=' + id, function() {
        productAdd(productData.name, id, productData.price, productData.brand, productData.category, productData.variant);
      });
    });
    event.preventDefault();
  });
  /* Product Remove */
  $('body').on('click', ".cart__item", function() {
    var id = $(this).data('id');
    var cartid = $(this).data('cartid');
    var cart__item = $(this);
    $.getJSON("functions/productData.php?id=" + id, function(productData) {
      $.get('functions/removeFromCart.php?cartid=' + cartid, function() {
        productRemove(productData.name, id, productData.price, productData.brand, productData.category, productData.variant, cart__item);
      });
    });
    event.preventDefault();
  });
  /* Promotion Click */
  $('body').on('click', ".promotion", function(event) {
    var id = $(this).data('id');
    var url = $(this).prop('href');
    $.getJSON("functions/promotionData.php?id=" + id, function(promotionData) {
      promotionClick(promotionData.name, promotionData.id, promotionData.creative, promotionData.position, url);
    });
    event.preventDefault();
  });
  /* Submit form */
  $('body').on('submit', ".pay", function(event) {
    console.log("test");
    var payForm = $(this);
    var step = $(this).data('step');
    var checkoutOption = $('input[name=method]:checked').val();
    addCheckoutOption(payForm, step, checkoutOption);
  });
});




function productClick(listname, name, id, price, brand, category, variant, url) {
  dataLayer.push({
    'event': 'productClick',
    'ecommerce': {
      'click': {
        'actionField': {
          'list': listname
        },
        'products': [{
          'name': name,
          'id': id,
          'price': price,
          'brand': brand,
          'category': category,
          'variant': variant
        }]
      }
    },
    'eventCallback': function() {
      location = url;
    }
  });
}
function productAdd(name, id, price, brand, category, variant, link) {
  dataLayer.push({
    'event': 'addToCart',
    'ecommerce': {
      'add': {
        'products': [{
          'name': name,
          'id': id,
          'price': price,
          'brand': brand,
          'category': category,
          'variant': variant,
          'quantity': 1
        }]
      }
    },
    'eventCallback': function() {
      $('.cart__count').html(parseInt($('.cart__count').html(), 10)+1);
    }
  });
}
function productRemove(name, id, price, brand, category, variant, cart__item) {
  dataLayer.push({
    'event': 'removeFromCart',
    'ecommerce': {
      'remove': {
        'products': [{
          'name': name,
          'id': id,
          'price': price,
          'brand': brand,
          'category': category,
          'variant': variant,
          'quantity': 1
        }]
      }
    },
    'eventCallback': function() {
      $('.cart__count').html(parseInt($('.cart__count').html(), 10)-1);
      cart__item.remove();
    }
  });
}
function promotionClick(name, id, creative, position, url) {
  dataLayer.push({
    'event': 'promotionClick',
    'ecommerce': {
      'promoClick': {
        'promotions': [{
          'name': name,
          'id': id,
          'creative': creative,
          'position': position
        }]
      }
    },
    'eventCallback': function() {
      location = url;
    }
  });
}
function addCheckoutOption(form, step, checkoutOption) {
  dataLayer.push({
    'event': 'checkoutOption',
    'ecommerce': {
      'checkout_option': {
        'actionField': {
          'step': step,
          'option': checkoutOption
        }
      }
    },
    'eventCallback': function() {
  //    form.submit();
    }
  });
}