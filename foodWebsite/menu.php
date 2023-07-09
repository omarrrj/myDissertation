<?xml version="1.0" encoding="UTF-8"?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="ISO-8859-1" />
    <link rel="stylesheet" href="css/menustyle.css" />
    <link
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Talent Burgers</title>
    <script type="text/javascript" src="javascript/addToCart.js"></script>
  </head>
  <body>
    <nav class="navbar">
      <div class="container-fluid">
        <img
          src="images/burgerlogo.jpg"
          alt="Burger logo"
          width="100"
          height="100"
        /><a class="navbar-brand" href="index.php">Talent Burgers</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="offcanvas"
          data-bs-target="#offcanvasNavbar"
          aria-controls="offcanvasNavbar"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="offcanvas offcanvas-end"
          tabindex="-1"
          id="offcanvasNavbar"
          aria-labelledby="offcanvasNavbarLabel"
        >
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="offcanvas"
              aria-label="Close"
            ></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php"
                  >Home</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="login.php">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="signup.php">Sign Up</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="contactus.php">Contact Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="menu.php">Food Menu</a>
              </li>
            </ul>
            <form class="d-flex mt-3" role="search">
              <input
                class="form-control me-2"
                type="search"
                placeholder="Search"
                aria-label="Search"
              />
              <button class="btn btn-outline-success" type="submit">
                Search
              </button>
            </form>

            <section class="container content-section">
              <h2 class="section-header">CART</h2>
              <div class="cart-row">
                <span class="cart-price cart-header cart-column">PRICE</span>
                <span class="cart-quantity cart-header cart-column"
                  >QUANTITY</span
                >
              </div>
              <div class="cart-items"></div>
              <div class="cart-total">
                <strong class="cart-total-title">Total</strong>
                <span class="cart-total-price">£0</span>
              </div>
              <button class="btn btn-primary btn-success" type="button">
                PURCHASE
              </button>
            </section>
          </div>
        </div>
      </div>
    </nav>

    <div>
      <h1 class="mealH">Meals</h1>
      <table>
        <tbody>
          <tr>
            <td>
              <div class="burgers">
                <span class="burger-title">Classic Cheeseburger Meal</span>
                <img
                  class="burger-image"
                  src="images/cheeseburger.jpg"
                  alt="Classic Cheeseburger Meal"
                />
                <div class="burger-details">
                  <span class="burger-price">£4.99</span><br>
                  <button
                    class="btn btn-primary burger-item-button"
                    type="button"
                  >
                    ADD TO CART
                  </button>
                </div>
              </div>
            </td>
            <td>
              <div class="burgers">
                <span class="burger-title">Fried Chicken Burger Meal</span>
                <img
                  class="burger-image"
                  src="images/chickenburger.jpg"
                  alt="Fried Chicken Burger Meal"
                />
                <div class="burger-details">
                  <span class="burger-price">£4.99</span><br>
                  <button
                    class="btn btn-primary burger-item-button"
                    type="button"
                  >
                    ADD TO CART
                  </button>
                </div>
              </div>
            </td>
            <td>
              <div class="burgers">
                <span class="burger-title">Peri Peri Burger Meal</span>
                <img
                  class="burger-image"
                  src="images/periburger.jpeg"
                  alt="Peri Peri Burger Meal"
                />
                <div class="burger-details">
                  <span class="burger-price" style="margin: 0px 40px;">£6.99</span><br>
                  <button
                    class="btn btn-primary burger-item-button"
                    type="button"
            	  >
                    ADD TO CART
                  </button>
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="burgers">
                <span class="burger-title">Tower Burger Meal</span>
                <img
                  class="burger-image"
                  src="images/towerburger.png"
                  alt="Tower Burger Meal"
                />
                <div class="burger-details">
                  <span class="burger-price">£6.99</span><br>
                  <button
                    class="btn btn-primary burger-item-button"
                    type="button"
                  >
                    ADD TO CART
                  </button>
                </div>
              </div>
            </td>
            <td>
              <div class="burgers">
                <span class="burger-title">BBQ Stack Burger Meal</span>
                <img
                  class="burger-image"
                  src="images/towerburger.png"
                  alt="BBQ Stack Burger Meal"
                />
                <div class="burger-details">
                  <span class="burger-price">£6.99</span><br>
                  <button
                    class="btn btn-primary burger-item-button"
                    type="button"
                  >
                    ADD TO CART
                  </button>
                </div>
              </div>
            </td>
            <td>
              <div class="burgers">
                <span class="burger-title">Smashed Burger Meal</span>
                <img
                  class="burger-image"
                  src="images/smashedb.jpg"
                  alt="Smashed Burger Meal"
                  width="300"
                  height="200"
                />
                <div class="burger-details">
                  <span class="burger-price">£13.00</span><br>
				  
                  <button
                    class="btn btn-primary burger-item-button"
                    type="button"
                  >
                    ADD TO CART
                  </button>
                </div>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <table>
      <tbody>
        <!-- <section class="container content-section">
          <div class="shop-items">
            <div class="burgers">
              <span class="burger-title">Classic Cheeseburger Meal</span>
              <img
                class="burger-image"
                src="images/cheeseburger.jpg"
                alt="Classic Cheeseburger Meal"
                width="100"
                height="100"
              />
              <div class="burger-details">
                <span class="burger-price">£4.99</span>
                <button
                  class="btn btn-primary burger-item-button"
                  type="button"
                >
                  ADD TO CART
                </button>
              </div>
            </div>
            <div class="burgers">
              <span class="burger-title">Fried Chicken Burger Meal</span>
              <img
                class="burger-image"
                src="images/cheeseburger.jpg"
                alt="Fried Chicken Burger Meal"
                width="100"
                height="100"
              />
              <div class="burger-details">
                <span class="burger-price">£4.99</span>
                <button
                  class="btn btn-primary burger-item-button"
                  type="button"
                >
                  ADD TO CART
                </button>
              </div>
            </div>
          </div>
        </section>
        <section class="container content-section">
          <h2 class="section-header">CART</h2>
          <div class="cart-row">
            <span class="cart-item cart-header cart-column">ITEM</span>
            <span class="cart-price cart-header cart-column">PRICE</span>
            <span class="cart-quantity cart-header cart-column">QUANTITY</span>
          </div>
          <div class="cart-items"></div>
          <div class="cart-total">
            <strong class="cart-total-title">Total</strong>
            <span class="cart-total-price">$0</span>
          </div>
          <button class="btn btn-primary btn-purchase" type="button">
            PURCHASE
          </button>
        </section> -->
      </tbody>
    </table>
  </body>
</html>
