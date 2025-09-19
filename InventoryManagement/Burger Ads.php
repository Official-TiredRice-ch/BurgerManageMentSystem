
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Burger Bonanza Video</title>
  <style>
    body {
      font-family: 'Arial', sans-serif;
      background-color: #4ea4dc;
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

    .video-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-around;
      margin-top: 20px;
    }

    .video-item {
      width: 30%;
      margin-bottom: 20px;
    }

    video {
      width: 100%;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .burger-description {
      background-color: #fff;
      border: 2px solid #333;
      border-radius: 8px;
      padding: 15px;
      margin-top: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    footer {
      background-color: #1a1a1a; /* Dark gray for the footer background */
      color: #fff;
      padding: 10px;
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
    <h1>Burger Advertisement</h1>
  </header>

  <section>
    <div class="video-container">
      <div class="video-item">
        <video controls>
          <!-- Replace 'video1.mp4' with the actual video source -->
          <source src="./burger ads/burger add1.mp4" type="video/mp4">
          Your browser does not support the video tag.
        </video>
        <div class="burger-description">
          <h2>The Maestro Burger</h2>
          <p>All 3 burgers have 2 common things: they are made of 2 pieces of 100% pure beef patties and have Gouda cheese. Of the other ingredients, there are still fresh red onions, pickled cucumbers, baked bacon, Batavia salad, and Smokey BBQ sauce.</p>
        </div>
      </div>

      <div class="video-item">
        <video controls>
          <!-- Replace 'video2.mp4' with the actual video source -->
          <source src="./burger ads/burger add2.mp4" type="video/mp4">
    
        </video>
        <div class="burger-description">
          <h2>The Moldy Whopper</h2>
          <p>The Whopper is a hamburger consisting of a flame-grilled 4 oz (110 g) beef patty, sesame seed bun, mayonnaise, lettuce, tomato, pickles, ketchup, and sliced onion.</p>
        </div>
      </div>

      <div class="video-item">
        <video controls>
          <!-- Replace 'video3.mp4' with the actual video source -->
          <source src="./burger ads/burger add.mp4" type="video/mp4">
          Your browser does not support the video tag.
        </video>
        <div class="burger-description">
          <h2>The Burger King</h2>
          <p>Founded in 1954, Burger King is the second largest fast food hamburger chain in the world. The original Home of the Whopper, our commitment to premium ingredients, signature recipes, and family-friendly dining experiences is what has defined our brand for more than 50 successful years.</p>
        </div>
      </div>
    </div>
	

  <button onclick="window.location.href='Usertable.php'">Go back?</button>



  </section>

  <footer>
    <p>&copy; 2023 Larita Burger Advertisement. All rights reserved.</p>
  </footer>

</body>

</html>
