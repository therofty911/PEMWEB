const flashData = $('.flash-data').data('flashdata');

if(flashData){
    Swal.fire({
        icon: 'error',
        title: 'Oops...' + flashData,
        text: 'Something went wrong!',
        footer: '<a href="">Why do I have this issue?</a>'
      });
}