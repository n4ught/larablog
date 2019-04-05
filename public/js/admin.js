$(document).ready(function () {
  
//   $("#sidebar").mCustomScrollbar({
//       theme: "minimal"
//   });
  
  // for the sidebar
  $('#sidebarCollapse').on('click', function () {
      $('#sidebar, #content').toggleClass('active');
      $('.collapse.in').toggleClass('in');
      $('a[aria-expanded=true]').attr('aria-expanded', 'false');
  });
  
  // When delete button is clicked
  $('.delete-post-btn, .delete-category-btn').on('click', function(e){  
    
    var confirmBox = confirm("Are you sure, you want to delete this record?");
    
    if (confirmBox === false){
        e.preventDefault();
    }
    
  });
  
  var catTitle = $('.category-title');
  var catSlug = $('.category-slug');
  var slug;
  var editedTxtBox = false;
  
  // Generate a slug based on category's title.
  catTitle.on('keyup', function(){
    
    if(editedTxtBox === false){
      slug = catSlug.val(catTitle.val().split(" ").join("-").toLowerCase());
    }
    
  });
  
  // Check if the contents of the slug textbox has been edited.
  // if edited, it won't imitate the text in the category title txtbox.
  catSlug.on('keyup', function(){
    
    if(editedTxtBox !== true){
      editedTxtBox = true;   
    }
    
  });
  
  
});