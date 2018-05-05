$(document).ready(function(){
  //Event Listeners
  $('#addUser').on('click', addUser);
  $('#addSubject').on('click', addSubject);












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
 }

 
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
}

}); //Document Ready Function END






//Validate Email Function 

function validateEmail(sEmail) {
  var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
  if (filter.test(sEmail)) {
      return true;
  }
  else {
      return false;
  }
}



/*
  -------------------
  -- Dynamic Function For Axax Call
  -------------------
 // AJAX FORM SUBMIT FUNCTION
 $('form.ajax').on('submit', function(e){
  e.preventDefault();
    var that = $(this),
        url = that.attr('action'),
        typr = that.attr('method'),
        data = {};

    that.find('[name]').each(function(index, value){
      var that = $(this),
          name = that.attr('name'),
          value = that.val();

      data[name] = value;
    });

    $.ajax({
      url: url,
      type: type,
      data: data,
      success: function(data){
        console.log(data);
      }
    });

    return false;
 });

*/