/* Java Script */
$(document).ready(function(){

    // Start Brand carousel
        $("#brand .owl-carousel").owlCarousel({
            // loop: true,
            nav: false,
            dots: false,
            responsive : {
                0: {
                    // items: 2.5
                },
                600: {
                    // items: 4.5
                },
                1000 : {
                    loop: true,
                    items: 8.5
                }
            }
        });
    // End Brand carousel
    

    // Product Qty Button
    let $qty_up=$(".qty .qty-up");
    let $qty_down=$(".qty .qty-down");
    //let $input=$(".qty .qty_input");
    
        //Click on Qty Up Button
        $qty_up.click(function(e){
            let $input =$(`.qty_input[data-id='${$(this).data("id")}']`)
            if($input.val() >=1 && $input.val()<=9){
                $input.val(function(i, oldvan){
                    return ++oldvan;
                    
                })
            }
        });
    
        //Click on Qty Down Button
        $qty_down.click(function(e){
            let $input =$(`.qty_input[data-id='${$(this).data("id")}']`)
            if($input.val() > 1 && $input.val() <= 10){
                $input.val(function(i, oldvan){
                    return --oldvan;
                })
            }
        });



        $("#category .owl-carousel").owlCarousel({
            // loop: true,
            
            nav: false,
            dots: false,
            
            responsive : {
                0: {
                    // items: 3.5
                },
                600: {
                    // items: 5.3
                },
                1000 : {
                    loop: true,
                    items: 9.5
                }
            }
        });
    

     

    
    });
    /* ! Java Script */