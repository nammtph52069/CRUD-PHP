<?php
  require_once('./connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Products</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    body {
      min-height: 100vh;
      width: 100vw;
      color: #fff;
      background-color: #000;
      font-family: Arial, Helvetica, sans-serif;
    }
    .headerTitle {
      font-size: 20px;
      font-weight: 500;
      text-align: center;
      padding:  20px 0;
    }
    main {
      display: flex;
      align-items: center;
      margin: 20px 0;
    }
    .wrapper {
      width: 1200px;
      margin: 0 auto;
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 10px;
    }
    .item > a {
      color: unset;
      text-decoration: none;
      padding: 10px;
      display: flex;
      gap: 10px;
      flex-direction: column;
    }
    .item > a > img {
      width: 100%;
      border-radius: 6px;
    }
    .productBtn {
      display: flex;
      align-items: center;
      justify-content: space-between;
    }
    .productBtn > button {
      padding: 5px 20px;
      font-size: medium;
      cursor: pointer;
      border: 1px solid violet;
      color: white;
      border-radius: 4px;
      background-color: unset;
      transition: all .2s linear;
    }
    .productBtn > button:hover {
      background-color: gray;
    }
  </style>
</head>
<body>
  <div class="container">
    <header>
      <h1 class="headerTitle">Products</h1>
    </header>
    <main>
      <div class="wrapper">
        <div class="item">
          <a href="#">
            <img src="./images/ip15promax256.jpg" alt="">
            <h4 class="productName">Iphone 15 pro max 256GB</h4>
            <p class="productPrice">31000000<sup>d</sup></p>
            <div class="productBtn">
              <button>Add to cart</button>
              <button>Buy now</button>
            </div>
          </a>
        </div>
        <div class="item">
          <a href="#">
            <img src="./images/ip15promax256.jpg" alt="">
            <h4 class="productName">Iphone 15 pro max 256GB</h4>
            <p class="productPrice">31000000<sup>d</sup></p>
            <div class="productBtn">
              <button>Add to cart</button>
              <button>Buy now</button>
            </div>
          </a>
        </div>
        <div class="item">
          <a href="#">
            <img src="./images/ip15promax256.jpg" alt="">
            <h4 class="productName">Iphone 15 pro max 256GB</h4>
            <p class="productPrice">31000000<sup>d</sup></p>
            <div class="productBtn">
              <button>Add to cart</button>
              <button>Buy now</button>
            </div>
          </a>
        </div>
        <div class="item">
          <a href="#">
            <img src="./images/ip15promax256.jpg" alt="">
            <h4 class="productName">Iphone 15 pro max 256GB</h4>
            <p class="productPrice">31000000<sup>d</sup></p>
            <div class="productBtn">
              <button>Add to cart</button>
              <button>Buy now</button>
            </div>
          </a>
        </div>
      </div>
    </main>
  </div>
</body>
</html>