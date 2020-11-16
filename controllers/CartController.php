<?php

require_once '../models/CategoriesModel.php';
require_once '../models/ProductsModel.php';

/**
 * Добаваление товаров в корзину
 * @param integer id GET параметр - ID добавляемого продукта
 * @return string|false информация об операции (успех, количество элементов в корзине)
 */
function addToCartAction()
{
    $itemId = (int)$_GET['id'] ?? null;
    if (!$itemId) return false;

    $resData = [];
    if (isset($_SESSION['cart']) && !in_array($itemId, $_SESSION['cart'])) {
        array_push($_SESSION['cart'], $itemId);
        $resData = ['countItems' => count($_SESSION['cart']),
            'success' => 1,
            'cart' => $_SESSION['cart']];
    } else {
        $resData['success'] = 0;
    }
    echo json_encode($resData);
}

/**
 * Удаление товаров из корзины
 * @param integer id GET параметр - ID добавляемого продукта
 * @return string|false информация об операции (успех, количество элементов в корзине)
 */
function removeFromCartAction()
{
    $itemId = (int)$_GET['id'] ?? null;
    if (!$itemId) return false;

    $resData = [];
    $key = array_search($itemId, $_SESSION['cart']);
    if ($key !== false) {
        unset($_SESSION['cart'][$key]);
        $resData = ['countItems' => count($_SESSION['cart']),
            'success' => 1,
            ];
    } else {
        $resData['success'] = 0;
    }
    echo json_encode($resData);
}