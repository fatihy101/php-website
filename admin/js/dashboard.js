$(function () {
  $("#client-forms").on('click', function () {
    var el = $(this)
    $.ajax({
      type: "POST",
      url: "tabs/clientForms.php",
      dataType: "html",
      success: function (response) {
        $("#main").empty()
        $("#main").html(response)
        $(".side-button").slideDown(1600)
        el.slideUp(800)
      }
    })
    
  })

  $("#new-post").on('click', function () {
    var el = $(this)
    $("#main").empty()
    $("#main").load("tabs/addNewPost.php")

    $(".side-button").slideDown(1600)
    el.slideUp(800)


  })

  $("#old-posts").on('click', function () {
    var el = $(this)
    $("#main").empty()
    $("#main").load("tabs/showPosts.php")
    $(".side-button").slideDown(1600)
    el.slideUp(800) 
  }) 

  $("#gallery").on('click', function () {
    var el = $(this)
    $("#main").empty()
    $("#main").load("tabs/galleryView.php")
    $(".side-button").slideDown(1600)
    el.slideUp(800)
  })

  $("#add-photo").on('click', function () {
    var el = $(this)
    $("#main").empty()
    $("#main").load("tabs/addPhoto.php")
    $(".side-button").slideDown(1600)
    el.slideUp(800)
  })

  $("#add-venue").on('click', function () {
    var el = $(this)
    $("#main").empty()
    $("#main").load("tabs/addVenue.php")
    $(".side-button").slideDown(1600)
    el.slideUp(800)
  })

  $("#list-venues").on('click', function () {
    var el = $(this)
    $("#main").empty()
    $("#main").load("tabs/listVenues.php")
    $(".side-button").slideDown(1600)
    el.slideUp(800)
  })


  $("#edit-static").on('click', function () {
    var el = $(this)
    $("#main").empty()
    $("#main").load("tabs/editStaticPhoto.php")
    $(".side-button").slideDown(1600)
    el.slideUp(800)
  })

  $("#edit-about-us").on('click', function () {
    var el = $(this)
    $("#main").empty()
    $("#main").load("tabs/editAboutUs.php")
    $(".side-button").slideDown(1600)
    el.slideUp(800)
  })

  $("#edit-social-media-links").on('click', function () {
    var el = $(this)
    $("#main").empty()
    $("#main").load("tabs/socialMediaLinks.php")
    $(".side-button").slideDown(1600)
    el.slideUp(800)
  })

  $("#update-navbar").on('click', function () {
    var el = $(this)
    $("#main").empty()
    $("#main").load("tabs/updateNavbar.php")
    $(".side-button").slideDown(1600)
    el.slideUp(800)
  })

})