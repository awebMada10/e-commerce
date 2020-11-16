<div class="product">
    <h3>{$rsProduct['name']}</h3>
    <img style="max-width: 575px;" src="/www/images/products/{$rsProduct['image']}" alt="{$rsProduct['image']}">
    <p>Стоимость: {$rsProduct['price']}</p>
    <a href="#" id="addCart_{$rsProduct['id']}"
        {if $itemInCart === 1} class="hide" {/if}
        onClick="addToCart({$rsProduct['id']}); return false;"
    >Добавить в корзину</a>
    <a href="#" id="removeCart_{$rsProduct['id']}"
        {if $itemInCart === 0} class="hide" {/if}
        onclick="removeFromCart({$rsProduct['id']}); return false;">Убрать из корзины</a>
    <p>Описание: {$rsProductDescription}</p>

</div>
</div>