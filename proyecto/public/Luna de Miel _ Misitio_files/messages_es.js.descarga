'use strict';

try {
  angular.module('cartAppTranslations');
} catch (e) {
  angular.module('cartAppTranslations', ['pascalprecht.translate']);
}

angular.module('cartAppTranslations').config(['$translateProvider',
  function ($translateProvider) {
    var translations = {
      'CART_WIDGET_CART_TITLE': 'Carrito',
      'cartWidget': {
        'sr': {
          'PRODUCT_WAS_REMOVED': '{{ productName }} fue retirado del carrito',
          'PRODUCT_PRICE_BEFORE_DISCOUNT': 'Precio',
          'PRODUCT_PRICE_AFTER_DISCOUNT': 'Precio de oferta',
          'PRODUCT_PRICE_WHEN_THERE_IS_NO_DISCOUNT': 'Precio'
        }
      },
      'REMOVE_PRODUCT_BUTTON_TITLE': 'Eliminar artículo',
      'SKU_TITLE': 'SKU: {{ sku }}',
      'CART_WIDGET_EMPTY_CART_MESSAGE': 'El carrito está vacío',
      'CART_WIDGET_QUANTITY_TITLE': 'Cant. ',
      'CART_WIDGET_CLOSE_CTA': 'Cerrar',
      'CART_WIDGET_VIEW_CART_BUTTON': 'VER CARRITO',
      'OUT_OF_STOCK_TITLE': 'Agotado',
      'CART_TABLE_TOTAL_TITLE': 'TOTAL',
      'CART_WIDGET_CLOSE_BUTTON_TITLE': 'Cerrar carrito',
      'SUBTOTAL_TITLE': 'Subtotal'
    };
    $translateProvider.translations('es', translations);
    $translateProvider.translations(translations);
    $translateProvider.preferredLanguage('es');
  }
]);