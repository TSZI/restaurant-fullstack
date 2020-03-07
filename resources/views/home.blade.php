@extends('layouts.landing')


@section('content')
    
<section id="information">
  <div class="restaurant-image">
    <img src="img/top-down.jpg" alt="">
  </div>
  <div class="info">
    <h2>We Started From The Bottom In 1987</h2>
    <div class="paragraphs">
      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Porro ipsum eum, doloremque, repudiandae vitae explicabo sequi corrupti exercitationem assumenda, illo omnis praesentium maiores quod dolorem suscipit? Ex debitis laboriosam labore. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odio repellat animi adipisci perferendis minus doloribus ipsam accusantium nemo? Quae modi provident iusto aliquam voluptatibus eligendi animi in numquam odio ea!</p>
      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Porro ipsum eum, doloremque, repudiandae vitae explicabo sequi corrupti exercitationem assumenda, illo omnis praesentium maiores quod dolorem suscipit? Ex debitis laboriosam labore. Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, incidunt earum autem a ad fuga cum architecto quae illum ipsa, dolore sint, harum exercitationem omnis corrupti explicabo sit nisi quas?</p>
    </div>
    <a href="#" class="about-link">
      <span>Learn more about our resaurant</span>
      <div class="circle-right">
        <i class="fa fa-chevron-right" aria-hidden="true"></i>
      </div>
    </a>
  </div>
</section>
<section id="food-preview">
  <h2>We have everything you need to satisfy your hunger</h2>
  <div class="button-rounded">View Our Menu</div>
  <div class="container">
    <div class="right-btn">
      <i class="fa fa-chevron-right" aria-hidden="true"></i>
    </div>
    <div class="left-btn">
      <i class="fa fa-chevron-left" aria-hidden="true"></i>
    </div>
  <div class="food-slider">
   <div class="sliding-system">
     <div class="slide">
       <div class="background"></div>
       <div class="content">
         <div class="food-title">
           Starters
         </div>
         <p class="food-description">
           Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum reprehenderit ut adipisci optio laborum dolor ea! Aspernatur eos sit reiciendis ut. Eius culpa aperiam error, exercitationem atque ex. Nostrum, aspernatur!
         </p>
         <div class="food-image">
           <img src="/img/CHIPS.png" alt="">
         </div>
       </div>
     </div>
     <div class="slide">
       <div class="background"></div>
       <div class="content">
         <div class="food-title">
           Burgers
         </div>
         <p class="food-description">
           Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum reprehenderit ut adipisci optio laborum dolor ea! Aspernatur eos sit reiciendis ut. Eius culpa aperiam error, exercitationem atque ex. Nostrum, aspernatur!
         </p>
         <div class="food-image">
           <img src="/img/hamburger-and-fries-png-4.png" alt="">
         </div>
       </div>
     </div>
     <div class="slide">
       <div class="background"></div>
       <div class="content">
         <div class="food-title">
           Entrees
         </div>
         <p class="food-description">
           Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum reprehenderit ut adipisci optio laborum dolor ea! Aspernatur eos sit reiciendis ut. Eius culpa aperiam error, exercitationem atque ex. Nostrum, aspernatur!
         </p>
         <div class="food-image">
           <img src="/img/342-3422633_pork-entrees-steak-pork-png.png" alt="">
         </div>
       </div>
     </div>
     <div class="slide">
       <div class="background"></div>
       <div class="content">
         <div class="food-title">
           Sides
         </div>
         <p class="food-description">
           Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum reprehenderit ut adipisci optio laborum dolor ea! Aspernatur eos sit reiciendis ut. Eius culpa aperiam error, exercitationem atque ex. Nostrum, aspernatur!
         </p>
         <div class="food-image">
           <img src="/img/Salad-Green-HD-PNG.png" alt="">
         </div>
       </div>
     </div>
     <div class="slide">
       <div class="background"></div>
       <div class="content">
         <div class="food-title">
           Deserts
         </div>
         <p class="food-description">
           Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum reprehenderit ut adipisci optio laborum dolor ea! Aspernatur eos sit reiciendis ut. Eius culpa aperiam error, exercitationem atque ex. Nostrum, aspernatur!
         </p>
         <div class="food-image">
           <img src="/img/cheesecake-transparent-european-6.png" alt="">
         </div>
       </div>
     </div>
     <div class="slide">
       <div class="background"></div>
       <div class="content">
         <div class="food-title">
           Beers
         </div>
         <p class="food-description">
           Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum reprehenderit ut adipisci optio laborum dolor ea! Aspernatur eos sit reiciendis ut. Eius culpa aperiam error, exercitationem atque ex. Nostrum, aspernatur!
         </p>
         <div class="food-image">
           <img src="/img/cheesecake-transparent-european-6.png" alt="">
         </div>
       </div>
     </div>
     <div class="slide">
       <div class="background"></div>
       <div class="content">
         <div class="food-title">
           Drinks
         </div>
         <p class="food-description">
           Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum reprehenderit ut adipisci optio laborum dolor ea! Aspernatur eos sit reiciendis ut. Eius culpa aperiam error, exercitationem atque ex. Nostrum, aspernatur!
         </p>
         <div class="food-image">
           <img src="/img/cheesecake-transparent-european-6.png" alt="">
         </div>
       </div>
     </div>
   </div>
  </div>
</div>
</section>
@endsection