
function valid_email(conatct_email){
          
          var pattern = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
          if(conatct_email==""){
            $("#email_valid").removeClass('fa fa-check-circle-o right-input');
            $("#email_valid").addClass('fa fa-times-circle-o wrong-input')
              return false;
                
         }
         if(!pattern.test(conatct_email)){
            $("#email_valid").removeClass('fa fa-check-circle-o right-input');
            $("#email_valid").addClass('fa fa-times-circle-o wrong-input');
            return false;
         }else{
            $("#email_valid").removeClass('fa fa-times-circle-o wrong-input');
            $("#email_valid").addClass('fa fa-check-circle-o right-input');
            return true;
         }
}

$("#email").change(function(){
         var email = $("#email").val();
         valid_email(email);
});

function validate_topic(topic){
        if(topic=="")
        {
            //alert('Email must be filled out');
            $("#topic_valid").removeClass('fa fa-check-circle-o right-input');
            $("#topic_valid").addClass('fa fa-times-circle-o wrong-input')
            return false;
                
        }else{
            $("#topic_valid").removeClass('fa fa-times-circle-o wrong-input');
            $("#topic_valid").addClass('fa fa-check-circle-o right-input');
            return true;
        }
}

$("#topic").change(function(){
    var topic = $(this).val();
    validate_topic(topic);
        
});

function validate_subject(subject) 
{
        if(subject==""){

          $("#stu_subject_valid").removeClass('fa fa-check-circle-o right-input');
          $("#stu_subject_valid").addClass('fa fa-times-circle-o wrong-input');
          return false;
                
        }else{
           $("#stu_subject_valid").removeClass('fa fa-times-circle-o wrong-input');
           $("#stu_subject_valid").addClass('fa fa-check-circle-o right-input');
           return true;
        }
}

$("#subject").change(function(){
    var subject = $(this).val();
    validate_subject(subject);
        
});

 function validate_LevelStudy(LevelStudy){
        if(LevelStudy=="")
        {
            //alert('Email must be filled out');
            $("#LevelStudy_valid").removeClass('fa fa-check-circle-o right-input');
            $("#LevelStudy_valid").addClass('fa fa-times-circle-o wrong-input');
            return false;
                
        }else{
            $("#LevelStudy_valid").removeClass('fa fa-times-circle-o wrong-input');
            $("#LevelStudy_valid").addClass('fa fa-check-circle-o right-input');
            return true;
        }
}
$("#LevelStudy").change(function(){
    var LevelStudy = $(this).val();
    validate_LevelStudy(LevelStudy);
        
});

function validate_refrencing(refrencing){
        if(refrencing==""){
            //alert('Email must be filled out');
            $("#refrencing_valid").removeClass('fa fa-check-circle-o right-input');
            $("#refrencing_valid").addClass('fa fa-times-circle-o wrong-input');
            return false;
                
        }else{
            $("#refrencing_valid").removeClass('fa fa-times-circle-o wrong-input');
            $("#refrencing_valid").addClass('fa fa-check-circle-o right-input');
            return true;
        }
}
$("#refrencing").change(function(){
    var refrencing = $(this).val();
    validate_refrencing(refrencing);
        
});

function validate_deadline(deadline){
        
       
        if(deadline==""){
           
            $("#dead_line_valid").removeClass('fa fa-check-circle-o right-input');
            $("#dead_line_valid").addClass('fa fa-times-circle-o wrong-input');
            return false;
                
        }else{
            $("#dead_line_valid").removeClass('fa fa-times-circle-o wrong-input');
            $("#dead_line_valid").addClass('fa fa-check-circle-o right-input');
            return true;
        }
}




$("#deadline").change(function(){
    var deadline     = $("#deadline").val();
    //alert(deadline);
    validate_deadline(deadline);
        
});



$("#helpForm").submit(function(){
       
    if(!valid_email($("#email").val())){
        $('#error_missing_filed').html('Check Missing Fields');
        $('#error_missing_filed').css({"color":"red","font-size":"18px"});
        $('#error_missing_filed').fadeIn();
        $('#error_missing_filed').fadeOut(20000);
        return false;
    }
    if(!validate_topic($("#topic").val())){
        $('#error_missing_filed').html('Check Missing Fields');
        $('#error_missing_filed').css({"color":"red","font-size":"18px"});
        $('#error_missing_filed').fadeIn();
        $('#error_missing_filed').fadeOut(20000);
         return false;
    }
    if(!validate_deadline($("#deadline").val(),$("#deadlinetime").val())){
        $('#error_missing_filed').html('Check Missing Fields');
        $('#error_missing_filed').css({"color":"red","font-size":"18px"});
        $('#error_missing_filed').fadeIn();
        $('#error_missing_filed').fadeOut(20000);
        return false;
    }
     if(!validate_deadline($("#datepicker").val(),$("#deadlinetime").val())){
        $('#error_missing_filed').html('Check Missing Fields');
        $('#error_missing_filed').css({"color":"red","font-size":"18px"});
        $('#error_missing_filed').fadeIn();
        $('#error_missing_filed').fadeOut(20000);
        return false;
    }
   $(".btn-s").html('<i class="fa fa-circle-o-notch fa-spin" style="font-size:30px; color:green;"></i>');
     

});

$("#orderNowForm").submit(function(){
      
    if(!valid_email($("#email").val())){
        $('#error_missing_filed').html('Check Missing Fields');
        $('#error_missing_filed').css({"color":"red","font-size":"18px"});
        $('#error_missing_filed').fadeIn();
        $('#error_missing_filed').fadeOut(20000);
        $("#list_all").click();
        return false;
    }
    if(!validate_topic($("#topic").val())){
         $('#error_missing_filed').html('Check Missing Fields');
        $('#error_missing_filed').css({"color":"red","font-size":"18px"});
        $('#error_missing_filed').fadeIn();
        $('#error_missing_filed').fadeOut(20000);
         $("#list_all").click();
         return false;
    }
    if(!validate_deadline($("#deadline").val(),$("#deadlinetime").val())){
        $('#error_missing_filed').html('Check Missing Fields');
        $('#error_missing_filed').css({"color":"red","font-size":"18px"});
        $('#error_missing_filed').fadeIn();
        $('#error_missing_filed').fadeOut(20000);
        $("#list_all").click();
        return false;
    }

    $(".btn-s").html('<i class="fa fa-circle-o-notch fa-spin" style="font-size:30px; color:green;"></i>');

    if(!validate_subject($("#subject").val())){
         $("#list_php").click();
         return false;
    }

    if(!validate_LevelStudy($("#LevelStudy").val())){
        $("#list_php").click();
         return false;
    }

    if(!validate_refrencing($("#refrencing").val())){
        $("#list_php").click();
         return false;
    }

    if(!validate_ph_number($("#ph_number").val())){
        $("#list_php").click();
         return false;
    }
   
});

$("#pre_order").submit(function(){

   $(".btn-s").html('<i class="fa fa-circle-o-notch fa-spin" style="font-size:30px; color:green;"></i>');

});



 function isNumberKey(evt){  <!--Function to accept only numeric values-->
   //var e = evt || window.event;
var charCode = (evt.which) ? evt.which : evt.keyCode
   if (charCode != 46 && charCode > 31 
&& (charCode < 48 || charCode > 57))
       return false;
       return true;
}

function clicktocontinue(){
     if(!valid_email($("#email").val())){
        return false;
    }
    if(!validate_topic($("#topic").val())){
         return false;
    }
    if(!validate_deadline($("#deadline").val(),$("#deadlinetime").val())){
        return false;
    }
    $("#list_php").click();
}


  // if (datefield.type!="date"){ 
        var user_time    = $('#user_time').val();
        var dt = new Date();
        var time = dt.getHours() + ":" + dt.getMinutes();
        var curtDate = dt.getDate();
        //get cuurent date
        var dd = dt.getDate();
        var mm = dt.getMonth()+1; //January is 0!
        var yyyy = dt.getFullYear();

        if(dd<10) {
            dd = '0'+dd
        } 

        if(mm<10) {
            mm = '0'+mm
        } 

        //curtDate = yyyy + '-' + mm + '-' + dd;
        curtDate = dd + '-' + mm + '-' + yyyy;
        // get current date
       jQuery(function($){ 
          $('#deadline').datepicker({
          dateFormat: 'dd-mm-yy',
          numberOfMonths: 1,
          minDate:0
           });
           
           $('#deadlinetime').val('23:45');

          $('#deadline').change(function(){
           
             $('#deadlinetime').timepicker();
             $('#deadlinetime').val('23:45');
             var odrDate  = $('#deadline').val();
             if(odrDate != curtDate){
               $("#dead_line_valid").removeClass('fa fa-times-circle-o wrong-input');
               $("#dead_line_valid").addClass('fa fa-check-circle-o right-input');
               $('#error_deadline').html("");
               return true;  
             }
             
          });
      });

  $('#deadlinetime').change(function(){
        var deadlinetime = $('#deadlinetime').val();
        $('#user_time').val(deadlinetime);
        

        var clientDatee    = $('#clientDatee').val();
        var deadline       = $('#deadline').val();
        var clientCurDatee = clientDatee.split(" ");
        /*alert(user_time);
        alert(time);*/
        if(deadline == curtDate && user_time < time){
           
           $("#dead_line_valid").removeClass('fa fa-check-circle-o right-input');
           $("#dead_line_valid").addClass('fa fa-times-circle-o wrong-input');
           $('#error_deadline').html("Please select future date & time only");
           $('#error_deadline').css({"color":"red"});
           $('#deadlinetime').val('');
           return false;
        } else if(deadline != curtDate) {
           $("#dead_line_valid").removeClass('fa fa-times-circle-o wrong-input');
           $("#dead_line_valid").addClass('fa fa-check-circle-o right-input');
           $('#error_deadline').html("");
           return true;
        } else {
           $("#dead_line_valid").removeClass('fa fa-times-circle-o wrong-input');
           $("#dead_line_valid").addClass('fa fa-check-circle-o right-input');
           $('#error_deadline').html("");
           return true;
        }
  });
  // }
  // if (datefield.type!="date"){ 
$(document).ready(function(){ 
 function ShowLocalDate(){
    var dNow = new Date();
    var localdate= (dNow.getDate() + '-' + parseInt(dNow.getMonth()+1)) + '-' + dNow.getFullYear() + ' ' + dNow.getHours() + ':' + parseInt(dNow.getMinutes());
    $('#clientDate').val(localdate);
    $('#clientDate1').val(localdate);
}

ShowLocalDate();
        var dt = new Date();
        var time = dt.getHours() + ":" + dt.getMinutes();
        var curtDate = dt.getDate();
        //get cuurent date
        var dd = dt.getDate();
        var mm = dt.getMonth()+1; //January is 0!
        var yyyy = dt.getFullYear();

        if(dd<10) {
            dd = '0'+dd
        } 

        if(mm<10) {
            mm = '0'+mm
        } 

        
        //curtDate = yyyy + '-' + mm + '-' + dd;
        curtDate = dd + '-' + mm + '-' + yyyy;
        // get current date
$('#deadlinetime1').val('23:45');
   $('#deadline1').change(function()
          {
             $('#deadlinetime1').timepicker();
             $('#deadlinetime1').val('23:45');
            
             var odrDate  = $('#deadline1').val();
             if(odrDate != curtDate)
             {
               $("#dead_line_valid").removeClass('fa fa-times-circle-o wrong-input');
               $("#dead_line_valid").addClass('fa fa-check-circle-o right-input');
               $('#error_deadline1').html("");
               return true;  
             }
          });
$('#deadlinetime1').change(function(){
        var deadlinetime = $('#deadlinetime1').val();
        $('#user_time1').val(deadlinetime);
        var user_time    = $('#user_time1').val();
        

        var clientDatee    = $('#clientDate1').val();
        var deadline1      = $('#deadline1').val();
        var clientCurDatee = clientDatee.split(" ");
        /*alert(user_time);
        alert(time);*/
        if(deadline1 == curtDate && user_time < time)
        {
           
           $("#dead_line_valid").removeClass('fa fa-check-circle-o right-input');
           $("#dead_line_valid").addClass('fa fa-times-circle-o wrong-input');
           $('#error_deadline1').html("Please select future date & time only");
           $('#error_deadline1').css({"color":"red"});
           $('#deadlinetime1').val('');
           return false;
        }
        else if(deadline1 != curtDate)
        {
           $("#dead_line_valid").removeClass('fa fa-times-circle-o wrong-input');
           $("#dead_line_valid").addClass('fa fa-check-circle-o right-input');
           $('#error_deadline1').html("");
           return true;
        } else {
           $("#dead_line_valid").removeClass('fa fa-times-circle-o wrong-input');
           $("#dead_line_valid").addClass('fa fa-check-circle-o right-input');
           $('#error_deadline1').html("");
           return true;
        }
 });
});
  // }
  // if (datefield.type!="date"){ 
$(document).ready(function(){ 
 function ShowLocalDate(){
    var dNow = new Date();
    var localdate= (dNow.getDate() + '-' + parseInt(dNow.getMonth()+1)) + '-' + dNow.getFullYear() + ' ' + dNow.getHours() + ':' + parseInt(dNow.getMinutes());
    $('#clientDate').val(localdate);
    $('#clientDate1').val(localdate);
}

ShowLocalDate();
$('#deadline1').datepicker({
                dateFormat: 'dd-mm-yy',
                numberOfMonths: 1,
                minDate:0
           });
        var dt = new Date();
        var time = dt.getHours() + ":" + dt.getMinutes();
        var curtDate = dt.getDate();
        //get cuurent date
        var dd = dt.getDate();
        var mm = dt.getMonth()+1; //January is 0!
        var yyyy = dt.getFullYear();

        if(dd<10) { dd = '0'+dd } 
        if(mm<10) { mm = '0'+mm } 
        //curtDate = yyyy + '-' + mm + '-' + dd;
        curtDate = dd + '-' + mm + '-' + yyyy;

   $('#deadline1').change(function()
          {
             $('#deadlinetime1').timepicker();
             $('#deadlinetime1').val('23:45');

             var odrDate  = $('#deadline1').val();
             if(odrDate != curtDate)
             {
               $("#dead_line_valid1").removeClass('fa fa-times-circle-o wrong-input');
               $("#dead_line_valid1").addClass('fa fa-check-circle-o right-input');
               $('#error_deadline1').html("");
               return true;
             }
          });
$('#deadlinetime1').change(function(){
        var deadlinetime = $('#deadlinetime1').val();
        $('#user_time1').val(deadlinetime);
        var user_time    = $('#user_time1').val();
        // get current date

        var clientDatee    = $('#clientDate1').val();
        var clientCurDatee = clientDatee.split(" ");
        /*alert(user_time);
        alert(time);*/
        if(clientCurDatee[0]==curtDate && user_time < time)
        {
           
           $("#dead_line_valid1").removeClass('fa fa-check-circle-o right-input');
           $("#dead_line_valid1").addClass('fa fa-times-circle-o wrong-input');
           $('#error_deadline1').html("Please select future date & time only");
           $('#error_deadline1').css({"color":"red"});
           $('#deadlinetime1').val('');
           return false;
        }
        else
        {
           $("#dead_line_valid1").removeClass('fa fa-times-circle-o wrong-input');
           $("#dead_line_valid1").addClass('fa fa-check-circle-o right-input');
           $('#error_deadline1').html("");
           return true;
        }

    });
});
  // }

  // if (datefield.type!="date"){ 
$(function() {       
     function ShowLocalDate(){
        var dNow = new Date();
        var localdate= (dNow.getMonth()+1) + '/' + dNow.getDate() + '/' + dNow.getFullYear() + ' ' + dNow.getHours() + ':' + dNow.getMinutes();
        $('#clientDate').val(localdate);
    }
   ShowLocalDate();
});
  // }

$(document).ready(function(){
    $(".login").click(function(){
        $(".login-btn").toggle(500);
    });
});
    // Function to accept only alphabets start     
    function ValidateAlpha(evt)
    {
        var keyCode = (evt.which) ? evt.which : evt.keyCode
        if ((keyCode < 65 || keyCode > 90) && (keyCode < 97 || keyCode > 123) && keyCode != 32)
         
        return false;
            return true;
    }
 // Function to accept only alphabets end
//function accept only integer start
 function isNumberKey(evt)
    {
        var charCode = (evt.which) ? evt.which : event.keyCode;
        if (charCode == 46 && charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
    
         return true;
    }
    
    function isNumberKey(evt,id)
   {
    try{
        var charCode = (evt.which) ? evt.which : event.keyCode;
  
        if(charCode==46){
            var txt=document.getElementById(id).value;
            if(!(txt.indexOf(".") > -1)){
    
                return false;
            }
        }
        if (charCode > 31 && (charCode < 48 || charCode > 57) )
            return false;

        return true;
    }catch(w){
        //alert(w);
    }
}
//function accept only integer end
      $(document).scroll(function() {
      var y = $(this).scrollTop();
      if($(window).width() >= 767){
         if (y > 500) {
        $('#navbarCollapse1').show();
        $('.site-top').hide();
      } else if (y < 100) {
        $('#navbarCollapse1').hide();
        $('.site-top').show();
      } else {
        $('#navbarCollapse1').hide();
      
      }
    }else if($(window).width() <= 767){
      $('#navbarCollapse1').show();
    }
  });
    
$(document).ready(function(){
    $(".cd-dropdown").mouseout(function(){ 
        $(".cd-dropdown").removeClass("dropdown-is-active");
        $(".cd-dropdown-trigger").removeClass("dropdown-is-active");
    });
     $(".cd-dropdown").mouseover(function(){
        $(".cd-dropdown").addClass("dropdown-is-active");
    });
    
});

  $(function(){
    $(".online p").each(function(i){
      len=$(this).text().length;
      if(len>222)
      {
        $(this).text($(this).text().substr(0,222)+'...');
      }
    });
    $(".instant p").each(function(i){
      len=$(this).text().length;
      if(len>222)
      {
        $(this).text($(this).text().substr(0,222)+'...');
      }
    });
    $(".dissertation p").each(function(i){
      len=$(this).text().length;
      if(len>222)
      {
        $(this).text($(this).text().substr(0,222)+'...');
      }
    });
    $(".thesis p").each(function(i){
      len=$(this).text().length;
      if(len>222)
      {
        $(this).text($(this).text().substr(0,222)+'...');
      }
    });
});

$(document).ready(function() {
    $('.cd-close').on('click', function(e) { 
        $('.cd-dropdown').remove(); 
    });
 
});

 // testimonial slider

   var owl = $('.faculaties-slider');
owl.owlCarousel({
   items:4,
    loop:true,
    margin:10,
    autoplay:1000,
    dots:false,
    arrow:false,
    autoplayHoverPause:false,
     responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 4
                    }
                }
    //autoplayTimeout:5000,
    
});

 var owl = $('.welcome-slider');

owl.owlCarousel({

   items:1,

    loop:true,

    autoplay:1000,

    dots:true,

    arrow:true,

    autoplayHoverPause:false,

     responsive: { 0: {
                        items: 1
                    },
                  600: {
                       items: 1
                    },
                    1000: {
                       items: 1
                   }

                }
    //autoplayTimeout:5000,

});

    jQuery(document).ready(function($) {
      jQuery('.stellarnav').stellarNav({
        theme: 'light'
      });
    });
  
    //end responsive menu js
$(document).ready(function(){
    $('#qty_input').prop('disabled', true);
    $('#plus-btn').click(function(){
      $('#qty_input').val(parseInt($('#qty_input').val()) + 1 );
          });
        $('#minus-btn').click(function(){
      $('#qty_input').val(parseInt($('#qty_input').val()) - 1 );
      if ($('#qty_input').val() == 0) {
      $('#qty_input').val(1);
    }

          });
 });

var myModalAdd = setInterval(frame , 7000);
  function frame() {
    $('#myPopUpModal_btn').click(); clearInterval(myModalAdd);
  }

  $(function(){
      $('#popup_deadline').datepicker({
                dateFormat: 'dd-mm-yy',
                numberOfMonths: 1,
                minDate:0
           });
  });

$(window).scroll(function(){
    $('.demo').css({'display':'block'});
    $('.bg-cover').css({'display':'block'});
});

$(document).ready(function(){

$('body').mouseleave(function(){
      var onetime = $(".onetime").val();
      if(onetime == '0'){
        $(".onetime").val('1');
        $('#myModal').modal('show');
      }
});
});

//fileupload script start
 $("#upload").change(function(){

    var size=0;
    var ext="";
var fileName = $(this)[0].files;
var count=fileName.length;
var fileExtension = ['pdf', 'txt', 'docx', 'doc','ppt','pptx','xls','xlsx','csv','jpeg','jpg','bmp','png'];

if(parseInt(count)<=1){
  size = this.files[0].size;
  if ($.inArray(this.files[0].name.split('.').pop().toLowerCase(), fileExtension) == -1) {
     alert("Only "+fileExtension.join(', ')+" formats are allowed. " +this.files[0].name+ " is an invalid file format.");
       $(this).val('');
       return false;
    }
} else{
  for(i =0; i<count-1;i++);
  {
    size += this.files[i].size;
    if ($.inArray(this.files[i].name.split('.').pop().toLowerCase(), fileExtension) == -1) {
     alert("Only "+fileExtension.join(', ')+" formats are allowed. " +this.files[i].name+ " is an invalid file format.");
       $(this).val('');
       return false;
    } } }

if(count>4){
  alert("You can only upload a maximum of 4 files");
  $(this).val('');
  return false;

}
else if(size>20000000){
  alert("Maximum file size limit is 20 MB.");
  $(this).val('');
  return false;
}

});

$("#upload1").change(function(){

    var size=0;
    var ext="";
var fileName = $(this)[0].files;
var count=fileName.length;
var fileExtension = ['pdf', 'txt', 'docx', 'doc','ppt','pptx','xls','xlsx','csv','jpeg','jpg','bmp','png'];

if(parseInt(count)<=1)
{
  size = this.files[0].size;
  if ($.inArray(this.files[0].name.split('.').pop().toLowerCase(), fileExtension) == -1) {
     alert("Only "+fileExtension.join(', ')+" formats are allowed. " +this.files[0].name+ " is an invalid file format.");
       $(this).val('');
       return false;
    }
}
else{
  for(i =0; i<count-1;i++){
    size += this.files[i].size;
    if ($.inArray(this.files[i].name.split('.').pop().toLowerCase(), fileExtension) == -1) {
     alert("Only "+fileExtension.join(', ')+" formats are allowed. " +this.files[i].name+ " is an invalid file format.");
       $(this).val('');
       return false;
    }
  }
}

if(count>4){
  alert("You can only upload a maximum of 4 files");
  $(this).val('');
  return false;

} else if(size>20000000){
  alert("Maximum file size limit is 20 MB.");
  $(this).val('');
  return false;
}

});
  
  $("#upload2").change(function(){

    var size=0;
    var ext="";
var fileName = $(this)[0].files;
var count=fileName.length;
var fileExtension = ['pdf', 'txt', 'docx', 'doc','ppt','pptx','xls','xlsx','csv','jpeg','jpg','bmp','png'];

if(parseInt(count)<=1)
{
  size = this.files[0].size;
  if ($.inArray(this.files[0].name.split('.').pop().toLowerCase(), fileExtension) == -1) {
     alert("Only "+fileExtension.join(', ')+" formats are allowed. " +this.files[0].name+ " is an invalid file format.");
       $(this).val('');
       return false;
    }
}
else{
  for(i =0; i<count-1;i++);
  {
    size += this.files[i].size;
    if ($.inArray(this.files[i].name.split('.').pop().toLowerCase(), fileExtension) == -1) {
     alert("Only "+fileExtension.join(', ')+" formats are allowed. " +this.files[i].name+ " is an invalid file format.");
       $(this).val('');
       return false;
    }
  }
} 

if(count>4)
{
  alert("You can only upload a maximum of 4 files");
  $(this).val('');
  return false;

}
else if(size>20000000)
{
  alert("Maximum file size limit is 20 MB.");
  $(this).val('');
  return false;
}
});