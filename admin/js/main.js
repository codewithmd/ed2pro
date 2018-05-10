//Validate Email Function 

function validateEmail(email) {
  var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
  if (filter.test(email)) {
      return true;
  }
  else {
      return false;
  }
}


// ADD USER FUNCTION
 function addUser(e){
   e.preventDefault();
   let email = $('#email').val();
   let pwd = $('#pwd').val();

   if(email == '' || pwd == ''){
      $('#responseUser').html('<spna class="text-danger">All Fields Are Required</span>');
      $('#email').focus();
   } else if(!validateEmail(email)){
      $('#responseUser').html('<spna class="text-danger">Invalid Email</span>');
      $('#email').focus();
   }else {
        $.ajax({
          url: './includes/adduser.process.php',
          method: "POST",
          data: $('#addUserForm').serialize(),
          beforeSend: function(){
            $('#addUser').text('Sending..');
          }
          
      })
      .done(function(data){
        $('form').trigger("reset");
        $('#responseUser').html('<spna class="text-success">'+data+'</span>');
        setTimeout(function(){
          $('#responseUser').fadeOut('slow');
          $('#addUser').attr('data-dismiss', 'modal');
        },3000);
      })
      .fail(function(){
        console.log('Error!');
      })
   } 
   return false;
 } // ADD USER FUNCTION END

// ADD SUBJECT FUNCTION 
function addSubject(e){
  e.preventDefault();
  

  let subject = $('#subject').val();

  if(subject == ''){
     $('#responseSubject').html('<spna class="text-danger">Enter a Subject to Add</span>');
     $('#subject').focus();
  } else {
       $.ajax({
         url: './includes/addsubject.process.php',
         method: "POST",
         data: $('#addSubjectForm').serialize(),
         beforeSend: function(){
           $('#addSubject').text('Sending..');
         }
         
     })
     .done(function(data){
       $('form').trigger("reset");
       $('#responseSubject').html('<spna class="text-success">'+ data +'</span>');
       setTimeout(function(){
         $('#responseSubject').fadeOut('slow');
       },4000);
     })
     .fail(function(){
       console.log('Error!');
     })
  } 
  return false;
} // ADD SUBJECT FUNCTION END

// ADD QUESTION FUNCTION
function addQuestion(e){
  e.preventDefault();
  let subjectID = $('#sub').val();
  let question = $('#quetitle').val();
  let option1 = $('#opt1').val();
  let option2 = $('#opt2').val();
  let option3 = $('#opt3').val();
  let option4 = $('#opt4').val();
  let answer = $('#answer').val();
  let answerdesc = $('#answerdesc').val();


  if(subjectID == '' || question == '' || option1 == '' || option2 == '' || option3 == '' || option4 == '' || answer == '' || answerdesc == ''){
    $('#responseQuestion').html('<spna class="text-danger">All Fields Are Required</span>');
     console.log('FOCUS');
     return false;
  } else {
    $.ajax({
      url: './includes/addquestion.process.php',
      method: "POST",
      data: $('#addQuestionForm').serialize(),
      beforeSend: function(){
        $('#addQuestion').text('Sending..');
      }
      
  })
  .done(function(data){
    $('form').trigger("reset");
    $('#responseQuestion').html('<spna class="text-success">'+ data +'</span>');
    setTimeout(function(){
      $('#responseQuestion').fadeOut('slow');
    },4000);
  })
  .fail(function(){
    console.log('Error!');
  })
  }
  
  return false;
} // ADD QUESTION FUNCTION END

// ADD VIDEO FUNCTION
function addVideo(e){
  e.preventDefault();
  let subjectID = $('#videosub').val();
  let title = $('#videoname').val();
  let link = $('#videolink').val();

  if(subjectID == '' || title == '' || link == ''){
     $('#responseVideo').html('<spna class="text-danger">All Fields Are Required</span>');
     
  } else {
       $.ajax({
         url: './includes/addvideo.process.php',
         method: "POST",
         data: $('#addVideoForm').serialize(),
         beforeSend: function(){
           $('#addVideo').text('Sending..');
         }
         
     })
     .done(function(data){
       $('form').trigger("reset");
       $('#responseVideo').html('<spna class="text-success">'+data+'</span>');
       setTimeout(function(){
         $('#responseVideo').fadeOut('slow');
       },3000);
     })
     .fail(function(){
       console.log('Error!');
     })
  } 
  return false;
}  // ADD VIDEO FUNCTION END






$(document).ready(function(){
  //Event Listeners
  $('#addUser').on('click', addUser);
  $('#addSubject').on('click', addSubject);
  $('#addQuestion').on('click', addQuestion);
  $('#addVideo').on('click', addVideo);

}); //Document Ready Function END


/*
  -------------------
  -- Dynamic Function For Axax Call
  -------------------
 
// AJAX FORM SUBMIT FUNCTION
$('form.ajax').on('submit', function(e){
  // e.preventDefault();
  var x = [];
    var that = $(this),
        url = that.attr('action'),
        type = that.attr('method'),
        data = {};

    that.find('[name]').each(function(index, value){
      var that = $(this),
          name = that.attr('name'),
          value = that.val();

      
      console.log(value);
      if(value != ''){
        data[name] = value;
        
      } else {
        console.log('Value Is NUll');  
        $('#response').html('<spna class="text-danger">All Fields Are Required</span>');
        return false;          
      }
      
    });

    $.each(data, function(i, val) {
        x.push(val);
    });

    if(x.length > 0){
      $.ajax({
        url: url,
        type: type,
        data: data,
        success: function(data){
          $('form').trigger("reset");
          console.log('dd');
          $('#response').html('<spna class="text-success">'+ data +'</span>');
          setTimeout(function(){
            $('#response').fadeOut('slow');
          },3000);
          
        }
      });
    } 
    return false;
   

    
 });


*/
