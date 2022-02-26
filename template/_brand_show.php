<div class="marquee">
    <ul class="marquee-content">
        <?php

            $i=0;
            foreach ($resultbrand as $row){
            ?>
            <li>
                <div class="font-rale  border btn box-brand" >                                               
                    <a href="./search-product.php?pro_detail=<?= $row['brand_name']?? " " ; ?>"><img src="<?= $row['brand_logo']?? " " ; ?>" alt="Product1" class="img-fluid img-brand "></a>
                </div>
            </li>
            
            <?php

                }
        ?>
      <!-- <li><i class="fab fa-github"></i></li> -->
      
    </ul>
  </div>


<style>
    :root {
    --marquee-width: 100%;
    --marquee-height: 20vh;
    /* --marquee-elements: 12; */ /* defined with JavaScript */
    --marquee-elements-displayed: 9;
    --marquee-element-width: calc(var(--marquee-width) / var(--marquee-elements-displayed));
    --marquee-animation-duration: calc(var(--marquee-elements) * 3s);
    }

    .marquee {
    width: var(--marquee-width);
    /* height: var(--marquee-height); */
    height: 100px;
    /* background-color: white; */
   
    color: #eee;
    overflow: hidden;
    position: relative;
    }
    .marquee:before, .marquee:after {
    position: absolute;
    top: 0;
    width: 10rem;
    height: 100%;
    content: "";
    z-index: 1;
    }
    .marquee:before {
    left: 0;
    background: linear-gradient(to right, white 0%, transparent 30%);
    }
    .marquee:after {
    right: 0;
    background: linear-gradient(to left, white 0%, transparent 30%);
    }
    .marquee-content {
    list-style: none;
    height: 100%;
    display: flex;
    animation: scrolling var(--marquee-animation-duration) linear infinite;
    }
    /* .marquee-content:hover {
    animation-play-state: paused;
    } */

    @keyframes scrolling {
    0% { transform: translateX(0); }
    100% { transform: translateX(calc(-1 * var(--marquee-element-width) * var(--marquee-elements))); }
    }
    .marquee-content li {
        display: flex;
        justify-content: center;
        align-items: center;
        /* text-align: center; */
        flex-shrink: 0;
        width: var(--marquee-element-width);
        max-height: 85px;
        font-size: calc(var(--marquee-height)*3/5); /* 5rem; */
        white-space: nowrap;
    }

    .marquee-content li img {
        padding: 3px;
        background-color: white;
        width: 98%;
        border-radius: 3px;
    }

    @media (max-width: 600px) {
        html { font-size: 12px; }
        :root {
            --marquee-width: 100vw;
            --marquee-height: 16vh;
            --marquee-elements-displayed:3;
    }
    .marquee:before, .marquee:after { width: 5rem; }
    }
</style>


<script>
    const root = document.documentElement;
    const marqueeElementsDisplayed = getComputedStyle(root).getPropertyValue("--marquee-elements-displayed");
    const marqueeContent = document.querySelector("ul.marquee-content");

    root.style.setProperty("--marquee-elements", marqueeContent.children.length);

    for(let i=0; i<marqueeElementsDisplayed; i++) {
    marqueeContent.appendChild(marqueeContent.children[i].cloneNode(true));
    }
</script>