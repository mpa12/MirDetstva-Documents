<?php

use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;
use yii\helpers\Json;

/** @var yii\web\View $this */
/** @var common\models\Invoice $model */
/** @var yii\bootstrap5\ActiveForm $form */

$model_products_count = Json::decode($model->products);

?>

<div class="invoice-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col"><?= $form->field($model, 'number')->textInput() ?></div>
        <div class="col"><?= $form->field($model, 'from_date')->input('date') ?></div>
    </div>

    <div class="row">
        <div class="col"><?= $form->field($model, 'consignee_and_address')->textInput(['maxlength' => true]) ?></div>
        <div class="col"><?= $form->field($model, 'buyer')->textInput(['maxlength' => true]) ?></div>
    </div>

    <div class="row">
        <div class="col"><?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?></div>
        <div class="col"><?= $form->field($model, 'inn')->textInput(['maxlength' => true]) ?></div>
    </div>

    <div class="form-control mb-3">
        <h3 class="my-3">Товары</h3>
        <button type="button" class="btn btn-primary" onclick="addProduct()">Добавить товар</button>
        <div id="invalid-products" class="d-none"><span class="text-danger">Необходимо добавить хотя бы один товар</span></div>
        <div id="products" class="mt-3"></div>
    </div>

    <div class="d-none">
        <?= $form->field($model, 'products') ?>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success', 'onclick' => 'return setProducts()']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<script>
    let products_count = 1

    const model_products_count = <?= ($model_products_count) ? count($model_products_count) : 0 ?>

    if (model_products_count > 0) {
        let products_list = <?= $model->products ?>

        console.log(products_list)

        for(let product in products_list) {
            addProduct(
                products_list[product].product_name,
                products_list[product].product_count,
                products_list[product].product_price,
                products_list[product].product_sum
            )
        }
    }

    function setProducts() {
        let products = getProducts()

        if (Object.keys(products).length <= 0) {
            document.querySelector('#invalid-products').classList.remove('d-none')
            return false
        }

        document.querySelector('#invoice-products').value = JSON.stringify(products)
        return true
    }

    function getProducts() {
        let products = document.querySelector('#products').querySelectorAll('.row')

        let info = {}

        for (let i = 0; i < products.length; i++) {
            info[i] = getProductInfo(products[i])
        }

        return info
    }

    function getProductInfo(product) {
        return {
            'product_name': product.querySelector('#product_name').value,
            'product_count': product.querySelector('#product_count').value,
            'product_price': product.querySelector('#product_price').value,
            'product_sum': product.querySelector('#product_sum').value,
        }
    }

    function getProductNameTemplate(value = '') {
        let label = document.createElement('label')
        label.classList.add('form-label')
        label.setAttribute('for', 'product_name')
        label.innerHTML = 'Наименование товара'

        let input = document.createElement('input')
        input.setAttribute('type', 'text')
        input.setAttribute('name', 'product_name')
        input.setAttribute('id', 'product_name')
        input.setAttribute('value', value)
        input.classList.add('form-control')

        let wrapper = document.createElement('div')
        wrapper.classList.add('col')
        wrapper.innerHTML = label.outerHTML
        wrapper.innerHTML += input.outerHTML

        return wrapper.outerHTML
    }

    function getProductCountTemplate(value = '') {
        let label = document.createElement('label')
        label.classList.add('form-label')
        label.setAttribute('for', 'product_count')
        label.innerHTML = 'Количество'

        let input = document.createElement('input')
        input.setAttribute('type', 'text')
        input.setAttribute('name', 'product_count')
        input.setAttribute('id', 'product_count')
        input.setAttribute('value', value)
        input.classList.add('form-control')

        let wrapper = document.createElement('div')
        wrapper.classList.add('col')
        wrapper.innerHTML = label.outerHTML
        wrapper.innerHTML += input.outerHTML

        return wrapper.outerHTML
    }

    function getProductPriceTemplate(value = '') {
        let label = document.createElement('label')
        label.classList.add('form-label')
        label.setAttribute('for', 'product_price')
        label.innerHTML = 'Цена'

        let input = document.createElement('input')
        input.setAttribute('type', 'text')
        input.setAttribute('name', 'product_price')
        input.setAttribute('id', 'product_price')
        input.setAttribute('value', value)
        input.classList.add('form-control')

        let wrapper = document.createElement('div')
        wrapper.classList.add('col')
        wrapper.innerHTML = label.outerHTML
        wrapper.innerHTML += input.outerHTML

        return wrapper.outerHTML
    }

    function getProductSumTemplate(value = '') {
        let label = document.createElement('label')
        label.classList.add('form-label')
        label.setAttribute('for', 'product_sum')
        label.innerHTML = 'Стоимость товаров'

        let input = document.createElement('input')
        input.setAttribute('type', 'text')
        input.setAttribute('name', 'product_sum')
        input.setAttribute('id', 'product_sum')
        input.setAttribute('value', value)
        input.classList.add('form-control')

        let wrapper = document.createElement('div')
        wrapper.classList.add('col')
        wrapper.innerHTML = label.outerHTML
        wrapper.innerHTML += input.outerHTML

        return wrapper.outerHTML
    }

    function getDeleteButtonTemplate(id) {
        let button = document.createElement('button')
        button.classList.add('btn')
        button.classList.add('btn-danger')
        button.dataset.id = id
        button.innerHTML = 'Удалить'
        button.setAttribute('onclick', 'deleteProduct(\'' + id + '\')')
        button.setAttribute('type', 'button')

        let wrapper = document.createElement('div')
        wrapper.classList.add('mt-auto')
        wrapper.setAttribute('style', 'flex: 0')
        wrapper.innerHTML = button.outerHTML

        return wrapper.outerHTML
    }

    function deleteProduct(id) {
        document.querySelector('#product' + id).remove()
    }

    function getProductTemplate(name = '', count = '', price = '', sum = '') {
        products_count++

        let innerHTML = getProductNameTemplate(name)
            + getProductCountTemplate(count)
            + getProductPriceTemplate(price)
            + getProductSumTemplate(sum)
            + getDeleteButtonTemplate(products_count)

        let template = document.createElement('div')
        template.classList.add('row')
        template.classList.add('my-3')
        template.innerHTML = innerHTML
        template.id = 'product' + products_count

        return template
    }

    function addProduct(name = '', count = '', price = '', sum = '') {
        document.querySelector('#invalid-products').classList.add('d-none')
        let template = getProductTemplate(name, count, price, sum)

        let products = document.querySelector('#products')
        products.appendChild(template)
    }
</script>
