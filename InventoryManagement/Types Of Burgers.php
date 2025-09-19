<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Types Of Burger</title>
  <style>
    body {
      font-family: 'Arial', sans-serif;
      background-color: #9b56c9;
      margin: 0;
      padding: 0;
      text-align: center;
      color: #333; /* Text color for the body */
    }

    header {
      background-color: #1a1a1a; /* Dark gray for the header background */
      color: #fff;
      padding: 10px;
    }

    h1 {
      margin: 0;
      font-size: 2em;
    }

    section {
      padding: 20px;
    }

    .burger-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-around;
    }

    .burger {
      background-color: #fff;
      border: 2px solid #333;
      border-radius: 8px;
      padding: 15px;
      margin: 10px;
      width: 230px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease-in-out;
    }

    .burger:hover {
      transform: scale(1.05);
    }

    .burger img {
      width: 100%;
      border-radius: 8px;
    }

    footer {
      background-color: #1a1a1a; /* Dark gray for the footer background */
      color: #fff;
      padding: 5px;
      position: fixed;
      bottom: 0;
      width: 100%;
    }

 button {
      display: block;
      margin: 20px auto;
      padding: 10px 20px;
      font-size: 14px;
      background-color: #1a1a1a; /* Dark gray for the button background */
      color: #fff;
	padding:20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      text-decoration: none; /* Remove underlines by default */
    }
  </style>
</head>

<body>

  <header>
    <h1>Types Of Burgers</h1>
  </header>

  <section>
 <button onclick="window.location.href='Usertable.php'">Go back?</button>
    <div class="burger-container">
      <div class="burger">
        <img src="./Burger image/burger1.jpg" alt="Burger 1">
        <h2>Cheese Lover's Delight</h2>
        <p>Loaded with gooey cheese and special sauce.</p>
      </div>

      <div class="burger">
        <img src="./Burger image/burger2.jpg" alt="Burger 2">
        <h2>Bacon Bliss Burger</h2>
        <p>Crispy bacon strips on a bed of fresh veggies.</p>
      </div>

      <div class="burger">
        <img src="./Burger image/burger3.jpg" alt="Burger 3">
        <h2>Spicy Kick Burger</h2>
        <p>For those who like it hot and spicy.</p>
      </div>
    </div>

    <br>

    <div class="burger-container">
      <div class="burger">
        <img src="./Burger image/burger4.jpg" alt="Burger 1">
        <h2>Classic Burger</h2>
        <p>The classic beef burger is a staple of Australian cuisine. It typically consists of a beef patty, lettuce, tomato, cheese and various sauces, all served on a bun. The patty can be made from a variety of cuts of beef, such as chuck or sirloin, and is often seasoned with salt, pepper and other spices.</p>
      </div>

      <div class="burger">
        <img src="./Burger image/burger5.jpg" alt="Burger 2">
        <h2>Lamb Burger</h2>
        <p>Lamb burgers are made with ground lamb meat. They tend to have a distinct, rich flavour and are sometimes seasoned with herbs, such as rosemary, mint or cumin. Lamb burgers can also sometimes be topped with feta cheese or tzatziki sauce.</p>
      </div>

      <div class="burger">
        <img src="./Burger image/burger6.jpg" alt="Burger 3">
        <h2>Turkey Burger</h2>
        <p>The turkey sandwich inspired the turkey burger. Turkey is the tastiest, most delicious and most dry meat with different flavours, making it the ideal alternative to the red meat used in burger patties.</p>
      </div>
    </div>


		 
  </section>

  <footer>
    <p>&copy; 2023 Larita Types Of Burgers . All rights reserved.</p>
	
  </footer>

</body>

</html>
