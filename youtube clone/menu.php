<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Serif:wght@100&family=Oswald:wght@200&family=Roboto:wght@100&family=Tektur&family=Victor+Mono:wght@100&display=swap"
      rel="stylesheet"
    />

    <!-- favicon -->
    <link rel="shortcut icon" href="icons/pngwing.com.ico" type="image/x-icon">

    <title>Youtube Clone</title>

    <link rel="stylesheet" href="menu.css" />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
  <body>
    <div class="container">
      <nav class="nav">
        <div class="logo">
          <div class="bars" id="menubtn">
            <i class="fa-solid fa-bars"></i>
          </div>
          <div class="youtube">
            <i class="fa-brands fa-youtube"></i>
            <p>Youtube Clone</p>
          </div>
        </div>
        <div class="search">
          <div class="txt">
            <input
              type="search"
              name="search"
              id="txtsearch"
              placeholder="Search"
              autocomplete="off"
            />
            <i class="fa-solid fa-magnifying-glass" onclick=""></i>
          </div>
          <div id="suggestionbox">
            <p id="suggestion1"><i class="fa-solid fa-magnifying-glass"></i><span>bla bla bla</span></p>
            <p id="suggestion2"><i class="fa-solid fa-magnifying-glass"></i><span>bla bla bla</span></p>
            <p id="suggestion3"><i class="fa-solid fa-magnifying-glass"></i><span>bla bla bla</span></p>
            <p id="suggestion4"><i class="fa-solid fa-magnifying-glass"></i><span>bla bla bla</span></p>
            <p id="suggestion5"><i class="fa-solid fa-magnifying-glass"></i><span>bla bla bla</span></p>
          </div>
        </div>
        <div class="logindetails">
          <div class="createicon">
            <i class="fa-solid fa-plus"></i>
          </div>
          <div class="notifications">
            <i class="fa-regular fa-bell"></i>
          </div>
          <div class="adlogin" id="adicon">
            <div class="adminlogin" >
              <i class="fa-solid fa-a"></i>
            </div>
            <div class="sidelogin" id="sidelogin">
              <ul>
                <div class="accountt">
                  
                </div>
                <div class="sideloginline"></div>
                <div class="sidelogindivs">
                  <i class="fa-solid fa-house"></i>
                  <li><a herf="#">Your Channel</a></li>
                </div>
                <div class="sidelogindivs">
                  <i class="fa-solid fa-house"></i>
                  <li><a herf="#">YouTube Studio</a></li>
                </div>
                <div class="sidelogindivs">
                  <i class="fa-solid fa-house"></i>
                  <li><a herf="#">Switch Account</a></li>
                </div>
                <div class="sidelogindivs">
                  <i class="fa-solid fa-house"></i>
                  <li><a herf="#">Sign Out</a></li>
                </div>
                <div class="sideloginline"></div>
                <div class="sidelogindivs">
                  <i class="fa-solid fa-house"></i>
                  <li><a herf="#">Purchase and Memberships</a></li>
                </div>
                <div class="sidelogindivs">
                  <i class="fa-solid fa-house"></i>
                  <li><a herf="#">Your Data in Youtube</a></li>
                </div>
                <div class="sideloginline"></div>
                <div class="sidelogindivs">
                  <i class="fa-solid fa-house"></i>
                  <li><a herf="#">Appearance:</a></li>
                </div>
                <div class="sidelogindivs">
                  <i class="fa-solid fa-house"></i>
                  <li><a herf="#">Language : </a></li>
                </div>
                <div class="sidelogindivs">
                  <i class="fa-solid fa-house"></i>
                  <li><a herf="#">Restriced Mode:</a></li>
                </div>
                <div class="sidelogindivs">
                  <i class="fa-solid fa-house"></i>
                  <li><a herf="#">Location</a></li>
                </div>
                <div class="sidelogindivs">
                  <i class="fa-solid fa-house"></i>
                  <li><a herf="#">Keyboard Shortcuts</a></li>
                </div>
                <div class="sideloginline"></div>
                <div class="sidelogindivs">
                  <i class="fa-solid fa-house"></i>
                  <li><a herf="#">Settings</a></li>
                </div>
                <div class="sideloginline"></div>
                <div class="sidelogindivs">
                  <i class="fa-solid fa-house"></i>
                  <li><a herf="#">Help</a></li>
                </div>
                <div class="sidelogindivs">
                  <i class="fa-solid fa-house"></i>
                  <li><a herf="#">Feedback</a></li>
                </div>
              </ul>
            </div>
          </div>
        </div>
      </nav>
      <main>
        <aside id="sidemenu">
          <div class="homediv">
            <ul>
              <div class="home">
                <i class="fa-solid fa-house"></i>
                <li><a herf="#">Home</a></li>
              </div>
              <div class="home">
                <i class="fa-solid fa-house"></i>
                <li><a herf="#">Shorts</a></li>
              </div>
              <div class="home">
                <i class="fa-solid fa-house"></i>
                <li><a herf="#">Subcriptions</a></li>
              </div>
            </ul>
          </div>
          <div class="line"></div>
          <div class="libdiv">
            <ul>
              <div class="home">
                <i class="fa-solid fa-house"></i>
                <li><a herf="#">library</a></li>
              </div>
              <div class="home">
                <i class="fa-solid fa-house"></i>
                <li><a herf="#">History</p >
              </div>
              <div class="home">
                <i class="fa-solid fa-house"></i>
                <li><a herf="#">Your videos</a></li>
              </div>
              <div class="home">
                <i class="fa-solid fa-house"></i>
                <li><a herf="#">Watch later</a></li>
              </div>
              <div class="home">
                <i class="fa-solid fa-house"></i>
                <li><a herf="#">Show more</a></li>
              </div>
            </ul>
          </div>
          <div class="line"></div>
          <div class="subscriptiondiv">
            <ul>
              <div class="home">
                <i class="fa-solid fa-house"></i>
                <li><a herf="#">subscriptions</a></li>
              </div>
            </ul>
          </div>
          <div class="line"></div>
          <div class="explorediv">
            <h4>Explore</h4>
            <ul>
              <div class="home">
                <i class="fa-solid fa-house"></i>
                <li><a herf="#">Trending</a></li>
              </div>
              <div class="home">
                
                <i class="fa-solid fa-house"></i>
                <li><a herf="#">Shopping</a></li>
              </div>
              <div class="home">
                <i class="fa-solid fa-house"></i>
                <li><a herf="#">Music</a></li>
              </div>
              <div class="home">
                <i class="fa-solid fa-house"></i>
                <li><a herf="#">Films</a></li>
              </div>
              <div class="home">
                <i class="fa-solid fa-house"></i>
                <li><a herf="#">Live</a></li>
              </div>
              <div class="home">
                <i class="fa-solid fa-house"></i>
                <li><a herf="#">Gaming</a></li>
              </div>
              <div class="home">
                <i class="fa-solid fa-house"></i>
                <li><a herf="#">News</a></li>
              </div>
              <div class="home">
                <i class="fa-solid fa-house"></i>
                <li><a herf="#">Sport</a></li>
              </div>
              <div class="home">
                <i class="fa-solid fa-house"></i>
                <li><a herf="#">Learning</a></li>
              </div>
              <div class="home">
                <i class="fa-solid fa-house"></i>
                <li><a herf="#">Fasion & Beauty</a></li>
              </div>
            </ul>
          </div>
          <div class="line"></div>
          <div class="moreyt">
            <h4>More From Youtube</h4>
            <ul>
              <div class="home">
                <i class="fa-solid fa-house"></i>
                <li><a herf="#">Youtube Premium</a></li>
              </div>
              <div class="home">
                <i class="fa-solid fa-house"></i>
                <li><a herf="#">Youtube Studio</a></li>
              </div>
              <div class="home">
                <i class="fa-solid fa-house"></i>
                <li><a herf="#">Youtube Music</a></li>
              </div>
              <div class="home">
                <i class="fa-solid fa-house"></i>
                <li><a herf="#">Youtube Kids</a></li>
              </div>
            </ul>
          </div>
          <div class="line"></div>
          <div class="settingsdiv">
            <ul>
              <div class="home">
                <i class="fa-solid fa-house"></i>
                <li><a herf="#">Settings</a></li>
              </div>
              <div class="home">
                <i class="fa-solid fa-house"></i>
                <li><a herf="#">Report</a></li>
              </div>
              <div class="home">
                <i class="fa-solid fa-house"></i>
                <li><a herf="#">Help</a></li>
              </div>
              <div class="home">
                <i class="fa-solid fa-house"></i>
                <li><a herf="#">Feedback</a></li>
              </div>
            </ul>
          </div>
        </aside>
      </main>
    </div>
    <script src="menu.js"></script>
  </body>
</html>
