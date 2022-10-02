
 (function(){
  var inDexValue;
  
    $('button').click( function() {
      if($('#userCmnt').val().length == ''){
       alert('Please Enter Your Comment');
       return true;
      }
      var userCmnt = $('#userCmnt').val();
      if($('#submit').hasClass('editNow')){
                 
        $('#cmntContr>div.viewCmnt').eq(inDexValue).children('p').html(userCmnt);
        
      }else{      
    
    $('#cmntContr').append("<div class='viewCmnt'><p>"+ userCmnt + "</p><span class='edit'></span><span class='delete'></span></div>");
     }
      $('#userCmnt').val('');
      $(this).removeClass('editNow');
  });
    
  // Delete 
  $('#cmntContr').on('click', '.delete', function(){   
    confirm("Delete Coformation");
    $(this).parent().remove();
  });
  // Edit
  $('#cmntContr').on('click', '.edit', function(){
   
    var toEdit = $(this).prev('p').html();
    //alert(toEdit);
    $('#userCmnt').val(toEdit);
    $('button').addClass('editNow');
    inDexValue = $(this).parent('div.viewCmnt').index();
    
  });
  });














let videoList = document.querySelectorAll('.video-list-container .list');

videoList.forEach(vid =>{
   vid.onclick = () =>{
      videoList.forEach(remove =>{remove.classList.remove('active')});
      vid.classList.add('active');
      let src = vid.querySelector('.list-video').src;
      let title = vid.querySelector('.list-title').innerHTML;
      document.querySelector('.main-video-container .main-video').src = src;
      document.querySelector('.main-video-container .main-video').play();
      document.querySelector('.main-video-container .main-vid-title').innerHTML = title;
   };
});


  