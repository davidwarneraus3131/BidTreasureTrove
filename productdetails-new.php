<style>
    @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap');



.card-wrapper{
    max-width: 1100px;
    margin: 0 auto;
}
img{
    width: 100%;
    display: block;
}
.img-display{
    overflow: hidden;
}
.img-showcase{
    display: flex;
    width: 100%;
    transition: all 0.5s ease;
}
.img-showcase img{
    min-width: 100%;
}
.img-select{
    display: flex;
}
.img-item{
    margin: 0.3rem;
}
.img-item:nth-child(1),
.img-item:nth-child(2),
.img-item:nth-child(3){
    margin-right: 0;
}
.img-item:hover{
    opacity: 0.8;
}
.product-content{
    padding: 2rem 1rem;
}
.product-title{
    font-size: 3rem;
    text-transform: capitalize;
    font-weight: 700;
    position: relative;
    color: #12263a;
    margin: 1rem 0;
}
.product-title::after{
    content: "";
    position: absolute;
    left: 0;
    bottom: 0;
    height: 4px;
    width: 80px;
    background: #12263a;
}
.product-link{
    text-decoration: none;
    text-transform: uppercase;
    font-weight: 400;
    font-size: 0.9rem;
    display: inline-block;
    margin-bottom: 0.5rem;
    background: #256eff;
    color: #fff;
    padding: 0 0.3rem;
    transition: all 0.5s ease;
}
.product-link:hover{
    opacity: 0.9;
}
.product-rating{
    color: #ffc107;
}
.product-rating span{
    font-weight: 600;
    color: #252525;
}
.product-price{
    margin: 1rem 0;
    font-size: 1rem;
    font-weight: 700;
}
.product-price span{
    font-weight: 400;
}
.last-price span{
    color: #f64749;
    text-decoration: line-through;
}
.new-price span{
    color: #256eff;
}
.product-detail h2{
    text-transform: capitalize;
    color: #12263a;
    padding-bottom: 0.6rem;
}
.product-detail p{
    font-size: 0.9rem;
    padding: 0.3rem;
    opacity: 0.8;
}
.product-detail ul{
    margin: 1rem 0;
    font-size: 0.9rem;
}
.product-detail ul li{
    margin: 0;
    list-style: none;
    background: url(https://fadzrinmadu.github.io/hosted-assets/product-detail-page-design-with-image-slider-html-css-and-javascript/checked.png) left center no-repeat;
    background-size: 18px;
    padding-left: 1.7rem;
    margin: 0.4rem 0;
    font-weight: 600;
    opacity: 0.9;
}
.product-detail ul li span{
    font-weight: 400;
}
.purchase-info{
    margin: 1.5rem 0;
}
.purchase-info input,
.purchase-info .btn{
    border: 1.5px solid #ddd;
    border-radius: 25px;
    text-align: center;
    padding: 0.45rem 0.8rem;
    outline: 0;
    margin-right: 0.2rem;
    margin-bottom: 1rem;
}
.purchase-info input{
    width: 60px;
}
.purchase-info .btn{
    cursor: pointer;
    color: #fff;
}
.purchase-info .btn:first-of-type{
    background: #256eff;
}
.purchase-info .btn:last-of-type{
    background: #f64749;
}
.purchase-info .btn:hover{
    opacity: 0.9;
}
.social-links{
    display: flex;
    align-items: center;
}
.social-links a{
    display: flex;
    align-items: center;
    justify-content: center;
    width: 32px;
    height: 32px;
    color: #000;
    
    margin: 0 0.2rem;
    border-radius: 50%;
    text-decoration: none;
    font-size: 0.8rem;
    transition: all 0.5s ease;
}
.social-links a:hover{
    background: white;
    border-color: transparent;
    color: #fff;
}

/* @media screen and (min-width: 992px){
    .card{
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        grid-gap: 1.5rem;
    }
    .card-wrapper{
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .product-imgs{
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
    .product-content{
        padding-top: 0;
    }
} */
</style>

<div class = "card-wrapper">
    <div class = "card">
      <!-- card left -->
      <div class = "product-imgs">
        <div class = "img-display">
          <div class = "img-showcase">
            <img src = "https://fadzrinmadu.github.io/hosted-assets/product-detail-page-design-with-image-slider-html-css-and-javascript/shoe_1.jpg" alt = "shoe image">
            <img src = "https://fadzrinmadu.github.io/hosted-assets/product-detail-page-design-with-image-slider-html-css-and-javascript/shoe_2.jpg" alt = "shoe image">
            <img src = "https://fadzrinmadu.github.io/hosted-assets/product-detail-page-design-with-image-slider-html-css-and-javascript/shoe_3.jpg" alt = "shoe image">
            <img src = "https://fadzrinmadu.github.io/hosted-assets/product-detail-page-design-with-image-slider-html-css-and-javascript/shoe_4.jpg" alt = "shoe image">
          </div>
        </div>
        <div class = "img-select">
          <div class = "img-item">
            <a href = "#" data-id = "1">
              <img src = "https://fadzrinmadu.github.io/hosted-assets/product-detail-page-design-with-image-slider-html-css-and-javascript/shoe_1.jpg" alt = "shoe image">
            </a>
          </div>
          <div class = "img-item">
            <a href = "#" data-id = "2">
              <img src = "https://fadzrinmadu.github.io/hosted-assets/product-detail-page-design-with-image-slider-html-css-and-javascript/shoe_2.jpg" alt = "shoe image">
            </a>
          </div>
          <div class = "img-item">
            <a href = "#" data-id = "3">
              <img src = "https://fadzrinmadu.github.io/hosted-assets/product-detail-page-design-with-image-slider-html-css-and-javascript/shoe_3.jpg" alt = "shoe image">
            </a>
          </div>
          <div class = "img-item">
            <a href = "#" data-id = "4">
              <img src = "https://fadzrinmadu.github.io/hosted-assets/product-detail-page-design-with-image-slider-html-css-and-javascript/shoe_4.jpg" alt = "shoe image">
            </a>
          </div>
        </div>
      </div>
      <!-- card right -->
      <div class = "product-content">
        <h2 class = "product-title">nike shoes</h2>
        <a href = "#" class = "product-link">visit nike store</a>
        <div class = "product-rating">
          <i class = "fas fa-star"></i>
          <i class = "fas fa-star"></i>
          <i class = "fas fa-star"></i>
          <i class = "fas fa-star"></i>
          <i class = "fas fa-star-half-alt"></i>
          <span>4.7(21)</span>
        </div>
  
        <div class = "product-price">
          <p class = "last-price">Old Price: <span>$257.00</span></p>
          <p class = "new-price">New Price: <span>$249.00 (5%)</span></p>
        </div>
  
        <div class = "product-detail">
          <h2>about this item: </h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo eveniet veniam tempora fuga tenetur placeat sapiente architecto illum soluta consequuntur, aspernatur quidem at sequi ipsa!</p>
          <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, perferendis eius. Dignissimos, labore suscipit. Unde.</p> -->
          <ul>
            <li>Color: <span>Black</span></li>
            <li>Available: <span>in stock</span></li>
            <li>Category: <span>Shoes</span></li>
            <li>Shipping Area: <span>All over the world</span></li>
            <li>Shipping Fee: <span>Free</span></li>
          </ul>
        </div>
        <div class = "purchase-info">
            <h3>Size</h3>
            <button type = "button" class = "btn">
                7 <i class = "fas fa-shopping-cart"></i>
              </button>
              <button type = "button" class = "btn" style="background-color: white; color: #000;">8</button>
              <button type = "button" class = "btn" style="background-color: white; color: #000;">9</button>
              <button type = "button" class = "btn" style="background-color: white; color: #000;">10</button>
            </div>
            

        </div>
  
        <div class = "purchase-info">
            <label for="">Quantity</label>
          <input type = "number" min = "0" value = "1">
          <button type = "button" class = "btn">
            Add to Cart <i class = "fas fa-shopping-cart"></i>
          </button>
          <button type = "button" class = "btn">Buy Now</button>
        </div>
  
        <div class = "social-links">
          <p>Share At: </p>
          <a href = "#">
            <img src="assets/images/facebook.png" alt="">
          </a>
          <a href = "#">
            <img src="assets/images/instagram.png" alt="">
          </a>
          <a href = "#">
            <img src="assets/images/twitter.png" alt="">
          </a>
          <a href = "#">
            <img src="assets/images/whatsapp.png" alt="">
          </a>
          
        </div>
      </div>
    </div>
  </div>
  <script>
    const imgs = document.querySelectorAll('.img-select a');
const imgBtns = [...imgs];
let imgId = 1;

imgBtns.forEach((imgItem) => {
    imgItem.addEventListener('click', (event) => {
        event.preventDefault();
        imgId = imgItem.dataset.id;
        slideImage();
    });
});

function slideImage(){
    const displayWidth = document.querySelector('.img-showcase img:first-child').clientWidth;

    document.querySelector('.img-showcase').style.transform = `translateX(${- (imgId - 1) * displayWidth}px)`;
}

window.addEventListener('resize', slideImage);
  </script>