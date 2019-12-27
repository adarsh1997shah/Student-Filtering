
//for sorting data by marks
$(document).ready(function() {
    var form = document.getElementById('12345');
    $('.markssort').click(function(){  
    $.ajax({
        url: "markssort.php",
        type: "post",
        data: $(form).serialize(),
        dataType: "html",
        success: function(data) {
        var myjson = JSON.parse(data);
        var a = myjson;
        
        var cardsubcontainer = document.getElementsByClassName('card-subcontainer');
        for (i = 0; i < (a.length); i++) {
            console.log( a[i].cvFullName+  " " +a[i].classX);
        }
        var  i, switching, b, shouldSwitch;
           switching = true;
        /* Make a loop that will continue until
        no switching has been done: */
        // while (switching) {
            // start by saying: no switching is done:
            // switching = false;
            // Loop through all classX marks:
            for(var j= 0;j<a.length;j++){
            for (i = 0; i < (a.length - 1)-j; i++) {
                // start by saying there should be no switching:
                // shouldSwitch = false;
                /* check if the next item should
                switch place with the current item: */
                if (a[i].classX < a[i + 1].classX) {
                    /* if next item is alphabetically
                    lower than current item, mark as a switch
                    and break the loop: */
                    var temp = a[i];
                    a[i] = a[i+1];
                    a[i+1] = temp;
                    
                    cardsubcontainer[i].parentNode.insertBefore(cardsubcontainer[i + 1], cardsubcontainer[i]);
                    // shouldSwitch = true;
                    // break;
                }
            }
            }
            for (i = 0; i < (a.length); i++) {
                console.log( a[i].cvFullName+  " " +a[i].classX);
            }
            // if (shouldSwitch) {
            // /* If a switch has been marked, make the switch
            // and mark the switch as done: */
            // var cardsubcontainer = document.getElementsByClassName('card-subcontainer');
            // cardsubcontainer[i].parentNode.insertBefore(cardsubcontainer[i + 1], cardsubcontainer[i]);
            // switching = true;
            // console.log("kjjhjhjk");
            // }
            // }

        }
    });
})
});



// function sort(){
//     var sortitem =  document.getElementsByClassName('profiledata-content');
//     var parent = document.getElementsByClassName('card-subcontainer');
//     var sortname = [];
//     var i=0;
//     for(var i=0;i<sortitem.length;i++){
//         sortname.push(sortitem[i].childNodes[1].innerHTML);
//     }
    
//     sortname.sort();
//     console.log(sortname);

//     for(var i=0;i<parent.length;i++){
//         parent[i].style.display = 'none';
//     }
    
//     for(var i=0;i<parent.length;i++){

//         setTimeout(function(){ for(var j=0;j<parent.length;j++){
//             if(sortname[i] === sortitem[j].childNodes[1].innerHTML){
//                 parent[j].style.display = 'inherit';
//             }
//         }}, 1000);
        
//     }

// }

// sort();




// $(document).ready(function() {
//     var $filters = $('.card-childcontainer');
//     var $boxes = $('.card-subcontainer');

//       $boxes.removeClass('is-animated').fadeOut().promise().done(function() {
//         $boxes.each(function(i) {
//             $(this).addClass('is-animated').delay((i++) * 200).fadeIn();
//           });
//         });
// });

// $(window).on('beforeunload', function(){
//     $(window).scrollTop(0);
// });




//for sorting the data
$(document).ready(function(){
    $(".sort").click(function(){
    var  i, switching, b, shouldSwitch;
    switching = true;
    /* Make a loop that will continue until
    no switching has been done: */
    while (switching) {
        // start by saying: no switching is done:
        switching = false;
        b = document.getElementsByClassName("profiledata-content");
        // Loop through all list-items:
        for (i = 0; i < (b.length - 1); i++) {
        // start by saying there should be no switching:
        shouldSwitch = false;
        /* check if the next item should
        switch place with the current item: */
        if (b[i].childNodes[1].innerHTML.toLowerCase() > b[i + 1].childNodes[1].innerHTML.toLowerCase()) {
            /* if next item is alphabetically
            lower than current item, mark as a switch
            and break the loop: */
            shouldSwitch = true;
            break;
        }
        }
        if (shouldSwitch) {
        /* If a switch has been marked, make the switch
        and mark the switch as done: */
        var cardsubcontainer = document.getElementsByClassName('card-subcontainer');
        cardsubcontainer[i].parentNode.insertBefore(cardsubcontainer[i + 1], cardsubcontainer[i]);
        switching = true;
        }
    }
    });
});



    // $("#"+FormID).on("submit", function(event) {
    //     event.preventDefault();
    //     $.ajax({
    //         url: "pageno.php",
    //         type: "post",
    //         data: $(this).serialize(),
    //         dataType: "html",
    //         success: function(data) {
    //             $('.pageno').html(data);
    //         }
    //     });
    // });