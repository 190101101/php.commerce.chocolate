<nav class="navbar navbar-expand-lg navbar-bg-dark navbar-dark">
     <a class="navbar-brand toggle-btn">
        <img src="/resources/files/system/svg/react.svg" class="nav-logo" id="logo">
    </a> 
    <form class="search-box">
        <input 
            name="search" 
            class="search-txt" 
            placeholder="Что ищем?..."
            required>
        <button class="search-btn">
            <img src="/resources/files/system/svg/search.svg" class="nav-search-icon">
        </button>
    </form>
    <button class="hamburger hamburger--elastic" id="hamburger" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <div class="hamburger-box ">
            <div class="hamburger-inner"></div>
        </div>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mx-auto">  
            <li> 
                <a href="/"> 
                    <img src="/resources/files/system/svg/home.svg">
                </a>
            </li>

            <li> 
                <!-- <a href="/shop/p/1">  -->
                <a href="/shop"> 
                    <img src="/resources/files/system/svg/store.png">
                </a>
            </li>
            
            <li class="cart_box"> 
                <a class="cart_btn"> 
                    <img src="/resources/files/system/svg/cart.svg">
                </a>
                <span class="cart_note">0</span>
            </li>
            <li>
                <div class="loader spinner-border spinner-border-sm text-success" role="status">
                  <span class="sr-only">Loading...</span>
                </div>
            </li>
        </ul>
    </div>
</nav>

<script>
    $('body').on('click', '.cart_btn', function() {
        history_update('/cart');
    });
</script>



