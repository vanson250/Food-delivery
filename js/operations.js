function Ben_way_to_get_element(el){
    return document.getElementById(el);
}

function ajax_changetab_and_send_data(php_file, el, send_data){
    Ben_way_to_get_element(el).innerHTML='Loading ...';
    var hr=new XMLHttpRequest();
    hr.open('POST', php_file, true);
    hr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    hr.onreadystatechange=function(){
        if(hr.readyState==4 && hr.status==200){
            Ben_way_to_get_element(el).innerHTML=hr.responseText;
        }
    };

    hr.send(send_data);
}

function ajax_changetab_and_send_data1(php_file, el, send_data){
    var hr=new XMLHttpRequest();
    hr.open('POST', php_file, true);
    hr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    hr.onreadystatechange=function(){
        if(hr.readyState==4 && hr.status==200){
            Ben_way_to_get_element(el).innerHTML=hr.responseText;
        }
    };

    hr.send(send_data);
}


function ajax_changetab_and_send_data2(php_file, el, send_data){
    Ben_way_to_get_element(el).innerHTML='Searching ...';
    var hr=new XMLHttpRequest();
    hr.open('POST', php_file, true);
    hr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    hr.onreadystatechange=function(){
        if(hr.readyState==4 && hr.status==200){
            Ben_way_to_get_element(el).innerHTML=hr.responseText;
        }
    };

    hr.send(send_data);
}


function mySearchFunction() {
    // Declare variables 
    var input, filter, table, tr, td, i;
    input = document.getElementById("Search");
    filter = input.value.toUpperCase();
    table = document.getElementById("Tb1");
    tr = table.getElementsByTagName("tr");
  
    // Loop through all table rows, and hide those who don't match the search query
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[0];
      if (td) {
        if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      } 
    }
  }


  function mySearchFunction1() {
    // Declare variables 
    var input, filter, table, tr, td, i;
    input = document.getElementById("Search");
    filter = input.value.toUpperCase();
    table = document.getElementById("Tb1");
    tr = table.getElementsByTagName("tr");
  
    // Loop through all table rows, and hide those who don't match the search query
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[1];
      if (td) {
        if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      } 
    }
  }

  function mySearchFunction2() {
    // Declare variables 
    var input, filter, table, tr, td, i;
    input = document.getElementById("Search");
    filter = input.value.toUpperCase();
    table = document.getElementById("Tb1");
    tr = table.getElementsByTagName("tr");
  
    // Loop through all table rows, and hide those who don't match the search query
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[8];
      if (td) {
        if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      } 
    }
  }


function login2(){

    var username1=$('#username1').val();
    var password1=$('#password1').val();
    
    $.ajax({
        type:'POST',
        url:'saves/login1.php',
        data:{
            username1:username1,
            password1:password1,
    
        },
    
        success: function (response){
            $("#msg1").html(response);
        }
    
    });
    
    }

    function create_food(){
        Ben_way_to_get_element('foodmsg1').innerHTML="<p style='color:green;'>Recording...<p>";

        var formdata=new FormData();
        var ajax1=new XMLHttpRequest();
    
        var food_no=Ben_way_to_get_element('food_no').innerHTML;
        var food_name=Ben_way_to_get_element('food_name').value;
        var food_pic=Ben_way_to_get_element('food_pic').files[0];
        var food_mgt_date=Ben_way_to_get_element('food_mgt_date').value;
        var other_info=Ben_way_to_get_element('other_info').value;
    
        formdata.append('food_no',food_no);
        formdata.append('food_name',food_name);
        formdata.append('food_pic',food_pic);
        formdata.append('food_mgt_date',food_mgt_date);
        formdata.append('other_info',other_info);
    
        ajax1.open('POST', 'saves/create_food.php');//third argument can be true or false which is optional
        ajax1.send(formdata);
    
        ajax1.onreadystatechange=function(){
            Ben_way_to_get_element('foodmsg1').innerHTML=ajax1.responseText;
    
        }; 
    
    }

    function view_food(){
        ajax_changetab_and_send_data('view_food.php', 'fooddiv', null);
    }

    function search_food(){
        var search1=Ben_way_to_get_element('search1').value;

        if(search1===""){
            Ben_way_to_get_element('searched1').innerHTML="";
        }
        else{

        var send_data1=
                "&search1="+search1;

    
        ajax_changetab_and_send_data2('saves/search_food.php', 'searched1', send_data1);

    }
    
    }

    function view_s_food(food){

        var food_name2=Ben_way_to_get_element(food).innerHTML;

        var send_data1=
                "&food_name2="+food_name2;

        ajax_changetab_and_send_data('view_s_food.php', 'fooddiv', send_data1);
    }

    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
   
        document.body.innerHTML = printContents;
   
        window.print();
   
        document.body.innerHTML = originalContents;
   }

   function foodupdate(foodid){
    var food_no1=Ben_way_to_get_element(foodid).innerHTML;
    
    
    var send_data1=
            "&food_no1="+food_no1;
  
  
    ajax_changetab_and_send_data('saves/foodupdate.php', 'fooddiv1', send_data1)
  
  }

  function update_food(){
    Ben_way_to_get_element('foodmsg4').innerHTML="<p style='color:green;'>Updating...<p>";
  
    var formdata=new FormData();
    var ajax1=new XMLHttpRequest();
  
    var food_no2=Ben_way_to_get_element('food_no2').innerHTML;
    var food_name2=Ben_way_to_get_element('food_name2').value;
    var food_pic2=Ben_way_to_get_element('food_pic2').files[0];
    var food_mgt_date2=Ben_way_to_get_element('food_mgt_date2').value;
    var other_info2=Ben_way_to_get_element('other_info2').value;
  
    
    
    formdata.append('food_no2',food_no2);
    formdata.append('food_name2',food_name2);
    formdata.append('food_pic2',food_pic2);
    formdata.append('food_mgt_date2',food_mgt_date2);
    formdata.append('other_info2',other_info2);
  
    ajax1.open('POST', 'saves/update_food.php');//third argument can be true or false which is optional
    ajax1.send(formdata);
  
    ajax1.onreadystatechange=function(){
        Ben_way_to_get_element('foodmsg4').innerHTML=ajax1.responseText;
  
    }; 
  
  }

  function fooddelete(foodid) {
    var okToDelete = confirm("Do you really want to delete the food?");
    if (okToDelete)
        {
            var food_no3=Ben_way_to_get_element(foodid).innerHTML;
  
            var send_data1=
            "&food_no3="+food_no3;
  
            ajax_changetab_and_send_data('saves/deletefood.php', 'foodmsg3', send_data1);
  
  
            
        }
    }

    function foodorder(foodid){
        var food_no5=Ben_way_to_get_element(foodid).innerHTML;
        
        
        var send_data1=
                "&food_no5="+food_no5;
      
      
        ajax_changetab_and_send_data('saves/foodorder.php', 'fooddiv', send_data1)
      
      }

      function approverequest(orderid){
        var order_no=Ben_way_to_get_element(orderid).innerHTML;
        
        
        var send_data1=
                "&order_no="+order_no;
      
      
        ajax_changetab_and_send_data('saves/approverequest.php', 'ordermsg3', send_data1);

        location.reload();
      
      }

      function deapproverequest(orderid){
        var order_no=Ben_way_to_get_element(orderid).innerHTML;
        
        
        var send_data1=
                "&order_no="+order_no;
      
      
        ajax_changetab_and_send_data('saves/deapproverequest.php', 'ordermsg3', send_data1);

        location.reload();
      
      }

      function deleterequest(orderid){
        var order_no=Ben_way_to_get_element(orderid).innerHTML;
        
        
        var send_data1=
                "&order_no="+order_no;
      
      
        ajax_changetab_and_send_data('saves/deleterequest.php', 'ordermsg3', send_data1);

        location.reload();
      
      }

      function redeleterequest(orderid){
        var order_no=Ben_way_to_get_element(orderid).innerHTML;
        
        
        var send_data1=
                "&order_no="+order_no;
      
      
        ajax_changetab_and_send_data('saves/redeleterequest.php', 'ordermsg3', send_data1);

        location.reload();
      
      }