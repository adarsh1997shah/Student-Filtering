
//  $('select').selectpicker();

var limit;

// for card drop down options
var carddropcontent = document.getElementsByClassName('carddrop-content');
function carddrop(e){
    var x = e.parentNode.parentNode;
    var y = x.childNodes[3];


    for(var i=0;i<carddropcontent.length;i++){
        if(y.id == carddropcontent[i].id && (carddropcontent[i].classList.contains('dropshow'))){
            // $(carddropcontent[i]).hide('dropshow');
            carddropcontent[i].classList.remove('dropshow');     
        }
        else if((y.id == carddropcontent[i].id)){
            // $(carddropcontent[i]).show('dropshow');
            carddropcontent[i].classList.add('dropshow');
            // carddropcontent[i].classList.remove('dropshow');
        }
        else{
        // $(carddropcontent[i]).hide('dropshow');
        carddropcontent[i].classList.remove('dropshow');
        }
    }
}


//for hiding the menus by clicking anywhere outside the card dropdown
$(document).on('click', function(event) {
    if (!$(event.target).closest('.carddrop-container').length) {
        // console.log($(event.target).closest('.carddrop-container'));
        // Hide the menus.
      $('.carddrop-content').removeClass('dropshow');
    }
});
  

//for checkbox checking
var checkbox = document.getElementsByClassName('btn-link');
var arr = [];
var pop = document.getElementById('idpop-up');

    
var text;
var idchild = document.getElementsByClassName('stuid');

$(document).on('click', ".btn-link", function () {

for(var i=0;i<checkbox.length;i++){

var bool = false;


    text = idchild[i].innerText;
    // text = $(this).attr('id');
    // console.log("ASdad"+text);

    if(checkbox[i].checked){
        
        for(var j=0;j<arr.length;j++){
            if(text==arr[j]){
                bool=true;
            }
        }
        if(bool!=true){
        arr.push(text);
        }
    
        $("#collapseOne").show('show');
    }
    else{
        if(checkbox[i].checked === false){
            var index = arr.indexOf(text);
            if(index!=-1){
            arr.splice(index,1);
            }
        }
    }

}
console.log(arr);

var count=0;
for(var i=0;i<checkbox.length;i++){
    if(checkbox[i].checked === false){
        count++;
    }
}
if(checkbox.length === count ){
$("#collapseOne").hide('hide');
}
});


//for select all or select none 
var count2 = 0;
$(document).on('click', ".select", function () {
if(count2 %2 == 0){
    for(var i = 0;i<checkbox.length;i++){

        checkbox[i].checked = true;
        text = idchild[i].innerHTML;
               
        var bool = false;          
        for(var j=0;j<arr.length;j++){
            if(text==arr[j]){
                bool=true;
            }
        }
        if(bool!=true){
        arr.push(text);
        }
    }
    console.log(arr);
}
else{
    for(var i = 0;i<checkbox.length;i++){
        checkbox[i].checked = false;
        arr = [];
    }
$("#collapseOne").hide('hide');
}
count2++;
});


//for the popup box
var h6;
var modelbody = document.getElementById('modelid');
$(".btn-show").click(function(){
    
    for(var i=0;i<arr.length;i++){
        
    h6 = document.createElement('H6');   
    var t = document.createTextNode(arr[i]);
    h6.appendChild(t);
    modelbody.appendChild(h6);
    }
});

function myclear2(){    
modelbody.innerHTML = "";
}
function myclear(){    
pop.innerHTML = "";
}




//for the search box to search for particular name
$("#search-box").keyup(function(){
    var input, filter,li, a, i, txtValue;
    input = document.getElementById("search-box");
    filter = input.value.toUpperCase();
    li = document.getElementsByClassName("card-subcontainer");
    a = document.getElementsByClassName("profiledata-content");
    console.log(li);
    for (i = 0; i < li.length; i++) {
        var b = a[i].childNodes; 
        txtValue = b[1].textContent || b[1].innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
});




//for the range slider
var rangeSlider = function(){
var slider = $('.range-slider'), //div tag
    range = $('.range-slider__range'), //input tag
    value = $('.range-slider__value'); // span tag

slider.each(function(){
    
value.each(function(){
    // this function is for default value;
    var value = $(this).prev().attr('value');
    $(this).html(value);
});

range.on('input', function(){
    $(this).next().html(this.value);
});
});
};

rangeSlider();


//for automatic fetch data on first reload
$(document).ready(function() {
    var form = document.getElementById('12345');
    $.ajax({
        url: "filterdatafetch.php",
        type: "post",
        data: $(form).serialize()+"&counter="+$('.next').val(),
        dataType: "html",
        success: function(data) {
            $('#filter-heading').html(data);
        }
    });
});


//for retrieving number of pages  
$(document).ready(function() {
    var form = document.getElementById('12345');
    $.ajax({
        url: "pageno.php",
        type: "post",
        data: $(form).serialize(),
        dataType: "html",
        success: function(data) {
            alert(data);
            limit = data;
        }
    });
});



//for sorting
$('.sort').on('click',function(){
    var form = document.getElementById('12345');
    var val = document.getElementById('namesort').value;
    $('#filter-heading').html("");
    $.ajax({
        url: "namesort.php",
        type: "post",
        data: $(form).serialize()+"&val="+val,
        dataType: "html",
        success: function(data) {
            $('#filter-heading').html(data);
        }
    });
});


$('.markssortclassX').on('click',function(){
    var form = document.getElementById('12345');
    var val = document.getElementById('classX').value;
    $('#filter-heading').html("");
    $.ajax({
        url: "markssort.php",
        type: "post",
        data: $(form).serialize()+"&valclassX="+val,
        dataType: "html",
        success: function(data) {
            $('#filter-heading').html(data);
        }
    });
});


$('.markssortclassXII').on('click',function(){
    var form = document.getElementById('12345');
    var val = document.getElementById('classXII').value;
    $('#filter-heading').html("");
    $.ajax({
        url: "markssort.php",
        type: "post",
        data: $(form).serialize()+"&valclassXII="+val,
        dataType: "html",
        success: function(data) {
            $('#filter-heading').html(data);
        }
    });
});



$('.markssortgraduation').on('click',function(){
    var form = document.getElementById('12345');
    var val = document.getElementById('graduation').value;
    $('#filter-heading').html("");
    $.ajax({
        url: "markssort.php",
        type: "post",
        data: $(form).serialize()+"&valgraduation="+val,
        dataType: "html",
        success: function(data) {
            $('#filter-heading').html(data);
        }
    });
});


//for page no.
function page(e){
    if($(e).html() == 'Next' && parseInt($('.next').val(),10)<limit){
        $('.next').val(parseInt($('.next').val(),10)+1);
    }
    if($(e).html() == 'Previous' && parseInt($('.previous').val(),10)>=1){
        $('.previous').val(parseInt($('.next').val(),10)-1);
        $('.next').val(parseInt($('.previous').val(),10));
    }
    alert($(e).val());
        var form = document.getElementById('12345');
    $.ajax({
        url: "filterdatafetch.php",
        type: "post",
        data:  $(form).serialize()+"&counter="+$(e).val(),
        dataType: "html",
        success: function(data) {
            $('#filter-heading').html(data); 
        }
    });
    $("html").animate({ scrollTop: 0 }, "slow");
};



//for sending data
function UdateData(FormID){
    $("#"+FormID).on("submit", function(event) {
        event.preventDefault();
        $('.next').val(1);
        $('.previous').val(1);
        $("#collapseOne").hide('hide');
        count2 = 0;
        $.ajax({
            url: "filterdatafetch.php",
            type: "post",
            data: $(this).serialize()+"&counter="+1,
            dataType: "html",
            success: function(data) {
            $('#filter-heading').html(data);

            // var myjson = JSON.parse(data)
            // var len = myjson.length;
            
                // $('#arraydata').html.appendChild(myjson[i].preferredLocation);
            
        //     var output = "";
        //     for (var i=0;i<=len;i++) {
                
        //     output += 
        //     '<div class="card-subcontainer animated-search-filter">'+
        //     '<div class="profile">'+
        //         '<div>'+
        //         '<p class="id"></p>'+
        //         '</div>'+
        //         '<div class="profilePic">'+
        //             '<img class="avatar" src="https://avatars1.githubusercontent.com/u/8537504?s=400&amp;v=4" alt="Username">'+
        //         '</div>'+
        //     '</div>'+

        //     '<div class="profiledata">'+

        //         '<div class="checkbox">'+
        //             '<input type="checkbox" class="btn btn-link">'+
        //         '</div>'+

        //         '<div class="profiledata-content">'+
        //             '<h4>'+myjson[0].cvFullName+'</h4>'+
        //             '<h5>'+myjson[0].preferredLocation+'</h5>'+
        //             '<h5>Computer Science</h5>'+
        //         '</div>'+

        //         '<div class="profiledata-links">'+

        //             '<select class="selectpicker" data-width="100px">'+
        //                 '<option value="" selected disabled>Action</option>'+
        //                 '<option value="Edit">Edit</option>'+
        //                 '<option value="Preview">Preview</option>'+
        //             '</select>'+

        //             '<button type="button" class="button">Download<i class="fa fa-download" aria-hidden="true"></i>'+
        //             '</button>'+
        //         '</div>'+
        //     '</div>'+
        // '</div> ';
        // }
        // document.getElementById("filter-heading").innerHTML = output;

            }
        });
        $("html").animate({ scrollTop: 0 }, "slow");
        
        $.ajax({
            url: "pageno.php",
            type: "post",
            data: $(this).serialize(),
            dataType: "html",
            success: function(data) {
                alert(data);
                limit = data;
            }
        });
    });
};



$('.popup').click(function(){
$(".modal-parent-container").fadeIn();
var buttonclicked = $(this).attr('id');

pop.appendChild(document.createTextNode(buttonclicked));       
for(var i=0;i<arr.length;i++){

    h6 = document.createElement('H6');   
    var t = document.createTextNode(arr[i]);
    h6.appendChild(t);
    pop.appendChild(h6);
}
});


//for popup box 
$(document).ready(function(){

$(".close-button").click(function(){
    $(".modal-parent-container").fadeOut();
});

var parentcontainer = document.getElementById('mymodal');
var modal = document.getElementById('exampleModalCenter');
var carddropcontainer = document.getElementsByClassName('carddrop-container');


window.onclick = function(event) {
    if (event.target == parentcontainer) {
        $(".modal-parent-container").fadeOut();
        pop.innerHTML = "";
    } 
    if (event.target == modal) {        
    modelbody.innerHTML = "";
    }
}
});

var loadUrl = "admin.php";
$(".resetbutton").click(function(event){
    event.preventDefault();
    location.reload();
});

