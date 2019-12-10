<?php
/*
 * Template file for the Front-Page
 */

get_header();
?>
<div class="hero">
  <div class="zoo">
    <svg class="zoo-animal" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M446.53 97.43C439.67 60.23 407.19 32 368 32c-39.23 0-71.72 28.29-78.54 65.54C126.75 112.96-.5 250.12 0 416.98.11 451.9 29.08 480 64 480h304c8.84 0 16-7.16 16-16 0-17.67-14.33-32-32-32h-79.49l35.8-48.33c24.14-36.23 10.35-88.28-33.71-106.6-23.89-9.93-51.55-4.65-72.24 10.88l-32.76 24.59c-7.06 5.31-17.09 3.91-22.41-3.19-5.3-7.08-3.88-17.11 3.19-22.41l34.78-26.09c36.84-27.66 88.28-27.62 125.13 0 10.87 8.15 45.87 39.06 40.8 93.21L469.62 480H560c8.84 0 16-7.16 16-16 0-17.67-14.33-32-32-32h-53.63l-98.52-104.68 154.44-86.65A58.16 58.16 0 0 0 576 189.94c0-21.4-11.72-40.95-30.48-51.23-40.56-22.22-98.99-41.28-98.99-41.28zM368 136c-13.26 0-24-10.75-24-24 0-13.26 10.74-24 24-24 13.25 0 24 10.74 24 24 0 13.25-10.75 24-24 24z"></path></svg>
    <svg class="zoo-animal" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path fill="currentColor" d="M581.12 96.2c-27.67-.15-52.5 17.58-76.6 26.62C489.98 88.27 455.83 64 416 64c-11.28 0-21.95 2.3-32 5.88V56c0-13.26-10.75-24-24-24h-16c-13.25 0-24 10.74-24 24v48.98C286.01 79.58 241.24 64 192 64 85.96 64 0 135.64 0 224v240c0 8.84 7.16 16 16 16h64c8.84 0 16-7.16 16-16v-70.79C128.35 407.57 166.72 416 208 416s79.65-8.43 112-22.79V464c0 8.84 7.16 16 16 16h64c8.84 0 16-7.16 16-16V288h128v32c0 8.84 7.16 16 16 16h32c8.84 0 16-7.16 16-16v-32c17.67 0 32-14.33 32-32v-92.02c0-34.09-24.79-67.59-58.88-67.78zM448 176c-8.84 0-16-7.16-16-16s7.16-16 16-16 16 7.16 16 16-7.16 16-16 16z"></path></svg>
    <svg class="zoo-animal" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M575.81 217.98C572.64 157.41 518.28 112 457.63 112h-9.37c-52.82 0-104.25-16.25-147.74-46.24-41.99-28.96-96.04-41.62-153.21-28.7C129.3 41.12-.08 78.24 0 224c.04 70.95 38.68 132.8 95.99 166.01V464c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16v-54.26c15.36 3.96 31.4 6.26 48 6.26 5.44 0 10.68-.73 16-1.18V464c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16v-59.43c14.24-5.06 27.88-11.39 40.34-19.51C342.07 355.25 393.86 336 448.46 336c25.48 0 16.01-.31 23.05-.78l74.41 136.44c2.86 5.23 8.3 8.34 14.05 8.34 1.31 0 2.64-.16 3.95-.5 7.09-1.8 12.05-8.19 12.05-15.5 0 0 .14-240.24-.16-246.02zM463.97 248c-13.25 0-24-10.75-24-24 0-13.26 10.75-24 24-24s24 10.74 24 24c0 13.25-10.75 24-24 24zm80 153.25l-39.86-73.08c15.12-5.83 28.73-14.6 39.86-25.98v99.06z"></path></svg>
  </div>

  <p>Get ready for a learning adventure!</p>
  <a href="#" class="btn hero-btn">Browse Courses </a>
</div>
<main>
  <section class="fit-content">
    <header>
      <span>Check out our</span>
      <h2>Popular Articles</h2>
      <div class="heading-underline"></div>
    </header>
    <div class="fp-articles">
      <div class="article-card">
        <header class="article-card-header">
          <img src="/wp-content/themes/codezoo/img/js-ts.png">
          <div class="card-color-bar yellow-bg"></div>
          <h4 class="category">Javascript</h4>
          <h3><a href="https://www.davidbergeron.dev/articles/typescript/">Typescript: Bah!</a></h3>
          <p><span class="article-card-author">David Bergeron</span></p>
        </header>
        <p class="article-card-excerpt">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        <hr class="article-card-separator">
        </hr>
        <footer>
          <div class="social-buttons">
            <button class="like-btn">
              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="heart" class="svg-inline--fa fa-heart fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path fill="currentColor" d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z"></path>
              </svg>
              <span>32</span>

            </button>
            <button class="share-btn">
              <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="share-square" class="svg-inline--fa fa-share-square fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                <path fill="currentColor" d="M561.938 158.06L417.94 14.092C387.926-15.922 336 5.097 336 48.032v57.198c-42.45 1.88-84.03 6.55-120.76 17.99-35.17 10.95-63.07 27.58-82.91 49.42C108.22 199.2 96 232.6 96 271.94c0 61.697 33.178 112.455 84.87 144.76 37.546 23.508 85.248-12.651 71.02-55.74-15.515-47.119-17.156-70.923 84.11-78.76V336c0 42.993 51.968 63.913 81.94 33.94l143.998-144c18.75-18.74 18.75-49.14 0-67.88zM384 336V232.16C255.309 234.082 166.492 255.35 206.31 376 176.79 357.55 144 324.08 144 271.94c0-109.334 129.14-118.947 240-119.85V48l144 144-144 144zm24.74 84.493a82.658 82.658 0 0 0 20.974-9.303c7.976-4.952 18.286.826 18.286 10.214V464c0 26.51-21.49 48-48 48H48c-26.51 0-48-21.49-48-48V112c0-26.51 21.49-48 48-48h132c6.627 0 12 5.373 12 12v4.486c0 4.917-2.987 9.369-7.569 11.152-13.702 5.331-26.396 11.537-38.05 18.585a12.138 12.138 0 0 1-6.28 1.777H54a6 6 0 0 0-6 6v340a6 6 0 0 0 6 6h340a6 6 0 0 0 6-6v-25.966c0-5.37 3.579-10.059 8.74-11.541z"></path>
              </svg>
              <span>15</span>
            </button>
          </div>
          <button class="favorite-btn">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="svg-inline--fa fa-star fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
              <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
            </svg>
            <span>9</span>
          </button>
        </footer>
      </div>
      <div class="article-card">
        <header class="article-card-header">
          <img src="/wp-content/themes/codezoo/img/py-code.jpg">
          <div class="card-color-bar green-bg"></div>
          <h4 class="category">Python</h4>
          <h3><a href="https://www.davidbergeron.dev/articles/python-the-good-bits/">Python: The Good Bits</a></h3>
          <p><span class="article-card-author">David Bergeron</span></p>
        </header>
        <p class="article-card-excerpt">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        <hr class="article-card-separator">
        </hr>
        <footer>
          <div class="social-buttons">
            <button class="like-btn">
              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="heart" class="svg-inline--fa fa-heart fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path fill="currentColor" d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z"></path>
              </svg>
              <span>32</span>

            </button>
            <button class="share-btn">
              <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="share-square" class="svg-inline--fa fa-share-square fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                <path fill="currentColor" d="M561.938 158.06L417.94 14.092C387.926-15.922 336 5.097 336 48.032v57.198c-42.45 1.88-84.03 6.55-120.76 17.99-35.17 10.95-63.07 27.58-82.91 49.42C108.22 199.2 96 232.6 96 271.94c0 61.697 33.178 112.455 84.87 144.76 37.546 23.508 85.248-12.651 71.02-55.74-15.515-47.119-17.156-70.923 84.11-78.76V336c0 42.993 51.968 63.913 81.94 33.94l143.998-144c18.75-18.74 18.75-49.14 0-67.88zM384 336V232.16C255.309 234.082 166.492 255.35 206.31 376 176.79 357.55 144 324.08 144 271.94c0-109.334 129.14-118.947 240-119.85V48l144 144-144 144zm24.74 84.493a82.658 82.658 0 0 0 20.974-9.303c7.976-4.952 18.286.826 18.286 10.214V464c0 26.51-21.49 48-48 48H48c-26.51 0-48-21.49-48-48V112c0-26.51 21.49-48 48-48h132c6.627 0 12 5.373 12 12v4.486c0 4.917-2.987 9.369-7.569 11.152-13.702 5.331-26.396 11.537-38.05 18.585a12.138 12.138 0 0 1-6.28 1.777H54a6 6 0 0 0-6 6v340a6 6 0 0 0 6 6h340a6 6 0 0 0 6-6v-25.966c0-5.37 3.579-10.059 8.74-11.541z"></path>
              </svg>
              <span>15</span>
            </button>
          </div>
          <button class="favorite-btn">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="svg-inline--fa fa-star fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
              <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
            </svg>
            <span>9</span>
          </button>
        </footer>
</div>
<div class="article-card">
        <header class="article-card-header">
          <img src="/wp-content/themes/codezoo/img/js-code.jpg">
          <div class="card-color-bar yellow-bg"></div>
          <h4 class="category">Javascript</h4>
          <h3><a href="https://www.davidbergeron.dev/articles/adventures-in-javascript/#">Adventures in Javascript</a></h3>
          <p><span class="article-card-author">David Bergeron</span></p>
        </header>
        <p class="article-card-excerpt">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        <hr class="article-card-separator">
        </hr>
        <footer>
          <div class="social-buttons">
            <button class="like-btn">
              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="heart" class="svg-inline--fa fa-heart fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path fill="currentColor" d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z"></path>
              </svg>
              <span>32</span>

            </button>
            <button class="share-btn">
              <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="share-square" class="svg-inline--fa fa-share-square fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                <path fill="currentColor" d="M561.938 158.06L417.94 14.092C387.926-15.922 336 5.097 336 48.032v57.198c-42.45 1.88-84.03 6.55-120.76 17.99-35.17 10.95-63.07 27.58-82.91 49.42C108.22 199.2 96 232.6 96 271.94c0 61.697 33.178 112.455 84.87 144.76 37.546 23.508 85.248-12.651 71.02-55.74-15.515-47.119-17.156-70.923 84.11-78.76V336c0 42.993 51.968 63.913 81.94 33.94l143.998-144c18.75-18.74 18.75-49.14 0-67.88zM384 336V232.16C255.309 234.082 166.492 255.35 206.31 376 176.79 357.55 144 324.08 144 271.94c0-109.334 129.14-118.947 240-119.85V48l144 144-144 144zm24.74 84.493a82.658 82.658 0 0 0 20.974-9.303c7.976-4.952 18.286.826 18.286 10.214V464c0 26.51-21.49 48-48 48H48c-26.51 0-48-21.49-48-48V112c0-26.51 21.49-48 48-48h132c6.627 0 12 5.373 12 12v4.486c0 4.917-2.987 9.369-7.569 11.152-13.702 5.331-26.396 11.537-38.05 18.585a12.138 12.138 0 0 1-6.28 1.777H54a6 6 0 0 0-6 6v340a6 6 0 0 0 6 6h340a6 6 0 0 0 6-6v-25.966c0-5.37 3.579-10.059 8.74-11.541z"></path>
              </svg>
              <span>15</span>
            </button>
          </div>
          <button class="favorite-btn">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="svg-inline--fa fa-star fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
              <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
            </svg>
            <span>9</span>
          </button>
        </footer>
</div>
<div class="article-card">
        <header class="article-card-header">
          <img src="/wp-content/themes/codezoo/img/wesbos.jpg">
          <div class="card-color-bar blue-bg"></div>
          <h4 class="category">VS Code</h4>
          <h3><a href="https://www.davidbergeron.dev/articles/ctrlp-into-my-heart/">Ctrl+P Into my Heart</a></h3>
          <p><span class="article-card-author">David Bergeron</span></p>
        </header>
        <p class="article-card-excerpt">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        <hr class="article-card-separator">
        </hr>
        <footer>
          <div class="social-buttons">
            <button class="like-btn">
              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="heart" class="svg-inline--fa fa-heart fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path fill="currentColor" d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z"></path>
              </svg>
              <span>32</span>

            </button>
            <button class="share-btn">
              <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="share-square" class="svg-inline--fa fa-share-square fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                <path fill="currentColor" d="M561.938 158.06L417.94 14.092C387.926-15.922 336 5.097 336 48.032v57.198c-42.45 1.88-84.03 6.55-120.76 17.99-35.17 10.95-63.07 27.58-82.91 49.42C108.22 199.2 96 232.6 96 271.94c0 61.697 33.178 112.455 84.87 144.76 37.546 23.508 85.248-12.651 71.02-55.74-15.515-47.119-17.156-70.923 84.11-78.76V336c0 42.993 51.968 63.913 81.94 33.94l143.998-144c18.75-18.74 18.75-49.14 0-67.88zM384 336V232.16C255.309 234.082 166.492 255.35 206.31 376 176.79 357.55 144 324.08 144 271.94c0-109.334 129.14-118.947 240-119.85V48l144 144-144 144zm24.74 84.493a82.658 82.658 0 0 0 20.974-9.303c7.976-4.952 18.286.826 18.286 10.214V464c0 26.51-21.49 48-48 48H48c-26.51 0-48-21.49-48-48V112c0-26.51 21.49-48 48-48h132c6.627 0 12 5.373 12 12v4.486c0 4.917-2.987 9.369-7.569 11.152-13.702 5.331-26.396 11.537-38.05 18.585a12.138 12.138 0 0 1-6.28 1.777H54a6 6 0 0 0-6 6v340a6 6 0 0 0 6 6h340a6 6 0 0 0 6-6v-25.966c0-5.37 3.579-10.059 8.74-11.541z"></path>
              </svg>
              <span>15</span>
            </button>
          </div>
          <button class="favorite-btn">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="svg-inline--fa fa-star fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
              <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
            </svg>
            <span>9</span>
          </button>
        </footer>
</div>
    </div>
  </section>

  <h2 class="fit-content category-heading">Categories </h2>
  <div class="category-section fit-content" style="margin-bottom: 2.5rem;">
    
    <a class="fp-category bg-yellow" href="https://www.davidbergeron.dev/category/javascript">
      <section>
        <h3>Javascript </h3>
      </section>
    </a>
    <a class="fp-category bg-blue" href="https://www.davidbergeron.dev/category/vscode">
      <section>
        <h3>VS Code</h3>
      </section>
    </a>
    <a class="fp-category bg-green" href="https://www.davidbergeron.dev/category/python">
      <section>
        <h3>Python</h3>
      </section>
    </a>  
  </div>

   <section class="fp-content fit-content">
    <header>
      <span>Venture down to our</span>
      <h2><a class="link category-link" href="https://www.davidbergeron.dev/category/movies">Video Courses</h2>
      <div class="heading-underline"></div>
    </header>
    <div class="fp-videos">
      <div class="article-card">
        <header class="article-card-header">
          <img src="/wp-content/themes/codezoo/img/5.jpg">
          <div class="card-color-bar yellow-bg"></div>
          <h4 class="category">Javascript</h4>
          <h3><a href="https://www.davidbergeron.dev/movies/javascript-basics/">Javascript - The Basics</a></h3>
        </header>
        <div class="movie-card-price">$39.99</div>
        <p class="article-card-excerpt">In this video Series, we will explore the basics of Javascript.</p>
        <hr class="article-card-separator">
        </hr>
        <footer>
          <div class="social-buttons">
            <button class="like-btn">
              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="heart" class="svg-inline--fa fa-heart fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path fill="currentColor" d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z"></path>
              </svg>
              <span>32</span>

            </button>
            <button class="share-btn">
              <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="share-square" class="svg-inline--fa fa-share-square fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                <path fill="currentColor" d="M561.938 158.06L417.94 14.092C387.926-15.922 336 5.097 336 48.032v57.198c-42.45 1.88-84.03 6.55-120.76 17.99-35.17 10.95-63.07 27.58-82.91 49.42C108.22 199.2 96 232.6 96 271.94c0 61.697 33.178 112.455 84.87 144.76 37.546 23.508 85.248-12.651 71.02-55.74-15.515-47.119-17.156-70.923 84.11-78.76V336c0 42.993 51.968 63.913 81.94 33.94l143.998-144c18.75-18.74 18.75-49.14 0-67.88zM384 336V232.16C255.309 234.082 166.492 255.35 206.31 376 176.79 357.55 144 324.08 144 271.94c0-109.334 129.14-118.947 240-119.85V48l144 144-144 144zm24.74 84.493a82.658 82.658 0 0 0 20.974-9.303c7.976-4.952 18.286.826 18.286 10.214V464c0 26.51-21.49 48-48 48H48c-26.51 0-48-21.49-48-48V112c0-26.51 21.49-48 48-48h132c6.627 0 12 5.373 12 12v4.486c0 4.917-2.987 9.369-7.569 11.152-13.702 5.331-26.396 11.537-38.05 18.585a12.138 12.138 0 0 1-6.28 1.777H54a6 6 0 0 0-6 6v340a6 6 0 0 0 6 6h340a6 6 0 0 0 6-6v-25.966c0-5.37 3.579-10.059 8.74-11.541z"></path>
              </svg>
              <span>15</span>
            </button>
          </div>
          <button class="favorite-btn">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="svg-inline--fa fa-star fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
              <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
            </svg>
            <span>9</span>
          </button>
        </footer>
</div>


<div class="article-card">
        <header class="article-card-header">
          <img src="/wp-content/themes/codezoo/img/10.jpg">
          <div class="card-color-bar blue-bg"></div>
          <h4 class="category">VS Code</h4>
          <h3><a href="https://www.davidbergeron.dev/movies/vscode-plugins/">VS Code Plugins</a></h3>
        </header>
        <div class="movie-card-price">$14.99</div>
        <p class="article-card-excerpt">What are the best VSCode Plugins These days? Check these videos to find out.</p>
        <hr class="article-card-separator">
        </hr>
        <footer>
          <div class="social-buttons">
            <button class="like-btn">
              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="heart" class="svg-inline--fa fa-heart fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path fill="currentColor" d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z"></path>
              </svg>
              <span>32</span>

            </button>
            <button class="share-btn">
              <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="share-square" class="svg-inline--fa fa-share-square fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                <path fill="currentColor" d="M561.938 158.06L417.94 14.092C387.926-15.922 336 5.097 336 48.032v57.198c-42.45 1.88-84.03 6.55-120.76 17.99-35.17 10.95-63.07 27.58-82.91 49.42C108.22 199.2 96 232.6 96 271.94c0 61.697 33.178 112.455 84.87 144.76 37.546 23.508 85.248-12.651 71.02-55.74-15.515-47.119-17.156-70.923 84.11-78.76V336c0 42.993 51.968 63.913 81.94 33.94l143.998-144c18.75-18.74 18.75-49.14 0-67.88zM384 336V232.16C255.309 234.082 166.492 255.35 206.31 376 176.79 357.55 144 324.08 144 271.94c0-109.334 129.14-118.947 240-119.85V48l144 144-144 144zm24.74 84.493a82.658 82.658 0 0 0 20.974-9.303c7.976-4.952 18.286.826 18.286 10.214V464c0 26.51-21.49 48-48 48H48c-26.51 0-48-21.49-48-48V112c0-26.51 21.49-48 48-48h132c6.627 0 12 5.373 12 12v4.486c0 4.917-2.987 9.369-7.569 11.152-13.702 5.331-26.396 11.537-38.05 18.585a12.138 12.138 0 0 1-6.28 1.777H54a6 6 0 0 0-6 6v340a6 6 0 0 0 6 6h340a6 6 0 0 0 6-6v-25.966c0-5.37 3.579-10.059 8.74-11.541z"></path>
              </svg>
              <span>15</span>
            </button>
          </div>
          <button class="favorite-btn">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="svg-inline--fa fa-star fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
              <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
            </svg>
            <span>9</span>
          </button>
        </footer>
</div>

<div class="article-card">
        <header class="article-card-header">
          <img src="/wp-content/themes/codezoo/img/2.jpg">
          <div class="card-color-bar green-bg"></div>
          <h4 class="category">Python</h4>
          <h3><a href="https://www.davidbergeron.dev/movies/python-game-development/">Game Development in Python</a></h3>
        </header>
        <div class="movie-card-price">$35.99</div>
        <p class="article-card-excerpt">Want to learn how to make games? Join us, as we build a roguelike in Python.</p>
        <hr class="article-card-separator">
        </hr>
        <footer>
          <div class="social-buttons">
            <button class="like-btn">
              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="heart" class="svg-inline--fa fa-heart fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path fill="currentColor" d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z"></path>
              </svg>
              <span>32</span>

            </button>
            <button class="share-btn">
              <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="share-square" class="svg-inline--fa fa-share-square fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                <path fill="currentColor" d="M561.938 158.06L417.94 14.092C387.926-15.922 336 5.097 336 48.032v57.198c-42.45 1.88-84.03 6.55-120.76 17.99-35.17 10.95-63.07 27.58-82.91 49.42C108.22 199.2 96 232.6 96 271.94c0 61.697 33.178 112.455 84.87 144.76 37.546 23.508 85.248-12.651 71.02-55.74-15.515-47.119-17.156-70.923 84.11-78.76V336c0 42.993 51.968 63.913 81.94 33.94l143.998-144c18.75-18.74 18.75-49.14 0-67.88zM384 336V232.16C255.309 234.082 166.492 255.35 206.31 376 176.79 357.55 144 324.08 144 271.94c0-109.334 129.14-118.947 240-119.85V48l144 144-144 144zm24.74 84.493a82.658 82.658 0 0 0 20.974-9.303c7.976-4.952 18.286.826 18.286 10.214V464c0 26.51-21.49 48-48 48H48c-26.51 0-48-21.49-48-48V112c0-26.51 21.49-48 48-48h132c6.627 0 12 5.373 12 12v4.486c0 4.917-2.987 9.369-7.569 11.152-13.702 5.331-26.396 11.537-38.05 18.585a12.138 12.138 0 0 1-6.28 1.777H54a6 6 0 0 0-6 6v340a6 6 0 0 0 6 6h340a6 6 0 0 0 6-6v-25.966c0-5.37 3.579-10.059 8.74-11.541z"></path>
              </svg>
              <span>15</span>
            </button>
          </div>
          <button class="favorite-btn">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="svg-inline--fa fa-star fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
              <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
            </svg>
            <span>9</span>
          </button>
        </footer>
</div>

<div class="article-card">
        <header class="article-card-header">
          <img src="/wp-content/themes/codezoo/img/6.jpg">
          <div class="card-color-bar blue-bg"></div>
          <h4 class="category">VS Code</h4>
          <h3><a href="https://www.davidbergeron.dev/movies/vscode-ide/">VS Code: A guide to setting up your IDE</a></h3>
        </header>
        <div class="movie-card-price">$12.99</div>
        <p class="article-card-excerpt">Let's get productive!</p>
        <hr class="article-card-separator">
        </hr>
        <footer>
          <div class="social-buttons">
            <button class="like-btn">
              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="heart" class="svg-inline--fa fa-heart fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path fill="currentColor" d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z"></path>
              </svg>
              <span>32</span>

            </button>
            <button class="share-btn">
              <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="share-square" class="svg-inline--fa fa-share-square fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                <path fill="currentColor" d="M561.938 158.06L417.94 14.092C387.926-15.922 336 5.097 336 48.032v57.198c-42.45 1.88-84.03 6.55-120.76 17.99-35.17 10.95-63.07 27.58-82.91 49.42C108.22 199.2 96 232.6 96 271.94c0 61.697 33.178 112.455 84.87 144.76 37.546 23.508 85.248-12.651 71.02-55.74-15.515-47.119-17.156-70.923 84.11-78.76V336c0 42.993 51.968 63.913 81.94 33.94l143.998-144c18.75-18.74 18.75-49.14 0-67.88zM384 336V232.16C255.309 234.082 166.492 255.35 206.31 376 176.79 357.55 144 324.08 144 271.94c0-109.334 129.14-118.947 240-119.85V48l144 144-144 144zm24.74 84.493a82.658 82.658 0 0 0 20.974-9.303c7.976-4.952 18.286.826 18.286 10.214V464c0 26.51-21.49 48-48 48H48c-26.51 0-48-21.49-48-48V112c0-26.51 21.49-48 48-48h132c6.627 0 12 5.373 12 12v4.486c0 4.917-2.987 9.369-7.569 11.152-13.702 5.331-26.396 11.537-38.05 18.585a12.138 12.138 0 0 1-6.28 1.777H54a6 6 0 0 0-6 6v340a6 6 0 0 0 6 6h340a6 6 0 0 0 6-6v-25.966c0-5.37 3.579-10.059 8.74-11.541z"></path>
              </svg>
              <span>15</span>
            </button>
          </div>
          <button class="favorite-btn">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="svg-inline--fa fa-star fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
              <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
            </svg>
            <span>9</span>
          </button>
        </footer>
</div>
    </div>
  </section>

  <!-- <section class="fp-content">
    <header>
      <span>Don't go into the field without</span>
      <h2>Developer Tooling</h2>
      <div class="heading-underline"></div>
    </header>
    <div class="fp-tooling">
    </div>
  </section>

  <section class="fp-content">
    <header>
      <span>Get to know</span>
      <h2>The Team</h2>
      <div class="heading-underline"></div>
    </header>
    <div class="fp-team"> 
    </div>
  </section> -->

</main>
<?php get_footer(); ?>