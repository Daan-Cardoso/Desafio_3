<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo ROUTE_WEBSITE; ?>/css/style.css">
  <script src="<?php echo ROUTE_WEBSITE; ?>/js/plugins/vue.js"></script>
  <script src="<?php echo ROUTE_WEBSITE; ?>/js/plugins/axios.js"></script>
  <title>Desafio_3</title>

</head>

<body>
  <div id="app">
    <div class="sectionInput">
      <input :keyup="filter(inputValue)" v-model="inputValue" class="sectionInput__box" type="text" name="" id="input"
        placeholder="Name">
    </div>
    <div class="sectionUsers">
      <ul id="list" class="list">
        <li v-for="costumer of costumers" :key="costumer.id" class="list__item">
          <img class="list__photo" src="https://via.placeholder.com/150/150" alt="">
          <p class="list__paragraph">{{costumer.name}}</p>
          <p class="list__telefone"></p>
        </li>
      </ul>
    </div>
  </div>

  <script src="<?php echo ROUTE_WEBSITE; ?>/js/main.js"></script>
</body>

</html>